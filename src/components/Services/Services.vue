<template>
<div>
  <app-header />
  <page-header :header="'Services'" />

  <div class="container main-body">
    <h3>Search</h3>

    <p class="lead">Search directory with core algorithm that finds verified driving instructors 
      that have been verified who are able to deliver driving lessons at the 
      given postcode entered upon search. 
    </p>

    <br />

    <h3>Driving Instructor Information</h3>
    <p class="lead">Information about driving instructors including name, contact details, 
      profile picture, offers they have, gender and history of reviews from 
      past students.
    </p>
  </div>

  <app-footer />
</div>
</template>


<script lang="ts">
import Vue from 'vue'
import Component from 'vue-class-component'
import AppHeader from '@/components/patterns/user-header'
import AppFooter from '@/components/patterns/Footer.vue'
import PageHeader from '@/components/patterns/PageHeader.vue'

@Component({
  components: {
    AppHeader, PageHeader, AppFooter
  }
})
export default class Services extends Vue {}
</script>


<style scoped lang="scss">
.main-body {
  margin-bottom: 100px;
}
</style>


