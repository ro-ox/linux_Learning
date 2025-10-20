<h1>دستور file</h1>
<h2>بررسی نوع فایل</h2>
<p>
    یه دستور خیلی خوب و جذاب داریم به نام file که کارش اینه بهتون فرمت و نوع فایل رو بگه! مثلا اگه یه فایل pdf داشته باشید
    با این دستور متوجه میشید که این فایل واقعا pdf هست یا نه! توی درس قبلی با دستور touch آشنا شدید و اگه واقعا تمرین کرده باشید
    میدونید که اگه یه فایل text.jpg بسازید ، شاید فرمتش رو رعایت کرده باشید اما واقعا یه عکس تولید نکردید!
    <br>
    برای همین دستور file بهتون کمک میکنه که فرمت واقعی فایل هارو شناسایی کنید، بزارید این زیر یه مثال بزنم :
</p>
<pre id="Command">
            <code>
                touch text.txt
                file text.txt
                text.txt: empty
                # میتونید ببینید که وقتی یه فایل خالی ایجاد میکنیم
                # نوع فایل هم خالی حساب میشه
                touch jojo.jpg
                file jojo.jpg
                jojo.jpg: empty
            </code>
        </pre>
<p>
    حالا ما رفتیم چنتا فایل واقعی پیدا کردیم! مثلا 2 عکس دانلود کردیم و یدونه pdf ، حالا خروجی دستور زیر رو ببینید :
</p>
<pre>
            <code>
                ls
                hand.avif
                hello-world.pdf
                v.jpg

                file v.jpg
                v.jpg: JPEG image data, JFIF standard 1.01, resolution (DPI),
                density 72x72, segment length 16, Exif Standard:
                [TIFF image data, little-endian, direntries=2,
                copyright=Rawpixel Ltd.],
                progressive, precision 8, 800x533, components 3

                file hello-world.pdf
                hello-world.pdf: PDF document, version 1.4, 1 pages

                file hand.avif
                hand.avif: ISO Media, AVIF Image
            </code>
        </pre>
<b>
    میبینید که دستور file علاوه بر نوع فرمت فایل، یه اطلاعات دیگه هم بهتون میده که بدردتون میخوره!
    مثلا برای pdf بهتون میگخ چند صفحه است و برای jpg مشخصات کامل عکس و اندازه رو میده(که واقعا خیلی باحاله!)
</b>