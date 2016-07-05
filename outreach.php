<html lang="en" ng-app="portfoliojs">
<?php require 'head.php'; ?>
<style>
    body {
        background-color:#D2FFFF;
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
            <h2>Outreach</h2>
            <div class="col-md-6">
                <div class="portfolio-item">
                    <div class="image">
                        <a href="schoolsupplies.php">
                            <img class="img-portfolio img-responsive" src="img/pencil.jpg">
                        </a>
                        <h3><span>Donating School Supplies Overseas</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="portfolio-item">
                    <div class="image">
                        <a href="lecture.php">
                            <img class="img-portfolio img-responsive" src="img/lecture.jpg">
                        </a>
                        <h3><span>Giving a Lecture Overseas</span></h3>
                    </div>
                </div>
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