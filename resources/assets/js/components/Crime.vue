<template>
  <div class="Crime">
    <div class="heading">
      <h1>All Crimes</h1>
      <a :href="crime.charge"></a>
      <a class="tool" href="#" @click.prevent="editing = true" v-show="!editing">
        <i class="glyphicon glyphicon-pencil pull-right"></i>
      </a>
    </div>
    <div class="panel-body">
      <div class="live" v-show="!editing">
        {{ crime.charge }} {{ crime.location }}
      </div>
      <div class="editing" v-show="editing">
        <p>
          <input type="text" v-model="charge" />
          <input type="text" v-model="location" />
          <input type="text" v-model="year" />
        </p>
        <p>
          <button class="btn btn-success" @click="save">Save</button>
          <button class="btn btn-default" @click="cancel">Cancel</button>
        </p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {

  props: [
    'crime'
  ],

  data () {
    return {
      charge: this.crime.charge,
      location: this.crime.location,
      year: this.crime.year,
      editing: false,
      loading: false
    }
  },

  methods: {

    remove () {
      console.log('Crime -> remove');
      this.loading = true;
      axios.delete(`/crimes/${this.crime.id}`)
        .then((response) => {
          console.log('Crime -> remove success');
          this.$emit('deleted')
          this.loading = false;
        })
        .catch((error) => {
          console.log('Crime -> remove error');
          // stop deleting and dont remove from the dom
          // tell the user deletion failed
          // EDITTT
        });
    },

    save () {
      console.log('Crime -> save');
      axios.put(`/crimes/${this.crime.id}`, {
          charge: this.charge,
          location: this.location,
          year: this.year
        })
        .then((response) => {
          console.log('Crime -> save success');
          this.$emit('updated', {
            crime: this.crime,
            charge: this.charge,
            location: this.location,
            year: this.year
          });
          this.editing = false;
        })
        .catch((error) => {
          console.log('Crime -> save error');
          //show the user that it couldn't be updated
        });
    },

    cancel () {
      console.log('Crime -> cancel');
      this.charge = this.crime.charge;
      this.location = this.crime.location;
      this.year = this.crime.year;
      this.editing = false;
    }

  }

}
</script>

<style>
.tool > i {
  margin-left: 15px;
}
</style>
