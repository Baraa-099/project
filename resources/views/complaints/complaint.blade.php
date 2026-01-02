<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Real Estate Contact</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="{{ asset('css/flexslider.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/line-icons.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/elegant-icons.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/theme-1.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/custom.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <style>
            
            .success-message {
                position: fixed;
                top: 20px;
                right: 20px;
                background: #28a745;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
                z-index: 9999;
                display: none;
                animation: slideIn 0.3s ease;
            }

            .success-message.show {
                display: block;
            }

            @keyframes slideIn {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        </style>
    </head>

    <body>
        <!-- رسالة النجاح الثابتة -->
        <div id="successAlert" class="success-message">
            ✅ تم التسجيل بنجاح!
        </div>


<nav>
  
    <a href="{{ route('contact') }}" class="btn btn-secondary btn"  style="background-color: #2f6f64;color:aliceblue"><b><-Back</b> </a>
</nav>





		<div class="main-container">
			<section class="contact-thirds">
				<div class="container">

					<div class="row">
						<div class="col-sm-12 text-center">
							<b style="color:#2f6f64;"><h1 >Add a complaint<br></b>
							We'd love to hear from you
							</h1>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<h5>Enquiries</h5>
							<p>
								Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.
							</p>
							<p>
We will get back to you as soon as possible.
		</div>

						<div class="col-sm-4 text-center">
							<h5>Details</h5>
							<p class="lead">Syria
							<br>Shukre Street ,&nbsp;Mallke<br><br>+963 963 852 741
							<br>Fahed@gmail.com<br></p>
						</div>

						<div class="col-sm-4">
							<h5>Leave A Message</h5>
							<div class="form-wrapper clearfix">
								<form class="form-contact email-form" method="POST" action="{{ route('complaints.store') }}" id="contactForm">
                                    @csrf
									<div class="inputs-wrapper">
                                        <input type="text" class="form-name validate-required @error('user_name') is-invalid @enderror"
                                               id="user_name" name="user_name" value="{{ old('user_name') }}" required placeholder="your name">
                                        @error('user_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <input type="email" class="form-email validate-required validate-email @error('user_email') is-invalid @enderror"
                                               id="user_email" name="user_email" value="{{ old('user_email') }}" required placeholder="Your Email Address">
                                        @error('user_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                               id="title" placeholder="title" name="title" value="{{ old('title') }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                        <textarea class="form-message validate-required @error('description') is-invalid @enderror"
                                                  id="description" name="description" placeholder="Your Message" rows="5" required>{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
									</div>

                                    <input type="submit" class="btn btn-submit text-white" value="Send Message" id="submitBtn" style="color:#2f6f64;">

									<div class="form-success">
										<span class="text-white">Message sent - Thanks for your enquiry</span>
									</div>
									<div class="form-error">
										<span class="text-white">Please complete all fields correctly</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

        <script>
            
            document.getElementById('contactForm').addEventListener('submit', function(e) {
                
                

                
                var successAlert = document.getElementById('successAlert');
                successAlert.classList.add('show');

                
                var submitBtn = document.getElementById('submitBtn');
                submitBtn.disabled = true;
                submitBtn.value = 'Sending...';

                
                setTimeout(function() {
                    successAlert.classList.remove('show');

                    
                    setTimeout(function() {
                        submitBtn.disabled = false;
                        submitBtn.value = 'Send Message';
                    }, 3000);

                }, 8000); 
            });


        </script>

        <!-- ملفات JS الخاصة بك -->
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    </body>
</html>
