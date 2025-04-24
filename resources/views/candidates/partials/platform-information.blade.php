<section class="w-full md:mt-3" id="platform">

  <header>
    <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white mb-2 uppercase">Candidate’s Platforms</h2>
  </header>

  <article class="space-y-16">
    <section class="gap-16 items-center lg:grid lg:grid-cols-2">
      <div class="text-justify text-gray-500 dark:text-gray-400">
        <p class="mb-3 text-gray-800 font-bold dark:text-gray-400 text-base sm:text-lg md:text-xl indent-8">Strengthen local governance, public safety, digital government transformation, and urban development planning.</p>
        <p class="mb-3 text-gray-500 dark:text-gray-400 text-sm sm:text-base md:text-lg indent-8">Benhur Abalos is a lawyer and longtime public servant, known for modernizing Mandaluyong City and later leading MMDA during the pandemic. He currently heads the Department of the Interior and Local Government, working on improving local government systems, disaster preparedness, and law enforcement reforms.</p>
      </div>
      <figure class="grid grid-cols-2 gap-4 mt-8">
        <img class="w-full transition-all duration-300 rounded-lg cursor-pointer filter dark:grayscale dark:hover:grayscale-0" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="Office content 1">
        <img class="mt-4 w-full lg:mt-10 transition-all duration-300 rounded-lg cursor-pointer filter dark:grayscale dark:hover:grayscale-0" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="Office content 2">
      </figure>
    </section>

    <section class="bg-white dark:bg-gray-800">
      <div class="p-4 md:p-8 mx-auto flex flex-col md:grid lg:grid-cols-2 md:gap-10">
      <figure class="order-2 lg:order-1">
        <video class="w-full" autoplay controls>
        <source src="/videos/candidate-platform-details.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
      </figure>

      <div class="order-1 lg:order-2 my-2">
        <header>
        <h2 class="mb-4 text-xl md:text-3xl lg:text-2xl tracking-tight font-extrabold text-blue-500 dark:text-blue-500">Discover the Comprehensive Plans and Platforms of <span class="underline underline-offset-4">{{ Str::upper($candidate->can_firstname . " " . $candidate->can_lastname) }}</span></h2>
        </header>
        <p class="font-light text-gray-500 text-base md:text-lg dark:text-gray-400">Watch the video to explore the detailed plans and platforms of our candidate, focusing on governance, public safety, digital transformation, and urban development. Learn how these initiatives aim to create a better future for everyone.</p>
      </div>
      </div>
    </section>
  </article>

</section>
