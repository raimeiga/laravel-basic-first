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
      $name = '侍 太郎'; 
        $languages = ['HTML', 'CSS', 'JavaScript', 'PHP'];
        // 変数$name、$languagesをindex.blade.phpファイルに渡す
        return view('index', compact('name', 'languages'));  
   }
    /* ↑ view()ヘルパー=ビューを表示するためのもの。引数に表示したいビューを書く。
    　　 例えば、view('posts.index')のように、表示したいビューを引数として指定す
    　　 るとpostsフォルダのindex.blade.php（ビューのファイル）を表示するって意味。
　　     resources/views/posts/index.blade.phpというURLだが、
　　     resources/viewsを省略し、フォルダ名.ファイル名（.blade.phpは不要）と記述
         
         ↑compact()
         compact()関数＝引数に渡された変数とその値から配列を作成し、戻り値として返す関数
         compact()関数の引数にはビューに渡す変数名を文字列で指定、先頭の$（ドル記号）は不要なので注意。
         今回は変数$name、$languagesをindex.blade.phpファイルに渡す、と読む。
    */

}
