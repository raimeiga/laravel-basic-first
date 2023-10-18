<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
                                <!-- ↓ route()ヘルパー＝名前付きルートを呼び出すヘルパー
                                 例）<a href="{{ route('posts.index') }}">投稿アプリ</a>のように書く
                                'posts.index'部分は、名前付きルートの名前の部分で、
                                 posts/index.blade.phpというURLの、フォルダ名.blade.phpを省略した書き方 -->
 <body>
      <h1>お問い合わせ</h1> <!--↓ requests/confirm.blade.phpに送信内容を送る -->
     <form action="{{ route('requests.confirm') }}" method="POST">
         @csrf
         <table>
             <tr>
                 <th>お名前</th>
                 <td>
                     <input type="text" name="user_name">
                 </td>
             </tr>
             <tr>
                 <th>メールアドレス</th>
                 <td>
                     <input type="text" name="user_email">
                 </td>
             </tr>
             <tr>
                 <th>性別</th>
                 <td>
                     <input type="radio" name="user_gender" value="男性" checked>男性
                     <input type="radio" name="user_gender" value="女性">女性
                 </td>
             </tr>    
             <tr>
                 <th>お問い合わせ種別</th>
                 <td>
                      <select name="category">
                          <option value="ご意見やご感想">ご意見やご感想</option>
                          <option value="不具合について">不具合について</option>
                          <option value="その他">その他</option>
                      </select>                    
                 </td>            
             </tr>
              <tr>
                  <th>お問い合わせ内容</th>
                  <td>                     
                      <textarea name="message" cols="30" rows="10"></textarea>
                  </td>
              </tr>      
         </table>
         <input type="submit" value="送信">
     </form>
 </body>
 
 </html>