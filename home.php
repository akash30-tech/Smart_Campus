<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Campus</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <li><img src="IMG_6093.PNG" alt="" class="img1"></li>
                <h2 class="logo">Smart Campus</h2>
            </div>
            <div class="menu">
                <ul>
                    <li class="active"><a href="#"><i class="fa-solid fa-house"></i> HOME</a></li>
                    <li><a href="#about-section"><i class="fa-solid fa-user"></i> ABOUT</a></li>
                    <li><a href="#contact-section"><i class="fa-solid fa-phone"></i> CONTACT</a></li>
                    <li><a href="login.php"><i class="fa-solid fa-sign-in"></i> LOGIN</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
            <h1><span style="font-size: 80px; color: white;">S</span><span style="font-size: 45px; color: white;">mart</span><br><span
                    style="font-size: 75px;"> &nbsp; <span id="element"></span></span></h1>
            <p class="par">"A Smart Campus Management System is a revolutionary approach to managing educational institutions through cutting-edge technologies.
                            By integrating a wide range of campus operations—including administration, academics, and student services into a unified 
                             digital platform, 
                            it aims to significantly enhance efficiency, connectivity, and the overall user experience for students, faculty, and administrators alike.
                            This transformative system not only streamlines processes but also fosters a more connected and dynamic educational environment.
                            With real-time insights and seamless communication, 
                            it supports proactive decision-making and drives continuous improvement across the campus.
                            Embrace the future of education with a system designed to adapt and grow with your institution’s evolving needs."</p>
        </div>
    </div>

    <section id="about-section" class="about">
        <div class="about-content">
            <h2>About Smart Campus</h2>
            <p>Welcome to the Smart Campus Management System, a comprehensive solution designed to streamline and
                optimize campus operations. Our platform aims to provide an integrated approach to managing various
                aspects of campus life, including academic scheduling, student information, attendance tracking, and
                more. By leveraging cutting-edge technology, Smart Campus enhances the experience for students, faculty,
                and administrative staff alike, fostering a more connected and efficient educational environment.</p>
            <p>Our mission is to empower educational institutions to achieve their goals through innovative and
                user-friendly solutions. We believe that a smart campus is a sustainable, efficient, and connected
                campus, where technology plays a key role in delivering quality education and improving the overall
                campus experience.</p>
        </div>
    </section>

    <section id="contact-section" class="contact">
        <div class="contact-content">
            <h2>Contact Us</h2>
            <p>If you have any questions or need further information, please feel free to contact us:</p>
            <p>Email: info@smartcampus.com</p>
            <p>Phone: +123 456 7890</p>
            <p>Address: 123 Smart Campus Street, Education City, Country</p>

            <div class="social-media">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2024 Smart Campus. All Rights Reserved.</p>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 200,
            duration: 1000,
        });
    </script>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#element', {
            strings: ['Campus'],
            typeSpeed: 150,
        });
    </script>
</body>

</html>