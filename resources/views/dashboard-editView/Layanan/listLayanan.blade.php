@extends('mainLayout')

@section('content')
<section class="bg-white">
    <div style="margin-bottom: 12px;">
        <a href="{{ route('new-layanan-route') }}"
            style="background:green; color:white; padding: 4px 8px; text-decoration:none;">
            + Tambah Layanan
        </a>
    </div>

    <table>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>image</th>
            <th colspan="2">action</th>
        </tr>
        @foreach ($layanans as $layanan)
            <tr>
                <td>{{ $layanan->title }}</td>
                <td>{{ $layanan->description }}</td>
                <td>{{ $layanan->image }}</td>

                <td>
                    <form action="{{ route('delete-layanan') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $layanan->id }}">
                        <input style="background:red; color:white" type="submit" value="hapus">
                    </form>
                </td>

                <td>
                    <a href="{{ route('edit-layanan', $layanan) }}"
                        style="background:brown; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
</section>
@endsection