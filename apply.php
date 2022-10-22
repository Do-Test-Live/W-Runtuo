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
    <header id="header" class="header header-layout-type-header-2rows">
        <div class="header-top desktop">
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
                                            <h5 class="title">电话</h5>
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
                                            <h5 class="title">给我们发电子邮件</h5>
                                            <div class="subtitle"><a href="mailto:info@example.com">info@runtuo.hk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-auto element text-center text-md-start">
                                    <div class="contact-info-box big-icon">
                                        <div class="left-thumb"><a href="#"> <i
                                                    class="flaticon-contact-025-world font-icon  sm-display-block"></i> </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="title">帮助时间</h5>
                                            <div class="subtitle">星期一到星期五: 10:00-19:00 　　六: 10:00-14:00</div>
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
        <div class="header-nav tm-enable-navbar-hide-on-scroll">
            <div class="header-nav-wrapper navbar-scrolltofixed">
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
                                        <li><a href="#">公司簡介</a></li>
                                        <li><a href="#">申請流程</a></li>
                                        <li><a href="apply.php">即時申請</a></li>
                                        <li><a href="faq.php">常見問題</a></li>
                                        <li><a href="#">聯絡方法</a></li>
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
    </header>

    <!-- Start main-content -->
    <div class="main-content-area">
        <!-- Section: home Start -->
        <section id="home">
            <div class="container pt-5 pb-5">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form method="post" action="insert.php">
                                    <h1 class="mb-3">即時申請</h1>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">中文姓名</label>
                                            <input type="text" class="form-control" name="c_name" placeholder="黃金強"
                                                   required>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label">英文姓名(須與身份証相同)</label>
                                            <input type="text" class="form-control" name="e_name"
                                                   placeholder="Wong Kam Keung" required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">身份証號碼 </label>
                                            <input type="text" class="form-control" name="identy_num"
                                                   placeholder="A1234xx(x)" required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">性別 </label>
                                            <select class="form-select" name="gender" required>
                                                <option selected>Choose..</option>
                                                <option value="男">男</option>
                                                <option value="女">女</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">出生日期 (YYYY-MM-DD) </label>
                                            <input type="text" class="form-control" name="dob" placeholder="1980-12-20"
                                                   required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">聯絡電話</label>
                                            <input type="text" class="form-control" name="contact_num"
                                                   placeholder="98880888" required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">出糧方式</label>
                                            <select class="form-select" name="pay_method" required>
                                                <option selected>Choose..</option>
                                                <option value="Automatic transfer">自動轉賬</option>
                                                <option value="Cheque">支票</option>
                                                <option value="Cash">現金</option>
                                                <option value="No income">沒有收入</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">申請人</label>
                                            <select class="form-select" name="applicant_type" required>
                                                <option selected>Choose..</option>
                                                <option value="New application client">新申請客戶</option>
                                                <option value="Existing customers">現有客戶</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">貸款額度 (HK$)</label>
                                            <input type="number" class="form-control" name="loan_amount"
                                                   placeholder="100000" required>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">其他資料</label>
                                            <textarea class="form-control" rows="3" name="other_info"
                                                      placeholder="如指定聯絡時間" required></textarea>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label">什麼時間最方便聯絡: </label>
                                            <select class="form-select" name="contact_time" required>
                                                <option selected>Choose..</option>
                                                <option value="上午 10 至 12 時">上午 10 至 12 時</option>
                                                <option value="下午 12 至 2 時">下午 12 至 2 時</option>
                                                <option value="下午 2 至 6 時">下午 2 至 6 時</option>
                                                <option value="晚上 6 至 10 時">晚上 6 至 10 時</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1"
                                                       required>
                                                <label class="form-check-label" for="exampleCheck1">
                                                    本人申請時確認年滿18歲或以上，同意放債人條例及個人資料收集聲明。
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-theme-colored1 d-grid w-100"
                                                    name="loanApply">立即申請
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <a href="index.php" class="btn btn-theme-colored2 d-grid w-100">重置</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="card bg-theme-colored1 text-center p-30 mb-0 text-white">
                                    <div>
                                        <h1>理財計算機</h1>
                                        <p>
                                            我們可即使為你計算出還款額度。
                                        </p>
                                        <p>
                                            我們以月平息計算。定息定本，一目了然！
                                        </p>
                                    </div>
                                    <form>
                                        <div class="mb-3">
                                            <label for="loan_amount" class="form-label">貸款額 <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="loan_amount"
                                                   placeholder="HK$10,000" onkeyup="calculate()"
                                                   onkeydown="calculate()">
                                        </div>
                                        <div class="mb-3">
                                            <label for="repayment_period" class="form-label">還款期數 <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="repayment_period" min="4"
                                                   max="24"
                                                   onkeyup="calculate()" onkeydown="calculate()" placeholder="12">
                                        </div>
                                        <div class="mb-3">
                                            <label for="monthly_flat" class="form-label">月平息 %</label>
                                            <input type="text" class="form-control" id="monthly_flat"
                                                   onkeyup="calculate()"
                                                   onkeydown="calculate()" placeholder="2.8">
                                        </div>
                                        <div class="mb-3">
                                            <label for="repayment_period" class="form-label">參考還款額</label>
                                            <input type="text" class="form-control" id="reference_repayment_amount"
                                                   placeholder="HK$1113" readonly>
                                            <p>
                                                <span class="text-danger">*</span> 貸款計算機所顯示之利率僅供參考，一切貸款申請利率均以最後批核為準。
                                            </p>
                                        </div>
                                    </form>
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
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 text-center text-sm-start mb-md-40">
                        <img src="images/runtao_logo-white.png" alt="">
                    </div>
                    <div class="col-lg-8 co-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-contact-box d-flex align-items-center mb-sm-30">
                                    <div class="icon"><i class="fa fa-phone"></i></div>
                                    <div class="contact-info">
                                        <p class="text-theme-colored1 text">電話</p>
                                        <h6 class="phone-number">2628-5678</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-contact-box d-flex align-items-center mb-sm-30">
                                    <div class="icon"><i class="fa fa-envelope"></i></div>
                                    <div class="contact-info">
                                        <p class="text-theme-colored1 text">電郵</p>
                                        <h6 class="phone-number">info@runtuo.hk</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="footer-contact-box d-flex align-items-center">
                                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                                    <div class="contact-info">
                                        <p class="text-theme-colored1 text">地址</p>
                                        <h6 class="phone-number">九龍旺角彌敦道555號九龍行16樓1603室</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget-area">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row pt-20 pb-20">
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-center text-xl-start text-lg-start text-md-start mb-sm-15">
                                © 2021 Runtuo. All Rights Reserved.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-paragraph text-center text-xl-end text-lg-end text-md-end">
                                潤拓財務有限公司 : 公司簡介 | 申請流程 | 即時申請 | 常見問題 | 聯絡方法
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
