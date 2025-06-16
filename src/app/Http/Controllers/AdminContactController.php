<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::with('category')->latest()->paginate(7);

        return view('auth.admin', compact('contacts'));
    }

    public function search(Request $request)
    {
        // $contacts = Contact::with('category')
        //     ->CategorySearch($request->category_id)
        //     ->KeywordSearch($request->keyword)
        //     ->get();
        // $categories = Category::all();

        // return view('auth.admin', compact('contacts', 'categories'));
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
