<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="ftr_box">
					<div class="ftr_logo">
						<a href="#"><img src="images/ftr_logo.png" alt="logo"></a>
					</div>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>	
			</div>	
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Links</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Lqwyers</a></li>
						<li><a href="#">Publications</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Practice Areas</h4>
					<ul>
						<li><a href="#">Family Law</a></li>
						<li><a href="#">Business Law</a></li>
						<li><a href="#">Insurance Law</a></li>
						<li><a href="#">Criminal Law</a></li>
						<li><a href="#">Drug Offenses</a></li>
						<li><a href="#">Property Law</a></li>
						<li><a href="#">Employment Law</a></li>
					</ul>
				</div>
			</div>	
			<div class="col-lg-3 col-md-4">
				<div class="ftr_box">
					<h4>Have a Questions?</h4>
					@php
			$contactInfo = \App\Models\ContactInfo::first(); // Fetch the first ContactInfo record
		@endphp
					<ul class="adrs">
						
						    <li>
								<span class="icon"><img src="images/ftr_map.png"></span>
								<span class="text">{{ $contactInfo->address ?? '' }}</span>
							</li>
							<li>
								<span class="icon"><img src="images/ftr_cll.png"></span>
								<span class="text">{{ $contactInfo->phone_number ?? '' }}</span>
							</li>
							<li>
								<span class="icon"><img src="images/ftr_mail.png"></span>
								<span class="text">{{ $contactInfo->email ?? '' }}</span>
							</li>
					</ul>
					<ul class="social">
						<li>
							<a href="#"><img src="images/hdr_scl001.png"></a>
						</li>
						<li>
							<a href="#"><img src="images/hdr_scl002.png"></a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="col-md-12">
				<div class="copyright">© 2024 - gogralegal.com | All Rights Reserved</div>
			</div>
		</div>
	</div>
</footer>			
