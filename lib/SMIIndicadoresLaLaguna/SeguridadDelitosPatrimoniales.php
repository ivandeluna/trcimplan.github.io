<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresLaLaguna SeguridadDelitosPatrimoniales
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

namespace SMIIndicadoresLaLaguna;

/**
 * Clase SeguridadDelitosPatrimoniales
 */
class SeguridadDelitosPatrimoniales extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título y fecha
        $this->nombre      = 'Delitos Patrimoniales en La Laguna';
        $this->fecha       = '2015-06-04T11:25:18';
        // El nombre del archivo a crear
        $this->archivo     = 'seguridad-delitos-patrimoniales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Son delitos que contemplan Abuso de confianza, Daño en propiedad ajena, Extorsión, Fraude, Despojo con violencia y Despojo sin violencia.';
        $this->claves      = 'IMPLAN, La Laguna, Seguridad, Delincuencia';
        // Para el Organizador
        $this->categorias  = array('Seguridad', 'Delincuencia');
        $this->fuentes     = array('Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'Ayuntamiento de Torreón');
        $this->regiones    = array('La Laguna');
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
            array('fecha' => '2015-01-31', 'valor' => '152', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-02-28', 'valor' => '144', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-03-31', 'valor' => '153', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-04-30', 'valor' => '210', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-05-31', 'valor' => '186', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-06-30', 'valor' => '165', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-07-31', 'valor' => '179', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-08-31', 'valor' => '229', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-09-30', 'valor' => '263', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-10-31', 'valor' => '305', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-11-30', 'valor' => '218', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2015-12-31', 'valor' => '235', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-01-31', 'valor' => '212', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-02-29', 'valor' => '418', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-03-31', 'valor' => '279', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-04-30', 'valor' => '348', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-05-31', 'valor' => '361', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-06-30', 'valor' => '364', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-07-31', 'valor' => '252', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-08-31', 'valor' => '286', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-09-30', 'valor' => '340', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-10-31', 'valor' => '302', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-11-30', 'valor' => '283', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2016-12-31', 'valor' => '273', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-01-31', 'valor' => '271', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-02-28', 'valor' => '292', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-03-31', 'valor' => '345', 'fuente_nombre' => 'Ayuntamiento de Torreón', 'notas' => ''),
            array('fecha' => '2017-04-30', 'valor' => '276', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => ''),
            array('fecha' => '2017-05-31', 'valor' => '335', 'fuente_nombre' => 'Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública', 'notas' => '')));
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
     * Sección Gráfica 1 HTML
     *
     * @return string Código HTML
     */
    protected function seccion_grafica_1_html() {
        return <<<FINAL
      <h3>Gráfica de Delitos Patrimoniales en La Laguna con fuente Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</h3>
      <div id="graficaDatosSecretariadoEjecutivoDelSistemaNacionalDeSeguridadPublica" class="grafica"></div>
      <p><b>Unidad:</b> Cantidad.</p>
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
  if (typeof vargraficaDatosSecretariadoEjecutivoDelSistemaNacionalDeSeguridadPublica === 'undefined') {
    vargraficaDatosSecretariadoEjecutivoDelSistemaNacionalDeSeguridadPublica = Morris.Line({
      element: 'graficaDatosSecretariadoEjecutivoDelSistemaNacionalDeSeguridadPublica',
      data: [{ fecha: '2015-01-31', dato: 152 },{ fecha: '2015-02-28', dato: 144 },{ fecha: '2015-03-31', dato: 153 },{ fecha: '2015-04-30', dato: 210 },{ fecha: '2015-05-31', dato: 186 },{ fecha: '2015-06-30', dato: 165 },{ fecha: '2015-07-31', dato: 179 },{ fecha: '2015-08-31', dato: 229 },{ fecha: '2015-09-30', dato: 263 },{ fecha: '2015-10-31', dato: 305 },{ fecha: '2015-11-30', dato: 218 },{ fecha: '2015-12-31', dato: 235 },{ fecha: '2016-01-31', dato: 212 },{ fecha: '2016-02-29', dato: 418 },{ fecha: '2016-03-31', dato: 279 },{ fecha: '2016-04-30', dato: 348 },{ fecha: '2016-05-31', dato: 361 },{ fecha: '2016-06-30', dato: 364 },{ fecha: '2016-07-31', dato: 252 },{ fecha: '2016-08-31', dato: 286 },{ fecha: '2016-09-30', dato: 340 },{ fecha: '2016-10-31', dato: 302 },{ fecha: '2016-11-30', dato: 283 },{ fecha: '2016-12-31', dato: 273 },{ fecha: '2017-01-31', dato: 271 },{ fecha: '2017-02-28', dato: 292 },{ fecha: '2017-04-30', dato: 276 },{ fecha: '2017-05-31', dato: 335 }],
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
      <h3>Gráfica con los últimos datos de Delitos Patrimoniales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Delitos Patrimoniales</h3>
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
            <td>31/05/2017</td>
            <td>152</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>31/05/2017</td>
            <td>135</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>31/05/2017</td>
            <td>35</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>31/05/2017</td>
            <td>13</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>31/05/2017</td>
            <td>335</td>
            <td>Secretariado Ejecutivo del Sistema Nacional de Seguridad Pública</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Cantidad.</p>
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
      data: [{ region: 'Torreón', dato: 152 },{ region: 'Gómez Palacio', dato: 135 },{ region: 'Lerdo', dato: 35 },{ region: 'Matamoros', dato: 13 },{ region: 'La Laguna', dato: 335 }],
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

} // Clase SeguridadDelitosPatrimoniales

?>
