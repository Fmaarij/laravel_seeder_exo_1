@extends('layouts.index')
@section('content')
    <table>
        <tr>
            <th>Nom</th>
            <th>Age</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($Personnes as $item)
            <tr>
                <td>{{ $item->nom }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->tel }}</td>
                <td>
                    {{-- Edit --}}
                    <a href="/editPersonne/{{$item->id}}">
                        <button>Edit</button>
                    </a>
                </td>
                {{-- delete par id --}}
                <form action="/del/{{ $item->id }}/update" method="post">
                    @csrf
                    @method('DELETE')
                    <td><button type="submit">Delete</button></td>
                </form>
        @endforeach
        {{-- Delete all data from the table --}}
        <form action="delAll/" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DEL ALL</button>
        </form>
        </tr>
    </table>
@endsection
