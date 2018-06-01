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
            'comment' => 'required|string|max:500'
        ]);

        if ($type == 'blog'){
            \App\BlogComments::create([
                'BlogId' => $id,
                'UserId' => $user_id,
                'BlogCommentContent' => request('comment')
            ]);
        }else if ($type == 'detail'){
            \App\WorkoutComments::create([
                'WorkoutId' => $id,
                'UserId' => $user_id,
                'WorkoutCommentContent' => request('comment')
            ]);
        }else if ($type == 'diary'){
            \App\DiaryComments::create([
                'DiaryId' => $id,
                'UserId' => $user_id,
                'DiaryCommentContent' => request('comment')
            ]);
        }else{
            \App\BeforeAfterComments::create([
                'BASId' => $id,
                'UserId' => $user_id,
                'BASContent' => request('comment')
            ]);
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

    public function favorite_workout($action, $workout_id, $user_id){
        if ($action == 'insert'){
            \DB::table('user_favorites')->insert(
                [
                    'UserId' => $user_id,
                    'type' => 'detail',
                    'type_id' => $workout_id
                ]
            );
        }else{
            // action == delete
            \DB::table('user_favorites')->where(
                [
                    'UserId' => $user_id,
                    'type' => 'detail',
                    'type_id' => $workout_id
                ]
            )->delete();
        }
        return redirect()->to('detail' . '/' . $workout_id);
    }

}
