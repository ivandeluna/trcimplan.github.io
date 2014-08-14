<?php
/**
 * EconomiaSectoresQueHanFrenadoElCrecimiento-2008-2012-.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresMatamoros;

/**
 * Clase EconomiaSectoresQueHanFrenadoElCrecimiento-2008-2012-
 */
class EconomiaSectoresQueHanFrenadoElCrecimiento-2008-2012- extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Sectores que Han Frenado el Crecimiento (2008-2012) en Matamoros';
        $this->directorio  = 'lib/SMIIndicadoresMatamoros';
        $this->archivo     = 'economia-sectores-que-han-frenado-el-crecimiento--2008-2012-';
        $this->descripcion = 'Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.';
        $this->claves      = 'Matamoros, Mercados';
        $this->categorias  = array('Mercados');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Porcentaje de la producción en sectores con tasa promedio de crecimiento negativo a nivel nacional en los últimos cinco años.

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
<td class="centrado">31/12/2008</td>
<td class="derecha">56.40 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.

<h4>Observaciones</h4>
A nivel nacional, el porcentaje de producción en sectores con tasa promedio de crecimiento negativo es de 25.66%.


Datos obtenidos de [INEGI. Censos económicos](http://www3.inegi.org.mx/sistemas/saic/) y [Centro de Estudios de las Finanzas Públicas](http://www.cefp.gob.mx/Pub_Macro_Estadisticas.htm)


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
<td>2008-12-31</td>
<td class="derecha">7.36 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2008-12-31</td>
<td class="derecha">9.84 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2008-12-31</td>
<td class="derecha">40.97 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>La Laguna</td>
<td>2008-12-31</td>
<td class="derecha">16.81 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
<tr>
<td>Nacional</td>
<td>2008-12-31</td>
<td class="derecha">25.66 %</td>
<td>Elaboración propia con datos obtenidos del INEGI</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase EconomiaSectoresQueHanFrenadoElCrecimiento-2008-2012-

?>
