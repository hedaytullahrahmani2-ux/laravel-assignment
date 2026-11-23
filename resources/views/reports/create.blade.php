
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ایجاد گزارش</title>
</head>
<body>

    <h1>ایجاد گزارش جدید</h1>

    <form action="{{ route('reports.store') }}" method="POST">
        @csrf

        <label>عنوان گزارش:</label>
        <input type="text" name="title" required>

        <br><br>

        <label>نوع گزارش:</label>
        <select name="type" required>
            <option value="Student Report">گزارش دانشجویان</option>
            <option value="Company Report">گزارش شرکت‌ها</option>
            <option value="Internship Report">گزارش کارآموزی‌ها</option>
            <option value="Application Report">گزارش درخواست‌ها</option>
            <option value="General Report">گزارش عمومی</option>
        </select>

        <br><br>

        <label>تاریخ گزارش:</label>
        <input type="date" name="date" required>

        <br><br>

        <label>تهیه‌کننده گزارش:</label>
        <input type="text" name="generated_by" required>

        <br><br>

        <label>توضیحات:</label>
        <textarea name="description" required></textarea>

        <br><br>

        <button type="submit">ثبت گزارش</button>
    </form>

    <br>

    <a href="{{ route('reports.index') }}">بازگشت به لیست گزارش‌ها</a>

</body>
</html>
