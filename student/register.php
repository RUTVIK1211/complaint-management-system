<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaint System- Registeration</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> 
    <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> 
    <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />

</head>
<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-umbrella-beach fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h2 class="tm-sitename text-uppercase">Complaint System</h2>
                            <p class="tm-slogon">We are here for you.</p>
                        </div>        
                    </div>
                </div>
            </div>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> 
                    <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h3 class="mb-4 tm-content-title">Registeration</h3>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Full Name"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email id"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="password" class="form-control" placeholder="Password"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="enroll_no" class="form-control" placeholder="Enrollment No"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="type" name="sem" class="form-control" placeholder="Semester" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="dept" class="form-control" placeholder="Department"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="tel" name="contact" class="form-control" placeholder="Contact No" pattern="[0-9]{10}" title="Write correct Phone number of 10 digit" />
                            </div>
                           	<div class="form-group mb-4" align="center">
                                <button type="button" class="btn btn-big btn-primary">Send OTP</button>
                            </div>
                            <div class="form-group mb-4" >
                                <input type="text" name="contact" class="form-control" placeholder="Enter OTP" required="" title="Enter Otp" />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Register Me!!</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="Reset" class="btn btn-big btn-primary">Reset</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
<?php require_once 'footer.php'; ?>