<template>
  <div class="relative">
    <div class="app-wrapper">
      <!-- Sidebar -->
      <div class="wp-dark-mode-admin-sidebar bg-white max-w-sidebar">
        <div class="wp-dark-mode-admin-sidebar-header justify-between">
          <div class="wp-dark-mode-admin-sidebar-header-logo wp-dark-mode-ignore">
            <img src="http://localhost/wordpres/wp-content/plugins/wp-dark-mode/assets/images/settings/logo.svg" class="wp-dark-mode-ignore">
            <h2 class=" flex flex-col gap-1 text-gray-800">Theme Pilot</h2>
          </div>
          <button class="wp-dark-mode-admin-sidebar-header-button">
            <svg class="wp-dark-mode-admin-sidebar-header-button-logo" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.13789 1.41389C8.13789 0.964445 8.50224 0.600098 8.95169 0.600098H17.0896C17.5391 0.600098 17.9034 0.964446 17.9034 1.41389C17.9034 1.86334 17.5391 2.22768 17.0896 2.22768L8.95169 2.22768C8.50224 2.22768 8.13789 1.86334 8.13789 1.41389ZM8.13789 11.5863C8.13789 11.1368 8.50224 10.7725 8.95169 10.7725L17.0896 10.7725C17.5391 10.7725 17.9034 11.1368 17.9034 11.5863C17.9034 12.0357 17.5391 12.4001 17.0896 12.4001H8.95169C8.50224 12.4001 8.13789 12.0357 8.13789 11.5863ZM0.220101 5.94343C-0.0733669 6.25647 -0.0733669 6.74357 0.220101 7.05661L4.03476 11.1256C4.34215 11.4535 4.85715 11.4701 5.18504 11.1627C5.51292 10.8553 5.52954 10.3403 5.22214 10.0124L2.69222 7.31381L17.0897 7.31381C17.5391 7.31381 17.9034 6.94947 17.9034 6.50002C17.9034 6.05058 17.5391 5.68623 17.0897 5.68623L2.69222 5.68623L5.22214 2.98764C5.52953 2.65975 5.51292 2.14476 5.18503 1.83736C4.85715 1.52997 4.34215 1.54658 4.03476 1.87447L0.220101 5.94343Z"></path>
            </svg>
          </button>
          <button class="cursor-pointer p-2 rounded sm:hidden bg-gray-50 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"></path>
            </svg>
          </button>
        </div>
        
        <!-- Navigation -->
        <div class="wp-dark-mode-admin-sidebar-nav">
          <!-- Controls Section -->
          <div class="wp-dark-mode-admin-sidebar-nav-container flex flex-col gap-1 bg-gray-50 text-gray-900">

            <div class="flex items-center justify-between cursor-pointer  px-4 focus:ring rounded-lg focus:ring-blue-400 transition" tabindex="1" @click="toggleNav('controls')">
              <div class="flex items-center gap-3">
                <svg class="stroke-current w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.3428 3.94005C10.4332 3.39759 10.9026 3 11.4525 3H12.5465C13.0964 3 13.5658 3.39759 13.6562 3.94005L13.8052 4.83386C13.8759 5.25813 14.1888 5.59838 14.586 5.76332C14.9835 5.92832 15.4398 5.90629 15.79 5.65617L16.5275 5.12933C16.975 4.80969 17.5881 4.86042 17.9769 5.24929L18.7505 6.02284C19.1393 6.41171 19.1901 7.02472 18.8704 7.47223L18.3434 8.21007C18.0934 8.56012 18.0713 9.01633 18.2363 9.41363C18.4011 9.81078 18.7413 10.1236 19.1655 10.1943L20.0595 10.3433C20.6019 10.4337 20.9995 10.9031 20.9995 11.453V12.547C20.9995 13.0969 20.6019 13.5663 20.0595 13.6567L19.1656 13.8056C18.7414 13.8764 18.4011 14.1893 18.2362 14.5865C18.0712 14.9839 18.0932 15.4403 18.3433 15.7904L18.8701 16.5278C19.1897 16.9753 19.139 17.5884 18.7501 17.9772L17.9766 18.7508C17.5877 19.1396 16.9747 19.1904 16.5272 18.8707L15.7896 18.3439C15.4395 18.0938 14.9833 18.0718 14.5859 18.2367C14.1887 18.4016 13.8759 18.7418 13.8052 19.166L13.6562 20.0599C13.5658 20.6024 13.0964 21 12.5465 21H11.4525C10.9026 21 10.4332 20.6024 10.3428 20.0599L10.1939 19.1661C10.1232 18.7419 9.81023 18.4016 9.413 18.2367C9.01559 18.0717 8.55926 18.0937 8.20911 18.3438L7.47149 18.8707C7.02398 19.1904 6.41097 19.1396 6.0221 18.7507L5.24855 17.9772C4.85968 17.5883 4.80895 16.9753 5.1286 16.5278L5.65563 15.79C5.90567 15.4399 5.92772 14.9837 5.76277 14.5864C5.59788 14.1892 5.25771 13.8764 4.83353 13.8057L3.93956 13.6567C3.3971 13.5663 2.99951 13.0969 2.99951 12.547V11.453C2.99951 10.9031 3.3971 10.4337 3.93956 10.3433L4.83337 10.1944C5.25764 10.1236 5.5979 9.81071 5.76283 9.41347C5.92784 9.01605 5.9058 8.5597 5.65569 8.20954L5.12899 7.47216C4.80934 7.02465 4.86008 6.41164 5.24895 6.02277L6.0225 5.24922C6.41136 4.86036 7.02438 4.80962 7.47188 5.12927L8.20948 5.65613C8.55955 5.90618 9.01579 5.92822 9.41311 5.76326C9.81028 5.59837 10.1231 5.25819 10.1938 4.834L10.3428 3.94005Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkmode-inline-stroke="" style="--darkmode-inline-stroke: currentColor;"></path>
                  <path d="M15.0002 12C15.0002 13.6569 13.6571 15 12.0002 15C10.3434 15 9.00021 13.6569 9.00021 12C9.00021 10.3432 10.3434 9.00002 12.0002 9.00002C13.6571 9.00002 15.0002 10.3432 15.0002 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-darkmode-inline-stroke="" style="--darkmode-inline-stroke: currentColor;"></path>
                </svg>
                <h4 class="text-base leading-6  font-semibold">Controls</h4>
              </div>
              <svg :class="['fill-current w-2.5 text-gray-500 transition duration-100', navStates.controls ? 'rotate-180' : '']" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.230169 5.79062C0.528748 6.07772 1.00353 6.06841 1.29063 5.76983L5 1.83208L8.70938 5.76983C8.99647 6.06841 9.47125 6.07772 9.76983 5.79062C10.0684 5.50353 10.0777 5.02875 9.79063 4.73017L5.54063 0.230167C5.39922 0.0831084 5.20401 -9.53674e-07 5 -9.53674e-07C4.79599 -9.53674e-07 4.60078 0.0831084 4.45938 0.230167L0.209376 4.73017C-0.0777189 5.02875 -0.0684095 5.50353 0.230169 5.79062Z"></path>
              </svg>
            </div>
            <div v-if="navStates.controls" class="flex flex-col pb-4 px-4 gap-1 w-full mt-2 focus:ring focus:ring-blue-400 transition">
              <a href="#/frontend" :class="['router-link-active router-link-exact-active nav-item-child focus:outline-none', activeTab === 'frontend' ? 'active' : 'inactive']" tabindex="0" @click="setActiveTab('frontend')">Frontend Dark Mode</a>
              <a href="#/admin" :class="['nav-item-child focus:outline-none', activeTab === 'admin' ? 'active' : 'inactive']" tabindex="0" @click="setActiveTab('admin')">Admin Panel Dark Mode</a>
            </div>
          </div>

          <!-- Other navigation items would go here -->
          <div class="wp-dark-mode-admin-sidebar-nav-container flex flex-col gap-1 bg-gray-50 text-gray-900">
            <div class="flex items-center justify-between cursor-pointer  px-4 focus:ring rounded-lg focus:ring-blue-400 transition" tabindex="1" @click="toggleNav('customization')">
              <div class="flex items-center gap-3">
                <svg class="stroke-current w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.09835 19.9017C5.56282 21.3661 7.93719 21.3661 9.40165 19.9017L15.8033 13.5M6.75 21C4.67893 21 3 19.3211 3 17.25V4.125C3 3.50368 3.50368 3 4.125 3H9.375C9.99632 3 10.5 3.50368 10.5 4.125V8.1967M6.75 21C8.82107 21 10.5 19.3211 10.5 17.25V8.1967M6.75 21H19.875C20.4963 21 21 20.4963 21 19.875V14.625C21 14.0037 20.4963 13.5 19.875 13.5H15.8033M10.5 8.1967L13.3791 5.31757C13.8185 4.87823 14.5308 4.87823 14.9701 5.31757L18.6824 9.02988C19.1218 9.46922 19.1218 10.1815 18.6824 10.6209L15.8033 13.5M6.75 17.25H6.7575V17.2575H6.75V17.25Z" stroke="stroke-current" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <h4 class="text-base leading-6">Customization</h4>
              </div>
              <svg :class="['fill-current w-2.5 text-gray-500 transition duration-100', navStates.customization ? 'rotate-180' : '']" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.230169 5.79062C0.528748 6.07772 1.00353 6.06841 1.29063 5.76983L5 1.83208L8.70938 5.76983C8.99647 6.06841 9.47125 6.07772 9.76983 5.79062C10.0684 5.50353 10.0777 5.02875 9.79063 4.73017L5.54063 0.230167C5.39922 0.0831084 5.20401 -9.53674e-07 5 -9.53674e-07C4.79599 -9.53674e-07 4.60078 0.0831084 4.45938 0.230167L0.209376 4.73017C-0.0777189 5.02875 -0.0684095 5.50353 0.230169 5.79062Z"></path>
              </svg>
            </div>
            <div v-if="navStates.customization" class="flex flex-col pb-4 px-4 gap-1 w-full mt-2 focus:ring focus:ring-blue-400 transition">
              <a href="#/theme-mixer" :class="['router-link-active router-link-exact-active nav-item-child focus:outline-none', activeTab === 'theme-mixer' ? 'active' : 'inactive']" tabindex="0" @click="setActiveTab('theme-mixer')">Theme Mixer</a>
              
            </div>

          </div>

          <!-- More navigation items would go here -->
        </div>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <Frontend v-if="activeTab === 'frontend'" />
        <Backend v-else-if="activeTab === 'admin'" />
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import Frontend from './components/Frontend.vue'
import Backend from './components/Backend.vue'

// Reactive state
const navStates = ref({
  controls: true,
  customization: false,
  advanced: false
})

const activeTab = ref('frontend')
const darkModeOption = ref('system')

// Methods
const toggleNav = (navItem) => {
  navStates.value[navItem] = !navStates.value[navItem]
}

const setActiveTab = (tab) => {
  activeTab.value = tab
}

const setDarkModeOption = (option) => {
  darkModeOption.value = option
}
</script>

<style scoped>
/* Base styles */

</style>