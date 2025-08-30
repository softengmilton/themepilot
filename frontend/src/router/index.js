import { createRouter, createWebHashHistory } from 'vue-router' // Changed to createWebHashHistory

// Import your page components
import Settings from '../pages/Settings.vue'
import ThemeMixer from '../pages/ThemeMixer.vue'
import GetStarted from '../pages/GetStarted.vue'
import Recommended from '../pages/Recommended.vue'
import Upgrade from '../pages/Upgrade.vue'

const routes = [
  { path: '/', redirect: '/settings' },
  { path: '/settings', component: Settings },
  { path: '/theme-mixer', component: ThemeMixer },
  { path: '/get-started', component: GetStarted }, 
  { path: '/plugins', component: Recommended },
  { path: '/upgrade', component: Upgrade }
]

const router = createRouter({
  history: createWebHashHistory(), 
  routes
})

// Sync with WordPress page parameter
router.beforeEach((to, from, next) => {
  const urlParams = new URLSearchParams(window.location.search)
  const wpPage = urlParams.get('page') || 'themepilot-settings'

  // Remove 'themepilot-' prefix and navigate to that route
  const routePath = wpPage.replace('themepilot-', '')
  
  if (to.path !== `/${routePath}`) {
    next(`/${routePath}`)
  } else {
    next()
  }
})

export default router