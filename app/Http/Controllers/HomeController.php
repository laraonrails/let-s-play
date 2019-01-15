<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function my_page(Request $request)
    {
        $id = $request->user()->id;
        $tags = Tag::where("user_id", $id)->get();
        return view('home', ["tags" => $tags]);
    }

    public function tag_store(Request $request)
    {
        $tag  = new Tag;
        $tag->tag = $request->tag;
        $tag->user_id = $request->user_id;
        $tag->save();
        return redirect("home");
    }

    public function tag_destroy(Tag $tag)
    {
        $tag->delete();
        return redirect("/home");
    }

    public function bio_store(User $user, Request $request)
    {
        $user->bio = $request->bio;
        $user->save();
        return redirect("/home");
    }

    public function contact_store(User $user, Request $request)
    {
        $user->contact = $request->contact;
        $user->save();
        return redirect("/home");
    }
}
