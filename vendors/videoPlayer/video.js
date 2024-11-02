$(document).ready(function () {
  var vid = $("#videoSrc");

  //default video source
  $(vid).attr("src", $(".videoItem:first").attr("data-src"));

  // addClass playing to first video link
  $(".videoItem:first").addClass("playing");

  $(".videoItem").on("click", function (event) {
    // prevent link default
    event.preventDefault();

    // change video source
    $(vid).attr("src", $(this).attr("data-src"));

    // remouve class playing from unplayed video data-src
    $(".videoList .videoItem").removeClass("playing");

    // add class playing to video data-src
    $(this).addClass("playing");

    // add class paused to give the play/pause button the right look
    $(".btnPlay").addClass("paused");

    // play the video
    vid[0].play();

    // adjust prev button state
    if ($(".videoItem:first").hasClass("playing")) {
      $(".prevvid").addClass("disabled");
    } else {
      $(".prevvid").removeClass("disabled");
    }

    // adjust next button state
    if ($(".videoItem:last").hasClass("playing")) {
      $(".nextvid").addClass("disabled");
    } else {
      $(".nextvid").removeClass("disabled");
    }
  });

  //video canplaythrough event
  //solve Chrome cache issue
  var completeloaded = false;
  vid.on("canplaythrough", function () {
    completeloaded = true;
  });

  //video ended event
  vid.on("ended", function () {
    $(".btnPlay").removeClass("paused");
    vid[0].pause();
  });

  /*bottomSec*/
  //before everything get started
  vid.on("loadedmetadata", function () {
    //set video properties
    $(".current").text(timeFormat(0));
    $(".duration").text(timeFormat(vid[0].duration));
    if (vid[0].muted) {
      updateVolume(0, 0);
    } else {
      updateVolume(0, 0.7);
    }
  });

  //display video buffering bar
  var startBuffer = function () {
    var currentBuffer = vid[0].buffered.end(0);
    var maxduration = vid[0].duration;
    var perc = (100 * currentBuffer) / maxduration;
    $(".bufferBar").css("width", perc + "%");

    if (currentBuffer < maxduration) {
      setTimeout(startBuffer, 500);
    }
  };

  //display current video play time
  vid.on("timeupdate", function () {
    var currentPos = vid[0].currentTime;
    var maxduration = vid[0].duration;
    var perc = (100 * currentPos) / maxduration;
    $(".timeBar").css("width", perc + "%");
    $(".current").text(timeFormat(currentPos));
  });

  //CONTROLS EVENTS
  //video screen and play button clicked
  vid.on("click", function () {
    playpause();
  });
  $(".btnPlay").on("click", function () {
    playpause();
  });
  var playpause = function () {
    if (vid[0].paused || vid[0].ended) {
      $(".btnPlay").addClass("paused");
      vid[0].play();
    } else {
      $(".btnPlay").removeClass("paused");
      vid[0].pause();
    }
  };

  //VIDEO PROGRESS BAR
  //when video timebar clicked
  var timeDrag = false; /* check for drag event */
  $(".progressBar").on("mousedown", function (e) {
    timeDrag = true;
    updatebar(e.pageX);
  });
  $(document).on("mouseup", function (e) {
    if (timeDrag) {
      timeDrag = false;
      updatebar(e.pageX);
    }
  });
  $(document).on("mousemove", function (e) {
    if (timeDrag) {
      updatebar(e.pageX);
    }
  });
  var updatebar = function (x) {
    var progress = $(".progressBar");

    //calculate drag position
    //and update video currenttime
    //as well as progress bar
    var maxduration = vid[0].duration;
    var position = x - progress.offset().left;
    var percentage = (100 * position) / progress.width();
    if (percentage > 100) {
      percentage = 100;
    }
    if (percentage < 0) {
      percentage = 0;
    }
    $(".timeBar").css("width", percentage + "%");
    vid[0].currentTime = (maxduration * percentage) / 100;
  };
  //sound button clicked
  $(".sound").click(function () {
    vid[0].muted = !vid[0].muted;
    $(this).toggleClass("muted");
    if (vid[0].muted) {
      $(".volumeBar").css("width", 0);
    } else {
      $(".volumeBar").css("width", vid[0].volume * 100 + "%");
    }
  });

  //VOLUME BAR
  //volume bar event
  var volumeDrag = false;
  $(".volume").on("mousedown", function (e) {
    volumeDrag = true;
    vid[0].muted = false;
    $(".sound").removeClass("muted");
    updateVolume(e.pageX);
  });
  $(document).on("mouseup", function (e) {
    if (volumeDrag) {
      volumeDrag = false;
      updateVolume(e.pageX);
    }
  });
  $(document).on("mousemove", function (e) {
    if (volumeDrag) {
      updateVolume(e.pageX);
    }
  });
  var updateVolume = function (x, vol) {
    var volume = $(".volume");
    var percentage;
    //if only volume have specificed
    //then direct update volume
    if (vol) {
      percentage = vol * 100;
    } else {
      var position = x - volume.offset().left;
      percentage = (100 * position) / volume.width();
    }

    if (percentage > 100) {
      percentage = 100;
    }
    if (percentage < 0) {
      percentage = 0;
    }

    //update volume bar and video volume
    $(".volumeBar").css("width", percentage + "%");
    vid[0].volume = percentage / 100;

    //change sound icon based on volume
    if (vid[0].volume == 0) {
      $(".sound").removeClass("sound2").addClass("muted");
    } else if (vid[0].volume > 0.5) {
      $(".sound").removeClass("muted").addClass("sound2");
    } else {
      $(".sound").removeClass("muted").removeClass("sound2");
    }
  };

  //speed text clicked
  $(".spdx50").on("click", function () {
    fastfowrd(this, 1.5);
  });
  $(".spdx25").on("click", function () {
    fastfowrd(this, 1.25);
  });
  $(".spdx1").on("click", function () {
    fastfowrd(this, 1);
  });
  $(".spdx050").on("click", function () {
    fastfowrd(this, 0.5);
  });
  var fastfowrd = function (obj, spd) {
    $(".speedcnt li").removeClass("selected");
    $(obj).addClass("selected");
    vid[0].playbackRate = spd;
    vid[0].play();
    $("ul.speedcnt").fadeOut("fast");
    $(".btnPlay").addClass("paused");
  };
  $(".btnspeed").click(function () {
    $("ul.speedcnt").slideToggle(100);
  });

  //fullscreen button clicked
  $(".btnFS").on("click", function () {
    if ($.isFunction(vid[0].webkitEnterFullscreen)) {
      vid[0].webkitEnterFullscreen();
    } else if ($.isFunction(vid[0].mozRequestFullScreen)) {
      vid[0].mozRequestFullScreen();
    } else {
      alert("Your browsers doesn't support fullscreen");
    }
  });

  //hide pause button if video onplaying
  //if (vid.onplaying = true) { $('.btnPlay').addClass('paused'); };

  //previous video button
  $(".prevvid").click(function () {
    $(vid).attr("src", $(".playing").prev().attr("data-src"));
    vid[0].play();
    $(".playing").prev().addClass("playing");
    $(".playing:last").removeClass("playing");
    $(".btnPlay").addClass("paused");
    $(".nextvid").removeClass("disabled");
    if ($(".videoItem:first").hasClass("playing")) {
      $(this).addClass("disabled");
    } else {
      $(this).removeClass("disabled");
    }
  });

  //previous video button
  $(".nextvid").click(function () {
    $(vid).attr("src", $(".playing").next().attr("data-src"));
    vid[0].play();
    $(".playing").next().addClass("playing");
    $(".playing:first").removeClass("playing");
    $(".btnPlay").addClass("paused");
    $(".prevvid").removeClass("disabled");
    if ($(".videoItem:last").hasClass("playing")) {
      $(this).addClass("disabled");
    } else {
      $(this).removeClass("disabled");
    }
  });

  //Time format converter - 00:00
  var timeFormat = function (seconds) {
    var m =
      Math.floor(seconds / 60) < 10
        ? "0" + Math.floor(seconds / 60)
        : Math.floor(seconds / 60);
    var s =
      Math.floor(seconds - m * 60) < 10
        ? "0" + Math.floor(seconds - m * 60)
        : Math.floor(seconds - m * 60);
    return m + ":" + s;
  };
});
