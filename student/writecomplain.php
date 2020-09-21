<?php require_once 'header.php'; ?>
        <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main"> 
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Write My Complain</h2>
                        <p class="mb-85">Don't worry your identity is hidden</p>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Subject" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="message" class="form-control" placeholder="Write your complain here ..." required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-big btn-primary">Send It</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="Reset" class="btn btn-big btn-primary">Reset</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
   
<?php require_once 'footer.php'; ?>
