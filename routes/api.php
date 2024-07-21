<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/test', function (Request $request) {
    $param = $request->query('param');
    return response()->json(['response' => $param]);
});
