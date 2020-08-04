<!doctype html>
<html lang="en">
  <head>
    <?php include 'head.php'; ?>
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
                  <div class="catogory-header" data-toggle="collapse" href="#catogory-body" role="button" aria-expanded="false" aria-controls="category-accordion">
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
                <div class="filter">
                  <div class="filter-header" data-toggle="collapse" href="#filter-body" role="button" aria-expanded="false" aria-controls="filter-main">
                    <div class="d-flex">
                      <div class="pt-2">
                        <div class="burger mb-1"></div>
                        <div class="burger mb-1"></div>
                        <div class="burger mb-1"></div>
                      </div>
                      <div>
                        <p class="catogory-p pl-2">Filter</p>
                      </div>
                    </div>
                    <hr class="m-0 mb-3">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="d-flex bd-highlight mb-3">
                <div class="mr-auto p-2 bd-highlight">Flex item</div>
                <div class="p-2 bd-highlight">Flex item</div>
                <div class="p-2 bd-highlight">Flex item</div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include 'scripts.php' ?>
  </body>
</html>