<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Candidate Experiences</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Please fill in the candidate's relevant professional and political experiences.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        <section class="col-span-2">
            <x-forms.input-label value="Position Held" />
            <x-forms.text-input color="gray" label="Position Held" name="position" id="position" type="text" placeholder="e.g. Mayor, Senator, Barangay Captain" required />
            <x-forms.input-error :messages="$errors->get('position')" class="mt-2" />
        </section>

        <section class="col-span-2">
            <x-forms.input-label value="Organization / Government Unit" />
            <x-forms.text-input color="gray" label="Organization" name="organization" id="organization" type="text" placeholder="e.g. Quezon City LGU" required />
            <x-forms.input-error :messages="$errors->get('organization')" class="mt-2" />
        </section>

        <section>
            <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Date</label>
            <input type="month" id="start_date" name="start_date" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
            <x-forms.input-error :messages="$errors->get('start_date')" class="mt-2" />
        </section>

        <section>
            <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Date</label>
            <input type="month" id="end_date" name="end_date" required
                class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-600 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white" />
            <x-forms.input-error :messages="$errors->get('end_date')" class="mt-2" />
        </section>
    </div>

    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save Experience') }}</x-forms.button>
</div>
