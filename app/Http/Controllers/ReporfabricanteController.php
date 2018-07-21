<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporfabricante;
use App\Equipo;

class ReporfabricanteController extends Controller
{
    public function index(Request $request)
    {
        $reporte_fabricante = Reporfabricante::all();
        

        return view('reportesfabricante.index')
        ->with('reporte_fabricante', $reporte_fabricante);
    }

    public function create(Request $request, $id)
    {   
        $equipo = Equipo::find($id);
        //dd($equipo);
        return view('reportesfabricante.create')
        ->with('equipo', $equipo);
    }
    
    public function store(Request $request)
    {
       //$reppx = $request->all();
       $reporfabricante = new Reporfabricante;
       $reporfabricante->num_ingresocof = $request->input('num_ingresocof');
       $reporfabricante->num_noti = $request->input('num_noti');
       $reporfabricante->noti_ini = $request->input('noti_ini');
       $reporfabricante->repor_segui = $request->input('repor_segui');
       $reporfabricante->repor_fin = $request->input('repor_fin');
       $reporfabricante->notini_repfin = $request->input('notini_repfin');
       $reporfabricante->num_reporemp = $request->input('num_reporemp');
       $reporfabricante->num_sanita = $request->input('num_sanita');
       $reporfabricante->fecha_avisotitu = $request->input('fecha_avisotitu');
       $reporfabricante->fecha_noti = $request->input('fecha_noti');
       $reporfabricante->titu_sanita = $request->input('titu_sanita');
       $reporfabricante->fabricante_noti = $request->input('fabricante_noti');
       $reporfabricante->distri_noti = $request->input('distri_noti');
       $reporfabricante->nombre_razoempre = $request->input('comer_noti');
       $reporfabricante->rfc = $request->input('rfc');
       $reporfabricante->iniciales_noti = $request->input('iniciales_noti');
       $reporfabricante->nombre_seguimiento = $request->input('nombre_seguimiento');
       $reporfabricante->iniciales_ope = $request->input('iniciales_ope');
       $reporfabricante->tecnico = $request->input('tecnico');
       $reporfabricante->enfermera = $request->input('enfermera');
       $reporfabricante->medico = $request->input('medico');
       $reporfabricante->paciente = $request->input('paciente');
       $reporfabricante->familiar = $request->input('familiar');
       $reporfabricante->otro_ope = $request->input('otro_ope');
       $reporfabricante->iniciales_px= $request->input('iniciales_px');
       $reporfabricante->edad_px = $request->input('edad_px');
       $reporfabricante->peso_px = $request->input('peso_px');
       $reporfabricante->estatura_px = $request->input('estatura_px');
       $reporfabricante->genero = $request->input('genero');
       $reporfabricante->fecha_incidente = $request->input('fecha_incidente');
       $reporfabricante->evento = $request->input('evento');
       $reporfabricante->incidente = $request->input('incidente');
       $reporfabricante->incidente_adverso = $request->input('incidente_adverso');
       $reporfabricante->inci_previsto = $request->input('inci_previsto');
       $reporfabricante->inci_imprevisto = $request->input('inci_imprevisto');
       $reporfabricante->lugar_estado = $request->input('lugar_estado');
       $reporfabricante->lugar_muni = $request->input('lugar_muni');
       $reporfabricante->lugar_locali = $request->input('lugar_locali');
       $reporfabricante->casa = $request->input('casa');
       $reporfabricante->trabajo = $request->input('trabajo');
       $reporfabricante->via_publica = $request->input('via_publica');
       $reporfabricante->ambulancia = $request->input('ambulancia');
       $reporfabricante->otro_incidente = $request->input('otro_incidente');
       $reporfabricante->servicio = $request->input('servicio');
       $reporfabricante->nombre_institucion = $request->input('nombre_institucion');
       $reporfabricante->domicilio = $request->input('domicilio');
       $reporfabricante->autoridad = $request->input('autoridad');
       $reporfabricante->quien = $request->input('quien');
       $reporfabricante->num_repor = $request->input('num_repor');
       $reporfabricante->no_prendio = $request->input('no_prendio');
       $reporfabricante->toques = $request->input('toques');
       $reporfabricante->quemo = $request->input('quemo');
       $reporfabricante->rompio = $request->input('rompio');
       $reporfabricante->cayo = $request->input('cayo');
       $reporfabricante->no_alarma = $request->input('no_alarma');
       $reporfabricante->empaque_malo = $request->input('empaque_malo');
       $reporfabricante->reuso = $request->input('reuso');
       $reporfabricante->reacondicion = $request->input('reacondicion');
       $reporfabricante->error = $request->input('error');
       $reporfabricante->mal_funcionamiento = $request->input('mal_funcionamiento');
       $reporfabricante->desconexion = $request->input('desconexion');
       $reporfabricante->info_confusa = $request->input('info_confusa');
       $reporfabricante->otro_evento = $request->input('otro_evento');
       $reporfabricante->uso_diferente = $request->input('uso_diferente');
       $reporfabricante->luz_inadecua = $request->input('luz_inadecua');
       $reporfabricante->desconocimientofun = $request->input('desconocimientofun');
       $reporfabricante->interaccion_sustancias = $request->input('interaccion_sustancias');
       $reporfabricante->descripcion_incidente = $request->input('descripcion_incidente');
       $reporfabricante->muerte = $request->input('muerte');
       $reporfabricante->intervencion_med = $request->input('intervencion_med');
       $reporfabricante->intervencion_quir = $request->input('intervencion_quir');
       $reporfabricante->daño_indirecto = $request->input('daño_indirecto');
       $reporfabricante->daño_muertefetal = $request->input('daño_muertefetal');
       $reporfabricante->deficiencia_permanente = $request->input('deficiencia_permanente');
       $reporfabricante->daño_permanente = $request->input('daño_permanente');
       $reporfabricante->hospitalizacion = $request->input('hospitalizacion');
       $reporfabricante->otro_consequen = $request->input('otro_consequen');
       $reporfabricante->conse_inci_descripcion = $request->input('conse_inci_descripcion');
       $reporfabricante->marcaodenom = $request->input('marcaodenom');
       $reporfabricante->denominaciongene = $request->input('denominaciongene');
       $reporfabricante->modelo_presentacion = $request->input('modelo_presentacion');
       $reporfabricante->numero_lote = $request->input('numero_lote');
       $reporfabricante->version_software = $request->input('version_software');
       $reporfabricante->descri_dispo = $request->input('descri_dispo');
       $reporfabricante->equipo_medico = $request->input('equipo_medico');
       $reporfabricante->descri_dispo = $request->input('descri_dispo');
       $reporfabricante->protesis = $request->input('protesis');
       $reporfabricante->agente_diagnos = $request->input('agente_diagnos');
       $reporfabricante->insumo_odonto = $request->input('insumo_odonto');
       $reporfabricante->insumo_odonto = $request->input('mate_quiru');
       $reporfabricante->insumo_odonto = $request->input('produc_higienicos');
       $reporfabricante->insumo_odonto = $request->input('otro_tipo');
       $reporfabricante->insumo_odonto = $request->input('insumo_odonto');
       $reporfabricante->clasificacion = $request->input('clasificacion');
       $reporfabricante->tratamiento = $request->input('tratamiento');
       $reporfabricante->diagnostico = $request->input('diagnostico');
       $reporfabricante->monitoreo = $request->input('monitoreo');
       $reporfabricante->otro_uso = $request->input('otro_uso');
       $reporfabricante->adulto = $request->input('adulto');
       $reporfabricante->pediatrico = $request->input('pediatrico');
       $reporfabricante->neonatal = $request->input('neonatal');
       $reporfabricante->geriatrico = $request->input('geriatrico');
       $reporfabricante->desconocido = $request->input('desconocido');
       $reporfabricante->destruido = $request->input('destruido');
       $reporfabricante->fuera_servicio = $request->input('fuera_servicio');
       $reporfabricante->en_uso = $request->input('en_uso');
       $reporfabricante->otro_situa = $request->input('otro_situa');
       $reporfabricante->titu_sanitario = $request->input('titu_sanitario');
       $reporfabricante->fabricante = $request->input('fabricante');
       $reporfabricante->distribuidor = $request->input('distribuidor');
       $reporfabricante->otro_devuelto = $request->input('otro_devuelto');
       $reporfabricante->acciones_preven = $request->input('acciones_preven');
       $reporfabricante->acciones_correc = $request->input('acciones_correc');
       $reporfabricante->acciones_seguricampo = $request->input('acciones_seguricampo');
       $reporfabricante->valor_limite = $request->input('valor_limite');
       $reporfabricante->avances_investigacion = $request->input('avances_investigacion');
       $reporfabricante->resultados_preliminares = $request->input('resultados_preliminares');
       $reporfabricante->causa_raiz = $request->input('causa_raiz');
       $reporfabricante->resultados_conclusiones = $request->input('resultados_conclusiones');
       $reporfabricante->info_interes = $request->input('info_interes');
       $reporfabricante->publico = $request->input('publico');
       $reporfabricante->equipo_id = $request->input('equipo_id');
      
       $reporfabricante->save();

         return redirect('/reportesfabricante')->with('message', 'Equipo guardado exitosamente!');
          //return "bien";
    }


}
