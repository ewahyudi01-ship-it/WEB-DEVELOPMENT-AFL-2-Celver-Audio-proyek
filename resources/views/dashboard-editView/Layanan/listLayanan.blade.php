@extends('mainLayout')

@section('content')
<section class="bg-white">
    <table>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>image</th>
        </tr>
        @foreach ($layanans as $layanan)
            <tr>
                <td>{{ $layanan->title }}</td>
                <td>{{ $layanan->description }}</td>
                <td>{{ $layanan->image }}</td>

                <td>
                    <form action="{{ route('delete-laptop') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{  $layanan->id  }}">
                        <input style="background:red; color:white" type="submit" value="hapus">
                    </form>
                </td>

                <td>
                    <a href="{{ route('edit-layanan', $layanan->id) }}"
                        style="background:brown; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('new-layanan-route') }}">
        <button class="rounded-sm bg-yellow-600 px-4 py-3 px-10 font-medium text-white transition hover:bg-yellow-700">
            add new layanan
        </button>
    </a>
</section>
@endsection