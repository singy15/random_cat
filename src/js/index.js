const axios = require('axios');

window.toggleLike = function(post_id) {
  axios
    .post('/post_like.php',
      {
        post_id: post_id
      }
    ).then(response => {
      console.log(response);

      var like = document.getElementById("like"); 
      var like_count = document.getElementById("like_count"); 
      if(response.data.liked) {
        like.src = "/static/image/footprint-filled.svg";
      } else {
        like.src = "/static/image/footprint-outlined.svg";
      }

      like_count.innerHTML = "x" + response.data.like_count.toString();
    });
}

console.log("らんだむにゃんこ!!!!");

