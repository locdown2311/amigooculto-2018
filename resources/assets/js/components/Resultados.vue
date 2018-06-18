<template>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Segredo</th>
            </tr>
        </thead>
        <tbody>
          <tr v-for="usuarios in users" :key="usuarios.id">
            <td>{{usuarios.nome}}</td>
            <td class="oculto">{{usuarios.segredo}}</td>
          </tr>
        </tbody>
      </table>
      
</template>

<script>
export default {
    props:['users'],
}
</script>
