

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <table>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>Action</th>
        </tr>
        @foreach ($testings as $test)
            <tr>
                <td>{{ $test->brands }}</td>
                <td>{{ $test->model }}</td>
                <td>{{ $test->processor }}</td>
                <td>{{ $test->ram }}</td>

                <td>
                    <form action="{{ route('delete-laptop') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{  $test->id  }}">
                        <input style="background:red; color:white" type="submit" value="hapus">
                    </form>
                </td>

                <td>
                    <a href="{{ route('edit-laptop', $test->id) }}"
                        style="background:brown; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="/testing/form">
        <button class="rounded-sm bg-yellow-600 px-4 py-3 px-10 font-medium text-white transition hover:bg-yellow-700">
            add new data
        </button>
    </a>
</body>
</html>