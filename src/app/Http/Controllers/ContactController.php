<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $form = $request->all();

        $fullTel = $form['tel1'] . '-' . $form['tel2'] . '-' . $form['tel3'];

        $category = Category::find($form['category_id']);
        $category_name = $category->content;

        return view('confirm', compact('form', 'fullTel', 'category_name'));
    }

    public function store(ContactRequest $request)
    {
        $form = $request->all();
        $form['tel'] = $form['tel1'] . '-' . $form['tel2'] . '-' . $form['tel3'];
        unset($form['tel1'], $form['tel2'], $form['tel3']); // 不要なキーを削除
        Contact::create($form);

        return view('thanks');
    }
}
