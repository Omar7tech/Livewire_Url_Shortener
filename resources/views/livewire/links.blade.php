@php
    use Carbon\Carbon;
@endphp
<div>

    @if ($links_count !== 5)
        <div class="rounded-box bg-base-200 p-5 mb-4">
            @livewire('create-link-form')
        </div>
    @endif
    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
        <table wire:poll.5s class="table">
            <thead>
                <tr>
                    <th>Status
                        <span wire:loading wire:target="UpdateStatus" class="loading loading-spinner loading-sm"></span>
                    </th>
                    <th>Link</th>
                    <th>Bit7 Link</th>
                    <th>Created At</th>
                    <th>Clicks</th>
                    <th>Delete
                        <span wire:loading wire:target="destroy" class="loading loading-spinner loading-sm"></span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($links as $link)
                    <tr>
                        <td class="cursor-pointer" wire:click='UpdateStatus({{ $link->id }})'>
                            <div class="inline-grid *:[grid-area:1/1]">
                                <div
                                    class="status {{ $link->status ? 'status-success' : 'status-error' }} animate-ping">
                                </div>
                                <div class="status {{ $link->status ? 'status-success' : 'status-error' }}"></div>
                            </div>
                        </td>
                        <td>
                            <a href="{{ $link->original_url }}" target="_blank" class="text-violet-200 hover:underline">
                                {{ Str::limit($link->original_url, 50) }}
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-ghost copy-btn" data-shortcode="{{ $link->short_code }}">
                                <span class="copied-text hidden text-green-500">Copied!</span>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                                </svg>
                            </button>
                            <a href="{{ $link->short_code }}" target="_blank" class="text-violet-200 hover:underline">
                                {{ Str::limit($link->short_code, 50) }}
                            </a>
                        </td>
                        <td>
                            {{ Carbon::parse($link->created_at)->diffForHumans() }}
                        </td>
                        <td>{{ $link->clicks }}</td>
                        <td>
                            <div class="tooltip-left tooltip" data-tip="Delete {{ $link->original_url }}">
                                <button class="btn btn-sm btn-soft btn-error"
                                    wire:click="destroy({{ $link->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-center mt-4">

        @if ($links_count >= 0 && $links_count < 5)
            <div role="alert" class="alert alert-info alert-soft">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="h-6 w-6 shrink-0 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>You have {{ 5 - $links_count }} remaining links to create.</span>
            </div>
        @endif

        @if ($links_count == 5)
            <div role="alert" class="alert alert-error alert-soft">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="h-6 w-6 shrink-0 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>You have reached the maximum limit of links. Please delete one to create a new link.</span>
            </div>
        @endif
    </div>
</div>
