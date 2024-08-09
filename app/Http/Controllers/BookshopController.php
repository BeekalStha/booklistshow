<?php

namespace App\Http\Controllers;

use App\Models\Bookshop;
use Illuminate\Http\Request;

class BookshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $bookshops = Bookshop::with('books')->get();

        
        return view("bookshop.list", compact("bookshops"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("bookshop.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name"=> "required",
            "email"=> "required",
            "address"=> "required",
            "password"=> "required",
            "confirmpassword"=> "required",
            "phone"=> "required",
            "gender"=> "required",
        ]);
        Bookshop::create($validateData);
        return redirect()->back()->with("success","Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bookshops = Bookshop::findOrFail($id);
        return view("bookshop.show", compact("bookshops"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bookshops = Bookshop::findOrFail($id);
        return view('bookshop.form', compact("bookshops"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            "name"=> "required",
            "email"=> "required",
            "address"=> "required",
            "password"=> "required",
            "confirmpassword"=> "required",
            "phone"=> "required",
            "gender"=> "required",
        ]);
        Bookshop::find($id)-> update($validateData);
        return redirect()->back()->with("success","Updated Sucessfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Bookshop::findOrFail($id)->delete();
        return redirect()->back()->with("success","Deleted successfully");
    }
}
