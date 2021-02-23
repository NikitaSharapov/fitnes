<?php require_once'db.php';
$name =trim($_POST['inpName']);
$surName =trim($_POST['inpSurname']);
$pat =trim($_POST['inpPatronymic']);
$birthDate=trim($_POST['inpBirthDate']);
$telNumb=trim($_POST['inpNumber']);
$email=trim($_POST['inpEmail']);
$check=($_POST['checkInp']);
$login =trim($_POST['inpLogin']);
$pwd=trim($_POST['inpPwd']);
$pwd2=trim($_POST['inpPwd2']);

$sql_check='SELECT EXISTS(SELECT login FROM users where login=:login)';
     $stmt_check=$pdo->prepare($sql_check);
   $stmt_check->execute([':login'=>$login]);
if( $stmt_check->fetchColumn()){
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такой логин уже существует",
        "fields" => ['login']
    ];

    echo json_encode($response);
    die();
}
$sql_check='SELECT EXISTS(SELECT  email FROM users where email=:email)';
     $stmt_check=$pdo->prepare($sql_check);
   $stmt_check->execute([':email'=>$email]);
if( $stmt_check->fetchColumn()){
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Такая почта уже существует",
        "fields" => ['login']
    ];

    echo json_encode($response);
    die();
}

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'inpLogin';
}

if ($pwd === '') {
    $error_fields[] = 'inpPwd';
}

if (strlen($pwd)< 7 ) {
    $error_fields[] = 'inpPwd';
}


if ($pwd2 === '') {
    $error_fields[] = 'inpPwd2';
}
if ($name === '') {
    $error_fields[] = 'inpName';
}
if ($surName === '') {
    $error_fields[] = 'inpSurname';
}
if ($pat === '') {
    $error_fields[] = 'inpPatronymic';
}
if ($birthDate === '') {
    $error_fields[] = 'inpBirthDate';
}
if ($telNumb === '') {
    $error_fields[] = 'inpNumber';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_fields[] = 'inpEmail';
}
if( $_POST['checkInp'] == ''){
    $error_fields[] = 'checkInp';
}
else{
    
}
if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Не все поля заполнены",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}


if ($pwd === $pwd2) {

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $path = 'uploads/user-silhouette.svg';
        // $response = [
        //     "status" => false,
        //     "type" => 2,
        //     "message" => "Ошибка при загрузке аватарки",
        // ];
        // echo json_encode($response);
    }

    $pwd=password_hash($pwd, PASSWORD_DEFAULT);
    $sql='INSERT INTO users(email,login, password,firstname,lastname,patronymic,birthday,phone,image) VALUES(:email,:login, :pwd,:firstname,:lastname,:patronymic,:birthday,:phone,:image)';
    $params=['email' => $email,'login' => $login,':pwd' => $pwd,'firstname' => $name,'lastname' => $surName,'patronymic' => $pat,'birthday' => $birthDate, 'phone' => $telNumb,'image' => $path];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $response = [
        "status" => true,
        "message" => "Регистрация прошла успешно!",
    ];
    echo json_encode($response);


}     
else {
    $response = [
        "status" => false,
        "message" => "Пароли не совпадают",
    ];
    echo json_encode($response);
}

?>