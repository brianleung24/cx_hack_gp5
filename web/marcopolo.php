<?php include 'header.php'; ?>
<?php include'../connectDB.php';?>
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Marco Polo</h1>
                           
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

                <?php
                echo $_SESSION['isMarco'];
                if($_SESSION['isMarco']==1){?>
                <p><h2>You have 200,000 miles. 100,000 miles more to the next stage.</h2></p>
                <?php }else{?>
                <p><h2>Not a member yet? Join now!</h2></p>
                <?php }?>
            </div>
            <div class="row">

                <?php

                $query_marco = 'select * from hackaton.marco;';
                $result_marco = $conn->query($query_marco);

                while($row_marco = $result_marco->fetch_array(MYSQLI_ASSOC)) {


                ?>
                <div class="portfolio-items">
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded logos">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="<?=$row_marco['pic']?>" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="modal" id="marco_alert" data-id="<?=$row_marco['marco_id']?>" data-target="#myM">
                                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                            </button></li>
                                    </ul>
                                </div>
                            </div>
                            <h3><?=$row_marco['marco_name']?></h3>
                        </div>
                    </div>
                    <?php }?>

                    
                </div>
                
            </div>
        </div>
        <div class="modal fade" id="myM"  role="dialog" aria-labelledby="myModalLabel" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              
              <div class="modal-body">
                label
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_submit" value="Submit">Submit</button>
                
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
<script>
    $(document).ready(function() {
        var submit_id ;
        $("#btn_close").click(function() {
            location.reload();
        })

        $(document).on("click","#marco_alert", function () {

            submit_id = $(this).data('id');


            $.ajax({
                type: "POST",
                url: 'marco_submit.php',
                data: {submit: "select_detail", id: submit_id},
                dataType:'text',
                success: function(data){
                    $("#marcodetail").append(data);

                }
            });
        })

        $("#btn_submit").click(function() {
            var oid =  submit_id;
            console.log(oid);
            $.ajax({
                type: "POST",
                url: 'marco_submit.php',
                data: {submit: "Submit", oid: oid, user_id:"<?=$_SESSION['user_id']?>"},
                dataType:'text',
                success: function(data){
                    if (jQuery.trim(data) === "SUCCESS") {
                        //alert("The food is ordered.");
                        location.reload();
                    }
                }
            });

        });



    });
</script>
</body>
</html>
