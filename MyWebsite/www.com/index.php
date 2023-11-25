<!DOCTYPE html>
<html lang="en">
<?php include_once('php/header.php');?>
<body>

    <?php include_once('php/TopHeader.php');?>

    <!-------- features categories------------>

    <?php include_once('php/featuresCategories.php');?>


    <!-------- features products------------>

    <?php include_once('php/featuresProducts.php');?>
    
    <!----------- offer --------->

    <?php include_once('php/offers.php');?>

    <!----------- testimonial ----------->

    <?php include_once('php/testimonial.php');?>

    <!------------- brands --------------->

    <?php include_once('php/brands.php');?>

    <!------------- footer ----------------->

    <?php include_once('php/footer.php');?>


<script src="js/TopHeader.js"></script>

<script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementsByClassName("header")[0].onhover = "30px";
  } else {
    document.getElementsByClassName("header")[0].style.setPropert
  }
}
</script>

</body>
</html>