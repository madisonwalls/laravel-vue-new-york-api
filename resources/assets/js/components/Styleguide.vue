<template>
<div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 style-title">
        <h2>Style Guide</h2>
      </div>
      </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 category">
        <h2>Colors</h2>
      </div>
      <div class="col-md-8">
        <div class="color1"><p>Cotton #AED0E5</p></div>
        <div class="color2"><p>Bluebell #3FA7D3</p></div>
        <div class="color3"><p>Jeans #3D5A6C</p></div>
        </br>
        <div class="color4"><p>Electric #0A67BD</p></div>
        <div class="color5"><p>Ocean #07447E</p></div>
        <div class="color6"><p>Navy #052F57</p></div>
        </br>
        <div class="color7"><p>Lemon #FFE659</p></div>
        <div class="color8"><p>Warning #FFDB0D</p></div>
        <div class="color9"><p>Summer #FFCA31</p></div>
        </br>
        <div class="color10"><p>Clean #ffffff</p></div>
        <div class="color11"><p>Wired #999999</p></div>
        <div class="color12"><p>Night #000000</p></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 category">
        <h2>Typography</h2>
      </div>
      <div class="col-md-8 text">
        <p class="font-thin">Source Sans Pro Thin</p>
        <p class="font-regular">Source Sans Pro Regular</p>
        <p class="font-bold">Source Sans Pro Bold</p>
        <h1 class="main-header">Main Header - Poire Tone Regular</h1>
        <h2 class="stand-out-header">Stand Out Header - Source Sans Pro Thin</h2>

        <h1>Heading 1 - Poire Tone Regular</h1>
        <h2>Heading 2 - Source Sans Pro</h2>
        <h3>Heading 3 - Source Sans Pro</h3>
        <h4>Heading 4 - Source Sans Pro</h4>
        <h5>Heading 5 - Source Sans Pro</h5>
        <h6>Heading 6 - Source Sans Pro</h6>
          <p class="paragraphs">Paragraph Text</p>
          <p class="paragraphs">This website lets you store information about the crimes you've visited in New York City. Making it easier to recontact them or to check what crimes you haven't tried yet.</p>
          <p class="paragraphs">The benefits of this application are endless, and the style is sleek and clean with an inviting color scheme.</p>
          <p class="light-text">p.light-text</p>
          <p class="light-text">This website lets you store information about the crimes you've visited in New York City. Making it easier to recontact them or to check what crimes you haven't tried yet.</p>
          <p class="light-text">The benefits of this application are endless, and the style is sleek and clean with an inviting color scheme.</p>
          <p class="lead-text">p.lead-text</p>
          <p class="lead-text">This website lets you store information about the crimes you've visited in New York City. Making it easier to recontact them or to check what crimes you haven't tried yet.</p>
          <p class="lead-text">The benefits of this application are endless, and the style is sleek and clean with an inviting color scheme.</p>
        </div>
      </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 category">
        <h2>Buttons</h2>
      </div>
      <div class="col-md-8">
        <button type="button" name="button" class="smallButton">Small Button</button>
        <button type="button" name="button" class="regularButton">Regular Button</button>
        <button type="button" name="button" class="largeButton">Large Button</button>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 category">
        <h2>Lists</h2>
      </div>
      <div class="col-md-8">
      <ul>
       <li>This is an example of a list item.</li>
       <li>Another chance to see what a list item looks like.</li>
       <li>For example purposes, here is a list item.</li>
       <li>This is the styleguide for a New York Crime Website.</li>
       <li>Here is the last example on this list.</li>
     </ul>
     <ol>
        <li>This is an example of a list item.</li>
        <li>Another chance to see what a list item looks like.</li>
        <li>For example purposes, here is a list item.</li>
        <li>This is the styleguide for a New York Crime Website.</li>
        <li>Here is the last example on this list.</li>
    </ol>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 category">
        <h2>Inputs</h2>
      </div>
      <div class="col-md-8">
        <input class="inputField" type="text" name="" value="" placeholder="Example Input Field">
        <textarea class="textareaInput" type="text" name="" value="" placeholder="Example Text Area Field"></textarea>
        <select class="selectInput" type="text" name="" value="">
         <option value="Example 1">Example 1</option>
         <option value="Example 2">Example 2</option>
         <option value="Example 3">Example 3</option>
       </select>
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


 .style-title h2 {
   font-family: NewYork;
   margin-top: 50px;
   margin-bottom: 70px;
   text-align: center;
   font-size: 50px;

 }

 .color1 {

  background-color: #AED0E5;
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

  background-color: #3FA7D3;
  width: 100px;
  height: 100px;
  display: inline-block;
  margin-bottom: 40px;
}

