<!doctype html>
<html lang="en">
<head>
@include('includ.head')
</head>
<body>

<!--Header Section-->
<section class="bg-gradient pt-5 pb-6">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                
                <div class="heading-brand">BOT VS Everybody</div>
               
            </div>
        </div>
        <div class="row mt-6">
            <div class="col-md-8 mx-auto text-center">
            <img width="125px" height="125px" src="img/menu.png">
                <h1>BOT Twitter</h1>
                <p class="lead mb-5">Hi para kaum rebahan, kaum pemalas, kaum scroll twitter siang malam, kaum julid dan kaum 
                    ambyar, ini adalah website BOT Twitter (Download Video, Create Quotes Tweet, Ramalan Jodoh, Menfess).
                </p>
                <a href="https://twitter.com/budakorpfess" class="btn btn-warning svg-icon">
                    <em class="mr-2" data-feather="twitter"></em>
                    Follow
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-9 mx-auto">
                <div class="code-window">
                    <div class="dots">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                    <pre class="language-javascript line-numbers"><code class="language-javascript">var p={
   data:"i have crush on you",
   add:function (data) {
      var k = this.data.split(" ");
      var p={};
      for (var x in k){
          p[k.length-x]=k[x];
      }
      for (var y in p)
      document.write(p[y]) ;
   }
};
p.add("i have crush on you");
</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Features Section-->
<section class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center text-md-left">Daftar <span class="text-success">BOT Twitter</span></h2>
                <div class="row feature-grid">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="video" width="28" height="28"></span>
                                </div>
                            </div>
                            <a href="<?php echo url('video') ?>">
                            <div class="media-body">
                                Download Video
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="image" width="28" height="28"></span>
                                </div>
                            </div>
                            <a href="<?php echo url('gambar') ?>">
                            <div class="media-body">
                                Gambar Quotes
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="feather" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Ramalan Jodoh
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="zap" width="28" height="28"></span>
                                </div>
                            </div>
                            <a href="https://twitter.com/budakorpfess">
                            <div class="media-body">
                                Menfess
                            </div>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="git-pull-request" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Extensible
                            </div>
                        </div> -->
                    <!-- </div><div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="droplet" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Easy Styling
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!--Used By Section-->
<section class="pb-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center text-md-left">BOT Twitter Platform</h2>
                <p class="lead text-muted">Dibangun menggunakan platform.</p>
                <div class="mt-5 d-flex flex-row justify-content-md-between flex-wrap press-icons">
                    
                    <img src="https://logo.clearbit.com/twitter.com?size=60" alt="Twitter"/>
                    <img src="https://logo.clearbit.com/laravel.com?size=60" alt="Laravel"/>
                    <img src="https://logo.clearbit.com/nginx.org?size=60" alt="Nginx"/>
                    <img src="https://logo.clearbit.com/php.net?size=60" alt="Php"/>
                    <img src="https://logo.clearbit.com/nodejs.org?size=60" alt="Node.js"/>
                </div>
            </div>
        </div>
    </div>
</section>

<!--footer-->
<footer class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="<?php echo url('faq') ?>">FAQ</a></li>
                    <li class="list-inline-item"><a href="<?php echo url('policy') ?>">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="<?php echo url('terms') ?>">Terms & Condition</a></li>
                </ul>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-4 mx-auto text-muted text-center small-xl">
                &copy; 2020 FreeUseBot - All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
