<?php include("../../includes/a_config.php"); ?>
<!DOCTYPE html>
<html>
  <head>
  <?php include("../../includes/head-tag-contents.php"); ?>
    <script src="https://unpkg.com/konva@9.2.3/konva.min.js"></script>
    <meta charset="utf-8" />
    <title>Juego Iván</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        overflow: hidden;
      }
    </style>
  </head>

  <body>
  <?php include("../../includes/navigation.php"); ?>
  <div class="container mt-4"></div>
    <section class="page-section">
    <div class="container mt-4 text-center"><h1>Ruleta de Lucecine</h1></div>
    <div id="container"></div>
    </section>
    <?php include("../../includes/footer.php"); ?>

    
    <script>
      var width = window.innerWidth;
      var height = window.innerHeight;

      Konva.angleDeg = false;
      var angularVelocity = 6;
      var angularVelocities = [];
      var lastRotation = 0;
      var controlled = false;
      var numWedges = 25;
      var angularFriction = 0.2;
      var target, activeWedge, stage, layer, wheel, pointer;
      var finished = false;

      function getAverageAngularVelocity() {
        var total = 0;
        var len = angularVelocities.length;

        if (len === 0) {
          return 0;
        }

        for (var n = 0; n < len; n++) {
          total += angularVelocities[n];
        }

        return total / len;
      }
      function purifyColor(color) {
        var randIndex = Math.round(Math.random() * 3);
        color[randIndex] = 0;
        return color;
      }
      function getRandomColor() {
        var r = 100 + Math.round(Math.random() * 55);
        var g = 100 + Math.round(Math.random() * 55);
        var b = 100 + Math.round(Math.random() * 55);
        return purifyColor([r, g, b]);
      }

      function getRandomReward() {
        var peliculas = ["One\nPiece", "Billy\nthe\nKid", "Pesadillas", "Kraven", "Hunger\nGames", "Cruella", "Objetos", "Oblivion", "Patrulla\nCanina", "Malefica", "Deadpool", "Soy\nLeyenda", "Justice\nLeague", "Fallout", "Busqueda", "Avengers", "Rocky", "Scarface", "Jujutsu\nKaisen", "Death\nNote", "FullMetal\nAlchemist", "Kimetsu\nno\nYaiba", "Steins\nGate", "One\nPunch", "Black\nClover", "Hunter\nx\nHunter", "DragonBall"];
        var indiceAleatorio = Math.floor(Math.random() * peliculas.length);
        return peliculas[indiceAleatorio];
      }
      function addWedge(n) {
        var s = getRandomColor();
        var reward = getRandomReward();
        var r = s[0];
        var g = s[1];
        var b = s[2];
        var angle = (2 * Math.PI) / numWedges;

        var endColor = 'rgb(' + r + ',' + g + ',' + b + ')';
        r += 100;
        g += 100;
        b += 100;

        var startColor = 'rgb(' + r + ',' + g + ',' + b + ')';

        var wedge = new Konva.Group({
          rotation: (2 * n * Math.PI) / numWedges,
        });

        var wedgeBackground = new Konva.Wedge({
          radius: 400,
          angle: angle,
          fillRadialGradientStartPoint: 0,
          fillRadialGradientStartRadius: 0,
          fillRadialGradientEndPoint: 0,
          fillRadialGradientEndRadius: 400,
          //fillRadialGradientColorStops: [0, startColor, 1, endColor],
          fillRadialGradientColorStops: [0, '#40A2E2', 1, '#34416A'],
          fill: '#34416A',
          fillPriority: 'radial-gradient',
          stroke: '#40A2E2',
          strokeWidth: 2,
        });

        wedge.add(wedgeBackground);

        var text = new Konva.Text({
          text: reward,
          fontFamily: 'Calibri',
          fontSize: 20,
          fill: 'white',
          align: 'center',
          stroke: '#40A2E2',
          strokeWidth: 1,
          rotation: (Math.PI + angle) / 2,
          x: 380,
          y: 18,
          listening: false,
        });

        wedge.add(text);
        text.cache();

        wedge.startRotation = wedge.rotation();

        wheel.add(wedge);
      }
      function animate(frame) {
        // handle wheel spin
        var angularVelocityChange =
          (angularVelocity * frame.timeDiff * (1 - angularFriction)) / 1000;
        angularVelocity -= angularVelocityChange;

        // activate / deactivate wedges based on point intersection
        var shape = stage.getIntersection({
          x: stage.width() / 2,
          y: 100,
        });

        if (controlled) {
          if (angularVelocities.length > 10) {
            angularVelocities.shift();
          }

          angularVelocities.push(
            ((wheel.rotation() - lastRotation) * 1000) / frame.timeDiff
          );
        } else {
          var diff = (frame.timeDiff * angularVelocity) / 1000;
          if (diff > 0.0001) {
            wheel.rotate(diff);
          } else if (!finished && !controlled) {
            if (shape) {
              var text = shape.getParent().findOne('Text').text();
              var price = text.split('\n').join(' ');
              alert('Te toca ver: ' + price);
            }
            finished = true;
          }
        }
        lastRotation = wheel.rotation();

        if (shape) {
          if (shape && (!activeWedge || shape._id !== activeWedge._id)) {
            pointer.y(20);

            new Konva.Tween({
              node: pointer,
              duration: 0.3,
              y: 30,
              easing: Konva.Easings.ElasticEaseOut,
            }).play();

            if (activeWedge) {
              activeWedge.fillPriority('radial-gradient');
            }
            shape.fillPriority('fill');
            activeWedge = shape;
          }
        }
      }
      function init() {
        stage = new Konva.Stage({
          container: 'container',
          width: width,
          height: height,
        });
        layer = new Konva.Layer();
        wheel = new Konva.Group({
          x: stage.width() / 2,
          y: 410,
        });

        for (var n = 0; n < numWedges; n++) {
          addWedge(n);
        }
        pointer = new Konva.Wedge({
          fillRadialGradientStartPoint: 0,
          fillRadialGradientStartRadius: 0,
          fillRadialGradientEndPoint: 0,
          fillRadialGradientEndRadius: 30,
          fillRadialGradientColorStops: [0, 'white', 1, 'red'],
          stroke: 'white',
          strokeWidth: 2,
          lineJoin: 'round',
          angle: 1,
          radius: 30,
          x: stage.width() / 2,
          y: 33,
          rotation: -90,
          shadowColor: 'black',
          shadowOffsetX: 3,
          shadowOffsetY: 3,
          shadowBlur: 2,
          shadowOpacity: 0.5,
        });

        // add components to the stage
        layer.add(wheel);
        layer.add(pointer);
        stage.add(layer);

        // bind events
        wheel.on('mousedown touchstart', function (evt) {
          angularVelocity = 0;
          controlled = true;
          target = evt.target;
          finished = false;
        });
        // add listeners to container
        stage.addEventListener(
          'mouseup touchend',
          function () {
            controlled = false;
            angularVelocity = getAverageAngularVelocity() * 5;

            if (angularVelocity > 20) {
              angularVelocity = 20;
            } else if (angularVelocity < -20) {
              angularVelocity = -20;
            }

            angularVelocities = [];
          },
          false
        );

        stage.addEventListener(
          'mousemove touchmove',
          function (evt) {
            var mousePos = stage.getPointerPosition();
            if (controlled && mousePos && target) {
              var x = mousePos.x - wheel.getX();
              var y = mousePos.y - wheel.getY();
              var atan = Math.atan(y / x);
              var rotation = x >= 0 ? atan : atan + Math.PI;
              var targetGroup = target.getParent();

              wheel.rotation(
                rotation - targetGroup.startRotation - target.angle() / 2
              );
            }
          },
          false
        );

        var anim = new Konva.Animation(animate, layer);

        // wait one second and then spin the wheel
        setTimeout(function () {
          anim.start();
        }, 1000);
      }
      init();
    </script>
  </body>
</html>