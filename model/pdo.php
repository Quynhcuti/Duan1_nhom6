<?php
    function pdo_get_connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=duan1", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Kết nối thành công";
        return $conn;
        } catch(PDOException $e) {
        // echo "Connection failed: " . $e->getMessage();
        }
    }

    // ham them sua xoa
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(),1);
        

        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            
        } catch (PDOException $e) {
            throw $e;
            
        }finally{
            unset($conn);
        }
    }

    //truy van nhieu du lieu
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        } catch (PDOException $e) {
            throw $e;
            
        }finally{
            unset($conn);
        }
    }

    //truy van 1 du lieu
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }

    function pdo_execute_return_lastInsertID($sql){
        $sql_args = array_slice(func_get_args(),1);
        try {
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            return $conn->lastInsertId();
            
        } catch (PDOException $e) {
            throw $e;
            
        }finally{
            unset($conn);
        }    
    }
?>