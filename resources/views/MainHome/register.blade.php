<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets')}}/apple-icon-180x180.png">
    <link href="{{asset('assets')}}/favicon.ico" rel="icon">

    <title>Login</title>

    <link href="{{asset('assets')}}/main.3f6952e4.css" rel="stylesheet"></head>

<body class="minimal">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
<!-- Add your content of header -->
<header>
    <nav class="navbar  navbar-fixed-top navbar-inverse">
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="{{route('index')}}" title="">01 : Ana Sayfa</a></li>
                    <li><a href="{{route('aboutus')}}" title="">02 : Biz Kimiz</a></li>
                    <li><a href="{{route('contact')}}" title="">03 : İletişim</a></li>
                    <li><a href="{{route('whyhere')}}" title="">04 : Neden Buradasın</a></li>
                    <li><a href="{{route('login')}}" title="">05 : Giriş Yap</a></li>
                    <li><a href="{{route('register')}}"  title="">06 : Üye Ol</a></li>
                </ul>


            </div>
        </div>
    </nav>
</header>
<!-- Add your site or app content here -->
<div class="hero-full-container background-image-container white-text-container" style="background-image: url('{{asset('assets')}}/images/space.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="hero-full-wrapper">
                    <div class="text-content">
                        <h1><br>
                            <span id="typed-strings">
                  <span>Üye Ol</span>
                                </span>
                            <span id="typed"></span>
                        </h1>
                            <form action="" class="reveal-content">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="k_adi" class="form-control" id="email" placeholder="Kullanıcı Adı">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Şifre">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="e-mail" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="age" placeholder="Yaşınız">
                                        </div>
                                        <div class="form-group">
                                        <select name="gender" class="form-control" >
                                            <option selected="">Cinsiyet</option>
                                            <option value="man">Erkek </option>
                                            <option value="woman">Kadın</option>
                                            <option value="none">Belirtmek İstemiyorum</option>

                                        </select>
                                        </div>


                                        <button type="submit" class="btn btn-success">Üye Ol</button>
                                    </div>

                                </div>
                            </form>
                        <br>







                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {
        type();
        movingBackgroundImage();
    });
</script>


<script type="text/javascript" src="{{asset('assets')}}/main.70a66962.js"></script></body>

</html>

