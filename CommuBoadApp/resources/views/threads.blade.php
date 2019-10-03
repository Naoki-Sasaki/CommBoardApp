@extends('common')
@section('title', 'threads')
@section('content')

<div class="jumbotron well">
  <div class="container">
    <p>ID：tanaka、PASS：tanakaでログイン可能</p>
  </div>
</div>


<div class="container">
  <table class="table">
    <tr>スレッド一覧</tr>
    @for($i = 0; $i < count($getnames); $i++)
      <tr>
        <tabel>
          <tr>
            <td class="active">
              <a href="posts/{{$all[$i] -> id}}">
              <h4>{{$all[$i] -> title}}</h4></td></a>
            </tr>
          <tr>
            <td>
              <h7>{{$getnames[$i] -> name}}：{{$all[$i] -> create_datetime}}</h7>
            </td>
          </tr>
        </tabel>
      </tr>
    @endfor

    <td class="active">
      <a href="threads/create">
        <button type="submit" class="btn btn-default">スレッドを作成する</button>
  </td>
  </table>
</div>

<div class="jumbotron well">
  <div class="container">
    <p>{{$sesid}}でログイン中</p>
  </div>
</div>
@endsection
