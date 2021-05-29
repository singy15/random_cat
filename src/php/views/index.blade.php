@extends('layouts.template')

@section('content-title')
  らんだむにゃんこ
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9 col-lg-8 mx-auto">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top img-fluid" src="/static/photo/{{ $post->photo_path }}" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <title>Placeholder</title>
            <span class="text-bold text-color-gray">"{{ $post->subject }}"</span>
          </img>
          <div class="card-body py-1 pb-2">
            <p class="card-text small text-color-gray">{{ $post->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">投稿者: {{ $author->login_id }}</small>

              <span>
                <!--
                <a href="#" class="clear-link">
                  <img src="/static/image/heart-outlined.svg" width="20" alt="Myにゃんこ">
                </a>
                -->
                <form method="post" action="/post_favorite.php"   
                    name="post_form_favorite" style="display:inline">
                  <input type="hidden" name="post_id" 
                      value="{{ $post->post_id }}">
                  <a href="javascript:toggleFavorite({{ $post->post_id }})" 
                      class="clear-link">
                    <img id="favorite" 
                      src="{{ ($favorite)? '/static/image/heart.svg' : '/static/image/heart-outlined.svg' }}" 
                      width="20" alt="Myにゃんこ">
                  </a>
                </form>

                &nbsp;
                &nbsp;

                <form method="post" action="/post_like.php"   
                    name="post_form_like" style="display:inline">
                  <input type="hidden" name="post_id" 
                      value="{{ $post->post_id }}">
                  <a href="javascript:toggleLike({{ $post->post_id }})" 
                      class="clear-link">
                    <img id="like" 
                      src="{{ ($like)? '/static/image/footprint-filled.svg' : '/static/image/footprint-outlined.svg' }}" 
                      width="20" alt="いいにゃ">
                  </a>
                </form>
                <small id="like_count" class="text-muted">
                  {{ 'x' . $like_count }}
                </small>
              </span>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-2">
      <div class="col">
        <a href="/index.php" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/cat-walk.svg" alt="もっとみる">
          <br>
          <span>もっとみる</span>
        </a>

        <a href="{{ isset($_SESSION['user_id'])? '/upload.php' : '/login.php' }}" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/upload.svg" alt="投稿にゃんこ">
          <br>
          <span>投稿する</span>
        </a>

        <a href="{{ isset($_SESSION['user_id'])? '/my_nyanko.php' : '/login.php' }}" class="labeled-image-button text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" src="/static/image/heart.svg" alt="Myにゃんこ">
          <br>
          <span>Myにゃんこ</span>
        </a>
      </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="/static/js/index.js"></script>
@endsection

