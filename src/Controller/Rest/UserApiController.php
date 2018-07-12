<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/07/2018
 * Time: 17:12
 */

namespace App\Controller\Rest;

use App\Repository\UserRepository;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class UserApiController extends FOSRestController
{

    /**
     * Retrieves an User resource
     * @Rest\Get("/users")
     * @param UserRepository $repository
     * @return View
     */
    public function index(UserRepository $repository)
    {
        $users = $repository->findall();
        return View::create($users, Response::HTTP_OK);
    }

    /**
     * Retrieves an User resource
     * @Rest\Get("/users/{userId}")
     * @param UserRepository $repository
     * @param int $userId
     * @return View
     */
    public function getArticle(UserRepository $repository, int $userId)
    {
        $users = $repository->find($userId);
        return View::create($users, Response::HTTP_OK);
    }
}
