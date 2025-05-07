<x-app-layout>
    <min class="overflow-hidden pb-10 pt-5">
        <div>
            <x-templates.breadcrumb :breadcrumb="[
                ['name' => 'Back', 'link' => route('dashboard')],
                ['name' => 'Candidates Information', 'link' => ''],
            ]" />
        </div>

        <h2 class="my-5 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Add Candidates Information</h2>

        <section class="bg-white dark:bg-gray-800 p-5 border dark:border-gray-700 rounded-t-2xl">
            <form action="{{ route('admin.candidates.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('candidates.partials.form')
            </form>
        </section>
</x-app-layout>
