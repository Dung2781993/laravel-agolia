<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetUserRequest;

class UserController extends Controller
{
    public function index(GetUserRequest $request)
    {
        $input = $request->all();
        print_r($input);
    }
}
