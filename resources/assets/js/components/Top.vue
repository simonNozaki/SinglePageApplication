<template>
<div>
    <div>
          <div class = "form-group">
              <input type = "text" class = "form-control" v-model = "category" placeholder = "Category">
              <small>大文字と小文字は区別されます。</small>
          </div>
        <h3>Bands</h3>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center" v-for="artist in filterArtists">
                 <router-link v-bind:to="{ name : 'Show', params : { artist_id: artist.artist_id }}">
                   {{ artist.name }}
                 </router-link>
            <span class="badge badge-primary badge-pill">{{ artist.area }}</span>
            <span class="badge badge-primary badge-pill">{{ artist.category }}</span>
            </li>
        </ul>
    </div>
</div>
</template>

<script>
import Vue from 'vue'

export default {
  //ページ起動時の処理
  mounted(){
    this.fetchArtists()
  },
  data(){
    return{
      category: "",
      artists: []
    }
  },
  methods: {
    fetchArtists(){
      this.$http.get('api/artists')
      .then(res => {this.artists = res.data})
    }
  },
  computed: {
    filterArtists: function() {
      var category = this.category; // テキストフィールドの値を変数に格納
      return this.artists.filter( function( artist ) {
        return artist.category.indexOf( category ) !== -1
      } )
    }
  }
}
</script>
