<?php

namespace App\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    /**
     * @Route("/users", name="users")
     * @Template("users/index.html.twig")
     */
    public function index()
    {
        return ['controller_name' => 'UsersController'];
    }
}
