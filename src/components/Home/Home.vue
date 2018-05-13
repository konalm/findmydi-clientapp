<template>
<div>
  <user-header />

  <div class="search-page__main-container">
    <div class="back-filter"></div> 

    <h1>Find My Driving Instructor <span class="beta">BETA</span></h1>

    <form v-on:submit.prevent="searchForInstructors()">
      <div class="search-container">
        <input type="text" class="form-control" placeholder="Your Postcode"
          v-model="postcode"
        >

        <button type="submit" class="base-button rounded">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button> 
      </div>
    </form>

    <p class="search-container__lower-text lead">
      Find driving lessons from approved driving instructors near you
    </p>
  </div>

  <features />
  <why-use />
  <join-button />
  <user-footer />
</div>
</template>



<script lang="ts">
import Vue from 'vue'
import Component from 'vue-class-component'
import UserHeader from '@/components/patterns/user-header'
import UserFooter from '@/components/patterns/Footer.vue'
import {http} from '../../http-requests'
import noDriversResponse from './NoDriversResponse.vue'
import router from '@/router'
import store from '@/store'

import Features from './children/Features.vue'
import WhyUse from './children/WhyUse.vue'
import JoinButton from './children/JoinButton.vue'

@Component({
  components: {
    UserHeader, noDriversResponse, Features, WhyUse, JoinButton, UserFooter
  }
})
export default class InstructorSearch extends Vue {
  postcode: string = ''
  searched: boolean = false
  searchResponse = []
  instructorsFound = []
  x: boolean = false

  beforeMount() {
    document.body.className = 'white-background' 
  }

  /**
   * submit search to api the find instructor covering entered postcode
   */
  searchForInstructors() {
    router.push({
      name: 'Search', 
      params: {postcode: this.postcode}}
    )
  }
}
</script>



<style lang="scss" scoped src="./home.scss" />
