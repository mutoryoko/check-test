<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class AdminContactController extends Controller
{
    public function index()
    {
        //性別・カテゴリはconfig.constantsとViewServiceProviderを確認
        $contacts = Contact::with('category')->latest()->paginate(7);

        return view('auth.admin', compact('contacts'));
    }

    public function search(Request $request)
    {
        //性別・カテゴリはconfig.constantsとViewServiceProviderを確認
        $contacts = Contact::with('category')
        ->CategorySearch($request->category_id)
        //性別の検索入れる
        ->KeywordSearch($request->keyword)->get();

        return view('auth.admin', compact('todos'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return redirect()->route('admin');
    }
}
