<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index() : JsonResponse
    {
        return response()->json("Hello world",200);
    }

    public function noAccess() : JsonResponse
    {
        return response()->json("No access",200);
    }
}
