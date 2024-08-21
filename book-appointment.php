<?php include 'common/header.php'; ?>

<!-- ==========Page Header Section Start Here========== -->
<section class="page-header-section post-title style-1"
    style="background-image: url(assets/images/pageheader/pageheader.jpg)">
    <div class="page-header-content">
        <div class="container">
            <div class="page-header-content-inner">
                <div class="page-title">
                    <h2>Book An Appointment</h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Book An Appointment</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ==========Contact Section Start Here========== -->
<section class="contact-us padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="contact-info">
                        <h3>24X7 Hours
                            Opening Our Services</h3>
                        <ul>

                            <li>
                                <h6>Phone Number:</h6>
                                <p>+8801678170593, 01919-264687</p>
                                <p>02-9611936</p>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="here-form">

                        <form action="/">
                            <input type="text" id="fname" name=" name" placeholder="Your Name">
                            <input type="text" id="lname" name="email" placeholder="Your Email">
                            <input type="text" id="lname" name="phone number" placeholder="Phone Number">
                            <select id="departments" name="departments">
                                <option value="1">Select Departments</option>
                                <option value="2">Dental</option>
                                <option value="3">U.C</option>
                            </select>
                            <select id="departments" name="doctor">
                                <option value="1">Select Doctor</option>
                                <option value="2">Doctor1</option>
                                <option value="3">Doctor2</option>
                            </select>
                            <input type="date" value="2021-03-05">
                            <button class="lab-btn" type="submit"><span>Appointment Now <i
                                        class="icofont-double-right"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Contact Section Ends Here========== -->


<!-- ==========Map Section Start Here========== -->

<!-- ==========Map Section Ends Here========== -->

<?php include 'common/footer.php'; ?>