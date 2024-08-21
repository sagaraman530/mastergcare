<?php include 'common/header.php'; ?>

<div id="carouselExampleIndicators" class="carousel " data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <section class="banner-section" style="background-image: url(assets/images/banner/1.jpg);">
                <div class="container">
                    <div class="banner-wrapper row w-100 mx-0">
                        <div class="col-md-12 col-lg-7">
                            <div class="banner-content w-100">
                                <h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">Best Medical
                                    Clinic
                                </h2>
                                <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s"><b>Bringing
                                        Health</b> To Life For The Whole Family...</h1>
                                <a href="#" class="lab-btn wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".1s"><span>Get
                                        Appoinments <i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <form class="book-appointment" name="google-sheet" method="post" action="send_mail.php"
                                style="border-radius: 5px;padding: 25px;background: rgb(255 255 255 / 97%);box-shadow: 0 25px 25px rgb(0 0 0 / 15%);">
                                <h4><span>Book an</span> Appointment</h4>
                                <input type="hidden" name="page" value="safe-and-legal-mtp LP">
                                <input type="text" name="name" class="form-control mt-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name" required="">
                                <input type="tel" name="phone" class="form-control mt-3"
                                    pattern="[0-9]{4}[0-9]{3}[0-9]{3}" maxlength="10" id="exampleInputPassword1"
                                    placeholder="Mobile No." required="">
                                <input type="tel" name="age" class="form-control mt-3" pattern="[0-9]{2}"
                                    id="exampleInputPassword1" placeholder="Enter Age">
                                <textarea rows="3" class="form-control mt-3" name="message"
                                    placeholder="Type Message"></textarea>

                                <button type="submit" name="submit" class="btn btn-primary lab-btn mt-3"
                                    style="border:none">Request a Call Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="carousel-item">
            <section class="banner-section" style="background-image: url(assets/images/banner/2.jpg);">
                <div class="container">
                    <div class="banner-wrapper row w-100 mx-0">
                        <div class="col-md-12 col-lg-7">
                            <div class="banner-content">
                                <h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">Top Hospital
                                    Clinic
                                </h2>
                                <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s"><b>Bringing
                                        Health</b> To Life For The Whole Family...</h1>
                                <a href="#" class="lab-btn wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".1s"><span>Get
                                        Appoinments <i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <form class="book-appointment" name="google-sheet" method="post" action="send_mail.php"
                                style="border-radius: 5px;padding: 25px;background: rgb(255 255 255 / 97%);box-shadow: 0 25px 25px rgb(0 0 0 / 15%);">
                                <h4><span>Book an</span> Appointment</h4>
                                <input type="hidden" name="page" value="safe-and-legal-mtp LP">
                                <input type="text" name="name" class="form-control mt-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name" required="">
                                <input type="tel" name="phone" class="form-control mt-3"
                                    pattern="[0-9]{4}[0-9]{3}[0-9]{3}" maxlength="10" id="exampleInputPassword1"
                                    placeholder="Mobile No." required="">
                                <input type="tel" name="age" class="form-control mt-3" pattern="[0-9]{2}"
                                    id="exampleInputPassword1" placeholder="Enter Age">
                                <textarea rows="3" class="form-control mt-3" name="message"
                                    placeholder="Type Message"></textarea>

                                <button type="submit" name="submit" class="btn btn-primary lab-btn mt-3"
                                    style="border:none">Request a Call Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="carousel-item">
            <section class="banner-section" style="background-image: url(assets/images/banner/3.jpg);">
                <div class="container">
                    <div class="banner-wrapper row w-100 mx-0">
                        <div class="col-md-12 col-lg-7">
                            <div class="banner-content">
                                <h2 class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".1s">Procide Best
                                    Medical
                                    Treatment
                                </h2>
                                <h1 class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".1s"><b>Bringing
                                        Health</b> To Life For The Whole Family...</h1>
                                <a href="#" class="lab-btn wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".1s"><span>Get
                                        Appoinments <i class="icofont-rounded-double-right"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5">
                            <form class="book-appointment" name="google-sheet" method="post" action="send_mail.php"
                                style="border-radius: 5px;padding: 25px;background: rgb(255 255 255 / 97%);box-shadow: 0 25px 25px rgb(0 0 0 / 15%);">
                                <h4><span>Book an</span> Appointment</h4>
                                <input type="hidden" name="page" value="safe-and-legal-mtp LP">
                                <input type="text" name="name" class="form-control mt-3" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Name" required="">
                                <input type="tel" name="phone" class="form-control mt-3"
                                    pattern="[0-9]{4}[0-9]{3}[0-9]{3}" maxlength="10" id="exampleInputPassword1"
                                    placeholder="Mobile No." required="">
                                <input type="tel" name="age" class="form-control mt-3" pattern="[0-9]{2}"
                                    id="exampleInputPassword1" placeholder="Enter Age">
                                <textarea rows="3" class="form-control mt-3" name="message"
                                    placeholder="Type Message"></textarea>

                                <button type="submit" name="submit" class="btn btn-primary lab-btn mt-3"
                                    style="border:none">Request a Call Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- ==========Banner Section Start Here========== -->

