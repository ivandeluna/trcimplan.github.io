<?php
/**
 * GobiernoCumplimientoEnInformacionPublicaMinina.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresMatamoros;

/**
 * Clase GobiernoCumplimientoEnInformacionPublicaMinina
 */
class GobiernoCumplimientoEnInformacionPublicaMinina extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cumplimiento en información pública mínina en Matamoros';
        $this->nombre_menu = 'Indicadores Matamoros';
        $this->directorio  = 'indicadores-matamoros';
        $this->archivo     = 'gobierno-cumplimiento-en-informacion-publica-minina';
        $this->descripcion = 'Cumplimiento sobre total de obligaciones';
        $this->claves      = 'Matamoros, Transparencia';
        $this->categorias  = array('Transparencia');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetasvuxyhpgm">
    <li><a href="#datos" data-toggle="tab">Datos</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="datos">
      <h4>Descripción</h4>
Cumplimiento sobre total de obligaciones
<h4>Información recopilada</h4>
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
<td class="centrado">03/03/2014</td>
<td class="derecha">63.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td class="centrado">30/06/2014</td>
<td class="derecha">64.10 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b>
Porcentaje
    </div>
    <div class="tab-pane" id="grafica">
      <h4>Gráfica</h4>
<div id="Morriszvabpixt" class="grafica"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <h4>En otras regiones</h4>
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
<td>2014-03-03</td>
<td class="derecha">100.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2014-06-30</td>
<td class="derecha">98.72 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">79.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-04-30</td>
<td class="derecha">89.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-08-31</td>
<td class="derecha">86.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">79.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-04-30</td>
<td class="derecha">61.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-08-31</td>
<td class="derecha">100.00 %</td>
<td>ICAI-IDAIP</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-12-31</td>
<td class="derecha">80.00 %</td>
<td>ICAI-IDAIP</td>
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
  $('#Lenguetasvuxyhpgm a:first').tab('show')
});
// LENGUETA
$('#Lenguetasvuxyhpgm a[href="#grafica"]').on('shown.bs.tab', function (e) {
  // Gráfica
  if (typeof varMorriszvabpixt === 'undefined') {
    varMorriszvabpixt = Morris.Line({
      element: 'Morriszvabpixt',
      data: [{ fecha: '2014-03-03', dato: 63.0000 },{ fecha: '2014-06-30', dato: 64.1000 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
});
FINAL;
    } // constructor

} // Clase GobiernoCumplimientoEnInformacionPublicaMinina

?>
