import Vue from 'vue'
import Router from 'vue-router'

import LandingPage from '@/components/LandingPage.vue'
import Home from '@/components/Home'
import Search from '@/components/Search'
import WriteReview from '@/components/WriteReview'
import WriteReviewRequest from '@/components/WriteReviewRequest'


Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home,
    },
    {
      path: '/search/:postcode',
      name: 'Search',
      component: Search
    },
    {
      path: '/write-review/:inviteToken',
      name: 'WriteReview',
      component: WriteReview
    },
    {
      path: '/write-review',
      name: 'WriteReviewRequest',
      component: WriteReviewRequest
    },
  ]
})
