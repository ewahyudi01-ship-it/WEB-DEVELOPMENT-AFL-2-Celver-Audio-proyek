@extends('mainLayout')

@section('content')

    <div class="relative z-40">
        @include('shared.navbar')
    </div>
    
 <div class="fixed inset-0 w-full h-full">
        @include('shared.backgroundDashboard')
    </div>

<section class="w-full lg:px-80 lg:pt-50">

  <div class="relative w-full h-full ">
        <div class="border-b border-amber-400/20 pb-5 mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-xl lg:text-4xl font-bold text-amber-400 tracking-wide">
                    SERVICES
                </h1>
                <p class="text-xs sm:text-sm text-neutral-400 mt-1">
                    Modify service details or replace the current display image.
                </p>
            </div>
            
            <a href="{{ route('new-layanan-route') }}">
                <button class="rounded-sm bg-yellow-600 px-4 py-3 px-10 font-medium text-white transition hover:bg-yellow-700">
                    add new layanan
                </button>
            </a>

            <a href="{{ route('dashboard-route') }}" 
               class="text-xs sm:text-sm text-amber-400 bg-neutral-900/50 hover:text-amber-300 hover:bg-neutral-900/20 border border-neutral-700 hover:border-amber-400/50 rounded-lg px-3 py-1.5 transition">
                &larr; Back
            </a>
        </div>
    </div>

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
                    <form action="{{ route('delete-layanan', $layanan) }}" method="POST">
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

</section>
@endsection