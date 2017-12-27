<template>
<div>
    <div>
        <h1>Top Page</h1>
        <header></header>
        <input-text></input-text>
        <router-link to= "/new">Link to New</router-link>
    </div>
</div>
</template>

<script>
import Vue from 'vue'

export default {
  data(){
    return{

    }
  }
}

const header = Vue.extend({
  name: 'header',
  template: '<div> {{ property.input }} </div>',
  data: function(){
    return{
      property: {
        input: 'Default value'
      }
    }
  }
})

const inputForm = Vue.extend({
  name: 'inputForm',
  template: '<input placeholder = "edit me">',
  data: function(){
    return{
      property: {
        input: ""
      }
    }
  }
})

Vue.component('header', header)

Vue.component('inputText', inputForm)
</script>
