<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Profile Picture</h2>
    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Upload a profile picture for the candidate.</p>
    <div class="flex items-start gap-5 mt-3">
        <img src="{{ asset('images/gg-ph-logo.png') }}" alt="candidate-profile" class="w-24 h-24 object-cover rounded-md border border-gray-300 dark:border-gray-600" />
        <div>
            <x-forms.file-input color="white" label="Profile" name="profile" id="profile" type="file" accept=".jpg,.jpeg,.png,.svg" placeholder="Profile" required />
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, JPG or PNG. Max size of 800K.</p>
            <div class="flex items-center gap-3 mt-4">
                <x-forms.button type="submit">{{ __('Save Profile') }}</x-forms.button>
                <x-forms.button type="submit" color="gray" :outline="true">{{ __('Remove') }}</x-forms.button>
            </div>
        </div>
    </div>
</div>
