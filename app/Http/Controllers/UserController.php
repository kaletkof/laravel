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
        return view('user.profile', ['id' => $id]);    
    }

    public function testStore(Request $request, int $id)
    {
    
    }
}