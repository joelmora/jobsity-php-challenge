<?php
namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use \AppBundle\Entity\Entry;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class DefaultListenerEntity
 * @package AppBundle\EventListener
 */
class DefaultListenerEntity
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        //TODO ver como puede pasar solo a ciertas clases y no a todas
        $entity = $args->getEntity();

        if($entity instanceof Entry) {

            if (!$this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
                throw new AccessDeniedException();
            }

            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $entity->setCreationDate(new \DateTime());
            $entity->setUser($user);
        }
    }

    public function postPersist(LifecycleEventArgs $args)
    {
    }
}