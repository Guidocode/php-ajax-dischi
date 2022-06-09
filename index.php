<!-- 
  **Prima Milestone:**
  Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
  al caricamento della pagina ci saranno tutti i dischi.
  In questa milestone non ci sarà nessuna chiamata axios il file php stamperà direttamente il “database”
  Questo file lo chiamate index.php. Il “database” dei dischi è meglio che sia un file esterno che viene incluso
-->

<?php

  require_once __DIR__ . '/php/db.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/style.css">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- CDN VueJs -->
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>

  <title>Php dischi</title>
</head>
<body>


  <div class="wrapper d-flex flex-column">
    <div class="global-content">
      
      <!-- CONTENT TOP -->
      <div class="gb-content-top d-flex justify-content-between align-items-center px-3">

        <div class="logo">
          <i class="fa-brands fa-spotify"></i>
        </div>


        <div class="select d-flex">

          <p>Select 1</p>
          <p>Select 2</p>

        </div>
      
      </div>
      
      <!-- /CONTENT TOP -->


      <div class="gb-container p-5">


        <div class="container-fluid">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 d-flex">


          <?php foreach( $db['response'] as $disc ): ?>
            <div class="col mb-4">
              <div class="gb-card text-center p-2">
                <div class="cover-image">
                  <img class="w-100" src="<?php echo $disc['poster'] ?>" alt="<?php echo $disc['title'] ?>">
                  <!-- Layover e animazione -->
                  <div class="layover">
                    <div class="play-hover d-flex justify-content-center align-items-center h-100">
                      <i class="fa-regular fa-circle-play"></i>
                    </div>
                  </div>
                  <!-- /Layover e animazione -->
                </div>
                <div class="title-song mt-3"> <?php echo $disc['title'] ?> </div>
                <div class="author-song"> <?php echo $disc['author'] ?> </div>
                <div class="date-song"> <?php echo $disc['year'] ?> </div>
              </div>
            </div>  
          <?php endforeach; ?>
          

          </div>
        </div>


      </div>


    </div>
  </div>
  
  
  <script src="./js/script.js"></script>
</body>
</html>