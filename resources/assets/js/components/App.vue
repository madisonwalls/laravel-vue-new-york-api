<template>
  <div class="container-fluid main-page">
    <div class="header">
    <div class="row">
      <div class="col-sm-12 title">
          <h1>New York City </br> Crime Reporter</h1>
      </div>
    </div>
      <div class="row">
        <div class="col-md-5 col-md-offset-7 info">
            <p>NYC is a large and exciting city, but it can sometimes be dangerous as well. This site lets you report a crime that you know about, along with some important information to help keep the streets safe. Start by adding a new crime, or view the currently listed crimes below.</p>
            <button class="alert-crime">Report Crime Now</button>
          </div>
      </div>
    <Navigation></Navigation>
  </div>
    <Mapchart></Mapchart>
    <CrimeForm id="CrimeForm" @created="fetch"></CrimeForm>
      <div class="col-md-12 CrimeList">
        <h1 id="CrimeList">Crime List</h1>
          <Crime v-for="(form, index) in crimes" :key="index" :crime="form" @updated="update" @deleted="remove(index)"></Crime>
      </div>
    <Mapinteractive></Mapinteractive>
    <Styleguide id="StyleGuide" class="styleguide"></Styleguide>



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



export default {
  components: {
    CrimeForm,
    Crime,
    Navigation,
    Styleguide,
    Mapchart,
    Mapinteractive
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
  padding-left: 40px;
  color: #FFDB0D;
  margin-bottom: 150px;
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

}

.CrimeList h1 {
  font-family: NewYork;
  text-align: center;
  font-size: 50px;
  margin-bottom: 30px;
}

.CrimeList {
  background-color: #F0F0F0;
}

.styleguide {
  background-color: #F0F0F0;
}


</style>
