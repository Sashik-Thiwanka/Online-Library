<?php
    echo "<h1 style='color:green; text-decoration:underline overline; text-align:center;font-size:50px; background-color:yellow;'> This Is Information PHP Page </h1>";

    echo "<body style='background-color:lightgreen;'>";

    $conn= new mysqli ('localhost','root','','read_book');
    $id=$_POST['ID'];
    $sql6="select * from customers
            where Cus_id = '$id';";
    $result=$conn->query($sql6);
    while ($row=mysqli_fetch_assoc($result)){
        $Cus_id=$row['Cus_id'];
        $First_name=$row['First_nm'];
        $Last_name=$row['Last_nm'];
        $DOB=$row['DOB'];
        $School=$row['School'];
        $Email=$row['Email'];
        $gender=$row['Gender'];
        $skill=$row['Skill'];
        $password=$row['Password'];}


    $sql9="select * from cus_fields
            where Cus_id = '$id';";
    $result=$conn->query($sql9);
//     while ($row=mysqli_fetch_assoc($result)){
//         $Cus_id=$row['Cus_id'];
//         $field1=$row['Field_1'];
//         $field2=$row['Field_2'];
//         $field3=$row['Field_3'];
//         $field4=$row['Field_4'];
//         $field5=$row['Field_5'];
//         $field6=$row['Field_6'];
//         $field7=$row['Field_7'];
//         $field8=$row['Field_8'];
//     }


     echo "<body style='background: linear-gradient(135deg, #667eea, #764ba2, #f7971e);'>
        <h2 style='text-decoration:underline overline; color:Lightblue;
        text-align:center; font-size:50px; color:black;'>As You Entered,</h2>
        <div style='display:flex; margin:10px; font-size:27px;'><div style='padding:10; flex: 1 1 50%; box-sizing: border-box; border: 5px solid #bbff00ff; border-radius: 30px;'><ul type='disc'>
        <li>Customer Id : $Cus_id </li><br>
        <li>First Name : $First_name </li><br>
        <li>Last Name : $Last_name </li><br>
        <li>DOB : $DOB </li><br>
        <li>School : $School </li><br>
        <li>Email : $Email </li></div>
        <div style='padding:10; flex: 1 1 50%; box-sizing: border-box; border: 5px solid #bbff00ff; border-radius: 30px;'>
        <li>Gender : $gender </li><br>
        <li>Skill : $skill </li><br>
        <li>Password : $password </li> <br>
        <li>Favourite Fields : <br>
        <ul type='circle'>";

        if ($row = mysqli_fetch_assoc($result)) {
        for ( $i = 1; $i <= 8; $i++ ) {
                $field = $row["Field_$i"];
                if (!empty($field)) {
                echo "<li>" . htmlspecialchars($field) . "</li>";
                }}

        echo "</ul> </li> </ul> </div> </div>";}

        echo "<h2 style='font-size:30px; font-color:green; text-decoration:underline overline;'>Your Data Found!...</h2>";
?>