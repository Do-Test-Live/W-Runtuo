<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <!-- Page Title -->
    <title>潤拓財務有限公司</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
          integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/javascript-plugins-bundle.css" rel="stylesheet"/>

    <!-- CSS | menuzord megamenu skins -->
    <link href="js/menuzord/css/menuzord.css" rel="stylesheet"/>

    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>

    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/javascript-plugins-bundle.js"></script>
    <script src="js/menuzord/js/menuzord.js"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="js/revolution-slider/css/rs6.css">
    <link rel="stylesheet" type="text/css" href="js/revolution-slider/extra-rev-slider1.css">
    <!-- REVOLUTION LAYERS STYLES -->

    <!-- REVOLUTION JS FILES -->
    <script src="js/revolution-slider/js/revolution.tools.min.js"></script>
    <script src="js/revolution-slider/js/rs6.min.js"></script>
    <script src="js/revolution-slider/extra-rev-slider1.js"></script>

    <script type="text/javascript">
        function calculate() {
            let rate = document.getElementById('monthly_flat').value;
            if (parseInt(rate) === 0) {
                rate = 2.8;
            }
            let a = document.getElementById('loan_amount').value;
            let b = document.getElementById('repayment_period').value;
            let c = parseInt(a) * (rate / 100);
            c = c + parseInt(a) / b;
            c = Math.round(c);
            document.getElementById('reference_repayment_amount').value = c;
        }
    </script>


</head>
<body class="tm-container-1300px has-side-panel side-panel-right tm-boxed-layout layer-overlay overlay-dark-9"
      data-tm-bg-img="images/bg/bg2.jpg">
