<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create() {
        return view('requests.create');
    } 
             /* リクエスト情報を取得する方法
             　 コントローラのアクションの引数に$request（前のRequestは型宣言）を記述すると、
                Laravelは自動的に、そのリクエスト情報を含むRequestクラスのインスタンスを生成する。
               （$requestは変数だが、その中身（インスタンス）は、ユーザー（ブラウザか）ら要求され
                る情報を含めた大量の情報らしい。）そしてアクション内で$requestの中身を取得したり
                して使うことができる。↓↓↓↓↓↓↓↓↓↓↓↓↓
             */
    public function confirm(Request $request) {
        // HTTPリクエストに含まれる、単一のパラメータの値を取得する     
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_gender = $request->input('user_gender');
        $category = $request->input('category');
        $message = $request->input('message');

        // HTTPリクエストメソッド（GET、POST、PUT、PATCH、DELETEなど）を取得する
        $method = $request->method();

        // HTTPリクエストのパスを取得する
        $path = $request->path();

        // HTTPリクエストのURLを取得する
        $url = $request->url();

        // HTTPリクエストを送信したクライアントのIPアドレスを取得する
        $ip = $request->ip();

        $variables = [
            'user_name',
            'user_email',
            'user_gender',
            'category',
            'message',
            'method',
            'path',
            'url',
            'ip'
        ];

        return view('requests.confirm', compact($variables));
    }    
}
