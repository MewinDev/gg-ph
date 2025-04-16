<x-app-layout>
  <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm lg:rounded-lg pb-10 pt-3 px-2">
      <div class="md:p-5 text-gray-900 dark:text-gray-100">

            <x-templates.breadcrumb :breadcrumb="[
                ['name' => 'Home', 'link' => route('senatorials.index')],
                ['name' => 'Senatorial Information', 'link' => '']
            ]" />

            <header class="w-full text-left pt-8">
                <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Information</h2>
            </header> 

      </div>
  </div>
</x-app-layout>