@extends('app')

{{-- @section('title'){{ $title.' - ' }}@endsection --}}



@section('content')


    <style>   

        /* Move the "Next" button outside the carousel container */
        .carousel-control-next {
            position: absolute;
            top: 50%;
            right: -50px; /* Move the next button to the right */
            transform: translateY(-50%);
        }

        /* Style to make the images smaller */
        .carousel-inner img {
            max-width: 70%; /* Adjust the max-width to make the image smaller */
            margin: 0 auto; /* Center the image */
        }
    </style>



    <section>
        <div class="container">
           <div class="row ">
                <!-- Information Section -->
              <div class="col-12 col-lg-6 mb-4 d-flex flex-column  justify-content-center gap-3">
                    <h2 class="text-left">Film Production Insurance Policy</h2>
                    <div class="row text-left w-100 justify-content-center">
                        <div class="col-12 col-md-3 mb-4 ">
                            <span>100K+</span>
                            <p>Insured</p>
                        </div>
                        <div class="col-12 col-md-3 mb-4 ">
                            <span>450+</span>
                            <p>Clients</p>
                        </div>
                        <div class="col-12 col-md-3 mb-4 ">
                            <span>4.9</span>
                            <p>Rating</p>
                        </div>
                        <div class="col-12 col-md-3 mb-4">
                            <span>100% Bootstrapped</span>
                            <p>Company</p>
                        </div>
                    </div>
                </div>


                <!-- Form Section -->
                <div class="col-12 col-lg-6 mb-4">
                    <div class="container shadow p-5 rounded  ">
                        <form>
                            <fieldset>
                                <legend>Get a free review of your policy today</legend>

                                <!-- Name input -->
                                <div class="mb-3">
                                    <label for="nameInput" class="form-label">Name</label>
                                    <input type="text" id="nameInput" class="form-control" placeholder="Enter your name" required>
                                </div>

                                <!-- Phone input -->
                                <div class="mb-3">
                                    <label for="phoneInput" class="form-label">Phone Number</label>
                                    <input type="tel" id="phoneInput" class="form-control" placeholder="Enter your phone number" required>
                                </div>

                                <!-- Email input -->
                                <div class="mb-3">
                                    <label for="emailInput" class="form-label">Email</label>
                                    <input type="email" id="emailInput" class="form-control" placeholder="Enter your email" required>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

             
        </div>
    </section>
    <section>
        <div class="container mt-4">
                <div class="row align-items-center">
                    <!-- Left Column (Text) -->
                    <div class="col-md-6 col-12 mb-4">
                        <h1>What is Film Insurance?</h1>
                        <p>
                            Film insurance in India refers to ensuring the film is against any unforeseen circumstances resulting in a loss to the film's producer. The unforeseen circumstances include accident, illness, or disease to the actors in the film leading to the cancellation of schedules and resulting in direct loss to the producer; the other circumstances include damage to the set properties due to natural calamities or man-made disasters. Natural calamities or any other unforeseen circumstance can delay the film's production, resulting in losses for the producers, which can be compensated under film insurance. The liability of the film production house is also covered in the film insurance policy; in case of loss or damage to the lives or third-party property damage, the film insurance policy pays compensation to the production house.
                        </p>
                    </div>

                    <!-- Right Column (Image) -->
                    <div class="col-md-6 col-12 mb-4">
                        <img src="https://via.placeholder.com/500" alt="Film Insurance Image" class="img-fluid rounded d-block  ms-auto">
                    </div>

                </div>
            </div>
        
    </section>
    <section>
   <div class="container mt-5">
        <h2>Frequently Asked Questions</h2>
        <div class="row">
            <!-- Left side: List of questions -->
            <div class="col-md-4">
                <div class="list-group" id="faqList">
                    <a href="#" class="list-group-item list-group-item-action" id="question1" data-bs-toggle="collapse" data-bs-target="#answer1" aria-expanded="true" aria-controls="answer1">
                        What is Bootstrap 5?
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" id="question2" data-bs-toggle="collapse" data-bs-target="#answer2" aria-expanded="false" aria-controls="answer2">
                        How do I install Bootstrap 5?
                    </a>
                    <a href="#" class="list-group-item list-group-item-action" id="question3" data-bs-toggle="collapse" data-bs-target="#answer3" aria-expanded="false" aria-controls="answer3">
                        Can I use Bootstrap 5 with other frameworks?
                    </a>
                </div>
            </div>

            <!-- Right side: Answer content -->
            <div class="col-md-8">
                <div class="accordion" id="faqAccordion">
                    <!-- Answer 1 -->
                    <div class="accordion-item">
                        <div id="answer1" class="accordion-collapse collapse show" aria-labelledby="question1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Bootstrap 5 is a popular open-source front-end framework for building responsive, mobile-first websites and web applications.
                            </div>
                        </div>
                    </div>

                    <!-- Answer 2 -->
                    <div class="accordion-item">
                        <div id="answer2" class="accordion-collapse collapse" aria-labelledby="question2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can install Bootstrap 5 by including the Bootstrap CSS and JS files from a CDN or by downloading them and adding them to your project.
                            </div>
                        </div>
                    </div>

                    <!-- Answer 3 -->
                    <div class="accordion-item">
                        <div id="answer3" class="accordion-collapse collapse" aria-labelledby="question3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, you can use Bootstrap 5 alongside other frameworks or libraries like jQuery, Angular, React, etc., but some customization might be necessary to avoid conflicts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>

    <section>
        <div class="container mt-5">
            <div class="align-items-center justify-content-center mb-5">
                <h1 class="text-center">Exclusions in Film insurance</h1>
                <h6 class="text-center">Certain exclusions are included from the policy on film insurance as follows These are:</h6>
            </div>
           <div class="row">
            <div class="col-lg-6 col-sm-12">
                <ul>
                    <li>Anyone insured in certain areas who participates in flights other than passengers.</li>
                    <li>The inability of a female actress to perform is the result of the pregnancy, menstrual cycle or birth.</li>
                    <li>A person insured by insurance who is involved in risky stunts or activities without the written approval of the insurance firm.</li>
                    <li>Anyone who is insured less than 9 years old who has chicken pox, mumps, measles German measles and whooping cough. Scarlet fever, etc.</li>
                    <li>Anyone younger than 6 and above 65 years of age.</li>
                </ul>

            </div>
              <div class="col-lg-6 col-sm-12">
                <ul>
                    <li>Decreasing atmospheric dampness, deterioration or changes in the weather and the exposure to extreme temperatures, or extreme temperatures, unless caused by an insured peril that isn't under the control of the insurance company.</li>
                    <li>The destruction or damage to negative film tapes and duplicate prints of work or outputs resulting from an act committed by the insured.</li>
                    <li>Consent to expose the videotape and tape recordings to electric or magnetic fields, other than with the recording, or reproduction of videotape footage.</li>
                </ul>

            </div>

           </div>

        </div>
         <!-- Modal start here  -->
        <div class="d-flex justify-content-center align-items-center" >
            <!-- Trigger Button -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
           Get Instant Quote
        </button>

    <!-- Modal Structure -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header (with Close Button) -->
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Contact Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body (Form with inputs) -->
                <div class="modal-body">
                    <form id="contactForm">
                        <!-- Name input -->
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Name</label>
                            <input type="text" id="nameInput" class="form-control" placeholder="Enter your name" required>
                        </div>

                        <!-- Phone input -->
                        <div class="mb-3">
                            <label for="phoneInput" class="form-label">Phone Number</label>
                            <input type="tel" id="phoneInput" class="form-control" placeholder="Enter your phone number" required>
                        </div>

                        <!-- Email input -->
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">Email</label>
                            <input type="email" id="emailInput" class="form-control" placeholder="Enter your email" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
    </div>      
    </section>


 
    <section>
           <div class="container mt-5">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is Bootstrap 5?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Bootstrap 5 is a popular open-source front-end framework for building responsive, mobile-first websites and web applications.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do I install Bootstrap 5?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can install Bootstrap 5 by including the Bootstrap CSS and JS files from a CDN or by downloading them and adding them to your project.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Can I use Bootstrap 5 with other frameworks?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you can use Bootstrap 5 alongside other frameworks or libraries like jQuery, Angular, React, etc., but some customization might be necessary to avoid conflicts.
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

     <section>
        <div class="container mt-5">
            <h2>Frequently Asked Questions</h2>
            <div class="row">
                <!-- Left Column (5 questions) -->
                <div class="col-lg-6 col-12">
                    <div class="accordion" id="faqAccordionLeft">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Bootstrap 5?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body">
                                    Bootstrap 5 is a popular open-source front-end framework for building responsive, mobile-first websites and web applications.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I install Bootstrap 5?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body">
                                    You can install Bootstrap 5 by including the Bootstrap CSS and JS files from a CDN or by downloading them and adding them to your project.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I use Bootstrap 5 with other frameworks?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body">
                                    Yes, you can use Bootstrap 5 alongside other frameworks or libraries like jQuery, Angular, React, etc., but some customization might be necessary to avoid conflicts.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Does Bootstrap 5 require jQuery?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body">
                                    No, Bootstrap 5 no longer requires jQuery, making it more lightweight and easier to integrate with modern JavaScript frameworks.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What are the advantages of Bootstrap 5 over Bootstrap 4?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordionLeft">
                                <div class="accordion-body">
                                    Bootstrap 5 comes with improved grid systems, enhanced forms, better spacing utilities, and many other features that make it more modern and easier to use.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (4 questions) -->
                <div class="col-lg-6 col-12">
                    <div class="accordion" id="faqAccordionRight">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    What is the grid system in Bootstrap?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body">
                                    The grid system in Bootstrap is used to create responsive layouts using rows and columns. It divides the page into 12 columns, allowing for flexible and customizable design.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    How to customize Bootstrap 5 themes?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body">
                                    You can customize Bootstrap 5 themes by overriding default styles using custom CSS or using the Bootstrap 5 theming system, such as variables or Sass.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Is Bootstrap 5 mobile-first?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body">
                                    Yes, Bootstrap 5 is a mobile-first framework, meaning its grid system and components are designed to work seamlessly on mobile devices and scale up to larger screens.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    How can I use Bootstrap 5 with React?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordionRight">
                                <div class="accordion-body">
                                    You can use Bootstrap 5 with React by installing the `react-bootstrap` package, which provides Bootstrap components as React components.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- Carousel Section -->
    <section>
        <div class="container mt-5">
            <h1 class="text-center">At Ethika, these movies are insured with pride</h1>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators (optional) -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active rounded">
                        <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide 1</h5>
                            <p>Description for Slide 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item rounded">
                        <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide 2</h5>
                            <p>Description for Slide 2.</p>
                        </div>
                    </div>
                    <div class="carousel-item rounded">
                        <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide 3</h5>
                            <p>Description for Slide 3.</p>
                        </div>
                    </div>
                </div>

                <!-- Carousel controls (Next and Previous buttons) -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Container for the video -->
   <section>
    <div class="container my-5">
        <h1 class="text-center">Telugu Film Journalist Association</h1>
        <div class="container d-flex justify-content-center align-items-center" >
            
            <!-- Center the content using Bootstrap's flexbox utilities -->
            <div style="width: 900px; height: 500px;">
                <iframe class="embed-responsive-item rounded" src="https://www.ethika.co.in/wp-content/themes/ultrabootstrap-child/assets/chiranjeevi.mp4" allowfullscreen style="width: 100%; height: 100%;"></iframe>
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
