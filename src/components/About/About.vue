<template>
<div>
  <app-header />
  <page-header :header="'About Find My Driving Instructor'" />

  <div class="container main-body">
    <p class="lead">Welcome to Find My DI.</p>

    <p class="lead"> We understand that first learning to drive can be daunting and we want 
        you to have the right person their with you to get you on the road and 
        teach you how to drive from the begging. This is why we built Find 
        My Driving Instructor. FInding a driving instructor is easy but 
        finding one that is verified and reputable with a good history with 
        previous students isn’t as simple. 
    </p>

    <br />

    <p class="lead">With Find My Driving Instructor you can simply type in your postcode and we 
      will find qualified driving instructors who we have personally verified within 
      your area and you can checkout their profile, hourly rate, any special offers 
      and history of their previous students right away to find the instructor best 
      suited for you and who you can trust without having to phone multiple different 
      driving schools.
    </p>

    <br />

    <p class="lead">Our mission is make as many instructors as possible available to you in your 
      area with has much information as possible to give you the best possible 
      change of finding the right instructor.
    </p>

    <br />

    <p class="lead">Good luck with your lessons and make sure to always drive safe and we being 
      our best to make sure you have the right instructor their with you.
    </p>
  </div>

  <app-footer />
</div>
</template>


<script lang="ts">
import Vue from 'vue'
import Component from 'vue-class-component'
import AppHeader from '@/components/patterns/user-header'
import PageHeader from '@/components/patterns/PageHeader.vue'
import AppFooter from '@/components/patterns/Footer.vue'

@Component({
  components: {
    AppHeader, PageHeader, AppFooter
  }
})
export default class About extends Vue {

}
</script>


<style lang="scss">
.main-body {
  margin-bottom: 100px;
}

.container {
  p {
    font-size: 20px;
    line-height: 35px;
  }
}
</style>