<template>
          <div class="main-content-header">
          <div class="main-content-header-title">
            <h3 class="font-semibold text-xl text-gray-900">Backend Dark Mode</h3>
           <p class="text-xs text-gray-500">Settings to Control Dark Mode on your Frontend Website</p>
          </div>
          <div class="main-content-header-items">
            <div class="flex items-center gap-0">
              <a id="wp-dark-mode-changelog-trigger" class="item" href="javascript:;">
                <svg class="fill-current w-4" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.80714 4.37588H3.94199C3.76365 4.13891 3.65411 3.85736 3.62542 3.56217C3.59914 3.2696 3.67114 3.06617 3.78428 2.9416C3.88828 2.82617 4.14542 2.64788 4.76828 2.64788C5.33628 2.64788 5.92028 3.03645 6.41628 3.72217C6.57285 3.93931 6.70199 4.16331 6.80714 4.37588ZM1.91685 3.71302C1.93742 3.93702 1.98199 4.16102 2.04828 4.37588H1.36942C1.06631 4.37588 0.775625 4.49628 0.561297 4.71061C0.34697 4.92494 0.226562 5.21563 0.226562 5.51874V6.52788C0.226562 6.83098 0.34697 7.12168 0.561297 7.336C0.775625 7.55033 1.06631 7.67074 1.36942 7.67074H14.6311C14.9342 7.67074 15.225 7.55033 15.4393 7.336C15.6535 7.12168 15.774 6.83098 15.774 6.52788V5.5176C15.774 5.21449 15.6535 4.9238 15.4393 4.70947C15.225 4.49514 14.9342 4.37474 14.6311 4.37474H13.9523C14.0186 4.15988 14.0631 3.93588 14.0837 3.71188C14.1386 3.08102 14.0014 2.36102 13.4894 1.79188C12.9694 1.21817 12.1866 0.934737 11.2323 0.934737C9.86085 0.934737 8.82885 1.83988 8.19342 2.72217C8.12633 2.81554 8.06192 2.91082 8.00028 3.00788C7.93826 2.91081 7.87347 2.81553 7.80599 2.72217C7.17285 1.83874 6.13971 0.933594 4.76942 0.933594C3.81399 0.933594 3.03228 1.21702 2.51228 1.79417C1.99914 2.36217 1.86314 3.08217 1.91799 3.71417L1.91685 3.71302ZM9.19342 4.37588H12.0586C12.2375 4.13923 12.3471 3.8575 12.3751 3.56217C12.4014 3.2696 12.3294 3.06617 12.2163 2.9416C12.1123 2.82617 11.8551 2.64788 11.2323 2.64788C10.6643 2.64788 10.0803 3.03645 9.58428 3.72217C9.42771 3.93931 9.29856 4.16331 9.19342 4.37588ZM1.36942 9.09931H7.28599V16.3347H2.46199C2.15888 16.3347 1.86820 16.2143 1.65387 16C1.43954 15.7857 1.31914 15.495 1.31914 15.1919V9.09817H1.36942V9.09931ZM13.5386 16.3347H8.71457V9.09931H14.6814V15.1919C14.6814 15.495 14.5610 15.7857 14.3467 16C14.1324 16.2143 13.8417 16.3347 13.5386 16.3347Z" fill="#6366F1"></path>
                </svg> What's New
              </a>
              <div id="wp-dark-mode-changelog">
                <span class="HW_badge_cont HW_visible" style="">
                  <span class="HW_badge HW_visible HW_animated" data-count-unseen="6">6</span>
                </span>
              </div>
            </div>
            <a class="item" href="http://localhost/wordpres/wp-admin/admin.php?page=wp-dark-mode-get-started">
              <svg class="fill-current w-4" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.564 2.79581C16 3.69525 16 4.87267 16 7.22752V8.22338C16 9.64388 16 10.3541 15.8384 10.9335C15.455 12.3076 14.4328 13.3822 13.1255 13.7852C12.5743 13.955 11.8987 13.955 10.5474 13.955H10.1083L10.0562 13.9551C9.24008 13.9606 8.44496 14.2284 7.77779 14.7227L7.73538 14.7544L5.64678 16.3226C4.9308 16.8602 3.98994 16.0838 4.31672 15.2251C4.5482 14.6168 4.12201 13.955 3.49873 13.955H3.01733C1.3509 13.955 0 12.535 0 10.7833V7.22752C0 4.87267 0 3.69525 0.435974 2.79581C0.819464 2.00464 1.43139 1.3614 2.18404 0.958285C3.03969 0.5 4.15979 0.5 6.4 0.5H9.6C11.8402 0.5 12.9603 0.5 13.816 0.958285C14.5686 1.3614 15.1806 2.00464 15.564 2.79581ZM6.4 4.91494C6.06863 4.91494 5.8 5.19732 5.8 5.54564C5.8 5.89397 6.06863 6.17635 6.4 6.17635H9.6C9.93136 6.17635 10.2 5.89397 10.2 5.54564C10.2 5.19732 9.93136 4.91494 9.6 4.91494H6.4ZM4.8 8.2787C4.46863 8.2787 4.2 8.56108 4.2 8.90941C4.2 9.25772 4.46863 9.54011 4.8 9.54011H11.2C11.5314 9.54011 11.8 9.25772 11.8 8.90941C11.8 8.56108 11.5314 8.2787 11.2 8.2787H4.8Z" fill="#3B82F6"></path>
              </svg>Help
            </a>
            <button class="item wp-dark-mode-locked" href="javascript:;">
              <svg class="fill-current w-3" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.74348 0.563301C7.94431 0.675263 8.04289 0.909751 7.98239 1.13158L6.65464 6.00002H11.5C11.6991 6.00002 11.8792 6.11814 11.9586 6.30074C12.0379 6.48335 12.0014 6.69562 11.8655 6.84118L4.86554 14.3412C4.70866 14.5093 4.45736 14.5487 4.25654 14.4367C4.05571 14.3248 3.95713 14.0903 4.01763 13.8685L5.34539 9.00002H0.500011C0.300912 9.00002 0.120788 8.88189 0.0414373 8.69929C-0.037913 8.51669 -0.00136517 8.30441 0.134483 8.15886L7.13448 0.658858C7.29137 0.490769 7.54266 0.451339 7.74348 0.563301Z" fill="fill-current"></path>
              </svg>Upgrade
            </button>
          </div>
        </div>

        <!-- Main Content Body -->
        <div class="main-content-body">
          <section>
            <div class="rounded text-base flex flex-col gap-3 bg-transparent gap-5" style="min-height: calc(-365px + 100vh) !important;">
              <!-- Enable Frontend Dark Mode Toggle -->
              <div class="rounded text-base flex flex-col gap-3 bg-white py-5 px-6">
                <label class="flex sm:items-center gap-3 cursor-pointer w-fit">
                  <div class="w-auto h-6 flex items-center justify-center">
                    <div class="relative w-10 h-full rounded-full transition duration-100 bg-blue-600">
                      <span class="w-5 h-5 flex rounded-full mt-0.5 ml-0.5 transition duration-100 wp-dark-mode-ignore translate-x-4 border-none bg-[#fff]"></span>
                    </div>
                  </div>
                  <div class="text-base w-content leading-6 font-medium flex items-center gap-3 text-black">
                    <div>Enable Backend Dark Mode</div>
                  </div>
                </label>
                <div class="text-xs text-gray-500 leading-4 font-normal w-it">Turn it ON to enable dark mode on the Frontend</div>
              </div>

              <!-- Dark Mode Options -->
              <div class="rounded text-base flex flex-col gap-3 bg-transparent">
                <div class="flex flex-col gap-1.5">
                  <h3 class="leading-7 text-gray-800 font-semibold whitespace-nowrap font-normal">Choose how you want to use Dark Mode</h3>
                </div>
              </div>

              <div class="rounded text-base flex flex-col gap-3 bg-white py-5 px-6 gap-6">
                <!-- Default Light Mode -->
                <div class="flex flex-col gap-2 w-fit" data-wp-dark-mode-locked="false">
                  <label class="flex items-center gap-2 cursor-pointer group" @click="setDarkModeOption('light')">
                    <span :class="['flex w-4 rounded-full h-4 shadow group-hover:bg-blue-100 border', darkModeOption === 'light' ? 'border-4 border-blue-600' : 'border-gray-300']"></span>
                    <span class="font-medium leading-6 text-base">Default Light Mode</span>
                  </label>
                  <div class="text-xs text-gray-500 leading-4 font-normal w-it" data-wp-dark-mode-locked="false">Enable this setting if you want light mode as the default mode of your site. Visitors will find the website in light mode first.</div>
                </div>

                <!-- Default Dark Mode -->
                <div class="flex flex-col gap-2 w-fit" data-wp-dark-mode-locked="false">
                  <label class="flex items-center gap-2 cursor-pointer group" @click="setDarkModeOption('dark')">
                    <span :class="['flex w-4 rounded-full h-4 shadow group-hover:bg-blue-100 border', darkModeOption === 'dark' ? 'border-4 border-blue-600' : 'border-gray-300']"></span>
                    <span class="font-medium leading-6 text-base">Default Dark Mode</span>
                  </label>
                  <div class="text-xs text-gray-500 leading-4 font-normal w-it" data-wp-dark-mode-locked="false">Enable this setting if you want dark mode as the default mode of your site. Visitors will find the website in dark mode first.</div>
                </div>

                <!-- Use system settings -->
                <div class="flex flex-col gap-2 w-fit" data-wp-dark-mode-locked="false">
                  <label class="flex items-center gap-2 cursor-pointer group" @click="setDarkModeOption('system')">
                    <span :class="['flex w-4 rounded-full h-4 shadow group-hover:bg-blue-100 border', darkModeOption === 'system' ? 'border-4 border-blue-600' : 'border-gray-300']"></span>
                    <span class="font-medium leading-6 text-base">Use system settings</span>
                  </label>
                  <div class="text-xs text-gray-500 leading-4 font-normal w-it" data-wp-dark-mode-locked="false">Dark mode will be enabled/disabled depending on the user's device settings.</div>
                </div>

                <!-- Time based dark mode (Locked) -->
                <div class="flex flex-col gap-2 w-fit" data-wp-dark-mode-locked="true">
                  <label class="flex items-center gap-2 cursor-pointer group">
                    <span class="flex w-4 rounded-full h-4 shadow border border-gray-300"></span>
                    <span class="font-medium leading-6 text-base opacity-50 cursor-no-drop pointer-events-none">Time based dark mode</span>
                    <div class="inline-flex items-center wp-dark-mode-locked bg-orange-50 text-gray-800 px-3 py-1 text-sm leading-5 font-normal gap-1 rounded-xl">
                      <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.45 5.05H3.25V3.75C3.25 3.23 3.445 2.775 3.835 2.385C4.615 1.605 5.85 1.605 6.565 2.385C6.825 2.645 6.955 2.97 7.085 3.295C7.15 3.62 7.54 3.815 7.865 3.75C8.19 3.685 8.45 3.295 8.32 2.97C8.19 2.385 7.865 1.865 7.475 1.475C6.89 0.825 6.045 0.5 5.2 0.5C3.38 0.5 1.95 1.93 1.95 3.75V5.05C0.845 5.05 0 5.895 0 7V11.55C0 12.655 0.845 13.5 1.95 13.5H8.45C9.555 13.5 10.4 12.655 10.4 11.55V7C10.4 5.895 9.555 5.05 8.45 5.05ZM5.85 10.25C5.85 10.64 5.59 10.9 5.2 10.9C4.81 10.9 4.55 10.64 4.55 10.25V8.3C4.55 7.91 4.81 7.65 5.2 7.65C5.59 7.65 5.85 7.91 5.85 8.3V10.25Z" fill="#FB923C"></path>
                      </svg> Ultimate
                    </div>
                  </label>
                  <div class="text-xs text-gray-500 leading-4 font-normal w-it opacity-50 cursor-no-drop pointer-events-none wp-dark-mode-locked" data-wp-dark-mode-locked="true">Automatically enable dark mode based on user's given time.</div>
                </div>

                <!-- Sunset Mode (Locked) -->
                <div class="flex flex-col gap-2 w-fit" data-wp-dark-mode-locked="true">
                  <label class="flex items-center gap-2 cursor-pointer group">
                    <span class="flex w-4 rounded-full h-4 shadow border border-gray-300"></span>
                    <span class="font-medium leading-6 text-base opacity-50 cursor-no-drop pointer-events-none">Sunset Mode</span>
                    <div class="inline-flex items-center wp-dark-mode-locked bg-orange-50 text-gray-800 px-3 py-1 text-sm leading-5 font-normal gap-1 rounded-xl">
                      <svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.45 5.05H3.25V3.75C3.25 3.23 3.445 2.775 3.835 2.385C4.615 1.605 5.85 1.605 6.565 2.385C6.825 2.645 6.955 2.97 7.085 3.295C7.15 3.62 7.54 3.815 7.865 3.75C8.19 3.685 8.45 3.295 8.32 2.97C8.19 2.385 7.865 1.865 7.475 1.475C6.89 0.825 6.045 0.5 5.2 0.5C3.38 0.5 1.95 1.93 1.95 3.75V5.05C0.845 5.05 0 5.895 0 7V11.55C0 12.655 0.845 13.5 1.95 13.5H8.45C9.555 13.5 10.4 12.655 10.4 11.55V7C10.4 5.895 9.555 5.05 8.45 5.05ZM5.85 10.25C5.85 10.64 5.59 10.9 5.2 10.9C4.81 10.9 4.55 10.64 4.55 10.25V8.3C4.55 7.91 4.81 7.65 5.2 7.65C5.59 7.65 5.85 7.91 5.85 8.3V10.25Z" fill="#FB923C"></path>
                      </svg> Ultimate
                    </div>
                  </label>
                  <div class="text-xs text-gray-500 leading-4 font-normal w-it opacity-50 cursor-no-drop pointer-events-none wp-dark-mode-locked" data-wp-dark-mode-locked="true">Automatically enable dark mode at sunset based on the user's location.</div>
                </div>
              </div>

              <!-- Quick Links -->
              <div class="relative w-full  dark:text-white" id="wp-dark-mode-quick-links">
                <div class="flex text-base w-full rounded flex-col bg-transparent mt-5 sticky top-full" id="wp-dark-mode-quick-links" style="gap: 15px;">
                  <div class="flex flex-col gap-1.5">
                    <h3 class="leading-7 text-gray-800 font-semibold whitespace-nowrap">You might be looking for</h3>
                  </div>
                  <div class="rounded text-base flex flex-col gap-3 bg-white py-5 px-6 text-sm text-blue-600">
                    <div class="flex items-center gap-2">
                      <a href="#/shortcode" class="">Shortcode</a>
                    </div>
                    <div class="flex items-center gap-2">
                      <a href="#/excludes" class="">Exclude Settings</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Upgrade Box -->
          <section class="wp-dark-mode-upgrade-box-1 w-full border border-purple-400 sm:border-gray-100 shadow shadow-gray-100 px-8 sm:px-16 py-6 sm:py-10 flex gap-4 rounded-lg after:content-[''] relative after:absolute after:top-0 after:right-0 after:w-1/2 after:h-full overflow-hidden bg-white after:bg-gradient-to-r after:from-white after:to-purple-800 after:z-0 after:opacity-30">
            <div class="flex flex-col gap-5">
              <div class="text-gray-700 text-lg">Upgrade to <strong>WP Dark Mode Ultimate</strong></div>
              <ul class="grid sm:grid-cols-2 sm:text-sm gap-x-10 text-gray-600 leading-7">
                <li class="flex items-center gap-2 py-0.5"><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full"></span> 19+ stunning dark mode switches</li>
                <li class="flex items-center gap-2 py-0.5"><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full"></span> 13+ dark mode color presets</li>
                <li class="flex items-center gap-2 py-0.5"><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full"></span> Custom CSS for advanced customization</li>
                <li class="flex items-center gap-2 py-0.5"><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full"></span> 24/7 dedicated support</li>
                <li class="flex items-center gap-2 py-0.5"><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full"></span> Exclude pages/posts from dark mode</li>
                <li class="flex items-center gap-2 py-0.5"><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full"></span> No Ads! Distraction free usage</li>
              </ul>
              <div class="flex items-center gap-4">
                <button class="wp-dark-mode-locked px-4 whitespace-nowrap py-2 text-white rounded-lg flex items-center gap-2 hover:opacity-90 transition duration-75">
                  Upgrade All Features
                  <div class="inline-flex items-center justify-center w-5 h-5 rotate-0">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" data-darkmode-inline-stroke="" style="--darkmode-inline-stroke: currentColor;"></path>
                    </svg>
                  </div>
                </button>
              </div>
            </div>
          </section>
        </div>
</template>
<script setup></script>