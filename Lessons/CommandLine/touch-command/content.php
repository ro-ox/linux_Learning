<h1>دستور touch</h1>
<h2>ساخت فایل</h2>
<p>
    خب خب به یه دستور باحال رسیدیم! تا الان یاد گرفتیم توی مسیرهای مختلف وارد بشیم و فایل های درون مسیرها رو
    ببینیم، اما امروز میخوایم یاد بگیریم چجوری یه فایل بسازیم! قبل از کار با دستور touch بیاید با دستور ls -l چک کنیم چه فایل هایی توی مسیرمونه :
</p>
<pre>
            <code>
                pwd
                home/amirroox/Desktop/NewFolder
                ls -l
                drwxrwxr-x 2 amirroox amirroox 4096 Jul 24 19:41  big
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  maa.txt
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  may.txt
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  my(6th).txt
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  my(7th).txt
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  my.jpg
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  my(copy).jpg
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  my.txt
                -rw-rw-r-- 1 amirroox amirroox 9077 Jul 24 19:05  myy.txt
                drwxrwxr-x 2 amirroox amirroox 4096 Jul 25 15:03  new
            </code>
        </pre>
<p>
    تو قسمت بالا اگه توجه کنید یه تاریخ میبینید که تاریخ ایجاد یا ویرایش اون فایل رو نشون میده! مثلا برای فایل maa.txt تاریخ ایجاد(آخرین ویرایش) برابر با 24 Jul و ساعت 19 و 5 دقیقه است.
    حالا چرا اینو گفتم؟ چون دستور امروز ما دوتا کار میکنه،
    <b>
        اول اینکه میتونید باهاش یه فایل خالی بسازید و دومین کار اینه که میتونید تاریخ فایل رو عوض کنید.
    </b>
    <br>
    <b>
        توجه کنید که به این تاریخ میگن timestamp (مهر زمانی) ، پس از الان اسم درستشو میگیم تا اینکه بگیم تاریخ!
    </b>
    <br>
    خب بریم که با این دستور کار کنیم ، تو دستورات زیر چنتا فایل متفاوت میسازیم :
</p>
<pre>
            <code>
                pwd
                home/amirroox/Desktop
                ls -l
                drwxrwxr-x 4 amirroox amirroox 4096 Jul 25 15:03 NewFolder

                # در زیر یه فایل خالی ایجاد کردیم
                touch newFile
                ls -l
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:14 newFile
                drwxrwxr-x 4 amirroox amirroox 4096 Jul 25 15:03 NewFolder

                # در زیر چنتا فایل رو همزمان میسازیم
                touch ax.jpg new.txt my.pdf
                ls -l
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 ax.jpg
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 my.pdf
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:14 newFile
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 new.txt
                drwxrwxr-x 4 amirroox amirroox 4096 Jul 25 15:03 NewFolder

            </code>
        </pre>
<p>
    خب اگر توجه کنید سمت چپ تاریخ، برای فایل هایی که ایحاد کردیم عدد 0 نوشته شده که حجم فایل رو مشخص میکنه
    پس نتیجه میگیریم که فایل های ما خالی خالی هستن!
    دومین کاری هم که دستور touch انجام میده ، اینه که timestamp فایل هارو عوض میکنه(بدون اینکه به محتواشون دست بزنه!) مثال
    زیر رو یه نگاه بندازید :
</p>
<pre>
            <code>
                ls -l
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 ax.jpg
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 my.pdf
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:14 newFile
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 new.txt
                drwxrwxr-x 4 amirroox amirroox 4096 Jul 25 15:03 NewFolder

                # تاریخ فایل رو دقت کنید
                # دستور تاچ رو 4 دقیقه بعد دوباره زدیم
                touch new.txt
                ls -l
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 ax.jpg
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:16 my.pdf
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:14 newFile
                -rw-rw-r-- 1 amirroox amirroox    0 Jul 25 15:20 new.txt
                drwxrwxr-x 4 amirroox amirroox 4096 Jul 25 15:03 NewFolder
                # توجه کنید که محتویات فایل عوض نمیشن و فقط تاریخ بروز میشه
            </code>
        </pre>