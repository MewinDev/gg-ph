<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Candidate Position</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Select position to the candidate.</p>
    <section class="mt-3 space-y-3">
        @foreach ($grouped as $typeName => $positions)
            <div class="w-full text-sm font-semibold capitalize text-gray-700 dark:text-white">{{ $typeName }}</div>
            @foreach ($positions as $position)
                <div class="flex items-center">
                    <input type="radio" id="{{ $position->id }}" name="position" value="{{ $position->id }}" class="sr-only peer" required />
                    <label for="{{ $position->id }}" class="inline-flex items-center justify-between w-full py-2 px-4 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 dark:peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="w-full text-sm font-semibold capitalize">{{ $position->pos_name }}</div>
                        <svg class="w-5 h-5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </label>
                </div>
            @endforeach
        @endforeach
    </section>
    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save Position') }}</x-forms.button>
</div>
