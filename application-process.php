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
    <?php require_once 'include/header.php'; ?>

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
                                                <h5 class="card-title text-center">電話申請</h5>
                                                <p class="card-text text-center text-white">
                                                    <small>
                                                        專人服務熱線<br/>
                                                        +852 2628-5678
                                                    </small>
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <a href="apply.php">
                                                    <h5 class="card-title text-center">網上申請</h5>
                                                    <p class="card-text text-center text-white">
                                                         <small>
                                                            即時網上申請<br/>
                                                            按此進入
                                                        </small>
                                                    </p>
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="card-title text-center">親臨本公司</h5>
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
                                                一般會在半<br/>
                                                至一小時內完成審核結果並會盡快與你聯絡。
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
    <?php require_once 'include/footer.php'; ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>


</body>


</html>

