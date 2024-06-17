<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<title>Gogra Legal</title>

</head>
<body>

<header class="header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 no_padding">
				<div class="topbar">
					<div class="mail">
						<a href="mailto:gogralegal@gmail.com">Mail Us: gogralegal@gmail.com</a>
					</div>
					<div class="tp_rght">
						<div class="srch">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username">
								<div class="input-group-append">
									<span class="input-group-text">Go</span>
								</div>
							</div>
						</div>
						<div class="cnslt">
							<a href="#">Online Consultation</a>
						</div>
						<div class="social">
							<ul>
								<li><a href="#"><img src="images/hdr_scl001.png"></a></li>
								<li><a href="#"><img src="images/hdr_scl002.png"></a></li>
							</ul>	
						</div>
					</div>	
				</div>
				<div class="main_head" id="myHeader">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<div class="logo">
								<a href="index.html"><img src="images/logo.png" alt="logo"></a>
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<div class="menus">
								<nav class="navbar navbar-expand-lg navbar-light">
									<button class="navbar-toggler" type="button" onclick="sdbr_open()">
									  <span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse" id="mySidebar">
										<ul class="navbar-nav me-auto mb-2 mb-lg-0">
											<button onclick="sdbr_close()" class="close">&times;</button>
											<li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
												<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
													<li><a class="dropdown-item" href="#">Who We Are</a></li>
													<li><a class="dropdown-item" href="#">Our Firm</a></li>
													<li><a class="dropdown-item" href="#">Experience</a></li>
													<li><a class="dropdown-item" href="#">Awards & Accolades</a></li>
													<li><a class="dropdown-item" href="#">Vision& Mission</a></li>
													<li><a class="dropdown-item" href="#">Corporate responsibility</a></li>
												</ul>
											</li>
											<li class="nav-item"><a class="nav-link" href="#">Practice Areas</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Team</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Client Sign Area</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>	
	</div>	
</header>
			
<section class="dashboard">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="d-flex align-items-start">
					<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-first-tab" data-bs-toggle="pill" data-bs-target="#v-pills-first" type="button" role="tab" aria-controls="v-pills-first" aria-selected="true">
							<img src="images/nav001.png" alt="nav_icn"> Dashboard
						</button>
						<button class="nav-link" id="v-pills-second-tab" data-bs-toggle="pill" data-bs-target="#v-pills-second" type="button" role="tab" aria-controls="v-pills-second" aria-selected="false">
							<img src="images/nav002.png" alt="nav_icn"> Profile
						</button>
						<button class="nav-link" id="v-pills-third-tab" data-bs-toggle="pill" data-bs-target="#v-pills-third" type="button" role="tab" aria-controls="v-pills-third" aria-selected="false">
							<img src="images/nav003.png" alt="nav_icn"> Case Status
						</button>
						<button class="nav-link" id="v-pills-four-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourth" type="button" role="tab" aria-controls="v-pills-fourth" aria-selected="false">
							<img src="images/nav004.png" alt="nav_icn"> Billing
						</button>
						
						<form action="{{ route('client.logout') }}" method="POST" style="display:inline;">
							@csrf
							<button class="nav-link" id="v-pills-five-tab" type="submit" role="tab" aria-controls="v-pills-five" aria-selected="false">
								<img src="images/nav005.png" alt="nav_icn"> Logout
							</button>
						</form>
						
					</div>
					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-first" role="tabpanel" aria-labelledby="v-pills-first-tab">
							<div class="dshbrd_dtls">
								<h2>Welcome to Dashboard</h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-second" role="tabpanel" aria-labelledby="v-pills-second-tab">
							<div class="dshbrd_dtls">
								<h2>Profile</h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-third" role="tabpanel" aria-labelledby="v-pills-third-tab">
							<div class="dshbrd_dtls">
								<h2>Case Status </h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-fourth" role="tabpanel" aria-labelledby="v-pills-fourth-tab">
							<div class="dshbrd_dtls">
								<h2>Billing</h2>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


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


</body>
</html>
