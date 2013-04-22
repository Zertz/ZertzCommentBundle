<?php

namespace Zertz\CommentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZertzCommentBundle:Default:index.html.twig', array('name' => $name));
    }
}
