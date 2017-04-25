<template>
  <div class="container">

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
    var chart = c3.generate({
         bindto: '#chartPie',
        data: {

            columns: [
                ['Female', 10582],
                ['Male', 155598],
            ],
            type : 'pie',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); },

            colors: {
            Female: '#414142',
            Male: '#757370',

            }

        }
    });


    var chart = c3.generate({
         bindto: '#chartPieDrug',
        data: {

            columns: [
                ['Drugs', 46653],
                ['Other', 166180],
            ],
            type : 'pie',
            onclick: function (d, i) { console.log("onclick", d, i); },
            onmouseover: function (d, i) { console.log("onmouseover", d, i); },
            onmouseout: function (d, i) { console.log("onmouseout", d, i); },

            colors: {
            Drugs: '#414142',
            Other: '#757370',

            }

        }
    });
  }
}
</script>

<style>


</style>
