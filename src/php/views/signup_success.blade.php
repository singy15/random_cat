@extends('layouts.template')

@section('content-title')
  アカウント作成
@endsection

@section('content')
  <div class="container">
      <div class="col-12 col-md-9 col-lg-8 mx-auto">
      <div class="col">
          <span class="text-muted">
            アカウント作成に成功しました。<br>
            ログイン画面からログインしてください。
          </span>

          <a href="/login.php" class="labeled-image-button 
              text-x-small text-bold text-color-gray">
            <img class="labeled-image-button" width="64" height="64" 
                src="/static/image/login2.svg" alt="ログイン">
            <br>
            <span>ログイン</span>
          </a>
        </form>

      </div>
    </div>
  </div>
@endsection

