
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست درخواست‌ها</title>
</head>
<body>

    <h1>لیست درخواست‌های کارآموزی</h1>

    <a href="{{ route('applications.create') }}">ثبت درخواست جدید</a>

    <br><br>

    @if(count($applications) > 0)

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>نام دانشجو</th>
                <th>عنوان کارآموزی</th>
                <th>ایمیل</th>
                <th>شماره تماس</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>

            @foreach($applications as $application)
                <tr>
                    <td>{{ $application['id'] }}</td>
                    <td>{{ $application['student_name'] }}</td>
                    <td>{{ $application['internship_title'] }}</td>
                    <td>{{ $application['email'] }}</td>
                    <td>{{ $application['phone'] }}</td>
                    <td>{{ $application['status'] }}</td>

                    <td>
                        <a href="{{ route('applications.show', $application['id']) }}">
                            مشاهده
                        </a>
                        |
                        <a href="{{ route('applications.edit', $application['id']) }}">
                            ویرایش
                        </a>
                        |

                        <form action="{{ route('applications.destroy', $application['id']) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('آیا از حذف درخواست مطمئن هستید؟')">
                                حذف
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    @else
        <p>هنوز هیچ درخواستی ثبت نشده است.</p>
    @endif

</body>
</html>
