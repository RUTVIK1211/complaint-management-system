<?php require_once 'header.php'; ?>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h3 class="mb-4 tm-content-title">Change Password</h3>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="password" name="name" class="form-control" placeholder="Old Password"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="email" class="form-control" placeholder="New Password"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" name="enroll_no" class="form-control" placeholder="Confirm Password"  />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Update Password</button>
                                &nbsp;
                                <button type="reset" class="btn btn-big btn-primary" >Reset</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
<?php require_once 'footer.php'; ?>