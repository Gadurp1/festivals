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
        <style media="screen">
        .header-10-sub .background {
          background-image: url("{{$festival->img}}");
          opacity: 85;
          filter: alpha(opacity=8500);
          opacity: 0.85;
          filter: alpha(opacity=85);
        }
        div.section{
          margin-top: 50px;
          margin-bottom: 50px;
        }
        </style>
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
                <div style="">
                    <div class="container">
                        <div class="hero-unit" style="z-index:">
                            <h1><strong>{{$festival->Name}}</strong></h1>
                            <p>
                                {{$festival->location}}
                                <br/>
                              {{date('D M d',strtotime($festival->start))}} to {{date('D M d,',strtotime($festival->start))}}
                            </p>
                        </div>
                    </div>
                </div>
                <a class="control-btn " href="#">V </a>
            </section>

            <section class="content-11">
                <div class="container">
                    <span>Get Updates On All Chicago Events</span>
                    <a class="btn btn-large btn-success" href="#">Sign Up!</a>
                </div>
            </section>

            <br>
            <div class="container">

            <div class="row section">
                <div class="col-md-6">
                  <p>  {{$festival->description}}</p>
<a href="{{$festival->website}}" class="btn btn-info btn-lg">View Website</a>
                </div>
                <div class="col-md-6">
<iframe src="{{$festival->playlist_url}}" frameborder="0" allowtransparency="true" width="100%" height="300px"></iframe>              </div>
            </div>
            <br>
            <!-- content-8  -->
            <section class="container">
              <div class="row ">
                <h1 class="text-center"><strong>{{date('D M d',strtotime($festival->start))}}</strong></h1>
<hr>
                @foreach($bands as $band)
                  <div class="col-md-6 ">
                    <div class="panel panel-body text-center ">
                      <img src="{{url('assets/img/icons/svg/compas.svg')}}" alt="Compas" class="hidden tile-image big-illustration">
                      <h5>{{$band->name}}</h5>
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
