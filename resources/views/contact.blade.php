<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <div class="contactUs">
        <div class="title">
            <h2>Get In Touch</h2>
        </div>
        <div class="box">
            {{-- Form --}}
            <div class="contact form">
                <h3>Send a Message</h3>
                <form action="">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Name</span>
                                <input type="text" placeholder="Alexandra">
                            </div>
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="alex@gmail.com">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Address</span>
                                <input type="text" placeholder="Bogor">
                            </div>
                            <div class="inputBox">
                                <span>Mobile</span>
                                <input type="text" placeholder="+62 835 4671 9205">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="" placeholder="Write your message here..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            {{-- Info Box --}}
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>Bogor, Jawa Barat <br>INDONESIA</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="">loremipsum@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="">+62 859 8634 2345</a>
                    </div>
                    {{-- Social Media --}}
                    <ul class="sci">
                        <li><a href=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href=""><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href=""><ion-icon name="logo-twitter"></ion-icon></ion-icon></a></li>
                        <li><a href=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
            {{-- Map --}}
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.015891056504!2d106.84162231449726!3d-6.644947766806506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1679400260257!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>