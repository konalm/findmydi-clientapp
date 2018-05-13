<template>
<div>
  <app-header />
  <page-header :header="'Contact'" />

  <div class="container">
    <p class="lead">Hello@FindMyDI.com</p> 
    <p class="lead">07922127541</p>
  </div>
</div>
</template>


<script lang="ts">
import Vue from 'vue'
import Component from 'vue-class-component'
import AppHeader from '@/components/patterns/user-header'
import PageHeader from '@/components/patterns/PageHeader.vue'

@Component({
 components: {
    AppHeader, PageHeader
  }
})
export default class Contact extends Vue {

}
</script>