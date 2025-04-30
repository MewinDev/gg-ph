<x-app-layout>
    <div class="overflow-hidden pb-10 pt-3">
        <div class="md:py-5 text-gray-900 dark:text-gray-100">

            <header class="text-left pb-5">
                <h1 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white capitalize">{{ $electionTypeName }} Candidates</h1>
                <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400">Explore the comprehensive profiles of our senatorial candidates, highlighting their qualifications, achievements, and aspirations for a better future.</p>
            </header>

            <section class="space-y-7">
                    @foreach ($groupedCandidates as $positionName => $candidates)
                        <article>
                            <h2 class="mb-7 text-xl md:text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white uppercase border-l-4 border-blue-400 pl-2">{{ $positionName }}</h2>
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
                                @foreach ($candidates as $candidate)
                                <x-templates.card :candidate="$candidate" href="{{ route('candidates.show', [slugify($electionTypeName), slugify($candidate->position->pos_code), $candidate->id]) }}"/>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
            </section>
        </div>
    </div>
</x-app-layout>
