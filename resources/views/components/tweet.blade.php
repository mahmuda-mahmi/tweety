@props(['tweet'])

<div class="card bg-base-100 shadow mb-3">
    <div class="card-body">
        <div class="flex space-x-3">
            {{-- Avatar --}}
            @if ($tweet->user)
                <div class="avatar">
                    <div class="size-10 rounded-full">
                        <img src="https://avatars.laravel.cloud/{{ urlencode($tweet->user->email) }}"
                             alt="{{ $tweet->user->name }}'s avatar" class="rounded-full" />
                    </div>
                </div>
            @else
                <div class="avatar placeholder">
                    <div class="size-10 rounded-full">
                        <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                             alt="Anonymous User" class="rounded-full" />
                    </div>
                </div>
            @endif

            {{-- Content --}}
            <div class="min-w-0 flex-1">
                {{-- Header Row: Name, Timestamp, Actions --}}
                <div class="flex justify-between w-full">
                    <div class="flex items-center gap-1">
                        <span class="text-sm font-semibold">
                            {{ $tweet->user ? $tweet->user->name : 'Anonymous' }}
                        </span>
                        <span class="text-base-content/60">·</span>
                        <span class="text-sm text-base-content/60">
                            {{ $tweet->created_at->diffForHumans() }}
                        </span>
                        @if ($tweet->updated_at->gt($tweet->created_at))
                            <span class="text-base-content/60">·</span>
                            <span class="text-sm text-base-content/60">(edited)</span>
                        @endif
                    </div>

                    {{-- Action Buttons --}}
                    @can('update', $tweet)
                        <div class="flex gap-2">
                            <a href="/tweets/{{ $tweet->id }}/edit" class="btn btn-soft btn-primary btn-sm">
                                Edit
                            </a>
                            <form method="POST" action="/tweets/{{ $tweet->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('Are you sure you want to delete this tweet?')"
                                        class="btn btn-soft btn-error btn-sm">
                                    Delete
                                </button>
                            </form>
                        </div>
                    @endcan
                    
                </div>

                {{-- Message --}}
                <p class="mt-1">{{ $tweet->message }}</p>
            </div>
        </div>
    </div>
</div>