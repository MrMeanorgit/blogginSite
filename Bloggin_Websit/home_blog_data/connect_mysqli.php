<?php
    function returnData($posts){
        $host = "localhost";
        $user = "root";
        $passwrod = "root";
        $db = "blogs";
    
    $conn = mysqli_connect($host, $user, $passwrod, $db);
    
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_errno(); 
    }
    
        $query = 'SELECT * FROM `blog_details`';
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) >0){

            while( $row = mysqli_fetch_assoc($result)){
                $array1 = array(
                    "post-image" => $row['image'],
                    "heading" => $row['heading'],
                    "post-content" => $row['content'],
                    "post-tag" => $row['tag'],
                    "post-id" => $row['id']

                );
                //echo $row['image'] ." ". $row['heading'] ." ". $row['tag'] . " ".$row['content']. "<br>";
                array_push($posts, $array1);
            }
        } else{
            echo "Sorry no database found.";
        }

        mysqli_close($conn);
        return $posts;
    }

    function retunrDataOfPerticularId($ID){
        $host = "localhost";
        $user = "root";
        $passwrod = "root";
        $db = "blogs";
    
    $conn = mysqli_connect($host, $user, $passwrod, $db);
    
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_errno(); 
    }
    
        $query = "SELECT * FROM `blog_details` WHERE id='$ID' ";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) >0){

            while( $row = mysqli_fetch_assoc($result)){
                $array1 = array(
                    "post-image" => $row['image'],
                    "heading" => $row['heading'],
                    "post-content" => $row['content'],
                    "post-tag" => $row['tag'],
                    "post-id" => $row['id']

                );
                //echo $row['image'] ." ". $row['heading'] ." ". $row['tag'] . " ".$row['content']. "<br>";
            }
        } else{
            echo "Sorry no database found.";
        }

        mysqli_close($conn);
        return $array1;

    }


?>