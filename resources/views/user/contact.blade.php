@extends('user.layouts.app')
@section('meta_title','law')

@include('user.includes.navbar')


<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head text-center">
					<span>Contact</span>
					<h2>Contact Us</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="cntct_box">    
					<div class="cntct_inr">
						<span><img src="images/phone.png" alt="phone"></span>
					</div>
					<div class="cntct_txt">
						<h4>Phone Number</h4>
						<p>{{ $contactInfo->phone_number ?? '+91 8963848103' }}</p>
					</div>
				</div>
				<div class="cntct_box">    
					<div class="cntct_inr">
						<span><img src="images/mail.png" alt="mail"></span>
					</div>
					<div class="cntct_txt">
						<h4>Email ID</h4>
						<p>{{ $contactInfo->email ?? 'gogralegal@gmail.com' }}</p>
					</div>  
				</div>
				<div class="cntct_box">    
					<div class="cntct_inr">
						<span><img src="images/map.png" alt="adrs"></span>
					</div>
					<div class="cntct_txt">
						<h4>Address</h4>
						<p>{{ $contactInfo->address ?? 'F-85, Panchsheel Marg, Subhash Marg, C-scheme, Jaipur-302001 (Raj.) India' }}</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-6">
				<div class="cntct_frm">	
					<form action="{{ route('contact.store') }}" method="POST">
						@csrf
						<div class="form_group">
							<input class="fotm_control" type="text" name="first_name" value="" placeholder="First Name" required>
						</div>
						<div class="form_group">
							<input class="fotm_control" type="text" name="last_name" value="" placeholder="Last Name" required>
						</div>
						<div class="form_group">
							<input class="fotm_control" type="number" name="number" value="" placeholder="Phone Number" required>
						</div>
						<div class="form_group">
							<input class="fotm_control" type="mail" name="mail" value="" placeholder="Email" required>
						</div>
						<div class="form_group">
							<input class="fotm_control" type="message" name="message" value="" placeholder="Message" required>
						</div>
						<div class="form_group">
							<button type="submit" class="btn">Submit</button>
						</div>
						
					</form>
				</div>
			</div>	
			<div class="col-lg-12">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14231.296771838235!2d75.7986365!3d26.9090741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa5cdd69189cc2407%3A0xb6e9f18bc9b042a2!2sGogra%20%26%20Company!5e0!3m2!1sen!2sin!4v1717572384379!5m2!1sen!2sin" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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