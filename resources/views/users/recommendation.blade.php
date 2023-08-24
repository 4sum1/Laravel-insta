@extends('layouts.app')

@section('title', 'See All')

@section('content')

    {{-- i would like to show users' avatars, names, and follow buttons below it --}}
    @if ($suggested_users)
        <h1 class="h3 fw-bold text-secondary text-center mb-4">All Suggestions</h1>

            @foreach ($suggested_users as $user)
                <div class="row align-items-center mb-1 w-50 mx-auto">
                    <div class="col">
                        @if ($user->avatar)
                            <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="rounded-circle avatar-md">
                        @else
                            <i class="fa-solid fa-circle-user text-secondary icon-md"></i>
                        @endif
                    </div>
                    <div class="col ps-0">
                        <a href="{{ route('profile.show', $user->id) }}" class="text-decoration-none text-dark fw-bold">
                        {{ $user->name }}
                        </a>
                        <p class="text-muted mb-0">{{ $user->email }}</p>
                        {{-- if they are following you --}}
                        @if ($user->isFollowingMe())
                            <p class="text-muted">Follows you</p>
                        @else
                        {{-- if they are not following you --}}
                            <p class="text-muted">{{ $user->followers->count() }} {{ $user->followers->count() == 1 ? 'follower' : 'followers' }} </p>
                        @endif
                    </div>
                    <div class="col text-end">
                        <form action="{{ route('follow.store', $user->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">Follow</button>
                        </form>
                    </div>
                </div>
            @endforeach


    @else
        <h1 class="fw-bold text-secondary text-center">There is no suggestions for you.</h1>
    @endif



@endsection
