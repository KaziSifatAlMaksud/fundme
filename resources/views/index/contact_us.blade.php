@extends('app')

{{-- @section('title'){{ $title.' - ' }}@endsection --}}

@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column: Address, Social Links, etc. -->
           <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <!-- Card with shadow -->
                <div class="card p-4 mt-5 shadow-sm">
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
                <form>
                    <div class="row">
                        <!-- Name Field -->
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                        </div>

                        <!-- Email Field -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                        </div>
                    </div>


                    <!-- Phone Field -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter your subject" required>
                    </div>

                    <!-- Message Field -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your message" required></textarea>
                    </div>

                    <!-- Captcha (Google reCAPTCHA) -->
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="your-site-key"></div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- Map Section (Bottom Section) -->
        <div class="row mt-5">
            <div class="col-12">
                <h3>Our Location</h3>
                <div style="position: relative; width: 100%; height: 400px;">
                    <iframe src="https://www.google.com/maps/embed?pb=YOUR_GOOGLE_MAP_EMBED_LINK_HERE" 
                            class="embed-responsive-item" 
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                            allowfullscreen="" 
                            aria-hidden="false" 
                            tabindex="0">
                    </iframe>
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
@endsection

@section('javascript')
<script type="text/javascript">
pagination('{{ url()->current() }}?page=', '{{trans('misc.error')}}');
		</script>
@endsection
