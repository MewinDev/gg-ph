<x-app-layout>
  <div class=" overflow-hidden shadow-sm lg:rounded-lg pb-10 pt-3 px-2">
      <div class="md:p-5 text-gray-900 dark:text-gray-100 px-4 md:px-8 space-y-10">

            <div class="bg-white dark:bg-gray-800 p-5 rounded-xl">
                <x-templates.breadcrumb :breadcrumb="[
                ['name' => 'Home', 'link' => route('senatorials.index')],
                ['name' => ucfirst($candidate->position->pos_name) . ' Information', 'link' => '']
            ]" />
            </div>

            <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">

                <div class="col-span-1">
                    <div class="sticky top-4">
                        @include('candidates.partials.profile-information')
                    </div>
                </div>
           
                <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-4">
                    @include('candidates.partials.plans-information')
                </div>

            </main>
      </div>
  </div>
</x-app-layout>