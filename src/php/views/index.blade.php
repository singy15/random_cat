@extends('layouts.template')

@section('content-title')
  らんだむにゃんこ
@endsection

@section('content')
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
@endsection

