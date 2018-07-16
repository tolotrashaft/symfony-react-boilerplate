<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/07/2018
 * Time: 17:12
 */

namespace App\Controller\Rest;

use App\Repository\UserRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

class UserApiController extends FOSRestController
{
    /**
     * @var UserRepository
     */
    private $repository;

    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Retrieves an User resource using constructor injection
     * @Rest\Get("/users")
     * @return View
     */
    public function index()
    {
        $users = $this->repository->findall();
        return View::create($users, Response::HTTP_OK);
    }

    /**
     * Retrieves an User resource using function parameter injection
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
