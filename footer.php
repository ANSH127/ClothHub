<!-- Footer Section Begin -->
<footer class="footer-section">
    <div class="container">
        <div class="row" style="padding-bottom: 40px;">
            <div class="col-lg-3">
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="index.php"> <span>Threaderz</span>
                        </a>
                    </div>
                    <ul>
                        <li>+92 3213352126</li>
                        <li>threaderz@gmail.com</li>
                        <li>NUST H-12, Islamabad</li>
                    </ul>
                    <div class="footer-social">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/explore" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1">
                <div class="footer-widget">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="index.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="index.php">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="footer-widget" style="display: <?php if ($active == 'Register' || $active == 'Login') {
                                                                echo 'none';
                                                            };  ?>;">
                    <h5>Account</h5>
                    <ul>

                        <?php if ((isset($_SESSION['customer_email']))) {
                            echo "'<li><a href='account.php'>My Account</a></li>'";
                        } ?>
                        <li><a href="shopping-cart.php">Shopping Cart</a></li>
                        <li><a href="check-out.php">Check Out</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="newslatter-item">
                    <h5>Keep in touch</h5>
                    <p>Get E-mail updates about our latest special offers.</p>
                    <form action="index.php" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Mail">
                        <button type="button">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/jquery.dd.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>