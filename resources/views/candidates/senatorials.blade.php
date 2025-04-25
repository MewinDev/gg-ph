<x-app-layout>
    <div class="overflow-hidden lg:rounded-lg pb-10 pt-3 px-2">
        <div class="p-6 text-gray-900 dark:text-gray-100">

            <header class="mx-auto max-w-screen-xl text-left pb-5">
                <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Senatorial Candidates</h2>
                <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400">Explore the comprehensive profiles of our senatorial candidates, highlighting their qualifications, achievements, and aspirations for a better future.</p>
            </header>

            <x-templates.card :candidates="$candidates"/>
        </div>
    </div>
</x-app-layout>
