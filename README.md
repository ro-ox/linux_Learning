[نسخه فارسی مستندات](./README_fa.md)

# Linux Learning Project

This project provides educational content about various Linux command-line commands. Each lesson is structured to explain a specific command, its usage, and examples.

---

## 🔧 Features

- php pure backend for serving lessons (Without framework - Simple).
- Learn about essential Linux commands.
- Structured lessons for easy understanding.
- Includes practical examples and explanations.
- Responsive design for better accessibility.
- Uses Tailwind CSS for styling.
- Organized project structure for easy navigation.
- Supports multiple lessons on different commands.
- Interactive examples to practice commands.

---

## 📦 Dependencies

Make sure the following tools are installed:

- **PHP**: For running the backend logic.
- **Node.js**: For running npm scripts.
- **npm**: For managing frontend dependencies.
- **Composer**: For managing PHP dependencies.
- **Tailwind CSS**: For styling the frontend.

---

## 📁 Directory Structure

```
.
├── Lessons/                            # Includes relevant lessons
    .
    ├── Lessons/GettingStart/           # Directory for Getting Start part
    ├── Lessons/CommandLine/            # Directory for command-line-related part
    └── ....                            # Directory for other part
├── templates/                          # Templates
    .
    ├── templateLesson                  # Copy this file for each lesson to edit
    └── lesson-layout.php               # Main template for generating each lesson
├── Constants.php                       # Global constants used across the project
├── assets/                             # Shared assets like CSS, JavaScript, and images
├── src/                                # Reusable components like header and footer
├── package.json                        # npm dependencies and scripts
├── tailwind.config.js                  # Tailwind CSS configuration file
├── composer.json                       # PHP dependencies and autoloading
├── composer.lock                       # Locked versions of PHP dependencies
├── index.php                           # Main entry point for the application
├── .gitignore                          # Git ignore file
├── README_fa.md                        # Persian project documentation
└──  README.md                          # Project documentation (This File)
```

## 📁 Lessons Structure
```
.
├── Lessons/GettingStart/                                   # Directory for Getting Start lessons
    .
    ├── Lessons/GettingStart/History                        # Directory for lesson 1
        .
        ├── Lessons/GettingStart/index.php                  # Constructor
        ├── Lessons/GettingStart/content.php                # Main Content
        ├── Lessons/GettingStart/metadata.php               # Required metadata for each lesson
        └── Lessons/GettingStart/Quiz                       # answer content
            .
            ├── Lessons/GettingStart/Quiz/1.txt             # q1 answer content
            ├── Lessons/GettingStart/Quiz/2.txt             # q1 answer content
            └── ...                                         # other answer content
    ├── Lessons/GettingStart/ArchLinux                      # Directory for lesson 2
    └── ....                                                # Directory for other lessons
```

---

## 🚀 How to Add Lesson

#### Basic:
1. Clone the repository
2. cd to `Lessons` Directory
3. Create or navigate to the desired part (example: GettingStart)
4. Create or navigate to the lesson directory (example: History)
5. Add the main content in `content.php` and place the answers in the `Quiz` directory.
6. Edit the `metadata.php` file to edit exercises, resources, tests, and metadata.
7. Commit and push your changes.

#### 🧠 Tip:
**To add a new lesson (section), copy the contents of the `templateLesson` folder into the `templates` folder, then create the contents of `content.php` and `metadata.php`. Also, the answers are saved as text in the `Quiz` directory.**