<div class="side-panel-body-overlay"></div>
<div class="clearfix">
    <!-- Header -->
    <header id="header" class="header header-layout-type-header-2rows navbar-scrolltofixed">
        <div class="header-nav tm-enable-navbar-hide-on-scroll">
            <div class="header-nav-wrapper">
                <div class="menuzord-container header-nav-container">
                    <div class="container position-relative">
                        <div class="row header-nav-col-row">
                            <div class="col-sm-auto align-self-center">
                                <a class="menuzord-brand site-brand" href="index.html">
                                    <img class="logo-default logo-1x" src="images/runtao_logo.png" alt="Logo">
                                    <img class="logo-default logo-2x retina" src="images/runtao_logo.png" alt="Logo">
                                </a>
                            </div>
                            <div class="col-sm-auto ms-auto pr-0 align-self-center">
                                <nav id="top-primary-nav" class="menuzord green" data-effect="fade"
                                     data-animation="none" data-align="right">
                                    <ul id="main-nav" class="menuzord-menu onepage-nav">
                                        <li><a href="index.html#company-profile">公司簡介</a></li>
                                        <li><a href="application-process.php">申請流程</a></li>
                                        <li><a href="apply.php">即時申請</a></li>
                                        <li><a href="faq.php">常見問題</a></li>
                                        <li><a href="index.html#contact">聯絡方法</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="row d-block d-xl-none">
                            <div class="col-12">
                                <nav id="top-primary-nav-clone"
                                     class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                     data-effect="slide" data-animation="none" data-align="right">
                                    <ul id="main-nav-clone"
                                        class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="header-top desktop ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                        <div class="header-mid-column3-container">
                            <div class="row justify-content-md-center">
                                <div class="col-md-auto element text-center text-md-start">
                                    <div class="contact-info-box big-icon">
                                        <div class="left-thumb"><a href="tel:(123)456-78-90"> <i
                                                        class="flaticon-contact-044-call-1 font-icon  sm-display-block"></i>
                                            </a></div>
                                        <div class="media-body">
                                            <h5 class="title">幫到手熱線 </h5>
                                            <div class="subtitle"><a href="tel:(123)456-78-90">+852 2628-5678</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto element text-center text-md-start">
                                    <div class="contact-info-box big-icon">
                                        <div class="left-thumb"><a href="mailto:info@runtuo.hk"> <i
                                                        class="flaticon-contact-043-email-1 font-icon  sm-display-block"></i>
                                            </a></div>
                                        <div class="media-body">
                                            <h5 class="title">幫到手電郵</h5>
                                            <div class="subtitle"><a href="mailto:info@example.com">info@runtuo.hk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto element text-center text-md-start">
                                    <div class="contact-info-box big-icon">
                                        <div class="left-thumb"><a href="#"> <i
                                                        class="flaticon-contact-025-world font-icon  sm-display-block"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="title">幫到手時間</h5>
                                            <div class="subtitle">星期一至五: 10:00-19:00; 六: 10:00-14:00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                        <div class="element pt-0 pb-0 mb-sm-20">
                            <a href="apply.php"
                               class="btn btn-theme-colored2 btn-flat btn-sm ajaxload-popup">即時申請</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: page title -->
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
            <div class="container pt-100 pb-100">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">申請流程</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: home Start -->
        <section id="home">
            <div class="container pt-5 pb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8 m-auto">
                            <div class="col-12 mb-5">
                                <div class="card" style="border-radius: 30px;font-weight:bold">
                                    <div class="card-body pb-4" style="background: #3dabe3;color: #ffffff;border-radius: 30px">
                                        <h5 class="card-title text-center">客戶可經由以下方式向本公司提交申請</h5>
                                        <div class="row">
                                            <div class="col-4">
                                                <h5 class="card-title text-center text-white">電話申請</h5>
                                                <p class="card-text text-center text-white">
                                                    <small>
                                                        專人服務熱線<br/>
                                                        +852 2628-5678
                                                    </small>
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <a href="apply.php">
                                                    <h5 class="card-title text-center text-white">網上申請</h5>
                                                    <p class="card-text text-center text-white">
                                                         <small>
                                                            即時網上申請<br/>
                                                按此進入
                                                        </small>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="card-title text-center text-white">親臨本公司</h5>
                                                <p class="card-text text-center text-white">
                                                     <small>
                                                        旺角 九龍行<br/>
                                                        16樓 1603室
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 m-auto">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="card" style="border-radius: 30px;">
                                        <div class="card-body pt-5 pb-4" style="background: #00284f;color: #ffffff;border-radius: 30px">
                                            <h4 class="d-flex justify-content-center align-items-center"
                                                style="height: 85px;width: 85px;background: #3dabe3;border-radius: 50%;margin-top: -68px;margin-left: -45px;">
                                                1
                                            </h4>
                                            <h5 class="card-title text-center" style="margin-top: -45px;color: white">提供申請表及所需文件</h5>
                                            <p class="card-text text-center">
                                                住址証明（銀行月結單 /水電煤月結單）<br/>
                                                工作証明（糧單 / 稅單 /MPF証明文件）<br/>
                                                註：以上最近三個月之內之文件
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <h1 class="text-center"><i class="fa-solid fa-arrow-down"></i></h1>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="border-radius: 30px;">
                                        <div class="card-body pt-5 pb-4" style="background: #00284f;color: #ffffff;border-radius: 30px">
                                            <h4 class="d-flex justify-content-center align-items-center"
                                                style="height: 85px;width: 85px;background: #3dabe3;border-radius: 50%;margin-top: -68px;margin-left: -45px;">
                                                2
                                            </h4>
                                            <h5 class="card-title text-center" style="margin-top: -45px;color: white">貸款審批</h5>
                                            <p class="card-text text-center">
                                                我們會有專人為你審核貸款文件，<br/>
                                                一般會在10-15分鐘內<br/>
                                                完成審核結果並會盡快與你聯絡。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <h1 class="text-center"><i class="fa-solid fa-arrow-down"></i></h1>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="card" style="border-radius: 30px;">
                                        <div class="card-body pt-5 pb-4" style="background: #00284f;color: #ffffff;border-radius: 30px">
                                            <h4 class="d-flex justify-content-center align-items-center"
                                                style="height: 85px;width: 85px;background: #3dabe3;border-radius: 50%;margin-top: -68px;margin-left: -45px;">
                                                3
                                            </h4>
                                            <h5 class="card-title text-center" style="margin-top: -45px;color: white">簽署貸款協議</h5>
                                            <p class="card-text text-center">
                                                於辦公時間到我們門店簽署貸款協議，並即時<br/>
                                                提取現金。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: home End -->
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-tm-bg-img="images/footer-bg.png">
        <div class="footer-widget-area">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row pt-20 pb-20">
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-center text-xl-start text-lg-start text-md-start mb-sm-15">
                                <img src="images/runtao_logo-white.png" alt="" class="img-fluid" style="max-width: 200px;">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-center text-xl-end text-lg-end text-md-end">
                                潤拓財務有限公司 :
                                <a href="index.html#company-profile" style="text-decoration: none;color: #91abc4">公司簡介</a> |
                                <a href="application-process.php" style="text-decoration: none;color: #91abc4">申請流程</a> |
                                <a href="apply.php" style="text-decoration: none;color: #91abc4">即時申請</a> |
                                <a href="faq.php" style="text-decoration: none;color: #91abc4">常見問題</a> |
                                <a href="index.html#contact" style="text-decoration: none;color: #91abc4">聯絡方法</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>


</body>


</html>

