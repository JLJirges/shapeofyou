<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FooterController extends Controller
{

    public function contact_view()
    {
        return view('footer/contact');
    }

    public function jobs_view()
    {
        $data = [
            'jobs' => \DB::table('jobs')->get()
        ];
        return view('footer/jobs')->with($data);
    }

    public function tac_view()
    {
        return view('footer/termsandconditions');
    }

    public function faq_view()
    {
        $data = [
            'faqs' => \DB::table('faq')->get()
        ];
        return view('footer/faq')->with($data);
    }

    public function about_view()
    {
        $data = [
            'admins' => \DB::table('users')->where('isAdmin', '1')->get()
        ];
        return view('footer/aboutus')->with($data);
    }
}
