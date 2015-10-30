<?php
/**
 * Created by PhpStorm.
 * User: mikaelen
 * Date: 30/10/15
 * Time: 12:17
 */

function get_header(){
    ?>

<!--[if lte IE 8]>
<link rel="stylesheet" href="css/pure/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
<link rel="stylesheet" href="css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="css/custom_12_grid.css">
    <link rel="stylesheet" href="fonts/linear-icons/linear-icons.css">
    <link rel="stylesheet" href="fonts/feather/feather.css">
    <link rel="stylesheet" href="open_sans/stylesheet.css">
    <link rel="stylesheet" href="css/framework.css">
<!--<![endif]-->

<?php
}

function get_custom_javascripts(){
    ?>
    <script src="js/framework.js"></script>
    <script src="js/buttons.js"></script>
    <script src="js/animations.js"></script>

    <?php
}
?>