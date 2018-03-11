
 $(window).load(function() {
        startRotator("#baner_r");
  });

function rotateBanners(elem) {
  var active = $(elem+" div.active");
  var next = active.next();
  if (next.length == 0) 
    next = $(elem+" div:first");
  active.removeClass("active").fadeOut(600);
  next.addClass("active").fadeIn(600);
}

function prepareRotator(elem) {
  $(elem+" div").fadeOut(0);
  $(elem+" div:first").fadeIn(0).addClass("active");
}

function startRotator(elem) {
  prepareRotator(elem);
  setInterval("rotateBanners('"+elem+"')", 5000);
}