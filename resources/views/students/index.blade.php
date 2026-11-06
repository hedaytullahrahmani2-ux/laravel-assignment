<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست دانشجویان</title>
</head>
<body>

    <h1>لیست دانشجویان</h1>

    <a href="{{ route('students.create') }}">افزودن دانشجوی جدید</a>

    <br><br>

    @if(count($students) > 0)

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>شماره تماس</th>
                <th>عملیات</th>
            </tr>

            @foreach($students as $student)

                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['email'] }}</td>
                    <td>{{ $student['phone'] }}</td>

                    <td>
                        <a href="{{ route('students.show', $student['id']) }}">مشاهده</a>
                        |
                        <a href="{{ route('students.edit', $student['id']) }}">ویرایش</a>
                        |

                        <form action="{{ route('students.destroy', $student['id']) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('آیا از حذف این دانشجو مطمئن هستید؟')">
                                حذف
                            </button>

                        </form>
                    </td>
                </tr>

            @endforeach

        </table>

    @else

        <p>هنوز هیچ دانشجویی ثبت نشده است.</p>

    @endif

</body>
</html>