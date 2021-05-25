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

        <a href="/login.php" class="clear-link" style="color:#888">ログイン</a>
      </div>
    </div>
  </header>

  <main>

    <section class="pt-2 text-center container">
      <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto p-0">
          <span class="text-large text-bold text-color-gray">らんだむにゃんこ</span>
        </div>
      </div>
    </section>

    <div class="album py-2">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-9 col-lg-8 mx-auto">
            <div class="card shadow-sm p-1">
              <img class="bd-placeholder-img card-img-top img-fluid" src="./static/image/cat.jpeg" role="img" 
                aria-label="Placeholder: Thumbnail"  focusable="false">
                <title>Placeholder</title>
                <span class="text-bold">"にゃんこ"</span>
              </img>

              <div class="card-body py-1 pb-2">
                <p class="card-text small">今日とったにゃんこです。<br>たいへんもふもふがよろしゅうございます。</p>
                <div class="d-flex justify-content-between align-items-center">
                  <!--
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">見る</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">編集</button>
                  </div>
                  -->
                  <small class="text-muted">投稿者: foobar</small>

                  <span>
                    <a href="#" class="clear-link">
                      <img src="./static/image/heart-outlined.svg" width="20" alt="Myにゃんこ">
                    </a>

                    &nbsp;
                    &nbsp;

                    <a href="#" class="clear-link">
                      <img src="./static/image/footprint-outlined.svg" width="20" alt="いいにゃ">
                      <small class="text-muted">
                        x16
                      </small>
                    </a>


                    <!--                   

                    <a href="#" class="labeled-image-button text-x-small text-bold text-color-gray">
                      <img class="labeled-image-button" width="16" height="16" src="./static/img/heart-outlined.svg" alt="Myにゃんこ">
                      <br>
                      <span>Myにゃんこ</span>
                    </a>

                    <a href="#" class="labeled-image-button text-x-small text-bold text-color-gray">
                      <img class="labeled-image-button" width="16" height="16" src="./static/img/footprint-outlined.svg" alt="いいにゃ">
                      <br>
                      <span>いいにゃ</span>
                    </a>

                    -->

                  </span>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-2">
          <div class="col">
            <a href="/" class="labeled-image-button text-x-small text-bold text-color-gray">
              <img class="labeled-image-button" width="64" height="64" src="./static/image/cat-walk.svg" alt="もっとみる">
              <br>
              <span>もっとみる</span>
            </a>
            
            <a href="./upload.php" class="labeled-image-button text-x-small text-bold text-color-gray">
              <img class="labeled-image-button" width="64" height="64" src="./static/image/upload.svg" alt="投稿にゃんこ">
              <br>
              <span>投稿する</span>
            </a>

            <a href="./my_nyanko.php" class="labeled-image-button text-x-small text-bold text-color-gray">
              <img class="labeled-image-button" width="64" height="64" src="./static/image/heart.svg" alt="Myにゃんこ">
              <br>
              <span>Myにゃんこ</span>
            </a>
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

