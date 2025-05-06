<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <header>
        <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Education Info</h2>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Please fill in the candidate's education information.</p>
    </header>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        <section class="col-span-2">
            <x-forms.input-label value="School Name" />
            <x-forms.text-input color="gray" label="School Name" name="school_name[]" id="school_name" type="text" placeholder="e.g. University of the Philippines" required />
            <x-forms.input-error :messages="$errors->get('school_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Degree" />
            <x-forms.text-input color="gray" label="Degree" name="degree[]" id="degree" type="text" placeholder="e.g. Bachelor of Science" required />
            <x-forms.input-error :messages="$errors->get('degree')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Field of Study" />
            <x-forms.text-input color="gray" label="Field of Study" name="field_of_study[]" id="field_of_study" type="text" placeholder="e.g. Computer Science" required />
            <x-forms.input-error :messages="$errors->get('field_of_study')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Start Date" />
            <x-forms.text-input color="gray" label="Start Date" name="start_date[]" id="start_date" type="month" placeholder="e.g. 2015" required />
            <x-forms.input-error :messages="$errors->get('start_date')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="End Date" />
            <x-forms.text-input color="gray" label="End Date" name="end_date[]" id="end_date" type="month" placeholder="e.g. 2019" required />
            <x-forms.input-error :messages="$errors->get('end_date')" class="mt-2" />
        </section>
    </div>
    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save info') }}</x-forms.button>
</div>
