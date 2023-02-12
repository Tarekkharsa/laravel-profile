<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkExperience;
use App\Models\MyWork;
use App\Models\Settings;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $work_expirances = WorkExperience::all();
        $my_work = MyWork::all();
        $user = User::first();
        return view('welcome', [
            'work_expirances' =>$work_expirances,
            'my_work'=> $my_work,
            'user'=> $user,
        ]);
    }
}