<!-- ==========Banner Section Ends Here========== -->

<!-- ==========Banner Section Start Here========== -->
<section>
    <div class="dr-warning">
        <!-- Codes by HTMLcodes.ws -->
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
            <p class="mb-0">NOTE: HERE PRE-NATAL SEX DETERMINATION (BOY OR GIRL BEFORE BIRTH) IS NOT DONE. IT'S A
                PUNISHABLE ACT.
            </p>
        </marquee>
    </div>
    <div class="dr-warning mt-2">
        <!-- Codes by HTMLcodes.ws -->
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
            <p class="mb-0">Dr. Rupali Mishra owner of Dr. Rupali's Medical and Diagnostics behind the historical
                judgment
                extending Abortion Rights up to 24 Weeks to Unmarried &amp; Single Woman passed by Supreme Court of
                India on 29.09.2022 in Civil Appeal No. 5802 of 2022 arising out of 12612/2022 in the matter of X v
                GOVT NCT OF DELHI &amp; ORS.<a href="#" view="" class="text-white">Click Here to Read More...</a>
            </p>
        </marquee>
    </div>
    <div class="dr-warning mt-2">
        <!-- Codes by HTMLcodes.ws -->
        <marquee onmouseover="this.stop();" onmouseout="this.start();">
            <p class="mb-0">The Supreme Court of India in Civil Appeal No. 5802 of 2022 arising out of SLP (C)
                12612/2022 in the
                matter of X v GOVT NCT OF DELHI &amp; ORS filed by Dr. Rupali's Medical and Diagnostics allowed the
                Petitioner, an unmarried woman of 25 yrs carrying unwanted pregnancy of 24 weeks for its termination
                in India through order dated 21.07.2022.<a href="#" view="" class="text-white">Click
                    Here to Read More...</a></p>
        </marquee>
    </div>
</section>
<!-- ==========Banner Section Ends Here========== -->


<!-- ==========Feature Section Start Here========== -->
<section class="feature-section padding-tb bg-color">
    <div class="container">
        <div class="feature-section-wrapper">
            <div class="section-header wow fadeInUp" data-wow-delay="" data-wow-duration="1s">
                <h2><span>We Offer Best Services </span> </h2>
                <h2>To Meet Your Needs</h2>
            </div>
            <div class="section-content">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="lab-item feature-item wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/feature/2.png" alt="feature img">
                                </div>
                                <div class="lab-content">
                                    <h4>Acute & Emergency Care</h4>
                                    <p>Acute and Emergency (A&E) Care Centre at MasterG MediGlobe Multispecialties
                                        Hospital has ..
                                    </p>
                                    <a href="acute-emergency-care.php" class=""><span>Read More <i
                                                class="icofont-rounded-double-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="lab-item feature-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/feature/2a.png" alt="feature img">
                                </div>
                                <div class="lab-content">
                                    <h4>Anaesthesia</h4>
                                    <p>We are a team of dedicated doctors whose primary goal is to provide holistic
                                        peri-operative care to our patients.
                                    </p>
                                    <a href="anaesthesia.php" class=""><span>Read More <i
                                                class="icofont-rounded-double-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="lab-item feature-item wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/feature/3a.png" alt="feature img">
                                </div>
                                <div class="lab-content">
                                    <h4>Chronic Pain Services</h4>
                                    <p>Our goals for our chronic pain patients are to help them alleviate and manage
                                        their chronic pain..
                                    </p>
                                    <a href="chronic-pain-services.php" class=""><span>Read More <i
                                                class="icofont-rounded-double-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="lab-item feature-item wow fadeInRight" data-wow-delay=".2s" data-wow-duration="1s">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/feature/4.png" alt="feature img">
                                </div>
                                <div class="lab-content">
                                    <h4>General Surgeries</h4>
                                    <p>DAY SURGERIES: On average, a surgery is completed in two hours and most
                                        patients may return home on the same day
                                    </p>
                                    <a href="general-surgeries.php" class=""><span>Read More <i
                                                class="icofont-rounded-double-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Feature Section Ends Here========== -->

