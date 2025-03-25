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
        <h1>دستور cp</h1>
        <h2>دستور کپی کردن فایل ها</h2>
        <p>
            همونجور که متوجه شدید دستور cp مخفف کلمه copy عه! و چیکار میکنه؟ براتون همه چیزو کپی میکنه. خداییش کنترل سی و کنترل وی هم خوبه ها، اما تو ترمینال یه حال دیگه میده.
            این دستور خیلی ساده است، دستور رو مینوسیم ، آرگومان اولی که بهش پاس میدیم فایل اصلیمونه و آرگومان دومی که بهش میدیم مسیر و اسمیه که میخوایم اونجا کپی بشه.
            برای بهتر متوجه شدن بازم این زیر مینویسم عشق کنید:
        </p>
        <pre id="Command">
            <code>
                cp maintext.txt /home/download/
                # اگه مثل بالا وارد کنید به همون نام توی مسیر کپی میکنه
                cp maintext.txt /home/download/newfile.txt
                # اگه هم مثل بالا بزارید به نامی که شما دوست دارید کپی میکنه
            </code>
        </pre>
        <p>
            حالا کجا این دستور جذاب تر میشه؟ وقتی میخواید چندین فایل با الگو خاص رو کپی کنید!
            فرض کنید تو یه پوشه 600 تا عکس با فرمت jpg دارید و میخواید کپیش کنید تو یه مسیر دیگه، از دستور زیر میتونید استفاده کنید:
        </p>
        <pre id="Command">
            <code>
                cp *.jpg /home/temp/Pic
            </code>
        </pre>
        <p>
            حالا شاید بگید ستاره یعنی چی؟ ستاره یعنی همه چیز! یعنی هرچیزی به هر تعدادی، بعدشم فرمت فایل اومده، پس یعنی هرچیزی که فرمتش jpg بود رو برام انتخاب کن
            و تو مسیری که بهت گفتم کپی کن.
            حالا اگه همین رو برعکس کنیم هم جالب میشه، مثل زیر:
        </p>
        <pre id="Command">
            <code>
                cp jpg.* /home/temp/Pic
            </code>
        </pre>
        <p>
            دستور بالا میاد فقط فایل هایی رو میگیره که اسمشون jpg عه و فرمتشون میتونه هر چیزی باشه! تازه جالب تر هم میشه، مثلا میخواید فایل هایی رو کپی کنید که اولشون ab داره
            برای این کارم از دستور زیر استفاده میکنید:
        </p>
        <pre id="Command">
            <code>
                cp ab*.jpg /home/temp/Pic
            </code>
        </pre>
        <p>
            کنترل سی، کنترل وی، تو خوابشم نمیتونست از این چیزا ببینه!
            <br>
            تازه یه فلگ باحال هم داره، برای زمانی استفاده میشه که شما چنتا پوشه دارید که داخلش چنتا پوشه دیگست و داخل هرکدومش چندین فایل و پوشه دیگه دارید (داخل نیوفولدر 1 ، نیوفولدر 2 و الی آخر (اکثر چیز خوبی تو اینا نبود!))،
            برای همچین کاری از فلگ r استفاده میکنیم که مخفف recursive یا بازگشتیه:
        </p>
        <pre id="Command">
            <code>
                cp -r newFolder1/ /home/temp/Pic
                # تمامی فایل و پوشه های داخل اون فولدر رو به همراه خود فولدر کپی میکنه
            </code>
        </pre>
        <b>شاید بگید ، بدون این فلگ خب همین کارو میکنیم، که باید بگم تست کنید و اگه شد خبر بدید :)</b>
        <br>
        <p>
            حالا ممکنه یچیزی رو کپی کنید یه جایی ولی یه فایل با همون نام وجود داشته باشه، که خب خیلی راحت رونویسی میشه، برای اینکه این اتفاق نیوفته هم میتونید از فلگ i استفاده کنید
            اینجوری قبل از رونویسی ازتون میپرسه که رونویسی کنم یا نه.
        </p>
    </div>

    <!-- Start Reference & Quiz -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons" nameSeason="<?= $name_file_season ?>" nameLesson="<?= $name_file ?>">
        <div class="CONTENT_COLOR">
            <h2>منابع مرتبط : </h2>
            <p>
                منابع تکمیلی هم مث همیشه اینجا گذاشتم :
            </p>
            <ol class="text-center">
                <li><a href="https://phoenixnap.com/kb/cp-command">منبع اولی</a></li>
                <li><a href="https://www.geeksforgeeks.org/cp-command-linux-examples/">منبع دومی</a></li>
                <li><a href="https://www.freecodecamp.org/news/the-linux-cp-command-how-to-copy-files-in-linux/">و منبع سومی</a></li>
            </ol>
        </div>
        <div class="CONTENT_COLOR">
            <h2>آزمون :</h2>
            <ol>
                <li>
                    دستور cp میتونه چندین فایل رو هم کپی کنه؟
                    <button quiz="1"></button>
                </li>
                <hr>
                <li>
                    فلگ r چیکار میکنه؟
                    <button quiz="2"></button>
                </li>
                <hr>
                <li>
                    اگه نخوایم توی کپی کردن ررونویسی اتفاق بیوفته باید چیکار کنیم؟
                    <button quiz="3"></button>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Reference & Quiz -->

    <!-- Start Next Lesson -->
    <?php
    Next_Lesson('OpenSUSE');
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