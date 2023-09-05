<h1>編集</h1>

 <form method="POST" action="{{route('member.update',['id' =>$member->id])}}">
  @csrf

 <div>
  名前
  <input type="text" name=name value="{{$member->name}}">
  </div>

  <div>
  パスワード
  <input type="text" name=password value="{{$member->password}}">
  </div>

  <div>
  メールアドレス
  <input type="text" name=email value="{{$member->email}}">
  </div>


  <input type="submit" value="更新する">

  </form>
  <a href="{{ route('member.show', ['id'=>$member->id])}}">{{ __('詳細に戻る') }}</a>