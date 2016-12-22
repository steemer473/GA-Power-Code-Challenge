<nav id="home-callout" class="navbar navbar-masthead navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">
                <img src="assets/img/gapower-logo.jpg" alt="GA Power Logo"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li  class="active"><a href="index.php">Home</a></li>
                <li class="dropdown container-fluid">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
                    <div class="dropdown-menu multi-column">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="dropdown-menu">
                                        <li><h4 class="text-center">In Our Community</h4></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Citizenship Matters</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Education Programs</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><img class="img-responsive" src="assets/img/burn-out-img.jpeg" alt="Our community" /></li>
                                        <li role="separator" class="divider"></li>
                                        <li><button href="https://gapower.com" type="button" class="btn btn-danger btn-block">Learn More...</button></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="dropdown-menu">
                                        <li><h4 class="text-center">Business Matters</h4></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Electric Safety</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Trees & Power Line Safety</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><img class="img-responsive" src="assets/img/sunset.jpeg" alt="Image of a pencil" /></li>
                                        <li role="separator" class="divider"></li>
                                        <li><button href="https://gapower.com" type="button" class="btn btn-danger btn-block">Learn More...</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">For My Home</a>
                </li>
                <li><a href="#">For My Business</a></li>

                <li><a href="/contact.php">Contact Us</a></li>
            </ul>
            <div id="search-icon" class="btn-group" role="group">
                <a class="pull-right" href="#modalSearch" data-toggle="modal" data-target="#modalSearch">
                    <i class="fa fa-search fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="btn-group navbar-right hidden-xs hidden-sm hidden-md" role="group" aria-label="registration">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">My Account</button>
                <button type="button" class="btn btn-primary">Register</button>
            </div>
            <div class="visible-xs registration-block-xs">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">My Account</button>
                <button type="button" class="btn btn-primary">Register</button>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php include 'common/modal-signup-form.php';?>
<?php include 'common/modal-search.php';?>

