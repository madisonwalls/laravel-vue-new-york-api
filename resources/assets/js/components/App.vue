<template>
  <div class="container-fluid main-page">
    <div class="header">
    <div class="row">
      <div class="col-sm-12 title">
          <h1>New York City </br> Crime Reporter</h1>
      </div>
    </div>
      <div class="row">
        <div class="col-sm-5 col-sm-offset-7 info">
            <p>NYC is a large and exciting city, but it can sometimes be dangerous as well. This site lets you report a crime that you know about, along with some important information to help keep the streets safe. Start by adding a new crime, or view the currently listed crimes below.</p>
            <button class="alert-crime">Report Crime Now</button>
          </div>
      </div>
    <Navigation></Navigation>
  </div>
    <Mapchart></Mapchart>
    <CrimeForm id="CrimeForm" @created="fetch"></CrimeForm>
      <div class="col-sm-12 CrimeList-fluid">
        <h1 id="CrimeList">Crime List</h1>
        <div v-show="removeCrime" class="remove-message">
            <p><strong>Crime Removed</strong></p>
          </div>
          <Crime v-for="(form, index) in crimes" :key="index" :crime="form" @updated="update" @deleted="remove(index)"></Crime>
      </div>
    <Mapinteractive></Mapinteractive>
    <Styleguide id="StyleGuide" class="styleguide"></Styleguide>
    <Credits class="credits-fluid"></Credits>

  </div>
</template>

<script>
import axios from 'axios';
import CrimeForm from './CrimeForm';
import Crime from './Crime';
import Navigation from './Navigation';
import Styleguide from './Styleguide';
import Mapchart from './Mapchart';
import Mapinteractive from './Mapinteractive';
import Credits from './Credits';



export default {
  components: {
    CrimeForm,
    Crime,
    Navigation,
    Styleguide,
    Mapchart,
    Mapinteractive,
    Credits
  },

  data () {
    return {
      crimes: [],
      removeCrime: false
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
        var crime = this.crimes[i];
        if (d === 'crime') continue;
        crime[d] = data[d];
      }
    },

    remove (i) {
      console.log(`App -> Remove ID: ${i}`);
      this.crimes.splice(i,1);
      this.removeCrime = true;
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
  font-size: 80px;
  display: block;
  vertical-align: middle;
  padding-left: 40px;
  color: #FFDB0D;
  margin-bottom: 100px;
  margin-top: 20px;
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
  color: #ffffff;
  padding: 30px;

}

#app {
  background-color: #ffffff;
}

.container-fluid.main-page {
  padding: 0px;
  background-color: #ffffff;
}

.header {
  background-image: url("/img/nyskyline.jpg");
  background-position: center;
  background-size: cover;
}

.alert-crime {
  border: solid 3px #FFDB0D;
  background-color: rgba(0, 0, 0, 0);
  padding: 15px 45px;
  margin-left: 30px;
  border-radius: 5px;
  color: #FFDB0D;
  margin-bottom: 40px;
  transition: all 0.4s ease-in-out;

}

.alert-crime:hover {
  background-color: #FFDB0D;
  color: #3B3B3B;
  transition: all 0.4s ease-in-out;
}

.CrimeList-fluid h1 {
  font-family: NewYork;
  text-align: center;
  font-size: 50px;
  margin-bottom: 30px;
}

.CrimeList-fluid {
  background-color: #F0F0F0;
  padding: 0px;
}

.styleguide {
  background-color: #F0F0F0;
  padding: 30px;
}

.credits-fluid {
  background-color: #052F57;
  color: white;
  margin: 0px;
  padding: 50px;
}

.remove-message {
  background-color:#0A67BD;
  padding: 10px 20px;
  border-radius: 5px;
  border-left: #052F57 8px solid;
  width: 25%;
  margin: 20px auto;
  color: #ffffff;
  transition: all 0.4s ease-in-out;
}


@media screen and (max-width: 560px) {

.title h1 {
  font-size: 50px;
}

.styleguide {
  padding: 15px;
}

}

</style>
