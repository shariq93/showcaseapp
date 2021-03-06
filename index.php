<!doctype html>
<html class="no-js" lang="ar">

<?php
extract($_GET);
if (isset($data)) {
    $vals = explode("-", $data);
    $t = $vals[0];
    $id = $vals[1];
    $url = "omanapp://omanapp/$t/$id";
    // echo $url;die;
    // header("Location: $url");
}

?>
<!-- Mirrored from theme-land.com/sApp/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2020 18:31:36 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>عقارات عمان</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <!--====== Preloader Area Start ======-->
    <!-- <div class="preloader-main">
        <div class="preloader-wapper">
            <svg class="preloader" xmlns="http://www.w3.org/2000/svg" version="1.1" width="600" height="200">
                <defs>
                    <filter id="goo" x="-40%" y="-40%" height="200%" width="400%">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -8" result="goo" />
                    </filter>
                </defs>
                <g filter="url(#goo)">
                    <circle class="dot" cx="50" cy="50" r="25" fill="#178B93" />
                    <circle class="dot" cx="50" cy="50" r="25" fill="#178B93" />
                </g>
            </svg>
            <div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </div> -->

    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">

        <!-- ***** Header Start ***** -->
        <header class="navbar navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" src="assets/img/logo/logoWhite.png" alt="brand-logo">
                    <!-- <img class="navbar-brand-sticky" src="assets/img/logo/logo.png" alt="sticky brand-logo"> -->
                </a>

            </div>
        </header>

        <!-- ***** Header End ***** -->

        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
            <div class="container">
                <div class="clearfix"></div>
                <a href="index.html">
                    <div class="my-logo">
                        <img src="assets/img/logo/logoWhite.png" alt="brand-logo">
                    </div>
                </a>
                <div class="row align-items-center">
                    <!-- Welcome Intro Start -->
                    <div class="col-12 col-md-5 col-lg-6">
                        <!-- Welcome Thumb -->
                        <div class="welcome-thumb mx-auto" data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                            <img src="assets/img/app.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-7 col-lg-6">
                        <div class="welcome-intro">
                            <div class="my-box">
                                <p class="text-white " style='text-align: right'>
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    حمل تطبيق عقارات عمان لمشاهدة الموقع بجودة عالية
                                    <p>
                            </div>
                            <div class="clearfix"></div>
                            <!-- Store Buttons -->
                            <div class="button-group store-buttons d-flex">
                                <a href="https://apps.apple.com/app/id1477121734">
                                    <img src="assets/img/apple2.png" alt="">
                                </a>
                                <a href="https://play.google.com/store/apps/details?id=com.app.omanproperty">
                                    <img src="assets/img/android2.png" alt="">
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <h1 class="text-white" style='text-align: right'>عقارات عمان</h1>
                            <p class="text-white my-4" style='text-align: right'>
                                تطبيق عقارات عمان اول منصة إلكترونية متخصصة بطريقة تعتبر الاولى من نوعها لعرض جميع العقارات (بيع وشراء /تأجير واستئجار ) بجميع الاستخدامات السكنية والتجارية وغيرها ، بحيث يدعم التطبيق الملاحة للموقع كما يمتاز التطبيق بالعديد من الخدمات منها :
                                <Br />
                                خاصية رفع الكروكي او مشاركته من الواتساب بحيث يقوم البرنامج بقرائته وتحديد موقع الأرض في الخارطة مع شكل القطعة وتقسيمات الأراضي والمخططات
                                <Br />
                                خاصية الخارطة وتعتبر الاقوى في السوق العماني عن طريق فتح الخارطة مباشرة وظهور جميع العقارات المعروضه وإظهار التفاصيل مع امكانية فلترة البحث
                                <!-- Store Buttons -->

                                <!-- <span class="d-inline-block text-white fw-3 font-italic mt-3" style="float:right">* متوفر على أجهزة iPhone و iPad وجميع أجهزة Android</span> -->
                        </div>
                    </div>

                </div>
            </div>
            <!-- Shape Bottom -->
            <!-- <div class="shape-bottom">
                <svg viewBox="0 0 1920 310" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="svg replaced-svg">
                    <title>عقارات عمان</title>
                    <desc>عقارات عمان</desc>
                    <defs></defs>
                    <g id="sApp-Landing-Page" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="sApp-v1.0" transform="translate(0.000000, -554.000000)" fill="#FFFFFF">
                            <path d="M-3,551 C186.257589,757.321118 319.044414,856.322454 395.360475,848.004007 C509.834566,835.526337 561.525143,796.329212 637.731734,765.961549 C713.938325,735.593886 816.980646,681.910577 1035.72208,733.065469 C1254.46351,784.220361 1511.54925,678.92359 1539.40808,662.398665 C1567.2669,645.87374 1660.9143,591.478574 1773.19378,597.641868 C1848.04677,601.75073 1901.75645,588.357675 1934.32284,557.462704 L1934.32284,863.183395 L-3,863.183395" id="sApp-v1.0"></path>
                        </g>
                    </g>
                </svg>
            </div> -->
        </section>

        <!-- ***** Download Area Start ***** -->

        <!-- ***** Download Area End ***** -->

        <!--====== Footer Area End ======-->
    </div>


    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap js -->
    <!-- <script src="assets/js/bootstrap/popper.min.js"></script> -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Active js -->
    <script src="assets/js/active.js"></script>
</body>

<script>
    $(document).ready(function() {
        // session() 
        //  getPost()
        // // includeHTML()

        let data = getParameterByName('data')

        if (data) {
            // getPost()
            let [type, id] = data.split('-')
            url = `omanapp://omanapp/${type}/${id}`;
            window.location = url;
            setTimeout(function() {
                window.location = 'http://www.aqoman.com/getapp';
            }, 2000)
        }


        // getParameterByName()




    });
    getPost = async () => {
        url = "omanapp://omanapp/prop/533";
        window.location = url;

        // alert('going')
    }

    function getParameterByName(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }
</script>
<!-- Mirrored from theme-land.com/sApp/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Jul 2020 18:31:56 GMT -->

</html>