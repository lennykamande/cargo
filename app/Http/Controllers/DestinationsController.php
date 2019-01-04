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
    	Destination::create(request(['name', 'title', 'code']));

    	return redirect('/destinations'); 
    }

    public function edit(Destination $destination)
    {
    	return view('destinations.edit', compact('destinations'));
    }

    public function update(Destination $destination)
    {
        $destination->update(request(['name', 'title', 'code']));
        return redirect('/destinations');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect('/destinations');

    }
}
