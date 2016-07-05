<html html lang="en" ng-app="portfoliojs">
<?php require 'head.php'; ?>
<script>
    $(document).ready(function() {
        var param = document.URL.split('#')[1];
        console.log(param);
        param2 = "#" + param;
        $(param2).modal('show');
    });
</script>
<style>
    body {
        background-color:#D2FFFF;
    }
    p {
        font-size: 15px;
    }
    #item {
    margin-left: auto;
    margin-right: auto;
    }
</style>
<body ng-controller="PortfolioController">
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand" ng-repeat="x in names">
                <a ng-href="{{x.href}}" onclick = $("#menu-close").click(); >{{x.name}}</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <h2>Achievements</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <div class="image">
                            <a data-toggle="modal" data-target="#SFModal">
                                <img class="img-portfolio img-responsive" src="scripts/php/findblob.php?id=5">
                            </a>
                            <h3><span>Science Fair</span></h3>
                        </div>
                        <div id="SFModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Science Fair</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>I have participated in science fairs since I was in kindergarten. They have provided a hands-on and in depth experience regarding scientific research. Over the years of participating in science fairs, my love for science has exponentially grown.</p>
                                            <div id="myCarouselSF" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarouselSF" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarouselSF" data-slide-to="1"></li>
                                                <li data-target="#myCarouselSF" data-slide-to="2"></li>
                                                <li data-target="#myCarouselSF" data-slide-to="3"></li>
                                            </ol>                                            
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="scripts/php/findblob.php?id=4" alt="State Science Fair 2016">
                                                </div>
                                                <div class="item">
                                                    <img src="img/ben.jpg" alt="Chania">
                                                </div>
                                                <div class="item">
                                                    <img src="img/ben.jpg" alt="Flower">
                                                </div>
                                                <div class="item">
                                                    <img src="img/ben.jpg" alt="Flower">
                                                </div>
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarouselSF" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarouselSF" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--SCIFAIR-->
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <div class="image">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/ben.jpg">
                            </a>
                            <h3><span>Debate</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <div class="image">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/ben.jpg">
                            </a>
                            <h3><span>Science Olympiad</span></h3>
                        </div>
                    </div>
                </div> <!--SCIOLY-->
                <!--DEBATE-->
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <div class="image">
                            <a href="#">
                                <img class="img-portfolio img-responsive" src="img/ben.jpg">
                            </a>
                            <h3><span>Black Data Processing Associates</span></h3>
                        </div>
                    </div>
                </div>
            </div> <!--BDPA-->
            <div class="row">
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <div class="image">
                            <a data-toggle="modal" data-target="#myModalRobo">
                                <img class="img-portfolio img-responsive" src="img/ben.jpg">
                            </a>
                            <h3><span>Robotics</span></h3>
                        </div>
                        <div id="myModalRobo" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Robotics</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>I joined the Robotics Team 2530 in my freshman year. It was a blast watching the flow of the design process in action and learning C++ to create autonamous functions for the robot. Currently, I am the webmaster of the team's website.</p>
                                            <div id="myCarouselRobotics" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarouselRobotics" data-slide-to="0" class="active"></li>
                                                <!--<li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                                <li data-target="#myCarousel" data-slide-to="3"></li>-->
                                            </ol>                                            
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="img/Einstein.jpg" alt="FRC World Championships">
                                                </div>
                                                <!--<div class="item">
                                                    <img src="img/ben.jpg" alt="Chania">
                                                </div>
                                                <div class="item">
                                                    <img src="img/ben.jpg" alt="Flower">
                                                </div>
                                                <div class="item">
                                                    <img src="img/ben.jpg" alt="Flower">
                                                </div>-->
                                            </div>
                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarouselRobotics" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarouselRobotics" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--ROBOTICS-->
                <div class="col-md-6">
                    <div class="portfolio-item">
                        <div class="image">
                            <a data-toggle="modal" data-target="#KarateModal">
                                <img class="img-portfolio img-responsive" src="img/KarateCarnahan.JPG">
                            </a>
                            <h3><span>Karate</span></h3>
                        </div>
                        <div id="KarateModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Karate</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>I have practiced Karate since the age of eight. This sport taught me the virtues of patience and discipline. I earned my 1st degree black belt at the age of 11 and my 2nd degree black belt at the age of 14.</p>
                                            <div id="myCarouselKarate" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item active">
                                                        <img src="img/ben.jpg" alt="Chania">
                                                    </div>
                                                    <div class="item">
                                                        <img src="img/ben.jpg" alt="Chania">
                                                    </div>
                                                    <div class="item">
                                                        <img src="img/ben.jpg" alt="Flower">
                                                    </div>
                                                    <div class="item">
                                                        <img src="img/ben.jpg" alt="Flower">
                                                    </div>
                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarouselKarate" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarouselKarate" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--KARATE-->
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
<?php include 'scripts/php/footer.php'; ?>