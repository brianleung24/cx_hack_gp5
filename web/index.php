<?php include 'header.php';?>
    <?php
    if(isset($_SESSION['username'])){?>
<script>
    window.location.replace("menu.php");

    </script>
<?php }?>
   <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Login</h1>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section class="container">        
        <div class="price-table">
            
            <div class="row">
                
                    <div class="single-price price-two">
                        <div class="table-heading">
                            <p class="plan-name">Login</p>
                            <!--<p class="plan-price"><span class="dollar-sign">$</span><span class="price">89</span><span class="month">/ Month</span></p>-->
                        </div>    
                        <form class="form-horizontal" method="POST" action="login.php">
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name = "name" placeholder="Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                <input type="password" name = "password"class="form-control" id="inputPassword3" placeholder="Password">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Sign in</button>
                              </div>
                            </div>
                          </form>
                    </div> 
            </div>
        </div><!--/#price-table-->
    </section>
<?php include 'footer.php';?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>