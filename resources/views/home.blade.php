<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Pengaduan Masyarakat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free landing page website template">
    <meta name="author" content="The Develovers">

    <!-- CORE CSS -->
    <link href="{{ asset ('template/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('template/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset ('temp/css/style.css')}}">

    <!-- THEME CSS -->
    <link href="{{ asset ('template/css/main.css')}}" rel="stylesheet" type="text/css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:300,400,700" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset ('template/ico/landee144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset ('template/ico/landee114.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset ('template/ico/landee72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset ('template/ico/landee57.png')}}">
    <link rel="shortcut icon" href="{{ asset ('template/ico/favicon.ico')}}">
</head>

<body data-spy="scroll">

    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-nav-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <div id="main-nav-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav nav-onepage">
                        <li class="active"><a href="#home">HOME</a></li>
                        <li><a href="#overview">OVERVIEW</a></li>
                        <li><a href="#features">FEATURES</a></li>
                        <li><a href="#team">TEAM</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- HERO SECTION -->
        <section id="home" class="hero-unit-fullscreen parallax-window" data-parallax="scroll"
            data-image-src="{{ asset('img/home.jpeg') }}">
            <div class="overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-heading">SISTEM PENGADUAN MASYARAKAT</h1>
                    <p class="lead">Website tentang pengaduan masyarakat yang mengalami suatu kesulitan seperti jalan berlubang, banjir dan keresahan-keresahan yang ada.</p>
                    <span class="onepage-links"><a href="{{ url('/masyarakat/login') }}"
                            class="btn btn-lg btn-primary">Login Masyarakat</a></span>
                    <span class="onepage-links"><a href="{{ url('/petugas/login') }}"
                            class="btn btn-lg btn-primary">Login Petugas</a></span>
                </div>
            </div>
        </section>
        <!-- END HERO SECTION -->

        <!-- OVERVIEW -->
        <section id="overview">
            <div class="container">
                <div class="section-heading">
                    <h2 class="heading">OVERVIEW</h2>
                </div>
                <p class="text-center lead"> is built for business owner, startup or creator to begin or boost
                    their internet-visibility</p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-info icon-info-center">
                            <i class="fa fa-thumbs-o-up"></i>
                            <h3 class="title">HANDCRAFTED</h3>
                            <p>Enthusiastically redefine future-proof innovation vis-a-vis maintainable "outside the
                                box" thinking. Completely evolve fully tested.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-info icon-info-center">
                            <i class="fa fa-laptop"></i>
                            <h3 class="title">ULTRA RESPONSIVE</h3>
                            <p>Enthusiastically redefine future-proof innovation vis-a-vis maintainable "outside the
                                box" thinking. Completely evolve fully tested.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-info icon-info-center">
                            <i class="fa fa-star-o"></i>
                            <h3 class="title">CLEAN DESIGN</h3>
                            <p>Enthusiastically redefine future-proof innovation vis-a-vis maintainable "outside the
                                box" thinking. Completely evolve fully tested.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END OVERVIEW -->

        <!-- FEATURES -->
        <section id="features">
            <div class="container">
                <div class="section-heading">
                    <h2 class="heading">FEATURES</h2>
                </div>
                <div class="container">
                    <div class="row feature-item">
                        <div class="col-sm-7">
                            <h3 class="section-heading"><i class="fa fa-check-square-o"></i> Track Your Project</h3>
                            <p class="lead">Conveniently iterate fully researched synergy for customer directed
                                convergence. Quickly iterate clicks-and-mortar testing procedures and client-focused
                                imperatives.</p>
                            <p>Efficiently pursue efficient outsourcing rather than focused internal or "organic"
                                sources. Authoritatively streamline B2C interfaces vis-a-vis one-to-one data. Holisticly
                                simplify 24/365 materials through premium paradigms. Quickly procrastinate quality
                                imperatives for low-risk high-yield e-markets. Collaboratively negotiate user-centric
                                products and clicks-and-mortar.</p>
                        </div>
                        <div class="col-sm-5">
                            <img src="template/img/feature1.png" class="img-responsive" alt="Feature">
                        </div>
                    </div>
                    <div class="row feature-item">
                        <div class="col-sm-6">
                            <img src="template/img/feature2.png" class="img-responsive" alt="Feature">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="section-heading"><i class="fa fa-users"></i> Team Collaboration</h3>
                            <p class="lead">Completely revolutionize interactive e-markets and goal-oriented quality
                                vectors.</p>
                            <p>Dynamically plagiarize high-payoff methods of empowerment through orthogonal resources.
                                Uniquely re-engineer real-time niches before scalable catalysts for change.</p>
                        </div>
                    </div>
                    <div class="row feature-item">
                        <div class="col-sm-7">
                            <h3 class="section-heading"><i class="fa fa-line-chart"></i> Evaluate Results</h3>
                            <p class="lead">Conveniently iterate fully researched synergy for customer directed
                                convergence.</p>
                            <p>Holisticly simplify 24/365 materials through premium paradigms. Quickly procrastinate
                                quality imperatives for low-risk high-yield e-markets. Collaboratively negotiate
                                user-centric products and clicks-and-mortar.</p>
                        </div>
                        <div class="col-sm-5">
                            <img src="template/img/feature3.png" class="img-responsive" alt="Feature">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END FEATURES -->

        <!-- TEAM -->
        <section id="team">
            <div class="container">
                <div class="section-heading">
                    <h2 class="heading">TEAM</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="team-member">
                            <img src="img/adrian.png" class="img-responsive img-circle" alt="Person">
                            <div class="member-info">
                                <h3 class="name">Adrian Maulana</h3>
                                <span class="title text-muted">SMK AIRLANGGA</span>
                                {{-- <p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p> --}}
                                <ul class="list-inline social-icons">
                                    <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member">
                            <img src="img/sambo.jpg" class="img-responsive img-circle" alt="Person">
                            <div class="member-info">
                                <h3 class="name">Adedya Ferdy Anur</h3>
                                <span class="title text-muted">SMK AIRLANGGA</span>
                                {{-- <p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p> --}}
                                <ul class="list-inline social-icons">
                                    <li><a href="https://github.com/adityaferdi77" class="github-bg"><i
                                                class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-member">
                            <img src="img/rafly.jpg" class="img-responsive img-circle" alt="Person">
                            <div class="member-info">
                                <h3 class="name">Rafly Hikmatul</h3>
                                <span class="title text-muted">SMK AIRLANGGA</span>
                                {{-- <p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p> --}}
                                <ul class="list-inline social-icons">
                                    <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-member">
                            <img src="img/liga.jpeg" class="img-responsive img-circle" alt="Person">
                            <div class="member-info">
                                <h3 class="name">Liga Saputra</h3>
                                <span class="title text-muted">SMK AIRLANGGA</span>
                                {{-- <p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p> --}}
                                <ul class="list-inline social-icons">
                                    <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-member">
                            <img src="img/valen.jpg" class="img-responsive img-circle" alt="Person">
                            <div class="member-info">
                                <h3 class="name">Valentino Alexander</h3>
                                <span class="title text-muted">SMK AIRLANGGA</span>
                                {{-- <p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p> --}}
                                <ul class="list-inline social-icons">
                                    <li><a href="#" class="github-bg"><i class="fa fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- END TEAM -->

        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <div class="section-heading">
                    <h2 class="heading">CONTACT</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong><i class="icon icon_pin_alt"></i> ADDRESS</strong>
                            <br>
                            <span>Gn.Guntur <br> Balikpapan Tengah 7611</span>
                        </p>
                        <br>
                        <p>
                            <strong><i class="icon icon_phone"></i> PHONE</strong>
                            <br>
                            <span>Phone +62 xxxxxxx</span>
                        </p>
                        <br>
                        <p>
                            <strong><i class="icon icon_mail"></i> EMAIL</strong>
                            <br>
                            <span>Email : <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></span>
                        </p>
                    </div>
                    <div class="col-md-8">
                        <form id="contact-form" class="form-horizontal form-minimal">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact-name" class="control-label sr-only">Name</label>
                                        <input type="text" class="form-control" id="contact-name"
                                            placeholder="Name (required)" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="contact-email" class="control-label sr-only">Email</label>
                                        <input type="email" class="form-control" id="contact-email"
                                            placeholder="Email (required)" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-subject" class="control-label sr-only">Subject</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="contact-subject"
                                        placeholder="Subject (optional)">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact-message" class="control-label sr-only">Message</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" id="contact-message" name="contact-message" rows="5" cols="30"
                                        placeholder="Message (required)" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        <footer>
            <div class="container ">
              <div class="row text-center py-4">
                <div class="col text-light">
                    Copyright &copy; {{date('Y')}} Pengaduan Masyarakat created by Kelompok 3 <span style="color: #f57d00;">&#10084;</span>
                </div>
              </div>
            </div>
          </footer>
        <!-- END FOOTER -->
    </div>
    <!-- END WRAPPER -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('template/js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/scrolling/jquery.scrollTo-1.4.3.1-min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/scrolling/jquery.localscroll-1.2.7-min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('template/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/landee.js') }}"></script>
</body>

</html>
