<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\birthday;
use App\Jobs\birthdaymail;
use Carbon\Carbon;
// use date\date;

class IController extends Controller
{
    public function register()
    {
        return view('profile');
    }

    public function create(Request $request)
    {

        $add = new birthday;
        if ($request->isMethod('post')) {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->dob = $request->get('dob');
            $add->save();
        }
        return redirect("/profile");
        // echo "yess";
    }
    public function date(Request $request)
    {
        $ldate = date('Y-m-d');
        $users = birthday::whereMonth('dob', date('m'))
            ->whereDay('dob', date('d'))
            ->get();
        foreach ($users as $user) {

            birthdaymail::dispatch($user);
            // dispatch(birthdaymail::class($user));
            echo "send mail sucessfully </br> ";
            // dd('send mail sucessfully');
            // dd("$user->email");
            // print_r($user->email);
        }
    }
}
