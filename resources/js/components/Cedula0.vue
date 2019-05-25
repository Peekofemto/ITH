<template>
<main class="main">
                    <!-- CONTENIDO DE CARPETA 1-->
    <div class="container-fluid">
        <h1>CEDULA 0 - CURRICULUM VITAE RESUMIDO</h1>
        <div class="container">                
            <form  class="form-horizontal">         
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Número de maestro*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="no_maestro" class="form-control" placeholder="Número de maestro">
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Apellido Paterno*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="apellido_pat" class="form-control" placeholder="Ingrese Apellido Paterno"> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Apellido Materno*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="apellido_mat" class="form-control" placeholder="Ingrese Apellido Materno">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Nombres*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="nombres" class="form-control" placeholder="Ingrese Nombre(s)">
                    </div>
                </div>
                <div>
                    <div>
                        <button type="button" class="btn btn-primary" @click="registrarCedula()">Guardar</button>
                    </div>
                    <div>
                        <button type="button" :disabled="condicion == 0" class="btn btn-warning" @click="cargarPdf()">Pdf</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
</template>

<<script>
export default {
    data(){
        return{
            no_maestro : '',
            apellido_pat : '',
            apellido_mat : '',
            nombres : '',
            condicion : 0
        }
    },
    methods: {
        registrarCedula(){
            let me = this;
            
            axios.post('/cedula/registrar',{
                'no_maestro' : this.no_maestro,
                'apellido_pat' : this.apellido_pat,
                'apellido_mat' :this.apellido_mat,
                'nombres' : this.nombres
            }).then(function(response) {
                me.abilitarPdf();
            }).catch(function(error){
                console.log(error);
            });           
        },

        abilitarPdf(){
            this.condicion = 1;
        },

        cargarPdf(){
            // var url = '/cedula/listarPdf?no_maestro=' + no_maestro;
            // axios.get(url).then(function (response) {
            //     // handle success

            //     console.log(response);
            // })
            // .catch(function (error) {
            //     // handle error
            //     console.log(error);
            // });
            window.open('http://localhost:8000/cedula/listarPdf','_blank');
        }
    },
}
</script>

