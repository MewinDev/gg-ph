<x-app-layout>
  <div class="overflow-hidden pb-10 pt-3">
      <div class="md:py-5 text-gray-900 dark:text-gray-100 space-y-7">

            <div class="bg-white dark:bg-gray-800 p-5 border dark:border-gray-700 rounded-t-2xl">
                <x-templates.breadcrumb :breadcrumb="[
                ['name' => 'Back', 'link' => route('candidates.index', $electionTypeName)],
                ['name' => 'Candidates Information', 'link' => '']
            ]" />
            </div>

            <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">

                <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-1">
                    @include('candidates.partials.profile-information')
                </div>

                <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-4">
                    @include('candidates.partials.platform-information')
                </div>

                <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-5">
                    @include('candidates.partials.middle-part')

                    @include('candidates.partials.team-information')
                </div>

            </main>
      </div>
  </div>

  @push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = document.querySelector('[data-carousel="slide"]');
        if (carousel) {
            const items = carousel.querySelectorAll('[data-carousel-item]');
            const prevButton = carousel.querySelector('[data-carousel-prev]');
            const nextButton = carousel.querySelector('[data-carousel-next]');
            let currentIndex = 0;
            const intervalTime = 3000; // 1.5 seconds
            const transitionDuration = 500; // 0.5 seconds

            function updateCarousel(index) {
                items.forEach((item, i) => {
                    if (i === index) {
                    item.classList.remove('hidden');
                    item.classList.add('block', 'transition-opacity', 'duration-' + transitionDuration);
                    item.style.opacity = 1;
                    } else {
                    item.classList.add('hidden');
                    item.classList.remove('block');
                    item.style.opacity = 0;
                    }
                });
            }

            if (prevButton) {
                prevButton.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + items.length) % items.length;
                    updateCarousel(currentIndex);
                });
            }

            if (nextButton) {
                nextButton.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % items.length;
                    updateCarousel(currentIndex);
                });
            }

            function autoNext() {
                currentIndex = (currentIndex + 1) % items.length;
                updateCarousel(currentIndex);
            }

            updateCarousel(currentIndex); // Initialize display
            setInterval(autoNext, intervalTime); // Automatically move to the next slide
        }
    });
</script>
  @endpush
</x-app-layout>
