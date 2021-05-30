@extends('layouts.template')

@section('content-title')
  投稿にゃんこ
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

        <form method="post" name="post_form" action="" 
            enctype="multipart/form-data">
          <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
          <input type="hidden" name="posted" value="1">

          <div class="form-group">
            <label for="exampleInputEmail3" class="text-color-gray text-bold">
              画像
            </label>
            <br>
            <input type="file" name="photo" class=""
              accept=".png, .jpg, .jpeg, .gif" 
              id="exampleInputEmail3" placeholder="ファイルを選択してください"
              required>
            <br>
            <small class="form-text text-muted">
              ※PMG、JPEG、GIFに対応しています
            </small>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1" class="text-color-gray text-bold">
              タイトル
            </label>
            <input type="text" name="subject" class="form-control" 
              id="exampleInputEmail1" placeholder="タイトルを入力してください"
              value="{{ !empty($post_form['subject']) ? $post_form['subject'] : '' }}"
              required>
            <small class="form-text text-muted">
              ※２０文字以内で入力してください
            </small>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1" 
                class="text-color-gray text-bold">
              コメント
            </label>
            <textarea class="form-control" name="description" 
                id="exampleInputPassword1" 
                placeholder="コメントを入力してください" row="3"
            >{{ !empty($post_form['description']) ? $post_form['description'] : '' }}</textarea>
            <small class="form-text text-muted">
              ※１００文字以内で入力してください
            </small>
          </div>

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
              src="/static/image/upload.svg" alt="投稿にゃんこ">
            <br>
            <span>投稿する</span>
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

