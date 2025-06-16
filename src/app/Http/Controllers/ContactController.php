<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    // お問い合わせフォーム画面表示
    public function index()
    {
        $genders = config('constants.genders');

        return view('index', compact('genders'));
    }

    // フォーム内容送信
    public function send(ContactRequest $request)
    {
        $validated = $request->validated(); // 必須項目
        $additional = $request->only(['building']); // 任意項目
        $form_input = array_merge($validated, $additional);

        $request->session()->put("form_input", $form_input);

        return redirect()->route('contact.confirm');
    }

    // 確認画面表示
    public function confirm(Request $request)
    {
        $input = $request->session()->get('form_input');
        if (!$input) {
            return redirect('/')->with('error', '入力情報が見つかりません。');
        }

        $form = $input;

        $fullname = $form['last_name'] . '　' . $form['first_name'];

        $genders = config('constants.genders');
        $gender_label = $genders[$form['gender']]; //value(数値)からlabel(文字列)へ変換

        $form['tel'] = $form['tel1'] . '-' . $form['tel2'] . '-' . $form['tel3'];

        $category = Category::find($form['category_id']);

        return view('confirm', compact('form', 'fullname', 'gender_label', 'category'));
    }

    // 登録処理
    public function store(Request $request)
    {
        $input = $request->session()->get('form_input');
        if (!$input) {
            return redirect('/')->with('error', 'セッションが切れました。再度入力してください。');
        }

        $form = $input;

        $form['tel'] = $form['tel1'] . '-' . $form['tel2'] . '-' . $form['tel3'];
        unset($form['tel1'], $form['tel2'], $form['tel3']); //不要なキーを削除

        Contact::create($form);

        $request->session()->forget('form_input');

        return redirect('/thanks');
    }

    // 完了画面表示

    public function thanks()
    {
        return view('thanks');
    }
}
