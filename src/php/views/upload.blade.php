@extends('layouts.template')

@section('content-title')
  投稿にゃんこ
@endsection

@section('content')
  <div class="container">
      <div class="col-12 col-md-9 col-lg-8 mx-auto">
      <div class="col">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail3" class="text-color-gray text-bold">画像</label>
            <br>
            <input type="file" class="" id="exampleInputEmail3" placeholder="ファイルを選択してください">
            <small class="form-text text-muted">※PMG、JPEG、GIFに対応しています</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-color-gray text-bold">タイトル</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="タイトルを入力してください">
            <small class="form-text text-muted">※２０文字以内で入力してください</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-color-gray text-bold">コメント</label>
            <textarea class="form-control" id="exampleInputPassword1" placeholder="コメントを入力してください" row="3"></textarea>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">利用規約に同意しました</label>
          </div>

          <a href="/" class="labeled-image-button text-x-small text-bold text-color-gray">
            <img class="labeled-image-button" width="64" height="64" src="./static/image/upload.svg" alt="投稿にゃんこ">
            <br>
            <span>投稿する</span>
          </a>

          <a href="/" class="labeled-image-button text-x-small text-bold text-color-gray">
            <img class="labeled-image-button" width="64" height="64" src="./static/image/back.svg" alt="もどる">
            <br>
            <span>もどる</span>
          </a>
        </form>
      </div>
    </div>
  </div>
@endsection

