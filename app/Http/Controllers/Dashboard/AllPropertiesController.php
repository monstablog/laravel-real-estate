<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Property;
use App\Category;
use App\User;
use App\Location;

class AllPropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $title = 'All Properties';
        $property = Property::where('user_id',$user->id)->latest()->paginate(15);
        $apartmenttypes = Category::all();
        $location = Location::all();
        return view('dashboard.all-properties', compact('title','property'))->with('property', $property, 'apartmenttypes', $apartmenttypes, 'location', $location);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apartmenttype = Category::all();
        $location = Location::all();
        $title = "Create New Property";
        return view('dashboard.create', compact('title'))->with(['apartmenttype'=>$apartmenttype,'location'=>$location]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|min:10',
            'description' => 'required|min:20',
            'apartmenttype' => 'required'

        ]);

        $post=auth()->user()->property()->create($request->all());
        $post->apartmenttype()->attach($request->apartmenttype);
        $post->location()->attach($request->location);
        

        return redirect('/all-properties')->with('success', 'Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::findorFail($id);
        return view('dashboard.all-property-edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
