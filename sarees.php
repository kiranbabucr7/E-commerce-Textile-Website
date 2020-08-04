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
              <div class="row">
                <div class="col-6 col-md-12 catogory">
                  <div class="catogory-header" data-toggle="collapse" data-target="#catogory-body" role="button">
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
                  <div id="catogory-body"  class="collapse show">
                    <div id="accordion">
                      <div class="catogory-one mb-2">
                        <a href="#" data-toggle="collapse" data-target="#categoryOne" aria-expanded="true" aria-controls="categoryOne">
                          Women
                        </a>
                        <div id="categoryOne" class="collapse show" data-parent="#accordion">
                          <div>
                            <ul class="list-unstyled pl-4">
                              <li><a href="sarees.php">Sarees</a></li>
                              <li><a href="dressesAndGowns.php">Dresses & Gowns</a></li>
                              <li><a href="anarkali-suits.php">Anarkali & Suits</a></li>
                              <li><a href="kurtas-suit-sets.php">Kurtas & Suit sets</a></li>
                              <li><a href="lehengas.php">Lehengas</a></li>
                              <li><a href="tops.php">Tops</a></li>
                              <li><a href="bottom.php">Bottom</a></li>
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
                              <li><a href="sarees.php">Sarees</a></li>
                              <li><a href="dressesAndGowns.php">Dresses & Gowns</a></li>
                              <li><a href="anarkali-suits.php">Anarkali & Suits</a></li>
                              <li><a href="kurtas-suit-sets.php">Kurtas & Suit sets</a></li>
                              <li><a href="lehengas.php">Lehengas</a></li>
                              <li><a href="tops.php">Tops</a></li>
                              <li><a href="bottom.php">Bottom</a></li>
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
                            </ul>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-12 filter">
                  <div class="filter-header">
                    <div class="d-flex justify-content-end justify-content-md-start" data-toggle="collapse" data-target="#filter-body" role="button">
                      <div class="pt-2">
                        <div class="burger mb-1"></div>
                        <div class="burger mb-1"></div>
                        <div class="burger mb-1"></div>
                      </div>
                      <div>
                        <p class="catogory-p pl-2">Filter</p>
                      </div>
                    </div>
                    <hr class="m-0 mb-3"/>
                    <div id="filter-body" class="collapse show">
                      <p>Price</p>
                      <form class="multi-range-field m-0 p-0">
                        <input id="multi" class="multi-range" type="range" />
                      </form>
                      <p>Size</p>
                      <div class="filter-sizes">
                        <form>
                          <div class="btn m-1 border-dark">XS</div>
                          <div class="btn m-1 border-dark">S</div>
                          <div class="btn m-1 border-dark">L</div>
                          <div class="btn m-1 border-dark">XL</div>
                          <div class="btn m-1 border-dark">XXL</div>
                          <div class="btn m-1 border-dark">XXXL</div>
                          <div class="btn m-1 border-dark">UNSTICHED</div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="d-sm-block d-md-none">
            </div>
            <div class="col-md-9">
              <div class="d-flex bd-highlight mb-3">
                <div class="mr-auto p-2 bd-highlight">
                  <div class="d-flex">
                    <div>
                      <p class="pt-1">Sort By</p>
                    </div>
                    <div class="pl-3">
                      <form>
                        <select name="cars" id="cars">
                          <option value="low-high">Price: low to high</option>
                          <option value="high-low">price: high to low</option>
                          <option value="a-z">Name : A-Z</option>
                          <option value="z-a">Name : Z-A</option>
                          <option value="all-products">All Products</option>
                        </select>
                      </form>
                    </div>
                  </div>
                </div>
                <div>
                <div class="main-pagination">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                      <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
                </div>
              </div> 
              <?php include 'womenContent.php'?>
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