@extends('common')
@section('title', 'edit')
@section('content')
    <h3>ユーザー登録</h3>
    <hr>
    <div align="center">
      <table border="0">
        <form action="{{url('edit/{new_name}')}}" method="post">
          @csrf
          <tr>
            <th>新規ハンドルネーム</th>
            <td><input type="text" name="new_name" value="" size="24"></td>
          </tr>
          <tr>
            <td colspan="2">
            <input type="submit" value="決定">
          </tr>
        </form>
      </table>
    </div>
@endsection
