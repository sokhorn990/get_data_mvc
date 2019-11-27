<?php

function m_view()
{
    $query = "SELECT * FROM  student";
    include "connection.php";
    $result = mysqli_query($connection, $query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0){
        foreach($result as $record){
            $rows[]=$record;
        }
    }
    return $rows;
}
function m_add_data($data) {
    include "connection.php";
    $fullname = $_POST['name'];
    $class = $_POST['class'];
    $mark = $_POST['mark'];
    $sex = $_POST['sex'];
    $filename = $_FILES['profile']['name'];
    $fileLocation = $_FILES['profile']['tmp_name'];
    move_uploaded_file($fileLocation, "test/img/".$filename);
    $query = "INSERT INTO student(name,class,mark,sex,profile)
              VALUES('$fullname', '$class', '$mark', '$sex', '$filename')";
    $result = mysqli_query($connection, $query);
    return $result;
}
function  m_detail(){
    $id = $_GET['id'];
    $query = "SELECT * FROM  student WHERE id = $id";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    return $result;
}
function m_delete(){
    include "connection.php";
    $id = $_GET['id'];
    $query = "DELETE FROM student WHERE id = $id";
    $result = mysqli_query($connection,$query);
    return $result;
}

function  m_edit($data){
    include "connection.php";
    $id= $_GET['id'];
    $fullname = $_POST['name'];
    $class = $_POST['class'];
    $mark = $_POST['mark'];
    $sex = $_POST['sex'];
    $update = mysqli_query($connection, "UPDATE student SET name = '$fullname',class = '$class', mark = '$mark',sex = '$sex' WHERE id = '$id' ");
    return $update;
}

// function m_edit($data){
//     include_once "connection.php";
//     $id= $_GET['id'];
//     $query = "UPDATE student SET";
//     foreach($data as $field =>$value){
//         $query .= "$field='$value',";
//     }
//     $query = substr($query,0,-1);
//     $query .= "WHERE id = '$id'";
//     $result = mysqli_query($connection,$query);
//     return $result;
// }
?>
