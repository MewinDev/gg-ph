<section id="team">
    <div class="py-8 mx-auto max-w-screen-xl text-center mt-5">
        <header class="mx-auto mb-8 max-w-screen-md lg:mb-16">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-blue-500 uppercase">team Giting ng Pasig</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
        </header>
        @php
            $members = [
                ['name' => 'Bonnie Green', 'position' => 'mayor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png'],
                ['name' => 'Helene Engels', 'position' => 'vice mayor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png'],
                ['name' => 'Jese Leos', 'position' => 'congressman', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor',  'district' => '1', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor',  'district' => '1', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor',  'district' => '1', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor',  'district' => '1', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor',  'district' => '1', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor',  'district' => '1', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Sofia Mcguire', 'position' => 'councilor',  'district' => '2', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png'],
                ['name' => 'Sofia Mcguire', 'position' => 'councilor',  'district' => '2', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png'],
                ['name' => 'Sofia Mcguire', 'position' => 'councilor',  'district' => '2', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png'],
                ['name' => 'Sofia Mcguire', 'position' => 'councilor',  'district' => '2', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png'],
                ['name' => 'Sofia Mcguire', 'position' => 'councilor',  'district' => '2', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png'],
                ['name' => 'Sofia Mcguire', 'position' => 'councilor',  'district' => '2', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png']
            ];

            $mayor = collect($members)->where('position', 'mayor')->first();
            $viceAndCongress = collect($members)->whereIn('position', ['vice mayor', 'congressman']);
            $councilors = collect($members)->where('position', 'councilor');
        @endphp

        <section class="space-y-10">
            <div class="xs:hidden">
                @if ($mayor)
                    <x-templates.member-profile :member="$mayor"/>
                @endif
            </div>
            <div class="flex items-center justify-center xs:grid grid-cols-3 gap-8">
                <!-- Mayor, Vice Mayor, and Congressman - 3 columns -->
                <div class="xs:block hidden">
                    @if ($mayor)
                        <x-templates.member-profile :member="$mayor"/>
                    @endif
                </div>
                @foreach ($viceAndCongress as $member)
                    <x-templates.member-profile :member="$member"/>
                @endforeach
            </div>

            <!-- Councilors - 3 per row -->
            <div class="space-y-10">
                @foreach ($councilors->groupBy('district') as $district => $members)
                    <div>
                        <h2 class=" mb-5 text-xl font-bold text-gray-900 dark:text-white text-center border-b border-blue-400 pb-3 uppercase">
                            District {{ $district }}
                        </h2>
                        <div class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-8">
                            @foreach ($members as $member)
                                <x-templates.member-profile :member="$member"/>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
</section>
