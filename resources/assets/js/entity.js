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
