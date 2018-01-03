<template>
<div>
    <span v-show="errors.has('name')" class="help is-danger">{{ errors.first('name') }}</span>
    <span v-show="errors.has('category')" class="help is-danger">{{ errors.first('category') }}</span>
    <span v-show="errors.has('area')" class="help is-danger">{{ errors.first('area') }}</span>
    <span v-show="errors.has('office')" class="help is-danger">{{ errors.first('office') }}</span>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" v-model = "name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('name') }">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <input type="text" v-model = "category" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="POP PUNK, POST HARDCORE..." data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('category') }">
    <small id="emailHelp" class="form-text text-muted">Enter Bands' Category</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Area</label>
    <input type="text" v-model = "area" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="東京、大阪..." data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('area') }">
    <small id="emailHelp" class="form-text text-muted">Enter Bands' Area</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Office</label>
    <input type="text" v-model = "office" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TRUST RECORDS, THE NINTH APOLLO..." data-vv-rules="required" :class="{'input': true, 'is-danger': errors.has('office') }">
    <small id="emailHelp" class="form-text text-muted">Enter Bands' Management or Office.</small>
  </div>
  <button v-on:click = "postArtist" class="btn btn-secondary">Register</button>
</form>
</div>
</template>

<script>
import VeeValidate from 'vee-validate'

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
