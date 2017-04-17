<template>
  <div class="container">
    <input type="text" v-model="name" placeholder="Name" />
    <input type="text" v-model="address" placeholder="Address"/>
    <input type="text" v-model="website" placeholder="Website"/>
    <input type="text" v-model="phone" placeholder="Phone"/>
    <input type="text" v-model="cuisine" placeholder="Cuisine"/>
    <input type="text" v-model="rating" placeholder="Rating"/>
    <input type="text" v-model="hours" placeholder="Hours" />
    <button class="btn btn-primary" @click="create" :disabled="loading">Create</button>
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
      name: '',
      address: '',
      website: '',
      phone: '',
      cuisine: '',
      rating: '',
      hours: '',
      loading: false
    }
  },


  methods: {
    create () {
      console.log('RestaurantForm -> create');
      if (this.loading) {
        alert('request is already being made');
        return false;
      }
      this.loading = true;
      this.sendRequest();
    },
    sendRequest () {
    axios.post('/restaurants', {
      name: this.name,
      address: this.address,
      website: this.website,
      phone: this.phone,
      cuisine: this.cuisine,
      rating: this.rating,
      hours: this.hours,
    })
    .then((response) => {
      console.log('RestaurantForm -> sendRequest success');
      console.log(response.data);
      this.loading = false;
      this.reset();
      this.$emit('created');
    })
    .catch((error) => {
      console.error('RestaurantForm-> sendRequest error');
      // show an error message
    });
  },
  reset () {
      this.name = '';
      this.address = '';
      this.website = '';
      this.phone = '';
      this.cuisine = '';
      this.rating = '';
      this.hours = '';
    }
  }
}
</script>

<style>


</style>
