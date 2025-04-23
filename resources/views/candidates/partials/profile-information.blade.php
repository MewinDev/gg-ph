<aside class="w-full" id="profile">
    <div class="flex flex-col md:flex-col gap-5 font-light text-gray-500 sm:text-lg dark:text-gray-400">

        <article class="group w-full flex lg:flex-col bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <header class="flex flex-col items-center p-5">
                <img class="w-48 h-auto mb-3 rounded-xl shadow-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie image" />
                <div class="text-right lg:text-center">
                    <h1 class="mb-1 text-base sm:text-lg font-medium text-gray-900 dark:text-white capitalize">{{ Str::lower($candidate->can_firstname . " " . $candidate->can_lastname) }}</h1>
                    <p class="text-xs sm:text-sm text-gray-500 dark:text-gray-400 whitespace-nowrap capitalize">{{ $candidate->position->pos_name }} Candidate</p>
                </div>
            </header>
            <section class="group-hover:block my-5 md:my-0 px-5 pb-5 lg:pt-0 pt-5 md:-pt-5 w-full lg:hidden">
                <h1 class="mb-2 text-lg md:text-base font-bold text-gray-900 dark:text-white capitalize">My Information: </h1>
                <div class="group-hover:grid grid md:grid-cols-2 gap-3 md:gap-5">
                    @if (!empty($candidate->can_nickname))
                        <dl class="space-y-1 border-b border-gray-200 dark:border-gray-500 pb-2">
                            <dt class="text-base md:text-lg lg:text-base font-medium text-gray-900 dark:text-white">Nickname</dt>
                            <dd class="text-sm sm:text-base md:text-sm text-gray-500 dark:text-gray-400 capitalize">
                                    {{ Str::lower($candidate->can_nickname) }}
                            </dd>
                        </dl>
                    @endif
                    <dl class="space-y-1 border-b border-gray-200 dark:border-gray-500 pb-2">
                        <dt class="text-base md:text-lg lg:text-base font-medium text-gray-900 dark:text-white">Sex</dt>
                        <dd class="text-sm sm:text-base md:text-sm text-gray-500 dark:text-gray-400 capitalize">
                            {{ Str::lower($candidate->can_sex) }}
                        </dd>
                    </dl>
                    @if (!empty($candidate->partylist->par_name))
                        <dl class="space-y-1 border-b border-gray-200 dark:border-gray-500 pb-2">
                            <dt class="text-base md:text-lg mb-1 font-medium text-gray-900 dark:text-white">Party List</dt>
                            <dd class="text-sm sm:text-base md:text-sm flex items-center gap-4 text-gray-500 dark:text-gray-400 capitalize">{{ Str::lower($candidate->partylist->par_name) }}</dd>
                        </dl>
                    @endif
                    @if (!empty($candidate->campaignteam->camp_name))
                        <dl class="space-y-1 border-b border-gray-200 dark:border-gray-500 pb-2">
                            <dt class="text-base md:text-lg font-medium text-gray-900 dark:text-white">Campaign Team</dt>
                            <dd class="text-sm sm:text-base md:text-sm text-gray-500 dark:text-gray-400 capitalize">{{ Str::lower($candidate->campaignteam->camp_nam) }}</dd>
                        </dl>
                    @endif
                </div>
            </section>
        </article>

        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 p-4">
            <h2 class="mb-3 text-lg font-bold text-gray-900 dark:text-white capitalize">Survey Ratings:</h2>
            <div class="flex items-center mb-2">
            <svg class="w-4 h-4 text-blue-400 mb-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
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
                    <div class="animate-pulse h-5 bg-blue-400 rounded-sm" style="width: {{ $percentage }}%"></div>
                </div>
                <span class="w-16 lg:w-28 text-right text-sm font-medium text-gray-500 dark:text-gray-400">{{ number_format($percentage, 2) }}%</span>
            </div>
            @endforeach
        </div>

    </div>
</aside>
