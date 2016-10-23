<?php include 'header.php';?>
<?php include 'connectDB.php'; ?>

<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title">Service</h1>
                        <p>Anything we can help you? </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>

</script>
<section id="portfolio">
    <div class="container">
        <div class="row">
            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Popular Request</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".drink">Drinks</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".snack">Snack</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".amenities">Amenities</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".emergency">Emergency</a></li>

            </ul><!--/#portfolio-filter-->

            <div class="portfolio-items">
                
                <?php 
                        
                    
                        $query_service = 'SELECT * FROM hackaton.service;';
                        $result_service = $mysqli->query($query_service);
                        
                        
                        while($row_service = $result_service->fetch_array(MYSQLI_ASSOC)) {
                            
                            
                            echo '<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item '.$row_service['type'].'">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="images/portfolio/'.$row_service['pic'].'" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="modal" data-target="#myM" data-id="'.$row_service['service_id'].'" id="service_alert">
                                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                        </button></li>

                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>';
                        }
                        
                    ?>
            </div>
            
            <div class="portfolio-pagination">
                <ul class="pagination">
                    <li><a href="#">left</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">right</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myM"  role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    Your request will be settled with a few minutes.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="btn_close">Close</button>
                    <button type="button" class="btn btn-primary" id="btn_ok">OKay</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            
            var sid;
            
            $("#btn_close").click(function() {
                location.reload();
            });
            
            $(document).on("click","#service_alert", function () {
                var b = $(this).data('id');
                sid = b;

            });
            
            $("#btn_ok").click(function() {
                
                $.ajax({
                    type: "POST",
                    url: 'service_123.php',
                    data: {submit: "Submit", id: sid},
                    dataType:'text',
                    success: function(data){
                        if (jQuery.trim(data) === "SUCCESS") {
                            console.log("success");
                            location.reload();
                        }                                 
                    }
                });
            })
                
            })
            
    </script>

</body>
</html>