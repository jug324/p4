@extends ('_master')

@section('title')
Characters
@stop


@section('content')

<div class="page-header">
        <h2>Your Characters</h2>
    </div>

   
   <a href="/create" class="btn btn-primary pull-right">Create New Character</a><br>

    @if ($characters->isEmpty())
        <p>There are no characters</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Race</th>
                    <th>Region</th>
                    <th>Discipline</th>
                    <th>Title Order</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($characters as $character)
                <tr>
                    <td><a href="{{ action('CharacterController@show', $character->id) }}">{{{ $character->first_name }}} {{{ $character->last_name }}}</a></td>
                    <td>{{ $character->race->name }}</td>
                    <td>{{ $character->region->name }}</td>
                    <td>{{ $character->discipline->name }}</td>
                    <td>{{ $character->title->name }}<br></td>
                    <td>
                        <a href="{{ action('CharacterController@edit', $character->id) }}" class="btn btn-default">Edit</a>
                        
                        <a href="{{ action('CharacterController@destroy', $character->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@stop