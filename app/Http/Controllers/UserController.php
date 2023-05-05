<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Levels;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        $levels = Levels::all();

        return view('users.index', compact('users', 'levels'));
    }
    
    public function userOnlineStatus()
    {
        $users = User::all();
        foreach ($users as $user) {
            if (Cache::has('user-is-online-' . $user->id))
                echo $user->name . " is online. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
            else
                echo $user->name . " is offline. Last seen: " . Carbon::parse($user->last_seen)->diffForHumans() . " <br>";
        }
    }

    public function show($id, Request $request)
    {
        $user_info = User::find($id);

        return view('users.show', compact('user_info'));
    }
}