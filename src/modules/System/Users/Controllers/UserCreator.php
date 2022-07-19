<?php

namespace Ceiboo\Module\System\Users\Controllers;

use Illuminate\Http\Request;
use Ceiboo\Module\System\Users\Domain\UserRepository;

final class UserCreator
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Request $request)
    {

        $id = (string) $request->id;
        $name = (string) $request->name;
        $email = (string) $request->email;
        $phone = (string) $request->phone;
        $password = (string) $request->password;

        $this->repository->save($id,$name,$email,$phone,$password);

        return ['data' => '', 'code' => 201];
    }
}
