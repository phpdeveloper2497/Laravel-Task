<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function reply(string $massage=null,$data=null, $status=200)
    {
        return response()->json([
            'data' =>$data,
        ]);
    }
    public function success(string $massage=null, $data=null)
    {
        return response()->json([
            'message' =>$massage,
            'status' =>200,
            'data' =>$data,
        ]);
    }

    public function error(string $massage=null,$data=null, $status = 404)
    {
        return response()->json([
            'message' =>$massage,
            'status' =>'error',
            'data' =>$data,
        ]);
    }


}
