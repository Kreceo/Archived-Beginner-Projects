/* 
 * Pagination for Design it & Code it
 * http://designitcodeit.com/i/14
 *
 * JavaScript is just for preview, not really needed.
 */

$('.pagination li').on('click', function(event) {
    event.preventDefault();
    var $this = $(this),
        $pagination = $this.parent(),
        $pages = $pagination.children(),
        $active = $pagination.find('.active');
    
    if($this.hasClass('prev')) {
      if ($pages.index($active) > 1) {
        $active.removeClass('active').prev().addClass('active');
      }
    } else if($this.hasClass('next')) {
      if ($pages.index($active) < $pages.length - 2) {
        $active.removeClass('active').next().addClass('active');
      }
    } else {
      $this.addClass('active').siblings().removeClass('active');
    }
    
    $active = $pagination.find('.active');
    
    $('.prev')[$pages.index($active) == 1 ? 'addClass' : 'removeClass']('disabled');
    $('.next')[$pages.index($active) == $pages.length - 2 ? 'addClass' : 'removeClass']('disabled');
    
  });
  
  $('.pagination li:eq(1)').trigger('click');


// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}

  

