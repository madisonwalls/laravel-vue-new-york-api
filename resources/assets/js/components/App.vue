<template>
  <div class="container-fluid main-page">
    <div class="row">
      <div class="col-sm-12 title">
          <img src="img/logo.png" width="20%" height="auto">
          <h1>New York City Crimes</h1>
      </div>
    </div>
      <div class="row">
        <div class="col-md-9 col-md-offset-2 info">
            <p>NYC is a lively and exciting city, but it can sometimes be dangerous as well. This site lets you report a crime that you know about, along with some important information to help keep the streets safe. Start by adding a new crime, or view the currently listed crimes below.</p>
        </div>
      </div>
    <Navigation></Navigation>
    <CrimeForm @created="fetch"></CrimeForm>
    <div class="CrimeList" v-show="crimes.length > 0"></div>
      <Crime v-for="(form, index) in crimes" :key="index" :crime="form" @deleted="remove(index)"></Crime>
    <Styleguide></Styleguide>


  </div>
</template>

<script>
import axios from 'axios';
import CrimeForm from './CrimeForm';
import Crime from './Crime';
import Navigation from './Navigation';
import Styleguide from './Styleguide';


export default {
  components: {
    CrimeForm,
    Crime,
    Navigation,
    Styleguide

  },

  data () {
    return {
      crimes: [],
    }
  },

  mounted () {
    this.fetch();
  },

  methods: {

    fetch() {
      console.log('App -> fetch');
      this.loading = true;
      axios.get('/crimes')
      .then((response) => {
        console.log('App -> fetch success');
        console.log(response.data);
        this.crimes = response.data;
        //ADD A SUCCESS MESSAGE
      })
      .catch((response) => {
        console.log('App -> fetch error');
        //ADD AN ERROR MESSAGE
      })
    },
    update (data) {
      var i = this.crimes.indexOf(data.crime);
      for (var d in data) {
        this.crimes[i][d] = data[d];
      }
    },
    remove (i) {
      console.log(`App -> Remove Id: ${i}`);
      this.crimes.slice(i,1);
    }
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
