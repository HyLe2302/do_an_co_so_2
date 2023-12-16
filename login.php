<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Đăng nhập</header>

                <form action="login_process.php" method="POST">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Quên mật khẩu?</a>
                    </div>

                    <div class="field button-field">
                        <button name="login">Đăng nhập</button>
                    </div>

                    <div class="form-link">
                        <span>bạn chưa có tài khoản? <a href="#" class ="link signup-link">Đăng kí</a></span>
                    </div>
                </form>
            </div>

            <div class="line"></div>
        </div> 

        <div class="form signup">
            <div class="form-content">
                <header>Đăng kí</header>

                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class = "input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class = "password">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class = "password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Đăng kí</button>
                    </div>

                    <div class="form-link">
                        <span>bạn chưa có tài khoản? <a href="#" class ="link login-link">Đăng nhập</a></span>
                    </div>
                </form>
            </div>

            <div class="line"></div>
        </div>
    </section>

    <script src="js/login.js"></script>
</body>
</html>