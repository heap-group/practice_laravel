<?php

namespace App\Http\Controllers;

use App\Http\Requests\HelloRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    public function index(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'id' => 'required',
//            'pass' => 'required',
//        ]);
//
//        if ($validator->fails()) {
//            $msg = 'クエリーに問題があります';
//        } else {
//            $msg = '正常に受け付けました';
//        }

        $msg = 'フォームを入力してください';

        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
        ];

        $errMsgs = [
          'name.required' => '名前は必須です',
          'mail.email' => 'メールアドレスは必須です',
          'age.numeric' => '年齢は数値でしか入力できません',
          'age.min' => '年齢は０以上',
          'age.max' => '年齢は２００以下',
        ];

        $validator = Validator::make($request->all(), $rules, $errMsgs);

        $validator->sometimes('age', 'min:0', function ($input){
            return !is_int($input->age);
        });

        $validator->sometimes('age', 'max:200', function ($input){
            return !is_int($input->age);
        });

        if ($validator->fails()) {
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        }

        return view('hello.index', ['msg' => '正しく入力されました！']);
    }
}
