<?php
/**
 * GobiernoIngresosPorCobroDeServicios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresTorreon;

/**
 * Clase GobiernoIngresosPorCobroDeServicios
 */
class GobiernoIngresosPorCobroDeServicios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Ingresos por Cobro de Servicios en Torreón';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-torreon';
        $this->archivo      = 'gobierno-ingresos-por-cobro-de-servicios';
        $this->descripcion  = 'Ingresos recaudados por el municipio por cobro de servicios';
        $this->claves       = 'Torreón, Finanzas Públicas';
        $this->categorias   = array('Finanzas Públicas');
        $this->region_nivel = 101;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Ingresos recaudados por el municipio por cobro de servicios</p>

      <h3>Información recopilada</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>31/12/2007</td>
            <td>$ 575,374,852.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2008</td>
            <td>$ 596,172,106.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>$ 599,061,383.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>$ 595,186,051.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>$ 578,219,346.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>$ 792,240,176.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2013</td>
            <td>$ 848,020,707.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Pesos.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Ingresos por Cobro de Servicios en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Ingresos por Cobro de Servicios</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Ingresos por Cobro de Servicios</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Región</th>
            <th>Fecha</th>
            <th>Dato</th>
            <th>Fuente</th>
            <th>Notas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Torreón</td>
            <td>2013-12-31</td>
            <td>$ 848,020,707.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2012-12-31</td>
            <td>$ 523,339,253.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2012-12-31</td>
            <td>$ 54,082,713.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2012-12-31</td>
            <td>$ 30,798,906.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2012-12-31</td>
            <td>$ 1,400,461,048.00</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Ingresos por Cobro de Servicios</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>04/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/datos-abiertos-gobiernos-municipales.html">Datos Abiertos en los Gobiernos Municipales</a></td>
            <td>Con la parte tecnológica resuelta, ha sido común que cualquiera de nosotros se pregunte... ¿Cómo se podrían mejorar los servicios gubernamentales? La respuesta es Datos Abiertos.</td>
          </tr>
          <tr>
            <td>19/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/independencia-finanzas-publicas.html">Independencia de las Finanzas Públicas</a></td>
            <td>Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-capacidad-financiera.html">Capacidad Financiera en Torreón</a></td>
            <td>Ingresos propios entre gastos corrientes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-ingresos-totales-per-capita.html">Ingresos Totales Per Cápita en Torreón</a></td>
            <td>Ingresos totales del municipio entre el total de la población.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-ingresos-totales.html">Ingresos Totales en Torreón</a></td>
            <td>Ingresos totales por municipio.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-inversion-per-capita.html">Inversión Per cápita en Torreón</a></td>
            <td>Gasto en obras públicas y acciones sociales entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-produccion-bruta-total-per-capita.html">Producción Bruta Total Per Cápita en Torreón</a></td>
            <td>Producción bruta total (de los sectores industria, comercio y servicios) entre población total.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-relacion-de-ingresos-propios-y-totales.html">Relación de Ingresos Propios y Totales en Torreón</a></td>
            <td>Porcentaje de Ingresos propios el municipio con respecto a sus ingresos totales.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2007-12-31', dato: 575374852.00 },{ fecha: '2008-12-31', dato: 596172106.00 },{ fecha: '2009-12-31', dato: 599061383.00 },{ fecha: '2010-12-31', dato: 595186051.00 },{ fecha: '2011-12-31', dato: 578219346.00 },{ fecha: '2012-12-31', dato: 792240176.00 },{ fecha: '2013-12-31', dato: 848020707.00 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 848020707.00 },{ region: 'Gómez Palacio', dato: 523339253.00 },{ region: 'Lerdo', dato: 54082713.00 },{ region: 'Matamoros', dato: 30798906.00 },{ region: 'La Laguna', dato: 1400461048.00 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
    } // constructor

} // Clase GobiernoIngresosPorCobroDeServicios

?>
