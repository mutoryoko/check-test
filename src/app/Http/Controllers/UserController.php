<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\User;


class UserController extends Controller
{
    // ユーザー登録画面表示
    public function index()
    {
        return view('auth.register');
    }

    // ユーザー登録処理
    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($request->password);
        User::create($validated);

        return view('auth.admin');
    }
}
