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
        ->KeywordSearch($request->keyword)
        ->GenderSearch($request->gender)
        ->CategorySearch($request->category_id)
        ->DateSearch($request->created_at)
        ->get();

        return view('auth.admin', compact('contacts'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();

        return redirect()->route('admin');
    }
}
