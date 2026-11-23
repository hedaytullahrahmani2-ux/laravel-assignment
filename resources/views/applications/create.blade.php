

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت درخواست کارآموزی</title>
</head>
<body>

    <h1>ثبت درخواست کارآموزی جدید</h1>

    <form action="{{ route('applications.store') }}" method="POST">
        @csrf

        <label>نام دانشجو:</label>
        <input type="text" name="student_name" required>

        <br><br>

        <label>عنوان کارآموزی:</label>
        <input type="text" name="internship_title" required>

        <br><br>

        <label>ایمیل دانشجو:</label>
        <input type="email" name="email" required>

        <br><br>

        <label>شماره تماس:</label>
        <input type="text" name="phone" required>

        <br><br>

        <label>توضیحات:</label>
        <textarea name="description"></textarea>

        <br><br>

        <label>وضعیت درخواست:</label>
        <select name="status" required>
            <option value="Pending">در انتظار بررسی</option>
            <option value="Approved">تأیید شده</option>
            <option value="Rejected">رد شده</option>
        </select>

        <br><br>

        <button type="submit">ثبت درخواست</button>
    </form>

    <br>

    <a href="{{ route('applications.index') }}">بازگشت به لیست</a>

</body>
</html>
