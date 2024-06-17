

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script> 

<script>

window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

function sdbr_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function sdbr_close() {
  document.getElementById("mySidebar").style.display = "none";
}


$('.bnr_slide').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: true,
	autoplay: true,	
	autoplayTimeout: 5000,
	navText : ['<img src="images/prev.png">','<img src="images/next.png">'],
	responsive: {
	  0: {
		items: 1
	  },
	  768: {
		items: 1
	  },
	  1200: {
		items: 1
	  }
	}
});

$('.hm_clnt').owlCarousel({
	loop: true,
	margin: 10,
	nav: false,
	dots: false,
	autoplay: true,	
	autoplayTimeout: 3000,
	navText : ['<img src="images/prev.png">','<img src="images/next.png">'],
	responsive: {
	  0: {
		items: 2
	  },
	  768: {
		items: 3
	  },
	  1200: {
		items: 4
	  }
	}
});


</script>