<?php
    echo "<h1 style='color:green; text-decoration:underline overline; text-align:center;font-size:50px; background-color:yellow;'> This is PHP Adding MY Site </h1>
    
    <body style='background-color:lightblue;'>";

    // echo "<h2>Here's 1 to 10 SUM</h2>";
    // $c=0;
    // $t=0;
    // while($c<=10){
    //     $t=$t+$c;
    //     $c=$c+1;
    //     echo "-> Adding ".$c.' to '.$t.'<br>';}
    // echo 'Total is : '.$t;

    $con = new mysqli ('localhost','root','');
    if($con->connect_error){
	echo "error";}
    else{
	echo "<br><br><h2>Successfully Connected Database</h2>";}

    $con = new mysqli ('localhost','root','','read_book');

    // $sql1="create database Read_Book;";
    // $con->query($sql1);

    // $sql2= "create table Customers(
    // Cus_id char(5) primary key,
    // First_nm varchar(20),
    // Last_nm varchar(20),
    // DOB date,
    // School varchar(50),
    // Email varchar(50));";
    // $con->query($sql2);
    
    // $sql3="create table Books(
    // ISBN char(5) primary key,
    // Book_title varchar(50),
    // Book_desc varchar(50));";
    // $con->query($sql3);
    
    // $sql4="create table Assign_Book(
    // ISBN char(5),
    // Cus_id varchar(15),
    // Duration varchar(20),
    // primary key (ISBN,Cus_id),
    // foreign key (ISBN) references Books(ISBN),
    // foreign key (Cus_id) references Customers(Cus_id));";
    // $con->query($sql4);

    // $sql6="alter table customers add column (Gender varchar(6), Skill varchar(20), Password char(8));";
    // $con->query($sql6);

    // $sql7="create table Cus_fields (Cus_id varchar(15) primary key , Field_1 varchar(15) , Field_2 varchar(15) , Field_3 varchar(15), Field_4 varchar(15), Field_5 varchar(15), Field_6 varchar(15), Field_7 varchar(15), Field_8 varchar(15));";
    // $con->query($sql7);


    $id=$_POST['id'];
    $Fname=$_POST['fn'];
    $Lname=$_POST['ln'];
    $dob=$_POST['date'];
    $school=$_POST['school'];
    $mail=$_POST['email'];
    $gender = $_POST['gender'];
    $skill = $_POST['skill'];
    $password = $_POST['pass']; 


$field_1 = $field_2 = $field_3 = $field_4 = $field_5 = $field_6 = $field_7 = $field_8 = "";

if (!empty($_POST['subject'])) {
    $i = 1;
    foreach ($_POST['subject'] as $field) {
        if ($i <= 8) {
            ${"field_" . $i} = $field;
            $i++;
        }
    }
    }

    $sql8="insert into cus_fields(Cus_id,Field_1,Field_2,Field_3,Field_4,Field_5,Field_6,Field_7,Field_8)
    values ('$id','$field_1','$field_2','$field_3','$field_4','$field_5','$field_6','$field_7','$field_8');";
    $con->query($sql8);

    $sql5="insert into customers (Cus_id,First_nm,Last_nm,DOB,School,Email,Gender,Skill,Password) values
    ('$id','$Fname','$Lname','$dob','$school','$mail','$gender','$skill','$password');";
    $con->query($sql5);

    $con->close();

    echo "<h2 style='font-size:30px; font-color:green; text-decoration:underline overline;'>Your Data Saved Thank You!...</h2><br>";

    echo "<a href='home.html'>Go To Home</a>";
?>