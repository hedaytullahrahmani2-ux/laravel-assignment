
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش درخواست</title>
</head>
<body>

    <h1>ویرایش درخواست کارآموزی</h1>

    <form action="{{ route('applications.update', $application['id']) }}"
          method="POST">

        @csrf
        @method('PUT')

        <label>نام دانشجو:</label>
        <input type="text" name="student_name"
               value="{{ $application['student_name'] }}" required>

        <br><br>

        <label>عنوان کارآموزی:</label>
        <input type="text" name="internship_title"
               value="{{ $application['internship_title'] }}" required>

        <br><br>

        <label>ایمیل:</label>
        <input type="email" name="email"
               value="{{ $application['email'] }}" required>

        <br><br>

        <label>شماره تماس:</label>
        <input type="text" name="phone"
               value="{{ $application['phone'] }}" required>

        <br><br>

        <label>توضیحات:</label>
        <textarea name="description">{{ $application['description'] ?? '' }}</textarea>

        <br><br>

        <label>وضعیت:</label>
        <select name="status" required>
            <option value="Pending"
                {{ $application['status'] == 'Pending' ? 'selected' : '' }}>
                در انتظار بررسی
            </option>

            <option value="Approved"
                {{ $application['status'] == 'Approved' ? 'selected' : '' }}>
                تأیید شده
            </option>

            <option value="Rejected"
                {{ $application['status'] == 'Rejected' ? 'selected' : '' }}>
                رد شده
            </option>
        </select>

        <br><br>

        <button type="submit">ذخیره تغییرات</button>

    </form>

    <br>

    <a href="{{ route('applications.index') }}">بازگشت به لیست</a>

</body>
</html>
