    @extends('principal')
    @section('contenido')
    
    <template v-if="menu==0">
            <h1>Contenido del menú 0</h1>
    </template>

    <template v-if="menu==1">
        <Cedula0></Cedula0>
    </template>
    
    <template v-if="menu==2">
        <Carpeta2></Carpeta2>
    </template>

    <template v-if="menu==3">  
        <Carpeta2></Carpeta2>
    </template>

    <template v-if="menu==4">
        <Carpeta3></Carpeta3>
    </template>

    <template v-if="menu==5">
        <Carpeta3></Carpeta3>
    </template>

    <template v-if="menu==6">
        <Carpeta3></Carpeta3>
    </template>

    <template v-if="menu==7">
        <Carpeta3></Carpeta3>
    </template>
    
    <template v-if="menu==8">
        <Carpeta3></Carpeta3>
    </template>

    <template v-if="menu==9">
        <Carpeta3></Carpeta3>
    </template>

    <template v-if="menu==10">
        <Carpeta4></Carpeta4>
    </template>

    <template v-if="menu==11">
        <h1>Contenido del menú 11</h1>
    </template>

    <template v-if="menu==12">
        <h1>Contenido del menú 12</h1>
    </template>

    <template v-if="menu==13">
        <h1>Contenido del menú 13</h1>
    </template>

    <template v-if="menu==14">
        <h1>Contenido del menú 14</h1>
    </template>
    @endsection