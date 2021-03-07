

    <h3 class="text-xl mb-4" style="font-weight: 550;"> Following</h3>

    <ul>
        {{-- @foreach(range(1,8) as $index) --}}

        @forelse(auth()->user()->follows as $user)

        <li class="mb-4">
            <div>
                <a href="{{ route('profile',$user)}}" class="flex items-center text-sm">

                <img
                    src="{{$user->avatar()}}"
                    alt=""
                    class="rounded-full mr-2" width="45" height="45">

                {{ $user->name }}
            </a>
            </div>
        </li>
        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>
