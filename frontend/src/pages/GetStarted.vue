<template>
   <div id="wp-dark-mode-get-started" class="wp-dark-mode-admin" data-v-app="">
      <row transparent="" gap="6">
  <header
    class="relative w-full overflow-hidden"
    :style="{
      backgroundImage: `url('${heroImage}')`,
      backgroundSize: 'cover',
      backgroundPosition: 'center',
      backgroundRepeat: 'no-repeat',
      minHeight: '320px'
    }"
  >
    <!-- Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-[rgba(10,20,50,0.55)] via-[rgba(10,15,40,0.4)] to-[rgba(5,10,30,0.55)]"></div>

    <!-- Support button -->
    <div class="absolute top-5 right-5 z-20">
      <a
        href="#"
        class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-[#3c3f6d] text-white text-sm shadow hover:bg-[#2e3156] transition"
      >
        <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
          <path
            d="M10 0a10 10 0 100 20 10 10 0 000-20zm1 15H9v-2h2v2zm0-4H9V5h2v6z"
          />
        </svg>
        Support
      </a>
    </div>

    <!-- Center content -->
    <div class="relative z-20 flex flex-col items-center justify-center text-center pt-12 pb-20">
      <div class="flex items-center gap-3">
        <!-- Logo -->
<svg class="w-10 h-auto" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M48.7893 23.9977C48.7893 19.2866 47.3724 14.6812 44.7176 10.7641C42.0628 6.84688 38.2895 3.79381 33.8748 1.99093C29.4601 0.188055 24.6022 -0.28366 19.9156 0.63544C15.229 1.55454 10.924 3.82317 7.54515 7.15446C4.16627 10.4857 1.86522 14.7301 0.932994 19.3507C0.000764042 23.9713 0.479218 28.7607 2.30785 33.1133C4.13649 37.4658 7.23317 41.186 11.2063 43.8034C15.1794 46.4207 19.8506 47.8177 24.629 47.8177C31.0368 47.8177 37.182 45.3081 41.7129 40.841C46.2439 36.3739 48.7893 30.3152 48.7893 23.9977Z" fill="black"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M0.286133 24C0.286133 19.2533 1.71382 14.6131 4.38864 10.6663C7.06347 6.71954 10.8653 3.6434 15.3134 1.8269C19.7615 0.0103988 24.656 -0.464881 29.378 0.461164C34.1001 1.38721 38.4376 3.67299 41.842 7.02945C45.2464 10.3859 47.5648 14.6623 48.5041 19.3178C49.4434 23.9734 48.9613 28.799 47.1189 33.1844C45.2764 37.5698 42.1563 41.3181 38.1532 43.9553C34.15 46.5924 29.4436 48 24.629 48C18.1729 48 11.9812 45.4714 7.41599 40.9706C2.85082 36.4697 0.286133 30.3652 0.286133 24H0.286133ZM24.629 1.95601C20.2068 1.95601 15.8839 3.24887 12.207 5.67109C8.53014 8.09332 5.66434 11.5361 3.97205 15.5641C2.27975 19.5921 1.83697 24.0245 2.6997 28.3006C3.56242 32.5767 5.6919 36.5046 8.81885 39.5875C11.9458 42.6704 15.9298 44.7699 20.267 45.6204C24.6042 46.471 29.0998 46.0345 33.1854 44.366C37.2709 42.6976 40.7629 39.8721 43.2198 36.247C45.6766 32.6219 46.9879 28.3599 46.9879 24C46.9847 18.1546 44.628 12.5494 40.4356 8.41606C36.2432 4.2827 30.558 1.95919 24.629 1.95601Z" fill="#FF631A"></path> <path d="M25.9435 35.21C28.1016 35.2313 30.22 34.638 32.0444 33.5013C33.8688 32.3646 35.3216 30.7329 36.2284 28.802C35.0582 29.3034 33.7917 29.5491 32.5161 29.522C30.1218 29.5188 27.8266 28.5797 26.1336 26.9106C24.4406 25.2414 23.4881 22.9785 23.4849 20.618C23.5068 18.9843 23.9689 17.3857 24.8237 15.986C25.675 14.5816 26.8943 13.4293 28.3534 12.65C27.5469 12.5411 26.7331 12.4929 25.9192 12.506C22.9318 12.6018 20.0993 13.8391 18.0204 15.9565C15.9416 18.0738 14.7793 20.9052 14.7793 23.852C14.7793 26.7988 15.9416 29.6302 18.0204 31.7475C20.0993 33.8648 22.9318 35.1022 25.9192 35.198L25.9435 35.21Z" fill="#D7F1E1"></path> <path d="M35.4984 16.859C35.7391 16.859 35.9744 16.7886 36.1746 16.6567C36.3748 16.5249 36.5308 16.3375 36.6229 16.1182C36.715 15.8989 36.7391 15.6577 36.6921 15.4249C36.6452 15.1921 36.5293 14.9783 36.359 14.8105C36.1888 14.6426 35.9719 14.5283 35.7358 14.482C35.4997 14.4357 35.255 14.4595 35.0326 14.5503C34.8102 14.6412 34.6201 14.795 34.4864 14.9923C34.3526 15.1896 34.2812 15.4216 34.2812 15.659C34.2812 15.9772 34.4095 16.2825 34.6377 16.5075C34.866 16.7326 35.1756 16.859 35.4984 16.859Z" fill="white"></path> <path d="M30.7143 27.1772C30.7972 27.1795 30.8788 27.1573 30.9487 27.1134C31.0186 27.0695 31.0735 27.0059 31.1063 26.9309C31.1391 26.8559 31.1484 26.7729 31.1328 26.6926C31.1172 26.6124 31.0775 26.5386 31.019 26.4808C30.9604 26.4231 30.8855 26.384 30.8041 26.3686C30.7227 26.3532 30.6385 26.3623 30.5624 26.3947C30.4863 26.427 30.4219 26.4812 30.3773 26.5501C30.3328 26.619 30.3103 26.6995 30.3127 26.7812C30.3127 26.8862 30.355 26.9869 30.4303 27.0612C30.5056 27.1354 30.6078 27.1772 30.7143 27.1772Z" fill="white"></path> <path d="M28.2796 19.1982C28.3861 19.1982 28.4883 19.1565 28.5636 19.0823C28.6389 19.008 28.6812 18.9073 28.6812 18.8022C28.6812 18.6972 28.6389 18.5965 28.5636 18.5222C28.4883 18.448 28.3861 18.4062 28.2796 18.4063C28.1731 18.4062 28.0709 18.448 27.9956 18.5222C27.9202 18.5965 27.8779 18.6972 27.8779 18.8022C27.8779 18.9073 27.9202 19.008 27.9956 19.0823C28.0709 19.1565 28.1731 19.1982 28.2796 19.1982Z" fill="white"></path> <path d="M40.3304 24.792C40.4098 24.792 40.4875 24.7688 40.5535 24.7253C40.6196 24.6817 40.671 24.6199 40.7014 24.5475C40.7318 24.4752 40.7398 24.3956 40.7243 24.3187C40.7088 24.2419 40.6706 24.1714 40.6144 24.116C40.5582 24.0606 40.4866 24.0229 40.4087 24.0076C40.3308 23.9923 40.2501 24.0002 40.1767 24.0301C40.1033 24.0601 40.0405 24.1109 39.9964 24.176C39.9523 24.2411 39.9287 24.3177 39.9287 24.396C39.9287 24.501 39.971 24.6017 40.0464 24.676C40.1217 24.7503 40.2238 24.792 40.3304 24.792Z" fill="white"></path> </svg>
        <h2 class="text-5xl font-semibold !text-white">Theme Pilot</h2>
      </div>
      <p class="mt-3 text-3xl font-normal text-[#b3b3b3]">
        Welcome to the #1 dark mode plugin for WordPress. <br />
        Let's get started!
      </p>
    </div>

    <!-- Nav pill -->
    <div
      class="absolute left-1/2 transform -translate-x-1/2 bottom-[-3px] z-30 w-[90%] md:w-3/4 lg:w-2/3"
    >
      <nav
        class="flex items-center justify-center gap-6 px-6 py-3 rounded-2xl backdrop-blur-md border border-white/20 shadow-lg text-sm text-white"
        style="
          background: linear-gradient(135deg, rgba(30,35,60,0.6), rgba(10,15,40,0.5));
          clip-path: polygon(2% 0, 98% 0, 100% 15%, 100% 85%, 98% 100%, 2% 100%, 0 85%, 0 15%);
        "
      >
        <!-- Active button -->
        <a
          class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white text-black font-medium shadow"
        >
          <svg class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a8 8 0 100 16 8 8 0 000-16z" />
          </svg>
          Get in touch
        </a>

        <!-- Other links -->
        <a class="inline-flex items-center gap-2 px-3 py-2 hover:text-gray-200">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 4h16v12H2z"/></svg>
          Gutenberg
        </a>

        <a class="inline-flex items-center gap-2 px-3 py-2 hover:text-gray-200">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 4h16v12H2z"/></svg>
          Elementor
        </a>

        <a class="inline-flex items-center gap-2 px-3 py-2 hover:text-gray-200">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 4h16v12H2z"/></svg>
          FAQ
        </a>

        <a class="inline-flex items-center gap-2 px-3 py-2 hover:text-gray-200">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 4h16v12H2z"/></svg>
          Free vs Ultimate
        </a>
      </nav>
    </div>
  </header>
         <div class="flex flex-col gap-6 md:p-12 w-full bg-white">
            <div class="relative w-full dark:text-white">
               <div class="flex text-base w-full rounded flex-col bg-transparent" style="gap: 40px;">
                  <div class="relative w-full  dark:text-white">
                     <div class="flex text-base w-full rounded flex-col bg-transparent text-center" style="gap: 10px;">
                        <h2 class="font-semibold text-xl text-gray-800">Tutorial, Docs, Support &amp; Community</h2>
                        <div class="text-xs text-gray-500 leading-4 font-normal w-it">Get all popular dark mode resources in one place.</div>
                     </div>
                     <!---->
                  </div>
                  <div class="grid sm:grid-cols-2 gap-6">
                     <div class="flex items-center justify-start gap-6 w-full p-6 bg-gray-100 rounded-lg">
                        <div>
                           <div class="bg-white w-16 h-16 inline-flex items-center justify-center rounded-full">
                              <svg class="w-12" viewBox="0 0 70 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M46.1779 15.7688H44.2821C44.2821 15.0682 43.7142 14.5 43.0133 14.5H20.9446C20.2439 14.5 19.6758 15.0681 19.6758 15.7688V49.4909C19.6758 50.1917 20.2439 50.7597 20.9446 50.7597C45.0008 50.7597 43.1259 50.8337 43.5402 50.6441C43.8613 50.4971 44.1102 50.2204 44.2201 49.881H46.1778C46.1779 49.6375 46.1779 16.2444 46.1779 15.7688Z" fill="#60B7FF"></path>
                                 <path d="M45.6513 14.5H43.0137C43.7144 14.5 44.2825 15.0681 44.2825 15.7688V49.4909C44.2825 50.1917 43.7144 50.7597 43.0137 50.7597H45.6513C46.3521 50.7597 46.9202 50.1917 46.9202 49.4909V15.7688C46.9202 15.0681 46.3521 14.5 45.6513 14.5Z" fill="#26A6FE"></path>
                                 <path d="M46.9196 23.1926L41.059 17.332H23.415C22.4464 17.332 21.6611 18.1173 21.6611 19.0859V50.4452C21.6611 50.553 21.6723 50.658 21.6909 50.7604H45.6508C46.3515 50.7604 46.9196 50.1923 46.9196 49.4915V23.1926Z" fill="#26A6FE"></path>
                                 <path d="M48.9977 23.5193L46.0239 21.6624L43.4565 17.332H25.8125C24.8439 17.332 24.0586 18.1173 24.0586 19.0859V50.4452C24.0586 51.4138 24.8439 52.1991 25.8125 52.1991H48.9637C48.9752 52.1991 48.9863 52.1976 48.9977 52.1973V23.5193Z" fill="#EAF6FF"></path>
                                 <path d="M50.7176 24.5922L48.08 22.9453V50.4444C48.08 51.413 47.2948 52.1983 46.3262 52.1983H48.9638C49.9324 52.1983 50.7177 51.413 50.7177 50.4444V24.5922H50.7176Z" fill="#D8ECFE"></path>
                                 <path d="M45.2109 24.5931H50.7181L43.457 17.332V22.8392C43.457 23.8078 44.2423 24.5931 45.2109 24.5931Z" fill="#B3DAFE"></path>
                                 <path d="M46.5086 28.5657H28.2682C27.9178 28.5657 27.6338 28.2816 27.6338 27.9313C27.6338 27.5809 27.9178 27.2969 28.2682 27.2969H46.5086C46.859 27.2969 47.143 27.5809 47.143 27.9313C47.143 28.2816 46.859 28.5657 46.5086 28.5657Z" fill="#82AEE3"></path>
                                 <path d="M46.5086 32.763H28.2682C27.9178 32.763 27.6338 32.4789 27.6338 32.1286C27.6338 31.7782 27.9178 31.4941 28.2682 31.4941H46.5086C46.859 31.4941 47.143 31.7782 47.143 32.1286C47.143 32.4789 46.859 32.763 46.5086 32.763Z" fill="#82AEE3"></path>
                                 <path d="M53.4221 35.5013H52.0471C51.7527 34.9923 51.2025 34.6509 50.582 34.6509C49.7117 34.6509 30.5079 34.6509 29.2836 34.6509L27.0565 30.9661H25.7064C25.4693 30.6491 25.0947 30.457 24.6909 30.457H17.2688C16.5681 30.457 16 31.0252 16 31.7259V54.8089C16 55.7433 16.7575 56.5007 17.6918 56.5007H50.582C50.8614 56.5007 51.1455 56.4283 51.3967 56.2894H51.4C51.6132 56.1714 51.7976 56.0082 51.9418 55.8134H53.422L53.4221 35.5013Z" fill="#5D8AFC"></path>
                                 <path d="M25.8156 31.1357L27.654 34.649H30.2916L28.4533 31.1357C28.2343 30.7172 27.8012 30.4551 27.3291 30.4551H24.6914C25.1636 30.4551 25.5967 30.7172 25.8156 31.1357Z" fill="#3464DF"></path>
                                 <path d="M53.2196 34.6484H50.582C51.5164 34.6484 52.2738 35.4059 52.2738 36.3402V54.8064C52.2738 55.7408 51.5163 56.4982 50.582 56.4982H53.2196C54.154 56.4982 54.9114 55.7407 54.9114 54.8064V36.3403C54.9114 35.4059 54.1539 34.6484 53.2196 34.6484Z" fill="#3464DF"></path>
                              </svg>
                           </div>
                        </div>
                        <div class="relative w-full  dark:text-white">
                           <div class="flex text-base w-full rounded flex-col bg-transparent" style="gap: 15px;">
                              <div class="flex flex-col gap-1 text-base leading-6 text-black font-medium">Documentations</div>
                              <div class="text-xs text-gray-500 leading-4 font-normal w-it">If you get stuck while exploring a feature, feel free to check our docs for a step-by-step guide.</div>
                              <div>
                                 <button class="inline-flex hover:bg-blue-600 hover:text-white transition duration-75 items-center gap-2 ring-1 ring-blue-600 rounded-md px-[12px] h-[36px] py-[6px] text-sm text-blue-600">
                                    Open Docs 
                                    <div class="inline-flex items-center justify-center w-4 h-5 rotate-0 rotate-[-90deg]">
                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.25 6.875 10 13.125l-6.25-6.25"></path>
                                       </svg>
                                    </div>
                                 </button>
                              </div>
                           </div>
                           <!---->
                        </div>
                     </div>
                     <div class="flex items-center justify-start gap-6 w-full p-6 bg-gray-100 rounded-lg">
                        <div>
                           <div class="bg-white w-16 h-16 flex items-center justify-center rounded-full">
                              <svg class="w-8" viewBox="0 0 43 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M33.4144 0.5H9.25285C8.08518 0.501299 6.9657 0.965731 6.14003 1.7914C5.31436 2.61707 4.84993 3.73655 4.84863 4.90422V10.7497C4.84863 10.8771 4.87372 11.0032 4.92245 11.1208C4.97119 11.2385 5.04262 11.3454 5.13267 11.4354C5.22272 11.5254 5.32962 11.5969 5.44727 11.6456C5.56493 11.6943 5.69103 11.7194 5.81837 11.7194H36.8489C36.9762 11.7194 37.1023 11.6943 37.22 11.6456C37.3377 11.5969 37.4446 11.5254 37.5346 11.4354C37.6247 11.3454 37.6961 11.2385 37.7448 11.1208C37.7936 11.0032 37.8186 10.8771 37.8186 10.7497V4.90422C37.8173 3.73655 37.3529 2.61707 36.5272 1.7914C35.7016 0.965731 34.5821 0.501299 33.4144 0.5Z" fill="#0D56A9"></path>
                                 <path d="M40.1594 6.81517C39.7554 6.07043 39.1579 5.44859 38.4298 5.0153C37.7018 4.58202 36.8702 4.35337 36.023 4.35352H6.79009C6.17214 4.35325 5.56019 4.47477 4.98923 4.71113C4.41826 4.94749 3.89947 5.29404 3.46251 5.731C3.02555 6.16795 2.67898 6.68674 2.44261 7.2577C2.20624 7.82866 2.08471 8.4406 2.08496 9.05856V14.3648C2.08496 14.622 2.18713 14.8686 2.36899 15.0505C2.55085 15.2323 2.79751 15.3345 3.0547 15.3345H39.758C40.0152 15.3345 40.2619 15.2323 40.4437 15.0505C40.6256 14.8686 40.7277 14.622 40.7277 14.3648V9.05856C40.7277 8.27514 40.5324 7.5041 40.1594 6.81517Z" fill="#1F72D2"></path>
                                 <path d="M4.9044 8.25781H37.7625C39.0633 8.25781 40.3107 8.77453 41.2305 9.69431C42.1503 10.6141 42.667 11.8616 42.667 13.1623V31.4749C42.667 32.7756 42.1503 34.0231 41.2305 34.9429C40.3108 35.8626 39.0633 36.3793 37.7626 36.3793H4.9044C3.60368 36.3793 2.35622 35.8626 1.43647 34.9429C0.516713 34.0231 0 32.7756 0 31.4749V13.1623C0 11.8616 0.516713 10.6141 1.43647 9.69437C2.35622 8.77462 3.60368 8.2579 4.9044 8.2579V8.25781Z" fill="#4793EB"></path>
                                 <path d="M28.0373 19.7996L19.31 14.7608C18.8677 14.5055 18.3661 14.3711 17.8554 14.3711C17.3448 14.3711 16.8431 14.5055 16.4009 14.7608C15.9586 15.0162 15.5914 15.3834 15.3361 15.8257C15.0807 16.2679 14.9463 16.7696 14.9463 17.2802V27.3578C14.9444 27.8692 15.0776 28.372 15.3325 28.8154C15.5873 29.2587 15.9548 29.6269 16.3977 29.8826C16.8406 30.1383 17.3432 30.2725 17.8546 30.2715C18.366 30.2706 18.8681 30.1345 19.31 29.8772L28.0373 24.8383C28.4796 24.583 28.8468 24.2157 29.1021 23.7735C29.3574 23.3312 29.4918 22.8296 29.4918 22.319C29.4918 21.8083 29.3574 21.3067 29.1021 20.8644C28.8468 20.4222 28.4796 20.0549 28.0373 19.7996Z" fill="url(#paint0_linear_2377_35583)"></path>
                                 <defs>
                                    <linearGradient id="paint0_linear_2377_35583" x1="22.2191" y1="15.3189" x2="22.2191" y2="27.956" gradientUnits="userSpaceOnUse">
                                       <stop stop-color="white"></stop>
                                       <stop offset="1" stop-color="#EDF1F2"></stop>
                                    </linearGradient>
                                 </defs>
                              </svg>
                           </div>
                        </div>
                        <div class="relative w-full dark:text-white">
                           <div class="flex text-base w-full rounded flex-col bg-transparent w-full" style="gap: 15px;">
                              <div class="flex flex-col gap-1 text-base leading-6 text-black font-medium">Tutorial</div>
                              <div class="text-xs text-gray-500 leading-4 font-normal w-it">Check the WP Dark Mode playlist to become an expert dark mode user.</div>
                              <div>
                                 <button class="inline-flex hover:bg-blue-600 hover:text-white transition duration-75 items-center gap-2 ring-1 ring-blue-600 rounded-md px-[12px] h-[36px] py-[6px] text-sm text-blue-600">
                                    Watch Videos 
                                    <div class="inline-flex items-center justify-center w-4 h-5 rotate-0 rotate-[-90deg]">
                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.25 6.875 10 13.125l-6.25-6.25"></path>
                                       </svg>
                                    </div>
                                 </button>
                              </div>
                           </div>
                           <!---->
                        </div>
                     </div>
                     <div class="flex items-center justify-start gap-6 w-full p-6 bg-gray-100 rounded-lg">
                        <div>
                           <div class="bg-white w-16 h-16 flex items-center justify-center rounded-full">
                              <svg class="w-8" viewBox="0 0 43 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M34.8909 30.8164V34.5671C34.8909 37.8542 32.2167 40.5286 28.9295 40.5286H21.542V43.1456H28.9296C33.6598 43.1456 37.508 39.2973 37.508 34.5671V30.8164H34.8909Z" fill="#35355E"></path>
                                 <path d="M37.5085 16.8476V20.8813H34.8915V16.8476C34.8915 9.27658 28.731 3.11701 21.16 3.11701C13.589 3.11701 7.42853 9.27658 7.42853 16.8476V20.8813H4.81152V16.8476C4.81152 7.83374 12.1453 0.5 21.16 0.5C30.1747 0.5 37.5085 7.83374 37.5085 16.8476Z" fill="#44446B"></path>
                                 <path d="M37.5077 16.8476V20.8813H34.8906V16.8476C34.8906 9.27658 28.7302 3.11701 21.1592 3.11701V0.5C30.1739 0.5 37.5077 7.83374 37.5077 16.8476Z" fill="#35355E"></path>
                                 <path d="M26.4167 41.836C26.4167 43.5813 25.0001 44.9895 23.2624 44.9895H19.0577C17.3156 44.9895 15.9033 43.5772 15.9033 41.836C15.9033 40.0943 17.3147 38.6816 19.0577 38.6816H23.2624C25.0044 38.6816 26.4167 40.094 26.4167 41.836Z" fill="#6092E5"></path>
                                 <path d="M26.4159 41.836C26.4159 43.5813 24.9992 44.9895 23.2615 44.9895H21.1592V38.6816H23.2615C25.0036 38.6816 26.4159 40.094 26.4159 41.836Z" fill="#3972E5"></path>
                                 <path d="M9.72726 21.5067V30.521C9.72726 31.9712 8.54699 33.1404 7.09682 33.1356C7.05721 33.1355 7.01761 33.135 6.97783 33.1342C3.27188 33.0614 0.209189 30.1085 0.0105582 26.4072C-0.210143 22.2959 3.05789 18.8926 7.12107 18.8926C7.13031 18.8926 7.13947 18.8926 7.14863 18.8927C8.57857 18.8981 9.72726 20.0769 9.72726 21.5067Z" fill="#6092E5"></path>
                                 <path d="M32.5918 21.5067V30.521C32.5918 31.9712 33.7721 33.1404 35.2222 33.1356C35.2618 33.1355 35.3015 33.135 35.3412 33.1342C39.0472 33.0614 42.1099 30.1085 42.3085 26.4072C42.5292 22.2959 39.2612 18.8926 35.198 18.8926C35.1887 18.8926 35.1796 18.8926 35.1704 18.8927C33.7405 18.8981 32.5918 20.0769 32.5918 21.5067Z" fill="#3972E5"></path>
                                 <path d="M27.2657 26.2821L21.783 31.7656C21.6112 31.9383 21.3852 32.0238 21.1593 32.0238C20.9334 32.0238 20.7074 31.9383 20.5356 31.7656L15.0529 26.2821C13.6685 24.8977 13.6685 22.6532 15.0529 21.2688C16.4388 19.8846 18.6821 19.8846 20.0663 21.2688L21.1593 22.3618L22.2523 21.2688C23.6367 19.8844 25.8813 19.8844 27.2657 21.2688C28.6458 22.6471 28.6537 24.894 27.2657 26.2821Z" fill="#FF3369"></path>
                                 <path d="M27.2655 26.2821L21.7829 31.7656C21.611 31.9383 21.3851 32.0238 21.1592 32.0238V22.3618L22.2522 21.2688C23.6366 19.8844 25.8811 19.8844 27.2655 21.2688C28.6457 22.6471 28.6536 24.894 27.2655 26.2821Z" fill="#DB2556"></path>
                              </svg>
                           </div>
                        </div>
                        <div class="relative w-full  dark:text-white">
                           <div class="flex text-base w-full rounded flex-col bg-transparent" style="gap: 15px;">
                              <div class="flex flex-col gap-1 text-base leading-6 text-black font-medium">Customer Support</div>
                              <div class="text-xs text-gray-500 leading-4 font-normal w-it">Our support team is here 24/7 to answer your queries and resolve your issues. Don't hesitate to reach out to us!</div>
                              <div>
                                 <button class="inline-flex hover:bg-blue-600 hover:text-white transition duration-75 items-center gap-2 ring-1 ring-blue-600 rounded-md px-[12px] h-[36px] py-[6px] text-sm text-blue-600">
                                    Contact Support 
                                    <div class="inline-flex items-center justify-center w-4 h-5 rotate-0 rotate-[-90deg]">
                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.25 6.875 10 13.125l-6.25-6.25"></path>
                                       </svg>
                                    </div>
                                 </button>
                              </div>
                           </div>
                           <!---->
                        </div>
                     </div>
                     <div class="flex items-center justify-start gap-6 w-full p-6 bg-gray-100 rounded-lg">
                        <div>
                           <div class="bg-white w-16 h-16 flex items-center justify-center rounded-full">
                              <svg class="w-8" viewBox="0 0 45 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M44.4889 20.1275C44.7688 12.9738 36.5341 12.0199 31.2149 11.3711L24.3966 12.5074C20.656 13.1308 28.4908 27.4882 31.2149 27.4882C33.939 27.4882 38.2882 26.6529 41.4572 25.9527C44.2212 25.4379 44.728 22.5013 44.4889 20.1275Z" fill="#CBA3FF"></path>
                                 <path d="M31.2149 0C21.7738 0.0476276 21.773 14.1126 31.2149 14.1616C40.6552 14.1139 40.6559 0.0489692 31.2149 0Z" fill="#E9DCC3"></path>
                                 <path d="M13.3264 11.3711C8.00136 12.0206 -0.224429 12.9746 0.0524666 20.1275C-0.18664 22.5005 0.319226 25.4379 3.08409 25.9524C9.78147 27.8427 16.8713 27.8427 23.5687 25.9524C26.3327 25.4379 13.3264 11.3711 13.3264 11.3711Z" fill="#59D96B"></path>
                                 <path d="M13.3265 0.000852998C3.88474 -0.12757 3.88481 14.288 13.3258 14.1608C22.7669 14.2892 22.7668 -0.126452 13.3265 0.000852998Z" fill="#E9DCC3"></path>
                                 <path d="M37.7131 27.1904C37.4034 18.1671 29.0162 18.1956 22.2708 17.0488C15.9837 17.8825 6.63236 18.7482 6.82853 27.1904C6.56095 29.9084 7.09917 33.3076 10.2834 33.8974C18.1217 36.1115 26.42 36.1115 34.2582 33.8974C37.4417 33.3077 37.9812 29.9093 37.7131 27.1904Z" fill="#00A1FF"></path>
                                 <path d="M22.2704 3.68945C11.3391 3.88108 11.3374 19.8939 22.2704 20.0871C33.2009 19.8954 33.2026 3.88265 22.2704 3.68945Z" fill="#FDEBC9"></path>
                              </svg>
                           </div>
                        </div>
                        <div class="relative w-full  dark:text-white">
                           <div class="flex text-base w-full rounded flex-col bg-transparent" style="gap: 15px;">
                              <div class="flex flex-col gap-1 text-base leading-6 text-black font-medium">Facebook Community</div>
                              <div class="text-xs text-gray-500 leading-4 font-normal w-it">Did you know that there is a Facebook community for dark mode users like you? Feel free to join to be involved in the discussion.</div>
                              <div>
                                 <button class="inline-flex hover:bg-blue-600 hover:text-white transition duration-75 items-center gap-2 ring-1 ring-blue-600 rounded-md px-[12px] h-[36px] py-[6px] text-sm text-blue-600">
                                    Join Community 
                                    <div class="inline-flex items-center justify-center w-4 h-5 rotate-0 rotate-[-90deg]">
                                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16.25 6.875 10 13.125l-6.25-6.25"></path>
                                       </svg>
                                    </div>
                                 </button>
                              </div>
                           </div>
                           <!---->
                        </div>
                     </div>
                  </div>
                  <!---->
                  <section data-v-5be9a5b2="" class="wp-dark-mode-upgrade-box-1 w-full border border-purple-400 sm:border-gray-100 shadow shadow-gray-100 px-8 sm:px-16 py-6 sm:py-10 flex gap-4 rounded-lg after:content-[''] relative after:absolute after:top-0 after:right-0 after:w-1/2 after:h-full overflow-hidden bg-white after:bg-gradient-to-r after:from-white after:to-purple-800 after:z-0 after:opacity-30">
                     <div data-v-5be9a5b2="" class="flex flex-col gap-5">
                        <div class="text-gray-700 text-lg" data-v-5be9a5b2=""> Upgrade to <strong data-v-5be9a5b2="">Theme Pilot Ultimate</strong></div>
                        <ul class="grid sm:grid-cols-2 sm:text-sm gap-x-10 text-gray-600 leading-7" data-v-5be9a5b2="">
                           <li class="flex items-center gap-2 py-0.5" data-v-5be9a5b2=""><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full" data-v-5be9a5b2=""></span> 19+ stunning dark mode switches</li>
                           <li class="flex items-center gap-2 py-0.5" data-v-5be9a5b2=""><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full" data-v-5be9a5b2=""></span> 13+ dark mode color presets</li>
                           <li class="flex items-center gap-2 py-0.5" data-v-5be9a5b2=""><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full" data-v-5be9a5b2=""></span> Custom CSS for advanced customization</li>
                           <li class="flex items-center gap-2 py-0.5" data-v-5be9a5b2=""><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full" data-v-5be9a5b2=""></span> 24/7 dedicated support</li>
                           <li class="flex items-center gap-2 py-0.5" data-v-5be9a5b2=""><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full" data-v-5be9a5b2=""></span> Exclude pages/posts from dark mode</li>
                           <li class="flex items-center gap-2 py-0.5" data-v-5be9a5b2=""><span class="inline-flex w-0 h-0 border-[2.5px] border-purple-500 rounded-full" data-v-5be9a5b2=""></span> No Ads! Distraction free usage</li>
                        </ul>
                        <div data-v-5be9a5b2="" class="flex items-center gap-4">
                           <button data-v-5be9a5b2="" class="wp-dark-mode-locked px-4 whitespace-nowrap py-2 text-white rounded-lg flex items-center gap-2 hover:opacity-90 transition duration-75">
                              Upgrade All Features 
                              <div data-v-5be9a5b2="" class="inline-flex items-center justify-center w-5 h-5 rotate-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                                 </svg>
                              </div>
                           </button>
                        </div>
                     </div>
                  </section>
               </div>
               <!---->
            </div>
         </div>
      </row>
   </div>
</template>
<script setup>
const heroImage = 'https://starwalk.space/gallery/images/what-is-space/1920x1080.jpg'
</script>