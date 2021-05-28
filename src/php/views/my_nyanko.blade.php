@extends('layouts.template')

@section('content-title')
  Myにゃんこ
@endsection

@section('content')
  <script>
    var page_count = {{ $get_form['page_count']  }};
    var page = {{ $get_form['page'] }};

    function onCategoryChange(category) {
      document.getElementById("category").value = category;
      document.getElementById("page").options[0].selected = "true";
    }

    function onPageMove(dir) {
      var target = page + dir;

      if(target < 0) {
        target = 0;
      } else if(target >= page_count) {
        target = page_count - 1;
      }

      var select_page = document.getElementById("page");
      for(var i = 0; i < select_page.options.length; i++) {
        if(select_page.options[i].value === (target).toString()) {
          console.log(select_page.options[i].value);
          select_page.options[i].selected = "true";
          break;  
        }   
      }
    }

    function toggleLike() {

    }
  </script>

  <div class="container" id="app">
    <form method="get" action="/my_nyanko.php" name="get_form">
      <div class="row">
        <div class="col pb-2">
          <input type="hidden" name="category" id="category" value="{{ $get_form['category'] }}">

          <button type="submit" class="btn btn-secondary btn-sm 
              {{ (!empty($get_form['category']) && ($get_form['category'] == 'favorite'))? 'active' : '' }}"
              onclick="onCategoryChange('favorite')">
            お気に入りのにゃんこ
          </button>

          <button type="submit" class="btn btn-secondary btn-sm
              {{ (!empty($get_form['category']) && ($get_form['category'] == 'posted'))? 'active' : '' }}"
              onclick="onCategoryChange('posted')">
            投稿したにゃんこ
          </button>

        </div>
      </div>

      <div class="row">
        @if (count($posts) > 0)
          @foreach ($posts as $post)
            <div class="col-sm-6 col-md-4 mb-3">
              <a href="/post_detail.php?post_id={{ $post->post_id  }}"
                  class="clear-link">
                <div class="card shadow-sm p-1">
                  <img class="bd-placeholder-img card-img-top 
                      card-img-bottom img-fluid" width="100%" height="100%" 
                      src="/static/photo/{{ $post->photo_path }}" role="img" 
                    aria-label="Placeholder: Thumbnail"  focusable="false">
                  </image>
                </div>
              </a>
            </div>
          @endforeach
        @else
          <div class="col-12 col-sm-12 col-md-12 p-5">
            <span class="text-muted">にゃんこがいません...</span>
          </div>
        @endif
      </div>

      <div class="row pt-2">
        <div class="col-12 col-sm-6 col-md-4 mx-auto">
          <span class="span-table" style="text-align:center;">
            <span class="span-table-cell">
              <a href="javascript:get_form.submit()" onclick="onPageMove(-1)" class="center-labeled-image-button text-x-small text-bold text-color-gray">
                <span>前</span>
                <img class="center-labeled-image-button" width="48" height="48" src="/static/image/cat-walk.svg" style="transform:scale(-1.0, 1.0);" alt="前">
              </a>
            </span>

            <span class="span-table-cell">
              <select name="page" id="page" onchange="javascript:get_form.submit()">
                @for ($i = 0; $i < $get_form['page_count']; $i++)
                  <option value="{{ $i }}" 
                      {{ ($get_form['page'] == ((int)$i))? ' selected ' : '' }}
                  >{{ $i + 1 }}</option>
                @endfor
              </select>
            </span>

            <span class="span-table-cell">
              <a href="javascript:get_form.submit()" onclick="onPageMove(1)" class="center-labeled-image-button text-x-small text-bold text-color-gray">
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

    </form>
  </div>
@endsection

