@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_like($micropost->id))
        {!! Form::open(['route' => ['users.unfavorites', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favorites', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    @endif
@endif