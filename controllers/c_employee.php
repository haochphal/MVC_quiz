<?php
$data = array();
flexible_function($data);

function flexible_function(&$data) {
    $function = 'register';
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }

    $function($data);
}
function view(&$data) {
    $data['employee_data'] = m_get_data();
    $data['page'] = "employee/view";
}
function add(&$data) {
    $data['page'] = "employee/add";
}

function edit(&$data) {
    $data['employee_data'] = detail_employee();
    $data['page'] = "employee/update";
    // m_update_employee($_POST);
    // if($add_data) {
    //     $action = "view";
    // }else {
    //     $action = "add";
    // }
}
function update(){
    $id = $_GET['id'];
    $data = m_update_employee($_POST);
    if($data) {
        $action = "view";
    }else{
        $action = 'edit&id=$id';
    }
    header("Lucation: index.php?action=$action");
}
// function delete(&$data) {
//     $data['page'] = "employee/delete";
// }
function delete(&$data){
    $data_delete = m_delete_employee();
    $data['page'] = "employee/delete";
    // var_dump($data_delete);
    if($data_delete) {
        $action = "view";
    }else {
        echo "cannot delete this record";
    }
    header("location: index.php?action= $action");
 }
function login(&$data) {
    $data['page'] = "login";
}

function loginValidation(&$data){
    formValidation();
}
function register(&$data){
    $data['page']='register';
}
function registerValidation(&$data){
  $data= registers();
  if($data){
      header('location:index.php?action=view');
  }else{
      header('location:index.php?action=register');
  }

}

?>
