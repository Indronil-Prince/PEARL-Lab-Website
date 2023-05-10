<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Publication;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function people()
    {
        return view('people');
    }
    public function research()
    {
        return view('research');
    }
    public function checkAccess()
    {
        if(Auth::user()!=null){
        $user = Auth::user();
        // Retrieve the authenticated user

        // Retrieve additional user data fields
        $access = $user->access_level;
        if ($access == 2) {return view('member-register');}
        else {abort(403, 'Access Denied');}
        }
        else {abort(403, 'Access Denied');}
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publication = new Publication;
        $publication->uname = $request->uname;
        $publication->title = $request->title;
        $publication->authors = $request->authors;
        $publication->conf_name = $request->conf_name;
        $publication->date = $request->date;
        $publication->save();

        return redirect('/publications');
    }
    public function storenews(Request $request)
    {
        $news = new News;
        $news->uname = $request->uname;
        $news->title = $request->news_title;
        $news->detail = $request->news_detail;
        $news->save();

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
    }
    public function news()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }
    public function publications()
    {
        $publications = Publication::all();
        return view('publications', ['publications' => $publications]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
