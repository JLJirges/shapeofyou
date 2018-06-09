<?php

namespace App\Http\Controllers;

use App\FAQs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FAQController extends Controller
{

    public function create()
    {
        return view('/backend/admin_faqs');
    }

    public function store()
    {

        $this->validate(request(), [
            'Question' => 'required|string|max:100',
            'Answer' => 'required',

        ]);
        FAQs::create([
            'Question' => request('Question'),
            'Answer' => request('Answer'),

        ]);
        \Session::flash('faq_error_message', 'FAQ successfully added!');

        return redirect()->to('/backend/admin_faqs');

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
