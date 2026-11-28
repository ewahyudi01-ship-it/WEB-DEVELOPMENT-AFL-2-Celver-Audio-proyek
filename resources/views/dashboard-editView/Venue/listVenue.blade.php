@extends('mainLayout')

@section('content')
<section class="bg-white">
    <table>
        <tr>
            <th>titlePlace</th>
            <th>descriptionPlace</th>
            <th>image</th>
        </tr>
        @foreach ($portfolios as $portfolio)
            <tr>
                <td>{{ $portfolio->titlePlace }}</td>
                <td>{{ $portfolio->descriptionPlace }}</td>
                <td>{{ $portfolio->image }}</td>

                <td>
                    <form action="{{ route('delete-portfolio', $portfolio) }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{  $portfolio->id   }}">
                        <input style="background:red; color:white" type="submit" onclick="return confirm('Are you certain to delete this data? This action is permanent.')"
                        value="delete">
                    </form>
                </td>

                <td>
                    <a href="{{ route('edit-portfolio', $portfolio->id) }}"
                        style="background:brown; color:white; padding: 2px 6px; text-decoration:none;">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{ route('new-portfolio-route') }}">
        <button class="rounded-sm bg-yellow-600 px-4 py-3 px-10 font-medium text-white transition hover:bg-yellow-700">
            add new portfolio
        </button>
    </a>
</section>
@endsection