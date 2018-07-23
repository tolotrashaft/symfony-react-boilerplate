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

    /**
     * Retrieves an User resource using function parameter injection
     * @Rest\Get("/articles")
     * @return View
     */
    public function articles()
    {
        $data = [
            [
                'id' => 1,
                'author' => 'Chris Colborne',
                'avatarUrl' => 'http://1.gravatar.com/avatar/13dbc56733c2cc66fbc698cdb07fec12',
                'title' => 'Bitter Predation',
                'description' => 'Thirteen thin, round towers …',
            ],
            [
                'id' => 2,
                'author' => 'Louanne Perez',
                'avatarUrl' => 'https://randomuser.me/api/portraits/thumb/women/18.jpg',
                'title' => 'Strangers of the Ambitious',
                'description' => "A huge gate with thick metal doors …",
            ],
            [
                'id' => 3,
                'author' => 'Theodorus Dietvorst',
                'avatarUrl' => 'https://randomuser.me/api/portraits/thumb/men/49.jpg',
                'title' => 'Outsiders of the Mysterious',
                'description' => "Plain fields of a type of grass cover …",
            ],
        ];
        return View::create($data, Response::HTTP_OK);
    }
}
