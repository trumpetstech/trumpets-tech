<?php
include"inc/header.php";
?>
<body>

<?php
include"inc/preloader.php";
?>
    <!--====================  header area ====================-->
    <?php
include"inc/navbar.php";
?>
    <!--====================  End of header area  ====================-->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Contact us </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->











    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                            <h3 class="heading">To make requests for <br>further information, <br><span class="text-color-primary">contact us</span> via filling the form. </h3>
                            <div class="sub-heading">We just need a couple of hours! <br> No more than 2 working days since receiving your issue ticket.</div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-lg-6">
                            <div class="contact-form-wrap">
                                <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *">
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *">
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_subject" type="text" placeholder="Subject *">
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need."></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->
            <div class="contact-us-info-wrappaer section-space--pb_100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Mumbai</h5>
                                <ul class="conact-info__list">
                                    <li>D-25, Dhanraj Mahal, C.S.M. Road, Apollo Bunder, Mumbai 400 001</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.mumbai@trumpets.co.in</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">+91 9922367414</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Nashik</h5>
                                <ul class="conact-info__list">
                                    <li>1, Grandueur apartment, college road, Nashik, Maharashtra - 422005</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.nashik@trumpets.co.in</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">+91 9922367414</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4 col-md-6">
                            <div class="conact-info-wrap mt-30">
                                <h5 class="heading mb-20">Russia</h5>
                                <ul class="conact-info__list">
                                    <li>The Courtyard Building 11 Curtain Road, Russia</li>
                                    <li><a href="#" class="hover-style-link text-color-primary">contact.russia@mitech.com</a></li>
                                    <li><a href="#" class="hover-style-link text-black font-weight--bold">(+53)1221 09877</a></li>
                                </ul>
                            </div>
                        </div>
 -->
                    </div>
                </div>
            </div>
            <!--====================  Conact us info End  ====================-->






            <!--========== Call to Action Area Start ============-->
            <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-7">
                            <div class="cta-content md-text-center">
                                <h3 class="heading">We run all kinds of IT services that vow your <span class="text-color-primary"> success</span></h3>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-button-group--two text-center">
                                <a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                                <a href="#" class="btn btn--secondary btn-two "><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--========== Call to Action Area End ============-->





        </div>





        <!--====================  footer area ====================-->
       <?php
include"inc/footer.php";
?>