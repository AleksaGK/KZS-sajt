<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Brewery</title>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://kit.fontawesome.com/d7aace2616.js"></script>
</head>

<body>
    

        <!-- <header>
            <nav>
                <div class="logo">
                    <a href="#first"><img src="img/logo.png" alt="logo"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="#first">Home</a></li>
                    <li><a href="#second">Pricelist</a></li>
                    <li><a href="#fourth">Contact</a></li>
                </ul>
                <div class="burger">
                    <span class="chield"><i class="fas fa-bars"></i></span>
                </div>
            </nav>
        </header> -->

        <!-- <section id="first">
            <p>"PO PIVU SE <br> DAN POZNAJE!"</p>
        </section> -->

        <!-- <section id="second">
            <div class="list">
                <button id="jedan" value="0">1</button>
                <button id="dva" value="1">2</button>
                <button id="tri" value="2">3</button>
                <button id="cetiri" value="3">4</button>
                <button id="pet" value="4">5</button>
                <button id="sest" value="5">6</button>
            </div>
            <div class="descrioption">
                <div class="row">
                    <div id="box1">1</div>
                    <div id="box2">2</div>
                </div>
                <div class="row">
                    <div id="box3">3</div>
                    <div id="box4">4</div>
                </div>
            </div>
        </section> -->

        <section id="fourth">

            <div>
                <div class="row-form">
                    <div>
                        <p>Contact us</p>
                        <form action = "includes/signup.php" method="post" class="tm-contact-form">
                           <?php
                                if(isset($error)){
                                    echo $error;
                                }
                           ?>
                           
                            <div class="form-group">
                                <input type="text" name="name" id="nameID" class="form-control" placeholder="Name"
                                    required="" />
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="emailID" class="form-control" placeholder="Email"
                                    required="" />
                            </div>

                            <div class="form-group">
                                <textarea rows="5" name="message" id="messageID" class="form-control"
                                    placeholder="Message" required=""></textarea>
                            </div>

                            <div class="form-group tm-d-flex">
                                <button type="submit" id="btn-subm" name="submit" class="tm-btn tm-btn-success tm-btn-right">
                                    Send
                                </button>
                            </div>
                            <?php
                                if(isset($message)){
                                    echo $message;
                                }
                           ?>
                        </form>
                    </div>
                    <div class="tm-address-box">
                        <h4 class="tm-info-title">Our Address</h4>
                        <div class="address">
                            Bulevar Nikole Tesle num. 14
                            <br>
                            Belgrade - Serbia
                        </div>

                        <i class="fas fa-phone tm-contact-icon"></i>060-000111222
                        <br>
                        <i class="fas fa-envelope tm-contact-icon"></i>beer.brewery@gmail.com

                        <div class="tm-contact-social">
                            <a href="#" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
                            <a href="#" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
                            <a href="#" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="tm-container-inner-2 tm-map-section">
                    <div class="row">
                        <div class="tm-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2829.9591729120298!2d20.424763615407436!3d44.82239637909858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65696e09b4fb%3A0xdb24efd31b567f49!2z0JHRg9C70LXQstCw0YAg0J3QuNC60L7Qu9C1INCi0LXRgdC70LUsINCR0LXQvtCz0YDQsNC0!5e0!3m2!1ssr!2srs!4v1574979802459!5m2!1ssr!2srs"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div> -->

        </section>

        <!-- <footer>
            <p>Copyright &copy; 2020 Brewery</p>
        </footer> -->
    
   


</body>

</html>