<?php
    function loadAll_user(){
        $sql = "SELECT * FROM user";
        $listuser = pdo_query($sql);
        return $listuser;
    }

    function register($user_name,$password,$fullname,$phone){
        $sql = "INSERT INTO user(user_name,password,fullname,phone,	role)
                VALUES ('$user_name','$password','$fullname','$phone',0)";
        pdo_execute($sql);
    }
    function check_user($user_name,$password) {
        $sql = "SELECT * FROM user WHERE user_name = '$user_name' AND password = '$password'";
        $user = pdo_query_one($sql);
        return $user;
    }

    function update_user1($user_name,$password,$fullname,$phone,$user_id){
        $sql = "UPDATE user SET user_name = '$user_name', password = '$password', fullname = '$fullname',phone = '$phone',role = '0' WHERE user_id = '$user_id'";
        pdo_execute($sql);
    }
    function update_user2($user_name,$password,$fullname,$phone,$user_id){
        $sql = "UPDATE user SET user_name = '$user_name', password = '$password', fullname = '$fullname',phone = '$phone',role = '1' WHERE user_id = '$user_id'";
        pdo_execute($sql);
    }

    function check_username($user_name){
        $sql = "SELECT * FROM user WHERE user_name = '$user_name'";
        $username = pdo_query_one($sql);
        return $username;
    }
?>