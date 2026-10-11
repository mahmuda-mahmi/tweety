<x-layout>
    <div class="max-w-4xl mx-auto mt-8 px-4">
        
        <!-- Form Section -->
        <h1 class="text-3xl font-bold">Create a Tweet</h1>
        <div class="card bg-base-100 shadow mt-4">
            <div class="card-body">
                <form action="/tweets" method="POST">
                    @csrf
                    <div class="form-control w-full">
                        <textarea 
                            name="message" 
                            placeholder="What's happening?" 
                            class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror" 
                            rows="4"
                            maxlength="255"
                            required
                        >{{ old('message') }}</textarea>

                        @error('message')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <button type="submit" class="btn btn-primary btn-sm">Tweet</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Feed Section -->
        <h1 class="text-2xl font-bold mt-8">Recent Tweets</h1>
        <div class="grid grid-cols-1 gap-4 mt-4">
            @forelse($tweets as $tweet)
                <x-tweet :tweet="$tweet" />
            @empty
                <div class="hero py-12 col-span-full">
                    <div class="hero-content text-center">
                        <div>
                            <svg class="mx-auto h-12 w-12 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <p class="mt-4 text-base-content/60">No tweets yet. Be the first to tweet!</p>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        
    </div>
</x-layout>