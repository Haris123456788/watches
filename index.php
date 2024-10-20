<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>watch | The way of living</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
    <?php  include ("header.php");?>
    
   <?php
include('db.php');

// Fetch carousel items from the database
$carousel_query = "SELECT * FROM carousel";
$carousel_result = $conn->query($carousel_query);
?>

<section class="py-0" id="header">
  <div id="headerCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php
      if ($carousel_result->num_rows > 0):
        $isActive = true; // To mark the first item as active
        while ($row = $carousel_result->fetch_assoc()):
      ?>
      <!-- Dynamic Carousel Item -->
      <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
        <div class="bg-holder" style="background-image:url(assets/img/gallery/<?php echo $row['image']; ?>);background-position:right top;background-size:contain;">
        </div>
        <div class="container">
          <div class="row align-items-center min-vh-75 min-vh-xl-100">
            <div class="col-md-8 col-lg-6 text-md-start text-center">
              <h1 class="display-1 lh-sm text-uppercase text-light">
                <?php echo $row['heading']; ?>
                <br class="d-none d-xxl-block" /> 
                <?php echo $row['subheading']; ?>
              </h1>
              <div class="pt-4">
                <a class="btn btn-sm btn-outline-primary me-3" href="#">
                  <?php echo $row['button1_text']; ?>
                </a>
                <a class="btn btn-sm btn-outline-primary" href="#">
                  <?php echo $row['button2_text']; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
        $isActive = false; // After the first item, set active class to false
        endwhile;
      else:
      ?>
      <p>No carousel items available.</p>
      <?php endif; ?>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#headerCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#headerCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>



<?php
include('db.php');

// Fetch store items from the database
$store_query = "SELECT * FROM store";
$store_result = $conn->query($store_query);
?>

<section class="bg-black py-8 pt-0" id="store">
  <div class="bg-holder" style="background-image:url(assets/img/gallery/store-bg.png);background-position:left bottom;background-size:contain;">
  </div>
  <!--/.bg-holder-->

  <div class="container-lg">
    <div class="row flex-center">
      <div class="col-6 order-md-0 text-center text-md-start"></div>
      <div class="col-sm-10 col-md-6 col-lg-6 text-center text-md-start">
        <div class="col-4 position-relative ms-auto py-5">
          <a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </a>
          <a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleFade" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </a>
        </div>
        
        <!-- Dynamic Carousel -->
        <div class="carousel slide carousel-fade" id="carouselExampleFade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
            if ($store_result->num_rows > 0):
              $isActive = true; // First item active
              while ($row = $store_result->fetch_assoc()):
            ?>
            <!-- Dynamic Carousel Item -->
            <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>">
              <div class="row h-100">
                <div class="col-12">
                  <h5 class="fs-3 fs-lg-5 lh-sm text-uppercase"><?php echo $row['heading'] ?></h5>
                  <p class="my-4 pe-xl-5">
                    <?php echo $row['description'] ?>
                  </p>
                </div>
              </div>
            </div>
            <?php
              $isActive = false; // Set active to false after first item
              endwhile;
            else:
            ?>
            <p>No store items available.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



      <!---- Collections---->
      <?php
include('db.php');

// Fetch Latest Watches
$latest_watches_query = "SELECT * FROM collections WHERE category = 'latest'";
$latest_watches_result = $conn->query($latest_watches_query);

// Fetch Popular Watches
$popular_watches_query = "SELECT * FROM collections WHERE category = 'popular'";
$popular_watches_result = $conn->query($popular_watches_query);
?>

<section class="py-0 pb-6" id="collections">
    <div class="container">
        <div class="row h-100">
            <div class="col-lg-7 mt-7">
                <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">Collections</h5>
            </div>
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs watch-tabs mb-4 justify-content-end" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-latest-tab" data-bs-toggle="tab" data-bs-target="#nav-latest" type="button" role="tab" aria-controls="nav-latest" aria-selected="true">LATEST</button>
                        <button class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" data-bs-target="#nav-popular" type="button" role="tab" aria-controls="nav-popular" aria-selected="false">POPULAR</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <!-- Latest Watches Tab -->
                    <div class="tab-pane fade show active" id="nav-latest" role="tabpanel" aria-labelledby="nav-latest-tab">
                        <div class="carousel slide" id="carouselLatest" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php 
                                if ($latest_watches_result->num_rows > 0):
                                    $count = 0; // Initialize counter for dividing rows of 3 items
                                    while ($row = $latest_watches_result->fetch_assoc()): 
                                        if ($count % 3 == 0): // Every 3 items, start a new carousel item
                                            if ($count > 0) echo '</div></div>'; // Close the previous row and item if not the first one
                                            echo '<div class="carousel-item '.($count == 0 ? 'active' : '').'"><div class="row h-100 align-items-center">'; // Open new carousel item
                                        endif;
                                ?>
                                    <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                        <div class="card bg-black text-white p-6 pb-8">
                                            <img class="card-img" src="assets/img/gallery/<?php echo $row['image'] ?>" alt="Watch image" />
                                            <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                                <h6 class="text-primary"><?php echo $row['price'] ?></h6>
                                                <h4 class="text-light"><?php echo $row['name'] ?></h4>
                                            </div>
                                            <a class="stretched-link" href="#"></a>
                                        </div>
                                    </div>
                                <?php 
                                        $count++;
                                    endwhile;
                                    echo '</div></div>'; // Close the last row and item
                                else: 
                                ?>
                                    <p>No latest watches available.</p>
                                <?php endif; ?>
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLatest" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselLatest" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <!-- Popular Watches Tab -->
                    <div class="tab-pane fade" id="nav-popular" role="tabpanel" aria-labelledby="nav-popular-tab">
                        <div class="carousel slide" id="carouselPopular" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php 
                                if ($popular_watches_result->num_rows > 0):
                                    $count = 0; // Initialize counter for dividing rows of 3 items
                                    while ($row = $popular_watches_result->fetch_assoc()): 
                                        if ($count % 3 == 0): // Every 3 items, start a new carousel item
                                            if ($count > 0) echo '</div></div>'; // Close the previous row and item if not the first one
                                            echo '<div class="carousel-item '.($count == 0 ? 'active' : '').'"><div class="row h-100 align-items-center">'; // Open new carousel item
                                        endif;
                                ?>
                                    <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                        <div class="card bg-black text-white p-6 pb-8">
                                            <img class="card-img" src="assets/img/gallery/<?php echo $row['image'] ?>" alt="Watch image" />
                                            <div class="card-img-overlay bg-dark-gradient d-flex flex-column-reverse align-items-center">
                                                <h6 class="text-primary"><?php echo $row['price'] ?></h6>
                                                <h4 class="text-light"><?php echo $row['name'] ?></h4>
                                            </div>
                                            <a class="stretched-link" href="#"></a>
                                        </div>
                                    </div>
                                <?php 
                                        $count++;
                                    endwhile;
                                    echo '</div></div>'; // Close the last row and item
                                else: 
                                ?>
                                    <p>No popular watches available.</p>
                                <?php endif; ?>
                            </div>
                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPopular" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPopular" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div> <!-- End of Popular Watches Tab -->
                </div> <!-- End of Tab Content -->
            </div> <!-- End of col-12 -->
        </div> <!-- End of row h-100 -->
    </div> <!-- End of container -->
