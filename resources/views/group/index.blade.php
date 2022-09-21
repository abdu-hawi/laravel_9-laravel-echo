@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($groups as $group)
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ $group->name }}</strong>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($group->users as $user)
                                    <li class="list-group-item">
                                        <a href="{{ url('spy') }}/{{ $user->id }}">{{ $user->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <form action="{{ route('notify', $group->id) }}" method="post">
                                @csrf
                                <button class="btn btn-primary" type="submit">Notifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
