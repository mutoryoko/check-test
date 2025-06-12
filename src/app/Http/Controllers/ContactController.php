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

        $genders = [
            1 => '男性',
            2 => '女性',
            3 => 'その他'
        ];

        return view('index', compact('categories', 'genders'));
    }

    public function confirm(ContactRequest $request)
    {
        $form = $request->all();

        $genders = [
            1 => '男性',
            2 => '女性',
            3 => 'その他'
        ];
        $gender_label = $genders[$form['gender']]; //value(数値)からlabel(文字列)へ変換

        $fullTel = $form['tel1'] . '-' . $form['tel2'] . '-' . $form['tel3'];

        $category = Category::find($form['category_id']);

        return view('confirm', compact('form', 'gender_label', 'fullTel', 'category'));
    }

    public function store(ContactRequest $request)
    {
        $form = $request->all();
        $form['tel'] = $form['tel1'] . '-' . $form['tel2'] . '-' . $form['tel3'];
        unset($form['tel1'], $form['tel2'], $form['tel3']); //不要なキーを削除
        Contact::create($form);

        return view('thanks');
    }
}
