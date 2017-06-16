<html>
<head>
  <title>TechTatva '17</title>
  <meta charset="UTF-8" lang="en" name="viewport" content="width=device-width, initial-scale=1.0">
  <link type="text/css" href="main.css" rel="stylesheet">
</head>
<body style="background-color: #47e073">
  <h1 align="center" style="font-family:'Questrial',sans-serif;font-weight:100;font-size:50px;">TechTatva '17</h1>
  
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
<!-- Display the countdown timer in an element -->
<p align="center"  id="timerd" class="timer"></p>
<p align="center"  id="timerh" class="timer"></p>
<p align="center"  id="timerm" class="timer"></p>
<p align="center"  id="timers" class="timer"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 4, 2017 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("timerd").innerHTML = days + "  days  ";
  document.getElementById("timerh").innerHTML = hours + "  hours  ";
  document.getElementById("timerm").innerHTML = minutes + "  minutes  "; 
  document.getElementById("timers").innerHTML = seconds + "  seconds  ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "AND HERE WE GO!";
  }
}, 1000);
</script>
<script>
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
    }, 50 ); //set an interval timer up to repeat the function
  }

    </script>
</body>
</html>
