
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جزئیات کارآموزی</title>
</head>
<body>

    <h1>جزئیات فرصت کارآموزی</h1>

    <p><strong>ID:</strong> {{ $internship['id'] }}</p>
    <p><strong>عنوان:</strong> {{ $internship['title'] }}</p>
    <p><strong>نام شرکت:</strong> {{ $internship['company_name'] }}</p>
    <p><strong>موقعیت:</strong> {{ $internship['location'] }}</p>
    <p><strong>مدت:</strong> {{ $internship['duration'] }}</p>
    <p><strong>توضیحات:</strong> {{ $internship['description'] }}</p>
    <p><strong>وضعیت:</strong> {{ $internship['status'] }}</p>

    <br>

    <a href="{{ route('internships.index') }}">بازگشت به لیست</a>

</body>
</html>
