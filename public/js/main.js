
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

  Sprite.moveTo(32, 128);
  
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

/**
 * Main class hadnling the whole game
 *
 * @author Pavel koch
 * @package Bomberman
 */

class Game {

  static loop() {

    Entity.move();

  }
}

/**
 * Handles player's entity
 *
 * @author Pavel koch
 * @package Bomberman
 */

class Entity {
  static move() {

    if(Entity.collides()) {
      return false;
    }

    var Top = Sprite.css('top');
    var Left = Sprite.css('left');

    if(Pressed[Keys.UP]) {
      var Position = (Sprite.position().top - Entity.Speed()) + 'px';
      Sprite.css('top', Position);
      if(Entity.collides()) {
        Sprite.css('top', Top);
      }
    }
    
    if(Pressed[Keys.DOWN]) {
      var Position = (Sprite.position().top + Entity.Speed()) + 'px';
      Sprite.css('top', Position);
      if(Entity.collides()) {
        Sprite.css('top', Top);
      }
    }
    
    if(Pressed[Keys.LEFT]) {
      var Position = (Sprite.position().left - Entity.Speed()) + 'px';
      Sprite.css('left', Position);
      if(Entity.collides()) {
        Sprite.css('left', Left);
      }
    }
    
    if(Pressed[Keys.RIGHT]) {
      var Position = (Sprite.position().left + Entity.Speed()) + 'px';
      Sprite.css('left', Position);
      if(Entity.collides()) {
        Sprite.css('left', Left);
      }
    }

    var Top = Sprite.position().top;
    var Left = Sprite.position().left;

    // conn.send();
  }

  static collides() {
    return $('#map').has($('.sprite').collision('.wall')).length;
  }

  static Speed() {
    return Speed;
  }
}

/** 
 * Helpers
 */

$.fn.moveTo = function(top, left) {
  
  if(top instanceof Object) {

    $(this).css({
      top: top['top'] + 'px',
      left: top['left'] + 'px'
    });

    return true;
  }

  $(this).css({
    top: top + 'px',
    left: left + 'px'
  });

  return true;
}

//# sourceMappingURL=main.js.map
