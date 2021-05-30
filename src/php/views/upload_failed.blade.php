@extends('layouts.template')

@section('content-title')
  投稿にゃんこ
@endsection

@section('content')
  <div class="container">
      <div class="col">
        <span class="text-muted">
          にゃんこのアップロードに失敗しました。
          ファイルサイズは10MB以内にしてください
        </span>

        <br>
        <br>

        <a href="/index.php" class="labeled-image-button text-x-small 
            text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" 
            src="/static/image/back.svg" alt="もどる">
          <br>
          <span>もどる</span>
        </a>
      </div>
    </div>
  </div>
@endsection

