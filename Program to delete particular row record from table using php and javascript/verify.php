<!-- created by @akjeyaramaji for retriving data from table and show it as HTML table -->

<?php

$username="root";
$hostname="localhost";
$password="root";
$dbname="alumini";
$con=mysqli_connect($hostname,$username,$password,$dbname);

echo "<center><h3>STUDENTS VERIFICATIONS</h3><hr><br></center>";
// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// getting data from the database
function ex(){
	echo "successfully";
}
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM alumni_register ";
$result = $conn->query($sql);
// create html table for  display html tables for sql data
if ($result->num_rows > 0) {
	$output = '<table class="table" border="5" id="alumniTable" >
	<tr>
	<th>username</th>  
	<th>gender</th>
	<th>regno</th>
	<th>college</th>
	<th>dept</th>
	<th>work</th>
		<th>email</th>
			<th>phone</th>
			<th>Allow</th>
			<th>Deny</th>
	';
	while($row = $result->fetch_assoc()) {
		$output .= '
		<tr id="tabrow"> <td>'.$row["username"].'</td>
		<td>'.$row["gender"].'</td>
		<td>'.$row["regno"].'</td>
		<td>'.$row["college"].'</td>
		<td>'.$row["dept"].'</td>
		<td>'.$row["work"].'</td>
		<td>'.$row["mail"].'</td> 
		<td>'.$row["phone"].'</td>
	    <td>
			<input type="button" id="d"  value="verify" onclick="myfunction()">
			
	</td>
	<td>
	<input type="button" id="deny" value="notverify" onclick="deleteRecord(this)">
	</td>
		</tr>';
		}	
		$output .= '</table>';
		echo $output;
} 
else {
    echo "0 results";

  }
		?>
		<!--to print success try -->
		<script>
		function myfunction(){
			alert("Success");
		}
		function deleteRecord(row){

		var i = row.parentNode.parentNode.rowIndex;
 
 		var x=document.getElementById("alumniTable").rows[i].cells.item(2).innerHTML;


			 window.location.href = "delete.php?regno=" +x;

	}
		
		</script>
		
