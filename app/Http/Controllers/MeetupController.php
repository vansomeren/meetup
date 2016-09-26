<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: User
 * Date: 07/09/2016
 * Time: 12:37
 */
use Faker\Provider\DateTime;
Use Illuminate\Http\Request;
use App\Models\Meetup;

class MeetupController extends Controller {

    public function index(Request $request){

        $meetups = Meetup::query()
            ->with('owner')
            ->orderBy('id','DESC')
            ->paginate(5);

        return view('meetups.index',compact('meetups'))

            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        return view('meetups.create');
    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'title' => 'required',

            'date' => 'required',

            'location' => 'required',

            'description' => 'required',


        ]);
        $owner = null;
        if($request->has('owner_email'))
        {
            $owner = User::firstOrNew(['email' => $request->get('owner_email')]);
            $is_new = false;
            if(!$owner->exists)
            {
                $is_new = true;
                $owner->save();
            }

            // check if a new owner and if so save the user
            if($is_new)
                User::updateOrCreate(
                    ['user_id' => $owner->id],
                    ['fullname' => $request->get('owner_fullname')]);
        }
        else
            $owner = $request->user();

        $meetup = new Meetup();

        $meetup->title = $request->input('title');

        $meetup->date = $request->input('date');

        $meetup->location = $request->input('location');

        $meetup->description = $request->input('description');

        $meetup->owner_id =$owner->id;


        $meetup->save();

        return redirect()->route('meetup.index')

            ->with('success','Meetup created successfully');

    }
    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show(Request $request,$id)

    {

        $meetup = Meetup::find($id);

        return view('meetups.show',compact('meetup'));

    }
    public function edit($id) {

        $meetup = Meetup::find($id);

        return view('meetups.edit',compact('meetup'));

    }
    public function update(Request $request, $id)

    {

        $this->validate($request, [

            'title' => 'required',

            'date' => 'required',

            'location' => 'required',

            'description' => 'required',


        ]);

        $owner = null;
        if($request->has('owner_email'))
        {
            $owner = User::firstOrNew(['email' => $request->get('owner_email')]);
            $is_new = false;
            if(!$owner->exists)
            {
                $is_new = true;
                $owner->save();
            }

            // check if a new owner and if so save the user
            if($is_new)
                User::updateOrCreate(
                    ['user_id' => $owner->id],
                    ['fullname' => $request->get('owner_fullname')]);
        }
        else
            $owner = $request->user();

        $meetup = Meetup::find($id);

        $meetup->title = $request->input('title');

        $meetup->date = $request->input('date');

        $meetup->location = $request->input('location');

        $meetup->description = $request->input('description');

        $meetup->owner_id =$owner->id;


        $meetup->save();

        return redirect()->route('meetup.index')

            ->with('success','Meetup Updated successfully');

    }
    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy( $id)

    {


        Meetup::find($id)->delete();

        return redirect()->route('meetup.index');


    }
    /**
     * Register for event
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request,$id) {


        $this->validate($request, [

            'title' => 'required',

            'date' => 'required',

            'location' => 'required',

            'description' => 'required',


        ]);

        $owner = null;
        if($request->has('owner_email'))
        {
            $owner = User::firstOrNew(['email' => $request->get('owner_email')]);
            $is_new = false;
            if(!$owner->exists)
            {
                $is_new = true;
                $owner->save();
            }

            // check if a new owner and if so save the user
            if($is_new)
                User::updateOrCreate(
                    ['user_id' => $owner->id],
                    ['fullname' => $request->get('owner_fullname')]);
        }
        else
            $owner = $request->user();

        $meetup = Meetup::find($id);

        $meetup->title = $request->get('title');

        $meetup->date = $request->get('date');

        $meetup->location = $request->get('location');

        $meetup->description = $request->get('description');

        $meetup->owner_id =$owner->id;

        $meetup->register = $request->input('register');


        $meetup->save();

        return redirect()->route('meetup.index')

            ->with('success','You have registered successfully');

    }


}