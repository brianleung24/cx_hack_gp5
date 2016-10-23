<?php include 'header.php';?>
<?php
if(!isset($_SESSION['username'])){?>
    <script>
        window.location.replace("index.php");

    </script>
<?php }?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Menu</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="portfolio">
        <div class="container">
            <div class="row">
                
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <table style="background-color: #006564;">
                                        <tr>
                                            <td><img src="images/mealicon.png" class="img-responsive" alt=""></td>

                                        </tr>
                                    </table>
                                    
                                </div>
                                <div class="portfolio-view">
                                    <a href="food.php"><img src="images/Slice 6.png" class="img-responsive" alt="" style="height: 217px; width:217px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <table style="background-color: #a34035;">
                                        <tr>
                                            <td><img src="images/dficon.png" class="img-responsive" alt=""></td>

                                        </tr>
                                    </table>
                                    
                                </div>
                                <div class="portfolio-view">
                                    <a href="dutyfree.php"><img src="images/Slice 1.png" class="img-responsive" alt="" style="height: 217px; width:217px;"></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <table style="background-color: #a34035;">
                                        <tr>
                                            <td><img src="images/serviceicon.png" class="img-responsive" alt=""></td>

                                        </tr>
                                    </table>
                                    
                                </div>
                                <div class="portfolio-view">
                                    <a href="service.php"><img src="images/Slice 4.png" class="img-responsive" alt="" style="height: 217px; width:217px;"></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item design logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <table style="background-color: #006564;">
                                        <tr>
                                            <td><img src="images/portfolio/4.jpg" class="img-responsive" alt=""></td>

                                        </tr>
                                    </table>
                                    
                                </div>
                                <div class="portfolio-view">
                                    <a href="marcopolo.php"><img src="images/Slice 3.png" class="img-responsive" alt="" style="height: 225px; width:225px;"></a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--/#portfolio-->



<?php include 'footer.php';?>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>    
</body>
</html>
