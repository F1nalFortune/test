<!DOCTYPE html>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "./public/css/styles.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="./public/js/product.js"></script>
</head>
<body>
	<h4>Product Maintenance</h4>
	<form action="maintenance.php" method="post">
		ID: <input type="text" name="ID"><br/>
		SKU: <input type="text" name="SKU"><br/>
		Prod: <input type="text" name="Prod"><br/>
		<input value="search"type="submit"/>
	</form>
		<button id="myBtn">Add New</button>
		<button id="customerOrderBtn">Order/Customer Search</button>

<!-- Add/Edit Product -->
	<div id="myModal" class="modal">
	  <!-- Modal content -->
	  <div class="modal-content">
	    <span class="close">&times;</span>
			<h4> Add/Edit New Product </h4>
			<form action="maintenance.php" method="post">
				SKU: <input type="text" name="addProduct_SKU"><br/>
				Desc: <input type="text" name="addProduct_Desc"><br/>
				Color: <input type="text" name="addProduct_color"><br/>
				Size: <input type="text" name="addProduct_size"><br/>
				Qty on hand: <input type="number" name="addProduct_qty"><br/>
				Reorder level: <input type="number" name="addProduct_reorder"><br/>
				Price: <input type="number" name="addProduct_price"><br/>
				Active: <input type="number" name="addProduct_active"><br/>
				<input type="submit">
				<input id="cancel" type="button" name="cancel" value="cancel">
			</form>
	  </div>
	</div>

<!-- Order/Customer Search -->
	<div id="customerOrder" class="modal">
		<!-- Modal content -->
		<div class="modal-content">
			<h4>Search Customer / Order </h4>
			<span class="close">&times;</span>
			<form action="maintenance.php" method="post">
				ID: <input type="text" name="addProduct_SKU"><br/>
				Last: <input type="text" name="addProduct_Desc"><br/>
				First: <input type="number" name="addProduct_color"><br/>
				Email: <input type="number" name="addProduct_size"><br/>
				Phone: <input type="number" name="addProduct_qty"><br/>
				<input type="submit">
				<input id="cancelSearch" type="button" name="cancel" value="cancel">
			</form>
		</div>
	</div>

	<h4>Customer Maintenance</h4>
	<form action="maintenance.php" method="post">
		Customer ID: <input typ="text" name="ID"><br/>
		Bill to: <input type="text" name="SKU"><br/>
		Addr: <input type="number" name="Prod"><br/>
		<input type="submit"/>
	</form>

	<h4>Order Maintenance</h4>
	<form action="maintenance.php" method="post">
		Order ID: <input typ="text" name="ID"><br/>
		Bill to: <input type="text" name="SKU"><br/>
		Addr: <input type="number" name="Prod"><br/>
		<input type="submit"/>
	</form>
</body>
<script>
	// Get the modal
	//order / customer Modal
	var customerOrder = document.getElementById("customerOrder");
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var customerOrderBtn = document.getElementById("customerOrderBtn")
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];
	var close1 = document.getElementsByClassName("close")[1];

	// Get the cancel element that closes the Modal
	var cancel = document.getElementById("cancel");
	var cancelSearch = document.getElementById("cancelSearch");

	var test = document.getElementsByClassName("cancel");

	// When the user clicks the button, open the modal
	btn.onclick = function() {
			modal.style.display = "block";
	}

	customerOrderBtn.onclick = function(){
		customerOrder.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
			modal.style.display = "none";
	}
	close1.onclick = function() {
		customerOrder.style.display = "none";
	}

	// When the user clicks on <span> (x), close the Modal
	cancel.onclick = function() {
		modal.style.display = "none";
	}

	cancelSearch.onclick = function() {
		customerOrder.style.display = "none";
	}

	test.onclick = function() {
		modal.style.display = "none";
		customerOrder.style.display = "none";

	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
			if (event.target == modal || event.target == customerOrder) {
					modal.style.display = "none";
					customerOrder.style.display = "none";
			}
	}

</script>

</html>
