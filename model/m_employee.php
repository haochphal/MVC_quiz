<?php
function m_get_data() {
    $query = "select * from employee";
    include "connection.php";
    $result = mysqli_query($connect, $query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0) {
        while ($get_result_to_array = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
            $rows[] = $get_result_to_array;
        }
    }
    return $rows;
}

function m_delete_employee() {
    include 'connection.php';
    $id = $_GET['id'];
    $query = "DELETE FROM employee WHERE id= '$id'";
    $result = mysqli_query($connect, $query);
    return $result;
// if($result) {
//     header("location: index.php");
// }else {
//     echo "cannot delete";
// }
}  

function m_update_employee($data) {
    if(isset($_POST[''])) {
    include 'connection.php';
    $firstname = $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $age = $_POST['age'];
    $salary = $_POST['salary'];
    
    $id = $_GET['id'];
    $query = "UPDATE employee SET firstname ='$firstname',lastname ='$lastname',age=$age,salary=$salary
    WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    var_dump($result); die();
    return $result;
    }    
    // var_dump()
}

function detail_employee() {
    include 'connection.php';
    $id = $_GET['id'];

    $query = "SELECT * FROM employee WHERE id = '$id'"; 
    $result = mysqli_query($connect, $query);
    echo $result;
   //var_dump($result);die();
}

function formValidation() {
    include "connection.php";

if(isset($_POST['but_submit'])){
    $uname = mysqli_real_escape_string($connect,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($connect,$_POST['txt_pwd']);
    if ($uname != "" && $password != ""){
        $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($connect,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php?action=view');
        }else{
            echo "Invalid username and password";
        }
    }
}
}
function registers(){
    include "connection.php";
if(isset($_POST['btn_submit'])){
    $password=$_POST['password'];
    $comfirm =$_POST['comfirm'];
    if ($password != "" && $comfirm != ""){
        $sql_query = "INSERT INTO user(id,username,password)".$password."' and password='".$comfirm."'";
        $result = mysqli_query($connect,$sql_query);
        return $result;
    }
}    
}
?>
