<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;

class DestinationsController extends Controller
{
    public function index()
    {
    	$destinations = Destination::all();
 
    	return view('destinations.index', compact('destinations'));
    }

    public function create()
    {
    	return view('destinations.create');
    }

    public function store()
    {
    	$destination = new Destination();

    	$destination->name = request('name');
    	$destination->code = request('code');
    	$destination->title = request('title');

    	$destination->save();
    	return redirect('/destinations'); 
    }

    public function edit($id)
    {
    	$destinations = Destination::find($id);
    	return view('destinations.edit', compact('destinations'));
    }

    public function update()
    {
    	dd('hello');
    }

    public function destroy()
    {

    }
}
