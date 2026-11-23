
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ویرایش گزارش</title>
</head>
<body>

    <h1>ویرایش گزارش</h1>

    <form action="{{ route('reports.update', $report['id']) }}"
          method="POST">

        @csrf
        @method('PUT')

        <label>عنوان گزارش:</label>
        <input type="text" name="title"
               value="{{ $report['title'] }}" required>

        <br><br>

        <label>نوع گزارش:</label>
        <select name="type" required>

            <option value="Student Report"
                {{ $report['type'] == 'Student Report' ? 'selected' : '' }}>
                گزارش دانشجویان
            </option>

            <option value="Company Report"
                {{ $report['type'] == 'Company Report' ? 'selected' : '' }}>
                گزارش شرکت‌ها
            </option>

            <option value="Internship Report"
                {{ $report['type'] == 'Internship Report' ? 'selected' : '' }}>
                گزارش کارآموزی‌ها
            </option>

            <option value="Application Report"
                {{ $report['type'] == 'Application Report' ? 'selected' : '' }}>
                گزارش درخواست‌ها
            </option>

            <option value="General Report"
                {{ $report['type'] == 'General Report' ? 'selected' : '' }}>
                گزارش عمومی
            </option>

        </select>

        <br><br>

        <label>تاریخ گزارش:</label>
        <input type="date" name="date"
               value="{{ $report['date'] }}" required>

        <br><br>

        <label>تهیه‌کننده:</label>
        <input type="text" name="generated_by"
               value="{{ $report['generated_by'] }}" required>

        <br><br>

        <label>توضیحات:</label>
        <textarea name="description" required>{{ $report['description'] }}</textarea>

        <br><br>

        <button type="submit">ذخیره تغییرات</button>

    </form>

    <br>

    <a href="{{ route('reports.index') }}">بازگشت به لیست</a>

</body>
</html>
