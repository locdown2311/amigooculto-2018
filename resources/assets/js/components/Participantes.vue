<template>
    <ul class="list-group">
		<li v-for="user in usuarios" :key="user.id"  class="list-group-item"> <i class="fa fa-check-circle" style="color: green;"> <span id="#cap" style="color:#21252f; text-transform: capitalize;"> {{user["nome"]}}</span> </i> </li>
	</ul>
</template>

<script>
export default {
    props:['usuarios'],
    
};
</script>
