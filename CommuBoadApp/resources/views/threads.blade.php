@extends('common')
@section('title', 'threads')
@section('content')

<div class="jumbotron well">
  <div class="container">
    <p>ID：tanaka、PASS：tanakaでログイン可能</p>
  </div>
</div>

<h4>スレッド一覧
<div class="pull-right">
  <p>{{$sesid}}</p>
</div>
</h4>
  <table class="table">
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
              <h7>作成者：{{$getnames[$i] -> name}}　　　　　作成日時：{{$all[$i] -> create_datetime}}</h7>
            </td>
          </tr>
        </tabel>
      </tr>
    @endfor
  </table>
  <td class="active">
    <a href="threads/create">
      <button type="submit" class="btn btn-default">スレッドを作成する</button>
</td>
@endsection
