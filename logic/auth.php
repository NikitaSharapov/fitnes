<?php
require_once 'db.php';
$login=trim($_POST['login']);
$pwd=trim($_POST['pwd']);
if(!empty($login)&&!empty($pwd)){
    $sql='SELECT login,id,type_id, password,image FROM users WHERE login = ?';
    $params=[$login];
    $stmt=$pdo->prepare($sql);
    $stmt->execute($params);
    $user =$stmt->fetch(PDO::FETCH_OBJ);
    if($user){
        if(password_verify($pwd, $user->password)){
           $_SESSION['user_login']=$user->login;
           $_SESSION['user_id']=$user->id;
           $_SESSION['user_type']=$user->type_id;
           $_SESSION['user_image']=$user->image;
          
            $response = [
                "status" => true
            ];
            echo json_encode($response);
        }
        else{
            $response = [
                "status" => false,
                "message" => 'Не верный логин или пароль'
            ];
        
            echo json_encode($response);
        }

    }
    else{
        $response = [
            "status" => false,
            "message" => 'Не верный логин или пароль'
        ];
    
        echo json_encode($response);
    }
}
else{
    $response = [
        "status" => false,
        "message" => 'Пожалуйста заполните все поля'
    ];

    echo json_encode($response);
}   