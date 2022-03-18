<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$need = $_POST['need'];
$message = $_POST['message'];

$file = $_POST['file'];

$formcontent=" Nom : $name \n Téléphone : $phone \n Besoin : $need \n Message: $message";
// \n Fichier : $file
$recipient = "coucou@creationdelogo.pro";
$subject = "Formulaire | creationdelogo.pro";
$mailheader = "From : $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erreur");
echo '
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="../img/favicon.ico">
        <title>creationdelogo.pro | Service professionnel de création de logo</title>
        <meta name="description" content="Profitez de 13 années d\'expérience en matière de création de logo avec creation-de-logo.pro, le site pour la conception de logo personnalisé, à Vichy dans l\'Allier ! #créationdelogo">
    </head>
    <body>
        <div class="cursor"></div>
        <header class="header">
            <div class="logo">
                <a href="../../index.html">
                  <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 348.98 36.56">
                    <title>creationdelogo.pro</title>
                    <g id="logo">
                      <g>
                        <path d="M48.44,80.75a9.85,9.85,0,0,1-7.35-3.08,10.17,10.17,0,0,1-3-7.34A10.31,10.31,0,0,1,48.44,60a9.77,9.77,0,0,1,5.74,1.79,10.15,10.15,0,0,1,3.69,4.67l-3,.72a7.28,7.28,0,0,0-2.55-3.08,6.64,6.64,0,0,0-3.84-1.17,6.89,6.89,0,0,0-5.15,2.18,7.65,7.65,0,0,0,0,10.55,6.94,6.94,0,0,0,5.15,2.16,6.64,6.64,0,0,0,3.84-1.16,7.05,7.05,0,0,0,2.55-3.06l3,.73A10.15,10.15,0,0,1,54.18,79,9.77,9.77,0,0,1,48.44,80.75Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M61.4,80.44V60.3h3.23v4a6.49,6.49,0,0,1,3.1-3.38,8.31,8.31,0,0,1,5.15-.64v3.42a6.42,6.42,0,0,0-5.84,1,6.73,6.73,0,0,0-2.41,5.65V80.44Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M84.47,80.75a9.89,9.89,0,0,1-7.34-3.06,10.49,10.49,0,0,1,0-14.71,10,10,0,0,1,7.32-3,9.73,9.73,0,0,1,6.7,2.57,10.12,10.12,0,0,1,3.4,6.36,7,7,0,0,1,0,2.62H77.36a6.63,6.63,0,0,0,2.28,4.56,7.09,7.09,0,0,0,4.83,1.75A7.91,7.91,0,0,0,88.11,77a7.71,7.71,0,0,0,2.78-2.36l2.92.68a9.34,9.34,0,0,1-3.81,4A10.92,10.92,0,0,1,84.47,80.75ZM77.36,69H91.42a6.91,6.91,0,0,0-2.3-4.36,6.78,6.78,0,0,0-4.69-1.76,7,7,0,0,0-4.77,1.76A6.68,6.68,0,0,0,77.36,69Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M106.92,80.75a9.56,9.56,0,0,1-7.16-3.06,10.67,10.67,0,0,1,0-14.71,9.63,9.63,0,0,1,7.16-3,8.73,8.73,0,0,1,4.32,1.1A8.53,8.53,0,0,1,114.33,64V60.3h3.23V80.44h-3.23V76.76a8.37,8.37,0,0,1-3.09,2.9A8.83,8.83,0,0,1,106.92,80.75Zm.27-3a7,7,0,0,0,5.19-2.18,7.52,7.52,0,0,0,0-10.51,7.27,7.27,0,0,0-10.4,0,7.62,7.62,0,0,0,0,10.55A7,7,0,0,0,107.19,77.78Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M134.25,80.33q-4.56,1.17-7.19-.42c-1.74-1.06-2.62-3-2.62-5.74l0-11.06H120.3V60.3h4.18V54.83h3.19V60.3h6.54v2.81h-6.54l0,11c0,1.63.55,2.71,1.64,3.25s2.75.49,5-.17Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M141.33,56.46a2.19,2.19,0,0,1-1.61.65,2.21,2.21,0,0,1-1.62-.65,2.14,2.14,0,0,1-.66-1.59,2.25,2.25,0,0,1,2.28-2.28A2.27,2.27,0,0,1,142,54.87,2.11,2.11,0,0,1,141.33,56.46Zm-3.28,24V60.3h3.23V80.44Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M162.84,77.69a10.25,10.25,0,0,1-14.61,0,10.49,10.49,0,0,1,0-14.69,10.27,10.27,0,0,1,14.61,0,10.42,10.42,0,0,1,0,14.67Zm-7.31,0a6.94,6.94,0,0,0,5.18-2.16,7.55,7.55,0,0,0,0-10.49,7.21,7.21,0,0,0-10.31,0,7.6,7.6,0,0,0,0,10.51A6.93,6.93,0,0,0,155.53,77.74Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M169.05,80.44V60.3h3.23v3.46A8.14,8.14,0,0,1,175.1,61,8,8,0,0,1,179.24,60a8.63,8.63,0,0,1,6,2.26,7.73,7.73,0,0,1,2.51,6v12.2h-3.23V69.23a6.13,6.13,0,0,0-1.69-4.63A5.77,5.77,0,0,0,178.67,63a5.84,5.84,0,0,0-4.58,2,7.47,7.47,0,0,0-1.81,5.14v10.3Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M201.09,80.78a9.57,9.57,0,0,1-7.15-3.07,10.64,10.64,0,0,1,0-14.71,9.61,9.61,0,0,1,7.17-3,8.7,8.7,0,0,1,7.45,4V53.84h3.23v26.6h-3.23V76.76a8.9,8.9,0,0,1-3.14,2.92A8.56,8.56,0,0,1,201.09,80.78Zm.26-3a7,7,0,0,0,5.21-2.2,7.47,7.47,0,0,0,0-10.51,7.28,7.28,0,0,0-10.39,0,7.61,7.61,0,0,0,0,10.54A6.9,6.9,0,0,0,201.35,77.82Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M225.79,80.75a9.89,9.89,0,0,1-7.34-3.06,10.49,10.49,0,0,1,0-14.71,10,10,0,0,1,7.32-3,9.73,9.73,0,0,1,6.7,2.57,10.18,10.18,0,0,1,3.41,6.36,7,7,0,0,1,0,2.62H218.68A6.63,6.63,0,0,0,221,76.07a7.09,7.09,0,0,0,4.83,1.75,8,8,0,0,0,3.65-.87,7.67,7.67,0,0,0,2.77-2.36l2.93.68a9.43,9.43,0,0,1-3.82,4A10.92,10.92,0,0,1,225.79,80.75ZM218.68,69h14.06a6.91,6.91,0,0,0-2.3-4.36,6.78,6.78,0,0,0-4.69-1.76A7,7,0,0,0,221,64.61,6.68,6.68,0,0,0,218.68,69Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M239.54,80.44V53.84h4.37v26.6Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M257.71,80.75a9.89,9.89,0,0,1-7.32-3.08,10.42,10.42,0,0,1,0-14.67A10.35,10.35,0,0,1,268,70.33a10,10,0,0,1-3,7.36A9.91,9.91,0,0,1,257.71,80.75Zm-4.45-5.91a6.19,6.19,0,0,0,8.89,0,6.46,6.46,0,0,0,0-9,6.19,6.19,0,0,0-8.89,0,6.49,6.49,0,0,0,0,9Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M281.38,89.14a10.91,10.91,0,0,1-6.29-1.91,9.06,9.06,0,0,1-3.66-5.65h4.37a4.76,4.76,0,0,0,2.2,2.74,6.74,6.74,0,0,0,3.34.87,5.51,5.51,0,0,0,4.05-1.56A6.38,6.38,0,0,0,287,79V77.33a8,8,0,0,1-6.5,2.85,9.65,9.65,0,0,1-7.19-2.91,10.57,10.57,0,0,1,0-14.48A9.43,9.43,0,0,1,280.51,60a8.08,8.08,0,0,1,6.5,3V60.3h4.37V78.88a9.61,9.61,0,0,1-10,10.26Zm-.49-12.88a6.27,6.27,0,0,0,4.5-1.8,5.88,5.88,0,0,0,1.88-4.39,6,6,0,0,0-1.86-4.41,6.49,6.49,0,0,0-9,0,6,6,0,0,0-1.84,4.43,5.87,5.87,0,0,0,1.86,4.41A6.19,6.19,0,0,0,280.89,76.26Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M305.05,80.75a9.87,9.87,0,0,1-7.31-3.08,10.42,10.42,0,0,1,0-14.67,10.3,10.3,0,0,1,14.63,0,10.39,10.39,0,0,1,0,14.67A9.93,9.93,0,0,1,305.05,80.75Zm-4.44-5.91a6.19,6.19,0,0,0,8.89,0,6.49,6.49,0,0,0,0-9,6.19,6.19,0,0,0-8.89,0,6.46,6.46,0,0,0,0,9Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M329.75,88.42V60.3H333v3.61A8.77,8.77,0,0,1,340.43,60,9.59,9.59,0,0,1,347.57,63a10.13,10.13,0,0,1,3,7.31,10.23,10.23,0,0,1-2.94,7.38,9.63,9.63,0,0,1-7.16,3,8.8,8.8,0,0,1-4.32-1.09,8.65,8.65,0,0,1-3.13-2.9V88.42Zm10.41-10.6a6.94,6.94,0,0,0,5.17-2.19,7.61,7.61,0,0,0,0-10.54,7,7,0,0,0-5.19-2.17A7.07,7.07,0,0,0,335,65.11a7.18,7.18,0,0,0-2.16,5.22,7.31,7.31,0,0,0,2.14,5.29A7,7,0,0,0,340.16,77.82Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M353.76,80.44V60.3H357v4a6.53,6.53,0,0,1,3.1-3.38,8.32,8.32,0,0,1,5.15-.64v3.42a6.4,6.4,0,0,0-5.83,1A6.73,6.73,0,0,0,357,70.3V80.44Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                        <path d="M384.07,77.69a10.25,10.25,0,0,1-14.61,0,10.49,10.49,0,0,1,0-14.69,10.27,10.27,0,0,1,14.61,0,10.42,10.42,0,0,1,0,14.67Zm-7.32,0a7,7,0,0,0,5.19-2.16,7.55,7.55,0,0,0,0-10.49,7.22,7.22,0,0,0-10.32,0,7.62,7.62,0,0,0,0,10.51A7,7,0,0,0,376.75,77.74Z" transform="translate(-38.11 -52.59)" style="fill: #fff"/>
                      </g>
                      <path d="M322.61,73.66a3.29,3.29,0,0,1-3.28-3.28,3.27,3.27,0,0,1,.94-2.37,3.12,3.12,0,0,1,2.34-1,3.3,3.3,0,0,1,3.33,3.33,3.12,3.12,0,0,1-1,2.34A3.24,3.24,0,0,1,322.61,73.66Z" transform="translate(-38.11 -52.59)" style="fill: #d6006d"/>
                    </g>
                  </svg>
                </a>
            </div>
        </header>

        <section class="contact-form">
          <h2>Contact<span class="magenta">.</span></h2>
            <p>Votre message a bien été envoyé</p>
        </section>

        <section class="contact-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2765.301898075532!2d3.42778241587516!3d46.124815897139705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f6cd0883777f75%3A0x500d75466a89fb4b!2sKarte%20Blanche!5e0!3m2!1sfr!2sfr!4v1641980389729!5m2!1sfr!2sfr" width="100%" height="500" style="border:0; -webkit-filter: grayscale(100%);
          filter: grayscale(100%);" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section>
          <div class="more">
            <p class="more-infos">Nous proposons également tous les services qu\'une <a href="https://karteblanche.fr" target="_blank">agence de communication</a> peut proposer : stratégie de communication, impression & signalétique (toutes quantités et tous supports), goodies publicitaires, sites internet (vitrine, e-commerce...) et solutions digitales...</p>
          </div>
            <div class="contact-infos">
            <div class="contact-infos-div">
              <div class="div">
                <img src="../img/mail.svg">
                <p>Email</p>
                <a href="mailto:contact@karteblanche.fr">contact@karteblanche.fr</a>
              </div>
              <div class="div">
                <img src="../img/navigation.svg">
                <p>Adresse</p>
                <a href="https://goo.gl/maps/MdYfHxrvmYgN735b6" target="_blank">84 avenue des Célestins<br>03200 Vichy</a>
              </div>
              <div class="div">
                <img src="../img/phone-talking.svg">
                <p>Téléphone</p>
                <a href="tel:0658171976">06 58 17 19 76</a>
              </div>
            </div>
          </div>
        </section>

      <footer>
        <div class="legal-infos">
            <a href="mentions-legales.html">Mentions légales</a>
        </div>
        <div class="made">
          <p>Made with <span class="magenta">❤</span> by </p>
            <a href="https://www.karteblanche.fr" target="_blank">
                <img src="../img/karte_blanche.svg" alt="Karte Blanche">
            </a>
        </div>
    </footer>

        <script src="../script/factories/logo.js" defer></script>
        <script src="../script/pages/logo.js" defer></script>
        <script src="https://kit.fontawesome.com/48c9fff134.js" crossorigin="anonymous" defer></script>

    </body>
</html>
';

?>