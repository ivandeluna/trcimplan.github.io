<?php
/**
 * EconomiaUnidadesEconomicasDedicadasAlComercio.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLerdo;

/**
 * Clase EconomiaUnidadesEconomicasDedicadasAlComercio
 */
class EconomiaUnidadesEconomicasDedicadasAlComercio extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Unidades Económicas Dedicadas al Comercio en Lerdo';
        $this->directorio  = 'lib/SMIIndicadoresLerdo';
        $this->archivo     = 'economia-unidades-economicas-dedicadas-al-comercio';
        $this->descripcion = 'Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.';
        $this->claves      = 'Lerdo, Empresas, Mercados';
        $this->categorias  = array('Empresas', 'Mercados');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Unidades económicas dedicadas al comercio entre el total de unidades económicas en el municipio/región.

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
<td class="centrado">31/12/1998</td>
<td class="derecha">52.65 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">55.32 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">53.32 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/10/2013</td>
<td class="derecha">48.67 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)

<h4>Gráfica</h4>

<div id="Morrisnkcqqimq" class="grafica"></div>


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
<td>1998-12-31</td>
<td class="derecha">45.79 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2003-12-31</td>
<td class="derecha">47.43 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2008-12-31</td>
<td class="derecha">45.61 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Torreón</td>
<td>2013-10-31</td>
<td class="derecha">42.73 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>1998-12-31</td>
<td class="derecha">51.83 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2003-12-31</td>
<td class="derecha">50.75 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">48.21 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-10-31</td>
<td class="derecha">44.63 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1998-12-31</td>
<td class="derecha">64.35 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">64.43 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">57.42 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-10-31</td>
<td class="derecha">51.27 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1998-12-31</td>
<td class="derecha">48.83 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">49.84 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">47.61 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2013-10-31</td>
<td class="derecha">44.28 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>1998-12-31</td>
<td class="derecha">51.43 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2003-12-31</td>
<td class="derecha">52.60 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">49.91 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2013-10-31</td>
<td class="derecha">46.67 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorrisnkcqqimq === 'undefined') {
    varMorrisnkcqqimq = Morris.Line({
      element: 'Morrisnkcqqimq',
      data: [{ fecha: '1998-12-31', dato: 52.6500 },{ fecha: '2003-12-31', dato: 55.3200 },{ fecha: '2008-12-31', dato: 53.3200 },{ fecha: '2013-10-31', dato: 48.6700 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // constructor

} // Clase EconomiaUnidadesEconomicasDedicadasAlComercio

?>
