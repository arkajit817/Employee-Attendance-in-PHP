<?php
include_once '../Model/LoginModel.php';
$loginModel = new LoginModel();
$ajax = $_POST['id'];
$field1value = isset($_POST['id']) ? $_POST['id'] : '';
//echo $field1value;

// RETURN user AS A JSON TYPE
$user = $loginModel->AjaxCheck($ajax);

$response = array();

//$user.numberOFfRows

if ($user == 0) {
    $response['status'] = false;
//    $response['loginTime'] = $user.logint Time
} else {
    $response['status'] = true;
}

echo json_encode($response);

//if($user==1){
//    echo "if".$user;
//}
//else {
//    echo "else".$user;
//}
//echo gettype($user);

?>




