<template>
  <div class="container form">
    <h1>Add New Crime</h1>
    <div class="row">
      <div class="form-inputs">
        <input class="input-field" type="text" v-model="charge" placeholder="Charged Crime" />
        <input class="input-field" type="text" v-model="location" placeholder="Location"/>
        <input class="input-field" type="text" v-model="year" placeholder="Year"/>
        <input class="input-field" type="text" v-model="month" placeholder="Month"/>
        <input class="input-field" type="text" v-model="suspect" placeholder="Suspect Name"/>
        <input class="input-field" type="text" v-model="gender" placeholder="Gender"/>
        <input class="input-field" type="text" v-model="age" placeholder="Age" />
        <input class="input-field" type="text" v-model="notes" placeholder="Notes" />
        <button class="btn-add" @click="create" :disabled="loading">Create</button>
      </div>
    </div>
</div>


  </div>
</template>

<script>
import axios from 'axios';
import Loader from './Loader';

export default {
  components: {
    Loader
  },

  data () {
    return {
      charge: '',
      location: '',
      year: '',
      month: '',
      suspect: '',
      gender: '',
      age: '',
      notes: '',
      loading: false
    }
  },


  methods: {
    create () {
      console.log('CrimeForm -> create');
      if (this.loading) {
        alert('request is already being made');
        return false;
      }
      this.loading = true;
      this.sendRequest();
    },
    sendRequest () {
    axios.post('/crimes', {
      charge: this.charge,
      location: this.location,
      year: this.year,
      month: this.month,
      suspect: this.suspect,
      gender: this.gender,
      age: this.age,
      notes: this.notes
    })
    .then((response) => {
      console.log('CrimeForm -> sendRequest success');
      console.log(response.data);
      this.loading = false;
      this.reset();
      this.$emit('created');
    })
    .catch((error) => {
      console.error('CrimeForm-> sendRequest error');
      // show an error message
    });
  },
  reset () {
      this.charge = '';
      this.location = '';
      this.year = '';
      this.month = '';
      this.suspect = '';
      this.gender = '';
      this.age = '';
      this.notes = '';
    }
  }
}
</script>

<style>

@font-face {
  font-family: NewYork;
  src: url(../../../../public/fonts/poiretone_regular.ttf);
}

.input-field {

  width: 46%;
  padding: 10px 50px 10px 8px;
  font-family: Lato;
  font-size: 16px;
  border: 2px solid #0A67BD;
  border-radius: 4px;
  margin: 10px;
}

.input-field:focus {
  border-color: #FFDB0D;
  background-color: #ffffff;
  outline-color: #FFDB0D;
}

.form-inputs {
  margin: auto;
  width: 80%;
}

.form h1 {

  font-family: NewYork;
  text-align: center;
  font-size: 50px;
  margin-top: 120px;
}

.form {
  margin-bottom: 100px;
}

.btn-add {
  border: 4px solid #0A67BD;
  padding: 15px 40px;
  border-radius: 4px;
  margin: 10px;
  background-color: #052F57;
  float: right;
  color: #ffffff;
  font-size: 18px;
}

.btn-add:hover {
  background-color: #0A67BD;
  color: #ffffff;
  border: 4px solid #0A67BD;
}

@media screen and (max-width: 560px) {

  .input-field {
    width: 100%;
  }

  .btn-add {
    float: none;
  }

}


</style>
