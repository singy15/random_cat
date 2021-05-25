@extends('layouts.template')

@section('content-title')
  Myにゃんこ
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top card-img-bottom img-fluid" width="100%" height="100%" src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top card-img-bottom img-fluid" width="100%" height="100%" src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>


      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top card-img-bottom img-fluid" width="100%" height="100%" src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top card-img-bottom img-fluid" width="100%" height="100%" src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top card-img-bottom img-fluid" width="100%" height="100%" src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>

    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-2">
      <div class="col">
        <a href="#prev" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/cat-walk.svg" style="transform:scale(-1.0, 1.0);" alt="もっとみる">
          <br>
          <span>前</span>
        </a>

        <a href="#next" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/cat-walk.svg" alt="もっとみる">
          <br>
          <span>次</span>
        </a>

        
        <a href="/index.php" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/back.svg" alt="もどる">
          <br>
          <span>もどる</span>
        </a>
      </div>
    </div>

  </div>
@endsection

