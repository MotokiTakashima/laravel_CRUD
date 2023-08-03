<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一覧</title>
</head>
<body>
  <h1>一覧表示</h1>

  <table>
  <tr>
  <th>ID</th>
  <th>名前</th>
  <th>電話番号</th>
  <th>メールアドレス</th>
  </tr>
  @foreach($members as $member)
  <tr>
  <td>{{$member->id}}</td>
  <td>{{$member->name}}</td>
  <td>{{$member->telephone}}</td>
  <td>{{$member->email}}</td>
  <td><th><a href="{{route('member.show',['id'=>$member->id])}}">詳細</a></th></td>
  </tr>
  @endforeach
</table>
<a href="{{ route('member.create') }}">{{ __('新規作成') }}</a>
</body>
</html>