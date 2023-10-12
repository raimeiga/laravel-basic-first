<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel基礎</title>
 </head>
 
 <body>
     <p>Hello, world!</p>
     <p>こんにちは、{{ $name }}さん！</p>  <!-- $nameはコントローラから受け取った変数 -->
      <ul>
          @foreach($languages as $language)
              <li>{{ $language }}</li>
          @endforeach
      </ul>
 </body>
           <!-- ↑ Bladeテンプレート内ではifやforeachの前にアットマークをつけるだけで、
                簡単にPHPやLaravelの処理を実行できる。アットマークから始まるコード
                のことを、Laravelではディレクティブという（directive=命令って意味）。 -->
 
 </html>