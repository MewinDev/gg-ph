<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <header>
        <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">General Information</h2>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Please fill in the candidate's information.</p>
    </header>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        <section>
            <x-forms.input-label value="First Name" />
            <x-forms.text-input color="gray" label="First Name" name="first_name" id="first_name" type="text"
                placeholder="Enter first name" />
            <x-forms.input-error :messages="$errors->get('first_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Middle Name" />
            <x-forms.text-input color="gray" label="Middle Name" name="middle_name" id="middle_name" type="text"
                placeholder="Enter middle name" />
            <x-forms.input-error :messages="$errors->get('middle_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Last Name" />
            <x-forms.text-input color="gray" label="Last Name" name="last_name" id="last_name" type="text"
                placeholder="Enter last name" />
            <x-forms.input-error :messages="$errors->get('last_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Nickname" />
            <x-forms.text-input color="gray" label="Nickname" name="nick_name" id="nick_name" type="text"
                placeholder="Enter nickname" />
            <x-forms.input-error :messages="$errors->get('nick_name')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Birth Date" />
            <x-forms.text-input color="gray" label="Birth Date" name="birthdate" id="birthdate" type="date"
                placeholder="Select birth date" />
            <x-forms.input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Age" />
            <x-forms.text-input color="gray" label="Age" name="age" id="age" type="number"
                placeholder="Enter age" />
            <x-forms.input-error :messages="$errors->get('age')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Sex" />
            <x-forms.select-input :options="['female' => 'Female', 'male' => 'Male']" color="gray" label="Sex" name="sex" id="sex"
                type="text" placeholder="Select sex" />
            <x-forms.input-error :messages="$errors->get('sex')" class="mt-2" />
        </section>
        <section>
            <x-forms.input-label value="Political Service" />
            <x-forms.text-input color="gray" label="Years of Political Service" name="yrsofserv" id="yrsofserv"
                type="number" placeholder="Enter years of political service" />
            <x-forms.input-error :messages="$errors->get('yrsofserv')" class="mt-2" />
        </section>
    </div>
    <x-forms.button type="submit" extraClass="mt-4">{{ __('Save info') }}</x-forms.button>
</div>
