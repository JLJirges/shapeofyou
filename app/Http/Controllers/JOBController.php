<?php

namespace App\Http\Controllers;

use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JOBController extends Controller
{

    public function create()
    {
        return view('/backend/admin_jobs');
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

    /*  public function edit(Request $request)
      {
          $this->validate(request(), [
              'BlogTitle' => 'string|max:50',
              'BlogCategory' => 'required',
              'BlogAuthorName' => 'string|max:50',
              'BlogAuthorBio' => 'string|max:200',
              'BlogAuthorBirthdate' => '',
              'BlogAuthorImage' => '',
              'BlogAuthorOrigin' => 'string|max:50',
              'BlogHeroImage' => '',
              'BlogImage' => '',
              'BlogContentOne' => 'string|max:300',
              'BlogContentTwo' => 'string|max:300'
          ]);



          $blogs = Blogs::findOrFail(\Auth::blogs() -> id);
          $blogs->update($request->all());
          return redirect()->to('/backend/dashboard');
      }*/

}
