<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ارسال گزارش ها</title>
 <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
   
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

</body>
</html>