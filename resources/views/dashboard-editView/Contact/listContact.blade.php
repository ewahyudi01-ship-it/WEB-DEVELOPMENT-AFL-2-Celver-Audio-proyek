@extends('mainLayout')

@section('content')
<section class="bg-white">
    <table>
        <tr>
            <th>whatsapp</th>
            <th>gmail</th>
            <th>lokasi</th>
        </tr>
            <tr>
                <td>{{ $contact->whatsapp }}</td>
                <td>{{ $contact->gmail }}</td>
                <td>{{ $contact->lokasi }}</td>
                <td>
                    <a href="{{ route('edit-contact', $contact->id) }}"
                        style="background:brown; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
    </table>
</section>
@endsection