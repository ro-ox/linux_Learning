<?php
include_once "../../../Constants.php";
include_once MAIN_DIR . "assets/helper/LessonHelper.php";

$lesson = new LessonHelper(__DIR__);
$lesson->render();