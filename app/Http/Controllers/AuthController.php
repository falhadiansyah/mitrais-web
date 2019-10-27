<?php
namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function signin() {
        return view('auth.signin');
    }

    public function signup() {
        $data = [];
        $data['months'] = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        return view('auth.signup', $data);
    }
}
