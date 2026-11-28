@extends('mainLayout')

@section('content')

    <div class="relative z-40">
        @include('shared.navbar')
    </div>
    
 <div class="fixed inset-0 w-full h-full">
        @include('shared.backgroundDashboard')
    </div>

<section class="w-full lg:px-80 lg:pt-50">

      <div class="relative w-full h-full">
        <a href="{{ route('new-achivement-route') }}">
                <button class="rounded-sm bg-yellow-600 px-4 py-3 px-10 font-medium text-white transition hover:bg-yellow-700">
                    add new achivement
                </button>
            </a>
      </div>

    <table>
        <tr>
            <th>titleDesc</th>
            <th>subTitleDesc</th>
            <th>desc</th>
        </tr>
        @foreach ($achivements as $achivement)
            <tr>
                <td>{{ $achivement->titleDesc }}</td>
                <td>{{ $achivement->subTitleDesc }}</td>
                <td>{{ $achivement->desc }}</td>

                <td>
                    <form action="{{ route('delete-achivement') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{  $achivement->id  }}">
                        <input style="background:red; color:white" type="submit" 
                        onclick="return confirm('Are you certain to delete this data? This action is permanent.')"
                        value="delete">
                    </form>
                </td>

                <td>
                    <a href="{{ route('edit-achivement', $achivement->id) }}"
                        style="background:brown; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    
</section>
@endsection