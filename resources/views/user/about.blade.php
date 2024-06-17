
@extends('user.layouts.app')
@section('meta_title','law')

@include('user.includes.navbar')


<section class="inner_banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 no_padding">
				<div class="inr_bnr">
					<img src="images/banner_inner.jpg" alt="bnr">
				</div>
			</div>	
		</div>
	</div>	
</section>
			
<section class="cmpny_ovrvw about">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="cmpny_imag">
					<img src="images/cmpny_imag.jpg" alt="cmpny_imag">
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="cmpny_text">
					<span>Company Overview</span>
					<h2>About the Gogra Associates</h2>
					<p>Gogra Associates is a full service law firm with offices in Bengaluru, Delhi, Gurugram and Mumbai. We have been consistently recognised as the best Indian multi-practice law firm for the quality of our services and client satisfaction. The firm’s all-equity lockstep model, based on transparency, democracy and meritocracy, is unique in India. We are proud that the firm has been recognised for its commitment to diversity, equality and sustainability.</p>
					<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gvrnanc">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head text-center">
					<span>Our Structure</span>
					<h2>Governance Structure</h2>
				</div>
				<div class="accordion" id="accordionExample">
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingOne">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Management Committee</button>
						</h2>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row">
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt001.png" alt="mngmnt"></div>
											<h4>Nishant Parikh</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt002.png" alt="mngmnt"></div>
											<h4>Sridhar Gorthi</h4>
											<p>Partner</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Board</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row">
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt001.png" alt="mngmnt"></div>
											<h4>Nishant Parikh</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt002.png" alt="mngmnt"></div>
											<h4>Sridhar Gorthi</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt003.png" alt="mngmnt"></div>
											<h4>Nisha Kaur Uberoi</h4>
											<p>Partner - Competition</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="headingThree">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Practice and Practice Group Heads</button>
						</h2>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row">
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt001.png" alt="mngmnt"></div>
											<h4>Nishant Parikh</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt002.png" alt="mngmnt"></div>
											<h4>Sridhar Gorthi</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt003.png" alt="mngmnt"></div>
											<h4>Nisha Kaur Uberoi</h4>
											<p>Partner - Competition</p>
										</div>
									</div>
								</div>
							</div>
						</div>
				  </div>
				  <div class="accordion-item">
						<h2 class="accordion-header" id="headingFour">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Office Heads</button>
						</h2>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
							<div class="accordion-body">
								<div class="row">
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt001.png" alt="mngmnt"></div>
											<h4>Nishant Parikh</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt002.png" alt="mngmnt"></div>
											<h4>Sridhar Gorthi</h4>
											<p>Partner</p>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mngmnt_box">
											<div class="mngmnt_imag"><img src="images/mngmnt003.png" alt="mngmnt"></div>
											<h4>Nisha Kaur Uberoi</h4>
											<p>Partner - Competition</p>
										</div>
									</div>
								</div>
							</div>
						</div>
				  </div>
				  
				</div>
			</div>
		</div>
	</div>
</section>	

@include('user.includes.footer')

@section('style')
    
@endsection
@section('script')
    
@endsection