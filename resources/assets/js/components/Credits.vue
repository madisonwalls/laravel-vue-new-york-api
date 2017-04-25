<template>
  <div class="container-fluid">
    <div class="container-fluid footerSpace">
      <div class="row">
        <div class="col-md-12">
          <h2>Credits:</h2>
        </div>
        <div class="col-md-4">
          <p>Created by: <a href="http://www.madisonwalls.org"> Madison Walls</a> | <a href="https://github.com/madisonwalls">Github Account</a></p>
        </div>
        <div class="col-md-4 credit-title">
          <p>New York City Crime API 2017</p>
        </div>
        <div class="col-md-4 bottomNav">
            <a href="#CrimeList">Crime Listing</a>
            <a href="#CrimeForm">Add a Crime</a>
            <a href="#StyleGuide">Style Guide</a>
        </div>
        <div class="col-md-8 sources">
          <a href="https://catalog.data.gov/dataset/prison-admissions-beginning-2008">Prison Admissions beginning in 2008</a> </br>
          <a href="https://catalog.data.gov/dataset/index-crimes-by-county-and-agency-beginning-1990">Index Crimes by County and Agency: Beginning 1990</a>
       </div>
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

  mounted () {

  },

  methods: {

  }
}
</script>

<style>

.bottomNav a {
  font-size: 14px;
  padding-left: 10px;
  color: #ffffff;

}

.footerSpace a {
  color: #ffffff;
}

.footerSpace a:hover {
  color: #FFDB0D;
  text-decoration: none;
}

.credit-title {
  text-align: center;
  font-size: 20px;
}


@media screen and (max-width: 560px) {

  .credit-title {
    font-size: 14px;
    text-align: left;
    padding-bottom: 20px;
  }

  .sources {
    padding-top: 25px;
    font-size: 10px;
  }
}

</style>
