<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\WelcomeNotification;
use Illuminate\Support\Facades\Notification;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
         
         $post= [
            'title' => 'This is title',
            'slug' => 'post-slug'
         ];

        $users = User::get();

         foreach($users as $user){
            Notification::send($user, new WelcomeNotification($post));
            
         }
        dd(1);
    }
}
