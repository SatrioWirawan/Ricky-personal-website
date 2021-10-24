<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class adminController extends Controller
{
    public function index()
    {
        $post = DB::table('story')->get();
        return view('admin.story', compact('post'));
    }
    public function create()
    {
        return view('admin.story.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:story',
            'story' => 'required',
        ]);
        $query = DB::table('story')->insert([
            "title" => $request["title"],
            "story" => $request["story"]
        ]);
        return redirect('/admin/story-management');
    }

    public function edit($title)
    {
        $post = DB::table('story')->where('title', $title)->first();
        return view('admin.story.edit', compact('post'));
    }

     
    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:story',
            'story' => 'required',
        ]);

        $query = DB::table('story')
            ->where('id', $id)
            ->update([
                "title" => $request["title"],
                "story" => $request["story"]
            ]);
        return redirect('/admin/story-management');
    }

    public function show($title)
    {
        $post = DB::table('story')->where('title', $title)->first();
        return view('admin.story.show', compact('post'));
    }

    public function destroy($title)
    {
        $query = DB::table('story')->where('title', $title)->delete();
        return redirect('/admin/story-management');
    }
}
