<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'includes/head-section.php' ?>
</head>

<body id="food-page">

    <nav class="navbar navbar-inverse navbar-fixed-top">
       <?php include 'includes/navigation.php'; ?>
    </nav>
    <div class="food">
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
        <div class="container recipe">

            <div class="row">

                <h1 class="align-left;">Dishes</h1>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/clam-mussel-udon-soup-2.jpg" />
                <p class="align-left food-description">Clams, Mussels, Vegetable, Udon Noodle Soup</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/seafood-salad.jpg" />
                <p class="align-left food-description">Seafood Salad</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/austrialian-prawns-with-yellow-rice.jpg" />
                <p class="align-left food-description">Austrialian Prawns with Yellow Rice</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/seabass-and-asparagus.jpg" />
                <p class="align-left food-description"> Cast Iron Sea bass with Asparagus</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/boiled-peanuts.jpg" />
                <p class="align-left food-description">Boiled Peanuts</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/table-setting-doebay-2018-01.jpg" />
                <p class="align-left food-description">Table Setting Doebay Retreat 2018</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/table-setting-doebay-2018-02.jpg" />
                <p class="align-left food-description">Table Setting Doebay Retreat 2018</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/kimchi-marinated-prawns.jpg" />
                <p class="align-left food-description">Kimchi Marinated Prawns</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/salmon-cakes-salmon-skin-bacon-with-salad.jpg" />
                <p class="align-left food-description">Salmon Cakes, Salmon Skin Bacon with Cucumber and Lettuce Salad</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/antonio-prawns-kale-turnips-with-tomato-base.jpg" />
                <p class="align-left food-description">Prawns &amp; Turnips Simmered in a Tomato Base topped with Sauted Kale</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/pan-fried-seabass-with-herbs-spices.jpg" />
                <p class="align-left food-description">Pan Seared Sea bass with Ground Herbs &amp; Spices</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/oven-dungeness crab.jpg" />
                <p class="align-left food-description">Spiced Oven Dungeness Crab</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/cod-with-cucumber-tomato-salad.jpg" />
                <p class="align-left food-description">Cod with Cucumber Tomato Salad</p>
                <hr />
                </div>

                <div class="food-img">
                <img src="http://antoniolatimore.com/img/castiron-salmon-with-limelemon-garlic.jpg" />
                <p class="align-left food-description">Cast Iron Salmon</p>
                <hr />
                </div>


                


            </div>

			<div class="row more-info align-left">
                <!-- More inforamtion: Previous Retreat Menus, Recipes ... -->

                
                <!-- recipes -->
                <?php include 'includes/recipes-links.php' ?>

                <!-- previous retreat menus -->
                <?php include 'includes/previous-retreat-menus-links.php' ?>
                
              <hr />
              <!-- contact info -->
                <?php include 'includes/contact-email.php' ?>
			  
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
