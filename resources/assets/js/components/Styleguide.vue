<template>
<div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 style-title">
        <h1>Style Guide</h1>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Colors</h1>
      </div>
      <div class="col-md-8">
      <div class="color1"><p>Mint #CAE4DB</p></div>
      <div class="color2"><p>Seafoam #7A9D96</p></div>
      <div class="color3"><p>Hunter #319B86</p></div>
      </br>
      <div class="color4"><p>Cotton #659ba8</p></div>
      <div class="color5"><p>Bluebell #0088a8</p></div>
      <div class="color6"><p>Jeans #00303f</p></div>
      </br>
      <div class="color7"><p>Sun #DBC179</p></div>
      <div class="color8"><p>Mustard #DCAE1D</p></div>
      <div class="color9"><p>Antique #BA8900</p></div>
      </br>
      <div class="color10"><p>Clean #ffffff</p></div>
      <div class="color11"><p>Wired #999999</p></div>
      <div class="color12"><p>Night #000000</p></div>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Typography</h1>
      </div>
      <div class="col-md-8">
        <p>box</p>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Buttons</h1>
      </div>
      <div class="col-md-8">
        <p>box</p>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Lists</h1>
      </div>
      <div class="col-md-8">
        <p>box</p>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h1>Inputs</h1>
      </div>
      <div class="col-md-8">
        <p>box</p>
      </div>
      </div>
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


  methods: {

  }
}
</script>

<style>

@font-face {
  font-family: NewYork;
  src: url(../../../../public/fonts/poiretone_regular.ttf);
}


 .style-title h1 {
   font-family: NewYork;
   margin-top: 50px;
   margin-bottom: 70px;
   text-align: center;
   font-size: 50px;

 }

 .color1 {

  background-color: #DAFFED;
  width: 100px;
  height: 100px;
  display: inline-block;
  margin-bottom: 40px;
}

.color1 p, .color2 p, .color3 p, .color4 p, .color5 p, .color6 p, .color7 p, .color9 p, .color10 p, .color11 p, .color12 p {
  position: relative;
  top: 100px;
  font-family: Lato-thin;
  font-size: 12px;
}

.color8 p {
  position: relative;
  top: 100px;
  font-family: Lato-thin;
  font-size: 11px;
}


.color2 {

  background-color: #A1CCA5;
  width: 100px;
  height: 100px;
  display: inline-block;
  margin-bottom: 40px;
}

.color3 {

  background-color: #72A98F;
  width: 100px;
  height: 100px;
  display: inline-block;
  margin-bottom: 40px;
}

.color4 {
  margin-bottom: 40px;
  background-color: #AED0E5;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color5 {
  margin-bottom: 40px;
  background-color: #3FA7D3;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color6 {
  margin-bottom: 40px;
  background-color: #3D5A6C;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color7 {
  margin-bottom: 40px;
  background-color: #6B4A5C;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color8 {
  margin-bottom: 40px;
  background-color: #6B3251;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color9 {
  margin-bottom: 40px;
  background-color: #433A3F;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color10 {
  margin-bottom: 40px;
  background-color: #ffffff;
  width: 100px;
  height: 100px;
  display: inline-block;
  border: #ccc thin solid;
}

.color11 {
  margin-bottom: 40px;
  background-color: #999999;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color12 {
  margin-bottom: 40px;
  background-color: #000000;
  width: 100px;
  height: 100px;
  display: inline-block;
}

</style>
