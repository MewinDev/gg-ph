<div class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 p-5 rounded-md">
    <header>
        <h2 class="text-lg sm:text-xl font-semibold text-gray-900 dark:text-white">Candidate Platform</h2>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            Summarize the candidate's main platform and optionally upload a related image or banner.
        </p>
    </header>

    <section class="mt-4 space-y-4">
        <!-- Platform Textarea -->
        <div>
            <x-forms.input-label value="Platform" />
            <x-forms.text-area color="gray" id="platform" name="platform" rows="8" required placeholder="E.g. Education reform, healthcare access..."></x-forms.text-area>
            <x-forms.input-error :messages="$errors->get('platform')" class="mt-2" />
        </div>

        <!-- Platform Image Upload -->
        <div>
            <x-forms.input-label value="Upload Platform Image / Videos" />
            <x-forms.file-input color="gray" label="Profile" name="profile" id="profile" type="file" accept=".jpg,.jpeg,.png,.svg" placeholder="Profile" required />
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-300">SVG, JPG or PNG. Max size of 800K.</p>
            <x-forms.input-error :messages="$errors->get('platform_image')" class="mt-2" />
        </div>
    </section>

    <div class="mt-4">
        <x-forms.button type="submit">{{ __('Save Platform') }}</x-forms.button>
    </div>
</div>
