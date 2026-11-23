
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست شرکت‌ها</title>
</head>
<body>

    <h1>لیست شرکت‌ها</h1>

    <a href="{{ route('companies.create') }}">افزودن شرکت جدید</a>

    <br><br>

    @if(count($companies) > 0)

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>نام شرکت</th>
                <th>ایمیل</th>
                <th>شماره تماس</th>
                <th>آدرس</th>
                <th>عملیات</th>
            </tr>

            @foreach($companies as $company)
                <tr>
                    <td>{{ $company['id'] }}</td>
                    <td>{{ $company['name'] }}</td>
                    <td>{{ $company['email'] }}</td>
                    <td>{{ $company['phone'] }}</td>
                    <td>{{ $company['address'] }}</td>

                    <td>
                        <a href="{{ route('companies.show', $company['id']) }}">مشاهده</a>
                        |
                        <a href="{{ route('companies.edit', $company['id']) }}">ویرایش</a>
                        |

                        <form action="{{ route('companies.destroy', $company['id']) }}"
                              method="POST" style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                onclick="return confirm('آیا از حذف این شرکت مطمئن هستید؟')">
                                حذف
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    @else
        <p>هنوز هیچ شرکتی ثبت نشده است.</p>
    @endif

</body>
</html>
