@extends('base')

@section('title', 'Control Center')

@section('content')
    <section class="main-section">
        <div class="container">
            @foreach($users as $user)
                {{ $user->username }}
                @foreach($user->roles as $role)
                    {{ $role->alias }}
                @endforeach
            @endforeach

            @foreach($roles as $role)
                {{ $role->alias }}
            @endforeach

                @foreach($permissions as $permission)
                    {{ $permission->alias }}
                @endforeach

            <form class="lofo" method="POST" action="{{ route('role.create') }}">
                @csrf

                <div class="form-group fl fl-col">
                    <label for="alias">Role name</label>
                    <input id="alias" type="text" name="alias" value="{{ old('alias') }}" required autocomplete="alias" autofocus>
                </div>

                <div class="form-group fl fl-col">
                    <label for="short_alias">Role short name</label>
                    <input id="short_alias" type="text" name="short_alias" value="{{ old('short_alias') }}" required autocomplete="short_alias" autofocus>
                </div>

                <div class="form-group fl fl-col">
                    <label for="description">Description</label>
                    <input id="description" type="text" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
                </div>

                <button type="submit" class="btn btn-inverted btn-fit">
                   Create
                </button>
            </form>
        </div>
    </section>
@endsection
