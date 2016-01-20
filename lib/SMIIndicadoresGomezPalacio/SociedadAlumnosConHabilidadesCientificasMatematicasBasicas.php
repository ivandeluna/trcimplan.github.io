<?php
/**
 * TrcIMPLAN - SMI Indicadores Gómez Palacio Sociedad Alumnos con Habilidades Científicas-Matemáticas Básicas (Creado por Central:SmiLanzadera)
 *
 * Copyright (C) 2015 Guillermo Valdés Lozano
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
 */

// Namespace
namespace SMIIndicadoresGomezPalacio;

/**
 * Clase SociedadAlumnosConHabilidadesCientificasMatematicasBasicas
 */
class SociedadAlumnosConHabilidadesCientificasMatematicasBasicas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Alumnos con Habilidades Científicas-Matemáticas Básicas en Gómez Palacio';
        $this->autor             = 'Dirección de Investigación Estratégica';
        $this->fecha             = '2016-01-20T13:16';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo           = 'sociedad-alumnos-con-habilidades-cientificas-matematicas-basicas';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion       = 'Porcentaje de Alumnos de 6to de primaria ubicados en Nivel II según resultados de la prueba PLANEA de la SEP.';
        $this->claves            = 'IMPLAN, Gómez Palacio, Educación';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-gomez-palacio';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Durango';
        $region->addressLocality = 'Gómez Palacio';
        // Instancia de SchemaPlace agrupa la región y el mapa
        $lugar                   = new \Base\SchemaPlace();
        $lugar->address          = $region;
        // El contenido es estructurado en un esquema
        $schema                  = new \Base\SchemaArticle();
        $schema->name            = $this->nombre;
        $schema->description     = $this->descripcion;
        $schema->datePublished   = $this->fecha;
        $schema->image           = $this->imagen;
        $schema->image_show      = false;
        $schema->author          = $this->autor;
        $schema->contentLocation = $lugar;
        // El contenido es una instancia de SchemaArticle
        $this->contenido         = $schema;
        // Para el Organizador
        $this->categorias        = array('Educación');
        $this->fuentes           = array('SEP');
        $this->regiones          = 'Gómez Palacio';
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Cargar en el Schema el HTML de las lengüetas
        $this->contenido->articleBody = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="smi-indicador">
    <li><a href="#smi-indicador-datos" data-toggle="tab">Datos</a></li>
    <li><a href="#smi-indicador-otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content lengueta-contenido">
    <div class="tab-pane" id="smi-indicador-datos">
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
            <td>16.70 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Nivel II: Resuelven problemas aritméticos con números naturales. Lea el análisis <a href="http://www.trcimplan.gob.mx/blog/competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1.html">Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca</a>. Consulta la <a href="http://planea.sep.gob.mx/ba/base_de_datos_2015/">Base de Datos</a>.</p>

    </div>
    <div class="tab-pane" id="smi-indicador-otras_regiones">
      <h3>Gráfica con los últimos datos de Alumnos con Habilidades Científicas-Matemáticas Básicas</h3>
      <div id="graficaOtrasRegiones" class="grafica"></div>
      <h3>Últimos datos de Alumnos con Habilidades Científicas-Matemáticas Básicas</h3>
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
            <td>17.40 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Gómez Palacio</td>
            <td>2015-12-01</td>
            <td>16.70 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Lerdo</td>
            <td>2015-12-01</td>
            <td>16.40 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Matamoros</td>
            <td>2015-12-01</td>
            <td>17.10 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>La Laguna</td>
            <td>2015-12-01</td>
            <td>17.00 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Coahuila</td>
            <td>2015-12-01</td>
            <td>18.10 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Durango</td>
            <td>2015-12-01</td>
            <td>18.50 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
          <tr>
            <td>Nacional</td>
            <td>2015-12-01</td>
            <td>18.90 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
FINAL;
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string No hay código Javascript, entrega un texto vacío
     */
    public function javascript() {
        // JavaScript
        $this->javascript[] = <<<FINAL
// LENGUETA smi-indicador-otras_regiones
$('#smi-indicador a[href="#smi-indicador-otras_regiones"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaOtrasRegiones === 'undefined') {
    vargraficaOtrasRegiones = Morris.Bar({
      element: 'graficaOtrasRegiones',
      data: [{ region: 'Torreón', dato: 17.4000 },{ region: 'Gómez Palacio', dato: 16.7000 },{ region: 'Lerdo', dato: 16.4000 },{ region: 'Matamoros', dato: 17.1000 },{ region: 'La Laguna', dato: 17.0000 },{ region: 'Coahuila', dato: 18.1000 },{ region: 'Durango', dato: 18.5000 },{ region: 'Nacional', dato: 18.9000 }],
      xkey: 'region',
      ykeys: ['dato'],
      labels: ['Dato'],
      barColors: ['#FF5B02']
    });
  }
});
// TWITTER BOOTSTRAP TABS, ESTABLECER QUE LA LENGÜETA ACTIVA ES smi-indicador-datos
$(document).ready(function(){
  $('#smi-indicador a[href="#smi-indicador-datos"]').tab('show')
});
FINAL;
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion = <<<FINAL
      <h3>Descripción</h3>
<p>Porcentaje de Alumnos de 6to de primaria ubicados en Nivel II según resultados de la prueba PLANEA de la SEP.</p>

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
            <td>16.70 %</td>
            <td>SEP</td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Porcentaje.</p>
      <h3>Observaciones</h3>
<p>Nivel II: Resuelven problemas aritméticos con números naturales. Lea el análisis <a href="http://www.trcimplan.gob.mx/blog/competencias-en-lenguaje-y-matematicas-en-los-estudiantes-de-la-comarca-parte-1.html">Competencias en Lenguaje y Matemáticas en los Estudiantes de la Comarca</a>. Consulta la <a href="http://planea.sep.gob.mx/ba/base_de_datos_2015/">Base de Datos</a>.</p>

FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase SociedadAlumnosConHabilidadesCientificasMatematicasBasicas

?>
