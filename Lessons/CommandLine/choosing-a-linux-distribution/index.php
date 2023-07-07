<?php
include_once "../../../Constants.php" ;
$name_file = basename(__DIR__);
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <!-- Main All Meta + Tailwind -->
    <?php include MAIN_DIR . "assets/css/MainMeta.php" ?>
    <title><?= $name_file ?></title>
    <!-- Main Style -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/style.css' ?>">
</head>
<body class="CONTENT_BACK_COLOR">
<!-- Start Header -->
<?php include MAIN_DIR . "src/Header.php" ?>
<!-- End Header -->

<!-- Start Main -->
<main class="p-4 text-white text-center grid grid-cols-1 md:grid-cols-5 gap-4">

    <!-- Start Menu -->
    <?php include_once "../menu.php" ?>
    <!-- End Menu -->

    <div class="md:hidden">
        <h1 class="text-2xl">توضیحات</h1>
    </div>
    <div class="md:col-span-4 text-justify CONTENT_COLOR rounded-2xl border-4 border-blue-800 md:max-h-fit text-right py-3 px-5 text-white">
        <h1>انتخاب یه توزیع برای کار</h1>
        <p>
            خب ، توی بخش قبلی یا بهتره بگیم درس قبلی با تاریخچه لینوکس آشنا شدیم ولی یه چیزی رو یادمون رفت بگیم که بهتره اینجا تصحیحش کنیم و اونم
            اینه که لینوکس به خودی خودش یه سیستم عامل نیست و وقتی میگیم لینوکس به هسته سیستم عامل اشاره داریم. حالا بعضیا میان و از این هسته
            استفاده میکنن و انواع مختلف سیستم عامل رو میسازن! برای همین معمولا لینوکس به سیستم عامل مشهوره (ولی یادتون باشه گفتم هسته سیستم عامل لینوکسه ، یعنی ازش به عنوان پایه ایی برای ساخت سیستم عامل استفاده میشه!)
            حالا که تصحیح کردیم گفته های قبلمون رو بیاید یه صحبتی در مورد خود لینوکس داشته باشیم. سیستم لینوکس (چیزی که از لینوکس ساخته شده)
            خودش دارای 3 بخش اصلیه (البته بخش های خیلی زیادی داره اما فعلا اساسی تریناشو میگم تا برسیم به وقتش) :
        </p>
        <ol class="md:mr-10 list-decimal">
            <li>
                هسته لینوکس : همونطوری که بالاتر گفتیم بخش اصلی سیستم عامل همین هسته است و کارشم مدیریت سخت‌افزار و تعامل با سیستمه!
            </li>
            <li>سخت افزار : بلخره یه سیستم عامل باید با یه چیزی اجرا بشه ، و تمامی سخت افزار ها مثل CPU ، حاظفه های جانبی و هرچیز دیگه ایی جزو این دسته است.</li>
            <li>فضای کاربر : همون دسکتاپ خودمون میشه ، بلخره کاربر باید از یه جایی با استفاده از هسته و سخت‌افزار کار خودشو بکنه یا نه؟!</li>
        </ol>
        <p>
            حالا که اساس سیستم عامل رو فهمیدیم باید یه توزیع انتخاب کنیم (توزیع یه سیستم عامل با هسته لینوکسه و تعدادشونم خیلی زیاده!!) و بعد از انتخاب
            اونو نصبش کنیم. ما توزیع های زیادی از لینوکس داریم ، مثل Fedora ، Ubuntu ، centos ، Kali Linux و ... ولی ما که نمیتونیم همشونو توضیح بدیم! پس چنتا از مهم تریناشونو
            توی درس های بعدی معرفی میکنیم و با علاقه خودتون یکی رو انتخاب کنید (البته توجه داشته باشید که بعدا متوجه میشید بعضی از دستورات توی بعضی از توزیع ها متفاوته!)
            <br>
            توجه کنید که برای نصب هر توزیع یه سرچ کوچیک تو نت بزنید آموزش های قوی و قشنگی رو پیدا میکنید ، ماهم قرار نیست نصب لینوکسو اینجا یاد بدیم
            فقط میخوایم توزیعاشو معرفی کنیم و خودتون انتخاب کنید و نصبش کنید و بعد باهم برسیم سر چیزای اصلی تر و سخت تر!!!
        </p>
    </div>

    <!-- Start Next Lesson -->
    <?php
        Next_Lesson('Debian');
    ?>
    <!-- End Next Lesson -->
</main>
<!-- End Main -->

<!-- Jquery File -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
<!-- Header And Footer Script -->
<script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
<!-- Custom Script -->
<script>
    $('#<?=$name_file?>').addClass("bg-red-500");
</script>

</body>
</html>