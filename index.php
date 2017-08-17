<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `id`,`title`, `description`, `price` , `image` FROM `products`";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>

<body>
    <div>
        <table>
            <? while($row = $result->fetch_assoc()){
                echo 
        	        "<tr><td>
        	            <img src='images/" . $row["image"] . "'>
        	        </td>
        	        <td>" .
        	    		$row["title"] . "<br>" . $row["description"] . "<br>" . $row["price"] . "<br>" . "
        	        <td>
        	    		<a href='http://localhost/shop/index.php?id=" . $row["id"] . "'>+</a>
        	    	</td></tr><br>";
        	    	}
 
        	?>	
        </table>	
    </div>

</body>

</html>