
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات درخواست</title>
</head>
<body>

    <h1>جزئیات درخواست کارآموزی</h1>

    <p><strong>شماره ID:</strong> {{ $application['id'] }}</p>

    <p><strong>نام دانشجو:</strong>
        {{ $application['student_name'] }}
    </p>

    <p><strong>عنوان کارآموزی:</strong>
        {{ $application['internship_title'] }}
    </p>

    <p><strong>ایمیل:</strong>
        {{ $application['email'] }}
    </p>

    <p><strong>شماره تماس:</strong>
        {{ $application['phone'] }}
    </p>

    <p><strong>توضیحات:</strong>
        {{ $application['description'] ?? '' }}
    </p>

    <p><strong>وضعیت درخواست:</strong>
        {{ $application['status'] }}
    </p>

    <br>

    <a href="{{ route('applications.index') }}">
        بازگشت به لیست درخواست‌ها
    </a>

</body>
</html>
