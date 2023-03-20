<?php

namespace App\Http\Controllers;

use view;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\RegisterController;

class RegisterController extends Controller
{
    public function registerPage() {
        return view('register');
    }

    public function insert(Request $request) {
        $data = [
            'name' => $request->user_name,
            'email' => $request->user_email,
            'password' => $request->user_password,
            'bio' => $request->user_bio,
            'job' => $request->user_job,
            'interest' => $request->user_interest
        ];

        Register::create($data);

        return view('logout');
    }

    public function read() {
        $data = new Register;
        dd($data->find(3)->toArray());
        // dd($data->where('bio','power ranger')->get()->toArray());
    }

}
