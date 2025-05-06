<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Candidate Achievements</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">List the notable achievements or recognitions of the
        candidate.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        <section class="col-span-2">
            <x-forms.input-label value="Title of Achievement" />
            <x-forms.text-input color="gray" label="Achievement Title" name="achievement_title" id="achievement_title"
                type="text" placeholder="e.g. Passed Free Education Bill" />
            <x-forms.input-error :messages="$errors->get('achievement_title')" class="mt-2" />
        </section>

        <section>
            <x-forms.input-label value="Date Achieved" />
            <x-forms.text-input color="gray" label="Date Achieved" name="date_achieved" id="date_achieved"
                type="date" placeholder="Date" />
            <x-forms.input-error :messages="$errors->get('date_achieved')" class="mt-2" />
        </section>

        <section>
            <x-forms.input-label value="Recognition Level" />
            <x-forms.select-input :options="['local' => 'Local', 'national' => 'National', 'international' => 'International']" color="gray" label="Recognition Level" name="recognition_level"
                id="recognition_level" />
            <x-forms.input-error :messages="$errors->get('recognition_level')" class="mt-2" />
        </section>
    </div>

    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save Achievement') }}</x-forms.button>
</div>
