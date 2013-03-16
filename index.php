
<?php
include 'layout.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php echo get_head(); ?>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="brand" href="#">dru</a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">

                            <li class="active"><a href="https://drulang.com">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resume <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">PDF</a></li>
                                    <li><a href="#">DOCX</a></li>
                                    <li><a href="#">ODF</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">Projects</a></li>
                            <li><a href="#about">Blog</a></li>
                            <li><a href="https://github.com/drulang">Github</a></li>
                            <li><a href="#about">Misc</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <h1>Coming soon...</h1>
            <div class="progress progress-striped active">
                <div class="bar" style="width: 20%;"></div>
            </div>
        </div> <!-- /container -->

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap-transition.js"></script>
        <script src="./js/bootstrap-alert.js"></script>
        <script src="./js/bootstrap-modal.js"></script>
        <script src="./js/bootstrap-dropdown.js"></script>
        <script src="./js/bootstrap-scrollspy.js"></script>
        <script src="./js/bootstrap-tab.js"></script>
        <script src="./js/bootstrap-tooltip.js"></script>
        <script src="./js/bootstrap-popover.js"></script>
        <script src="./js/bootstrap-button.js"></script>
        <script src="./js/bootstrap-collapse.js"></script>
        <script src="./js/bootstrap-carousel.js"></script>
        <script src="./js/bootstrap-typeahead.js"></script>

    </body>
</html>
