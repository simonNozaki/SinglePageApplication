<template>
<div>
    <div>
        <h1>Bands Database</h1>
        <input type = "text" v-model = "category" placeholder = "Search by category">
        <button v-on:click = "searchArtist"></button>
    </div>
</div>
</template>

<script>
import Vue from 'vue'

export default {
  data(){
    return{
      category: ""
    }
  },
  methods(){
    searchArtist: {
      var artist = {
        'category': this.category
      };

      this.$http.post('/api/artists/search', artist)
      .catch(error => console.log(error.response));
    }
  }
}


</script>
