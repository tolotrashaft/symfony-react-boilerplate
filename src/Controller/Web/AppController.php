<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/07/2018
 * Time: 15:37
 */

namespace App\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;

class AppController
{
    /**
     * @Route("/")
     * @Template("Default/index.html.twig")
     * @return array
     */
    function index()
    {
        return [];
    }
}
