<aside class="w-full" id="profile">
    <div class="flex flex-col sm:flex-row lg:flex-col gap-5 font-light text-gray-500 sm:text-lg dark:text-gray-400">

        <article class="group flex flex-col bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <header class="relative flex flex-col items-center p-5">
                <img x-data x-on:click.prevent="$dispatch('open-modal', 'showprofile')" class="cursor-pointer w-full h-auto mb-3 rounded-xl shadow-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie image" />
                <div class="text-center">
                    <h1 class="mb-1 text-lg font-medium text-gray-900 dark:text-white capitalize">{{ Str::lower($selectedCandidate->can_firstname . " " . $selectedCandidate->can_middlename . " " . $selectedCandidate->can_lastname) }}</h1>
                    <p class="text-base text-gray-500 dark:text-gray-400 whitespace-nowrap capitalize">{{ $selectedCandidate->position->pos_name }} Candidate</p>
                </div>
                <div class="absolute top-2 right-2 inline-flex items-center justify-center w-12 h-12 sm:w-9 sm:h-9 text-lg font-bold text-white bg-blue-500 border-2 border-white rounded-full dark:border-gray-800">{{ $selectedCandidate->can_ballot_number }}</div>
            </header>
            
            <nav>
                <ul class="flex justify-center mb-4 space-x-8 sm:space-x-4">
                    <li>
                        <a href="#" class="text-[#39569c] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-8 h-8 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#00acee] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-8 h-8 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 hover:text-gray-900 dark:hover:text-white dark:text-gray-300">
                            <svg class="w-8 h-8 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-[#ea4c89] hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-8 h-8 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" /></svg>
                        </a> 
                    </li> 
                </ul>
            </nav>
        </article>

        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-4">
            <h2 class="mb-3 text-lg font-bold text-gray-900 dark:text-white capitalize">Survey Ratings:</h2>
            <div class="flex items-center mb-2">
            <svg class="w-4 h-4 text-blue-500 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
            </svg>
            @php
                // Sample data for ratings
                $ratings = [
                ['star' => '5 star', 'count' => rand(60, 80)],
                ['star' => '4 star', 'count' => rand(10, 20)],
                ['star' => '3 star', 'count' => rand(5, 10)],
                ['star' => '2 star', 'count' => rand(3, 5)],
                ['star' => '1 star', 'count' => rand(1, 3)],
                ];
                $totalRatings = array_sum(array_column($ratings, 'count'));
                $averageRating = 0;
                foreach ($ratings as $rating) {
                $starValue = (int) filter_var($rating['star'], FILTER_SANITIZE_NUMBER_INT);
                $averageRating += $starValue * $rating['count'];
                }
                $averageRating = $totalRatings > 0 ? $averageRating / $totalRatings : 0;
            @endphp
            <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">{{ number_format($averageRating, 2) }} out of 5.00 <span class="lg:hidden">({{ number_format($totalRatings) }} global ratings)</span></p>
            </div>
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400 lg:block hidden">{{ number_format($totalRatings) }} global ratings</p>
            @foreach ($ratings as $rating)
            @php
                $percentage = $totalRatings > 0 ? ($rating['count'] / $totalRatings) * 100 : 0;
            @endphp
            <div class="flex items-center justify-between gap-3 mt-4 whitespace-nowrap">
                <label class="text-left text-sm font-medium text-gray-900 dark:text-white">{{ $rating['star'] }}</label>
                <div class="w-full h-5 bg-gray-200 rounded-sm dark:bg-gray-700">
                    <div class="animate-pulse h-5 bg-blue-500 rounded-sm" style="width: {{ $percentage }}%"></div>
                </div>
                <span class="w-24 lg:w-28 text-right text-sm font-medium text-gray-500 dark:text-gray-400">{{ number_format($percentage, 2) }}%</span>
            </div>
            @endforeach
        </div>

    </div>
</aside>

<x-modal name="showprofile" title="Candidate Profile" maxWidth="xl"> 
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-8">
        <div class="space-y-5 divide-y divide-gray-200 dark:divide-gray-700">
            <div class="flex space-x-3">
                <img class="h-16 w-16 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie avatar" />
                <div class="mt-2">
                    <h2 class="mb-2 text-lg font-bold leading-none text-gray-900 dark:text-white capitalize">{{ Str::lower($selectedCandidate->can_firstname . " " . $selectedCandidate->can_lastname) }}</h2>
                    <span class="rounded bg-blue-100 px-1.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">{{ $selectedCandidate->can_nickname }} </span>
                </div>
            </div>
            <dl class="pt-2">
                <dt class="font-semibold text-gray-900 dark:text-white">Full Name</dt>
                <dd class="text-gray-500 dark:text-gray-400 capitalize">{{ Str::lower($selectedCandidate->can_firstname . " " . $selectedCandidate->can_middlename . " " . $selectedCandidate->can_lastname) }}</dd>
            </dl>
            <div class="pt-2 grid grid-cols-2 gap-3">
                <dl>
                    <dt class="font-semibold text-gray-900 dark:text-white">Age</dt>
                    <dd class="text-gray-500 dark:text-gray-400 capitalize">54 Year Old</dd>
                </dl>
                <dl>
                    <dt class="font-semibold text-gray-900 dark:text-white">Sex</dt>
                    <dd class="text-gray-500 dark:text-gray-400 capitalize">{{ Str::lower($selectedCandidate->can_sex) }}</dd>
                </dl>
            </div>
        </div>
        <div class="space-y-6 mt-1 divide-y divide-gray-200 dark:divide-gray-700 border-t sm:border-0 border-gray-200 dark:border-gray-700">
            <dl class="pt-2">
                <dt class="font-semibold text-gray-900 dark:text-white">Position</dt>
                <dd class="text-gray-500 dark:text-gray-400 capitalize">{{ Str::lower($selectedCandidate->position->pos_name) }}</dd>
            </dl>
            <dl class="pt-2">
                <dt class="font-semibold text-gray-900 dark:text-white">Political Party</dt>
                <dd class="text-gray-500 dark:text-gray-400 capitalize">Lakas–CMD</dd>
            </dl>
            <dl class="pt-2">
                <dt class="font-semibold text-gray-900 dark:text-white">Campaign Team</dt>
                <dd class="text-gray-500 dark:text-gray-400 capitalize">Giting</dd>
            </dl>
        </div>
    </div>
</x-modal>