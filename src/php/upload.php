<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./static/css/style.css">
</head>
<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <!--
            <p class="text-muted">撮影者や撮影した背景など、アルバムに関する情報を追加しましょう。いくつかの文を書いておくと、友達が写真を選ぶ手助けになるかもしれません。また、写真は SNS や連絡先へとリンクしておきましょう。</p>
            -->
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Twitter でフォローする</a></li>
              <li><a href="#" class="text-white">Facebook でいいねする</a></li>
              <li><a href="#" class="text-white">Email を送る</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-light bg-light shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <span class="text-gray text-bold small" style="color:#888">らんだむ</span>
          <img src="./static/image/cat-stretch.svg" style="width:24px; height:24px; margin-left:2px; margin-right:5px; margin-top:-5px; filter:invert(1.0);" alt="ホーム"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="pt-2 text-center container">
      <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto p-0">
          <span class="text-large text-bold text-color-gray">投稿にゃんこ</span>
        </div>
      </div>
    </section>

    <div class="album py-2">
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
    </div>

  </main>

      <!--
  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">トップに戻る</a>
      </p>
      <p class="mb-1">アルバムサンプルは &copy; Bootstrap ですが、ダウンロードしてカスタマイズしてみましょう。</p>
      <p class="mb-0">Bootstrap は初めてですか？ <a href="/">Bootstrap ホームページにアクセスする</a>か<a href="/docs/5.0/getting-started/introduction/">スタートガイド</a>を読みましょう。</p>
    </div>
  </footer>
      -->
</body>
</html>
