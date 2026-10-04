<x-layout>
    {{-- @if ($errors->any())
        {{ dd($errors->all()) }}
    @endif --}}
    <div>
        <div class="card bg-base-100 w-3/4 mx-auto mt-6 shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Create a Tweet</h2>
                <form action="/tweets" method="POST">
                    @csrf
                    <div class="form-control">
                        <textarea name="message" placeholder="What's happening?" class="textarea textarea-bordered w-full @error('message') textarea-error @enderror" rows="4">{{ old('message') }}</textarea>

                        @error('message')
                        <div class="label">
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                    <div class="card-actions justify-end mt-2">
                        <button type="submit" class="btn btn-primary">Tweet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="max-w-4xl mx-auto mt-6 grid grid-cols-1 gap-4">
        <h1 class="text-2xl font-bold col-span-full">Recent Tweets</h1>

        @forelse($tweets as $tweet)
            <x-tweet :tweet="$tweet" />
        @empty
            <p class="text-center text-gray-500 mt-4 col-span-full">No tweets found.</p>
        @endforelse
    </div>
</x-layout>