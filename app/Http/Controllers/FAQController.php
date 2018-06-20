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
        if (!Auth()->check()) {
            return redirect()->to('/');
        } elseif (Auth::user()->isAdmin !== 1) {
            Auth::logout();
            Session:
            flush();
            return redirect()->to('/');
        } else {
            return view('/backend/admin_faqs');
        }
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

      public function edit_faq(Request $request, $id)
      {
          $this->validate(request(), [
              'Question' => '',
              'Answer' => ''
          ]);

          $faq = FAQs::findOrFail($id);
          $faq->update(array_filter($request->all()));

          \Session::flash('workout_message', 'Update successful!');
          return redirect()->to('/backend/faq_edit/' . $faq->id);
      }

    public function delete_faq($faq_id)
    {

        $faq = \DB::table('faq')->where('id', $faq_id);
        $faq->delete();

        return redirect()->to('/backend/jobs_faq_overview');
    }

}
