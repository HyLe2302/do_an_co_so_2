<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/contact.css">
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src = "js/scripts.js"></script>
</head>
<body>
    <!-- HEADER -->
    <!-- Navabar -->
    <nav class="navbar sticky">
        <div class="inner-width">
            <a href="index.php" class="logo"></a>
            <button class="menu-toggler">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navbar-menu">
                <a href="index.php">Trang chủ</a>
                <a href="news.php">Tin tức</a>
                <a href="about.php">Giới thiệu</a>
                <a href="contact.php">Liên hệ</a>
                <?php if (isset($_COOKIE['username'])): ?>
                    <a href="profile.php"><?php echo $_COOKIE['username'];?></a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!--Home  -->
    <section id="home">
        <div class="inner-width">
            <div class="content">
                <h1>Hi </h1>
                <div class="sm">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
                <div class="button">
                    <?php if (isset($_COOKIE['username'])): ?>
                        <a href="logout_process.php">Đăng xuất</a>
                    <?php else: ?>
                        <a href="login.php">Đăng nhập</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<!-- BODY -->

    <section class = "contact">
        <div class="contact_content">
            <h2>Liên hệ chúng tôi</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non cupiditate quibusdam earum.</p>
        </div>
        <div class="contact_container">
            <div class="contactInfor">
                <div class="contact_box">
                    <div class="contact_icon"><i class="fa-solid fa-map-location-dot"></i></div>    
                    <div class="contact_text">
                        <h3>Địa chỉ</h3>
                        <p>Lorem ipsum <br>dolor sit <br>amet.</p>
                    </div>
                </div>
                
                <div class="contact_box">
                    <div class="contact_icon"><i class="fa-solid fa-phone"></i></div>    
                    <div class="contact_text">
                        <h3>Số điện thoại</h3>
                        <p>1223344.</p>
                    </div>
                </div>
                
                <div class="contact_box">
                    <div class="contact_icon"><i class="fa-solid fa-envelope"></i></div>    
                    <div class="contact_text">
                        <h3>Email</h3>
                        <p>Lorem ipsum .</p>
                    </div>
                </div>
                
            </div>
            <div class="contactForm">
                <form action="">
                    <h2>Gửi tin nhắn</h2>
                    <div class="inputBox">
                        <input type="text" name="" id="required">
                        <span>Tên</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="" id="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea required = "required"></textarea>
                        <span>Nội dung</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our service</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">affilliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>