<?php
/**
 * SociedadViviendasHabitadas.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase SociedadViviendasHabitadas
 */
class SociedadViviendasHabitadas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Viviendas Habitadas en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'sociedad-viviendas-habitadas';
        $this->descripcion = '';
        $this->claves      = 'Matamoros, Vivienda';
        $this->categorias  = array('Vivienda');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li class="active"><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="smi-indicador-datos">
      <h3>Descripción</h3>


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
            <td class="centrado">31/12/2010</td>
            <td class="derecha">26,131</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
    </div>
    <div class="tab-pane active" id="smi-indicador-otras_regiones">
<h3>En otras regiones</h3>
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
            <td>2010-12-31</td>
            <td class="derecha">172,719</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2010-12-31</td>
            <td class="derecha">83,973</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2010-12-31</td>
            <td class="derecha">35,009</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2010-12-31</td>
            <td class="derecha">317,832</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#smi-indicador a:first').tab('show')
});
FINAL;
    } // constructor

} // Clase SociedadViviendasHabitadas

?>
