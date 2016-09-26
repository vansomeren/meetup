<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Erik Van Someren
 * Date: 9/24/2016
 * Time: 19:13
 */
use App\Models\Meetup;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller {

    public function index(Request $request){
        $meetups = Meetup::query()
            ->with('owner')
            ->orderBy('id','DESC')
            ->paginate(5);

        return view('dashboard',compact('meetups'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}