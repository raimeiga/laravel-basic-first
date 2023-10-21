<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
     <h1>商品選択</h1>  
     <!-- エラーメッセージの表示方法 ↓
     　　  CookieController.phpで、validate()メソッドを使っているから、
          バリデーション（入力必須などの検証）に引っかかった場合、自動
          的に変数$errors（↓）にエラーメッセージを格納してこのページに
          渡してくれる ↓↓↓↓↓↓↓↓↓↓ -->
     @if ($errors->any())
         <div>
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif     
 
     <form action="{{ route('cookies.store') }}" method="POST">
         @csrf
         <select name="product_id">
             <option disabled selected value="">選択してください</option>
             @foreach ($products as $product)
                 <option value="{{ $product->id }}">{{ $product->product_name }}</option>
             @endforeach                         
         </select>
         <input type="submit" value="カートに入れる">
     </form>
 </body>
 
 </html>