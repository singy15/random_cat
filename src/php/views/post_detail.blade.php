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
                <a href="#" class="clear-link">
                  <img src="/static/image/heart-outlined.svg" width="20" alt="Myにゃんこ">
                </a>

                &nbsp;
                &nbsp;

                <a href="#" class="clear-link">
                  <img src="/static/image/footprint-outlined.svg" width="20" alt="いいにゃ">
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

