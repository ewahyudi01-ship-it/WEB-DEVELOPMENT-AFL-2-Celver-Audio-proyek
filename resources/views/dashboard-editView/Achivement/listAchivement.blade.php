@extends('mainLayout')

@section('content')
<section class="bg-white">
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
    <a href="{{ route('new-achivement-route') }}">
        <button class="rounded-sm bg-yellow-600 px-4 py-3 px-10 font-medium text-white transition hover:bg-yellow-700">
            add new achivement
        </button>
    </a>
</section>
@endsection