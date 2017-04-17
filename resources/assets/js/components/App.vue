<template>
  <div class="container-fluid main-page">
    <div class="row">
      <div class="col-sm-12 title">
          <img src="img/logo.png" width="20%" height="auto">
          <h1>New York City Restaurants</h1>
      </div>
    </div>
      <div class="row">
        <div class="col-md-9 col-md-offset-2 info">
            <p>NYC offers thousands of restaurants and bars, but it can sometimes be overwhelming. This site lets you keep track of which restaurants you’ve been to, along with some important information in case you ever decide to revisit. Start by adding a new restaurant, or view the currently listed restaurants below.</p>
        </div>
      </div>
    <Navigation></Navigation>
    <RestaurantForm></RestaurantForm>
    <Styleguide></Styleguide>


  </div>
</template>

<script>
import axios from 'axios';
import RestaurantForm from './RestaurantForm';
import Restaurant from './Restaurant';
import Navigation from './Navigation';
import Styleguide from './Styleguide';


export default {
  components: {
    RestaurantForm,
    Restaurant,
    Navigation,
    Styleguide

  },

  data () {
    return {
      restaurants: [],
    }
  },

  mounted () {
    this.fetch();
  },

  methods: {

    fetch() {
      console.log('App -> fetch');
      this.loading = true;
      axios.get('/restaurants')
      .then((response) => {
        console.log('App -> fetch success');
        console.log(reponse.data);
        this.restaurants = response.data;
        //ADD A SUCCESS MESSAGE
      })
      .catch((response) => {
        console.log('App -> fetch error');
        //ADD AN ERROR MESSAGE
      })
    },
  }
}
</script>

<style>



@font-face {
  font-family: NewYork;
  src: url(../../../../public/fonts/poiretone_regular.ttf);
}

.title h1 {
  font-family: NewYork;
  font-size: 70px;
  display: block;
  vertical-align: middle;
  text-align: center;
  padding-left: 40px;
}

.title img {
  display: block;
  margin: auto;
}

.title {
  display: block;
  padding-bottom: 50px;
}

.info p {
  font-family: Source Sans Pro;
  font-weight: lighter;
  font-size: 18px;

}

#app {
  background-color: #ffffff;
}

.container-fluid.main-page {
  padding: 0px;
}
</style>
