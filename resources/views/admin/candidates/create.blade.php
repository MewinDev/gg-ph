<x-app-layout>
    <main class="overflow-hidden pb-10 pt-5">
        <form action="{{ route('admin.candidates.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <header class="mb-5">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                    Add Candidates Information
                </h2>
            </header>

            <div class="grid sm:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-6">
                <!-- Left Section -->
                <section class="col-span-1 sm:col-span-2 lg:col-span-2 xl:col-span-2 space-y-7">
                    <div>
                        <h3 class="text-lg font-bold text-gray-700 dark:text-gray-200 mb-2">Candidate Overview</h3>
                        <div class="space-y-7">
                            @include('admin.candidates.partials.profile')
                            @include('admin.candidates.partials.biography')
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-bold text-gray-700 dark:text-gray-200 mb-2">Vision, Mission & Track Record</h3>
                        <div class="space-y-7">
                            @include('admin.candidates.partials.platform')
                            @include('admin.candidates.partials.achievement')
                            @include('admin.candidates.partials.position')
                        </div>
                    </div>
                </section>

                <!-- Right Section -->
                <section class="col-span-1 sm:col-span-2 md:col-span-2 lg:col-span-3 xl:col-span-4 space-y-7">
                    <div>
                        <h3 class="text-lg font-bold text-gray-700 dark:text-gray-200 mb-2">Personal & Background Information</h3>
                        <div class="space-y-7">
                            @include('admin.candidates.partials.information')
                            @include('admin.candidates.partials.education')
                            @include('admin.candidates.partials.experience')
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-bold text-gray-700 dark:text-gray-200 mb-2">Advocacy</h3>
                        @include('admin.candidates.partials.advocacies')

                    </div>

                    <div>
                        <h3 class="text-lg font-bold text-gray-700 dark:text-gray-200 mb-2">Affiliation</h3>
                        <article class="grid xl:grid-cols-2 gap-4">
                            <div>
                                @include('admin.candidates.partials.team')
                            </div>
                            <div>
                                @include('admin.candidates.partials.partylist')
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </form>
    </main>
</x-app-layout>
