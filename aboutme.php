<?php
    include 'scripts/php/database_connection.php';
    include 'scripts/php/activate.php';
    $result = mysqli_query($dbhandle, "SELECT * FROM `nav2`");
?>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gaurav Behera</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> 
</head>
<style>
    body {
        background-color:#D2FFFF;
    }
    #right {
        float: right;
        font-size: 20px;
    }
    #left {
        float: left;
        width: 50%;
    }
    #main {
        position: relative;
        width:100%;
        height:50%;
    }
    #profile {
        width: inherit;
        height: inherit;
    }
    #content {
        /*position: absolute;
        bottom: 0;*/
        font-size: 20px;
    }
    .indent {
        text-indent: 50px;
    }
    #bottom {
        position: absolute;
        bottome: 0;
    }
</style>
<body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
            <?php
                while($row = mysqli_fetch_array($result)){
            ?>
                <a href="<?php echo $row{'href'}; ?>"  onclick = $("#menu-close").click(); ><?php echo $row{'name'}; ?></a>
            </li>
            <li>
            <?php } ?>
        </ul>
    </nav>
    <div class="container">
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <h2>About Me</h2>
        </div>
        <br>
        <div id="main">
            <div id="left" class="col-md-6">
                <img id="profile" src="img/ben.jpg">
            </div>
            <div id="right" class="col-md-6">
                    <p>I strive to do my best in all of my achievements as well as dedicate my time to improve the society that we live in.</p>
            </div>
            <div id="bottom"></div>
        </div>
        <div id="content">
                <p><i>Extra-Curricular Activities</i></p>
                <div class="indent">
                    <p>HELLO</p>
                    <p>HELLO</p>
                </div>
        </div>
    </div>
</body>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="scripts/javascript/textoverlay.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->

    <script src="js/nav-close.js"></script>

    <script src="js/nav-open.js"></script>
</html>