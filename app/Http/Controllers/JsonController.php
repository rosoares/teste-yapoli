<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessJsonRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class JsonController extends Controller
{
    public function postJson(Request $request): JsonResponse
    {

        ProcessJsonRequest::dispatch($request->all());

        return response()->json('Request added to Queue');

    }
}
