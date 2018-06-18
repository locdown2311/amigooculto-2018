<template>
<p>O {{brl}} </p>
</template>

<script>
export default {
    data(){
        return{
            brl:null,

        }
    },
    methods:{
        precoBrl(){
            axios
            .get('https://api.coindesk.com/v1/bpi/currentprice/BRL.json')
            .then(response => (this.brl = response))
        }
    },
    mounted(){
        this.precoBrl()
    }
}
</script>
