<?php

namespace AppBundle\Controller;

use AppBundle\Entity\HiddenTweet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class HiddenTweetController extends Controller
{
    public function hideAction(Request $request)
    {
        $response = array();

        $userId = $request->get('userId');
        $tweetId = $request->get('tweetId');

        //check required parameters
        if (!$userId OR !$tweetId) {
            $response['status'] = false;
            $response['message'] = 'An Error occurred, please try again';
            return new JsonResponse($response);
        }

        //check if is the same logged user
        if ($userId != $this->getUser()->getId()) {
            $response['status'] = false;
            $response['message'] = 'You cannot hide tweet from another user';
            return new JsonResponse($response);
        }

        $em = $this->getDoctrine()->getManager();

        //create and save object
        $tweet = new HiddenTweet();
        $tweet->setUser($this->getUser());
        $tweet->setTweetId($tweetId);

        $em->persist($tweet);
        $em->flush();

        $response['status'] = true;
        $response['message'] = 'Tweet hidden';

        return new JsonResponse($response);
    }

    public function unhideAction(Request $request)
    {
        $response = array();

        $userId = $request->get('userId');
        $tweetId = $request->get('tweetId');

        //check required parameters
        if (!$userId OR !$tweetId) {
            $response['status'] = false;
            $response['message'] = 'An Error occurred';
            return new JsonResponse($response);
        }

        //check if is the same logged user
        if ($userId != $this->getUser()->getId()) {
            $response['status'] = false;
            $response['message'] = 'You cannot unhide tweet from another user';
            return new JsonResponse($response);
        }

        $em = $this->getDoctrine()->getManager();

        //search and delete object
        $hiddenTweet = $em->getRepository('AppBundle:HiddenTweet')->findOneBy(array(
            'tweetId' => $tweetId
        ));

        if (!$hiddenTweet) {
            $response['status'] = false;
            $response['message'] = 'Tweet not found';
            return new JsonResponse($response);
        }

        $em->remove($hiddenTweet);
        $em->flush();

        $response['status'] = true;
        $response['message'] = 'Tweet shown';

        return new JsonResponse($response);
    }

}
