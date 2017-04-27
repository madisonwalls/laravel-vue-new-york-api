<template>
  <div class="container">
        <div class="col-xs-12 col-sm-6 pie_text">
          <h3>Crime by Gender from 2008-2012</h3>
          <p>Breaking down the prison admissions from 2008 to 2012, males account for almost 94% of the admissions, while feamles account for only 6%.</p>
        <div id="chartPie"></div>
       </div>
       <div class="col-xs-12 col-sm-6 pie_text">
          <h3>Most Common Crime</h3>
          <p>Crimes associated with drugs have over double (46,653) the amount of recorded crimes as the next most popular crime, Robbery (22,796).</p>
          <div id="chartPieDrug"></div>
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

    console.log('Pie Graphs -> Mounted.')
    console.log(window.c3)

    var chart = window.c3.generate({
      bindto: '#chartPie',
      data: {
        columns: [
            ['Female', 10582],
            ['Male', 155598],
        ],
        type : 'pie',
        click: function (d, i) { console.log("click", d, i); },
        mouseenter: function (d, i) { console.log("mouseenter", d, i); },
        mouseout: function (d, i) { console.log("mouseout", d, i); },
        colors: {
          Female: '#414142',
          Male: '#757370',
        }
      }
    });

    var chart = window.c3.generate({
     bindto: '#chartPieDrug',
    data: {

        columns: [
            ['Drugs', 46653],
            ['Other', 166180],
        ],
        type : 'pie',
        click: function (d, i) { console.log("click", d, i); },
        mouseenter: function (d, i) { console.log("mouseenter", d, i); },
        mouseout: function (d, i) { console.log("mouseout", d, i); },

        colors: {
        Drugs: '#414142',
        Other: '#757370',

        }

    }
});


  },

  methods: {

  }
}
</script>

<style>

path.c3-shape.c3-arc.c3-arc-Other {
  fill:  #052F57 !important;
}

path:hover.c3-shape.c3-arc.c3-arc-Other{
  fill:  #FFDB0D !important;
}

path.c3-shape.c3-arc.c3-arc-Drugs {
  fill:  #0A67BD !important;
}

path:hover.c3-shape.c3-arc.c3-arc-Drugs{
  fill:  #FFDB0D !important;
}

path.c3-shape.c3-arc.c3-arc-Male {
  fill:  #052F57 !important;
}

path:hover.c3-shape.c3-arc.c3-arc-Male{
  fill:  #FFDB0D !important;
}

path.c3-shape.c3-arc.c3-arc-Female {
  fill:  #0A67BD !important;
}

path:hover.c3-shape.c3-arc.c3-arc-Female{
  fill:  #FFDB0D !important;
}

g.c3-legend-item.c3-legend-item-Drugs line.c3-legend-item-tile {
  stroke:  #0A67BD !important;
}

g.c3-legend-item.c3-legend-item-Other line.c3-legend-item-tile {
  stroke:  #052F57 !important;
}

g.c3-legend-item.c3-legend-item-Female line.c3-legend-item-tile {
  stroke:  #0A67BD !important;
}

g.c3-legend-item.c3-legend-item-Male line.c3-legend-item-tile {
  stroke:  #052F57 !important;
}

.pie_text h3 {
  font-family: source sans pro;
  font-weight: lighter;
  color: #3FA7D3;
  font-size: 24px;
  margin-top: 50px;
}

.pie_text p {
  font-family: source sans pro;
  font-size: 16px;
}


</style>
