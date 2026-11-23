
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت کارآموزی</title>
</head>
<body>

    <h1>ثبت فرصت کارآموزی جدید</h1>

    <form action="{{ route('internships.store') }}" method="POST">

        @csrf

        <label>عنوان کارآموزی:</label>
        <input type="text" name="title" required>

        <br><br>

        <label>نام شرکت:</label>
        <input type="text" name="company_name" required>

        <br><br>

        <label>موقعیت:</label>
        <input type="text" name="location" required>

        <br><br>

        <label>مدت کارآموزی:</label>
        <input type="text" name="duration" required>

        <br><br>

        <label>توضیحات:</label>
        <textarea name="description" required></textarea>

        <br><br>

        <label>وضعیت:</label>
        <select name="status" required>
            <option value="Open">باز</option>
            <option value="Closed">بسته</option>
        </select>

        <br><br>

        <button type="submit">ثبت کارآموزی</button>

    </form>

    <br>

    <a href="{{ route('internships.index') }}">بازگشت به لیست</a>

</body>
</html>
