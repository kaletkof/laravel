<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        return view('user.list');
    }

    public function testShow(Request $request, int $id)
    {
        $uri = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();

        // dump($uri, $url, $fullUrl);

        $httpMethod = $request->method();

        if ($request->isMethod('post')) {
            dump('to jest POST');
        }

        // /users/test/69?name=Kris&nick=boss

        $all = $request->all();

        // dd($all);

        $name = $request->input('name');
        $lastName = $request->input('lastName', 'Kowalski');

        // dd($lastName);

        // $game = $request->input('games');
        // $game = $request->input('games.1');
        $game = $request->input('games.1.name');

        $allQuery = $request->query();
        $name = $request->query('name');
        $name = $request->input('lastName', 'Nowak');
        // dd($name);
        // dd($allQuery);

        $expired = $request->boolean('expired');
        $hasName = $request->has('name');
        $hasParams = $request->has(['name', 'nick']);
        $hasAnyParams = $request->hasAny(['name', 'nick']);
        // dd($hasAnyParams);

        $cookies = $request->cookie('my_cookie' );
        // dd($cookies);

        $input = $request->input();
        $query = $request->query();

        dd($input, $query);

        dump($request);
        dd($id);
    }

    public function testStore(Request $request, int $id)
    {
        if (!$request->isMethod('post')) {
            return 'to nie jest POST';
        }

        $allQuery = $request->query();

        dump($allQuery);

        dd('post store');
    }
}