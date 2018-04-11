<template functional>
<div class="instructor-result mobile">
  <div class="avatar-container"> 
    <img v-bind:src="$parent.avatarPhotoSrc" class="adi-licence-upload" />
  </div>

  <div class="profile-container">
    <p class="name">{{ $parent.fullName }}</p>
    <p>Verified: <i class="fa fa-check"></i></p>

    <p> 
      <i class="fa fa-male" v-if="$parent.gender === 'Male'"></i>
      <i class="fa fa-female" v-if="$parent.gender === 'Female'"></i>
      {{ $parent.gender }}
    </p>

    <p>Hourly Rate: £ {{ $parent.hourlyRate }}</p>

    <p v-if="$parent.instructor.offer">
      <span class="offer">Offer:</span> 
      {{ $parent.instructor.offer }} 
    </p>

    <!-- <div class="contact-container mobile">  
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
    </div> -->
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
</template>
