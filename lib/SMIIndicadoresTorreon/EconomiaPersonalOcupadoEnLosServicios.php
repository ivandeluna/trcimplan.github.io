<?php
/**
 * EconomiaPersonalOcupadoEnLosServicios.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresTorreon;

/**
 * Clase EconomiaPersonalOcupadoEnLosServicios
 */
class EconomiaPersonalOcupadoEnLosServicios extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Personal Ocupado en los Servicios en Torreón';
        $this->directorio  = 'lib/SMIIndicadoresTorreon';
        $this->archivo     = 'economia-personal-ocupado-en-los-servicios';
        $this->descripcion = 'Personal ocupado en las actividades de servicios entre personal ocupado total.';
        $this->claves      = 'Torreón, Empleo, Mercados';
        $this->categorias  = array('Empleo', 'Mercados');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Personal ocupado en las actividades de servicios entre personal ocupado total.

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
<td class="derecha">27.89 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2003</td>
<td class="derecha">27.41 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td class="centrado">31/12/2008</td>
<td class="derecha">35.64 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/)

<h4>Gráfica</h4>

<div id="Morristthrkwfq" class="grafica"></div>


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
<td>Gómez Palacio</td>
<td>1998-12-31</td>
<td class="derecha">30.87 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2003-12-31</td>
<td class="derecha">26.46 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">30.28 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>1998-12-31</td>
<td class="derecha">20.95 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2003-12-31</td>
<td class="derecha">12.84 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">24.20 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>1998-12-31</td>
<td class="derecha">16.41 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2003-12-31</td>
<td class="derecha">18.09 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2008-12-31</td>
<td class="derecha">17.95 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>1998-12-31</td>
<td class="derecha">28.10 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2003-12-31</td>
<td class="derecha">26.06 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">32.99 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>1998-12-31</td>
<td class="derecha">28.49 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2003-12-31</td>
<td class="derecha">30.61 %</td>
<td>INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">35.03 %</td>
<td>INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = <<<FINAL
  // GRAFICA MORRIS
  if (typeof varMorristthrkwfq === 'undefined') {
    varMorristthrkwfq = Morris.Line({
      element: 'Morristthrkwfq',
      data: [{ fecha: '1998-12-31', dato: 27.8900 },{ fecha: '2003-12-31', dato: 27.4100 },{ fecha: '2008-12-31', dato: 35.6387 }],
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

} // Clase EconomiaPersonalOcupadoEnLosServicios

?>
