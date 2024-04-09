<?php
    function loadAll_status(){
        $sql = "SELECT * FROM status";
        $list = pdo_query($sql);
        return $list;
    }

    

?>