<div id="footer" class="footer-1 1-footer">
    <svg version="1.1" id="footer-divider" class="secondary" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" xml:space="preserve"
        preserveAspectRatio="none slice">
        <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z">
        </path>
    </svg>
    <!-- ==== footer ==== -->
    <footer class="bg-secondary text-light">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-lg-4 text-center">
                    <!-- logo -->
                    <img src="img/logo_light.png" class="logo-footer img-fluid" alt="">
                    <h5 class="mt-3">Subscribe to our newsletter</h5>
                    <!-- Mailist Form -->
                    <div id="mc_embed_signup">
                        <!-- your mailist address in the line bellow -->
                        <form action="javascript:void(0)" method="post" id="mc-embedded-subscribe-form"
                            name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div id="mc_embed_signup_scroll">
                                <div class="mc-field-group">
                                    <div class="input-group">
                                        <input class="form-control input-lg required email" type="email" value=""
                                            name="EMAIL" placeholder="Your email here" id="mce-EMAIL">
                                        <span class="input-group-btn">
                                            <button class="btn btn-tertiary" type="submit" value="Subscribe"
                                                name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
                                        </span>
                                    </div>
                                    <!-- Subscription results -->
                                    <div id="mce-responses" class="mailchimp">
                                        <div class="alert alert-danger response" id="mce-error-response"></div>
                                        <div class="alert alert-success response" id="mce-success-response"></div>
                                    </div>
                                </div>
                                <!-- /mc-fiel-group -->
                            </div>
                            <!-- /mc_embed_signup_scroll -->
                        </form>
                        <!-- /form ends -->
                    </div>
                    <!-- /mc_embed_signup -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center res-margin">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1"><i class="fas fa-phone margin-icon "></i>{{ getContactDetails()['phone'] }}</li>
                        <li class="mb-1"><i class="fas fa-envelope margin-icon"></i><a
                                href="mailto:{{ getContactDetails()['email'] }}">{{ getContactDetails()['email'] }}</a></li>
                        <li><i class="fas fa-map-marker margin-icon"></i>{{ getContactDetails()['address'] }}</li>
                    </ul>
                    <!--/ul -->
                    <!-- Start Social Links -->
                    <ul class="social-list text-center list-inline mt-2">
                        <li class="list-inline-item"><a title="Facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item"><a title="Twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a title="Instagram" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                    <!-- /End Social Links -->
                </div>
                <!--/ col-lg -->
                <div class="col-lg-4 text-center">
                    <h5>Working Hours</h5>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-1">Monday to Friday</li>
                        <li class="mb-1">Open from 9am - 6pm</li>
                        <li class="mb-1">Holidays - Closed</li>
                        <li>Weekends - Closed</li>
                    </ul>
                    <!--/ul -->
                </div>
                <!--/ col-lg -->
            </div>
            <!--/ row-->
            <hr>
            <div class="row">
                <div class="credits col-sm-12">
                    <p>Designed by <a href="https://victor.jeapscarhire.ng">Victor (Olvios Tech)</a></p>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/ container -->
        <!-- Go To Top Link -->
        <div class="d-none d-md-block">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!--/page-scroll-->
    </footer>
    <!--/ footer-->
</div>