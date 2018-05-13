<template functional>
<div class="home__features container">
  <div class="modal-box">
    <div class="feature__icon"> <i class="fas fa-check"></i> </div>

    <h4> Approved Driving Instructors </h4>

    <p class="feature__desc"> We check all driving instructors to make sure they 
      have been approved by the Driver and Vehichle Srandards Agency
    </p>
  </div>

  <div class="modal-box">
    <div class="feature__icon"> <i class="far fa-star"></i></div>
      
    <h4> See reviews before getting in touch</h4>

    <p class="feature__desc">Your can review instructor’s profile and past reviews 
      to help you make the correct choice.
    </p>
  </div>

  <div class="modal-box">
    <div class="feature__icon"><i class="fas fa-book"></i></div>
      
    <h4>Get in touch and book instantly</h4>

    <p class="feature__desc"> This is a one step process. As soon as you have found 
      the instructor for you. You can get in touch instantly. 
    </p>
  </div>

  <div class="modal-box"> 
    <div class="feature__icon"><i class="fas fa-map-marker-alt"></i></div>
      
    <h4>Near You</h4>

    <p class="feature__desc"> Our algorithm will only find instructors near you</p>
  </div>
</div>
</template>



<style scoped lang="scss">
.home__features {
  display: flex;
  flex-wrap: wrap;
  margin-top: 60px;

  .modal-box {
    width: 22%;
    margin-right: 4%;
    margin-bottom: 30px;
    padding: 20px;
    padding-top: 25px;

    @media screen and (max-width: 991px) {
      width: 44%;
      margin-right: 6%;
    }

    @media screen and (max-width: 550px) {
        width: 100%;
        margin-right: 0;
    }

    .feature__icon {
      border: 2px solid #2EA663;
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
      margin-bottom: 7px;
    }

    h4 {
      font-size: 18px;
      margin-top: 15px;
      color: rgb(50,50,50);
      line-height: 23px;
    }

    p.feature__desc {
      font-size: 16px;
      line-height: 22px;
      margin-top: 20px;
      color: #707070;
    }
  }

  .modal-box:last-child {
      margin-right: 0%;
  }
}

</style>