<!-- ==========About Us Section Start Here========== -->
<section class="about-us-section padding-tb style-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <figure class=" wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                    <img src="./assets/images/about/dr.dahiya_img_logo.jpg"
                        alt="Dr Dahiya's Abortion Centre - Best Abortion Centre in South Delhi">
                </figure>
            </div>
            <div class="col-md-7">
                <div class="about-inner-content">
                    <h4 class=" wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Welcome to </h4>
                    <h1 class=" wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Dr. Sandeep Dahiya's
                        <span>Abortion</span> Centre <span class="hide wow fadeInUp" data-wow-delay=".2s"
                            data-wow-duration="1s">Best Abortion Centre in
                            SOuth Delhi</span>
                    </h1>
                    <p class=" wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Dr. Sandeep Dahiya is a
                        distinguished anesthesiologist with an impressive academic and
                        professional background. He holds an MBBS and a DNB in Anesthesia and has developed a rich
                        expertise in various domains of anesthesiology, including robotic anesthesia, neonatal, neuro,
                        laparoscopic, and orthopedic anesthesia. His qualifications are further enhanced by his
                        certification as an ECFMG (Educational Commission for Foreign Medical Graduates) from the USA
                        and an IDRA in pain management.
                    </p>
                    <p class=" wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Dr. Dahiya has received
                        accolades for his skills in ICU and emergency handling, demonstrating
                        exceptional leadership during the COVID-19 pandemic as the head of the Corona team at BLK Max
                        Hospital. His career spans significant tenures at government hospitals and prestigious
                        institutions such as Rajiv Gandhi Cancer Hospital, where he honed his skills and gained
                        extensive experience in handling complex cases.
                    </p>
                    <p class=" wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">Currently, Dr. Dahiya owns and
                        operates a 20-bedded multispecialty hospital in Faridabad equipped
                        with state-of-the-art facilities for major surgeries in gynecology, orthopedics, and
                        laparoscopic procedures. His hospital is a testament to his commitment to providing high-quality
                        healthcare services, leveraging his vast expertise to ensure optimal patient outcomes.</p>
                    <!-- <p>
                        <br>
                        <a class="default-btn" href="about-us.php">Read More</a>
                    </p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========About Us Section Ends Here========== -->

<!-- ==========Department Section Start Here========== -->
<section class="department-section padding-tb style-1">
    <div class="container">
        <div class="department-wrapper">

            <div class="section-content">
                <div class="row">
                    <div class="col-12 col-xl-12">

                        <div class="department-bottom wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="one">
                                    <div class="row flex-row-reverse align-items-center">
                                        <div class="col-12 col-lg-6">
                                            <div class="post-thumb">
                                                <img src="assets/images/depart/07.jpg" alt="depart">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="post-content">
                                                <h3>Complete Medical Solutions in One Place & Good Health</h3>
                                                <p>MasterG Mediglobe Multispeciality Hospital is committed to
                                                    improving patient experiences, supporting and developing staff,
                                                    and working with our partners to better connect care and improve
                                                    health outcomes for Delhi, Faridabad and the broader NCR
                                                    community.
                                                </p>
                                                <ul>
                                                    <li>Qualified Doctors</li>
                                                    <li>Feel like Home Services</li>
                                                    <li>24×7 Emergency Services</li>
                                                    <li>Outdoor Checkup</li>
                                                    <li>General Medical</li>
                                                    <li>Easy and Affordable Billing</li>
                                                </ul>
                                                <a href="book-appointment.php" class="lab-btn"><span>Appointment
                                                        Now <i class="icofont-rounded-double-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Department Section Ends Here========== -->


