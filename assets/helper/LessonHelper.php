<?php

class LessonHelper {
    private $lessonPath;
    private $seasonPath;
    private $lessonName;
    private $seasonName;

    public function __construct($lessonDir) {
        $this->lessonPath = $lessonDir;
        $this->seasonPath = dirname($lessonDir);
        $this->lessonName = basename($lessonDir);
        $this->seasonName = basename($this->seasonPath);
    }

    /**
     * Load MetaData
     */
    public function loadMetadata() {
        $metadataFile = $this->lessonPath . '/metadata.php';

        if (file_exists($metadataFile)) {
            return include $metadataFile;
        }

        // Default Value
        return [
            'title' => $this->lessonName,
            'has_slider' => false,
            'slider_images' => [],
            'references' => [],
            'quizzes' => [],
            'answers' => [],
            'next_lesson' => null
        ];
    }

    /**
     * Load Content
     */
    public function loadContent() {
        $contentFile = $this->lessonPath . '/content.php';

        if (file_exists($contentFile)) {
            ob_start();
            include $contentFile;
            return ob_get_clean();
        }

        return '<p>محتوایی یافت نشد!</p>';
    }

    /**
     * Load Menu
     */
    public function loadSeasonMenu() {
        $menuFile = $this->seasonPath . '/menu.php';

        if (file_exists($menuFile)) {
            include $menuFile;
        }
    }

    /**
     * Get Answer Quiz
     */
    public function getQuizAnswer($quizNumber) {
        $quizFile = $this->lessonPath . "/Quiz/{$quizNumber}.txt";

        if (file_exists($quizFile)) {
            return file_get_contents($quizFile);
        }

        return 'پاسخی یافت نشد!';
    }

    /**
     * Rendering
     */
    public function renderReferences($references) {
        if (empty($references)) {
            return '';
        }

        $html = '<ol class="text-center">';
        foreach ($references as $ref) {
            $html .= sprintf(
                '<li><a href="%s"%s>%s</a></li>',
                $ref['url'],
                isset($ref['target']) ? ' target="' . $ref['target'] . '"' : '',
                $ref['title']
            );
        }
        $html .= '</ol>';

        return $html;
    }

    /**
     * Render Quiz
     */
    public function renderQuizzes($quizzes) {
        if (empty($quizzes)) {
            return '';
        }

        $html = '<ol>';
        foreach ($quizzes as $index => $quiz) {
            $quizNum = $index + 1;
            $html .= sprintf(
                '<li>%s<button quiz="%d">مشاهده پاسخ</button></li>',
                $quiz,
                $quizNum
            );

            if ($quizNum < count($quizzes)) {
                $html .= '<hr>';
            }
        }
        $html .= '</ol>';

        return $html;
    }

    /**
     * Next Lesson
     */
    public function renderNextLesson($nextLesson) {
        if (!$nextLesson) {
            return '';
        }

        $url = is_array($nextLesson) ? $nextLesson['url'] : $nextLesson;
        $title = is_array($nextLesson) ? $nextLesson['title'] : 'درس بعدی';
        $isSeason = is_array($nextLesson) && isset($nextLesson['is_season']) && $nextLesson['is_season'];

        if ($isSeason) {
            return sprintf(
                '<a href="../%s" class="md:hidden bg-red-500 hover:bg-green-800 py-1">بعدی: %s</a>',
                $url,
                $title
            );
        }

        return sprintf(
            '<a href="../%s" class="md:hidden LIST_LESSON hover:bg-red-500 py-1">بعدی: %s</a>',
            $url,
            $title
        );
    }

    /**
     * Getters
     */
    public function getLessonName() {
        return $this->lessonName;
    }

    public function getSeasonName() {
        return $this->seasonName;
    }

    public function render() {
        $metadata = $this->loadMetadata();
        include MAIN_DIR . 'templates/lesson-layout.php';
    }
}