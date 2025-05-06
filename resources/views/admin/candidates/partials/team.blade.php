<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Campaign Team</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Assign team to the candidate.</p>

    <section class="mt-3 space-y-3">

        <div class="flex items-center mx-auto">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                </div>
                <x-forms.text-input color="gray" name="search-team" id="search-team" extraClass="ps-10"
                    placeholder="Search team name..." />
            </div>
        </div>

        <ol class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
            <li>
                <div class="p-3 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                    <div href="#" class="items-start flex">
                        <img class="w-10 h-10 mb-3 me-3 rounded-md sm:mb-0" src="{{ asset('images/gg-ph-logo.png') }}"
                            alt="Team logo image" />
                        <div class="w-full flex items-center justify-between gap-3 text-gray-600 dark:text-gray-400">
                            <div>
                                <h3 class="text-sm font-normal"><span
                                        class="font-medium text-gray-900 dark:text-white">Giting ng Pasig</span></h3>
                                <p class="text-xs font-normal">"I wanted to share a webinar zeroheight."</p>
                            </div>
                            <x-forms.button type="submit" size="xs" color="gray"
                                outline="true">Unassigned</x-forms.button>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="p-3 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
                    <div href="#" class="items-start flex">
                        <img class="w-10 h-10 mb-3 me-3 rounded-md sm:mb-0" src="{{ asset('images/gg-ph-logo.png') }}"
                            alt="Team logo image" />
                        <div class="w-full flex items-center justify-between gap-3 text-gray-600 dark:text-gray-400">
                            <div>
                                <h3 class="text-sm font-normal"><span
                                        class="font-medium text-gray-900 dark:text-white">Pasigueño</span></h3>
                                <p class="text-xs font-normal">"I wanted to share a webinar zeroheight."</p>
                            </div>
                            <x-forms.button type="submit" size="xs" disabled>Assign</x-forms.button>
                        </div>
                    </div>
                </div>
            </li>
        </ol>
    </section>
</div>
