<html lang="en" data-react-helmet="lang">

<head>
    <style type="text/css">

    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style data-href="/styles.0c1b08f74b5813fb88e3.css">

    </style>
    <meta name="generator" content="Gatsby 2.5.0">
    <title>FOSSIL - Open Source Community</title>
    <link data-react-helmet="true" rel="shortcut icon" type="image/ico" href="{{asset('images')}}/favicon.ico">
    <meta data-react-helmet="true" name="description" content="Open-Source Community">
    <meta data-react-helmet="true" name="keywords" content="FOSSIL, FREE OPEN SOURCE SOFTWARE INTEREST LEAGUE">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div id="___gatsby">
        <div style="outline:none" tabindex="-1" role="group">
            <div id="flexContainer">
                <div class="nav-bar">
                    <div class="container">
                        <div class="nav-items"><span class="brand"><img src="{{asset('images')}}/logo.png"
                                    alt="logo-fossil" class="logo-fossil"></span>
                            <ul>
                                <li>
                                    <a href="/" {{ request()->routeIs('beranda') ? 'class=active' : '' }}>Beranda</a>
                                </li>
                                <li><a href="/events" {{ request()->routeIs('events') ? 'class=active' : '' }}>Events</a></li>
                                <li><a href="/blog" {{ request()->routeIs('blog') ? 'class=active' : '' }}>Blog</a></li>
                                <li><a href="#"><strong>Bergabung</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{$slot}}
                <footer>
                    <div class="container">
                        <div class="info-area">
                            <div class="column"><a href="https://github.com/fossildev">GitHub</a></div>
                            <div class="column"></div>
                            <div class="column">
                                <p><strong>FOSSIL AMIKOM</strong><br>Gedung BSC Universitas Amikom<br>Condongcatur,
                                    Depok, Sleman,<br>Special Region of Yogyakarta.
                                    <br>55281<br><br>fossil@amikom.ac.id<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="copyright-area">
                        <p>FOSSIL © 2024</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>