</section>




      <!-- ============================================-->
      <!-- <section> begin logos/brands ============================-->
      <?php
// Database connection
include('db.php');

// Fetch brand logos from the database
$brands_query = "SELECT * FROM brands";
$brands_result = $conn->query($brands_query);
?>

<section class="py-6 bg-dark">
    <div class="container">
        <div class="row">
            <?php
            // Loop through each brand and display its image
            while ($brand = $brands_result->fetch_assoc()) {
            ?>
            <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 d-flex flex-center">
                <img src="assets/img/gallery/<?php echo $brand['brand_image'] ?>" alt="<?php echo $brand['alt'] ?>" />
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end of .container-->
</section>

      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <?php
// Include your database connection
include('db.php'); // Make sure to replace with your actual database connection file

// Fetch testimonials from the database
$testimonial_query = "SELECT * FROM testimonials"; // Adjust the table name as necessary
$testimonial_result = $conn->query($testimonial_query);
?>

<section id="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center my-5">
                <h5 class="fs-3 fs-lg-5 lh-sm mb-0 text-uppercase">What Customers Are Saying</h5>
            </div>
        </div>
        <div class="row flex-center h-100">
            <div class="col-xl-9">
                <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        if ($testimonial_result->num_rows > 0):
                            $isActive = true; // Flag to mark the first item as active
                            $testimonial_count = 0; // Counter for testimonials
                            
                            // Create a loop to fetch testimonials
                            while ($row = $testimonial_result->fetch_assoc()):
                                if ($testimonial_count % 2 == 0): // Start a new carousel item every two testimonials
                        ?>
                        <div class="carousel-item <?php echo $isActive ? 'active' : ''; ?>" data-bs-interval="5000">
                            <div class="row h-100 justify-content-center">
                        <?php endif; ?>
                            
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100 shadow card-span p-3 bg-black">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <img class="img-fluid" src="assets/img/gallery/<?php echo htmlspecialchars($row['image']); ?>" width="80" alt="testimonials" />
                                                <div class="flex-1 ms-4">
                                                    <h6 class="fs-lg-1 mb-1 text-uppercase"><?php echo htmlspecialchars($row['name']); ?></h6>
                                                </div>
                                            </div>
                                            <p class="mb-0 mt-4 fw-light lh-lg"><?php echo htmlspecialchars($row['message']); ?></p>
                                        </div>
                                    </div>
                                </div>

                        <?php
                                $testimonial_count++; // Increment the counter
                                
                                // Close the carousel item every two testimonials
                                if ($testimonial_count % 2 == 0 || $testimonial_count === $testimonial_result->num_rows): 
                        ?>
                            </div> <!-- End row -->
                        </div> <!-- End carousel-item -->
                        <?php
                                $isActive = false; // After the first iteration, set active to false
                                endif;
                            endwhile;
                        else:
                        ?>
                        <div class="carousel-item active" data-bs-interval="5000">
                            <div class="row h-100 justify-content-center">
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100 shadow card-span p-3 bg-black">
                                        <div class="card-body">
                                            <p class="mb-0 mt-4 fw-light lh-lg">No testimonials available.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="row mt-5 flex-center">
                        <div class="col-auto position-relative z-index-2">
                            <ol class="carousel-indicators">
                                <?php
                                // Reset result pointer to the beginning
                                $testimonial_result->data_seek(0);
                                if ($testimonial_result->num_rows > 0):
                                    $indicator_count = 0; // Counter for indicators
                                    while ($row = $testimonial_result->fetch_assoc()):
                                        if ($indicator_count % 2 == 0): // Only create an indicator for each pair
                                ?>
                                <li class="<?php echo $indicator_count === 0 ? 'active' : ''; ?> mx-2" data-bs-target="#carouselTestimonials" data-bs-slide-to="<?php echo $indicator_count / 2; ?>"></li>
                                <?php
                                        endif;
                                        $indicator_count++; // Increment the counter
                                    endwhile;
                                endif;
                                ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container -->
</section>


      <!-- <section> close ============================-->
      <!-- ============================================-->

<?php  include ("footer.php");?>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
   
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&amp;display=swap" rel="stylesheet">
  </body>

</html>