<x-app-layout>
    <div class="overflow-hidden pb-10 pt-5">
        <div class="md:py-5 text-gray-900 dark:text-gray-100">

            <header class="text-left pb-5">
                <h1
                    class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white capitalize">
                    {{ $electionTypeName }} Level</h1>
                <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400">Explore the comprehensive
                    profiles of our senatorial candidates, highlighting their qualifications, achievements, and
                    aspirations for a better future.</p>
            </header>

            <section class="space-y-7 mx-5">

                @foreach ($groupedCandidates->groupBy('position.type_name') as $positionName => $candidates)
                    <article>
                        <h2
                            class=" text-xl md:text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white uppercase border-l-4 border-blue-400 pl-2">
                            {{ $positionName }}</h2>

                        <article class="mb-7">
                            <div class="flex items-center mx-auto">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>

                                    </div>
                                    <x-forms.text-input color="gray" name="search-team" id="search-team"
                                        extraClass="ps-10" placeholder="Search party list name..." />
                                </div>
                            </div>
                        </article>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                            @foreach ($candidates as $candidate)
                                <x-templates.card :candidate="$candidate"
                                    href="{{ route('candidates.show', [slugify($electionTypeName), slugify($candidate->position->pos_code), $candidate->id]) }}" />
                            @endforeach
                        </div>
                    </article>
                @endforeach

                <div>
                    {{ $groupedCandidates->links() }}
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
