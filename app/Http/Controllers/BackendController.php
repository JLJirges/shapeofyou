<?php

namespace App\Http\Controllers;

use App\BeforeAfterStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    public function dashboard_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            return view('backend/dashboard');
        }
    }

    public function useroverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'users' => \DB::table('users')->get()
            ];
            return view('backend/useroverview')->with($data);
        }
    }

    public function useredit_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            return view('backend/user_edit');
        }
    }

    public function user_edit_view($user_id)
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'user' => \DB::table('users')->where('id', $user_id)->first(),
                'user_id' => $user_id
            ];

            return view('backend/user_edit')->with($data);
        }
    }


    public function blogoverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'blogs' => \DB::table('blogs')->get()
            ];
            return view('backend/blogoverview')->with($data);
        }
    }

    public function workoutoverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'workouts' => \DB::table('workouts')->get()
            ];
            return view('backend/workoutoverview')->with($data);
        }
    }

    public function diaryoverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'diaries' => \DB::table('diaries')->get()
            ];
            return view('backend/diaryoverview')->with($data);
        }
    }

    public function storyoverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'stories' => \DB::table('beforeafterstories')->get()
            ];
            return view('backend/storyoverview')->with($data);
        }
    }

    public function eventoverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            $data = [
                'upcoming_events' => \DB::table('events')->where('Upcoming', 0)->get(),
                'former_events' => \DB::table('events')->where('Upcoming', 1)->get(),
            ];

            return view('backend/eventoverview')->with($data);
        }
    }

    public function adminoverview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {

            return view('backend/adminoverview');
        }
    }

    public function jobs_faq_overview_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'jobs' => \DB::table('jobs')->get(),
                'faqs' => \DB::table('faq')->get()
            ];
            return view('backend/jobs_faq_overview')->with($data);
        }
    }
    public function admin_faqs_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            return view('backend/admin_faqs');
        }
    }

    public function admin_jobs_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            return view('backend/admin_jobs');
        }
    }

    public function create_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
            ];

            return view('/backend/create')->with($data);
        }
    }

    public function event_edit_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'events' => \DB::table('events')->get(),
            ];

            return view('backend/event_edit')->with($data);
        }
    }

    public function event_edit($event_id)
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'event' => \DB::table('events')->where('id', $event_id)->first(),
                'event_id' => $event_id
            ];

            return view('backend/event_edit')->with($data);
        }
    }

    public function faq_edit_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'faqs' => \DB::table('faq')->get(),
            ];

            return view('backend/faq_edit')->with($data);
        }
    }

    public function faq_edit($faq_id)
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'faq' => \DB::table('faq')->where('id', $faq_id)->first(),
                'faq_id' => $faq_id
            ];

            return view('backend/faq_edit')->with($data);
        }
    }

    public function job_edit($job_id)
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'job' => \DB::table('jobs')->where('id', $job_id)->first(),
                'job_id' => $job_id
            ];

            return view('backend/job_edit')->with($data);
        }
    }

    public function workout_edit_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            return view('backend/workout_edit');
        }
    }

    public function workout_edit($workout_id)
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'workout' => \DB::table('workouts')->where('id', $workout_id)->first(),
                'workout_id' => $workout_id,
                'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
            ];

            return view('backend/workout_edit')->with($data);
        }
    }

    public function blog_edit_view()
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            return view('backend/blog_edit');
        }
    }

    public function blog_edit($blog_id)
    {

        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            $data = [
                'blog' => \DB::table('blogs')->where('id', $blog_id)->first(),
                'blog_id' => $blog_id,
                'admin_users' => \DB::table('users')->where('isAdmin', 1)->get()
            ];

            return view('backend/blog_edit')->with($data);
        }
    }


}
