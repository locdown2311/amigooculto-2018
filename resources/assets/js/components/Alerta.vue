<template>
<div class="alert alert-success" role="alert">
  <span>Usuario {{dado.nome}} cadastrado com sucesso.</span> 
</div>
</template>
<script>
export default {
    props:['dado']
}
</script>
