<?php
    if (isset($_POST['login'])) {
        require("db/connect.php");
        require("db/account.php");

        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");

        if (!empty($email) && !empty($password)) {
            $acc = get_acc_email_password($email, $password);
            if (!empty($acc)){
                foreach ($acc as $a) {
                    if ($a['vaitro'] == 0) {
                        $_SESSION['username'] = $a['name'];
                        $_SESSION['vaitro'] = $a['vaitro'];
                        setcookie("username", $_SESSION['username'], time() + 3600);
                        setcookie("vaitro", $_SESSION['vaitro'], time() + 3600);
                        echo "<script>alert('Đăng nhập thành công!'); location.href='index.php'; </script>";
                        // header("Location: index.php");
                    }
                }
            }else{
                echo "<script>alert('Đăng nhập thất bại!'); location.href='login.php'; </script>";
            }
        }
    }
?>
