<h1>دستور pwd</h1>
<h2>(Print Working Directory) - چاپ مسیر حال حاضر</h2>
<p>
    همه چیز توی لینوکس یه فایله! هرچقدر جلوتر بریم با این مفهوم بیشتر آشنا میشید، ولی فعلا فقط در نظر بگیرید که دنیای لینوکس
    دنیای فایل هاست! توی ویندوز وقتی مای کامپیوتر رو باز میکنید درایوهاتون رو میتونید ببنید و هرکدوم رو که باز کنید
    پوشه بندی های خودشون رو دارن؛ توی لینوکس هم همین شکلیه با این تفاوت که فقط درایو های ذخیره سازی وجود نداره و یکمی درایو بندی ها پیچیده ترن!
    <br>
    من قرار نیست فعلا در مورد پوشه بندی ها صحبت کنم ، اما موارد پایه رو میگم تا در جریان باشید!
    <br>
    توی ویندوز، مای کامپیوتر اولین دایرکتوی (پوشه ریشه (root Directory)) برای شماست ، اما توی لینوکس اولین دایرکتوری رو با / مشخص میکنن! و این دایرکتوی فایل ها و پوشه های زیادی داره
    که من چنتاش رو این زیر گذاشتم:
</p>
<pre class="language-treeview">
            <code>
                / (Root)/
                    bin/
                        x11/
                        7z.txt
                        apt.bash
                        apt-clone.py
                        ...
                    boot/
                        .../
                        ...
                    dev/
                        .../
                        ...
                    etc/
                        .../
                        ...
                    home/
                        amirroox (Users)/
                            Documents/
                            Desktops/
                            Downloads/
                            Music/
                    lib/
                        .../
                            .../
                            .../
                        .../
                        ...
                    .../
                    usr/
                        .../
                            .../
                            ...
                        .../
                    var/
                        .../
                        .../
                    .../
            </code>
        </pre>
<p>
    پوشه های بالا چنتا از پوشه های داخل ریشه (root) هستن، و از این به بعد به مسیر هر فایل میگیم Path.
    <br>
    مثلا تو قسمت بالا یه پوشه به نام home داریم که داخلش یه پوشه دیگه به نام amirroox هست و داخل اون هم یه پوشه به نام Download ، حالا اگه بریم داخل پوشه Download
    مسیر ما یا همون Path چی میشه؟ آفرین میشه home/amirroox/Download .
    <br>
    حالا همه اینارو گفتیم که به چی برسیم؟ ما دستوری داریم به نام pwd که این دستور مسیر شمارو نشون میده ، توی مثال زیر فرض کنید داخل همون پوشه Download هستیم.
</p>
<pre id="Command">
            <code>
                pwd
                /home/amirroox/Download
            </code>
        </pre>
<b>
    توجه کنید که دستور pwd مسیر شما رو از ریشه به دست میاره (ینی دقیقا از ریشه مسیریابی میکنه و path کامل رو در اختیارتون میزاره)
</b>
<!-- Slider -->
<swiper-container>
    <swiper-slide>
        <img src="https://www.cyberciti.biz/media/new/faq/2011/03/pwd-command-line-used-for-output.png"
             alt="pwd command" loading="lazy">
    </swiper-slide>
    <swiper-slide>
        <img src="https://phoenixnap.com/kb/wp-content/uploads/2021/12/show-pwd-help-file.png"
             alt="pwd command" loading="lazy">
    </swiper-slide>
</swiper-container>
<!-- Slider -->