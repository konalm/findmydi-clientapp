<template>
<div>
  <div class="header inst-app logged-out">
    <div class="header__inner">
      <router-link :to="{path: '/'}">
        <img src="../../../assets/findmydi-dark.png" class="header__logo">
      </router-link>

      <ul class="logged-out-header__nav">
        <a v-bind:href=instructorAppUrl>
          <li> Join As Driving Instructor </li>
        </a>
        <router-link v-for="item in menuItems" :key="item.name" :to="{path: item.link}"
          v-bind:class="{'special': item.special}"
          tag="li"
        >
          {{ item.name }}
        </router-link>
      </ul>

      <!-- mobile -->
      <i class="fas fa-bars" v-on:click="toggleMobileMenu()" v-if="!mobileMenuOpen"></i>
      <i class="fas fa-times" v-on:click="toggleMobileMenu()" v-if="mobileMenuOpen"></i>
    </div>
  </div>

  <ul class="logged-out-header__mobile-nav" id="mobileMenu">
    <router-link v-for="item in menuItems" :key="item.name" :to="{path: item.link}" 
     tag="li"
    >
      {{ item.name }}
    </router-link>
  </ul>
</div>
</template>



<script lang="ts">
import Vue from 'vue'
import Component from 'vue-class-component'
import {getInstructorAppUrl} from '@/globals'

@Component({})
export default class LoggedOutHeader extends Vue {
  menuItems = [
    { name: 'Services', special: false, link: '/services' },
    { name: 'About', special: false, link: '/about' },
    { name: 'Get In Touch', special: true, link: '/contact' }
  ]

  mobileMenuOpen: boolean = false

  get instructorAppUrl() {
    return getInstructorAppUrl()
  }

  /** 
   * 
   */
  toggleMobileMenu() {
    if (!this.mobileMenuOpen) {
      $("#mobileMenu").slideDown("slow")
    } else {
      $("#mobileMenu").slideUp("slow")      
    }

    this.mobileMenuOpen = !this.mobileMenuOpen
  }
}
</script>



<style scoped lang="scss" src="./user-header.scss" />