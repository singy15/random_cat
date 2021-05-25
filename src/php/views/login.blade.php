<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./static/css/style.css">
  <style>
    html,
    body {
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
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>
<body class="text-center">
<form class="form-signin" action="/">
  <div class="pb-3">
    <div style="position:relative; display:inline-block; text-align:center; background-color:#AAA; border-radius:75px; width:150px; height:150px;">
      <img src="./static/image/cat-stretch.svg" style="width:64px; height:64px; position:absolute; left:calc(50% - 35px); top:calc(50% - 45px); filter:invert(0.0);" alt="ホーム"/>
      <span class="text-gray text-bold" style="color:#555; position:absolute; left:calc(50% - 32px); top:calc(50% + 17px); white-space:nowrap;">らんだむ</span>
    </div>
  </div>

  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="text" id="inputEmail" class="form-control" placeholder="ユーザID" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
</form>
</body>
</html>

