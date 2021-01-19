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
        //text
        //return "To jest zwykły tekst konwertowany przez framework na HTTP Response. User: $id";

        //response object
        // return response(
        //     "<h3>To jest obiekt response: User: $id</h3>", //content
        //     200,                                           //http status
        //     ['Content-Type' => 'text/html']                //array with headers
        // );

        //chain
        // return response("<h3>Chain to jest obiekt response: User: $id</h3>")
        //     ->setStatusCode(200)
        //     ->header('Content-Type', 'text/html')
        //     ->header('Own-Header', 'Laravel');

        //with cookie
        // return response(
        //         "<h3>Cookie: to jest obiekt response: User: $id<h3>", 
        //         200
        //     )
        //     ->header(
        //         'Content-Type', 
        //         'text/html'
        //     )
        //     ->cookie(
        //         'my_best_cookie', 
        //         'brownie', 
        //         10
        //     );        //czas w minutach


        // redirect
        // return redirect('users');

        // redirect by route name - most useful e.g. when redirect url to another url
        // return redirect()->route('get.users');
        // return redirect()->route('get.users.address', ['id' => $id]);

        //  redirect to controller
        // return redirect()->action('UserController@list');
        // return redirect()->action('User\ShowAddress', ['id' => $id]);

        // redirect to other site
        //return redirect()->away('https://github.com/');
        
        // when we need set status, header...
        // return response()
        //     ->view('user.profile', ['id' => $id], 200)
        //     ->header('Content-Type', 'text/html');
    
        // return view('user.profile', ['id' => $id]);    

        // set as default : Content-Type : application/json
        // return response()->json(['id' => $id]);
    }

    public function testStore(Request $request, int $id)
    {
    
    }
}