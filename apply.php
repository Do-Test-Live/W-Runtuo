<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
            if (isFinite(c)) {
                document.getElementById('reference_repayment_amount').value = c;
            }
        }
    </script>

    <style>
        /* This is to float the social incons to the right */
        .collapse-social-icons {
            position: relative;
            float: right;
            margin-right: 10px;
        }

        /* This is to hide the "new" set of icons on big screens */
        @media only screen and (min-width: 767px) {
            .collapse-social-icons {
                display:none !important;
            }
        }

        /* This is to hide the "old" set of icons on small screens */
        @media only screen and (max-width: 767px) {
            .collapse-social-icons-dropdown {
                display:none !important;
            }
        }

        .col-4{
            padding: 3px !important;
        }
    </style>
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
        <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg5.jpg">
            <div class="container pt-100 pb-100">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">即時申請</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                                                   placeholder="K123456(7)" required>
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
                                            <a href="apply.php" class="btn btn-theme-colored2 d-grid w-100">重置</a>
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
    <?php require_once 'include/footer.php'; ?>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>


</body>


</html>
