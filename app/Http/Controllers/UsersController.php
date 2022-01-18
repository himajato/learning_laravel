<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index() {
        $data = [
            'User1' => 'Nguyen Huy Nghia',
            'User2' => 'Nguyen Minh Quang',
            'User3' => 'Nguyen Van Manh',
        ];
        return view('welcome')->with('data', $data);
    }
}
