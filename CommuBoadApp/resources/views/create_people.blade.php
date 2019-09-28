@extends('common')
@section('title', 'signup')
@section('content')
    <h3>ユーザー登録</h3>
    <hr>
    <div align="center">
      <table border="0">
        <form action="{{url('signup/{new_login_id&new_login_pass}')}}" method="post">
          @csrf
          <tr>
            <th>新規ユーザID</th>
            <td><input type="text" name="new_login_id" value="" size="24"></td>
          </tr>
          <tr>
            <th>パスワード</th>
            <td><input type="text" name="new_login_pass" value="" size="24"></td>
          </tr>
          <tr>
            <td colspan="2">
            <input type="submit" value="登録">
          </tr>
        </form>
      </table>
    </div>

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