<!-- ==========Counter Section Start Here========== -->
<div class="counter-section style-1 padding-60">
    <div class="container">
        <div class="section-wrapper">
            <div class="counter-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="counter-item-inner">
                    <div class="counter-thumb">
                        <img src="assets/images/counter/01.png" alt="counter">
                    </div>
                    <div class="counter-content">
                        <h3 class="number"><span class="counter">150</span></h3>
                        <p class="post-content">Patients Every Day</p>
                    </div>
                </div>
            </div>
            <div class="counter-item wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="counter-item-inner">
                    <div class="counter-thumb">
                        <img src="assets/images/counter/02.png" alt="counter">
                    </div>
                    <div class="counter-content">
                        <h3 class="number"><span class="counter">50</span></h3>
                        <p class="post-content">Qualified Doctors</p>
                    </div>
                </div>
            </div>
            <div class="counter-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="counter-item-inner">
                    <div class="counter-thumb">
                        <img src="assets/images/counter/03.png" alt="counter">
                    </div>
                    <div class="counter-content">
                        <h3 class="number"><span class="counter">12</span></h3>
                        <p class="post-content">Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="counter-item wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="counter-item-inner">
                    <div class="counter-thumb">
                        <img src="assets/images/counter/04.png" alt="counter">
                    </div>
                    <div class="counter-content">
                        <h3 class="number"><span class="counter">350</span></h3>
                        <p class="post-content">Diagnosis Verity</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Counter Section Ends Here========== -->


<!-- ==========Service Section Start Here========== -->
<section class="department-section style-2 padding-tb bg-color">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2><span>We Are The</span></h2>
            <h2>Best Our Departments Center</h2>
        </div>
        <div class="section-wrapper">
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                <div class="lab-item-inner">
                    <h4>Plastic Surgery</h4>
                    <img src="assets/images/depart/icon/02a.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="lab-item-inner">
                    <h4>Dental Care</h4>
                    <img src="assets/images/depart/icon/01a.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="lab-item-inner">
                    <h4>Urology</h4>
                    <img src="assets/images/depart/icon/10.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="lab-item-inner">
                    <h4>Gastroenterology</h4>
                    <img src="assets/images/depart/icon/11.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                <div class="lab-item-inner">
                    <h4>Hysterectomy</h4>
                    <img src="assets/images/depart/icon/12.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="lab-item-inner">
                    <h4>Deliveries</h4>
                    <img src="assets/images/depart/icon/13.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                <div class="lab-item-inner">
                    <h4>Inertility</h4>
                    <img src="assets/images/depart/icon/14.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
                <div class="lab-item-inner">
                    <h4>MTP/D&C
                    </h4>
                    <img src="assets/images/depart/icon/15.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".9s">
                <div class="lab-item-inner">
                    <h4>Orthopedics</h4>
                    <img src="assets/images/depart/icon/16.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="lab-item wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
                <div class="lab-item-inner">
                    <h4>Eye Care</h4>
                    <img src="assets/images/depart/icon/17.png" alt="">
                    <a href="#">Read More <i class="icofont-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Service Section Ends Here========== -->


