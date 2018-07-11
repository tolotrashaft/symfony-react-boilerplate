<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/07/2018
 * Time: 17:12
 */

namespace App\Controller\Rest;


use App\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class UserApiController extends FOSRestController
{

    /**
     * Retrieves an User resource
     * @Rest\Get("/users}")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findall();
        return View::create($users, Response::HTTP_OK, []);
    }

    /**
     * Retrieves an User resource
     * @Rest\Get("/users/{userId}")
     */
    public function getArticle(int $userId)
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $users = $repository->findall();
        return View::create($users, Response::HTTP_OK, []);
    }
}
