<?php

namespace App\Http\Controllers;

use App\Person;
use App\Http\Resources\PersonResource;
use App\Http\Resources\PersonResourceCollection;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    
    public function show(Person $person)
    {
        return new PersonResource($person);
    }


    public function index()
    {
        return new PersonResourceCollection(Person::paginate());
    }

    public function store(Request $request)
    {
        //create person
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'city'=>'required',
        ]);

        $person=Person::create($request->all());

        return new PersonResource($person);


    }

    public function update(Request $request,Person $person)
    {
        //update person
       

        $person->update($request->all());

        return new PersonResource($person);


    }

    public function destroy(Person $person)
    {
        //delete person
       

        $person->delete();

        return response()->json();


    }

}
