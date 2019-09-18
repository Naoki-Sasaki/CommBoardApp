@extends('common')
@section('title', 'login')
@section('content')
    <h3>ログイン</h3>
    <hr>
    <div align="center">
      <table border="0">
        <form action="{{url('signin/{login_id&login_pass}')}}" method="post">
          @csrf
          <tr>
            <th>ユーザID</th>
            <td><input type="text" name="login_id" value="" size="24"></td>
          </tr>
          <tr>
            <th>パスワード</th>
            <td><input type="text" name="login_pass" value="" size="24"></td>
          </tr>
          <tr>
            <td colspan="2">
            <input type="submit" value="ログイン">
          </tr>
        </form>
      </table>
    </div>
@endsection
