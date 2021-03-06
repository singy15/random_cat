<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="/static/js/style.js"></script>
  <title>
    @yield('title')
  </title
</head>
<body>
  <header>
    <div class="navbar navbar-light bg-light shadow-sm">
      <div class="container">
        <a href="/index.php" class="navbar-brand d-flex align-items-center">
          <span class="text-gray text-bold small" style="color:#888">
            らんだむ
          </span>
          <img src="/static/image/cat-stretch.svg" 
              style="width:24px; height:24px; margin-left:2px; 
                margin-right:5px; margin-top:-5px; 
                filter:invert(1.0);" alt="ホーム"/>
        </a>

        <?php if(isset($_SESSION['user_id'])): ?>
          <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" 
                type="button" id="dropdownMenuButton" 
                data-bs-toggle="dropdown" aria-expanded="false">
              {{ $_SESSION['user_name'] }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li>
                <a class="dropdown-item" href="/logout.php">
                  ログアウト
                </a>
              </li>
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

  <script src="/static/js/template.js"></script>
  @yield('script')
</body>
</html>

