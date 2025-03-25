<?php
include_once "../../../Constants.php" ;
$name_file = basename(__DIR__); /* Name This Lesson */
$name_file_season = basename(dirname( __DIR__)); /* Name This Season */
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
<main class="main_content">

    <!-- Start Menu -->
    <?php include_once "../menu1.php" ?>
    <!-- End Menu -->

    <h1 class="md:hidden">توضیحات</h1>
    <div class="content_lessons CONTENT_COLOR">
        <h1>دستور history</h1>
        <h2>نمایش تاریخچه دستورات شما</h2>
        <p>
            تا حالا خیلی از دستورات رو باهمدیگه کار کردیم و من ینفر که لذت بردم (امیدوارم شما هم برده باشید)
            اما یکی از دستورات پر کاربرد توی لینوکس دستور history که همونطور که از اسمش پیداست تاریخچه دستوراتی که قبلا زدید رو بهتون میده.
            <br>
            <b>توجه داشته باشید که حتی اگه logout یا shutdown هم کنید، دستورات باقی میمونن و میتونید ازشون استفاده کنید</b>
            <br>
            من این زیر دستور رو وارد میکنم و خروجی رو هم بهتون نشون میدم:
        </p>
        <pre id="Command">
            <code>
                history
            </code>
        </pre>
        خروجی:
        <pre id="Command">
            <code>
                1  exit
                2  sudo apt install figlet lolcat
                3  clear
                4  apt install gedit
                5  gedit .zshrc
                6  exit
            </code>
        </pre>
        <p>
            اینجوری اگر چیزی رو اشتباه اجرا کرده باشید یا کدی رو زده باشید که یادتون نیاد، خیلی راحت میتونید دوباره ازش استفاده کنید.
            حالا چجوری میشه ازش استفاده کرد؟ چنتا روش خیلی ساده داره
            اولین روش که عشقمونه ، کپی پیسته! یعنی دستور رو سلکت میکنیم و کپیش میکنیم و دوباره توی ترمینال پیستش میکنیم و فکر نمیکنم این بخش نیاز به آموزش داشته باشه!
            <br>
            قبل از اینکه روش بعدی رو بگم یه دستور دیگه هم بهتون بگم:
        </p>
        <pre id="Command">
            <code>
                !!
            </code>
        </pre>
        <p>
            دستور بالا میاد و آخرین دستوری که وارد کردید رو اجرا میکنه
            و چون آخرین دستوری که وارد کردیم، دستور history بود، پس توی ترمینال این دستور رو به ما نشون میده.
            <br>
            اگر توجه کرده باشید ، وقتی دستور رو اجرا کردیم، بغل هر دستور یه عدد زده، ما با استفاده از اون اعداد هم میتونیم دستور خودمون رو اجرا کنیم، مثلا توی مثال بالا میخوام دستور clear رو دوباره اجرا کنم،
            عددی که بغلش نوشته شده 3 عه پس به شکل زیر میتونم اجراش کنم:
        </p>
        <pre id="Command">
            <code>
                !3
                # اول یه علامت تعجب و بغلش عددش که داخل هیستوری بود
            </code>
        </pre>
        <p>
            حالا که دستور clear رو هم دیدیم ، بهتون بگم که این دستورم ترمینال رو براتون پاک میکنه (اگه خیلی اسکرول خورده باشه، تمام اسکرول هارو پاک میکنه، که عالیه!)
            <br>
            یه روش دیگه هم داریم که میتونیم از اون هم استفاده کنیم، اگه فلش های بالا پایین کیبورد رو هم بزنید، به دستورات قبلی و بعدی میرسید که دقیقا از روی همون history خونده میشه!
            <br>
            حالا که تا اینجا اومدیم یه دستور ترکیبی هم بهتون میگم، اگه ctrl + R رو فشار بدید هم میتونید توی تاریخچه سرچ کنید (هرچیزی تایپ کنید ، داخل history میگرده و مشابه اون رو میاره و اگه یبار دیگه ctrl + R رو بزنید مورد مشابه بعدی رو براتون پیدا میکنه)
        </p>
        <b>
            تا یادم نرفته اینم بگم که اگه روی کیبورد Tab رو بزنید، دستور رو براتون کامل میکنه، مثلا اگر بنویسید ex و تب رو بزنید، چون داخل
            history دستور exit رو داشتیم ، این دستور رو برامون میاره.
        </b>
        <br>
        <p>
            آه، بازم یه چیز دیگه یادم اومد بگم و خالی از لطف نیست، اگه دستور هیستوری رو با فلگ c (حرف سی کوچیک) استفاده کنید، تاریخچه رو براتون پاک میکنه. و بد نیست خودتون به هلپش نگاه کنید.
        </p>

    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                بازم این زیر میتونید منابع مرتبط رو دنبال کنید :
            </p>
            <ol class="text-center">
                <li><a href="https://www.geeksforgeeks.org/history-command-in-linux-with-examples/">منبع اول</a></li>
                <li><a href="https://opensource.com/article/18/6/history-command">منبع دوم</a></li>
            </ol>
            <p>
                خودتون اگه سرچ کنید یا از دستور help استفاده کنید میتونه خیلی راهنمای خوبی باشه!
            </p>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    کار دقیق هیستوری چیه؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    چجوری میتونی یه دستور خاص رو توی هیستوری اجرا کنی؟
                    <button quiz="2"></button>
                </li>
                <hr>
                <li>
                    اگه بخوایم داخل هیستوری بگردیم چی کار کنیم؟
                    <button quiz="3"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('cp-command', 'دستور cp');
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
    $('body,html').animate({
        scrollTop: $('#end_menu').offset().top
    }, 800);
</script>
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>

</body>
</html>