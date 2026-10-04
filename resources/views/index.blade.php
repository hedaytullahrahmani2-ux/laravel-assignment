<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>سیستم مدیریت کارآموزی</title>
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>


<header class="header">
    <div class="logo">
<img src="{{ asset('images/61-612746_students-internship-symbol.png') }}" alt="لوگو">
    <span>IMS</span>
</div>

<div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <nav class="nav">
<a href="/features">ویژگی‌ها</a>
<a href="/system">سیستم</a>
<a href="/demo">ویدیو</a>
<a href="/testimonials">نظریات</a>
<a href="/faq">سوالات</a>
<a href="/reports">ارسال گزارش</a>
        
    </nav>

    <div class="auth">
    <a href="/auth/login">ورود</a>
    <a href="/signup">ثبت‌ نام</a>
    </div>
</header>

<section class="hero-slider">
    <div class="slider-container">
        
        <div class="slide">
            <img src="{{ asset('images/5883b8f93619263b4610f9d41d836ba8.jpg') }}">
            <div class="slide-content">
                <h1>سیستم مدیریت کارآموزی</h1>
                <p>یک پلتفرم کامل برای مدیریت کارآموزی میان دانشجویان، شرکت‌ها و اساتید</p>
                <button>شروع کنید</button>
            </div>
        </div>
        
        <div class="slide">
            <img src="{{ asset('images/5135bb759d03f7cc990b9cd2c50de560.jpg') }}">
            <div class="slide-content">
                <h1>ارتباط مستقیم با شرکت‌ها</h1>
                <p>فرصت‌های شغلی و کارآموزی را پیدا کنید</p>
                <button>شروع کنید</button>
            </div>
        </div>
        
        <div class="slide">
           <img src="{{ asset('images/088b200c344e66251201e6b2a078ac6e.jpg') }}">
            <div class="slide-content">
                <h1>گزارش‌دهی آنلاین</h1>
                <p>ارسال و پیگیری گزارش‌های کارآموزی به صورت آنلاین</p>
                <button>شروع کنید</button>
            </div>
        </div>
        
        <div class="slide">
            <img src="{{ asset('images/886bd5cf2f06114fc79c47e989ee273e.jpg') }}">
            <div class="slide-content">
                <h1>ارزیابی هوشمند</h1>
                <p>سیستم ارزیابی پیشرفته برای بهبود عملکرد</p>
                <button>شروع کنید</button>
            </div>
        </div>
        
    </div>
    
    <!-- نقطه‌های ناوبری -->
    <div class="slider-dots">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>



<section id="features" class="features">
    <h2>ویژگی‌های سیستم</h2>
    <div class="grid"></div>
</section>


<section class="stats-section">
    <h2>📊 آمار سیستم</h2>
    <div class="stats-container"></div>
</section>

<!-- بخش API - پوهنتون‌های افغانستان -->
<section id="api-section" class="api-section">
    <h2>🎓 پوهنتون‌های افغانستان</h2>
    <p class="api-description">لیست پوهنتون‌های افغانستان از سرور خارجی دریافت می‌شود</p>
    
    <!-- محفظه نمایش پوهنتون‌ها -->
    <div id="api-data-container" class="api-data-container">
        <div class="loading-spinner">
            <i class="fas fa-spinner fa-spin"></i>
            در حال بارگذاری پوهنتون‌ها...
        </div>
    </div>
    
    <!-- دکمه‌های بخش API -->
    <div class="api-buttons">
        <button onclick="loadUniversities()" class="api-btn">
            <i class="fas fa-sync-alt"></i> بازخوانی
        </button>
        
        <button onclick="showFavorites()" class="api-btn fav-btn">
            <i class="fas fa-star"></i> علاقه‌مندی‌های من
        </button>
        
        <button onclick="clearFavorites()" class="api-btn clear-btn">
            <i class="fas fa-trash-alt"></i> پاک کردن همه
        </button>
    </div>
</section>


<section id="system" class="system">
    <h2>نمای کلی سیستم</h2>

    <p>
این سیستم یک پلتفرم آنلاین است که ارتباط میان دانشجویان، شرکت‌ها و اساتید را برقرار می‌سازد.
کاربران می‌توانند ثبت‌ نام کرده، درخواست ارسال نمایند و پیشرفت خود را پیگیری کنند.
</p>

    <ul>
        <li>ثبت‌ نام و ورود کاربران</li>
        <li>مدیریت کامل کارآموزی</li>
        <li>ارسال گزارش و ارزیابی</li>
        <li>مدیریت درخواست‌ها</li>
        <li>بازخورد و امتیازدهی</li>
        <li>کنترول امنیت و دسترسی</li>
    </ul>
