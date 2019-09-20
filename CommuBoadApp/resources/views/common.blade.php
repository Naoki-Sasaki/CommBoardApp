<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-dark" style="background-color:#e3f2fd">
        <h3>0.5ちゃんねる</h3>
        <div class="pull-right">
          <button onclick="location.href='/threads'" type="submit" class="btn btn-default">home</button>
          <button onclick="location.href='/signin'" type="submit" class="btn btn-default">ログイン</button>
          <button onclick="location.href='/edit'" type="submit" class="btn btn-default">編集</button>
          <button onclick="location.href='/signup'" type="submit" class="btn btn-default">登録</button>
          <button onclick="location.href='/logout'" type="submit" class="btn btn-default">ログアウト</button>

        </div>
      </nav>
    </header>
      @yield('content')
    <footer>
      <nav class="navbar navbar-dark" style="background-color:#e3f2fd">
      </nav>
    </footer>
  </body>
</html>
