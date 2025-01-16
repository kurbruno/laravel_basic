<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {


        $user = [
            'name' =>'Jānis Bērziņš',

            'recent_activities' => [

                'Inserted an incorrect password 4 times',
                'Blocked his account by inserting an incorrect password 4 times',
                'Called help desk',
                'Logged in at 10:15 14 JAN 25'],

            'notifications' => [
                
                '3 new messages',
                '1 task in backlog',
                'Achieved 4 plates bench press'
            ]
            ];

        

        return view('dashboard', compact('user'));
    }
}
