// Adding sticky to nav bar when scrolling down by 550 pixels
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= 550) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// Javascript for changing changing classes to close Nav when linked is clicked
function closeNav() {
  var close = document.getElementById("navigation1");
  close.classList.add("closeNav");
} 

function openNav() {
  var open = document.getElementById("navigation1");
  open.classList.remove('closeNav');
}

// Automatic slider for fruit and veg scroller -- uses slick  
$(".slider-area").slick({
  dots: false,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
});

