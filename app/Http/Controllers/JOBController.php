<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JOBController extends Controller
{

    public function create()
    {if (!Auth()->check()) {
        return redirect()->to('/');
    } elseif (Auth::user()->isAdmin !== 1) {
        Auth::logout();
        Session:
        flush();
        return redirect()->to('/');
    } else {
        return view('/backend/admin_jobs');
    }
    }

    public function store()
    {

        $this->validate(request(), [
            'JobTitle' => 'required|string|max:100',
            'JobDescription' => 'required',
            'YourSkills' => 'required',
            'ContactUs' => 'required'

        ]);
        Jobs::create([
            'JobTitle' => request('JobTitle'),
            'JobDescription' => request('JobDescription'),
            'YourSkills' => request('YourSkills'),
            'ContactUs' => request('ContactUs')

        ]);
        \Session::flash('job_error_message', 'Job successfully added!');

        return redirect()->to('/backend/admin_jobs');

    }

    public function edit_job(Request $request, $id)
    {

        $this->validate(request(), [
            'JobTitle' => '',
            'JobDescription' => '',
            'YourSkills' => '',
            'ContactUs' => ''
        ]);

        $job = Jobs::findOrFail($id);
        $job->update(array_filter($request->all()));

        \Session::flash('job_message', 'Update successful!');
        return redirect()->to('/backend/job_edit/' . $job->id);
    }

    public function delete_job($job_id)
    {

       $job = \DB::table('jobs')->where('id', $job_id);
        $job->delete();

        return redirect()->to('/backend/jobs_faq_overview');
    }

}
