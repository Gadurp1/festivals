<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Sample 4</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <link rel="shortcut icon" href="{{url('assets/flat-ui/images/favicon.ico')}}">
        <link rel="stylesheet" href="{{url('assets/flat-ui/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('assets/flat-ui/css/flat-ui.css')}}">
        <!-- Using only with Flat-UI (free)-->
        <link rel="stylesheet" href="{{url('assets/css/icon-font.css')}}">
        <!-- end -->
        <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    </head>

    <body>
        <div class="page-wrapper">
            <!-- header-10 -->
            <header class="header-10">
                <div class="container">
                    <div class="navbar col-sm-12" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle"></button>
                            <a class="brand" href="#">ChiMu</a>
                         </div>
                        <div class="collapse navbar-collapse pull-right">
                            <ul class="nav pull-left">
                                <li class="active"><a href="#">Festivals</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                            <form class="navbar-form pull-left">
                                <a class="btn btn-info" href="#">Create Event</a>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            <section class="header-10-sub v-center bg-midnight-blue" style="height:300px">
                <div class="background">
                    &nbsp;
                </div>
                <div>
                    <div class="container">
                        <div class="hero-unit">
                            <h1 style="font-size:64px;font-weight:800">The Home of Chicago's Music Events</h1>
                            <h1>
                                View and share events happening aroud chicago
                                <br/>
                            </h1>
                        </div>
                    </div>
                </div>
                <a class="control-btn fui-arrow-down" href="#"> </a>
            </section>
            <!-- content-11  -->
            <section class="content-11">
                <div class="container">
                    <span>Get Notified of New Events in Chicago</span>
                    <a class="btn btn-large btn-success" href="#">Sign Me Up!</a>
                </div>
            </section>

            <!-- content-8  -->
            <section class="content-10 v-center">
              <div class="row ">
                @foreach($festivals as $festival)

                  <div class="col-xs-4">
                    <div class="panel panel-defaul panel-body" >
                    <a class="" href="{{url('festivals/'.$festival->id.'')}}">  <img src="http://66.media.tumblr.com/407008e7b130f079db962c17b949388d/tumblr_neqiv8B7Kj1qabfuvo5_1280.jpg" alt="Compas" class="img-responsive col-md-12">
                      <h4 class="tile-title">{{$festival->Name}}</h4>
                      View More</a>
                    </div>
                  </div>

                @endforeach
                </div>

                </section>

            <!-- footer-3 -->
            <footer class="footer-3">
                <div class="container">
                    <div class="row v-center">
                        <div class="col-sm-2">
                            <a class="brand" href="#">Startup</a>
                        </div>
                        <div class="col-sm-7">
                            <div class="additional-links">
                                Be sure to take a look to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <h6>New York, NY</h6>
                            <div class="address">
                                62 West 55th Street, Suite 302<br>New York, NY, 10230
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{url('assets/common-files/js/jquery-1.10.2.min.js')}}"></script>
        <script src="{{url('assets/flat-ui/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/common-files/js/modernizr.custom.js')}}"></script>
        <script src="{{url('assets/common-files/js/jquery.scrollTo-1.4.3.1-min.js')}}"></script>
        <script src="{{url('assets/common-files/js/jquery.parallax.min.js')}}"></script>
        <script src="{{url('assets/common-files/js/startup-kit.js')}}"></script>
        <script src="{{url('assets/js/jquery.backgroundvideo.min.js')}}"></script>
        <script src="{{url('assets/js/script.js')}}"></script>
    </body>
</html>
