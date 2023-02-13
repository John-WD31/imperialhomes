<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function calendar() {
        return view('dashboard.calendar');
    }

    public function create() {
        return view('dashboard.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'propertyType' => 'required',
            'location' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'required',

            
        ]);
        dd($request);
        // if($request->hasFile('image')) {
        //     $formFields['image'] = $request->file('image')->store('public');
        // }

        $formFields['username'] = auth()->id();
        
        Listing::create($formFields);

        return redirect('/dashboard/tables')->with('message', 'Listing created successfully!');
    }

    public function edit(Listing $listing) {
        return view('dashboard.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing) {
        if($listing->user_id !=auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $formFields = $request->validate([
            'propertyType' => 'required',
            'location' => 'required',
            'model' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        // if($request->hasFile('image')) {
        //     $formFields['image'] = $request->file('image')->store('public');
        // }

        $listing->update($formFields);

        return back()->with('message', 'Successfully updated property!');
    }

    public function destroy(Listing $listing) {
        if($listing->user_id !=auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        return redirect('/dashboard/tables')->with('message', 'Successfully deleted property!');
    }


    public function forms() {
        return view('dashboard.forms');
    }

    public function tables() {
        return view('dashboard.tables');
    }
}