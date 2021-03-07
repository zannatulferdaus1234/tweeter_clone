<div class="flex px-4 py-4 {{$loop->last ? '' : 'border-b border-gray-400'}}">

    {{-- avater --}}
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile',$tweet->user )}}">
            <img
                src="{{ $tweet->user->avatar() }}"
                alt=""
                class="rounded-full mr-2" width="45" height="45"
            >
        </a>

    </div>

    {{-- name & details --}}
    <div class="">
        <a href="{{ route('profile',$tweet->user)}}">
        {{-- <a href="{{ route('profile',$tweet->user->name)}}"> --}}

        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text-sm">
             {{ $tweet->body }}
        </p>
    </div>

</div>
