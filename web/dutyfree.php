<?php include 'header.php';?>
<?php include 'connectDB.php'; ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Duty Free</h1>
                            <p>.....</p>
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
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".beauty">Beauty</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".jw">Jewellery & Watch</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".electronic">Electronic</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".gift">gift</a></li>
                    
                </ul><!--/#portfolio-filter-->
                    
                <div class="portfolio-items">
                    
                    <?php 
                        
                    
                        $query_product = 'SELECT * FROM hackaton.product;';
                        $result_product = $mysqli->query($query_product);
                        
                        
                        while($row_product = $result_product->fetch_array(MYSQLI_ASSOC)) {
                            
                            
                            echo '<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item '.$row_product['product_type'].'">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="images/'.$row_product['product_description'].'" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li><button type="button" class="btn btn-default" aria-label="Left Align" data-toggle="modal" data-target="#myM" data-id="'.$row_product['product_id'].'" id="product_alert">
                                                        <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                                        </button></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="portfolio-info ">
                                            <table class="table">
                                                <tr>
                                                    <td><h2>'.$row_product['product_name'].'</h2></td>
                                                    <td><h2>'.$row_product['price'].'</h2></td>
                                                </tr>
                                            </table>
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
                   <table class="table">
                        <tr>
                            <td><h2>Quantity: </h2></td>
                            <td><h2><input type="number" name="quantity" min="1" max="10" id="qty" style="width: 50px;"></h2></td>
                        </tr>
                        <tr>
                            <td><h2>Total Cost </h2></td>
                            <td><h2><label id="total_cost"></label></h2></td>
                        </tr>
                    </table>
                  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="btn_close">Close</button>
                <button type="button" class="btn btn-primary" id="btn_sub">Order</button>
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
            var qty_id ;
            var t_c;
            var q;
            $("#btn_close").click(function() {
                location.reload();
            })
            
            $(document).on("click","#product_alert", function () {
                var a = $(this).data('id');
                qty_id = a;

            });
            
            $("#qty").change(function() {
                
                q = $(this).val();
                
                $.ajax({
                    type: "POST",
                    url: 'dutyfree_123.php',
                    data: {submit: "select_product", id: qty_id, quatity: q},
                    dataType:'text',
                    success: function(data){
                         $("#total_cost").text(data);
                         t_c = data;
                        }
                    });
                })
                
            $("#btn_sub").click(function() {
                
                //var q = $(this).val();
                
                $.ajax({
                    type: "POST",
                    url: 'dutyfree_123.php',
                    data: {submit: "Submit", id: qty_id, tc: t_c, qty: q},
                    dataType:'text',
                    success: function(data){
                        if (jQuery.trim(data) === "SUCCESS") {
                            alert("The product is ordered.");
                        //window.location = window.location.href+"?rnd="+Math.random();
                            location.reload();
                        }                                 
                    }
                });
            })
                
            })
            
    </script>
    
</body>
</html>