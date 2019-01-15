<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\User;
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input("word");
        $results = Tag::where("tag", "like", "%" . $keyword . "%")->get();
        return view("search", ["results" => $results]);
    }

    public function get_user (User $user)
    {
        $id = $user->id;
        $tags = Tag::where("user_id", $id)->get();
        return view('user', ["tags" => $tags, "user" => $user]);
    }
}
