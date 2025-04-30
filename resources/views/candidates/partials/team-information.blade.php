<section id="team">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center mt-5">
        <header class="mx-auto mb-8 max-w-screen-md lg:mb-16">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-blue-500 uppercase">team Giting ng Pasig</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
        </header>
        @php
            $members = [
                ['name' => 'Bonnie Green', 'position' => 'mayor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png'],
                ['name' => 'Helene Engels', 'position' => 'vice mayor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/helene-engels.png'],
                ['name' => 'Jese Leos', 'position' => 'congressman', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png'],
                ['name' => 'Joseph Mcfall', 'position' => 'councilor', 'image' => 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png']
            ];

            $mayor = collect($members)->where('position', 'mayor')->first();
            $viceAndCongress = collect($members)->whereIn('position', ['vice mayor', 'congressman']);
            $councilors = collect($members)->where('position', 'councilor');
        @endphp

        <section class="space-y-10">
            <!-- Mayor, Vice Mayor, and Congressman - 3 columns -->
            @if ($mayor)
                @include('components.templates.member-profile', ['member' => $mayor])
            @endif
            <div class="grid grid-cols-2 xs:grid-cols-3 gap-8">
                @foreach ($viceAndCongress as $member)
                    @include('components.templates.member-profile', ['member' => $member])
                @endforeach
            </div>

            <!-- Councilors - 3 per row -->
            <div class="grid grid-cols-2 xs:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-8">
                @foreach ($councilors as $member)
                    @include('components.templates.member-profile', ['member' => $member])
                @endforeach
            </div>
        </section>
    </div>
</section>
