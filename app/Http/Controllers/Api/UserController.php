<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $filterParams = $request->all();
        $query = null;

        foreach ($filterParams as $id => $value) {
            if ($query) {
                $query = $id . ':' . $value . ' AND ' . $query;
            } else {
                $query = $id . ':' . $value;
            }
        }

        $result = User::search($query)->get();

        if ($result) {
            return [
                'success' => true,
                'message' => 'Get User successfully',
                'data' => $result,
            ];
        }

        return [
            'success' => false,
            'message' => $result
        ];
    }
}
