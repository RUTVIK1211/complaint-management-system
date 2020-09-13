<?php require_once 'header.php'; ?>
<div class="tm-container">
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main clasdss="tm-col-right tm-contact-main">
                	<!-- Constent -->
                    <section class="tm-content tm-contact">
                        <h3 class="mb-4 tm-content-title">Registeration</h3>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email id" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="enroll_no" class="form-control" placeholder="Enrollment No" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="type" name="sem" class="form-control" placeholder="Semester" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="dept" class="form-control" placeholder="Department" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="type" name="contact" class="form-control" placeholder="Contact No" required="" />
                            </div>
                            <div class="text-right mb-2" >
                                <button type="submit" class="btn btn-big btn-primary">Register Me!!</button>
                            </div>
                            <div class="text-right mb-2">
                                <button type="reset" class="btn btn-big btn-primary">Reset</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </div>
  <?php require_once 'footer.php'; ?>
