@extends('layouts.template')

@section('content-title')
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9 col-lg-8 mx-auto">
        <div class="card shadow-sm p-1">
          <img class="bd-placeholder-img card-img-top img-fluid" src="/static/photo/{{ $post->photo_path }}" role="img" 
            aria-label="Placeholder: Thumbnail"  focusable="false">
            <span class="text-bold text-color-gray">"{{ $post->subject }}"</span>
          </img>
          <div class="card-body py-1 pb-2">
            <p class="card-text small text-color-gray">{{ $post->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
              <small class="text-muted">投稿者: {{ $author->login_id }}</small>

              <span>
                <form method="post" action="/post_favorite.php"   
                    name="post_form_favorite" style="display:inline">
                  <input type="hidden" name="post_id" 
                      value="{{ $post->post_id }}">
                  <a href="{{ isset($_SESSION['user_id'])? 'javascript:toggleFavorite('. $post->post_id .')' : '/login.php' }}" 
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
                  <a href="{{ isset($_SESSION['user_id'])? 'javascript:toggleLike('. $post->post_id .')' : '/login.php' }}" 
                      class="clear-link">
                    <img id="like" 
                      src="{{ ($like)? '/static/image/footprint-filled.svg' : '/static/image/footprint-outlined.svg' }}" 
                      width="20" alt="いいにゃ">
                  </a>
                </form>
                <small id="like_count" class="text-muted">
                  {{ 'x' . $like_count }}
                </small>

                @if ($_SESSION['user_id'] == $post->author)
                  &nbsp;
                  &nbsp;

                  <form method="post" action="/post_delete.php"   
                      name="post_form_delete" style="display:inline">
                    <input type="hidden" name="post_id" 
                        value="{{ $post->post_id }}">
                    <a href="javascript:post_form_delete.submit()" 
                        class="clear-link"
                        onclick="return confirm('記事を削除します、よろしいですか？')" 
                    >
                      <img src="/static/image/delete.svg" 
                        width="20" alt="削除">
                    </a>
                  </form>
                @endif
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 py-2">
      <div class="col-12 col-sm-12 col-md-12">
        <a href="javascript:history.back()" class="labeled-image-button 
            text-x-small text-bold text-color-gray">
          <img class="labeled-image-button" width="64" height="64" 
              src="/static/image/back.svg" alt="もどる">
          <br>
          <span>もどる</span>
        </a>
      </div>
    </div>

</div>
@endsection

@section('script')
<script src="/static/js/post_detail.js"></script>
@endsection

