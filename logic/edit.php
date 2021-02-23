<?php require_once'db.php';
$name =trim($_POST['inpName']);
$surName =trim($_POST['inpSurname']);
$pat =trim($_POST['inpPatronymic']);
$birthDate=trim($_POST['inpBirthDate']);
$telNumb=trim($_POST['inpNumber']);
$email=trim($_POST['inpEmail']);
$id = $_SESSION['user_id'];
$img = $_SESSION['user_image'];
$path = 'uploads/' . time() . $_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
    $path = $img;
}
    $sql='UPDATE users SET email =:email,firstname=:firstname, lastname=:lastname, patronymic=:patronymic,birthday=:birthday,phone=:phone, image=:image WHERE :id =users.id';
    $params=['email' => $email, 'firstname'=>$name,'lastname' => $surName,'patronymic' => $pat,'birthday' => $birthDate, 'phone' => $telNumb,'image'=>$path,':id'=>$id];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    
    $response = [
        "status" => true,
        "message" => "Изменения прошли успешно!",
    ];
    echo json_encode($response);
?>