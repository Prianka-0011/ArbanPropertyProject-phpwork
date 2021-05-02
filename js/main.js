
function openTab(evt,rent){
    var i, tabcontent, tablinks;
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    evt.currentTarget.className += " active";
}
//nav bar scrolling start
$(window).on('scroll',function(){
  if ($(window).scrollTop())
  {
    $('nav').addClass('scrolling-active');
  }
  else{
    $('nav').removeClass('scrolling-active');
  }
   
   });
//end
var mybutton = document.getElementById("scroll-top");
var mymsg= document.getElementById("visibleafterscrollmsg");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
    mybutton.addClass="scrollingtop-active"
    
  } 
  else {
    mybutton.style.display = "none";
    mymsg.style.display = "none";
    
  }
}

// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
//   document.documentElement.animate= 1000;
// }
$('#topFunction').click(function() {
  $("html, body").animate({
  scrollTop: 0
  }, 1000);
  return false;
  });

  $(function() {    
      $('.dropdown').has('.dropdown-menu')
      .mouseover(function(){
        $(this).children('.dropdown-menu').css('visibility','visible');
      })
      .mouseout(function(){
        $(this).children('.dropdown-menu').css('visibility','hidden');
      })    
  });
  //image carsoul auto play
  $('.carousel').carousel()

 

  $('#msgFunction').click(function() {
    $('.visibleafterscrollmsg').toggle('showmsg');
    return false;
    });
    
    //read more
    
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
  function weFunction() {
  var dots = document.getElementById("wedots");
  var moreText = document.getElementById("wemore");
  var btnText = document.getElementById("weBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}