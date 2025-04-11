<x-app-layout>
    <div class="py-5">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pb-10">
              <div class="p-6 text-gray-900 dark:text-gray-100">

                <div class="mx-auto max-w-screen-sm text-center my-8">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
                </div> 

                 <x-templates.card :candidates="[(object)['loc_firstname' => 'John Carlo', 'loc_middlename' => 'Arroyo', 'loc_lastname' => 'Merin', 'pos_name' => 'Senatorial Candidate']]"/>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>