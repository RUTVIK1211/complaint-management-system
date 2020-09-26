<?php require_once 'header.php'; ?>
            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Profile</h2>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Information Technology"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="managed_by_id" class="form-control" placeholder="1234"  />
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" name="managed_by" class="form-control" placeholder="banshita"  />
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Update</button>
                                &nbsp;
                                <button type="button" class="btn btn-big btn-primary" onclick="document.location.href='changepassword.php'">Change Password</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
<?php require_once 'footer.php'; ?>