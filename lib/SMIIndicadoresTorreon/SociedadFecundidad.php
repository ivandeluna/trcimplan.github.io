<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon SociedadFecundidad
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

namespace SMIIndicadoresTorreon;

/**
 * Clase SociedadFecundidad
 */
class SociedadFecundidad extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Fecundidad en Torreón';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2014-10-21T16:19:49';
        // El nombre del archivo a crear
        $this->archivo                   = 'sociedad-fecundidad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Tasa de fecundidad.';
        $this->claves                    = 'IMPLAN, Torreón, Género, Población';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Género', 'Población');
        $this->fuentes                   = array('INEGI. Censos de Población y Vivienda', 'INEGI');
        $this->regiones                  = array('Torreón');
        // Inicializar las lengüetas
        $this->lenguetas                 = new \Base\Lenguetas('smi-indicador');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        return <<<FINAL
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
            <td>2.2000</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2009</td>
            <td>2.1700</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2010</td>
            <td>2.1400</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2011</td>
            <td>2.1400</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>2.1300</td>
            <td>INEGI. Censos de Población y Vivienda</td>
            <td></td>
          </tr>
          <tr>
            <td>31/12/2015</td>
            <td>2.5000</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>El dato de 2015 corresponde a la Encuesta Intercensal 2015 de INEGI y son estimaciones.</p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Fecundidad en Torreón con fuente INEGI. Censos de Población y Vivienda</h3>
      <div id="graficaDatosInegiCensosDePoblacionYVivienda" class="grafica"></div>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>El dato de 2015 corresponde a la Encuesta Intercensal 2015 de INEGI y son estimaciones.</p>

FINAL;
    } // seccion_grafica_html

    /**
     * Sección Gráfica 1 JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_grafica_1_javascript() {
        return <<<FINAL
  // Gráfica
  if (typeof vargraficaDatosInegiCensosDePoblacionYVivienda === 'undefined') {
    vargraficaDatosInegiCensosDePoblacionYVivienda = Morris.Line({
      element: 'graficaDatosInegiCensosDePoblacionYVivienda',
      data: [{ fecha: '2008-12-31', dato: 2.2000 },{ fecha: '2009-12-31', dato: 2.1700 },{ fecha: '2010-12-31', dato: 2.1400 },{ fecha: '2011-12-31', dato: 2.1400 },{ fecha: '2012-12-31', dato: 2.1300 }],
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
      <h3>Gráfica con los últimos datos de Fecundidad</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Fecundidad</h3>
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
            <td>2015-12-31</td>
            <td>2.5000</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-12-31</td>
            <td>2.3400</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-12-31</td>
            <td>2.2300</td>
            <td>INEGI</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-12-31</td>
            <td>2.6000</td>
            <td>INEGI</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
      <h3>Observaciones</h3>
<p>El dato de 2015 corresponde a la Encuesta Intercensal 2015 de INEGI y son estimaciones.</p>

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
      data: [{ region: 'Torreón', dato: 2.5000 },{ region: 'Gómez Palacio', dato: 2.3400 },{ region: 'Lerdo', dato: 2.2300 },{ region: 'Matamoros', dato: 2.6000 }],
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
        $this->lenguetas->agregar('smi-indicador-grafica-1', 'Gráfica 1', $this->seccion_grafica_1_html());
        $this->lenguetas->agregar_javascript($this->seccion_grafica_1_javascript());
        $this->lenguetas->agregar('smi-indicador-otras-regiones', 'Otras regiones', $this->seccion_otras_regiones_html());
        $this->lenguetas->agregar_javascript($this->seccion_otras_regiones_javascript());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir contenido HTML en el esquema
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
        // JavaScript está dentro de las lengüetas
        $this->javascript = $this->lenguetas->javascript();
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

} // Clase SociedadFecundidad

?>
