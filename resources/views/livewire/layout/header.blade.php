<!-- header/navigation -->
<div class="p-5">
    <div x-data="{ isOpen: false }" class="flex justify-between lcv-container z-10">
        <div class="flex items-center">
            <x-application-logo class="w-12 h-12 pr-2"/>
            <h3 class="text-lg font-lcv text-accent">Laravel Community Vadodara</h3>
        </div>

        <!-- left header section -->
        <div class="flex items-center justify-between">
            <button @click="isOpen = !isOpen" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 lcv-link lg:hidden" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <div class="hidden space-x-6 lg:inline-block">
                <a href="#" class="text-base lcv-link">Call For Speakers</a>
                <a href="#" class="text-base lcv-link">Volunteer with US</a>
                <a href="#" class="text-base lcv-link">About</a>
            </div>

            <!-- mobile navbar -->
            <div class="mobile-navbar">
                <!-- navbar wrapper -->
                <div class="fixed left-0 top-0 right-0 bottom-0 m-5 p-5 bg-background border-2 border-primary rounded-lg z-50 overflow-y-auto" x-show="isOpen" @click.away=" isOpen = false">
                    <a href="#" class="fixed right-10 text-sm text-black" @click=" isOpen = false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 lcv-link">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                    <div class="flex flex-col space-y-6 pt-3">
                        <a href="#" class="text-base lcv-link">Call For Speakers</a>
                        <a href="#" class="text-base lcv-link">Volunteer with US</a>
                        <a href="#" class="text-base lcv-link">About</a>
                    </div>
                </div>
            </div>
            <!-- end mobile navbar -->
        </div>
        <!-- right header section -->

    </div>
</div>
