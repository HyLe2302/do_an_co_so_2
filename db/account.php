<?php
    function get_acc_email_password($email, $password){
        global $db;
        $query = 'SELECT * FROM taikhoan WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(":email", $email);
        $statement->bindValue(":password", $password);
        $statement->execute();
        $acc = $statement->fetchAll();
        $statement->closeCursor();
        return $acc;
    }
?>