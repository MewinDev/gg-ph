<x-app-layout>
    <min class="overflow-hidden pb-10 pt-5">
        <div class="mt-3">
            <x-templates.breadcrumb :breadcrumb="[
            ['name' => 'Back', 'link' => route('dashboard')],
            ['name' => 'Candidates Information', 'link' => '']
        ]" />
        </div>

        <form action="{{ route('admin.candidates.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <header class="flex my-4 gap-3 items-center">
                <h2 class=" text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Add Candidates Information</h2>
                <x-forms.button type="submit" name="savecandidate" id="savecandidate" extraClass="text-xs"> {{ __('Save') }}</x-forms.button>
            </header>
            <div class="grid xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
                <section class="col-span-1 sm:col-span-1 md:col-span-2 lg:col-span-2 xl:col-span-2 space-y-4">
                    @include('admin.candidates.partials.profile')
                    @include('admin.candidates.partials.position')
                </section>

                <section class="col-span-1 sm:col-span-2 md:col-span-2 lg:col-span-3 xl:col-span-4">
                    @include('admin.candidates.partials.information')
                </section>
            </div>
        </form>
</x-app-layout>
