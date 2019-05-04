<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        body
        {
            background-color: gray;
        }
        .select-periodo
        {
          background-color: darkgray;
          width: 50%;
          margin-left: 23%;
        }
        .barra-lateral
        {
            background-color: darkblue;
            padding-bottom: 100%;
        }
        .contenido-pagina
        {
            background-color: darkgray;
        }
        .campos-formulario-curriculum
        {
            width: 50%;
        }
    </style>
    
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills barra-lateral" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <select class="browser-default custom-select select-periodo">
                            <option selected>2019-1</option>
                            <option value="1">2019-2</option>
                            <option value="2">2020-1</option>
                            <option value="3">2020-2</option>
                    </select>
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">INICIO</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">CARPETA 1</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">CARPETA 2</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">CARPETA 3</a>
            </div>
        </div>

        <div class="col-9 contenido-pagina">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- CONTENIDO DE INICIO-->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><H1>INICIOOOO......</H1></div>
                
                <!-- CONTENIDO DE CARPETA 1-->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="row">
                        <div class="col-lg-12">
                                    <h1>CEDULA 0 - CURRICULUM VITAE RESUMIDO - 2019-1</h1>
                            <div class="container">
                                    <div class="form-group">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row"> 
                                                        <label for="inputnoprofesor" class="col-form-label">NO. DE PROFESOR</label>
                                                        <div class="col-sm-2">
                                                        <input type="text" class="form-control" id="inputnoprofesor" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                            <label for="inputapellidopaterno" class="col-form-label">APELLIDO PATERNO</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="inputapellidopaterno" placeholder="">
                                                            </div>
        
                                                            <label for="inputapellidomaterno" class="col-form-label">APELLIDO MATERNO</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="inputapellidomaterno" placeholder="">
                                                            </div>
        
                                                            <label for="inputapellidomaterno" class="col-form-label">NOMBRE(S)</label>
                                                            <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="inputapellidomaterno" placeholder="">
                                                            </div>
                                                    </div> 
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                    <div class="form-group row">
                                                            <label for="inputapellidopaterno" class="col-form-label">EDAD</label>
                                                            <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="inputapellidopaterno" placeholder="">
                                                            </div>
        
                                                            <label for="inputapellidomaterno" class="col-form-label">FECHA DE NACIMIENTO</label>
                                                            <div class="col-sm-3">
                                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                                            </div>
        
                                                            <label for="inputapellidomaterno" class="col-form-label">PUESTO</label>
                                                            <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="inputapellidomaterno" placeholder="">
                                                            </div>
                                                    </div> 
                                                </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CONTENIDO DE CARPETA 2-->
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">2</div>
                
                <!-- CONTENIDO DE CARPETA 3-->
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">3</div>
            </div>
        </div>
    </div>

    <!--Bootstrap script--->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>