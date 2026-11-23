
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>جزئیات گزارش</title>
</head>
<body>

    <h1>جزئیات گزارش</h1>

    <p><strong>شماره ID:</strong> {{ $report['id'] }}</p>

    <p><strong>عنوان:</strong> {{ $report['title'] }}</p>

    <p><strong>نوع گزارش:</strong> {{ $report['type'] }}</p>

    <p><strong>تاریخ:</strong> {{ $report['date'] }}</p>

    <p><strong>تهیه‌کننده:</strong> {{ $report['generated_by'] }}</p>

    <p><strong>توضیحات:</strong> {{ $report['description'] }}</p>

    <br>

    <a href="{{ route('reports.index') }}">
        بازگشت به لیست گزارش‌ها
    </a>

</body>
</html>