</section>


<section class="objectives">
    <h2>اهداف سیستم</h2>

    <p>
هدف اصلی این سیستم ساده‌سازی روند کارآموزی و کاهش کارهای دستی می‌باشد.
این سیستم باعث افزایش ارتباط، امنیت اطلاعات و مدیریت بهتر فرآیندها می‌شود.
</p>

    <ul>
        <li>خودکارسازی کامل روند ثبت‌ نام و مدیریت کارآموزی</li>
        <li>کاهش کارهای دستی و کاغذی</li>
        <li>تسهیل ارتباط میان دانشجویان و شرکت‌ها</li>
        <li>پیگیری پیشرفت و ارزیابی ساده</li>
        <li>تأمین امنیت معلومات</li>
    </ul>
</section>


<section class="demo">
    <div class="demo-container">

        <div class="demo-text">
            <h2>دموی سیستم</h2>
            <p>
                در این ویدیو نحوه کار سیستم مدیریت کارآموزی را می‌ بینید.
                می‌ توانید ثبت‌ نام کنید و گزارش ارسال نمایید.
            </p>
        </div>
  
<div class="video-box">

    <video controls>
        <source src="{{ asset('videos/5 نکته مهم درمورد کارآموزی  _ Five important Tips for Internship(720P_HD)_001_005.mp4') }}" type="video/mp4">

        مرورگر شما از پخش ویدیو پشتیبانی نمی‌کند.
    </video>

    <p class="views">
        <i class="fas fa-eye"></i> 1,250 بازدید
    </p>

</div>

    </div>
</section>


<section class="testimonials">
    <h2>نظرات کاربران</h2>
    <div class="grid"></div>
</section>


<section id="faq">
    <h2>سوالات متداول</h2>
</section>


<section class="report-section">

    <h2><i class="fas fa-file-upload"></i> ارسال گزارش</h2>

    <form class="form" action="#" method="post" enctype="multipart/form-data">
        
        <div class="file-upload-wrapper">
            <label class="file-label">
                <i class="fas fa-cloud-upload-alt"></i>
                انتخاب فایل گزارش
                <input type="file" id="fileInput" name="report-file">
            </label>
            <div class="file-placeholder">
                <i class="fas fa-folder-open"></i>
                <span>حداکثر حجم: 10 مگابایت | فرمت‌های مجاز: PDF, DOC, DOCX</span>
            </div>
        </div>
        
        <textarea placeholder="توضیحات خود را بنویسید... (حداقل 20 کاراکتر)"></textarea>
        
        <button type="submit">
            <i class="fas fa-paper-plane"></i>
            ارسال گزارش
        </button>
        
        <p class="form-note">
            <i class="fas fa-info-circle"></i>
            پس از ارسال گزارش، کارشناسان ما ظرف 24 ساعت بررسی خواهند کرد
        </p>
        
    </form>

</section>


<footer class="footer">

    <div class="footer-container">

        <div class="footer-section">
            <h3>درباره سیستم</h3>
            <p>سیستم مدیریت کارآموزی برای ساده‌سازی ارتباط بین دانشجویان، شرکت‌ها و اساتید طراحی شده است.</p>
        </div>

        <div class="footer-section">
            <h3>تماس با ما</h3>
            <p>📧 ایمیل: hedaytullahrahmani2@gmail.com</p>
            <p>📱 واتساپ / تلگرام: 0792375988</p>
        </div>

        <div class="footer-section">
            <h3>شبکه‌های اجتماعی</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i> فیسبوک</a>
                <a href="#"><i class="fab fa-whatsapp"></i> واتساپ</a>
                <a href="#"><i class="fab fa-telegram"></i> تلگرام</a>
                <a href="#"><i class="fab fa-instagram"></i> انستاگرام</a>
            
            </div>
        </div>

        <div class="footer-section">
            <h3>لینک‌ها</h3>
            <a href="/privacy">حریم خصوصی</a>
            <a href="/terms">شرایط استفاده</a>
        
        </div>

    </div>

    <p class="copyright">
        © 2026 سیستم مدیریت کارآموزی
    </p>

</footer>

<script src="{{ asset('js/storage.js') }}"></script>
<script src="{{ asset('js/homepage.js') }}"></script>
<script src="{{ asset('js/api.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>

</body>
</html>