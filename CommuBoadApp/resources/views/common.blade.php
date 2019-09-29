<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <div class="navbar-header">
              <a class="navbar-brand" href="threads">home</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/signin">signin</a></li>
              <li><a href="/edit">edit</a></li>
              <li><a href="/signup">signup</a></li>
              <li><a href="/logout">logout</a></li>
            </ul>
          </div>
        </nav>

    <!-- <header>
      <nav class="navbar navbar-dark" style="background-color:#696969">
        <div class="row">
          <div class="col-lg-6 skyblue">
            <h3><font color="#f0f8ff">テスト</font></h3>
          </div>
          <div class="col-lg-6 pink">
            <div class="pull-right">
              <button onclick="location.href='/threads'" type="submit" class="btn btn-default">home</button>
              <button onclick="location.href='/signin'" type="submit" class="btn btn-default">ログイン</button>
              <button onclick="location.href='/edit'" type="submit" class="btn btn-default">編集</button>
              <button onclick="location.href='/signup'" type="submit" class="btn btn-default">登録</button>
              <button onclick="location.href='/logout'" type="submit" class="btn btn-default">ログアウト</button>
            </div>
          </div>
        </div>
      </nav> -->
    </header>
      @yield('content')
    <footer>
      <nav class="navbar navbar-default">
      </nav>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