<!-- ==========Doctor Section Start Here========== -->
<!-- <section class="doctor-section style-1 padding-tb">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2><span>Meet Our</span></h2>
            <h2> Professional Doctors</h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="doctor-item style-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <div class="doctor-inner">
                            <div class="doctor-thumb">
                                <img src="assets/images/team/01.jpg" alt="doctor">
                            </div>
                            <div class="doctor-content">
                                <div class="doctor-name">
                                    <h4><a href="doctor-details.php">Dr. Jason Kovalsky</a></h4>
                                    <p class="digi">Cardiologist</p>
                                </div>
                                <ul class="doctor-contact">
                                    <li><span>Phone :</span> 91- 1234567890</li>
                                    <li><span>Email :</span> admin@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="doctor-item style-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="doctor-inner">
                            <div class="doctor-thumb">
                                <img src="assets/images/team/02.jpg" alt="doctor">
                            </div>
                            <div class="doctor-content">
                                <div class="doctor-name">
                                    <h4><a href="doctor-details.php">Patricia Mcneel</a></h4>
                                    <p class="digi">Pediatrist</p>
                                </div>
                                <ul class="doctor-contact">
                                    <li><span>Phone :</span> 91- 1234567890</li>
                                    <li><span>Email :</span> admin@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="doctor-item style-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="doctor-inner">
                            <div class="doctor-thumb">
                                <img src="assets/images/team/01.jpg" alt="doctor">
                            </div>
                            <div class="doctor-content">
                                <div class="doctor-name">
                                    <h4><a href="doctor-details.php">William Khanna</a></h4>
                                    <p class="digi">Throat Specialist</p>
                                </div>
                                <ul class="doctor-contact">
                                    <li><span>Phone :</span> 91- 1234567890</li>
                                    <li><span>Email :</span> admin@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                    <div class="doctor-item style-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="doctor-inner">
                            <div class="doctor-thumb">
                                <img src="assets/images/team/02.jpg" alt="doctor">
                            </div>
                            <div class="doctor-content">
                                <div class="doctor-name">
                                    <h4><a href="doctor-details.php">Eric Patterson</a></h4>
                                    <p class="digi">Therapy</p>
                                </div>
                                <ul class="doctor-contact">
                                    <li><span>Phone :</span> 91- 1234567890</li>
                                    <li><span>Email :</span> admin@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="doctor-btn text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
            <a href="doctors.php" class="lab-btn"><span> view all doctors <i
                        class="icofont-rounded-double-right"></i></span></a>
        </div>
    </div>
</section> -->
<!-- ==========Doctor Section Ends Here========== -->


<!-- ==========Appointment Section Start Here========== -->
<section class="testimonial-section style-1 padding-tb">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2><span>Our Testimonials</span></h2>
            <h2>Over 1,000+ People Patients Trust Us</h2>
        </div>
        <div class="section-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <div class="testi-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-item-inner">
                                <div class="testi-thumb">
                                    <div class="testi-img">
                                        <img src="assets/images/testimonial/1.png" alt="testimonial">
                                    </div>
                                    <div class="testi-info">
                                        <h5>Robot Smith</h5>
                                        <p>Founder of CEO</p>
                                        <ul class="rating">
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>Caborve levera athern andn that quare
                                        Bwdhn throu covan theme vauesr coor
                                        Dinatie caborve evera atherin and them
                                        Qualt bwdth thron covaen theme value
                                        Coor dinate caborve aneveraer athetern
                                        Bwdh throun covae theme anyin vauer
                                        Throuin covaent theme</p>
                                    <img src="assets/images/testimonial/content/01.png" alt="content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-item-inner">
                                <div class="testi-thumb">
                                    <div class="testi-img">
                                        <img src="assets/images/testimonial/2.png" alt="testimonial">
                                    </div>
                                    <div class="testi-info">
                                        <h5>Zinat Zaara</h5>
                                        <p>Founder of CEO</p>
                                        <ul class="rating">
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>Caborve levera athern andn that quare
                                        Bwdhn throu covan theme vauesr coor
                                        Dinatie caborve evera atherin and them
                                        Qualt bwdth thron covaen theme value
                                        Coor dinate caborve aneveraer athetern
                                        Bwdh throun covae theme anyin vauer
                                        Throuin covaent theme</p>
                                    <img src="assets/images/testimonial/content/01.png" alt="content">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-item-inner">
                                <div class="testi-thumb">
                                    <div class="testi-img">
                                        <img src="assets/images/testimonial/3.png" alt="testimonial">
                                    </div>
                                    <div class="testi-info">
                                        <h5>Jhon Show</h5>
                                        <p>Founder of CEO</p>
                                        <ul class="rating">
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                            <li><i class="icofont-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>Caborve levera athern andn that quare
                                        Bwdhn throu covan theme vauesr coor
                                        Dinatie caborve evera atherin and them
                                        Qualt bwdth thron covaen theme value
                                        Coor dinate caborve aneveraer athetern
                                        Bwdh throun covae theme anyin vauer
                                        Throuin covaent theme</p>
                                    <img src="assets/images/testimonial/content/01.png" alt="content">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testi-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Appointment Section Ends Here========== -->


