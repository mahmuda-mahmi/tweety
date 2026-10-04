<div class="card bg-base-100 shadow-xl mb-3">
    <div class="card-body">
        <!-- Header: Avatar and User Info -->
        <div class="flex items-center gap-4">
            @if($tweet->user)
                <div class="avatar">
                    <div class="w-12 rounded-full">
                        <img src="https://avatars.laravel.cloud/{{ urlencode($tweet->user->email) }}" alt="{{ $tweet->user->name }}" />
                    </div>
                </div>
                <div>
                    <h2 class="card-title text-lg">{{ $tweet->user->name }}</h2>
                    <p class="text-sm text-base-content/70">{{ $tweet->user->email }}</p>
                </div>
            @else
                <div class="avatar placeholder">
                    <div class="bg-neutral text-neutral-content w-12 rounded-full">
                        <span class="text-xl">A</span>
                    </div>
                </div>
                <div>
                    <h2 class="card-title text-lg">Anonymous</h2>
                    <p class="text-sm text-base-content/70">No email provided</p>
                </div>
            @endif
        </div>

        <!-- Body: The Tweet Message -->
        <p class="mt-4 text-base-content">
            {{ $tweet->message }}
        </p>

        <!-- Footer: Timestamp -->
        <div class="card-actions justify-end mt-4">
            <span class="text-sm text-base-content/60">
                {{ $tweet->created_at->diffForHumans() }}
            </span>
        </div>
    </div>
</div>