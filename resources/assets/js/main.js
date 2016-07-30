var Keys = {
  UP:     87, 
  DOWN:   83, 
  LEFT:   65, 
  RIGHT:  68
};

var Pressed = {
  87: false,
  84: false,
  65: false,
  68: false
};

var Sprite = $('.sprite');

$(() => {
  console.log($('#map').has($('.sprite').collision('.wall')).length);

  setInterval(Game.loop, 50);


  $(document).keydown((e) => {
    Pressed[e.which] = true;
  });

  $(document).keyup((e) => {
    Pressed[e.which] = false;
  });
});
