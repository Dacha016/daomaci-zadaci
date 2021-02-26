<?php
require_once "connection.php";
require_once "helloBar.php";
require_once "header.php";
?>
<div class=" wrapper container-fluid register">
<?php

    $id = $_GET['users_id'];
    if(empty($id)){
        $error="User doesn't exist in base";
    }
    else{
        $sql="SELECT * FROM profiles 
            INNER JOIN users 
            ON profiles.users_id=users.id";
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $name=$row['name'];
        $surname=$row['surname'];
        $username=$row['username'];
        $dob=$row['dob'];
        $gender=$row['gender'];
        $bio=$row['bio'];
        if($gender=="M"){
            $color="blue";
        }
        elseif($gender=="Z"){
            $color="pink";
        }
        else{
            $color="grey";
        }
        echo "<h3 id='followers-headline' class='col-12'>Profiles</h3>";
        echo "<table  class='col-12 table table-hover table-dark'>";
            echo"<tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Date of birth</th>
                <th>Gender</th>
                <th>About me</th>
            </tr>";
            echo "<tr>";
                echo "<td style='color:$color'>". $name. "</td>";
                echo "<td style='color:$color'>". $surname. "</td>";
                echo "<td style='color:$color'>". $username. "</td>";
                echo "<td style='color:$color'>". $dob. "</td>";
                echo "<td style='color:$color'>". $gender. "</td>";
                echo "<td style='color:$color'>". $bio. "</td>";
            echo "</tr>";
        echo "</table>";   
    }
?>
<a href="followers.php">Followers</a>

</div>