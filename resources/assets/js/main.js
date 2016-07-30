
/**
 * Key codes
 */
var Keys = {
  UP:     87, 
  DOWN:   83, 
  LEFT:   65, 
  RIGHT:  68
};

/**
 * Key pressed ?
 */
var Pressed = {
  87: false,
  84: false,
  65: false,
  68: false
};

/**
 * Sprite element
 */
var Sprite = $('.sprite.mine');

/**
 * Sprite speed
 */
var Speed = 5;

$(() => {
  
  /**
   * Starting main game loop
   */
  setInterval(Game.loop, 15);

  /**
   * Registering key presses
   */
  $(document).keydown((e) => {
    Pressed[e.which] = true;
  });

  $(document).keyup((e) => {
    Pressed[e.which] = false;
  });
});
