<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        $user = Auth::user(); // Retrieve the authenticated user

        // Retrieve additional user data fields
        $name = $user->name;
        $email = $user->email;
        $department = $user->department;
        $github = $user->github;
        $access_level = $user->access_level;
        return view('dashboard', compact('name','email','department','github','access_level'));
    }

    public function people()
    {
        $users = User::all();
        return view('people', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make("12345678");
        $user->department = $request->department;
        $user->github = $request->github;
        $user->access_level = "0";
        $user->save();
        return redirect('/home');
    }
}
