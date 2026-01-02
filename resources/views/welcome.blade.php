<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Real Estate</title>
        <meta name="description" content="Discover luxury properties with Prime Real Estate">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Bootstrap CSS -->
        <link href="https:

        <!-- Font Awesome -->
        <link href="https:

        <!-- Google Fonts -->
        <link href="https:

        <style>
            :root {
                --primary-color: #2c3e50;
                --secondary-color: #3498db;
                --accent-color: #e74c3c;
                --gold-color: #2f6f64;
                --light-color: #f8f9fa;
                --dark-color: #2c3e50;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Poppins', sans-serif;
                overflow-x: hidden;
                color: #333;
            }

            h1, h2, h3, h4, h5, h6 {
                font-family: 'Playfair Display', serif;
                font-weight: 600;
            }

            
            .hero-section {
                height: 100vh;
                background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.7)),
                            url('https:
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .hero-content {
                position: relative;
                z-index: 2;
            }

            .hero-title {
                font-size: 4rem;
                font-weight: 700;
                color: white;
                margin-bottom: 1.5rem;
                line-height: 1.2;
                text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            }

            .hero-subtitle {
                font-size: 1.5rem;
                color: rgba(255, 255, 255, 0.9);
                margin-bottom: 2.5rem;
                max-width: 850px;
            }

            
            .auth-buttons {
                margin-top: 3rem;
                display: flex;
                gap: 1.5rem;
                flex-wrap: wrap;
            }

            .btn-auth {
                padding: 1rem 2.5rem;
                border-radius: 50px;
                font-weight: 600;
                font-size: 1.1rem;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                text-decoration: none;
            }

            .btn-login {
                background: rgba(255, 255, 255, 0.15);
                color: white;
                border: 2px solid rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(10px);
            }

            .btn-login:hover {
                background: rgba(255, 255, 255, 0.25);
                border-color: white;
                color: white;
                transform: translateY(-3px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            .btn-register {
                background: linear-gradient(135deg, var(--gold-color), #2f6f64ae);
                color: white;
                border: none;
                box-shadow: 0 5px 15px#2f6f646e;
            }
            .btn-register:hover {
                background: linear-gradient(135deg,#2f6f6479, var(--gold-color));
                transform: translateY(-3px);
                box-shadow: 0 15px 25px #2f6f64;
                color: white;
            }
            
            @media (max-width: 992px) {
                .hero-title {
                    font-size: 3rem;
                }

                .hero-subtitle {
                    font-size: 1.3rem;
                }
            }

            @media (max-width: 768px) {
                .hero-title {
                    font-size: 2.5rem;
                }

                .hero-subtitle {
                    font-size: 1.1rem;
                }

                .auth-buttons {
                    flex-direction: column;
                    gap: 1rem;
                }

                .btn-auth {
                    width: 100%;
                    justify-content: center;
                }
            }

        </style>
    </head>
    <body>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-10 mx-auto text-center hero-content">


                        <h1 class="hero-title">Discover Luxury Living and choose the dream house </h1>

                        <p class="hero-subtitle">
                            Your gateway to exclusive real estate opportunities. Explore premium properties,
                            connect with expert agents, and find your dream home in today's competitive market.
                        </p>

                        <div class="auth-buttons justify-content-center">
                            <a href="{{ route('login') }}" class="btn btn-login btn-auth">
                                <i class="fas fa-sign-in-alt"></i>
                                Log In
                            </a>

                            <a href="{{ route('register') }}" class="btn btn-register btn-auth">
                                <i class="fas fa-user-plus"></i>
                                Create Free Account
                            </a>
                        </div>


                </div>
            </div>
        </section>
    </body>
</html>
