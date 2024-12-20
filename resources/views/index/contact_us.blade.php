@extends('app')

{{-- @section('title'){{ $title.' - ' }}@endsection --}}



@section('content')

 <div class="py-5 bg-primary bg-sections">
   <div class="btn-block text-center text-white position-relative">
     <h1>Contact Us</h1>
     <p>{{$settings->title}}</p>
   </div>
 </div><!-- container -->
 <section>
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column: Address, Social Links, etc. -->
           <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <!-- Card with shadow -->
                <div class="card p-4 shadow-sm py-5">
                    <h3 class="mb-3">Contact Information</h3>
                    
                   <!-- Address, Email, Phone -->
                    <div class="d-flex flex-column mb-4">
                        <!-- Address Section -->
                        <div class="d-flex align-items-center mb-3">
                            <!-- Icon Container (Location Pin) -->
                            <div class="icon-container rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-map-marker-alt"></i> <!-- Font Awesome map icon -->
                            </div>
                            
                            <!-- Address Information -->
                            <div class="ms-3">
                                <h5 class="mb-1">Address:</h5>
                                <p class="fs-5">123 Main Street, City, Country</p> <!-- Larger location text -->
                            </div>
                        </div>

                        <!-- Email Section -->
                        <div class="d-flex align-items-center mb-3">
                            <!-- Icon Container (Email Icon) -->
                            <div class="icon-container rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-envelope"></i> <!-- Font Awesome email icon -->
                            </div>
                            
                            <!-- Email Information -->
                            <div class="ms-3">
                                <h5 class="mb-1">Email:</h5>
                                <p class="fs-5"><a href="mailto:contact@company.com" class="text-decoration-none">contact@company.com</a></p>
                            </div>
                        </div>

                        <!-- Phone Section -->
                        <div class="d-flex align-items-center">
                            <!-- Icon Container (Phone Icon) -->
                            <div class="icon-container rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                                <i class="fas fa-phone-alt"></i> <!-- Font Awesome phone icon -->
                            </div>
                            
                            <!-- Phone Information -->
                            <div class="ms-3">
                                <h5 class="mb-1">Phone:</h5>
                                <p class="fs-5"><a href="tel:+1234567890" class="text-decoration-none">+123 456 7890</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Right Column: Form Section -->
            <div class="col-lg-8 col-md-12 col-sm-12 ">
                <h3>Contact Form</h3>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

               <form action="{{ route('contact_us.submit') }}" method="POST">
                @csrf
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>

                        <!-- Email Field -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>


                    <!-- Phone Field -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your subject" required>
                    </div>

                    <!-- Message Field -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Your message" required></textarea>
                    </div>

                   <!-- Captcha (Google reCAPTCHA) -->
                    <div class="mb-3">
                        {{-- <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div> --}}
                         {!!htmlScriptTagJsApi()!!}
                    </div>
                   
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- Map Section (Bottom Section) -->
        <div class="row mb-5">
            <div class="col-12">
                <h3>Our Location</h3>
                <div style="position: relative; width: 100%; height: 400px;">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91970.15677041735!2d78.39544023636435!3d17.475900732948627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana%2C%20India!5e1!3m2!1sen!2sbd!4v1733823592432!5m2!1sen!2sbd" width="600" height="450"  style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>
            </div>

        </div>
    </div>
</section>



{{-- 
<div class="py-5 bg-white">

	@if ($data->total() != 0)

	     @include('includes.campaigns')

	  @else
	  <div class="btn-block text-center">
	    			<i class="far fa-times-circle display-4"></i>
	    		</div>

	    		<h3 class="text-center my-3">
	    		{{ trans('misc.no_results_found') }}
	    	</h3>
	  @endif
 </div> --}}
 {{-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> --}}
@endsection

@section('javascript')

<script type="text/javascript">
pagination('{{ url()->current() }}?page=', '{{trans('misc.error')}}');
		</script>
@endsection
