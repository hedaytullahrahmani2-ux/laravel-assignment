
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست کارآموزی‌ها</title>
</head>
<body>

    <h1>لیست فرصت‌های کارآموزی</h1>

    <a href="{{ route('internships.create') }}">افزودن فرصت جدید</a>

    <br><br>

    @if(count($internships) > 0)

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>عنوان</th>
                <th>نام شرکت</th>
                <th>موقعیت</th>
                <th>مدت</th>
                <th>وضعیت</th>
                <th>عملیات</th>
            </tr>

            @foreach($internships as $internship)

                <tr>
                    <td>{{ $internship['id'] }}</td>
                    <td>{{ $internship['title'] }}</td>
                    <td>{{ $internship['company_name'] }}</td>
                    <td>{{ $internship['location'] }}</td>
                    <td>{{ $internship['duration'] }}</td>
                    <td>{{ $internship['status'] }}</td>

                    <td>
                        <a href="{{ route('internships.show', $internship['id']) }}">
                            مشاهده
                        </a>

                        |

                        <a href="{{ route('internships.edit', $internship['id']) }}">
                            ویرایش
                        </a>

                        |

                        <form action="{{ route('internships.destroy', $internship['id']) }}"
                              method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('آیا از حذف این فرصت مطمئن هستید؟')">
                                حذف
                            </button>

                        </form>
                    </td>
                </tr>

            @endforeach

        </table>

    @else

        <p>هنوز هیچ فرصت کارآموزی ثبت نشده است.</p>

    @endif

</body>
</html>
