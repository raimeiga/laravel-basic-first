<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
// ↑ LaravelではCookieファサードを使うことで、クッキーに値を保存したり、保存した値を取得したりできる    
use App\Models\Product;  
/* ↑ AppフォルダのModelsフォルダのProductファイル（モデルのファイル）を使うよ!と宣言
     宣言することで、そのファイル内ではProductと記述するだけでProductクラスを呼び出せるようになる?
*/
class CookieController extends Controller
{
    public function index() {
        // クッキーから'product_id'キーの値を取得する
        $product_id = Cookie::get('product_id');

        $product = Product::find($product_id);

        return view('cookies.index', compact('product'));
    }

    public function create() {
        $products = Product::all();

        return view('cookies.create', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);
        /* ↑ バリデーションを設定　cookies/create.blade.php（ビューファイル）に
           　エラーメッセージを表示するif ($errors->any())を記述している
        */

        // キー名が'product_id'、値が商品IDのデータをクッキーに設定する（60分有効）
        Cookie::queue('product_id', $request->input('product_id'), 60);

        // HTTPレスポンスと同時にクッキーが送信される
        return redirect('/cookies');
    }

    public function destroy() {
        // クッキーから'product_id'キーとその値を削除するように設定する
        Cookie::queue(Cookie::forget('product_id'));

        // HTTPレスポンスの送信と同時にクッキーが削除される
        return redirect('/cookies');
    }    
}
