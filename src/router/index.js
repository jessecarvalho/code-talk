import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import PostView from '../views/PostView.vue'
import AboutView from '../views/AboutView.vue'
import ContactView from '../views/ContactView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/post',
      name: 'post',
      component: PostView
    },
    {
      path: '/sobre',
      name: 'about',
      component: AboutView
    },
    {
      path: '/contato',
      name: 'contact',
      component: ContactView
    },
  ]
})

export default router
