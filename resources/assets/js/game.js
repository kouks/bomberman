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
  }

  static collides() {
    return $('#map').has($('.sprite').collision('.wall')).length;
  }

  static Speed() {
    return 5;
  }
}
