<div dir="rtl" style="direction: rtl">

[Main README](./README.md)

# پروژه یادگیری لینوکس 

این پروژه آموزش 0 تا 100 لینوکس به همراه تمرین و منابع مختلفه است. هدف این پروژه ارائه یک راهنمای جامع برای یادگیری دستورات ضروری لینوکس و نحوه استفاده از آن‌ها در پروژه‌های واقعیه.

---

## 🔧 ویژگی‌ها

- بک اند ساده با استفاده از PHP (بدون فریمورک).
- یادگیری دستورات ضروری لینوکس.
- درس های ساختاری برای درک آسون.
- دارای مثال های عملی و توضیحات.
- طراحی واکنشگرا برای دسترسی بهتر.
- استفاده از Tailwind CSS برای استایل.
- مثال های تعاملی برای تمرین دستورات.

---

## 📦 وابستگی ها

چک کنید که حتما ابزارهای زیر نصب شده باشن:

- **PHP**: برای اجرا.
- **Node.js**: برای اجرای اسکریپت های npm.
- **Composer**: برای مدیریت وابستگی های PHP.
- **Tailwind CSS**: برای استایل فرانت.

---

## 📁 ساختار دایرکتوری

</div>

```
.
├── Lessons/                            # شامل همه درس ها
    .
    ├── Lessons/GettingStart/           # پوشه برای بخش شروع به کار
    ├── Lessons/CommandLine/            # پوشه برای بخش خط فرمان
    └── ....                            # پوشه برای بخشای دیگه
├── templates/                          # قالب ها
    .
    ├── templateLesson                  # این فایل را برای هر درس کپی کنید برای ویرایش
    └── lesson-layout.php               # قالب اصلی برای تولید هر درس
├── Constants.php                       # ثابت های برنامه
├── assets/                             # فایل های جی اس و سی اس اس و غیره
├── src/                                # اجزای ثابت هدر و فوتر
├── package.json                        # npm dependencies and scripts
├── tailwind.config.js                  # Tailwind CSS configuration file
├── composer.json                       # PHP dependencies and autoloading
├── composer.lock                       # Locked versions of PHP dependencies
├── index.php                           # نقطه ورودی برنامه
├── .gitignore                          # Git ignore file
├── README_fa.md                        # مستندات فارسی پروژه (همین فایل)
└── README.md                           # مستندات پروژه
```

<div dir="rtl" style="direction: rtl">

# ساختار درس ها

</div>

```
.
├── Lessons/GettingStart/                                   # پوشه برای درس های شروع به کار
    .
    ├── Lessons/GettingStart/History                        # پوشه برای درس 1
        .
        ├── Lessons/GettingStart/index.php                  # سازنده اصلی
        ├── Lessons/GettingStart/content.php                # محتوای اصلی
        ├── Lessons/GettingStart/metadata.php               # متادیتاهای مورد نیاز هر درس
        └── Lessons/GettingStart/Quiz                       # پوشه پاسخ ها
            .
            ├── Lessons/GettingStart/Quiz/1.txt             # پاسخ سوال اول
            ├── Lessons/GettingStart/Quiz/2.txt             # پاسخ سوال دوم
            └── ...                                         # پاسخ بقیه سوالا
    ├── Lessons/GettingStart/ArchLinux                      # پوشه برای درس 2
    └── ....                                                # پوشه برای بقیه درس ها
```

<div dir="rtl" style="direction: rtl">

---

## 🚀 نحوه اضافه کردن درس

#### مراحل پایه:
1. مخزن را کلون کنید.
2. به پوشه `Lessons` برید.
3. پوشه مورد نظرتو بسازید یا فقط واردش بشید (مثال: GettingStart).
4. پوشه درس موردنظرتو بسیازید یا واردش بشید (مثال: History).
5. محتوای اصلی رو در `content.php` اضافه کنید و پاسخ‌ها را در دایرکتوری `Quiz` قرار بدید.
6. برای ویرایش تمرینات، منابع، آزمون ها و متادیتاها، فایل `metadata.php` را ویرایش کنید.
7. تغییرات خودتنو کامیت و پوش کنید.

#### 🧠 نکته:
**برای اضافه کردن یک درس (بخش) جدید، محتوای پوشه `templateLesson` در پوشه `templates` را کپی کنید و بعدش محتوای `content.php` و `metadata.php` رو درست کنید. همچنین پاسخ‌ها در دایرکتوری `Quiz` به صورت متن ذخیره میشن.**

</div>