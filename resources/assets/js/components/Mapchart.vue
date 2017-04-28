<template>
  <div>
    <div class="col-sm-8 col-sm-offset-2 chart">
      <p>Crimes Committed by Year</p>
      <div id="chart"></div>
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

    //Data information for line graph
    var chart = window.c3.generate({
    bindto: '#chart',

    data: {
         x: 'x',
      columns: [
        ['x', '1990','1991','1992','1993','1994','1995','1996','1997','1998','1999','2000','2001','2002','2003','2004','2005','2006','2007','2008','2009','2010','2011','2012','2013','2014','2015'],
        ['Index', 1137689, 1126503, 1058586, 1010577, 919210, 827564, 751163, 709347, 649122, 603033, 585173, 557485, 538904, 519076, 500640, 489399, 477867, 460993, 464691, 449970, 450433, 448902, 452340, 432638, 409969, 390246],

      ],
      type: "line",
    colors: {
            Index: '#FFD00D'
        },
    },
    axis: {
      y: {
        label: { // ADD
          text: 'Number of Crimes',
          position: 'outer-middle'
        },
        tick: {
          format: d3.format("") // ADD
        }
      },
      x: {
        label: {
            text: 'Year',
            position: 'outer-middle',
            format: '%Y'
        },
      },
    }
  });
  },

  methods: {

  }
}
</script>

<style>

path.c3-shape.c3-line.c3-line-Index {
  fill: none;
}

.c3 .c3-axis-x path, .c3 .c3-axis-x line {
    stroke: white;
    fill: white;
}
.c3 .c3-axis-y path, .c3 .c3-axis-y line {
    stroke: white;
    fill: white;
}

.c3 .c3-axis-y text {
    fill: white;
}

.c3 .c3-axis-x text {
    fill: white;
}

g.c3-legend-item.c3-legend-item-Index text {
  fill: white;
}

.chart p {
  color: #ffffff;
  text-align: center;
  font-size: 20px;
  margin-top: 20px;
}

</style>
