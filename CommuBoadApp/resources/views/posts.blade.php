@extends('common')
@section('title', 'posts')
@section('content')
<h4>投稿一覧
  <div class="pull-right">
    <p>{{$sesid}}</p>
  </div>
</h4>
<table class="table">
  @for($i = 0; $i < count($getpostnames); $i++)
    <tr>
      <tabel>
        <tr>
          <td class="active">{{$getall[$i] -> text}}</td>
        </tr>
        <tr>
          <td>投稿者：{{$getpostnames[$i] -> name}}　　　　　投稿日時：{{$getall[$i] -> post_datetime}}</td>
        </tr>
      </tabel>
    </tr>
  @endfor
  </table>
  <td class="active">
    <a href= "{{ str_replace(url('/'),"",request()->fullUrl()) }}/create">
      <button type="submit" class="btn btn-default">投稿する</button>
    </a>
  </td>
@endsection
