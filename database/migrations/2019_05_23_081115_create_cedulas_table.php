<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCedulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_maestro', 20);
            $table->string('apellido_pat', 20);
            $table->string('apellido_mat', 20);
            $table->string('nombres', 30);

            //info basica
            $table->string('edad', 3);
            $table->string('fecha_nac', 12);
            $table->string('puesto', 40);

            //formacion academica
            $table->string('FA_nombre_L',40);
            $table->string('FA_instPais_L',40);
            $table->string('FA_anioObte_L',40);
            $table->string('FA_cedula_L',40);

            $table->string('FA_nombre_E',40);
            $table->string('FA_anioObte_E',40);
            $table->string('FA_instPais_E',40);
            $table->string('FA_cedula_E',40);

            $table->string('FA_nombre_M',40);
            $table->string('FA_anioObte_M',40);
            $table->string('FA_instPais_M',40);
            $table->string('FA_cedula_M',40);
            
            $table->string('FA_nombre_D',40);
            $table->string('FA_anioObte_D',40);
            $table->string('FA_instPais_D',40);
            $table->string('FA_cedula_D',40);

            //Capacitacion docente
            $table->string('CD_tipo_1',40);
            $table->string('CD_instPais_1',40);
            $table->string('CD_anioObte_1',40);
            $table->string('CD_horas_1',40);
            
            $table->string('CD_tipo_2',40);
            $table->string('CD_instPais_2',40);
            $table->string('CD_anioObte_2',40);
            $table->string('CD_horas_2',40);

            $table->string('CD_tipo_3',40);
            $table->string('CD_instPais_3',40);
            $table->string('CD_anioObte_3',40);
            $table->string('CD_horas_3',40);

            $table->string('CD_tipo_4',40);
            $table->string('CD_instPais_4',40);
            $table->string('CD_anioObte_4',40);
            $table->string('CD_horas_4',40);
            
            //Actualizacion disciplinar
            $table->string('AD_tipo_1',40);
            $table->string('AD_instPais_1',40);
            $table->string('AD_anioObte_1',40);
            $table->string('AD_horas_1',40);

            $table->string('AD_tipo_2',40);
            $table->string('AD_instPais_2',40);
            $table->string('AD_anioObte_2',40);
            $table->string('AD_horas_2',40);

            $table->string('AD_tipo_3',40);
            $table->string('AD_instPais_3',40);
            $table->string('AD_anioObte_3',40);
            $table->string('AD_horas_3',40);

            $table->string('AD_tipo_4',40);
            $table->string('AD_instPais_4',40);
            $table->string('AD_anioObte_4',40);
            $table->string('AD_horas_4',40);

            //Gestion academica
            $table->string('GA_puesto_1',40);
            $table->string('GA_inst_1',40);
            $table->string('GA_De_1',40);
            $table->string('GA_A_1',40);

            $table->string('GA_puesto_2',40);
            $table->string('GA_inst_2',40);
            $table->string('GA_De_2',40);
            $table->string('GA_A_2');

            $table->string('GA_puesto_3',40);
            $table->string('GA_inst_3',40);
            $table->string('GA_De_3',40);
            $table->string('GA_A_3',40);

            $table->string('GA_puesto_4',40);
            $table->string('GA_inst_4',40);
            $table->string('GA_De_4',40);
            $table->string('GA_A_4',40);

            //Productos academicos relevantes relacionados con el PE
            $table->string('PA_num_1',20);
            $table->string('PA_desc_1',40);

            $table->string('PA_num_2',20);
            $table->string('PA_desc_2',40);

            $table->string('PA_num_3',20);
            $table->string('PA_desc_3',40);

            $table->string('PA_num_4',20);
            $table->string('PA_desc_4',40);

            $table->string('PA_num_5',20);
            $table->string('PA_desc_5',40);
            
            $table->string('PA_num_6',20);
            $table->string('PA_desc_6',40);
            
            $table->string('PA_num_7',20);
            $table->string('PA_desc_7',40);

            $table->string('PA_num_8',20);
            $table->string('PA_desc_8',40);

            $table->string('PA_num_9',20);
            $table->string('PA_desc_9',40);

            $table->string('PA_num_10',20);
            $table->string('PA_desc_10',40);
            
            //Experiencia profesiona (no academica)
            $table->string('EP_puesto_1',40);
            $table->string('EP_empresa_1',40);
            $table->string('EP_De_1',40);
            $table->string('EP_A_1',40);

            $table->string('EP_puesto_2',40);
            $table->string('EP_empresa_2',40);
            $table->string('EP_De_2',40);
            $table->string('EP_A_2',40);

            $table->string('EP_puesto_3',40);
            $table->string('EP_empresa_3',40);
            $table->string('EP_De_3',40);
            $table->string('EP_A_3',40);

            $table->string('EP_puesto_4',40);
            $table->string('EP_empresa_4',40);
            $table->string('EP_De_4',40);
            $table->string('EP_A_4',40);
            
            //Experiencia en disenio ingenieril
            $table->string('ED_organismo_1',40);
            $table->string('ED_periodo_1', 3);
            $table->string('ED_experiencia_1',40);

            $table->string('ED_organismo_2',40);
            $table->string('ED_periodo_2',3);
            $table->string('ED_experiencia_2',40);

            $table->string('ED_organismo_3',40);
            $table->string('ED_periodo_3',3);
            $table->string('ED_experiencia_3',40);

            $table->string('ED_organismo_4',40);
            $table->string('ED_periodo_4',3);
            $table->string('ED_experiencia_4',40);

            //Logros profesionales (no academicos)
            $table->string('LP_desc');

            //Membresia o participacion en colegios, camaras, asociaciones..
            $table->string('MP_organismo_1',40);
            $table->string('MP_periodo_1',3);
            $table->string('MP_experiencia_1',40);

            $table->string('MP_organismo_2',40);
            $table->string('MP_periodo_2',3);
            $table->string('MP_experiencia_2',40);

            $table->string('MP_organismo_3',40);
            $table->string('MP_periodo_3',3);
            $table->string('MP_experiencia_3',40);

            $table->string('MP_organismo_4',40);
            $table->string('MP_periodo_4',3);
            $table->string('MP_experiencia_4',40);

            //Premios, distinciones o reconomientos recibios
            $table->string('PD_desc');

            //Participacion en el analisis o actualizacion PE
            $table->string('PPE_parti');
     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cedulas');
    }
}
