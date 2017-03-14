<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Entry;
use AppBundle\Form\EntryType;

/**
 * Entry controller.
 *
 */
class EntryController extends Controller
{
    /**
     * Lists all Entry entities.
     *
     */
    public function indexAction(Request $request, $page = 1)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM AppBundle:Entry a ORDER BY a.creationDate DESC";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $maximumRecordsPerPage = 3;
        $entries = $paginator->paginate($query, $request->query->getInt('page', $page), $maximumRecordsPerPage);

        $entries->setUsedRoute('entry_index');

        // parameters to template
        return $this->render('AppBundle:entry:index.html.twig', array('entries' => $entries));
    }

    public function entriesByUserAction($username)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('AppBundle:User')->findOneBy(array('username' => $username));

        if (!$user) {
            return $this->render('AppBundle:entry:entries_by_user.html.twig', array(
                'entries' => array(),
                'username' => $username,
                'timeline' => array(),
                'hiddenTweets' => array()
            ));
        }

        $entries = $em->getRepository('AppBundle:Entry')->findBy(array(
            'user' => $user->getId()
        ));

        try {
            $token = $this->twitterAuthentication();
            $timeline = $this->getTimeline($token, $user->getTwitter());
            $hiddenTweetsRecords = $user->getHiddenTweets();

            $hiddenTweets = array();
            foreach ($hiddenTweetsRecords as $hiddenTweet) {
                $hiddenTweets[] = $hiddenTweet->getTweetId();
            }

        } catch (\Exception $e) {
            $timeline = $hiddenTweets = array();
        }

        return $this->render('AppBundle:entry:entries_by_user.html.twig', array(
            'entries' => $entries,
            'username' => $username,
            'timeline' => $timeline,
            'hiddenTweets' => $hiddenTweets
        ));
    }

    /**
     * Creates a new Entry entity.
     *
     */
    public function newAction(Request $request)
    {
        $entry = new Entry();
        $form = $this->createForm('AppBundle\Form\EntryType', $entry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entry);
            $em->flush();

            return $this->redirectToRoute('entry_show', array('id' => $entry->getId()));
        }

        return $this->render('AppBundle:entry:new.html.twig', array(
            'entry' => $entry,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Entry entity.
     *
     */
    public function showAction(Entry $entry)
    {
        $deleteForm = $this->createDeleteForm($entry);

        return $this->render('AppBundle:entry:show.html.twig', array(
            'entry' => $entry,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Entry entity.
     *
     */
    public function editAction(Request $request, Entry $entry)
    {
        $deleteForm = $this->createDeleteForm($entry);
        $editForm = $this->createForm('AppBundle\Form\EntryType', $entry);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entry);
            $em->flush();

            return $this->redirectToRoute('entry_edit', array('id' => $entry->getId()));
        }

        return $this->render('AppBundle:entry:edit.html.twig', array(
            'entry' => $entry,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Entry entity.
     *
     */
    public function deleteAction(Request $request, Entry $entry)
    {
        $form = $this->createDeleteForm($entry);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($entry);
            $em->flush();
        }

        return $this->redirectToRoute('entry_index');
    }

    /**
     * Creates a form to delete a Entry entity.
     *
     * @param Entry $entry The Entry entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Entry $entry)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('entry_delete', array('id' => $entry->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    /**
     * Authenticate to twitter API and return access token
     * @return mixed
     * @throws \Exception
     * @author Joel Mora
     */
    private function twitterAuthentication()
    {
        //This is all you need to configure.
        $app_key = $this->container->getParameter('twitter_key');
        $app_token = $this->container->getParameter('twitter_token');

        //These are our constants.
        $api_base = 'https://api.twitter.com/';
        $bearer_token_creds = base64_encode($app_key.':'.$app_token);

        //Get a bearer token.
        $opts = array(
            'http'=>array(
                'method' => 'POST',
                'header' => 'Authorization: Basic '.$bearer_token_creds."\r\n".
                    'Content-Type: application/x-www-form-urlencoded;charset=UTF-8',
                'content' => 'grant_type=client_credentials'
            )
        );

        $context = stream_context_create($opts);
        $json = file_get_contents($api_base.'oauth2/token',false,$context);
        $result = json_decode($json,true);

        if (!is_array($result) || !isset($result['token_type']) || !isset($result['access_token'])) {
            throw new \Exception("Something went wrong. This isn't a valid array: " . $json);
        }
        if ($result['token_type'] !== "bearer") {
            throw new \Exception("Invalid token type. Twitter says we need to make sure this is a bearer.");
        }

        return $result['access_token'];
    }

    /**
     * Get latest entries from user timeline
     * @param $token
     * @param $twitterUsername
     * @return mixed
     * @author Joel Mora
     */
    private function getTimeline($token, $twitterUsername)
    {
        //Try a twitter API request now.
        $opts = array(
            'http'=>array(
                'method' => 'GET',
                'header' => 'Authorization: Bearer '.$token
            )
        );

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';

        $context = stream_context_create($opts);
        $timelineLimit = $this->container->getParameter('twitter_timeline_limit');
        $json = @file_get_contents($url . '?count=' . $timelineLimit . '&screen_name=' . $twitterUsername, false, $context);

        return json_decode($json);
    }

}
