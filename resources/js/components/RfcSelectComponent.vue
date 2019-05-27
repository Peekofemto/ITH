<template>
<select v-model="RFCS.rfc" class="form-control" name="rfc" id="rfc" >
     <option  v-for="rfcselect in RFCS" v-bind:key="rfcselect.rfc">{{rfcselect.rfc}}</option>                                       
</select>
                         
</template>

<script>
export default {
    data()
    {
        return {
            RFCS:[]
        }
    },
    mounted()
    {
        axios.get('/administrador').then(response=>(this.RFCS = response.data));
    }
}
</script>
