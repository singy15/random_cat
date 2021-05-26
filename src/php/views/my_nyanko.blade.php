@extends('layouts.template')

@section('content-title')
  Myにゃんこ
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col pb-2">
        <input type="hidden" name="category" value="category-favorite">
        <button type="button" class="btn btn-secondary btn-sm active">
          お気に入りのにゃんこ
        </button>
        <button type="button" class="btn btn-secondary btn-sm">
          投稿したにゃんこ
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top 
              card-img-bottom img-fluid" width="100%" height="100%" 
              src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top 
              card-img-bottom img-fluid" width="100%" height="100%" 
              src="/static/image/cat.jpeg" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
          </image>
        </div>
      </div>


      <div class="col-sm-6 col-md-4">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top 
            card-img-bottom img-fluid" width="100%" height="100%" src="/static/image/cat.jpeg" role="img" 
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

    <div class="row pt-2">
      <div class="col-12 col-sm-6 col-md-4 mx-auto">
        <span class="span-table" style="text-align:center;">
          <span class="span-table-cell">
            <a href="#prev" class="center-labeled-image-button text-x-small text-bold text-color-gray">
              <span>前</span>
              <img class="center-labeled-image-button" width="48" height="48" src="/static/image/cat-walk.svg" style="transform:scale(-1.0, 1.0);" alt="前">
            </a>
          </span>

          <span class="span-table-cell">
            <select name="page">
              <option value="1">1</option>
              <option value="2" selected>2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </span>

          <span class="span-table-cell">
            <a href="#next" class="center-labeled-image-button text-x-small text-bold text-color-gray">
              <span>次</span>
              <img class="center-labeled-image-button" width="48" height="48" src="/static/image/cat-walk.svg" alt="次">
            </a>
          </span>
        </span>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-2">
      <div class="col">
        <a href="/index.php" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/back.svg" alt="もどる">
          <br>
          <span>もどる</span>
        </a>
      </div>
    </div>

  </div>
@endsection

