<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap/dist/css/bootstrap.min.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nova+Square&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php include 'header.php' ?>
    <main>
      <div class="container">
        <hr>
        <div class="d-flex">
          <a href="index.php">HOME</a>
          <p class="pl-2 pr-2">/</p>
          <a href="#">FESTIVE</a>
        </div>
        <div class="woman-main-body mt-3">
          <div class="row">
            <div class="col-md-3">
              <div>
                <div class="catogory">
                  <div class="catogory-header" data-toggle="collapse" href="#catogory-body" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <div class="d-flex">
                      <div class="pt-2">
                        <div class="burger mb-1"></div>
                        <div class="burger mb-1"></div>
                        <div class="burger mb-1"></div>
                      </div>
                      <div>
                        <p class="catogory-p pl-2">Category</p>
                      </div>
                    </div>
                    <hr class="m-0 mb-3">
                  </div>
                  <div class="category-accordion">
                    <div id="accordion">
                      <div class="catogory-one mb-2">
                        <a href="#" data-toggle="collapse" data-target="#categoryOne" aria-expanded="true" aria-controls="categoryOne">
                          Woman
                        </a>
                        <div id="categoryOne" class="collapse show" data-parent="#accordion">
                          <div>
                            <ul class="list-unstyled pl-4">
                              <li><a href="#">Sarees</a></li>
                              <li><a href="#">Dresses & Gowns</a></li>
                              <li><a href="#">Anarkali & Suits</a></li>
                              <li><a href="#">Kurtas & Suit sets</a></li>
                              <li><a href="#">Lehengas</a></li>
                              <li><a href="#">Tops</a></li>
                              <li><a href="#">Bottom</a></li>
                            </ul>
                          </div>
                        </div> 
                      </div>                    
                      <div class="catogory-two mb-2">
                        <a href="#" data-toggle="collapse" data-target="#categoryTwo" aria-expanded="false" aria-controls="categoryTwo">
                          New Look
                        </a>
                        <div id="categoryTwo" class="collapse" data-parent="#accordion">
                          <div>
                            <ul class="list-unstyled pl-4">
                              <li><a href="#">Anarkali & Suits</a></li>
                              <li><a href="#">Kurtas & Suit sets</a></li>
                              <li><a href="#">Lehengas</a></li>
                              <li><a href="#">Tops</a></li>
                              <li><a href="#">Sarees</a></li>
                              <li><a href="#">Dresses & Gown</a></li>
                            </ul>
                          </div>
                        </div> 
                      </div>  
                      <div class="catogory-three mb-2">
                        <a href="#" data-toggle="collapse" data-target="#categoryThree" aria-expanded="false" aria-controls="categoryThree">
                          Festive
                        </a>
                        <div id="categoryThree" class="collapse" data-parent="#accordion">
                          <div>
                            <ul class="list-unstyled pl-4">
                              <li><a href="#">Anarkali & Suits</a></li>
                              <li><a href="#">Kurtas & Suit sets</a></li>
                              <li><a href="#">Lehengas</a></li>
                              <li><a href="#">Tops</a></li>
                              <li><a href="#">Sarees</a></li>
                              <li><a href="#">Dresses & Gown</a></li>
                            </ul>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>