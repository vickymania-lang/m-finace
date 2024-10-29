<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>M & F FINANCE IRELAND LIMITED</title>
    <meta name="keywords" content="Finance, Loan ,Bank, Standby Letter of Credit ,Bank Guarantee, Swift Letter, Proof of Funds, Project funding
    Business startup, Investment ,Pre-Advice, Contract, Fintech, Cash backed, Global, Bank Transfer, Bond, Stocks, Cryptocurrency, Trading
    Real Estate">
    <meta name="description" content="M & F FINANCE IRELAND LIMITED is a group of financial and management services companies, each of its members serving customers worldwide in various fields of corporate and money management. we strive to">
    <meta name="author" content="M & F FINANCE IRELAND LIMITED is a group of financial and management services companies, each of its members serving customers worldwide in various fields of corporate and money management. we strive to">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <!-- form submission -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('contact-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(form);
                fetch('https://formspree.io/f/mzzpdond', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                }).then(response => {
                    if (response.ok) {
                        alert('Email sent successfully!');
                        form.reset();
                        window.location.href = 'index.php'; // Redirect to home page
                        // Or use window.location.href = window.location.pathname; to stay on the same page
                    } else {
                        response.json().then(data => {
                            if (data.errors) {
                                alert('Failed to send email: ' + data.errors.map(error => error.message).join(', '));
                            } else {
                                alert('Failed to send email.');
                            }
                        });
                    }
                }).catch(error => {
                    alert('Failed to send email: ' + error.message);
                });
            });
        });
    </script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


</head>



