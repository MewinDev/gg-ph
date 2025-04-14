<x-app-layout>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pb-10 pt-3 px-2">
        <div class="p-6 text-gray-900 dark:text-gray-100">

            <header class="w-full text-left pb-8">
                <h2 class="mb-4 text-2xl md:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Senatorial Candidates</h2>
                <p class="font-light text-gray-500 text-base md:text-xl dark:text-gray-400">Explore the comprehensive profiles of our senatorial candidates, highlighting their qualifications, achievements, and aspirations for a better future.</p>
            </header> 

            <x-templates.card :candidates="[(object)['can_ballot_number' => '01', 'can_firstname' => 'John Carlo', 'can_middlename' => 'Arroyo', 'can_lastname' => 'Merin', 'pos_name' => 'Senatorial Candidate', 'can_picture' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png']]"/>
        </div>
    </div>
</x-app-layout>