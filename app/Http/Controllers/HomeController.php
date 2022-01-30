<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;

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
    public function index()
    {
        $users = DB::table('users')
        ->selectRaw('level, count(level) as jumlah')
        ->groupBy('level')
        ->get();
        return view('home', ['users' => $users]);
    }

    public function user()
    {
        return view('user.home');
    }
    
    
}