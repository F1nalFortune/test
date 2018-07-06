<?php $host = "localhost";
$username = "root";
$password = "";
$dbname = "logointerndb";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Successfully connected";
}

function addProduct() {
	"insert into logointern.products values";
}


//get data from form
$ID = $_POST["ID"];
$SKU = $_POST["SKU"];
$Prod = $_POST["Prod"];
$addProduct_SKU = $_POST["addProduct_SKU"];
$addProduct_desc = $_POST["addProduct_desc"];
$addProduct_color = $_POST["addProduct_color"];
$addProduct_size = $_POST["addProduct_size"];
$addProduct_qty = $_POST["addProduct_qty"];
$addProduct_reorder = $_POST["addProduct_reorder"];
$addProduct_price = $_POST["addProduct_price"];
$addProduct_active = $_POST["addProduct_active"];

//run query && send data to database


//insert into and update values

//if ( $conn->query($sql) === TRUE) {
//	echo "<br/> Inserted successfully<br/>";
//} else {
//	echo "<br/> Error inserting data " . $conn->error;
//}

//local-mysql/phpmyadmin
//developer + password

$sql = "SELECT * FROM products WHERE id =". $ID;
$result = $conn->query($sql);

echo "Result {$result}";

$sql = "SELECT * FROM logointerndb.products";
$result = $conn->query($sql);

echo "<br/>Total products: $result->num_rows <br/>";



//display the records
if ($result->num_rows > 0) {
	echo "<ol type='1'>";
	while($row = $result->fetch_assoc()){
		echo "<li>(EDIT)(X)ID: ". $row["ID"]. "-----". "SKU: ". $row["sku"]. "-----". "Prod:". $row["product_desc"]. "</li>";

	}
	echo "</ol>";
	echo "<a href='/internDB/productMaintenance.php'>Back</a>";
} else {
	echo "0 results";
	echo "<a href='/internDB/productMaintenance.php'>Back</a>";
}

$conn->Close();
?>
