<template>

<table class="table table-dark">
    <thead>
    <tr>
    <th scope="col" >Carpeta 0</th>
    </tr>
    </thead>
        <tbody>
            <tr v-for="dato in datos"  v-bind:key="dato.nombrearchivo">
            <th scope="row">{{dato.nombrearchivo}}</th>
            </tr>
        </tbody>
</table>
</template>

<script>
export default {
     data()
    {
        return {
            datos:[]
        }
    },
    mounted()
    {
        axios.post('/administrador').then(response=>(this.datos = response.data));
    }
}
</script>

