<?php
$login_form = true;
require_once "lib/autoload.php";

$css = array("login.css");

//redirect naar profiel als de gebruiker al ingelogd is
if ( isset($_SESSION['usr']) ) { $_SESSION["msg"][] = "You are already logged in!"; header("Location: https://wdev.be/wdev_nicole/dag2/profile.php"); exit; }
$css = array("login.css");
BasicHead($css);
//NavBar();

?>
<body>
<nav>
    <div id="logo"><a href="#" title="logo"><img src="../img/logo1.svg" alt="Logo van de site" class="logo"></a></div>
    <div id="links">
<<<<<<< HEAD
        <li><a href="#">Ab</a></li>
        <li><a href="#">Contact</a></li>
=======
        <li><a href="#57">About</a></li>
        <li><a href="#66">Contact</a></li>
>>>>>>> bb7226872121946bd40114b4980b913527122a63
    </div>
</nav>
<?php ShowMessages(); ?>
<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-8">
                <div id="login-box" class="col-md-12">
        <?php
        print LoadTemplate("login");
//        $data = GetData("select * from users");
//        $template = LoadTemplate("login");
//        ReplaceContent( $data, $template);
        ?>

                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
=======
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<section data-brackets-id="57" class="testimonials">
    <h3 data-brackets-id="58" class="title">About Us</h3>
    <p data-brackets-id="60" class="quote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis ipsum nulla eum ab minima sint, quis nemo omnis voluptatum adipisci beatae a amet odit similique, eos at sed dolor! Qui.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias optio nesciunt dolor illo, magni minus amet vero dolorum odit quam. Libero odit, ut unde. Quod fuga dolorum aspernatur iste sunt.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

</section>
<section data-brackets-id="66" class="contact">
    <h3 data-brackets-id="67" class="title">Contact Us</h3>
    <p data-brackets-id="68">If there are any questions you can always contact us at:</p>
    <form data-brackets-id="70">
        <p>email: getfit@gmail.com         <br>     tel: + 32 123 45 67 89 </p>
    </form>
</section>

<footer>
    <p class="copyright">Copyright © 2019 GetfiT.
        <span class="second-line">All Rights Reserved.</span>
    </p>
    <div>
        <ul class="social-media-list">
            <li>
                <a href="https://www.facebook.com/">
                    <ion-icon class="logo-facebook" name="logo-facebook"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/">
                    <ion-icon class="logo-twitter" name="logo-twitter"></ion-icon>
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/">
                    <ion-icon class="logo-instagram" name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>
    </div>
>>>>>>> bb7226872121946bd40114b4980b913527122a63





<?php Footer(); ?>
    </body>
</html>

