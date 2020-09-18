<!-- ********************************--------------- header -----------------------******************************* -->

<?php require_once 'header.php'; ?>


    
<section class="forms">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <div class="section-heading">
                      <h2>Forms</h2>
                    </div>
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6">
                          <fieldset>
                          <input name="Department_Name" type="text" class="form-control" id="D_Name" placeholder="Department Name" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                          <input name="Department_Id" type="text" class="form-control" id="D_Id" placeholder="Department Id" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                          <input name="manager_Id" type="text" class="form-control" id="Manager_Id" placeholder="Faculty Id" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                          <input name="manager_Name" type="text" class="form-control" id="Manager_Name" placeholder="Faculty Name" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6">
                          <fieldset>
                          <input name="Password" type="password" class="form-control" id="Password" placeholder="Password" required="">
                          </fieldset>
                        </div>
                        
                        <div class="col-md-12">
                          <button type="submit" id="form-submit" class="button"> Submit</button>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <button type="reset" id="form-reset" class="button"> Reset</button>
                        </div>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            </div>
            </div>
                            <!-- **************************************---------------menu & footer--------------********************** -->

        <?php require_once 'sidebar.php'; ?>

            
          

    
<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


  </body>

</html>
