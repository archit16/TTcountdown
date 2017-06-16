<html>
<head>
  <title>TechTatva '17</title>
  <meta charset="UTF-8" lang="en" name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="ocanvas.min.js"></script>
  <script type="text/javascript" src="back2.js"></script>
  <script type="text/javascript" src="anime-master/anime.js"></script>
  <link type="text/css" href="main.css" rel="stylesheet">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
  <script type="text/javascript" src="inc/TimeCircles.js"></script>
  <link rel="stylesheet" href="inc/TimeCircles.css" />
</head>
<body style="margin:0px;">
<canvas id="canv" width="32" height="22" class="fireworks"></canvas>
<h1 align="center" class="headanim">TechTatva '17</h1>
  
<div class="space">
  <div class="ship">
    <div class="ship-rotate">
      <div class="pod"></div>
      <div class="fuselage"></div>
    </div>
  </div>
  <div class="ship-shadow"></div>
  <div class="mars">
    <div class="tentacle"></div>
    <div class="flag">
      <div class="small-tentacle"></div>
    </div>
    <div class="planet">
      <div class="surface"></div>
      <div class="crater1"></div>
      <div class="crater2"></div>
      <div class="crater3"></div>
    </div>
  </div>
  <div class="test"></div>
</div>

            
            <div id="DateCountdown" data-date="2017-10-04 00:00:00" style="width: 1000px; height: 425px; padding: 0px; box-sizing: border-box; background-color: #E0E8EF;margin-left:250px;margin-top:10%;"></div>
           
            
        
        <script>
            $("#DateCountdown").TimeCircles();
            $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
            $("#PageOpenTimer").TimeCircles();
            
            var updateTime = function(){
                var date = $("#date").val();
                var time = $("#time").val();
                var datetime = date + ' ' + time + ':00';
                $("#DateCountdown").data('date', datetime).TimeCircles().start();
            }
            $("#date").change(updateTime).keyup(updateTime);
            $("#time").change(updateTime).keyup(updateTime);
            </script> 
            

<!--<div id="tim">
<!-- Display the countdown timer in an element 
<p align="center"  id="timerd" class="timer1 dayanim"></p>
<p align="center"  id="timerh" class="timer1 houranim"></p>
<p align="center"  id="timerm" class="timer1 minuteanim"></p>
<p align="center"  id="timers" class="timer"></p>
</div>

<script>
// date to count down to...
var countDownDate = new Date("Oct 4, 2017 00:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;


  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  document.getElementById("timerd").innerHTML = days + "  days  ";
  document.getElementById("timerh").innerHTML = hours + "  hours  ";
  document.getElementById("timerm").innerHTML = minutes + "  minutes  "; 
  document.getElementById("timers").innerHTML = seconds + "  seconds  ";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "AND HERE WE GO!";
  }
}, 1000);
</script>
<!--<script>
 var ld= document.getElementById(timer);
 if (ld.readyState === "complete"){ 
 function flashtext(timer,col) {
    var tmpColCheck = document.getElementById( timer ).style.color;

      if (tmpColCheck === 'silver') {
        document.getElementById( timer ).style.color = col;
      } else {
        document.getElementById( timer ).style.color = 'silver';
      }
    } 

    setInterval(function() {
        flashtext('flashingtext','red');
        flashtext('flashingtext2','blue');
        flashtext('flashingtext3','green');
    }, 50 );
  }

    </script>-->
<!--<script>
var c = document.getElementById('canv');
var $ = c.getContext('2d');


var col = function(x, y, r, g, b) {
  $.fillStyle = "rgb(" + r + "," + g + "," + b + ")";
  $.fillRect(x, y, 1,1);
}
var R = function(x, y, t) {
  return( Math.floor(192 + 64*Math.cos( (x*x-y*y)/300 + t )) );
}

var G = function(x, y, t) {
  return( Math.floor(192 + 64*Math.sin( (x*x*Math.cos(t/4)+y*y*Math.sin(t/3))/300 ) ) );
}

var B = function(x, y, t) {
  return( Math.floor(192 + 64*Math.sin( 5*Math.sin(t/9) + ((x-100)*(x-100)+(y-100)*(y-100))/1100) ));
}

var t = 0;

var run = function() {
  for(x=0;x<=35;x++) {
    for(y=0;y<=35;y++) {
      col(x, y, R(x,y,t), G(x,y,t), B(x,y,t));
    }
  }
  t = t + 0.120;
  window.requestAnimationFrame(run);
}

run();
</script>-->
<script>
jQuery(document).ready(function($){

var windowXArray = [],
    windowYArray = [];

for (var i = 0; i < $(window).innerWidth(); i++) {
    windowXArray.push(i);
}
    
for (var i = 0; i < $(window).innerHeight(); i++) {
    windowYArray.push(i);
}

function randomPlacement(array) {
    var placement = array[Math.floor(Math.random()*array.length)];
    return placement;
}
    

var canvas = oCanvas.create({
   canvas: '#canv',
   background: '#00000',
   fps: 60
});

setInterval(function(){

var rectangle = canvas.display.ellipse({
   x: randomPlacement(windowXArray),
   y: randomPlacement(windowYArray),
   origin: { x: 'center', y: 'center' },
   radius: 0,
   fill: '#27ae60',
   opacity: 1
});

canvas.addChild(rectangle);

rectangle.animate({
  radius: 10,
  opacity: 0
}, {
  duration: '1000',
  easing: 'linear',
  callback: function () {
      this.remove();
    }
});

}, 100);

$(window).resize(function(){
canvas.width = $(window).innerWidth();
canvas.height = $(window).innerHeight();
});

$(window).resize();

});
</script>
<!--<script type="text/javascript" src="back2.js"></script>-->
</body>
</html>
<!-- The techtatva website is gonna be very awesome and this is the best countdown you get for a site that has this much of 
  awaiting going on. So, if you dont like it then deal with it.
-->




