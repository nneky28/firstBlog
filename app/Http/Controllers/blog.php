<?php
namespace App\Http\Controllers;

use App\Models\blogss;
use App\Models\blogall;
use Illuminate\Http\Request;

class blog extends Controller
{
    public function Homepage(Request $request)
    {

        return view('index');
    }

    public function blogs(Request $request)
    {
        if ($request->isMethod('post')) {
            // dd("fggfh");
            $validation = $request->validate([
                'email' => 'required|min:5',
                'name' => 'required|min:5',
                'password' => 'required|unique:blogs'
            ]);
            // dd($request);
            $checkval = blogss::where(['email' => $request->email])->count();
            if ($checkval) {
                return back()->with('error', 'Email already exist');
            } else {
                $user = blogss::create($request->all());
                if ($user) {
                    // return back()->with('success', 'Login successful');
                    return redirect('/blog');
                } else {
                    return back()->with('Failed', 'try again');
                }
            }
        }

        return view('users');
    }

    public function register(Request $request)
    {
        $alluser = blogss::all();
        $allblog = blogall::all();
        // dd($alluser);
        $title = 'New post';

        if ($request->isMethod('post')) {
            $validation = $request->validate([
                'author' => 'required|min:5',
                // 'name' => 'required|min:5',
                'title' => 'required|unique:blogalls',
                'content' => 'required|min:100',

            ]);

            $val = blogall::where(['title' => $request->title])->count();

            if ($val) {
                return back()->with('error', 'title already exist');
            } else {
                $slug = str_replace(' ', '-', $request->title);

                $request['slug'] = $slug;
                $post = blogall::create($request->all());

                if ($post) {
                    return back()->with('success', 'well done champ!');
                } else {
                    return back()->with('failed', 'please, return back');
                }
            }
        }

        return view('blog', compact('alluser', 'allblog'));
    }
}
