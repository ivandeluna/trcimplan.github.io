<?php
/**
 * SeguridadPresuntosDelincuentesDelFueroComun.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadPresuntosDelincuentesDelFueroComun
 */
class SeguridadPresuntosDelincuentesDelFueroComun extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre       = 'Presuntos Delincuentes del Fuero Común en La Laguna';
        $this->nombre_menu  = 'Indicadores';
        $this->directorio   = 'indicadores-la-laguna';
        $this->archivo      = 'seguridad-presuntos-delincuentes-del-fuero-comun';
        $this->descripcion  = 'Cantidad de presuntos delincuentes registrados en los juzgados de primera instancia del fuero común por año.';
        $this->claves       = 'La Laguna, Delincuencia';
        $this->categorias   = array('Delincuencia');
        $this->region_nivel = 401;
        $this->contenido    = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
    <li><a href="#smi-indicador-relacionados" data-toggle="tab">Relacionados</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>
<p>Cantidad de presuntos delincuentes registrados en los juzgados de primera instancia del fuero común por año.</p>

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
            <td>31/12/2008</td>
            <td>1,301</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Presuntos Delincuentes del Fuero Común</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Presuntos Delincuentes del Fuero Común</h3>
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
            <td>2008-12-31</td>
            <td>765</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2008-12-31</td>
            <td>384</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2008-12-31</td>
            <td>118</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2008-12-31</td>
            <td>34</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2008-12-31</td>
            <td>1,301</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="tab-pane" id="smi-indicador-relacionados">
      <h3>Páginas relacionadas con Presuntos Delincuentes del Fuero Común</h3>
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
            <td>18/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/prevencion-delito-seguridad.html">La Prevención del Delito como elemento fundamental para la Seguridad</a></td>
            <td>La prevención del delito debe ser el elemento central en la búsqueda de la seguridad en la Zona Metropolitana de la Laguna (ZML).</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-delitos.html">Delitos en La Laguna</a></td>
            <td>Total de delitos cometidos.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-homicidios.html">Homicidios en La Laguna</a></td>
            <td>Número de homicidios durante el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-presuntos-delincuentes-del-fuero-federal.html">Presuntos Delincuentes del Fuero Federal en La Laguna</a></td>
            <td>Presuntos delincuentes registrados en los juzgados de primera instancia en materia penal del fuero federal</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-presuntos-delincuentes-por-narcoticos.html">Presuntos Delincuentes por Narcóticos en La Laguna</a></td>
            <td>Presuntos delincuentes por delitos en materia de narcóticos registrados en los juzgados del fuero federal.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-robo-de-vehiculos.html">Robo de Vehículos en La Laguna</a></td>
            <td>Robo de vehículos con violencia y sin violencia cometidos en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-secuestros.html">Secuestros en La Laguna</a></td>
            <td>Cantidad de secuestros en el primer trimestre de 2014</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-sentenciados-registrados-del-fuero-comun.html">Sentenciados Registrados del Fuero Común en La Laguna</a></td>
            <td>Cantidad de sentenciados registrados en los juzgados de primera instancia del fuero común por año.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-sentenciados-registrados-del-fuero-federal.html">Sentenciados Registrados del Fuero Federal en La Laguna</a></td>
            <td>Sentenciados registrados en los juzgados de primera instancia en materia penal del fuero federal</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-sentenciados-en-materia-de-narcoticos-registrados-en-el-fuero-federal.html">Sentenciados en Materia de Narcóticos Registrados en el Fuero Federal en La Laguna</a></td>
            <td></td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-delitos.html">Tasa de Delitos en La Laguna</a></td>
            <td>Delitos por cada 100 mil habitantes</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-homicidios.html">Tasa de Homicidios en La Laguna</a></td>
            <td>Número de homicidios por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-robo-de-vehiculos.html">Tasa de Robo de VehÍculos en La Laguna</a></td>
            <td>Cantidad de robos de vehículos por cada 100 mil habitantes.</td>
          </tr>
          <tr>
            <td>ND</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-tasa-de-secuestro.html">Tasa de Secuestro en La Laguna</a></td>
            <td>Homicidios por habitantes por 100 mil</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript   = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 765 },{ region: 'Gómez Palacio', dato: 384 },{ region: 'Lerdo', dato: 118 },{ region: 'Matamoros', dato: 34 },{ region: 'La Laguna', dato: 1301 }],
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

} // Clase SeguridadPresuntosDelincuentesDelFueroComun

?>
