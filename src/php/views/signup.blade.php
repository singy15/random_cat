@extends('layouts.template')

@section('content-title')
  アカウント作成
@endsection

@section('content')
  <div class="container">
      <div class="col-12 col-md-9 col-lg-8 mx-auto">
      <div class="col">

        <?php if( !empty($error) ): ?>
          <?php foreach( $error as $value ): ?>
            <div class="alert alert-danger small m-1 p-1" role="alert">
              <?php echo $value; ?>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>

        <form method="post" name="post_form" action="/signup.php" 
            enctype="multipart/form-data">

          <div class="form-group">
            <label for="exampleInputEmail1" class="text-color-gray text-bold">
              ユーザID
            </label>
            <input type="text" name="login_id" class="form-control" 
              id="exampleInputEmail1" placeholder="ユーザID"
              value="{{ !empty($post_form['login_id']) ? $post_form['login_id'] : '' }}"
              required>
            <small class="form-text text-muted">
              ※半角英数記号で入力してください
            </small>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1" 
                class="text-color-gray text-bold">
              パスワード
            </label>
            <input type="password" name="password" class="form-control" 
              id="exampleInputEmail1" placeholder="パスワード"
              value="{{ !empty($post_form['password']) ? $post_form['password'] : '' }}"
              required>
            <input type="password" name="password_confirm" class="form-control" 
              id="exampleInputEmail1" placeholder="確認のためもう一度入力してください"
              value="{{ !empty($post_form['password_confirm']) ? $post_form['password_confirm'] : '' }}"
              required>
            <small class="form-text text-muted">
              ※半角英数記号で入力してください
            </small>
          </div>

          <!--
          <div class="form-group">
            <label for="exampleInputEmail6" class="text-color-gray text-bold">
              メールアドレス
            </label>
            <input type="email" name="email" class="form-control" 
              id="exampleInputEmail6" placeholder="メールアドレス"
              value="{{ !empty($post_form['email']) ? $post_form['email'] : '' }}"
              required>
            <small class="form-text text-muted">
              ※パスワードリセット時にのみ使用します
            </small>
          </div>
          -->

          <!--
          <div class="form-group form-check">
            <label for="rule" 
                class="text-color-gray text-bold">
              利用規約
            </label>
            <textarea class="form-control" id="rule" readonly>規約
            </textarea>
          </div>

          <div class="form-group form-check">
            <input type="checkbox" name ="agreed" class="form-check-input" 
                id="exampleCheck1" 
                {{ !empty($post_form['agreed']) ? 'checked' : '' }}
                value="1">
            <label class="form-check-label"
                for="exampleCheck1">
              利用規約に同意する
            </label>
          </div>
          -->
          <input type="hidden" name="agreed" value="1">

          <a href="javascript:post_form.submit()" class="labeled-image-button 
              text-x-small text-bold text-color-gray">
            <img class="labeled-image-button" width="64" height="64" 
              src="/static/image/pencil.svg" alt="アカウント作成">
            <br>
            <span>アカウント作成</span>
          </a>

          <a href="/index.php" class="labeled-image-button 
              text-x-small text-bold text-color-gray">
            <img class="labeled-image-button" width="64" height="64" 
                src="/static/image/back.svg" alt="もどる">
            <br>
            <span>もどる</span>
          </a>
        </form>

      </div>
    </div>
  </div>
@endsection

