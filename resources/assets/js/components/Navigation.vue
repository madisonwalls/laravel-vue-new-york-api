<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 nav-function-1">
        <h2>Add New Restaurant</h2>
      </div>

      <div class="col-sm-3 nav-function-2">
        <h2>List All Restaurants</h2>
      </div>

      <div class="col-sm-3 nav-function-3">
        <h2>Style Guide</h2>
      </div>

      <div class="col-sm-3 nav-function-4">
        <h2>API Documentation</h2>
      </div>

    </div>
  </div>



</template>

<script>
import axios from 'axios';

export default {
  components: {

  },

  data () {
    return {

    }
  },


  methods: {

  }
}
</script>

<style>

@font-face {
  font-family: NewYork;
  src: url(../../../../public/fonts/poiretone_regular.ttf);
}

.nav-function-1 h2 {
  text-align: center;
  height: 150px;
  padding-top: 60px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #72A98F;
  color: #FFFFFF;
}

.nav-function-2 h2 {
  text-align: center;
  height: 150px;
  padding: 60px 0px 0px 0px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #6B3251;
  color: #FFFFFF;
}

.nav-function-3 h2 {
  text-align: center;
  height: 150px;
  padding-top: 60px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #3D5A6C;
  color: #FFFFFF;
}

.nav-function-4 h2 {
  text-align: center;
  height: 150px;
  padding-top: 60px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #A1CCA5;
  color: #FFFFFF;
}

.nav-function-1, .nav-function-2, .nav-function-3, .nav-function-4 {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

</style>
