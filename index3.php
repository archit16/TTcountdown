<html>
<head>
  <meta charset="UTF-8" lang="en" name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="jquery.min.js"></script>
  <link type="text/css" href="main.css" rel="stylesheet">
</head>
<body style="margin:0px;">
<canvas id="canv" width="32" height="22"></canvas>
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
<div id="tim">
<!-- Display the countdown timer in an element -->
<p align="center"  id="timerd" class="timer"></p>
<p align="center"  id="timerh" class="timer"></p>
<p align="center"  id="timerm" class="timer"></p>
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
<script>
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
</script>
</body>
</html>




