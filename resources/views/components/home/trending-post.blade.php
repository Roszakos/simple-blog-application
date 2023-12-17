@props(['trendingPost'])
<a href="{{ route('post.view', $trendingPost->slug) }}">
    <div>

        @if ($trendingPost->image)
            <div class="relative sm:h-[30rem] h-[25rem] bg-black/20 sm:rounded-[1rem] bg-cover bg-center group"
                style="background-image: url({{ asset($trendingPost->image) }})">
            @else
                <div class="relative sm:h-[30rem] h-[25rem] bg-black/20 sm:rounded-[1rem]">
        @endif
        <div title="Views"
            class="absolute top-2 right-2 flex gap-1 z-10 text-white group-hover:bg-transparent transition duration-700 bg-black/70 py-1 px-2 rounded-[1.5rem]">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            {{ $trendingPost->views }}
        </div>
        <div
            class="post absolute bottom-0 pb-5 pt-4 bg-black/70 text-white w-full px-4 min-h-[8rem] grid sm:rounded-b-[1rem] grid-flow-row grid-rows-3 group-hover:animate-expand-to-full animate-shrink-from-full opacity-0">
            <div class="text-3xl font-bold tracking-wider row-span-2">
                <div>
                    {{ $trendingPost->title }}
                </div>
                <div
                    class="w-[70%] text-lg font-normal truncate-home-trending opacity-0 group-hover:animate-opacity-to-100 mt-2 animate-opacity-to-0 pointer-events-none">
                    {!! $trendingPost->snippet !!}
                </div>
            </div>

            <div class="flex text-xl gap-3 w-full justify-end items-end row-start-3">
                <div>
                    {{ $trendingPost->author }}
                </div>
                <div>
                    {{ date('d-m-Y', strtotime($trendingPost->created_at)) }}
                </div>
            </div>
        </div>
    </div>
</a>
<div class="flex gap-2 justify-end pt-1 max-sm:px-2">
    <div class="flex items-center gap-1 text-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
        </svg>

        {{ $trendingPost->upvotes }}
    </div>
    <div class="flex gap-1 items-center text-lg">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M7.5 15h2.25m8.024-9.75c.011.05.028.1.052.148.591 1.2.924 2.55.924 3.977a8.96 8.96 0 01-.999 4.125m.023-8.25c-.076-.365.183-.75.575-.75h.908c.889 0 1.713.518 1.972 1.368.339 1.11.521 2.287.521 3.507 0 1.553-.295 3.036-.831 4.398C20.613 14.547 19.833 15 19 15h-1.053c-.472 0-.745-.556-.5-.96a8.95 8.95 0 00.303-.54m.023-8.25H16.48a4.5 4.5 0 01-1.423-.23l-3.114-1.04a4.5 4.5 0 00-1.423-.23H6.504c-.618 0-1.217.247-1.605.729A11.95 11.95 0 002.25 12c0 .434.023.863.068 1.285C2.427 14.306 3.346 15 4.372 15h3.126c.618 0 .991.724.725 1.282A7.471 7.471 0 007.5 19.5a2.25 2.25 0 002.25 2.25.75.75 0 00.75-.75v-.633c0-.573.11-1.14.322-1.672.304-.76.93-1.33 1.653-1.715a9.04 9.04 0 002.86-2.4c.498-.634 1.226-1.08 2.032-1.08h.384" />
        </svg>

        {{ $trendingPost->downvotes }}
    </div>
</div>
