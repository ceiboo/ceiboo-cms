<?php

declare(strict_types = 1);

namespace Ceiboo\Api\Controllers\Users;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Ceiboo\Module\System\Users\Controllers\UserCreator;

final class UsersPutController
{

    private $userCreator;

    public function __construct(UserCreator $userCreator)
    {
        $this->userCreator = $userCreator;
    }

    public function __invoke(Request $request): Response
    {
        $response = $this->userCreator->__invoke($request);

        return new Response($response['data'],$response['code']);
    }
}
