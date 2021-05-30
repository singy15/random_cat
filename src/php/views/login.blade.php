<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/static/css/style.css">
  <style>
    html,body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[name="user_id"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[name="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    .logo-back {
      position:relative; 
      display:inline-block; 
      text-align:center; 
      background-color:#FFF; 
      border:solid 1px #CCC; 
      border-radius:75px; 
      width:150px; 
      height:150px;
    }

    .logo-cat {
      width:64px; 
      height:64px; 
      position:absolute; 
      left:calc(50% - 35px); 
      top:calc(50% - 45px); 
      filter:invert(0.0);
    }

    .logo-text {
      color:#555;
      position:absolute;
      left:calc(50% - 32px); 
      top:calc(50% + 17px);
      white-space:nowrap;
    }
  </style>
</head>
<body class="text-center">
<form class="form-signin" method="post" action="/login.php">
  <input type="hidden" name="posted" value="1">

  <div class="pb-3">
    <a class="clear_link" href="/index.php">
      <div class="logo-back">
        <img src="/static/image/cat-stretch.svg" class="logo-cat" alt="top"/>
        <span class="text-gray text-bold logo-text">らんだむ</span>
      </div>
    </a>
  </div>

  <input type="text" name="user_id" class="form-control" 
    placeholder="ユーザID" autofocus>
  <input type="password" name="password" class="form-control" 
    placeholder="パスワード">
  <button class="btn btn-lg btn-primary btn-block" 
    type="submit">ログイン</button>

  <?php if( !empty($error) ): ?>
    <?php foreach( $error as $value ): ?>
      <div class="alert alert-danger small m-1 p-1" role="alert">
        <?php echo $value; ?>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>

  <br>
  <a href="/index.php" class="small">ゲストとして利用する</a>
  <br>
  <br>
  <a href="/signup.php" class="small">アカウント作成</a>

  <p class="mt-5 mb-3 text-muted">&copy; kedama 2021</p>
</form>
</body>
</html>

