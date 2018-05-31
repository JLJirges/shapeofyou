<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function handlelogin(Request $request){
        $credentials = array('username' => $request->username, 'password' => $request->password);
        if (\Auth::attempt($credentials, true)) {
            return redirect()->to('/profile');
        }else{
            return back()->withErrors([
                'message' => 'Username/Password do not match'
            ]);
        }
    }

    public function logout(){
        \Auth::logout();
        return redirect()->route('login');
    }

    public function write_comments($type, $id, $user_id)
    {
        $this->validate(request(), [
            'comment' => 'required|string|max:50'
        ]);

        if ($type == 'blog'){
            \App\BlogComments::create([
                'BlogId' => $id,
                'UserId' => $user_id,
                'BlogCommentContent' => request('comment')
            ]);
        }else if ($type == 'detail'){
            return 'not implemented (see code of SessionsController)';
        }else if ($type == 'diary'){
            return 'not implemented (see code of SessionsController)';
        }else{
            return 'not implemented (see code of SessionsController)';
        }

        \Session::flash('flash_message', 'Comment successful!');

        return redirect()->to($type . '/' . $id);

    }

    public function favorite_blog($action, $blog_id, $user_id){
        if ($action == 'insert'){
            \DB::table('user_favorites')->insert(
                [
                    'UserId' => $user_id,
                    'type' => 'blog',
                    'type_id' => $blog_id
                ]
            );
        }else{
            // action == delete
            \DB::table('user_favorites')->where(
                [
                    'UserId' => $user_id,
                    'type' => 'blog',
                    'type_id' => $blog_id
                ]
            )->delete();
        }
        return redirect()->to('blog' . '/' . $blog_id);
    }

}
