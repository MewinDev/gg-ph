<x-app-layout>
    <div class="overflow-hidden pb-10 pt-5">
        <h2 class="mb-4 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Dashboard</h2>
        <div class="grid xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
            @foreach ($candidatesTotal as $type => $count)
                <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex flex-row sm:flex-col xl:flex-row items-start gap-3">
                        <div class="p-3 bg-blue-100 dark:bg-blue-600 rounded-md">
                            <svg class="h-9 w-9 text-blue-500 dark:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                        </div>
                        <div>
                            <a href="{{ route('candidates.index', $type) }}" class="hover:underline underline-offset-4 text-lg font-bold text-gray-900 tracking-wide dark:text-white decoration-2 decoration-blue-400 dark:decoration-blue-600 capitalize">{{ $type }} Level</a>
                            <div class="mt-1 text-lg tracking-tight text-gray-700 dark:text-gray-400">
                                {{ $count }} Candidates
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