<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <div class="header_top">

            <div class="container">
                <div class="row">
                    <div class="logo_section">
                        <a class="navbar-brand" href="index.php"><img style="height: 85%; width: 85%;" src="images/nmflogo.jpg" alt="image"></a>
                    </div>
                    <div class="site_information">
                        <ul>
                            <li><a href="mailto:exchang@gmail.com"><img src="images/mail_icon.png" alt="#" />info@mffinanceirelandlimited.com</a></li>
                            <li><a href="tel:exchang@gmail.com"><img src="images/phone_icon.png" alt="#" />+353899442233</a></li>
                            <!-- <li><a class="join_bt" href="#">Join us</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="col-sm-12">
                    <div class="menu_orange_section" style="background: #0a4595;">
                        <nav class="navbar header-nav navbar-expand-lg">
                            <div class="menu_section">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                                    <ul class="navbar-nav">
                                        <li><a class="nav-link active" href="index.php">HOME</a></li>
                                        <li><a class="nav-link" href="about.php">ABOUT</a></li>
                                        <li><a class="nav-link" href="services.php">SERVICES</a></li>
                                        <li><a class="nav-link" href="offer.php">OUR OFFER</a></li>
                                        <li><a class="nav-link" href="contact.php">CONTACT</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="search-box">
                            <input type="text" class="search-txt" placeholder="Search">
                            <a class="search-btn">
                                <img src="images/search_icon.png" alt="#" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/img/rr.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>
                                            <P>M & F FINANCE IRELAND LIMITED</P><strong>CERTIFIED FINANCIAL INSTRUCMENT PROVIDER BG SBLC </strong>
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="offer.php">Our Offer </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/img/1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>
                                            <P>M & F FINANCE IRELAND LIMITED</P><strong>WE OFFER UNIQUE PROTECTED INVESTMENTS</strong>
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="services.php">Our Services </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/img/1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text white_fonts">
                                        <h3>
                                            <P>WE ARE THE WORLDS</P><strong>PREMIERE FINANCIAL INSTRUMENT EXPERTS</strong>
                                            <P>DELIVERING GLOBAL SOLUTIONS AND PERSONAL SERVICE.</P>
                                        </h3>
                                        <br>
                                        <a class="start_exchange_bt" href="services.php">Our Services </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <!-- section -->
    <div class="section layout_padding about_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2>M&F FINANCE IRELAND LIMITED</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p style="text-align: left;">
                            CERTIFIED FINANCIAL INSTRUCMENT PROVIDER BG SBLC: Global load Cargo is dedicated to treating customers fairly.
                        </p>
                        <ul>
                            <ol>We OFFER UNIQUE PROTECTED INVESTMENTS: Our Deposit Refund Program is Powerful and Protects your Invested Capital. Your Safety is Important to us.</ol>
                            <ol>WE ARE THE WORLDS PREMIERE FINANCIAL INSTRUMENTS EXPERTS: Delivering Global Solutions and Personal Service.</ol>
                            <ol>Global financing for various commercial projects M&F Finance Ireland Limited is an International finance institution and financial service provider specialized in Financial Instruments BG Bank Guarantee and SBLC Standly Letter of Credit Lease/Purchase issued with Top Rated Banks with worldwide acceptability rate.</ol>
                            <ol>M&F Finance Ireland Limited is based and registered in The United Kingdom & Ireland under the Chamber of Commerce.</ol>
                        </ul>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="contact.php">Call to ask any question</a>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img style="width: 80%; height: 80%;" src="images/nmflogo.jpg" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->



    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="images/img/Secure.jpg" alt="#" />
                        <h4>BG/SBLC - Bank Guarantee / Standby Letter of Credit</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="images/img/Secure3.jpg" alt="#" />
                        <h4>BD Instrument - BG SBLC DLC BD Monetization</h4>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full services_blog">
                        <img class="img-responsive" src="images/img/Secure2.jpg" alt="#" />
                        <h4>DLC/LC -Deferred/ Documentary Letter of Credit / Letter of Credit</h4>
                    </div>
                </div>
            </div>
            <div class="row margin-top_30">
                <div class="col-sm-12">
                    <div class="full">
                        <div class="center">
                            <a class="main_bt" href="services.php">About more ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section white_fonts">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="images/ab.jpg" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2><span class="theme_color">Apply Now ! !! !!!</span> </h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <h2><span class="theme_color">Call us TODAY for a Quote: +353899442233</span></h2>
                        <h2><span class="theme_color">Send us Message: info@mffinanceirelandlimited.com</span></h2>

                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="contact.html">CONTACT US TODAY </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>CLIENTS REVIEW</h2>

                        </div>
                    </div>
                </div>
                <p style="text-align: center;">We operate a reliable, efficient bank instrument delivery and contract authentication process that includes stages of Independent verification on respected financial transaction networks.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="images/img/c1.JPG" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>GANAH RENGAYAH</h3>
                            <p>M&F Finance Ireland has always helped me. Everything I asked for has been resolved very soon.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="images/img/c2.JPG" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>Mrs BUSHRA WAQAS</h3>
                            <p>I highly recommend this financial company. Their customer service is second to none</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="images/img/c13.jpg" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>MOIZ FARHAN</h3>
                            <p>Their contract funding is relaible and honest</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="images/img/c4.JPG" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>DARKO BLAZEVIC</h3>
                            <p>I recommend it. Their employee are very professionals and they are great. Seriously a great value for their service. They went way above and beyond. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="images/img/c5.JPG" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>ZEESHAN KHAN</h3>
                            <p>I highly recommend for SBLC Lease and monesation Funding for my business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="full news_blog">
                        <img class="img-responsive" src="images/img/c6.JPG" alt="#" />
                        <div class="overlay"><a class="main_bt transparent" href="#">View</a></div>
                        <div class="blog_details">
                            <h3>LEROY DUNK</h3>
                            <p>Financial Service is fair and transparent with good result.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- section -->
    <div class="section layout_padding padding_top_0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>Contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- contact_form -->
    <div class="section contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form id="contact-form" class="contact_form_inner" action="https://formspree.io/f/mzzpdond">
                            <fieldset>
                                <div class="field">
                                    <input type="text" name="name" placeholder="Your name" />
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Email" />
                                </div>
                                <div class="field">
                                    <input type="text" name="phone_no" placeholder="Phone number" />
                                </div>
                                <div class="field">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="field center">
                                    <button type="submit">SEND</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact_form -->
    <!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <!-- <img class="img-responsive" src="images/nordinalogo.jpg" alt="#" /> -->
                                <div style="text-align: center; margin: 20px; ">
                                    <h2 style="color: black;">ANY QUESTIONS?</h2>
                                    <ul>
                                        <li style="color: black;">+353899442233</li>
                                        <li style="color: black;">9:00am - 6:00pm</li>
                                    </ul>
                                </div>
                                <div class="card" style="width: 15rem; ">
                                    <h2 style="color: black; text-align:center;  ">REGULATIONS</h2>
                                    <div class="card-body">
                                        <h2 style="color: black;" class="card-title">PROFESSIONAL MONITORING</h2>
                                        <h2 style="color: black;" class="card-title">TERMS OF BUSINESS</h2>
                                        <h2 style="color: black;" class="card-title">COOLIES POLICY</h2>
                                        <h2 style="color: black;" class="card-title">PRIVACY POLICY</h2>
                                    </div>
                                </div>
                                <h5 style="color: black;">Digital Office Centre: 13 Upper Mount, Dublin D02F407 IrelandD02F407</h5>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <h3 style="color: black;"> FCA REGULATED</h3>
                            </div>
                            <div class="full">
                                <img style="width: 50%; height: 50%;" class="img-responsive" src="images/nordinalogo.jpg" alt="#" />
                                <ul class="menu_footer">
                                    <li><a style="color: black;" href="index.php">> M&F Finance Ireland Limited is authorized regulated by the Financial Conduct Authority FCA Number 212297.</a></li>
                                    <li><a style="color: black;" href="about.php">> M&F Finance Ireland Limited is a company registered in Ireland No. 212297 with its registered office at 13 Upper Mount, Dublin, D02F407, IrelandD02F407</a></li>
                                </ul>

                            </div>

                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                                    <h3 style="color: black;">
                                        Send Email</h3>
                                    <p style="color: black;">We operate a reliable, efficient delivery and authentication process that includes two stages of Independent verification on two respected financial transaction networks. </p>
                                    <div class="newsletter_form">
                                        <form method="POST" action="https://formspree.io/f/mzzpdond">
                                            <input type="text" placeholder="Send Message" name="name" required="">
                                            <button style="color: white;" type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div class="footer_blog full white_fonts">
                                    <h3 style="color: black;">Contact us</h3>
                                    <ul class="full">
                                        <li><img src="images/i5.png"><span style="color: black;">13 upper mount street, Dublin, IRELAND, D02F407<br></span></li>
                                        <li><img src="images/i6.png"><span style="color: black;">info@mffinanceirelandlimited.com</span></li>
                                        <li><img src="images/i7.png"><span style="color: black;">+353899442233</span></li>
                                    </ul>
                                    <div class="card" style="width: 15rem;">
                                        <h2 style="color: black; text-align:center;  ">OUR LOCATION</h2>
                                        <div class="card-body">
                                            <h4 style="color: black;" class="card-title">Ireland</h4>
                                            <h4 style="color: black;" class="card-title">England</h4>
                                            <h4 style="color: black;" class="card-title">United States</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">© Copyrights 2024 design by M & F FINANCE IRELAND LIMITED </p>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        /* counter js */

        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };

            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
</body>

</html>