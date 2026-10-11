<x-layout>
    <x-slot:title>
        Edit Tweet
    </x-slot:title>
    <div class="max-w-4xl mx-auto mt-8 px-4">
        
        <!-- Form Section -->
        <h1 class="text-3xl font-bold">Edit your Tweet</h1>
        <div class="card bg-base-100 shadow mt-4">
            <div class="card-body">
                <form action="/tweets/{{ $tweet->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-control w-full">
                        <textarea 
                            name="message" 
                            placeholder="What's happening?" 
                            class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror" 
                            rows="4"
                            maxlength="255"
                            required
                        >{{ old('message', $tweet->message ) }}</textarea>

                        @error('message')
                            <div class="label">
                                <span class="label-text-alt text-error">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="card-actions justify-between mt-4">
                        <a href="/" class="btn btn-soft btn-secondary btn-sm">Cancel</a>
                        <button type="submit" class="btn btn-soft btn-primary btn-sm">Update Tweet</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</x-layout>