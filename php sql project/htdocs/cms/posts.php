<!-- Header which tells us about connectivity of MySQL nd PHP -->
<?php include "header.php" ?> 

<!-- Navbar -->
<?php include "nav.php" ?>

<!-- Page Content -->

<div class="container" >
    <div class="row">

<!-- Blog ENTRIES COLUMN -->
<div class="col-md-8" >
        <h1>Page Heading <h3> Secondary Text </h3> </h1>

        <?php 
        $query = "SELECT*FROM posts" ;
        $select_posts = mysqli_query($conn,$query) ;
        while ($row = mysqli_fetch_assoc($select_posts)) {
            $post_title = $row ['post_title'];
            $post_author = $row['post_author'] ;
            $post_date = $row ['post_date'];
            $post_image = $row['post_image'] ;
            $post_content = $row ['post_content'];
            
        ?>

        <!-- First Blog Post -->
        <h2> <a href="#" > <?php  echo $post_title ; ?> </a> </h2>

        <p class="lead"> 
            by <a href="#"> <?php echo $post_author; ?> </a>  </p>

    <p> <span class="bi bi-alarm"></span> <?php echo $post_date ; ?> </p>
    <hr>

    <a href="#" >
        <img class="img-responsive" style="max-width:400px;max-height:400px" src="images/<?php echo $post_image ; ?>" alt="Picture" >
        </a>
    <p> <?php echo $post_content ; ?> </p>
    <a class="btn btn-primary" href="#" > Read More 
        <span class="glyphicon-chevron-right" > </span> </a>

    <?php } ?> <br>

        </div>

<?php include "sidebar.php"; ?>
        
<?php include "footer.php" ; ?>
