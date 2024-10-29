<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>M & F FINANCE SERVICES</title>
    <meta name="keywords" content="Finance, Loan ,Bank, Standby Letter of Credit ,Bank Guarantee, Swift Letter, Proof of Funds, Project funding
    Business startup, Investment ,Pre-Advice, Contract, Fintech, Cash backed, Global, Bank Transfer, Bond, Stocks, Cryptocurrency, Trading
    Real Estate">
    <meta name="description" content="Our Leased Bank Guarantee (BG/SBLC) is issued by World Top rated Banks, we use the Bank SWIFT Network to have clients Leased Bank Guarantee (BG/SBLC) delivered Bank to Bank using SWIFT MT799 followed by SWIFT MT760. We operate a reliable, efficient delivery and authentication process that includes two stages of Independent Verification on Two Respected Financial Transaction Networks:">
    <meta name="author" content="Our Leased Bank Guarantee (BG/SBLC) is issued by World Top rated Banks, we use the Bank SWIFT Network to have clients Leased Bank Guarantee (BG/SBLC) delivered Bank to Bank using SWIFT MT799 followed by SWIFT MT760. We operate a reliable, efficient delivery and authentication process that includes two stages of Independent Verification on Two Respected Financial Transaction Networks:">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">


    <!-- form submission -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('small-form');
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

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

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
    <div style="background-image: url(images/img/abb.jpg);" class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>OUR SERVICES</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                            <h2><span class="theme_color"></span>BUY LEASED BANK GUARANTEE (BG/SBLC)</h2>
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

                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                            <h2><span class="theme_color">Buying or Purchase of Leased Bank Guarantee (BG/SBLC)</span> </h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <p><span style="color: black; text-align: justify;">Our Leased Bank Guarantee (BG/SBLC) is issued by World Top rated Banks, we use the Bank SWIFT Network to have clients Leased Bank Guarantee (BG/SBLC) delivered Bank to Bank using SWIFT MT799 followed by SWIFT MT760. We operate a reliable, efficient delivery and authentication process that includes two stages of Independent Verification on Two Respected Financial Transaction Networks:</span></p>
                        <h2><span class="theme_color">TRANSACTION DESCRIPTION AND PROCEDURES:</span></h2>
                        <ul>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Instrument: Bank Guarantee (BG) or Standby Letter of Credit (SBLC)</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Total Face Value: Please inform us</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Issusing bank: UBS Switzerland AG, HSBC Bank London, Deutsche Bank AG Frankfurt, Credit Suisse AG</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Age: One Year and One Day (With the option of Rolls and Extension)</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Purchasing: 32%+2%/Leasing fee 4%+2%</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Delivery: Bank to Bank Swift MT799 and/or MT760</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Payment: MT103</li>
                            <li style="color: black;"><i style="background-color: blue; margin: 0px 20px;" class="fa-solid fa-arrow-right"></i>Hard Copy: By Bank Bonded Courier within 7 banking days after delivery of Swift.</li>
                        </ul>
                        <ol>
                            <li style="color: black; text-align: justify;"><i class="fa-solid fa-share-from-square"></i>Seller and Buyer execute, sign and initial this Deed of Agreement, which thereby automatically becomes a full commercial recourse contract to be lodged by both parties for initiation of Swift Transmission.</li>
                            <li style="color: black; text-align: justify;"><i class="fa-solid fa-share-from-square"></i>Within three (3) banking days after both parties sign the Agreement, lessor will issue a Refund Recourse Undertaking duly endorsed by the issuing Bank to the Lessee guarantying to refund to the lessee all cost incurred by Lessee as the transmission/administrative charges for the transmission of Pre-Advice via Swift MT799 or SBLC via Swift MT760 or both after due execution of the contract and in case of failure on the Lessor’s side the Notarized signed and sealed Corporate Refund Recourse Undertaking guarantees that the Lessor refunds completely the transmission/administrative fees in addition to the penalty for failure of performance being 1% of the total face value of SBLC.</li>
                            <li style="color: black; text-align: justify;"><i class="fa-solid fa-share-from-square"></i>Within three (3) working days after the Buyer receives the countersigned DOA (Deed Of Agreement)The Buyer will make payment by direct wire transfer into the Seller's provided bank co-ordinates for the receiving of the bank transmission/administrative charges for the Pre-Advice via Swift MT799 or SBLC via Swift MT760 or both as the case maybe in the amount of Euro/USD XX 000.00.</li>
                            <li style="color: black; text-align: justify;"><i class="fa-solid fa-share-from-square"></i>Within two (2) banking days after confirmation of receipt of payment of the bank transmission/administrative fees charges for the SBLC via Swift MT760 or Pre-Advice via Swift MT799 or both in Seller’s bank account, the Seller will deliver the Pre-Advice or SBLC via Bank to Bank confirmation of Swift MT799 or MT760 to the Buyer’s bank including the hard copy of the SBLC via bank bonded courier in Seven (7) banking days.</li>
                            <li style="color: black; text-align: justify;"><i class="fa-solid fa-share-from-square"></i>Buyer sends out Buying fees by Swift MT103 to the Buyer deducting the initially paid bank transmission/administrative fees and the brokers their commission fees 32%+2 % of total Face Value by wire transfer within thirty (30) days upon delivery, confirmation and verification of SBLC by MT760 in the Buyer’s nominated account and SBLC hard copy in the Lessee’s nominated bank.</li>
                            <li style="color: black; text-align: justify;"><i class="fa-solid fa-share-from-square"></i>Should the Buyer not deduct the bank transmission/administrative charges from buying fees paid, the Buyer shall refund bank charges to Buyer by direct wire transfer within three (3) banking days upon payment of the Buying fees. <br>
                                Should the Lessee default to pay the leasing fees to the Lessor and the brokers commission fees as agreed after 30 banking days of confirmation of BG/SBLC MT760 in lessee's bank account, Lessor will instruct the issuing bank to put a claim on the BG/SBLC thereby forcing the Lessee's bankers to return the BG/SBLC MT760 to the issuing Bank.
                            </li>
                        </ol>
                    </div>
                    <div class="full paddding_left_15">
                        <a class="main_bt" href="contact.php">CONTACT US TODAY </a>
                    </div>
                </div>
                <div class="col-md-6" style="background: #fff;">
                    <div class="full text_align_right_img">
                        <img src="images/long.JPG" alt="#" />
                        <img src="images/long.JPG" alt="#" />
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
                            <h2><span class="theme_color"></span>OUR OTHER SERVICES</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/img/banco.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Bank Guarantee& Letter of Credit Service</h2>
                                <hr>
                                <P>Monday -Friday <br>
                                    From $/£1,000,000.00</P>
                                <a href="contact.php" class="btn btn-primary">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/img/atm.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">Bank Instrument Monetization Service</h2>
                                <hr>
                                <P>Monday -Friday <br>
                                    From $/£1,000,000.00</P>
                                <a href="contact.php" class="btn btn-primary">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="images/img/gather.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">
                                    Financial Consultation</h2>
                                <hr>
                                <P>Monday -Friday <br>
                                    From $/£1,000,000.00</P>

                                <a href="contact.php" class="btn btn-primary">BOOK NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end section -->


    <!-- moving -->
    <center>
        <!-- The image has scrolling behavior to left -->
        <marquee behavior="scroll" direction="left">
            <img style="width: 10%; height: 10%;" src="images/img/m1.jpeg" alt="no image">
            <img style="width: 10%; height: 10%;" src="images/img/m2.jpeg" alt="no image">
            <img style="width: 10%; height: 10%;" src="images/img/m3.jpeg" alt="no image">
            <img style="width: 10%; height: 10%;" src="images/img/qc.jpg" alt="no image">
            <img style="width: 10%; height: 10%;" src="images/img/fs.jpg" alt="no image">
        </marquee>
    </center>


    <!-- end moving -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12 white_fonts">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3">
                            <div class="full">
                                <div style="text-align: center; margin: 20px; ">
                                    <h2 style="color: black;">ANY QUESTIONS?</h2>
                                    <ul>
                                        <li style="color: black;">+353899442233</li>
                                        <li style="color: black;">9:00am - 6:00pm</li>
                                    </ul>
                                </div>
                                <div class="card" style="width: 15rem;">
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
                                        Send message</h3>
                                    <p style="color: black;">We operate a reliable, efficient delivery and authentication process that includes two stages of Independent verification on two respected financial transaction networks. </p>
                                    <div class="newsletter_form">
                                        <form action="https://formspree.io/f/mzzpdond" method="POST" id="small-form">
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
                    <p class="crp">© Copyrights 2024 design by M & F FINANCE IRELAND LIMITED</p>
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

</body>

</html>