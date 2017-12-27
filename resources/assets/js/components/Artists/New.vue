<template>
<div>
    <div>
        <input type = "text" v-model = "registration">
        <p>Registration {{ registration }} </p>
    </div>
</div>
</template>

<script>
export default {
  data(){
    return{
      registration: ""
    }
  }
}
</script>
