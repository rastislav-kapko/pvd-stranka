<!DOCTYPE html>
<html lang="sk">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    

    <title>Aplikačná vrstva</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="index.php" class="logo">
                      <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                  <li><a href="index.php">Úvod</a></li>
                          <li><a href="index.php">Kto sme</a></li>
                          <li><a href="index.php">Produkty</a></li>
                          <li><a href="index.php">Recenzie</a></li> 
                          <li><a href="index.php">Zadania</a></li>
                          <li><a href="index.php">Kontakt</a></li> 
                          <li class="has-sub">
                              <a href="javascript:void(0)">Tabuľky</a>
                              <ul class="sub-menu">
                                  <li><a href="tabulka_vyrobky.php">výrobkov</a></li>
                                  <li><a href="tabulka_objednavky.php">objednávok</a></li>
                                  <li><a href="tabulka_dodacie_listy.php">dodacích listov</a></li>
                                  <li><a href="tabulka_prijmov.php">príjmov</a></li>
                                  <li><a href="tabulka_nakladov.php">nákladov</a></li>
                                  <li><a href="tabulka_poctov.php">počtov</a></li>
                        </ul>
                    </li>
                    
                </ul>       
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
                </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

<section>
<img src="tab25.png" alt="Tu bude obrazok grafu rok">
</section>




<section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>Rok</th>
                <th>Množstvo</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Tabuľka počtov podľa rokov</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "SELECT t.rok,SUM(t.mnozstvo) FROM kapko_tf3 t GROUP BY t.rok ORDER BY t.rok";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['rok']; ?></td>
                 <td><?= $row['SUM(t.mnozstvo)']; ?>ks</td>
             </tr>
             <?php
             }
         }
         else
         {
             echo "nie je tu ziadna tabulka";
         }
         
        ?>
        </tbody>
        </table>
<?php
?>

          </div>
        </div>
      </div>
    </div>
  </section>






  



  <section>
<img src="tab26.png" alt="Tu bude obrazok grafu mesiac">
</section>




  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>VÚC</th>
                <th>Množstvo</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Tabuľka počtov podľa vúc</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "SELECT t.id_vuc,SUM(t.mnozstvo) FROM kapko_tf3 t GROUP BY t.id_vuc ORDER BY t.id_vuc";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['id_vuc']; ?></td>
                 <td><?= $row['SUM(t.mnozstvo)']; ?>ks</td>
             </tr>
             <?php
             }
         }
         else
         {
             echo "nie je tu ziadna tabulka";
         }
         
        ?>
        </tbody>
        </table>
<?php
?>

          </div>
        </div>
      </div>
    </div>
  </section>





  <section>
<img src="tab27.png" alt="Tu bude obrazok grafu rok">
</section>




<section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="header-text">

          <table class="table table-bordered" style="background-color: white;" style="text-align: center;">
        <thead class="table-danger" style="text-align: center;">
            <tr>
                <th>VÚC</th>
                <th>2016</th>
                <th>2017</th>
                <th>2018</th>
                <th>2019</th>
                <th>2020</th>
                <th>2021</th>
                <th>2022</th>
            </tr>
        </thead>
        <h2 style="text-align: center;">Tabuľka počtov podľa vúc a rokov</h2>
        <tbody style="text-align: center;">


        
        
        <?php
         include 'config.php';
         $con = mysqli_connect("$localhost","$user","$password","$db");

         $query = "SELECT ifnull(t.id_vuc,'spolu')id_vuc , 
         sum(IF(t.rok=2016,t.mnozstvo,0)) as '2016', 
         sum(IF(t.rok=2017,t.mnozstvo,0)) as '2017' , 
         sum(IF(t.rok=2018,t.mnozstvo,0)) as '2018' , 
         sum(IF(t.rok=2019,t.mnozstvo,0)) as '2019' , 
         sum(IF(t.rok=2020,t.mnozstvo,0)) as '2020' , 
         sum(IF(t.rok=2021,t.mnozstvo,0)) as '2021', 
         sum(IF(t.rok=2022,t.mnozstvo,0)) as '2022', 
         sum(t.mnozstvo) as 'spolu' FROM kapko_tf3 t group by t.id_vuc WITH ROLLUP";

         $query_run = mysqli_query($con, $query);

         if (mysqli_num_rows($query_run) > 0)
         {
             foreach($query_run as $row)
             {
             ?>

             <tr>
                 <td><?= $row['id_vuc']; ?></td>
                 <td><?= $row['2016']; ?>ks</td>
                 <td><?= $row['2017']; ?>ks</td>
                 <td><?= $row['2018']; ?>ks</td>
                 <td><?= $row['2019']; ?>ks</td>
                 <td><?= $row['2020']; ?>ks</td>
                 <td><?= $row['2021']; ?>ks</td>
                 <td><?= $row['2022']; ?>ks</td>
             </tr>
             <?php
             }
         }
         else
         {
             echo "nie je tu ziadna tabulka";
         }
         
        ?>
        </tbody>
        </table>
<?php
?>

          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

</body>
</html>