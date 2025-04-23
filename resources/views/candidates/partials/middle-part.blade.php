<section>
    <div id="custom-controls-gallery" class="relative w-full mb-16 mt-5" data-carousel="slide">
    
        <!-- Carousel wrapper -->
        <div class="relative my-10 overflow-hidden rounded-lg">
            <div class="carousel-inner">
                @foreach ([
                    ['quote' => 'Current Secretary of the Department of the Interior and Local Government (DILG)', 'name' => 'Michael Gough', 'role' => 'CEO at Google', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png'],
                    ['quote' => 'Former Chairman of the Metro Manila Development Authority (MMDA)', 'name' => 'Michael Gough', 'role' => 'CEO at Google', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png'],
                    ['quote' => 'Multiple-term Mayor of Mandaluyong City', 'name' => 'Michael Gough', 'role' => 'CEO at Google', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png'],
                    ['quote' => 'Former Congressman of Mandaluyong`s Lone District', 'name' => 'Michael Gough', 'role' => 'CEO at Google', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png']
                ] as $index => $testimonial)
                <div class="carousel-item {{ $index === 0 ? 'block' : 'hidden' }}" data-carousel-item>
                    <figure class="max-w-screen-sm mx-auto text-center">
                        <header class="flex items-center justify-center gap-7 mb-6">
                            <svg class="w-10 h-10 text-blue-500 dark:text-blue-600 -rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                            </svg>
                            <span class="text-2xl font-bold text-gray-900 dark:text-white uppercase">Achievements</span>
                            <svg class="w-10 h-10 text-blue-500 dark:text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                            </svg>
                        </header>
                        <blockquote>
                            <p class="text-2xl italic font-medium text-gray-700 dark:text-gray-300">"{{ $testimonial['quote'] }}"</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="{{ Str::lower($candidate->can_firstname . " " . $candidate->can_lastname) }}'s profile picture">
                            <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                                <span class="pe-3 font-medium text-gray-900 dark:text-white capitalize">{{ Str::lower($candidate->can_firstname . " " . $candidate->can_lastname) }}</span>
                                <span class="ps-3 text-sm text-gray-500 dark:text-gray-400">{{ ucfirst($candidate->position->pos_name) }} Candidate</span>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                @endforeach
            </div>
        </div>
    
        <!-- Navigation buttons -->
        <div class="flex justify-center items-center">
            <button type="button" class="me-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                    <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="text-gray-400 hover:text-gray-900 dark:hover:text-white group-focus:text-gray-900 dark:group-focus:text-white">
                    <svg class="rtl:rotate-180 w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    @php
        $count = count([
            ['experience' => 'Mayor of Mandaluyong City', 'since' => '1998 – 2004, 2007 – 2016'],
            ['experience' => 'Congressman, Lone District of Mandaluyong', 'since' => '2004 – 2007'],
            ['experience' => 'Chairman of MMDA', 'since' => '2021 – 2022'],
            ['experience' => 'Secretary, DILG', 'since' => '2022 – 2025'],
        ]);
        $columns = ($count % 2 === 0) ? 2 : 3;
    @endphp

    <div class="max-w-5xl mx-auto grid content-start shadow-xs dark:border-gray-700 md:grid-cols-{{ $columns }} dark:bg-gray-800">
        @foreach ([
                ['experience' => 'Mayor of Mandaluyong City', 'since' => '1998 – 2004, 2007 – 2016'],
                ['experience' => 'Congressman, Lone District of Mandaluyong', 'since' => '2004 – 2007'],
                ['experience' => 'Chairman of MMDA', 'since' => '2021 – 2022'],
                ['experience' => 'Secretary, DILG', 'since' => '2022 – 2025'],
        ] as $testimonial)
        <figure class="flex flex-col items-center justify-center border border-gray-300 py-4 sm:p-4 text-center dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800">
            <blockquote class="text-gray-500 dark:text-gray-400">
                <div class="flex flex-col items-center justify-center gap-3 mb-3">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                    </svg>
                    <p class="text-base lg:text-lg font-semibold text-gray-800 dark:text-white">{{ $testimonial['experience'] }}</p>
                </div>
                <h3 class="text-sm lg:text-base font-normal text-gray-900 dark:text-gray-400">{{ $testimonial['since'] }}</h3>
            </blockquote>
        </figure>
        @endforeach
    </div>
</section>
