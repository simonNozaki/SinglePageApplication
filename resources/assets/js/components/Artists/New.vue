<template>
<div>
    <div>
        <ul>
            <li> <input type = "text" v-model = "name" v-validate data-vv-rules = "'required|name|max:60'" :class="{'input': true, 'is-danger': errors.has('name') }" placeholder = "Artist"> </li>
            <li> <input type = "text" v-model = "category" v-validate data-vv-rules = "'required|category|max:60'" :class="{'input': true, 'is-danger': errors.has('category') }" placeholder = "Category"> </li>
            <li> <input type = "text" v-model = "area" v-validate data-vv-rules = "'required|area|max:60'" :class="{'input': true, 'is-danger': errors.has('area') }" placeholder = "Area"> </li>
            <li> <input type = "text" v-model = "office" v-validate data-vv-rules = "'required|office|max:60'" :class="{'input': true, 'is-danger': errors.has('office') }" placeholder = "Office"> </li>
            <span v-if="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
            <span v-if="errors.has('category')" class="help is-danger">{{ errors.first('category') }}</span>
            <span v-if="errors.has('area')" class="help is-danger">{{ errors.first('area') }}</span>
            <span v-if="errors.has('office')" class="help is-danger">{{ errors.first('office') }}</span>
        </ul>
        <ul>
            <li>Artist: {{ name }} </li>
            <li>Category: {{ category }} </li>
            <li>Area: {{ area }}  </li>
            <li>Office: {{ office }}  </li>
        </ul>
        <button v-on:click = "postArtist">Register</button>
    </div>
</div>
</template>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
 }
});

export default {
  //デフォルトの値の定義、戻り値として返す
  data(){
    return{
      name: "",
      category: "",
      area: "",
      office: ""
    }
  },
  //v-on:click作動時のイベントハンドラ、クリックで以下のメソッドを発動する
  methods: {
    postArtist(){
      //データの初期化。配列に入力内容を格納
      var artist = {
        "name": this.name,
        "category": this.category,
        "area": this.area,
        "office": this.office
      };
      //ポストするデータのURI、パラメータを含める
      this.$http.post('http://localhost:8000/api/artists/store', artist)
      .then(res => {
        console.log(res.data.name);
        console.log(res.data.area);
      })
      .catch(error => console.log(error.response));

    }
  }
}
</script>
