<template functional>
<div class="footer">
  <div class="container">
    <div class="logo-container">
      <router-link :to="{path: '/'}">
        <img src="../../assets/findmydi-dark.png" class="header__logo">
      </router-link>
    </div>

    <div class="footer__list-container">
      <ul class="footer__left-list"> 
        <router-link tag="li" :to="{path: '/about'}">About Us </router-link> 
        <router-link tag="li" :to="{path: '/contact'}">Get In Touch </router-link>
        <router-link tag="li" :to="{path: '/services'}"> Services </router-link>
        <router-link tag="li" :to="{path: '/blog'}"> Blog </router-link>
      </ul> 

      <ul class="footer__right-list">
        <router-link tag="li" :to="{path: '/terms-and-conditions'}">
          Terms Of Service 
        </router-link>
        
        <router-link tag="li" :to="{path: '/privacy-policy'}">
          Privacy Policy
        </router-link> 

        <li> Join As Driving Instructor </li>
      </ul>
    </div>
  </div>
</div>
</template>


<style scoped lang="scss">
.footer {
  background-color: #2EA663;
  padding-top: 20px;
  padding-bottom: 20px;
  color: white;
  margin-top: 50px;
  
  .container {
    display: flex;
    justify-content: space-around;

    @media screen and (max-width: 600px) {
      flex-direction: column;
    }

    .logo-container {
      width: 33%;
    }

    .footer__list-container {
      display: flex;
      width: 66%;
      justify-content: space-around;

      @media screen and (max-width: 600px) {
        width: 100%;
        justify-content: space-around;
        margin-top: 20px;
      }

       ul {
        list-style: none;
        margin: 0;
        padding: 0;

        li {
          opacity: 0.71;
          padding: 3px 0 3px 0;
          cursor: pointer;
        }
      }
    }
  }

  img {
    width: 200px;
    height: auto;
  }
}
</style>
