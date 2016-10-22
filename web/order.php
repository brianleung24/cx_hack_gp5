<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/ecmascript" src="js/jqgrid/js/i18n/grid.locale-en.js"></script>
<!-- This is the Javascript file of jqGrid -->
<script type="text/ecmascript" src="js/jqgrid/js/jquery.jqGrid.min.js"></script>
<!-- This is the localization file of the grid controlling messages, labels, etc.
<!-- A link to a jQuery UI ThemeRoller theme, more than 22 built-in and many more custom -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<!-- The link to the CSS that the grid needs -->
<link rel="stylesheet" type="text/css" media="screen" href="js/jqgrid/css/ui.jqgrid-bootstrap.css" />
<body>

<div class="form-group">
    <input class="form-control" type="text" id="flight" value="A12345">
    <select class="form-control" id="type">
        <option value="product">Duty Free</option>
        <option value="food">Meal</option>
        <option value="service">Service</option>
        <option value="marco">Marco Polo</option>
    </select>
    <button id="order">Get Orders</button>

</div>
<div >
    <table id="jqGrid"></table>
    <div id="jqGridPager"></div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
$('#order').click(function(){
    console.log('click');
    var type = $('#type').val();
    var flight = $('#flight').val();
    var url = '/fetch_order.php?type='+type+'&flight='+flight;
    console.log();
        $("#jqGrid").jqGrid({
            url: url,
            mtype: "GET",
            styleUI : 'Bootstrap',
            datatype: "json",
            colModel: [
                { label: 'Product Name', name: 'product_name', key: true },
                { label: 'Quantity', name: 'qty',},
                { label: 'Price', name: 'price',  },
                { label: 'Client Name', name: 'name',  },
                { label:'Seat', name: 'seat', }
            ],
            viewrecords: true,
            height: 250,
            rowNum: 20,
            pager: "#jqGridPager"
        });
});
    });

</script>

</body>
</html>