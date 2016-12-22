<!doctype html>
<html class="no-js">
<head>
    <?php include 'common/head.php';?>
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
        }

        header .jumbotron{
            background:#358cce;
            color:#fff;
            border-radius:0px;
        }
        header .jumbotron small{
            color:#fff;
        }
        .main-color {
            color:#358cce;
        }
        #map {
            width:100%;
            height:250px;
            display:block;
        }
        /* Fix Google Maps canvas
    *
    * Wrap your Google Maps embed in a `.google-map-canvas` to reset Bootstrap's
    * global `box-sizing` changes. You may optionally need to reset the `max-width`
    * on images in case you've applied that anywhere else. (That shouldn't be as
    * necessary with Bootstrap 3 though as that behavior is relegated to the
    * `.img-responsive` class.)
    */

        .google-map-canvas,
        .google-map-canvas * { .box-sizing(content-box); }

        /* Optional responsive image override */
        img { max-width: none; }

        @media (max-width: 768px) {

            .nav-tabs.nav-justified > li{
                float:left;
            }
        }
    </style>
</head>
<body>
    <?php include 'common/menu.php';?>
    <header>
        <div class="jumbotron">

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Location</h3>
                        </div>
                        <div class="panel-body">
                            <!-- gMap script container !Do not remove!! -->
                            <div id="map"></div>
                            <!-- gMap script container !Do not remove!! -->
                            <script>
                                function initMap() {
                                    var uluru = {lat: 33.763484, lng: -84.38074};
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 10,
                                        center: uluru
                                    });
                                    var marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map
                                    });
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3><i class="icon-pushpin main-color"></i> Our office</h3>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>Georgia Power Company</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <i class="icon-phone-sign"></i> + 4 (123) 456-7890
                            </address>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3><i class="icon-time main-color"></i> Business hours</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>

                                        <th>Day</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>Monday</td>
                                        <td>9:00 to 18:00</td>
                                    </tr>
                                    <tr class="success">
                                        <td>Tuesday</td>
                                        <td>9:00 to 18:00</td>
                                    </tr>
                                    <tr class="success">

                                        <td>Wednesday</td>
                                        <td>9:00 to 18:00</td>
                                    </tr>
                                    <tr class="success">

                                        <td>Thursday</td>
                                        <td>9:00 to 18:00</td>
                                    </tr>
                                    <tr class="success">

                                        <td>Friday</td>
                                        <td>9:00 to 18:00</td>
                                    </tr>
                                    <tr class="warning">

                                        <td>Saturday</td>
                                        <td>9:00 to 14:00</td>
                                    </tr>
                                    <tr class="danger">

                                        <td>Sunday</td>
                                        <td>day off</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">

                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="">
                                <i class="icon-envelope main-color"></i>
                                Feel free to contact us
                            </h3>
                        </div>
                        <div class="panel-body">
                            <!-- CONTACT FORM -->
                            <form id="ajax-contacts" class="">
                                <fieldset>
                                    <div class="form-group">
                                        <label for="name">Name</label><input class="form-control" type="text" name="name" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-Mail</label><input class="form-control" type="text" name="email" value=""><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label><input class="form-control" type="text" name="subject" value=""><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Comments</label><textarea class="form-control" name="message" rows="5" cols="25"></textarea><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="submit">&nbsp;</label><input class="btn btn-lg btn-info" type="submit" name="submit" value="Send Message">
                                    </div>
                                    <fieldset>
                            </form>
                            <!-- END CONTACT FORM -->
                        </div>
                    </div>
                </div>
            </div>
 </div> <!-- /container -->

    <?php include 'common/footer.php';?>
    <?php include 'common/foot.php';?>

    <!-- CONTACTS SCRIPT-->
    <script type="text/javascript" src="assets/includes/js/contacts.js"></script>
    <!-- / CONTACTS SCRIPT-->


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFs15TwjNepURixsgXnTEfrl1LfAKGpyg&callback=initMap"></script>




    <!-- CONTACT FORM SCRIPT -->
    <script type="text/javascript">

        $(document).ready(function ()
        { // after loading the DOM
            $("#ajax-contacts").submit(function ()
            {
                // this points to our form
                var str = $(this).serialize(); // Serialize the data for the POST-request
                $.ajax(
                    {
                        type: "POST",
                        url: '<?php echo get_template_directory_uri(); ?>/assets/includes/contact-process.php',
                        data: str,
                        success: function (msg)
                        {
                            $("#note").ajaxComplete(function (event, request, settings)
                            {
                                if (msg == 'OK')
                                {
                                    result = '<div class="alert alert-success">Message was sent to website administrator, thank you!</div>';
                                    $("#fields").hide();
                                }
                                else
                                {
                                    result = msg;
                                }
                                $(this).html(result);
                            });
                        }
                    });
                return false;
            });
        });

    </script>
</body>
</html>
