@extends('layouts.app')

@section('content')
    <header class="mb-4 relative  ">
        <div style="position: relative;">
            <img
            src="/images/default-profile-banner.jpg"
            alt="" class="mb-4">
            <img
            src="{{ $user->avatar}}"
            alt="your avatar"
            class="rounded-full mr-2 absolute" style="bottom:0px; bottom:0px; left:50%; transform:translateX(-50%) translateY(50%);"

            width="150">
        </div>

        <div class="flex justify-between items-center mb-4">

            <div class="">
                <h2 class="text-bold text-2xl mb-0">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">

                {{-- Edit User Info --}}

                {{-- @if(current_user()->is($user))
                    <a href="{{ $user->path('edit') }}" class="rounded-full shadow py-2 px-2 text-black text-xs"> Edit Profile </a>
                @endif --}}

                {{-- or --}}

                @can('edit',$user)
                    <a href="{{ $user->path('edit') }}" class="rounded-full shadow py-2 px-2 text-black text-xs"> Edit Profile </a>
                @endcan



                {{-- <x-follow-button : user="$user">
                </x-follow-button> --}}


                {{-- Follow Me --}}

                @if(current_user()->isNot($user))

                <form method="POST" action="/profiles/{{$user->name}}/follow">
                    @csrf
                    <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs ml-4" style="background-color: rgba(59, 130, 246">
                        {{ current_user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me'}}
                    </button>
                </form>
                @endif


            </div>

        </div>

        <p class="text-sm">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.
       </p>


    </header>


@include('tweety.timeline',[
    'tweets' => $user->tweets
])
@endsection
