import { createRouter, createWebHistory } from 'vue-router'

// Import your page components
import Dashboard from '../pages/Dashboard.vue'
import Settings from '../pages/Settings.vue'
import SocialShare from '../pages/SocialShare.vue'
import GetStarted from '../pages/GetStarted.vue'
import RecommendedPlugins from '../pages/RecommendedPlugins.vue'
import Upgrade from '../pages/Upgrade.vue'

const routes = [
  { path: '/', redirect: '/dashboard' },
  { path: '/dashboard', component: Dashboard },
  { path: '/settings', component: Settings },
  { path: '/social-share', component: SocialShare },
  { path: '/get-started', component: GetStarted },
  { path: '/recommended-plugins', component: RecommendedPlugins },
  { path: '/upgrade', component: Upgrade }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

// Sync with WordPress page parameter
router.beforeEach((to, from, next) => {
  const wpPage = window.themepilotWP?.current_page
  if (wpPage && to.path !== `/${wpPage.replace('themepilot-', '')}`) {
    next(`/${wpPage.replace('themepilot-', '')}`)
  } else {
    next()
  }
})

export default router