<template>
<div>
    <div>
        <input type = "text" v-model = "input">
        <input type = "text" v-model = "text">
        <ul>
            <li>Input: {{ input }} </li>
            <li>Text: {{ text }} </li>
        </ul>
    </div>
</div>
</template>

<script>
export default {
  data(){
    return{
      input: "input default",
      text: "text default"
    }
  }
}
</script>
