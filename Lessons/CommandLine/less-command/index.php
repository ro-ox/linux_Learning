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
        <h1>دستور less</h1>
        <h2>خواندن فایل ها به صورت کوتاه </h2>
        <p>
            دستور less یکی دیگه از دستور های جالب لینوکسه! توی درس قبلی با دستور cat آشنا شدید که فایل رو براتون میخونه. دستور less هم همین
            کار رو میکنه، با این تفاوت که برای فایل های حجیم کاربرد داره! یعنی چی؟ یعنی وقتی یه فایلی رو با less باز میکنید، میتونید
            توی ترمینال بالا، پایین برید و کم کم یه قسمتی از متن رو بخونید.
            <br>
            <b>
            البته این دستور ویژگی های منحصر به فرد خودشم داره، که با چنتاش الان آشنا میشیم. فقط قبل از استفاده، باید بگم که این دستور
            مثل یه دستور دیگست به اسم more که شاید بعدا در موردش صحبت کردیم، ولی فعلا اینو بدونید که شبیه بهم کار میکنن و فرق اساسیشون اینه که
            دستور more صفحه بندی نمیکنه و فقط میتونید توی فایل بالا پایین برید (در کل دستور less کاربردی تره)
            </b>
            <br>
            بزارید استفاده کلیشو این زیر بهتون نشون بدم:
        </p>
        <pre id="Command">
            <code>
                less [option] [path]
                # آپشن همون فلگه
                # ------------------
                # فرض کنید یه فایل 1000 خطی داریم
                less 1000_line.txt
            </code>
        </pre>
        <p>
            خروجی دستور بالا، مثل cat فایل رو برامون باز میکنه!
            با این تفاوت که فقط چند خط اول رو بهمون نشون میده و با جهت نماهای روی کیبورد میتونیم پایین و بالا، چپ و راست بریم.
            همچنین اگه خودتون دستور رو اجرا کنید متوجه میشید که که یه : (دو نقطه) پایین دستور وجود داره
            که اگه q رو تایپ کنید از اجرا دستور خارج میشه.(عبارت های Q و ZZ هم همین کارو میکنن)
            <br>
            جلوی دو نقطه میتونید از این موارد استفاده کنید (چنتاشو مینویسم):
        </p>
        <ul>
            <li>g: با تایپ جی کوچیک، به اول فایل برمیگردید.</li>
            <li>G: با تایپ جی بزرگ، به آخر فایل میرید.</li>
            <li>h(H): با تایپ کارکتر اِچ راهنما دستور براتون باز میشه.</li>
            <li>/Search: اگه یه اسلش بزنید و بعد هرچیزی بنویسید، اون عبارت رو توی فایل براتون پیدا (هایلایت) میکنه.</li>
        </ul>
        <br>
        <p>
            برای شروع هم من یه آپشن (فِلَگ) معرفی میکنم برای این دستور به نام n که مخفف line number عه! یعنی علاوه بر محتویات فایل
            شماره خط رو هم بهتون نشون میده :)
        </p>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>تمرینات مرتبط : </h2>
            <p>
                تمرینتون یکمی سخته، تو ترمینالتون دستور less --help رو وارد کنید و سعی کنید باهاش وَر برید و بفهمید هر آپشن چیکار میکنه.
                همچنین این زیر دوتا لینک گذاشتم برای اطلاعات بیشتر در مورد این دستور:
            </p>
            <ol class="text-center">
                <li><a href="https://www.geeksforgeeks.org/less-command-linux-examples/">less Command</a></li>
                <li><a href="https://www.javatpoint.com/linux-less">less Command 2</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    دستور less دقیقا کارش چیه؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    مشابه دستور less چه دستوری داریم؟
                    <button quiz="2"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('history-command', 'دستور history');
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
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>
</body>
</html>