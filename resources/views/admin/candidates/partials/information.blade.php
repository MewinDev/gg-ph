<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">General Information</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Please fill in the candidate's general information.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
        <section>
            <x-forms.input-label value="First Name" />
            <x-forms.text-input color="white" label="First Name" name="first_name" id="first_name" type="text" placeholder="First Name" required />
            <x-forms.input-error :messages="$errors->get('first_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Middle Name" />
            <x-forms.text-input color="white" label="Middle Name" name="middle_name" id="middle_name" type="text" placeholder="Middle Name" required />
            <x-forms.input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Last Name" />
            <x-forms.text-input color="white" label="Last Name" name="last_name" id="last_name" type="text" placeholder="Last Name" required />
            <x-forms.input-error :messages="$errors->get('last_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Nickname" />
            <x-forms.text-input color="white" label="Nickname" name="nick_name" id="nick_name" type="text" placeholder="Nickname" required />
            <x-forms.input-error :messages="$errors->get('nick_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Age" />
            <x-forms.text-input color="white" label="Age" name="age" id="age" type="number" placeholder="Age" required />
            <x-forms.input-error :messages="$errors->get('age')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Sex" />
            <x-forms.select-input :options="['female' => 'Female', 'male' => 'Male']" color="white" label="Sex" name="sex" id="sex" type="text" placeholder="Sex" required />
            <x-forms.input-error :messages="$errors->get('sex')" class="mt-2" />
        </section>
    </div>
    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save info') }}</x-forms.button>
</div>