<!-- ==========Blog Section Start Here========== -->
<section class="blog-section padding-tb bg-color">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
            <h2><span>News Feed</span></h2>
            <h2>Be The First To New Stories</h2>
        </div>

        <!-- <div class="section-wrapper">
            <div class="row justify-content-center pb-4">
                <div class="col-12 col-md-6 pb-4">
                    <div class="post-item video-post">
                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/s-U5GcMeAbo"></iframe>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 pb-4">
                    <div class="post-item video-post">
                        <div class="post-item-inner">
                            <div class="post-thumb">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/s-U5GcMeAbo"></iframe>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

            </div>
        </div> -->

        <div class="section-wrapper">
            <div class="row justify-content-center">

                <div class="col-12 col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="post-item-inner">
                        <div class="post-thumb">
                            <a href="assets/images/blog/1.jpg" data-rel="lightcase:myCollection"><img
                                    src="assets/images/blog/1.jpg" alt="blog post images"></a>
                        </div>
                        <div class="post-content">
                            <span class="meta">By <a href="#">Admin</a> March 24, 2023</span>
                            <h4><a href="#">Globa Empoer Extenve Chanels Extensve Creat Method</a></h4>
                            <p>Complete actuaze centi centrcing colora and sharin without anstaled anding bases
                                aweme medicalplus Template.</p>
                        </div>
                        <div class="blog-footer">
                            <a href="#" class="viewall">Read More <i class="icofont-double-right"></i></a>
                            <a href="#" class="blog-comment"><i class="icofont-comment"></i> 30</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="post-item-inner">
                        <div class="post-thumb">
                            <a href="assets/images/blog/2.jpg" data-rel="lightcase:myCollection"><img
                                    src="assets/images/blog/2.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <span class="meta">By <a href="#">Admin</a> March 24, 2023</span>
                            <h4><a href="#">Globa Empoer Extenve Chanels Extensve Creat Method</a></h4>
                            <p>Complete actuaze centi centrcing colora and sharin without anstaled anding bases
                                aweme medicalplus Template.</p>
                        </div>
                        <div class="blog-footer">
                            <a href="#" class="viewall">Read More <i class="icofont-double-right"></i></a>
                            <a href="#" class="blog-comment"><i class="icofont-comment"></i> 30</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="post-item-inner">
                        <div class="post-thumb">
                            <a href="assets/images/blog/3.jpg" data-rel="lightcase:myCollection"><img
                                    src="assets/images/blog/3.jpg" alt="blog"></a>
                        </div>
                        <div class="post-content">
                            <span class="meta">By <a href="#">Admin</a> March 24, 2023</span>
                            <h4><a href="#">Globa Empoer Extenve Chanels Extensve Creat Method</a></h4>
                            <p>Complete actuaze centi centrcing colora and sharin without anstaled anding bases
                                aweme medicalplus Template.</p>
                        </div>
                        <div class="blog-footer">
                            <a href="#" class="viewall">Read More <i class="icofont-double-right"></i></a>
                            <a href="#" class="blog-comment"><i class="icofont-comment"></i> 30</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Blog Section Ends Here========== -->


<!-- ==========Sponsor Section Start Here========== -->

<!-- ==========Sponsor Section Ends Here========== -->


<!-- ==========Newsletter Section Ends Here========== -->

<!-- ==========Newsletter Section Ends Here========== -->

<?php include 'common/footer.php'; ?>