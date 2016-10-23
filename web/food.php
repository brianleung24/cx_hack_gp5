<?php include 'header.php';?>
<?php include 'connectDB.php';?>
<?php //include '../food.php'; ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Meal</h1>
                            <p>select your meal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                
                <div class="portfolio-items">


                    
                    <?php 
                        
                        $query_food = 'select * from hackaton.food;';
                        $result_food = $mysqli->query($query_food);
                        

                        while($row_food = $result_food->fetch_array(MYSQLI_ASSOC)) {
                                                    echo '<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded folio">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb" id="food">
                                                <img src="images/portfolio/'.$row_food['pic'].'" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view" id="food">
                                                <ul class="nav nav-pills">
                                                    <li><button type="button" class="btn btn-default" id="food_alert" aria-label="Left Align"  data-toggle="modal" data-target="#myM" data-id="'.$row_food['food_id'].'">
                                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                        </button></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="portfolio-info ">
                                            <h2></h2>
                                        </div>

                                    </div>
                                </div>';
                        }
                    ?>
                    
                </div>
                
            </div>
        </div>
        
        <div class="modal fade" id="myM"  role="dialog" aria-labelledby="myModalLabel" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body" id="fooddetail">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="btn_close">Close</button>
                <button type="button" class="btn btn-primary" id="btn_submit" value="Submit">Submit</button>
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
            var submit_id ;
            $("#btn_close").click(function() {
                location.reload();
            })
            
            $(document).on("click","#food_alert", function () {
                var my = $(this).data('id');
                submit_id = my;

                
                $.ajax({
                    type: "POST",
                    url: 'food_123.php',
                    data: {submit: "select_detail", id: my},
                    dataType:'text',
                    success: function(data){
                         $("#fooddetail").append(data); 
                    }
                });
            })
            
            $("#btn_submit").click(function() {
                var oid =  submit_id;
                console.log(oid);
                $.ajax({
                    type: "POST",
                    url: 'food_123.php',
                    data: {submit: "Submit", oid: oid, user_id:"<?=$_SESSION['user_id']?>"},
                    dataType:'text',
                    success: function(data){
                        if (jQuery.trim(data) === "SUCCESS") {
                            alert("The food is ordered.");
                        //window.location = window.location.href+"?rnd="+Math.random();
                            location.reload();
                        }                                 
                    }
                });
                
            });
            
            
            
        });
    </script>
</body>
</html>