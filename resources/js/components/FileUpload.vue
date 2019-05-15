<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                            <legend>Subir Archivos</legend>

                            <div class="form-group">
                                <label></label>
                                <input id="upload-file" type="file" multiple class="form-control" @change="fieldChange">
                            </div>




                            <button class="btn btn-primary" @click="uploadFile">Submit</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            attachments: [],
            form: new FormData
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
            document.getElementById('upload-file').value=[];
            axios.post('/upload',this.form,config).then(response=>{
                console.log(response);
                this.attachments.length = 0;
                this.form.archivos.length = 0;
            })
                .catch(response=>{
                    //error
                });
        }
    },
    mounted(){
        console.log('component mounted');
    }
}
</script>
