<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLerdo SeguridadAccidentesViales
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresLerdo;

/**
 * Clase SeguridadAccidentesViales
 */
class SeguridadAccidentesViales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Accidentes Viales en Lerdo';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-accidentes-viales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Cantidad de accidentes viales por año.';
        $this->claves      = 'IMPLAN, Lerdo, Vialidad, Movilidad, Seguridad';
        // Para el Organizador
        $this->categorias  = array('Vialidad', 'Movilidad', 'Seguridad');
        $this->fuentes     = array('INEGI');
        $this->regiones    = array('Lerdo');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '1997-12-31', 'valor' => '423', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '1998-12-31', 'valor' => '486', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '1999-12-31', 'valor' => '497', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2000-12-31', 'valor' => '581', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2001-12-31', 'valor' => '643', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2002-12-31', 'valor' => '645', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2003-12-31', 'valor' => '670', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2004-12-31', 'valor' => '666', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2005-12-31', 'valor' => '1343', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2006-12-31', 'valor' => '1104', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2007-12-31', 'valor' => '884', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2008-12-31', 'valor' => '602', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2009-12-31', 'valor' => '566', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2010-12-31', 'valor' => '519', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2011-12-31', 'valor' => '433', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2012-12-31', 'valor' => '362', 'fuente_nombre' => 'INEGI', 'notas' => 'Número de accidentes registrados durante el año 2012.'),
            array('fecha' => '2013-12-31', 'valor' => '242', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2014-12-31', 'valor' => '362', 'fuente_nombre' => 'INEGI', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '343', 'fuente_nombre' => 'INEGI', 'notas' => '')));
        // Entregar
        return $this->datos_tabla->html();
    } // seccion_datos_html

    /**
     * Sección Datos JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_datos_javascript() {
        return $this->datos_tabla->javascript();
    } // seccion_datos_javascript

    /**
     * Sección Gráfica HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_html() {
        return <<<FINAL
      <h3>Gráfica de Accidentes Viales en Lerdo</h3>
      <div id="graficaDatos" class="grafica"></div>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/accidentes.asp?s=est&amp;c=13159&amp;proy=atus_accidentes">Base de Datos</a></p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '1997-12-31', dato: 423 },{ fecha: '1998-12-31', dato: 486 },{ fecha: '1999-12-31', dato: 497 },{ fecha: '2000-12-31', dato: 581 },{ fecha: '2001-12-31', dato: 643 },{ fecha: '2002-12-31', dato: 645 },{ fecha: '2003-12-31', dato: 670 },{ fecha: '2004-12-31', dato: 666 },{ fecha: '2005-12-31', dato: 1343 },{ fecha: '2006-12-31', dato: 1104 },{ fecha: '2007-12-31', dato: 884 },{ fecha: '2008-12-31', dato: 602 },{ fecha: '2009-12-31', dato: 566 },{ fecha: '2010-12-31', dato: 519 },{ fecha: '2011-12-31', dato: 433 },{ fecha: '2012-12-31', dato: 362 },{ fecha: '2013-12-31', dato: 242 },{ fecha: '2014-12-31', dato: 362 },{ fecha: '2015-12-31', dato: 343 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
    });
  }
FINAL;
    } // seccion_grafica_javascript

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Accidentes Viales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Accidentes Viales</h3>
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
            <td>31/12/2015</td>
            <td>4876</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/12/2015</td>
            <td>1585</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/12/2015</td>
            <td>343</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/12/2015</td>
            <td>209</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/12/2015</td>
            <td>7013</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>31/12/2015</td>
            <td>14641</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>31/12/2015</td>
            <td>5379</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>Consulta la <a href="http://www.inegi.org.mx/sistemas/olap/Proyectos/bd/continuas/transporte/accidentes.asp?s=est&amp;c=13159&amp;proy=atus_accidentes">Base de Datos</a></p>

FINAL;
    } // seccion_otras_regiones_html

    /**
     * Sección Otras Regiones JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_otras_regiones_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 4876 },{ region: 'Gómez Palacio', dato: 1585 },{ region: 'Lerdo', dato: 343 },{ region: 'Matamoros', dato: 209 },{ region: 'La Laguna', dato: 7013 },{ region: 'Coahuila', dato: 14641 },{ region: 'Durango', dato: 5379 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
FINAL;
    } // seccion_otras_regiones_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->agregar('smi-indicador-grafica', 'Gráfica', $this->seccion_grafica_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_javascript());
        $this->lenguetas->agregar('smi-indicador-otras-regiones', 'Otras regiones', $this->seccion_otras_regiones_html());
        $this->lenguetas->agregar_javascript($this->seccion_otras_regiones_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir el contenido de esta publicación que es un SchemaArticle
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript de las lengüetas, es el de las gráficas
        $this->javascript[] = $this->lenguetas->javascript();
        // JavaScript para la carga completa del documento, es el de la tabla con los datos
        $this->javascript[] = $this->datos_tabla->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SeguridadAccidentesViales

?>
