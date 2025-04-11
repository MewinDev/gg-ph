@props([
    'image' => "",
    'candidates' => '',
])

<section class="bg-white dark:bg-gray-900 px-5">
    <div class="mx-auto max-w-screen-xl">
        <div class="grid md:grid-cols-2 lg:grid-cols-3">
            @foreach ($candidates as $key => $name)

            <div class="max-w-xs bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                <div class="p-5">
                    <a href="#">
                        <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="product image" />
                    </a>
                    <div class="mt-5">
                        <h5 class="text-xl font-bold tracking-tight text-gray-700 dark:text-white">{{ $name->loc_firstname . " ". $name->loc_middlename . " ". $name->loc_lastname }}</h5>
                        <div class="flex items-center text-gray-600 font-light mt-1 dark:text-gray-400">{{ $name->pos_name }}</div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>  
    </div>
  </section>
