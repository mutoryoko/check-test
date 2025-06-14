<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all()->latest('updated_at')->paginate(7);

        $genders = [
            1 => '男性',
            2 => '女性',
            3 => 'その他'
        ];

        $categories = Category::where('id', 'content');

        return view('auth.admin', compact('contacts', 'genders', 'categories'));
    }

    public function destroy()
    {
        //
    }
}
