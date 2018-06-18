<template>
<div class="alert alert-success" role="alert">
  <span v-for="sorteio in dado" :key="sorteio.id">{{sorteio.sorteou}} seu amigo oculto é {{sorteio.sorteado}}</span>
</div>
</template>
<script>
export default {
    props:['dado']
}
</script>
