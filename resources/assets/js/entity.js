/**
 * Handles player's entity
 *
 * @author Pavel koch
 * @package Bomberman
 */

class Entity {
  static move() {

    if(Pressed[Keys.UP]) {
      var Position = (Sprite.position().top - Entity.Speed());

      do {
        Sprite.css('top', Position++ + 'px');
      } while(Entity.collides());
    }
    
    if(Pressed[Keys.DOWN]) {
      var Position = (Sprite.position().top + Entity.Speed());

      do {
        Sprite.css('top', Position-- + 'px');
      } while(Entity.collides());
    }
    
    if(Pressed[Keys.LEFT]) {
      var Position = (Sprite.position().left - Entity.Speed());

      do {
        Sprite.css('left', Position++ + 'px');
      } while(Entity.collides());
    }
    
    if(Pressed[Keys.RIGHT]) {
      var Position = (Sprite.position().left + Entity.Speed());

      do {
        Sprite.css('left', Position-- + 'px');
      } while(Entity.collides());
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
