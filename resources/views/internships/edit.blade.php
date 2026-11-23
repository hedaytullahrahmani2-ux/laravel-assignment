
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش کارآموزی</title>
</head>
<body>

    <h1>ویرایش فرصت کارآموزی</h1>

    <form action="{{ route('internships.update', $internship['id']) }}"
          method="POST">

        @csrf
        @method('PUT')

        <label>عنوان کارآموزی:</label>
        <input type="text" name="title"
               value="{{ $internship['title'] }}" required>

        <br><br>

        <label>نام شرکت:</label>
        <input type="text" name="company_name"
               value="{{ $internship['company_name'] }}" required>

        <br><br>

        <label>موقعیت:</label>
        <input type="text" name="location"
               value="{{ $internship['location'] }}" required>

        <br><br>

        <label>مدت کارآموزی:</label>
        <input type="text" name="duration"
               value="{{ $internship['duration'] }}" required>

        <br><br>

        <label>توضیحات:</label>
        <textarea name="description" required>{{ $internship['description'] }}</textarea>

        <br><br>

        <label>وضعیت:</label>
        <select name="status" required>
            <option value="Open"
                {{ $internship['status'] == 'Open' ? 'selected' : '' }}>
                باز
            </option>

            <option value="Closed"
                {{ $internship['status'] == 'Closed' ? 'selected' : '' }}>
                بسته
            </option>
        </select>

        <br><br>

        <button type="submit">ذخیره تغییرات</button>

    </form>

    <br>

    <a href="{{ route('internships.index') }}">بازگشت به لیست</a>

</body>
</html>
