<template>
<div class = "wrapper">
  <h1>All Artists</h1>
  <div v-for="artist in artists">
    <p>
      <router-link :to = "'/artists/show/' + artist.artist_id">
        {{ artist.name }}</br>
        {{ artist.area }}
      </router-link>
    </p>
  </div>
</div>
</template>

<script>
  export default {
    mounted(){
      this.fetchArtists()
    },
    data(){
      return{
      artists: []
      }
    },
    methods: {
      fetchArtists(){
        this.$http.get('/api/artists')
        .then(res => {this.artists = res.data})
      }
    }
  }
</script>
