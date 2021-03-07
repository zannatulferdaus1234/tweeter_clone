<div class="borderInfo">
    <form method="POST" action="/tweets" >
        @csrf
        <textarea class="w-full" name="body"
            placeholder="What's up doc?">
        </textarea>

        <hr class="py-2">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar()}}"
                alt="your avatar"
                class="rounded-full mr-2" width="45" height="45">

            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white" style="background-color: rgba(59, 130, 246">
                Tweet-a-roo!
            </button>

        </footer>
    </form>
    @error('body')
    <p class="text-red-500 text-sm mt-2" >{{ $message }}</p>
@enderror
</div>


<style>
    .borderInfo{
        padding:2rem 2rem 1.2rem 2rem;
        border-color:#41d2fa;
        border-radius: 0.5rem;
        border-width: 2px;
        margin-bottom:2rem;
    }
</style>
