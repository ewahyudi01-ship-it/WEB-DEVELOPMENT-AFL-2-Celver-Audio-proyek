@extends('mainLayout')

@section('content')

    <div class="relative z-40">
        @include('shared.navbar')
    </div>
    
 <div class="fixed inset-0 w-full h-full">
        @include('shared.backgroundDashboard')
    </div>

<section class="w-full lg:px-80 lg:pt-50">

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