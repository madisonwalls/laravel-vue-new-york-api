<template>
  <div class="Crime">
        <div class="col-sm-4 crime-card">
            <div class="card-body">
              <div class="live" v-show="!editing">
                  <a class="tool remove-icon" href="#">
                  <i class="glyphicon glyphicon-remove" @click.prevent="remove"></i></a></br>
                    <div class="header-crime">
                      <h1>{{ crime.charge }}</h1> <p class="crime-time"> {{ crime.month }} {{ crime.year }} </p>
                    </div>
                    <div class="body-crime">
                        <a class="tool map-crime" target="_blank" :href="'http://maps.google.com/?q=' + crime.location"> <i class="glyphicon glyphicon-map-marker"></i> {{ crime.location }} </a>
                        <a class="tool edit-icon" href="#" @click.prevent="editing = true" v-show="!editing">
                        <i class="glyphicon glyphicon-pencil"></i>Edit</a></br>
                        </br>
                        </br>
                        <p><strong>Suspect Information:</strong></p>
                        <p><strong>Name: </strong> {{ crime.suspect }}</p>
                        <p><strong>Age: </strong> {{ crime.age }}</p>
                        <p><strong>Gender: </strong> {{ crime.gender }}</p>
                        <p><strong>Crime Notes: </strong> {{ crime.notes }}</p>
                    </div>
                </div>
            </div>
            <div class="editing" v-show="editing">
                <p>
                  <p>Charge</p>
                  <input type="text" v-model="charge" />
                  <p>Location</p>
                  <input type="text" v-model="location" />
                  <p>Month</p>
                  <input type="text" v-model="month" />
                  <p>Year</p>
                  <input type="text" v-model="year" />
                </p>
                  <p>Suspect Name</p>
                  <input type="text" v-model="suspect" />
                  <p>Age</p>
                  <input type="text" v-model="age" />
                  <p>Gender</p>
                  <input type="text" v-model="gender" />
                  <p>Notes</p>
                  <input type="text" v-model="notes" />
                <p>
                  <button class="save" @click="save">Save</button>
                  <button class="cancel" @click="cancel">Cancel</button>
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
      month: this.crime.month,
      suspect: this.crime.suspect,
      age: this.crime.age,
      gender: this.crime.gender,
      notes: this.crime.notes,
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
          year: this.year,
          month: this.month,
          suspect: this.suspect,
          age: this.age,
          gender: this.gender,
          notes: this.notes
        })
        .then((response) => {
          console.log('Crime -> save success');
          this.$emit('updated', {
            crime: this.crime,
            charge: this.charge,
            location: this.location,
            year: this.year,
            month: this.month,
            suspect: this.suspect,
            age: this.age,
            gender: this.gender,
            notes: this.notes
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
      this.month = this.crime.month;
      this.suspect = this.crime.suspect;
      this.age = this.crime.age;
      this.gender = this.crime.gender;
      this.notes = this.crime.notes;
      this.editing = false;
    }

  }

}
</script>

<style>
.tool > i {
  margin-right: 10px;
  color: #ffffff;
  display: inline-block;
}

.tool > i:hover {
  margin-right: 10px;
  color: #FFDB0D;
  display: inline-block;
}

.tool > a {
  text-align: right;
}

.body-crime {
  border: 1px solid #ccc;
  border-left: 12px solid #052F57;
  border-radius: 10px;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  margin: 0px;
  margin-left: 72px;
  padding: 20px;
  border-top: none;

}

.CrimeList {
  display: block;
  padding: 50px 0px;

}

.card-body h1 {
  color: #ffffff;
  font-family: source sans pro;
  font-weight: lighter;
  font-size: 30px;
  margin-bottom: 5px;
  text-align: center;
}

.body-crime{
  margin: auto;
  width: 90%;
}

.editing input {
  width: 85%;
  padding: 10px 50px 10px 8px;
  font-family: source sans pro;
  font-size: 16px;
  border: 2px solid #0A67BD;
  border-radius: 4px;
  margin: 10px;
}

.editing {
  border: 1px solid #ccc;
  border-radius: 10px;
  margin: 0px;
  padding: 20px;
  padding-bottom: 55px;
  margin: auto;
  width: 90%;
  border-left: 8px solid #052F57;
}

.editing p {
  margin-bottom: 0px;
  margin-top: 15px;
}

.crime-card p {
  font-family: source sans pro;
}

.save {
  border: 4px solid green;
  padding: 5px 20px;
  border-radius: 4px;
  margin-right: 10px;
  background-color: #052F57;
  float: left;
  color: #ffffff;
  font-size: 14px;
}

.save:hover {
  background-color: green;
  color: #ffffff;
  border: 4px solid #0A67BD;
  transition: all 0.4s ease-in-out;
}

.cancel {
  border: 4px solid #0A67BD;
  padding: 5px 20px;
  border-radius: 4px;
  margin-right: 10px;
  background-color: #052F57;
  float: right;
  color: #ffffff;
  font-size: 14px;
}

.cancel:hover {
  background-color: #0A67BD;
  color: #ffffff;
  border: 4px solid #0A67BD;
  transition: all 0.4s ease-in-out;
}

.edit-icon {
  float: right;
  margin-bottom: 5px;
  background-color: #052F57;
  border-radius: 4px;
  padding: 5px 10px;

}

.remove-icon {
  float: right;
  margin-bottom: 5px;
  background-color: #052F57;
  border-radius: 4px;
  padding: 5px 5px;
  font-size: 20px;
  position: relative;
  top: 29px;
  left: -23px;

}


.map-crime {
  float: left;
  margin-bottom: 5px;
  background-color: #0A67BD;
  border-radius: 4px;
  padding: 5px 10px;

}

.crime-card a {
  color: #ffffff;
  display: inline-block;
}

.map-crime:hover {
  background-color: #052F57;
  display: inline-block;
  text-decoration: none;
  color: #ffffff;
  transition: all 0.4s ease-in-out;
}

.edit-icon:hover {
  color: #ffffff;
  background-color: #0A67BD;
  text-decoration: none;
  transition: all 0.4s ease-in-out;
}

.crime-time {
  text-align: center;
  margin-bottom: 0px;
  color: #ccc;
  font-size: 15px;
}

.header-crime {
  background-color: #052F57;
  margin-bottom: 0px;
  border: 1px solid #ccc;
  border-radius: 10px;
  margin: 0px;
  padding: 20px;
  margin: auto;
  width: 90%;
  border-bottom: none;
  border-bottom-left-radius: 0px;
  border-bottom-right-radius: 0px;
  border-left: 8px solid #052F57;
}



</style>
