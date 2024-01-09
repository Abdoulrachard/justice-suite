<?php
require_once "./include/header.php";
require 'vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST['submit'])) {
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['telephone'];
    $message = $_POST['message'];
    
    $destinataire = "contact@cabinet-xaviertermeau.com";
    $subject = "Nouveau message depuis le formulaire de contact";
    
    $messageBody = "Nom: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Téléphone: $tel\n";
    $messageBody .= "Message:\n$message";
    
    // Envoi d'email avec PHPMailer
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->SMTPDebug = 0; 
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls'; 
        $mail->Port = 587; 
        $mail->Host = 'smtp.titan.email';
        $mail->Username = 'contact@cabinet-xaviertermeau.com';
        $mail->Password = 'Rachardgeek_009';
        $mail->setFrom('contact@cabinet-xaviertermeau.com', $name);
        $mail->addAddress($destinataire);
        $mail->Subject = $subject;
        $mail->Body = $messageBody;
        $mail->send();

        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Message envoyé !",
                text: "Votre message a été envoyé avec succès."
            })
        </script>';
    } catch (Exception $e) {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erreur d\'envoi",
                text: "Une erreur s\'est produite lors de l\'envoi du message."
            })
        </script>';
    }
}
?>
    <div id="loading" class="image-preloader" >
        <div class="loader"><img src="./assets/images/log.png" alt="image-preloader"></div>
    </div>
     <div class="containe">
        <div class="containef">
            <div class="  toolbar-info">
                    <div class="justif">
                        <div class="toolbar-contact">
                            <ul>
                                <li><i class="fa-regular fa-envelope"> </i><a href="contact@cabinet-xaviertermeau.com">contact@cabinet-xaviertermeau.com</a></li>
                                <li><i class="fa fa-phone">  </i><a href="tel:+33 757849985">+33 757849985</a></li>
                                <li class="clock"><i class="fa-regular fa-clock">  </i> 8:00 - 18:30 </li>
                            </ul>
                        </div>
                        <div class="toolbar-sl-share">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li class="get-btn "href="#contact"><a  class="btn-lik">Ecrivez-nous</a></li>
                                </ul>
                        </div>
                    </div>
            </div>
        </div>
     </div>
     <header class="header-content">
        <div class="menu-area menu-steaky posit">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="area-logo"><a href="javascript:void(0)" class="dark"><img  src="./assets/images/log.png" alt="Logo"></a></div>
                    </div>
                    <div class="col-lg-9 text-right ">
                        <div class="rs-menu-area">
                            <div class="main-menu ">
                                <div class="humberger ">
                                    <i class="fas fa-bars burgerIcon"></i>
                                </div>
                                <nav class="rs-menu rs-menu-close " style="height: 0;">
                                    <ul class="onpage-menu nav-menu" id="onpage-menu">
                                        <li ><a href="#home" class="action">Accueil</a></li>
                                        <li ><a href="#about" class="action">Cabinet Xavier Termeau ?</a></li>
                                        <li ><a href="#Services" class="action">Services</a></li>
                                        <li ><a href="#contact" class="action">Contactez-Nous</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </header>
     <section class="barner" >
        <div class="nivoSlider">
            <img class="nivo-main-image" style="height: auto; " src="./assets/images/slider/h5-sl2.jpg" alt="Barniere" class="">
        </div>
        <div class="nivo-caption">
            <div class="display-table">
                <div class="display-table-cell">
                       <div class="container  preview">
                        <div class="content-part text-center pt-80">
                            <div class="slider-des">
                                <div class="sl-sub-title">
                                    Avez-vous besoin d'un avocat?
                                </div>
                            </div>
                            <div class="slider-bottom">
                                <ul>
                                    <li><a href="#contact" class="readon reda">CONTACTEZ-NOUS  <i class="fa fas fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
                
        </div>
     </section>
     <section id="about">
        <div class="rs-about pt-107 pb-92 md-pt-97 md-pb-72">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5 md-mb-30 ">
                        <div class="image-part">
                            <img class="md-mt--30 md-mb--30 md-ml--20 md-mr--20" src="/assets/images/about/termeau-noir.jpg" alt="Xavier Termeau image">
                        </div>
                    </div>
                    <div class="col-lg-7 p-6 order-2 ">
                        <div class="sec-title right-line primary mb-40">
                            <div class="sub-title primary">A PROPOS</div>
                            <h2 class="title">CABINET XAVIER TERMEAU</h2>
                            <div class="desc" align="justif">
                                Maître Xavier TERMEAU, avocat inscrit au barreau du Val-de-Marne, vous reçoit sur rendez-vous pour vous conseiller et faire valoir vos droits. Il intervient dans les domaines d'activités du droit commercial, du droit de la famille, du droit immobilier, du droit du travail, entre autres. Pour plus d'informations, n'hésitez pas à contacter le cabinet.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="listing-style">
                                    <li>Droit fiscal</li>
                                    <li>Droit public</li>
                                    <li> Droit rural</li>
                                    <li>Droit commercial</li>
                                    <li>Droit des personnes</li>                                   
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="listing-style">
                                    <li>Droit social</li>
                                    <li>Droit pénal</li>
                                    <li>Droit immobilier</li>
                                    <li>Droit économique</li>
                                    <li>Droit communautaire</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <section id="Services"> 
        <div class="rs-our-practice style4 bg7 bg-fixed pt-113 pb-120 md-pt-72 md-pb-80">
            <div class="container">
                <div class="sec-title top-line text-center mb-49 xs-mb-31">
                    <div class="sub-title primary">SERVICES</div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-heart"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit des personnes</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-law"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit fiscal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-career"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit des sociétés</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-analysis"></i></div>
                            <h3 class="title"><a href="javascript:void(0)"> Droit économique</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-target"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit Public</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-diamond"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit des affaires</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-profits"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit commercial</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="practice-wrap">
                            <div class="icon-part"><i class="flaticon-suitcase"></i></div>
                            <h3 class="title"><a href="javascript:void(0)">Droit Civil</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
     <section id="contact">
        <div class="rs-contact inner modify gray-bg pt-120 pb-120 md-pb-80 md-pt-80">
            <div class="container">
                <div class="row row-rev">
                    <div class="col-lg-4 order-last md-mb-30 padding-0 md-pl-pr-15 order-2 order-md-1">
                        <div class="contact-sidebar">
                            <div class="image-part">
                                <img src="./assets/images/contact/sidebar.jpg" alt="Sidbar image">
                            </div>
                            <div class="content-parts">
                                <h3 class="title">Informations</h3>
                                <div class="address-item ml--5 mb-20">
                                    <div class="address-icon"><i class="icon-basic-smartphone"></i></div>
                                    <h5 class="contact-title">Téléphone</h5>
                                    <div class="address-text">
                                        <a href="https://+33757849985">+33 757849985</a>
                                    </div>
                                </div>
                                <div class="address-item ml--5 mb-20">
                                    <div class="address-icon mr--5"> <i class="icon-basic-mail-multiple "></i></div>
                                    <h5 class="contact-title">E-mail</h5>
                                    <div class="address-text">
                                        <a href="mailto:contact@cabinet-xaviertermeau.com">contact@cabinet-xaviertermeau.com</a>
                                    </div>
                                </div>
                                <div class="address-item ml--5 mb-20">
                                    <div class="address-icon mr--5"> <i class="icon-basic-geolocalize-01"></i></div>
                                    <h5 class="contact-title">Address</h5>
                                    <div class="address-text">
                                        10 Pl. Salvador Allende, 94000 Créteil, France
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 pr-45 md-pr-15 order-1 order-md-2">
                        <div class="contact-wrap">
                            <div class="sec-title mb-40">
                                <h2 class="title mb-0">Nous contacter</h2>
                            </div>
                            <form id="contact-inner" class="contact-inner-page mb-50" method="post" action="">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <input type="text" name="nom" placeholder="Votre Nom" required>
                                    </div>
                                    <div class="col-md-4 ">
                                        <input type="email" name="email" placeholder="Votre Email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="telephone" placeholder="Votre Téléphone" required>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <textarea name="message"  placeholder="Votre Message" required></textarea>
                                        <button type="submit" name="submit" class="readon upper">
                                            
                                            <span role="status">ENVOYEZ MON MESSAGE</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="g-map2">
                                <div class="row">
                                    <div class="col-md-12 g-m ">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.1571396392724!2d2.4506103759955105!3d48.77889020629855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60cac87aa2839%3A0x912156f5431bac90!2s10%20Pl.%20Salvador%20Allende%2C%2094000%20Cr%C3%A9teil%2C%20France!5e0!3m2!1sfr!2sbj!4v1704588706689!5m2!1sfr!2sbj" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <?php 
         require_once './include/footer.php' 
    ?>