<?php

    $GLOBALS['docroot'] = "http://".$_SERVER['SERVER_NAME'];

    function get_head()
    {
        return '
<head>
    <meta charset="utf-8">
    <title>drulang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dru Lang, Dru Christian Lang, Programmer, Freelance, Code, Coder, Freelance, Freelance Programmer, Programming">
    <meta name="author" content="Dru Christian Lang">

    <!-- Le styles -->
    <link href="'.$GLOBALS['docroot'].'/css/bootstrap.css" rel="stylesheet">
    <style>
    body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
    </style>
    <link href= '.$GLOBALS['docroot'].'/css/bootstrap-responsive.css" rel="stylesheet">
</head>';
    }

    function get_top_navbar()
    {
        return '
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
    <div class="container">

        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="brand" href="'.$GLOBALS['docroot'].'" style="color:#B3EE3A">dru</a>

        <div class="nav-collapse collapse">
            <ul class="nav">
                <li class="dropdown">
                    <a href="'.$GLOBALS['docroot'].'/drulang_resume_2013.pdf">Resume</a>
                </li>
                <li>
                    <a href="https://github.com/drulang">Github</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="'.$GLOBALS['docroot'].'/freelance.php">Freelance<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/freelance.php">General</a></li>
                        <li><a href="/freelance.php?tbl=programming">Programming</a></li>
                        <li><a href="/freelance.php?tbl=db">Database Design</a></li>
                        <li><a href="/freelance.php?tbl=automation">Automation</a></li>
                        <li><a href="/freelance.php?tbl=quote">Quote</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Home Lab</a></li>
                        <li><a href="#">NoSQL</a></li>
                        <li><a href="/sixpacksinday/">Six Pack Sinday</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
</div>';
    }

    
    function get_js()
    {
        return '<!-- Placed at the end of the document so the pages load faster -->
        <script src="'.$GLOBALS['docroot'].'/js/jquery.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-transition.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-alert.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-modal.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-dropdown.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-scrollspy.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-tab.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-tooltip.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-popover.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-button.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-collapse.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-carousel.js"></script>
        <script src="'.$GLOBALS['docroot'].'/js/bootstrap-typeahead.js"></script>';
    }
?>
