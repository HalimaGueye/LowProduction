//video-bg script
var playable = true;

$(window).scroll(function() {
    $('video').each(function() {
      if(playable){
        if ($(this).visible(true)) {
            $(this)[0].play();
        } else {
            $(this)[0].pause();
        }
      }
    })
});

var vid = document.getElementById("bgvid");
var pauseButton = document.getElementById("vidpause");
function vidFade() {
  vid.classList.add("stopfade");
}
vid.addEventListener('ended', function() {
  // only functional if "loop" is removed
  vid.pause();
  // to capture IE10
  vidFade();
});
pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    playable = true;
    vid.play();
    pauseButton.innerHTML = "<i class='fa fa-pause'></i>";
  } else {
    playable = false;
    vid.pause();
    pauseButton.innerHTML = "<i class='fa fa-play'></i>";
  }
})
//end video-bg script
