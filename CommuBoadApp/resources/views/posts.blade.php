@extends('common')
@section('title', 'posts')
@section('content')
<div class="container">
<table class="table">
  <tr>投稿一覧</tr>
  <tbody>
    @for($i = 0; $i < count($getpostnames); $i++)
      <tr>
        <td class="active">
          {{$i+1}}：{{$getpostnames[$i] -> name}}：{{$getall[$i] -> post_datetime}}
        </td>
      <td class="active">
        <!-- <h7>{{$getpostnames[$i] -> name}}</h7> -->
      </td>
      <td class="active">
        <!-- <h7>{{$getall[$i] -> post_datetime}}</h7> -->
      </td>
      </tr>

      <td height="80" colspan="3">
        <h4>
          {{$getall[$i] -> text}}
        </h4>
      </td>
      <!-- <td>1</td>
      <td>SYODA-Tuyano</td>
      <td>syoda@tuyano.com</td> -->
    @endfor
  </tbody>

  <td>
    <a href= "{{ str_replace(url('/'),"",request()->fullUrl()) }}/create">
      <button type="submit" class="btn btn-default">投稿する</button>
    </a>
  </td>

</table>
</div>

<!-- <table class="table">
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
  </table> -->
  <div class="jumbotron well">
    <div class="container">
      <p>{{$sesid}}でログイン中</p>
    </div>
  </div>
@endsection
