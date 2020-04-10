<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/head-section.php' ?>
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
    <?php include 'includes/navigation.php'; ?>
    </nav>
    <div class="aboutpage">
        <div class="jumbotron">
            <div class="container">
                <h1></h1>
                <p></p>

            </div>
        </div>
        <!-- /.jumbotron -->

        <div class="container hidden">
            <div class="row">
                <div class="col-md-4">
                    <h2>Chef</h2>
                    <p>A passion for life and love and good food</p>
                    <p><a class="btn btn-default" href="about2.html" role="button">&nbsp; &raquo; &nbsp;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Food</h2>
                    <p>Some text here plaese</p>
                    <p><a class="btn btn-default" href="food2.html" role="button">&nbsp; &raquo; &nbsp;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Spring Retreat 2017</h2>
                    <p>Get inforamtion, ask questions about services</p>
                    <p><a class="btn btn-default" href="retreat.html" role="button">&nbsp; &raquo; &nbsp;</a></p>
                </div>
            </div>

        </div>
        <!-- /.container -->

        <!-- main info -->
        <div class="container">

            <div class="row">
                <h1>Antonio Latimore</h1>
                <div class="col-md-3 about-headshot"><img src="http://antoniolatimore.com/img/antonio-headshot-02.jpg" /></div>
                <div class="col-md-8 bio align-left">
                    <p>Antonios passion for food begain at an early age. Growing up with a family that loved food and people, they are a powerful inspiration to why he continued to cook. He would watch, listen, and learn the love for food while his Great
                        Aunt Idella prepared delicious meals for family gatherings.</p>
                    <p>Always looking to use the freshest ingredients available together with simple and complex spices to enhance, but not overpower the natural flavors bringing out aromas that fill the senses.</p>
                    <p>From his home roots in Kissimmee Florida, combined with travel in the U.S. and abroad, diversity, and cultural open mindedness he has been afforded the opportunity to expand his culinary interest. Using these experiences he continues
                        to aspire this passion. In the kitchen he’s relaxed and believes that food opens up our hearts when we come together over a meal.</p>
                    <p>With the understanding and awareness of the many types of diets and pallets he is committed to create meals that nourish the growth of a healthy life.</p>
                <hr />
                
                <div class="row more-info align-left">
                <!-- More inforamtion: Previous Retreat Menus, Recipes ... -->

                <!-- previous retreat menus -->
                <?php include 'includes/recipes-links.php' ?>

                <!-- recipes -->
                <?php include 'includes/previous-retreat-menus-links.php' ?>
                
              <hr />
              <!-- contact info -->
                <?php include 'includes/contact-email.php' ?>
			  
        </div>
            </div>



        </div>
    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
