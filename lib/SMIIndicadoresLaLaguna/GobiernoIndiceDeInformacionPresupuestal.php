<?php
/**
 * GobiernoIndiceDeInformacionPresupuestal.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace lib/SMIIndicadoresLaLaguna;

/**
 * Clase GobiernoIndiceDeInformacionPresupuestal
 */
class GobiernoIndiceDeInformacionPresupuestal extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'índice de Información Presupuestal en La Laguna';
        $this->directorio  = 'lib/SMIIndicadoresLaLaguna';
        $this->archivo     = 'gobierno-indice-de-informacion-presupuestal';
        $this->descripcion = 'Cumplimiento sobre total de criterios';
        $this->claves      = 'La Laguna, Transparencia';
        $this->categorias  = array('Transparencia');
        $this->contenido   = <<<FINAL
<h4>Descripción</h4>
Cumplimiento sobre total de criterios

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
<td class="centrado">31/12/2013</td>
<td class="derecha">26.00 %</td>
<td>IMCO</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Porcentaje.




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
<td>2013-12-31</td>
<td class="derecha">22.00 %</td>
<td>IMCO</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2013-12-31</td>
<td class="derecha">35.00 %</td>
<td>IMCO</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2013-12-31</td>
<td class="derecha">28.00 %</td>
<td>IMCO</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2013-12-31</td>
<td class="derecha">20.00 %</td>
<td>IMCO</td>
<td></td>
</tr>
</tbody>
</table>


FINAL;
        $this->javascript  = '';
    } // constructor

} // Clase GobiernoIndiceDeInformacionPresupuestal

?>
