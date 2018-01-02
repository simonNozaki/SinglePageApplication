<template>
  <div>
    <h1> id: {{ artist.artist_id }} </h1>
    <ul>
      <li> 地域: {{ artist.area }} </li>
      <li> ジャンル: {{ artist.category }} </li>
      <li> マネジメント: {{ artist.office }} </li>
    </ul>
  </div>
</template>

<script>
  export default {
    created(){
      this.getRecord()
    },
    data(){
      return { artist: [] }
    },
    methods: {
      getRecord(){
        this.$http.get('/api/artists/show/{artist_id}')
        .then(res => {this.artist = res.data} )
      }
    }
  }
</script>
