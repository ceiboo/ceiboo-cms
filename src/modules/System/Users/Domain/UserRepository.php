<?php

namespace Ceiboo\Module\System\Users\Domain;

use Ceiboo\Module\System\Users\Infrastructure\User;

final class UserRepository
{
    public function save($id, $name, $email, $phone, $password)
    {
        $user = new User();
        $user->id = $id;
        $user->name = $name;
        $user->email = $email;
        $user->phone = $phone;
        $user->password = MD5($password);
        $user->save();
    }
}