.color3 {

  background-color: #3D5A6C;
  width: 100px;
  height: 100px;
  display: inline-block;
  margin-bottom: 40px;
}

.color4 {
  margin-bottom: 40px;
  background-color: #0A67BD;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color5 {
  margin-bottom: 40px;
  background-color: #07447E;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color6 {
  margin-bottom: 40px;
  background-color: #052F57;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color7 {
  margin-bottom: 40px;
  background-color: #FFE659;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color8 {
  margin-bottom: 40px;
  background-color: #FFDB0D;
  width: 100px;
  height: 100px;
  display: inline-block;
}

.color9 {
  margin-bottom: 40px;
  background-color: #FFCA31;
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

.category h2 {
  font-family: source sans pro;
  font-weight: lighter;
  color: #3FA7D3;
}

.font-thin {
  font-family: source sans pro;
  font-weight: lighter;
  font-size: 28px;
}

.font-regular {
  font-family: source sans pro;
  font-size: 28px;
}

.font-bold {
  font-family: source sans pro;
  font-weight: bold;
  font-size: 28px;
  margin-bottom: 60px;
}

.main-header  {
  font-family: NewYork;
  font-size: 50px;
}

.stand-out-header {
  font-family: source sans pro;
  font-weight: lighter;
  color: #3FA7D3;
  margin-bottom: 60px;
}

.text h1 {
  font-family: NewYork;
}

.text h2, .text h3, .text h4, .text h5, .text h6 {
  font-family: source sans pro;
}

.text h6 {
    margin-bottom: 60px;
}

.paragraphs {
  line-height: 1.5;
  font-family: source sans pro;
  font-size: 18px;
}

.light-text {
  line-height: 1.5;
  font-family: source sans pro;
  font-weight: lighter;
  font-size: 16px;
}

.lead-text {
  line-height: 1.5;
  font-family: source sans pro;
  font-weight: bold;
  font-size: 22px;
}

.largeButton {
  border: solid 3px #FFDB0D;
  background-color: rgba(0, 0, 0, 0);
  padding: 25px 95px;
  border-radius: 5px;
  color: #FFDB0D;
  margin-bottom: 40px;
  display: block;
}

.largeButton:hover {
  border: solid 3px #FFDB0D;
  background-color: #FFDB0D;
  padding: 25px 95px;
  border-radius: 5px;
  color: #ffffff;
  margin-bottom: 40px;
}

.smallButton {
  margin-bottom: 5px;
  background-color: #052F57;
  border-radius: 4px;
  padding: 5px 10px;
  border: none;
  color: #ffffff;
  display: block;
  margin-bottom: 15px;
}


.smallButton:hover {
  margin-bottom: 5px;
  background-color: #0A67BD;
  border-radius: 4px;
  padding: 5px 10px;
  border: none;
  color: #ffffff;
}

.inputField {

  width: 50%;
  padding: 10px 50px 10px 8px;
  font-family: Lato;
  font-size: 16px;
  border: 2px solid #0A67BD;
  border-radius: 4px;
  margin: 10px;
}

.textareaInput {

  width: 80%;
  padding: 10px 50px 10px 8px;
  font-family: Lato;
  font-size: 16px;
  border: 2px solid #0A67BD;
  border-radius: 4px;
  margin: 10px;
}


.selectInput {

  width: 30%;
  padding: 10px 50px 10px 20px;
  font-family: Lato;
  font-size: 16px;
  border: 2px solid #0A67BD;
  border-radius: 4px;
  margin: 10px;
}


.regularButton {
  border: 4px solid #0A67BD;
  padding: 10px 35px;
  border-radius: 4px;
  background-color: #052F57;
  color: #ffffff;
  font-size: 18px;
  display: block;
  margin-bottom: 15px;
}

.regularButton:hover {
  background-color: #0A67BD;
  color: #ffffff;
  border: 4px solid #0A67BD;
}

@media screen and (max-width: 560px) {


  .selectInput {
    width: 90%;
  }

  .textareaInput {
    width: 100%;
  }

  .inputField {
    width: 100%;
  }

 }

</style>
