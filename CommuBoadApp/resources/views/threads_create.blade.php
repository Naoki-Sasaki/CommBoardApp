@extends('common')
@section('title', 'スレッド作成')
@section('content')

<h4>スレッド作成
  <div class="pull-right">
    <p>{{$sesid}}</p>
  </div>
</h4>
<table>
  <form action="{{url('threads/{title}')}}" method="post">
    @csrf
    <tr>
      <td>
        <input type="text" name="title" value="" size="30">
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" value="作成">
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
