
// Function below will set background to blue onClick, and turn red after 3 seconds
function setBackgroundColor () {
  document.body.style.backgroundColor = 'blue';
  
// Text will turn white after 3 seconds
  setTimeout('textColorChange()', 3000)

    // Code below changes background to red after 3 seconds, by calling the function (backgroundColorChange) below.
    setTimeout('backgroundColorChange()', 3000)
}

function backgroundColorChange () {
  document.body.style.backgroundColor = 'red';
}

function textColorChange () {
  document.body.style.color = 'white';
}

// Turn on below to set background with Image too
// To Make as extra --> Scale image to over full screen

function setBackgroundImage () {
  document.body.style.background = "#eeeeee url('/Training/Task_1/public_html/assets/images/img_tree.png') no-repeat center top";
}

// Select a div and change innterHTML to innerText
    // Clicking a button will reveal text in all 3 elements

function demoInnerText () {
  alert(document.getElementById('demo').innerText)
}

function demoInnerHTML () {
  alert(document.getElementById('demo').innerHTML)
}

function demoTextContent () {
  alert(document.getElementById('demo').textContent)
}

// Change class of backing plate when scrolling

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
    document.getElementById("left-bp").className = "left-fixed";
  } else {
    document.getElementById("left-bp").className = "left-bp";
  }
  if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
    document.getElementById("right-bp").className = "right-fixed";
  } else {
    document.getElementById("right-bp").className = "right-bp";
  }
}

// Function below for countdown timer
var weekend = new Date("May 31, 2019 17:00:00").getTime();

// Set function to count down by 1 second each time
  var timer = setInterval(function() {

// Get Now time
    var now = new Date().getTime();

// Time between nowTime and weekendCountdown
      var difference = weekend - now;

// Time calculations for days, hours, minutes and seconds
  var days = Math.floor(difference / (1000 * 60 * 60 * 24));
  var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((difference % (1000 * 60)) / 1000);

// Output the result in an element with id="countdown"
  document.getElementById("countdown").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  
// If the count down is over, write some text 
  if (difference < 0) {
  clearInterval(timer);
    document.getElementById("countdown").innerHTML = "Weekend!!";
  }
}, 1000);

// Show time and date function below
  var date = new Date();
    document.getElementById('currentDate').innerHTML = date;

// 60 Second clock, changing background color every 10 seconds
