<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- Portfolio Section End -->


        <!-- php alert box start -->

        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Success!</strong> your name'.$name' email'.$email' subject'$subject' and message'$message' has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">$times;</span>
                </button>
                </div>';
            }

        ?>

        <!-- php alert box end -->


        <!-- Contact Section Start -->
        <section id="Contact" class="contact-section sec-padding">
            <div class="container">
                <div class="row ">
                    <div class="section-title ">
                        <h2>contact me</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="contact-form ">
                        <form action="contact.php" method="post">
                            <div class="row ">
                                <div class="input-group ">
                                    <input name="name" type="text " placeholder="Name " class="input-control " required>
                                </div>
                                <div class="input-group ">
                                    <input name="email" type="text " placeholder="Email " class="input-control " required>
                                </div>
                                <div class="input-group ">
                                    <input name="subject" type="text " placeholder="Subject " class="input-control " required>
                                </div>
                                <div class="input-group ">
                                    <textarea name="message" placeholder="Message " class="input-control " required></textarea>
                                </div>
                                <div class="submit-btn ">
                                    <button type="submit " class="cta ">
                                        <span>Send Message</span>
                                        <svg viewBox=" 0 0 13 10 " height="10px " width="15px ">
                                          <path d="M1,5 L11,5 "></path>
                                          <polyline points="8 1 12 5 8 9 "></polyline>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="contact-info ">
                        <div class="contact-info-item ">
                            <h3>Email</h3>
                            <p>prashantc592114@gmail.com</p>
                        </div>
                        <div class="contact-info-item ">
                            <h3>Phone</h3>
                            <p>+91 798 466 9885</p>
                        </div>
                        <div class="contact-info-item">
                            <div class="social-links">
                                <h3>Follow me</h3>
                                <ul>
                                    <div class="items">
                                        <li><img src="facebook-brands.svg" alt="sl"></li>
                                        <li><img src="twitter-brands.svg" alt="sl"></li>
                                        <li><img src="instagram-brands.svg" alt="sl"></li>
                                        <li><img src="github-brands.svg" alt="sl"></li>
                                        <li><img src="linkedin-brands.svg" alt="sl"></li>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->
</body>
</html>