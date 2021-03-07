<div class="border border-gray-300 rounded-lg mb-4">

    @forelse ($tweets as $tweet)
        @include('tweety.tweet')

    @empty
        <p class="px-4 py-4">No tweets yet.</p>
    @endforelse

</div>
