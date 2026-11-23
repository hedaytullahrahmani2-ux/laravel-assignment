
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لیست گزارش‌ها</title>
</head>
<body>

    <h1>لیست گزارش‌ها</h1>

    <a href="{{ route('reports.create') }}">ایجاد گزارش جدید</a>

    <br><br>

    @if(count($reports) > 0)

        <table border="1" cellpadding="10">

            <tr>
                <th>ID</th>
                <th>عنوان گزارش</th>
                <th>نوع گزارش</th>
                <th>تاریخ</th>
                <th>تهیه‌کننده</th>
                <th>عملیات</th>
            </tr>

            @foreach($reports as $report)

                <tr>
                    <td>{{ $report['id'] }}</td>
                    <td>{{ $report['title'] }}</td>
                    <td>{{ $report['type'] }}</td>
                    <td>{{ $report['date'] }}</td>
                    <td>{{ $report['generated_by'] }}</td>

                    <td>
                        <a href="{{ route('reports.show', $report['id']) }}">
                            مشاهده
                        </a>

                        |

                        <a href="{{ route('reports.edit', $report['id']) }}">
                            ویرایش
                        </a>

                        |

                        <form action="{{ route('reports.destroy', $report['id']) }}"
                              method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('آیا از حذف گزارش مطمئن هستید؟')">
                                حذف
                            </button>

                        </form>
                    </td>
                </tr>

            @endforeach

        </table>

    @else

        <p>هنوز هیچ گزارشی ثبت نشده است.</p>

    @endif

</body>
</html>
