<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Meetup;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $meetups = Meetup::query()
            ->with('owner')
            ->orderBy('id','DESC')
            ->paginate(5);

        return view('home',compact('meetups'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
   
}
