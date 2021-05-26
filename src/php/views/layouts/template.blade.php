<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./static/css/style.css?aaa=222">
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
        <a href="/index.php" class="navbar-brand d-flex align-items-center">
          <span class="text-gray text-bold small" style="color:#888">らんだむ</span>
          <img src="/static/image/cat-stretch.svg" style="width:24px; height:24px; margin-left:2px; margin-right:5px; margin-top:-5px; filter:invert(1.0);" alt="ホーム"/>
        </a>

        <?php if(isset($_SESSION['user_id'])): ?>
          <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              {{ $_SESSION['user_name'] }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="/logout.php">ログアウト</a></li>
            </ul>
          </div>
        <?php else: ?>
          <a href="/login.php" class="clear-link" style="color:#888">
            ログイン
          </a>
        <?php endif; ?>

      </div>
    </div>
  </header>

  <main>

    <section class="pt-2 text-center container">
      <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto p-0">
          <span class="text-large text-bold text-color-gray">
            @yield('content-title')
          </span>
        </div>
      </div>
    </section>

    <div class="album py-2">
      @yield('content')
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

