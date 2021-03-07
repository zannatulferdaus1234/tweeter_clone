<form method="POST" action="/profiles/{{$user->name}}/follow">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-4 text-white text-xs ml-4" style="background-color: rgba(59, 130, 246">
        {{ auth()->user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
