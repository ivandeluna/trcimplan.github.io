<?php
/**
 * TrcIMPLAN - SMI Categorías Empleo (Creado por Central:SmiLanzadera)
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
namespace SMICategorias;

/**
 * Clase Empleo
 */
class Empleo extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Empleo';
     // $this->autor            = '';
        $this->fecha            = '2015-01-01T08:00'; // Fecha fija
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo          = 'empleo';
        $this->imagen           = '../imagenes/categorias/empleo.jpg';
        $this->imagen_previa    = '../imagenes/categorias/empleo.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion      = 'Sistema Metropolitano de Indicadores - Categoría ';
        $this->claves           = 'IMPLAN, Indicadores, Categoría, Empleo';
        $this->categorias       = array();
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio       = 'indicadores-categorias';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu      = 'Indicadores > Indicadores por Categoría';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaArticle();
        $schema->name           = $this->nombre;
        $schema->description    = $this->descripcion;
        $schema->datePublished  = $this->fecha;
        $schema->image          = $this->imagen;
        $schema->image_show     = false;
        $schema->author         = $this->autor;
        $schema->articleBody    = <<<FINAL
<table class="table table-hover table-bordered matriz">
<thead>
  <tr>
    <th>Subíndice</th>
    <th>Indicador</th>
    <th>Torreón</th>
    <th>Gómez Palacio</th>
    <th>Lerdo</th>
    <th>Matamoros</th>
    <th>La Laguna</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento de la Población Ocupada sin Ingresos</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento del Salario Promedio</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en jornadas laborales muy largas</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Crecimiento en los Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-5.66 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-9.77 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-14.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-4.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-crecimiento-en-los-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">-7.46 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Demandantes de Conflicto Laboral</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Desempleo</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">19,536</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">9,705</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">3,795</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">2,380</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-desempleo.html" data-toggle="tooltip" title="Personas, 25/06/2010, INEGI">35,416</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Empleados en el Sector Formal</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.8560 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">56.3498 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">34.1412 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">46.0290 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-empleados-en-el-sector-formal.html" data-toggle="tooltip" title="Porcentaje, 31/12/2012, IMCO">48.7339 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Jornadas laborales muy largas (más de 48 horas semanales)</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en el Comercio</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">27.6529 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">27.6120 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">31.0701 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">34.3232 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-el-comercio.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">28.0342 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en la Industria Manufacturera</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">25.6975 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">32.0975 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">37.6371 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">41.5338 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-la-industria-manufacturera.html" data-toggle="tooltip" title="Personas, 31/12/2008, INEGI">28.5940 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Personal Ocupado en los Servicios</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">35.6387 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">30.2786 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">24.2010 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">17.9535 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-personal-ocupado-en-los-servicios.html" data-toggle="tooltip" title="Porcentaje, 31/12/2008, INEGI">32.9908 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Población Ocupada sin Ingresos</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad Laboral</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 530,143.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 462,597.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 51,284.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 45,744.00</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-productividad-laboral.html" data-toggle="tooltip" title="Pesos, 31/12/2010, IMCO">$ 421,204.00</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Productividad media laboral</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Salario Promedio Mensual para Trabajadores de Tiempo Completo</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de Desempleo Abierto</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">6.27 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.84 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">4.76 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">3.13 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-desempleo-abierto.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">5.85 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Tasa de informalidad</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">44.25 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">40.91 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">58.33 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">56.45 %</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-tasa-de-informalidad.html" data-toggle="tooltip" title="Porcentaje, 31/03/2015, Encuesta Nacional de Ocupación y Empleo (ENOE) Microdatos">44.89 %</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 31/05/2015, Instituto Mexicano del Seguro Social (IMSS)">173,179</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-gomez-palacio/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 31/05/2015, Instituto Mexicano del Seguro Social (IMSS)">75,489</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-lerdo/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 31/05/2015, Instituto Mexicano del Seguro Social (IMSS)">13,905</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-matamoros/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 31/05/2015, Instituto Mexicano del Seguro Social (IMSS)">7,779</a></td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-la-laguna/economia-trabajadores-asegurados.html" data-toggle="tooltip" title="Personas, 31/05/2015, Instituto Mexicano del Seguro Social (IMSS)">270,352</a></td>
  </tr>
  <tr>
    <td class="subindice color1">Economía</td>
    <td class="indicador color1">Trabajadores Asegurados (Región)</td>
    <td class="derecha color1"><a class="vinculo" href="../indicadores-torreon/economia-trabajadores-asegurados-region.html" data-toggle="tooltip" title="Personas, 31/12/2013, IMSS Subdelegación Torreón">187,050</a></td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
    <td class="nd">ND</td>
  </tr>
</tbody>
</table>
<p class="instrucciones">Instrucciones: Mantenga el ratón sobre un dato por unos segundos para mostrar la unidad, fecha y fuente. De clic para ir a la página con más información.</p>
FINAL;
        // El contenido es una instancia de SchemaArticle
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, se pone el contenido sin lengüetas
        $this->redifusion       = <<<FINAL

FINAL;
    } // constructor

} // Clase Empleo

?>
