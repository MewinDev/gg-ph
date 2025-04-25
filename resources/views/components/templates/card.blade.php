@props([
    'candidates' => '',
])

<section class="mx-auto max-w-screen-xl">
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($candidates as $key => $candidate)

        <article class="w-full bg-white border border-blue-100 rounded-lg shadow-lg hover:shadow-gray-300 dark:hover:shadow-gray-700 dark:bg-gray-800 dark:border-gray-700 zoom-in p-4">
            <a href="{{ route('senatorials.show', $candidate->id) }}" class="group relative overflow-hidden w-full rounded-lg transition">
                <div class="absolute w-full h-full bg-gray-900/30 group-hover:opacity-60 opacity-100 rounded-lg flex flex-col justify-between">
                    <span class="p-2 font-extrabold text-white text-3xl">{{ str_pad($candidate->can_ballot_number, 2, '0', STR_PAD_LEFT) }}</span>
                    <div class="flex flex-col text-white text-right p-3">
                        <h5 class="text-xl md:text-base tracking-wide font-bold">
                            {{ $candidate->can_firstname . " ". $candidate->can_middlename . " ". $candidate->can_lastname }}
                        </h5>
                        <h4 class="text-base md:text-sm tracking-normal">{{ Str::ucfirst($candidate->position->pos_name) }} Candidates</h4>
                    </div>
                </div>
                <img src="https://randomuser.me/api/portraits/men/{{ rand(1, 99) }}.jpg" class="w-full rounded-lg"/>
            </a>
        </article>

        @endforeach
    </div>
</section>
