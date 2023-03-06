<nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar scroll</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

                <?php 
                $select_categories = "SELECT*FROM categories" ;
                $query = mysqli_query($conn, $select_categories) ;
                while($row = mysqli_fetch_assoc($query)) {
                    $cat_title = $row["cat_title"] ; // here we'll not gonna use the $ sign w/ cat_title but why ? ANS : due to cat_title is the name of the navbar name file i.e html, css, js, php on navbar
                    echo "<li class = 'nav-items' >   
                    <a class='nav-link' href='#'>{$cat_title} </a> 
                    </li> " ; // see line #9 for understand of nav-items as its used in bootstrap for navbar's links
                }
                ?>

          </div>
        </div>
      </nav>