<?php


echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "</head>";


$query = "select * from users";
        if($result = $mysqli->query($query)){
            if($result->num_rows > 0){
                echo $result['user_id'];
            }
            else{
                echo "No users found";
            }
        }
        else{
            $mysqli->close();
            printf("Command Failed");
            die("Connection failed: " . $mysqli->connect_error);
        }


$mysqli->close();

echo "</html>";

?>