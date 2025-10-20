<?php
if (!isset($this) || !($this instanceof LessonHelper)) {
    die('Access Denied!');
}
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "assets/css/MainMeta.php" ?>
    <title><?= $metadata['title'] ?? $this->getLessonName() ?></title>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/style.css' ?>">
</head>
<body class="CONTENT_BACK_COLOR">

<!-- Header -->
<?php include MAIN_DIR . "src/Header.php" ?>

<!-- Main Content -->
<main class="main_content">

    <!-- Menu -->
    <?php $this->loadSeasonMenu() ?>

    <!-- Lesson Content -->
    <h1 class="md:hidden">توضیحات</h1>
    <div class="content_lessons CONTENT_COLOR">
        <?= $this->loadContent() ?>

        <?php if ($metadata['has_slider'] && !empty($metadata['slider_images'])): ?>
            <swiper-container>
                <?php foreach ($metadata['slider_images'] as $image): ?>
                    <swiper-slide>
                        <img src="<?= $image['src'] ?>"
                             alt="<?= $image['alt'] ?>"
                             loading="lazy">
                    </swiper-slide>
                <?php endforeach; ?>
            </swiper-container>
        <?php endif; ?>
    </div>

    <!-- Quiz & References -->
    <h1 class="md:hidden">منابع و آزمون</h1>
    <div id="referenceQuiz_lessons"
         nameSeason="<?= $this->getSeasonName() ?>"
         nameLesson="<?= $this->getLessonName() ?>">

        <div class="CONTENT_COLOR">
            <!-- References -->
            <?php if(!empty($metadata['references'])): ?>
                <h2>منابع مرتبط:</h2>
                <?php if (!empty($metadata['references_description'])): ?>
                    <p><?= $metadata['references_description'] ?></p>
                <?php endif; ?>
                <?= $this->renderReferences($metadata['references']) ?>
            <?php endif; ?>
            <!-- Exercises -->
            <?php if(!empty($metadata['exercises'])): ?>
                <h2>تمرینات مرتبط:</h2>
                <?= $this->renderExercises($metadata['exercises']) ?>
            <?php endif; ?>
        </div>

        <!-- Quizzes -->
        <div class="CONTENT_COLOR">
            <h2>آزمون:</h2>
            <?= $this->renderQuizzes($metadata['quizzes'] ?? []) ?>
        </div>
    </div>

    <!-- Next Lesson Button -->
    <?php if (isset($metadata['next_lesson'])): ?>
        <?= $this->renderNextLesson($metadata['next_lesson']) ?>
    <?php endif; ?>

</main>


<!-- Scripts -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js'?>"></script>
<script src="<?= MAIN_SERVER . 'assets/js/HeaderFooter.js'?>"></script>
<script>
    $('#<?= $this->getLessonName() ?>').addClass("bg-red-500");
</script>
<script src="<?= MAIN_SERVER . 'assets/js/needLessonsScript.js' ?>"></script>
<?php if (isset($metadata['custom_script'])): ?>
    <script><?= $metadata['custom_script'] ?></script>
<?php endif; ?>

</body>
</html>