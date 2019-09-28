@extends('common')
@section('title', '投稿')
@section('content')


<h4>投稿
  <div class="pull-right">
    <p>{{$sesid}}</p>
  </div>
</h4>
<table>
  <form action="{{ str_replace(url('/'),"",request()->fullUrl())}}/{text}" method="post">
    @csrf
    <tr>
      <td>
        <textarea name="text" rows="4" cols="40"></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" value="投稿">
      </td>
    </tr>
  </form>
</table>
@if($errors -> any())
  <div class="error">
    <ul>
      @foreach($errors -> all() as $message)
        <li>{{$message}}</li>
      @endforeach
    </ul>
  </div>
@endif
@endsection
