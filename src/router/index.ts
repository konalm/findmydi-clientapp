import Vue from 'vue'
import Router from 'vue-router'

import LandingPage from '@/components/LandingPage.vue'
import Home from '@/components/Home'
import Search from '@/components/Search'

import About from '@/components/About'
import Services from '@/components/Services'
import Contact from '@/components/Contact'
import TermsAndConditions from '@/components/TermsAndConditions'
import PrivacyPolicy from '@/components/PrivacyPolicy.vue'

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
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/services',
      name: 'Services',
      component: Services
    },
    {
      path: '/contact',
      name: 'Contact',
      component: Contact
    },
    {
      path: '/terms-and-conditions',
      name: 'TermsAndConditions',
      component: TermsAndConditions
    },
    {
      path: '/privacy-policy',
      name: 'PrivacyPolicy',
      component: PrivacyPolicy
    }
  ],

  mode: 'history',
})
