<template>
<main class="main">
    <div class="container-fluid">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">

                    <div class="card-body">
                            <h5 class="card-title">Subir Archivos</h5>
                            <h6 class="card-subtitle mb-2 text-danger">Limite de subida de 15 MB </h6>
                            <div class="form-group row">
                                <label></label>
                                <input id="upload-file" type="file" multiple class="form-control" @change="fieldChange">
                            </div>




                            <button class="btn btn-primary" @click="uploadFile">Subir</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</template>

<script>
export default {
    data(){
        return{
            attachments: [],
            form: new FormData,

        }
    },
    methods:{
        fieldChange(e){
            let selectedFiles=e.target.files;
            if(!selectedFiles.length){
                return false;
            }
            for(let i=0;i<selectedFiles.length;i++){
                this.attachments.push(selectedFiles[i]);
            }
            console.log(this.attachments);
        },
        uploadFile(){
            for(let i=0; i<this.attachments.length;i++){
                this.form.append('archivos[]',this.attachments[i]);
            }
            const config = { headers: { 'Content-Type': 'multipart/form-data' } };
            let carpeta = 4;
            let me = this;
            document.getElementById('upload-file').value=[];
            axios.post('/upload/'+ carpeta,this.form,config,{
                
            }).then(response=>{


            }).catch(response=>{
 
            });
 
        }
    },
    mounted(){
        console.log('component mounted');
    }
}
</script>
