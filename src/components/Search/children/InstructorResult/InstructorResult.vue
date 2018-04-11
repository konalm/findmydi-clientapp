<template>
<div>
  <div class="instructor-result">
    <div class="avatar-container"> 
      <img v-bind:src="avatarPhotoSrc" class="adi-licence-upload" />
    </div>

    <div class="profile-container">
      <p class="name">{{ fullName }}</p>
      <p>Verified: <i class="fa fa-check"></i></p>

      <p> 
        <i class="fa fa-male" v-if="gender === 'Male'"></i>
        <i class="fa fa-female" v-if="gender === 'Female'"></i>
        {{ gender }}
      </p>

      <p>Hourly Rate: £ {{ hourlyRate }}</p>

      <p v-if="instructor.offer">
        <span class="offer">Offer:</span> 
        {{ instructor.offer }} 
      </p>
    </div>

    <div class="contact-container">  
      <p> <i class="fa fa-envelope"></i> {{ email }} 
        <span class="underline" v-if="!showFullEmail" v-on:click="revealEmail">
          Show Email
        </span> 
      </p> 

      <p> <i class="fa fa-phone"></i> {{ contactNumber }} 
        <span class="underline" v-if="!showFullContactNunber" 
          v-on:click="revealContactNumber"
        >
          Show Number
        </span>
      </p>
    </div>

    <div class="review-container">
      <p class="review-score"> {{ reviewRating }} </p> 
      <p class="review-count"> {{ instructor.review_count }} reviews </p>
    </div>
  </div>

  <!-- mobile -->
  <div class="instructor-result mobile">
    <div class="bio"> 
      <!-- bio upper -->
      <div class="bio__upper">
        <div class="avatar-container">
          <img v-bind:src="avatarPhotoSrc" class="adi-licence-upload" />
        </div>

        <div class="profile-container">
          <p class="name">{{ fullName }}</p>

          <p> <i class="fa fa-male" v-if="gender === 'Male'"></i>
            <i class="fa fa-female" v-if="gender === 'Female'"></i>
            {{ gender }}
          </p>

          <p>Verified: <i class="fa fa-check"></i></p>
          <p>Hourly Rate: £ {{ hourlyRate }}</p>
        </div>
      </div> <!-- bio upper -->

      <div class="bio__lower">
        <p v-if="instructor.offer">
          <span class="offer">Offer:</span> 
          {{ instructor.offer }} 
        </p>

        <p> <i class="fa fa-envelope"></i> {{ email }} 
          <span class="underline" v-if="!showFullEmail" v-on:click="revealEmail">
            Show Email
          </span> 
        </p> 

        <p> <i class="fa fa-phone"></i> {{ contactNumber }} 
          <span class="underline" v-if="!showFullContactNunber" 
            v-on:click="revealContactNumber"
          >
            Show Number
          </span>
        </p>
      </div>
    </div> <!-- bio END -->

    <div class="review-container">
      <p class="review-score"> {{ reviewRating }} </p> 
      <p class="review-count"> {{ instructor.review_count }} reviews </p>
    </div>
  </div>
</div>
</template>



<script lang="ts">
import Vue from 'vue'
import Component from 'vue-class-component'
import {Prop} from 'vue-property-decorator'
import {getApiUrl} from '@/globals'
import {http} from '@/http-requests'
import InstructorResultMobile from './InstructorResultMobile.vue'


@Component({
  components: { InstructorResultMobile }
})
export default class InstructorResult extends Vue {
  showFullEmail: boolean = false 
  showFullContactNunber: boolean = false

  @Prop() instructor: {
    id: null,
    first_name: '',
    surname: '',
    gender: '',
    email: '',
    hourly_rate: '',
    review_count: null,
    review_rating: null,
    contact_number: '',
    offer: ''
  }

  /** 
   * 
   */
  get reviewRating() {
    if (!this.instructor.review_rating) { return }

    return parseFloat(this.instructor.review_rating).toFixed(2)
  }

  /**
   * show first part of email if not revealed, otherwise show full email
   */
  get email() {
    if (!this.showFullEmail) {
      const emailSub = this.instructor.email.substring(0,7)
      return `${emailSub} ...`
    }

    return this.instructor.email
  }

  /**
   * show first part of contact number if not revealed, otherwise show full contact
   * number
   */
  get contactNumber() {
    const contactNumber = this.instructor.contact_number ?
      this.instructor.contact_number : null

    if (!contactNumber) { return }

    if (!this.showFullContactNunber) {
      const contactSub = this.instructor.contact_number.substring(0,7)
      return `${contactSub} ...` 
    }

    return this.instructor.contact_number
  }

  /**
   * First letters of first name and surname to capitals
   */
  get fullName() {
    const firstName = this.instructor.first_name
    const surname = this.instructor.surname

    return `${firstName.charAt(0).toUpperCase()}${firstName.slice(1)}
      ${surname.charAt(0).toUpperCase()}${surname.slice(1)}`
  }

  /** 
   * First letter of gender to capital
   */
  get gender() {
    const gender = this.instructor.gender

    return `${gender.charAt(0).toUpperCase()}${gender.slice(1)}`
  }

  /**
   * Add two decimals to hourly rate for pence
   */
  get hourlyRate() {
    return parseInt(this.instructor.hourly_rate).toFixed(2)
  }

   get avatarPhotoSrc() {
    return `${getApiUrl()}img/avatar/${this.instructor.id}`
  }


  /** 
   * set showFullEmail state to true to reveal full email address in the UI
   */
  revealEmail() {
    this.showFullEmail = true

    http.post('stats', {
      event: 'email clicked',
      instructorId: this.instructor.id
    })
  }

  /** 
   * set showFullContactNumber to true to reveal full contact number in the UI
   */
  revealContactNumber() {
    this.showFullContactNunber = true

    http.post('stats', {
      event: 'contact number clicked',
      instructorId: this.instructor.id
    })
  }
}
</script>



<style lang="scss" scoped src="./instructor-result.scss" />
