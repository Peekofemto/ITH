<template>
<main class="main">
                    <!-- CONTENIDO DE CARPETA 1-->
    <div class="container-fluid">
        <h1>CEDULA 0 - CURRICULUM VITAE RESUMIDO</h1>
        <div class="container">                
            <form  class="form-horizontal">
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Número de control*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="numero_control" class="form-control" placeholder="Número de control">
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Apellido Paterno*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="apellido_paterno" class="form-control" placeholder="Ingrese Apellido Paterno">
                        
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Apellido Materno*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="apellido_materno" class="form-control" placeholder="Ingrese Apellido Materno">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Nombres*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="nombre" class="form-control" placeholder="Ingrese Nombre(s)">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="email">email*</label>
                    <div class="col-md-9">
                        <input type="email" v-model="email" class="form-control" placeholder="Ingrese email">
                    </div>
                </div>
                                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Fecha de nacimiento*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="fecha_nacimiento" class="form-control" placeholder="Ingrese Fecha de Nacimiento">
                    </div>
                </div>
                                <div class="form-group row">
                    <label class="col-md-3 form-control-label" for="text-input">Escolaridad*</label>
                    <div class="col-md-9">
                        <input type="text" v-model="escolaridad" class="form-control" placeholder="Ingrese Escolaridad">
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
</template>

