<?php  //コントローラのファイル
   namespace App\Http\Controllers;  
/* namespace（名前空間）=クラスの住所。
   下記のHelloControllerクラスは「Appの中のHttpの中のControllersフォルダの中にあるよ」と明示。
   他のフォルダに同じ名前のクラスが存在する場合に衝突を防ぐため
*/
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;  
/* use宣言=Illuminate\Httpフォルダの中にあるRequestクラスを使うよ」ということを宣言
   宣言することで、そのファイル内ではRequestと記述するだけでRequestクラスを呼び出せるようになる
   RequestクラスはLaravelがあらかじめ用意してくれているクラス
*/
class HelloController extends Controller {
      public function index() {
            return 'Hello, world!';
    }
}
