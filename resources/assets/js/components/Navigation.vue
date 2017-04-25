<template>
  <div class="container-fluid">
    <div class="row">
      <a href="#CrimeForm">
      <div class="col-sm-3 nav-function-1">
        <h2>Add New Crime</h2>
      </div>
    </a>
    <a href="#CrimeList">
      <div class="col-sm-3 nav-function-2">
        <h2>List All Crimes</h2>
      </div>
    </a>
    <a href="#StyleGuide">
      <div class="col-sm-3 nav-function-3">
        <h2>Style Guide</h2>
      </div>
    </a>
    <a target="_blank" href="https://madisonwalls.gitbooks.io/new-york-city-crime/content/">
      <div class="col-sm-3 nav-function-4">
        <h2>API Documentation</h2>
      </div>
    </a>

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
  height: 200px;
  padding-top: 85px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #052F57;
  color: #FFFFFF;
  margin-bottom: 0px;
}

.nav-function-1:hover {
  background-color: #FFDB0D;
  cursor: pointer;
}

.nav-function-2 h2 {
  text-align: center;
  height: 200px;
  padding: 85px 0px 0px 0px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #07447E;
  color: #FFFFFF;
  margin-bottom: 0px;
}

.nav-function-2:hover {
  background-color: #FFDB0D;
  cursor: pointer;
}

.nav-function-3 h2 {
  text-align: center;
  height: 200px;
  padding-top: 85px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #0A67BD;
  color: #FFFFFF;
  margin-bottom: 0px;
}

.nav-function-3:hover {
  background-color: #FFDB0D;
  cursor: pointer;
}

.nav-function-4 h2 {
  text-align: center;
  height: 200px;
  padding-top: 85px;
  font-family: Source Sans Pro;
  font-size: 20px;
  background-color: #064271;
  color: #FFFFFF;
  margin-bottom: 0px;
}

.nav-function-4:hover {
  background-color: #FFDB0D;
  cursor: pointer;
}

.nav-function-1, .nav-function-2, .nav-function-3, .nav-function-4 {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

@media screen and (max-width: 560px) {

  .nav-function-1 h2, .nav-function-2 h2, .nav-function-3 h2, .nav-function-4 h2 {
    margin-top: 0px;
    height: 100px;
    padding-top: 35px;
  }

}

</style>
