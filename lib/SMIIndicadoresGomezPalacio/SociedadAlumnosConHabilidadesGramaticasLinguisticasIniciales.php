<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresGomezPalacio SociedadAlumnosConHabilidadesGramaticasLinguisticasIniciales
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

namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadAlumnosConHabilidadesGramaticasLinguisticasIniciales
 */
class SociedadAlumnosConHabilidadesGramaticasLinguisticasIniciales extends \SMIBase\PublicacionWeb {

    protected $lenguetas;

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre                    = 'Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales en Gómez Palacio';
        $this->autor                     = 'Dirección de Investigación Estratégica';
        $this->fecha                     = '2016-01-20T13:38:01';
        // El nombre del archivo a crear
        $this->archivo                   = 'sociedad-alumnos-con-habilidades-gramaticas-linguisticas-iniciales';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion               = 'Porcentaje de Alumnos de 6to de primaria ubicados en Nivel I según resultados de la prueba PLANEA de la SEP.';
        $this->claves                    = 'IMPLAN, Gómez Palacio, Educación';
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Para el Organizador
        $this->categorias                = array('Educación');
        $this->fuentes                   = array('SEP');
        $this->regiones                  = array('Gómez Palacio');
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
            <td>01/12/2015</td>
            <td>52.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Nivel I: Seleccionan información sencilla que se encuentra explícitamente en textos descriptivos. Lea el análisis <a href="http://www.trcimplan.gob.mx/blog/competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1.html">Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca</a>. Consulta la <a href="http://planea.sep.gob.mx/ba/base_de_datos_2015/">Base de Datos</a>.</p>

FINAL;
    } // seccion_datos_html

    /**
     * Sección Otras Regiones HTML
     *
     * @return string Código HTML
     */
    protected function seccion_otras_regiones_html() {
        return <<<FINAL
      <h3>Gráfica con los últimos datos de Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Alumnos con Habilidades Gramáticas-Lingüísticas Iniciales</h3>
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
            <td>2015-12-01</td>
            <td>42.10 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-12-01</td>
            <td>52.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-12-01</td>
            <td>56.40 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-12-01</td>
            <td>60.60 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-12-01</td>
            <td>48.40 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2015-12-01</td>
            <td>45.40 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2015-12-01</td>
            <td>54.80 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2015-12-01</td>
            <td>49.50 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Nivel I: Seleccionan información sencilla que se encuentra explícitamente en textos descriptivos. Lea el análisis <a href="http://www.trcimplan.gob.mx/blog/competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1.html">Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca</a>. Consulta la <a href="http://planea.sep.gob.mx/ba/base_de_datos_2015/">Base de Datos</a>.</p>

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
      data: [{ region: 'Torreón', dato: 42.1000 },{ region: 'Gómez Palacio', dato: 52.0000 },{ region: 'Lerdo', dato: 56.4000 },{ region: 'Matamoros', dato: 60.6000 },{ region: 'La Laguna', dato: 48.4000 },{ region: 'Coahuila', dato: 45.4000 },{ region: 'Durango', dato: 54.8000 },{ region: 'Nacional', dato: 49.5000 }],
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

} // Clase SociedadAlumnosConHabilidadesGramaticasLinguisticasIniciales

?>
