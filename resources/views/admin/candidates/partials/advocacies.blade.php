<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Candidate Advocacies</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
        List and describe the candidate’s key advocacies and causes they actively support.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        <section class="col-span-2">
            <x-forms.input-label value="Supporting Advocacy #1" />
            <x-forms.text-input color="gray" label="Supporting Advocacy" name="advocacy_1" id="advocacy_1" type="text" placeholder="E.g. Free Public Education" />
            <x-forms.input-error :messages="$errors->get('advocacy_1')" class="mt-2" />
        </section>
    </div>

    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save Advocacies') }}</x-forms.button>
</div>
