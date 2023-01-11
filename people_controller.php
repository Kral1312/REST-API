<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\people_resource;
use App\Models\people;
use Illuminate\Http\Request;

class people_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people=people::all();
        return response(people_resource::collection($people),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $people=people::create($request->all());
        return response(new people_resource($people),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\people  $people
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(people $people, int $id)
    {
        if(people::find($id)){
            return response(people::find($id),200);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\people  $people
     * @param int $id
     * @param string $surname
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, people $people,int $id, string $surname)
    {
        $people=people::find($id);
        $people->update(['surname'=>$surname]);
        return response($people,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\people  $people
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(people $people,int $id)
    {
        $people=people::destroy($id);
        return response(null,204);
    }
}
