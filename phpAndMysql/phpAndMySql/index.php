<?php 

include("connection.php"); 

$query = "SELECT * FROM account_details";
$result = mysqli_query( $conn, $query);

if(mysqli_num_rows($result) >0){

    while( $row = mysqli_fetch_assoc($result)){
        echo $row["id"] ." ". $row["user_name"] ." ". $row["about"] ."<br>";
    }
} else{
    echo "Sorry no database found.";
}
mysqli_close($conn);
?>