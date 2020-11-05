<!DOCTYPE html>
<?php
$android = stripos($_SERVER['HTTP_USER_AGENT'], "android");
$iphone = stripos($_SERVER['HTTP_USER_AGENT'], "iphone");
$ipad = stripos($_SERVER['HTTP_USER_AGENT'], "ipad");

$whatsappNumber = '00351926608440';
$whatsappLink = '';
if($android !== false || $ipad !== false || $iphone !== false) {//For mobile
    $whatsappLink = '<a target="_blank" href="https://api.whatsapp.com/send?phone='.$whatsappNumber.'">'."<i class='fa fa-whatsapp'></i> +351 926 608 440.</a>";
} else {//For desktop
    $whatsappLink = '<a target="_blank"  href="https://web.whatsapp.com/send?phone='.$whatsappNumber.'">'."<i class='fa fa-whatsapp'></i> +351 926 608 440.</a>";
}
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="software services">
  <meta name="og:title" property="og:title" content="soluctions and software">
  <meta name="author" content="marcelo.teixeira">
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="https://xepanunty.com/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="xepanunty, maia, porto, portugal, desenvolvimento para o estado, engenharia, base de dados, software maia, factory, energy, porto, php, ract, node-js, node, desenvolvimento web, web, xepanunty.com, xepannunty,HTML, CSS, JavaScript">
  <title>xepanunty software services</title>
  <!-- Favicons -->
  <link href="assets/img/xepanunty.png" rel="icon">
  <link href="assets/img/xepanunty-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
         <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#team">Equipa</a></li>
          <li><a href="#contact">Contacto</a></li>
          <li class="get-started"><?php echo $whatsappLink ?></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
          <h1>Soluções e Ideias Criativas<h1>
          <h2>Nós somos uma equipa de Engenheiros informáticos prontos para ajudar!</h2>
          <a href="#about" class="btn-get-started scrollto">Ver mais</a>
        </div>
        <!--imagem primeira secçaõ-->
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
        </div>
        <!-- End imagem primeira secçaõ-->
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <!-- imagem segunda secçao -->

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

<!-- End imagem segunda secçaõ-->

          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Estamos prontos para ajudar!</h3>
            <p data-aos="fade-up" data-aos-delay="100">

              Você tem em mente algum projeto que pretende executar? Fale connosco! Temos uma equipe preparada para se dedicar a realizar o projeto dos seus sonhos!</p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Desenvolvimento por medida</h4>
                <p>Qualquer necessidade, estamos prontos a desenvolver</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Estudos previos e orcamentacao</h4>
                <p>Equipa especializada em lhe forneceder a melhor solucao</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Check out the great services we offer</p>
        </div>

        <center><div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Design Gráfico</a></h4>
              <p class="description">Logotipos, vectores, animacoes, imagem grafica da sua empresa</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Web Design</a></h4>
              <p class="description">Site da sua empresa ou marca.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Software especifico</a></h4>
              <p class="description">Qualquer necessidade que queira ver concretizada</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Redes Sociais</a></h4>
              <p class="description">Equipa especializada em redes sociais.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Equipa</h2>
          <p>A nossa equipa pronta a ajudar</p>
        </div>
          <center>
        <div class="row">
          <center>
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>André Marcelo</h4>
                  <span>Chief Executive Officer</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/andremarcelo"><i class="icofont-linkedin"></i></a>
                </div>
        </center>
              </div>
            </div>
          </div>
        </center>



      </div>
    </section><!-- End Team Section -->



    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Q.F.Q.</h2>
          <p>Questões Frequentemente Questionadas</p>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" class="" href="#faq1">Porque existimos? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                  A xepanunty foi criada em 2019 com o proposito :
                  Desenvolvimento informático, venda de material informático. Reconstrução de material informático. Importação e Exportação de material informático. Vendas online. Sites online com marcas registadas. Fabricação de roupa, comercialização de produtos de vestuário. Venda de roupa online. Desenvolvimento de software e hardware. Elaboração de sites online e web. Programação informática.

              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq2" class="collapsed">Contractos flexiveis? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                  Podemos criar um pacote de solucoes completo com base nas necessidades da sua empresa.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq3" class="collapsed">Projectos internacionais e freelancer? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                  Sempre disponiveis...
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq4" class="collapsed">Os orcamentos sao gratis? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                  Sim, com base na situacao actualmente vivida, enviamos e um relatorio especifico com bases nos requisitos que nos especifica.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq5" class="collapsed">Temos alojamento web e venda de Dominios? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                  Sim, alojamento possuimos nos nossos servidores proprios, dominios temos os nossos parceiros.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="600">
            <a data-toggle="collapse" href="#faq6" class="collapsed">Solucao de alta escala? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                  Tem um SYS-ADMIN internacional com experencia dedicada, para criar um sistema de email para a sua empresa entre outros.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->




    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contactos</h2>
          <p>
           Entre em contacto para orcamentos e perguntas em particular.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>ONDE ESTAMOS:</h4>
                <p>Rua Nossa Senhora da Maia, n.º 77, 1.º Andar, Esc. 23, 4470-255 - Maia</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>xepanunty@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>TELEMOVEL:</h4>
                <p>+351 926 608 440</p>
              </div>

                <!--<iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:Ei1SLiBkZSBOb3NzYSBTcmEuIGRhIE1haWEsIDQ0NzAgTWFpYSwgUG9ydHVnYWwiLiosChQKEgkJE-8AUWYkDREl58AxjFrw9hIUChIJ4zGTOfhmJA0RfmcqcLKlVKk&key=AIzaSyAvHh0XrF0po4RzJWYciWeNzMCIy2Imr6s" allowfullscreen></iframe>-->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">O seu Nome</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="O nome tem de ter mais de 4 caracters" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">O seu email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Por favor introduza um email valido" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Assunto</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Por favor o subject tem de ter pelo menos 8 letras" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Mensagem</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Escreva algo para nos."></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">A carregar</div>
                <div class="error-message"></div>
                <div class="sent-message">A sua mensagem foi enviada com sucesso.Muito Obrigado em breve sera contactado por um dos nossos profissionais!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!--<div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Subscreve o nosso Newsletter</h4>
            <h5>Subscreve para te manteres informado das novas novidades!</h5>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscrever">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
            <h3>Xepanunty</h3>
            <p>
              Rua Nossa Senhora da Maia <br>
              n.º 77, 1.º Andar, Esc.23<br>
              Maia - 4470-255<br>
              Portugal <br><br>
              <strong>Phone:</strong> 926608440<br>
              <strong>Email:</strong> xepanunty@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Links Úteis</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Sobre Nós</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Equipa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contactos</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Os nossos Serviços</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Design para Web</li>
              <li><i class="bx bx-chevron-right"></i>Desenvolvimento Web</li>
              <li><i class="bx bx-chevron-right"></i>Gestão de produtos</li>
              <li><i class="bx bx-chevron-right"></i>Marketing</li>
              <li><i class="bx bx-chevron-right"></i>Design Gráfico</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
            <h4>As nossas Redes Sociais</h4>
            <p>Segue-nos nas Redes Sociais para te manteres atualizado!</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/xepanunty" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="http://instagram.com/xepanunty" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/in/andremarcelo" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Xepanunty</span></strong>. All Rights Reserved
      </div>

      <div class="credits">
        Designed by <a href="https://xepanunty.com/">Xepanunty</a>
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>