<?php
/**
 * TrcIMPLAN - SMI Indicadores Torreón Economía Registro de una Propiedad (Creado por Central:SmiLanzadera)
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
namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaRegistroDeUnaPropiedad
 */
class EconomiaRegistroDeUnaPropiedad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre            = 'Registro de una Propiedad en Torreón';
     // $this->autor             = '';
        $this->fecha             = '2014-10-21T16:19';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios
        $this->archivo           = 'economia-registro-de-una-propiedad';
        $this->imagen            = '../smi/introduccion/imagen.jpg';
        $this->imagen_previa     = '../smi/introduccion/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno
        $this->descripcion       = 'Días que toma el trámite para el registro de una propiedad.';
        $this->claves            = 'IMPLAN, Torreón, Doing Business, Gobierno';
        $this->categorias        = array('Doing Business', 'Gobierno');
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio        = 'indicadores-torreon';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu       = 'Indicadores';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado            = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir    = true;
        // Instancia de SchemaPostalAddress que tiene la localidad, municipio y país
        $region                  = new \Base\SchemaPostalAddress();
        $region->addressCountry  = 'MX';
        $region->addressRegion   = 'Coahuila de Zaragoza';
        $region->addressLocality = 'Torreón';
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
    <li><a href="#smi-indicador-grafica" data-toggle="tab">Gráfica</a></li>
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
            <td>31/12/2007</td>
            <td>51</td>
            <td>Doing Business</td>
            <td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- # de procedimientos/trámites: 8
- Costo (% del valor de la propiedad): 4.27 
- Ranking en registro de propiedades: 29</td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>33</td>
            <td>Doing Business</td>
            <td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 6 
- Costo (% del valor de la propiedad): 4.3 
- Ranking en registro de propiedades: 22</td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>28</td>
            <td>Doing Business</td>
            <td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en registro de propiedades fueron los siguientes para Torreón: 
Procedimientos (número) = 6 ; 
Costo (% del valor de la propiedad) = 4,5</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Días.</p>
    </div>
    <div class="tab-pane" id="smi-indicador-grafica">
      <h3>Gráfica de Registro de una Propiedad en Torreón</h3>
      <div id="graficaDatos" class="grafica"></div>
    </div>
  </div>
FINAL;
        // Cargar en el Schema el HTML con los artículos relacionados
        $this->contenido->extra = <<<FINAL
      <h3>Publicaciones relacionadas</h3>
      <table class="table table-hover table-bordered matriz">
        <thead>
          <tr>
            <th>Creado</th>
            <th>Tipo</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-registro-de-una-propiedad.html">Registro de Una Propiedad en La Laguna</a></td>
            <td>Incluido en el Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para registrar una propiedad: número de trámites, tiempo (días) y costo (% valor de la propiedad). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-registro-de-una-propiedad.html">Registro de Una Propiedad en Matamoros</a></td>
            <td>Incluido en el Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para registrar una propiedad: número de trámites, tiempo (días) y costo (% valor de la propiedad). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Gómez Palacio</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-apertura-de-un-negocio.html">Apertura de un Negocio en La Laguna</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Lerdo</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Matamoros</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-apertura-de-un-negocio.html">Apertura de un Negocio en Torreón</a></td>
            <td>Incluido en el subíndice de "Gobiernos Eficaces y Eficientes" Mide el promedio de los percentiles en que se ubica la ciudad en cada uno de los factores que determinan la facilidad para abrir un negocio: número de trámites, tiempo (días) y costo (% ingresos per cápita). Este indicador se calcula a nivel estatal.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Gómez Palacio</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en La Laguna</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Lerdo</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Matamoros</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>14/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/seguridad-competencia-de-servicios-notariales.html">Competencia de servicios notariales en Torreón</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo". Mide el número de notarios en cada ciudad. Unidades: Notarios por cada 100 mil personas económicamente activas (PEA). Fuente: Secretaría de Gobernación (Directorio de Notarios), 2013.</td>
          </tr>
          <tr>
            <td>08/07/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/la-gran-oportunidad-del-gobierno-abierto.html">La Gran Oportunidad del Gobierno Abierto</a></td>
            <td>Nos encontramos frente a la posibilidad del mayor grado de cooperación que haya existido entre la sociedad y el gobierno.</td>
          </tr>
          <tr>
            <td>06/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-vehiculos-automotores-por-habitante.html">Vehículos automotores por habitante en Torreón</a></td>
            <td>Determina el número de vehículos automotores por habitante.</td>
          </tr>
          <tr>
            <td>06/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-litros-de-combustible-gastados-por-habitante.html">Litros de combustible gastados por habitante en Torreón</a></td>
            <td>Determina la relación de litros de combustible gastados por el gobierno municipal respecto de su población total.</td>
          </tr>
          <tr>
            <td>06/07/2015</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-empleados-municipales.html">Empleados municipales en Torreón</a></td>
            <td>Indicador de eficiencia que determina el número de empleados municipales por cada mil habitantes.</td>
          </tr>
          <tr>
            <td>03/06/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/experiencias-sobre-datos-abiertos-en-mexico.html">Experiencias sobre Datos Abiertos en México</a></td>
            <td>Representantes del gobierno del estado de Puebla y del municipio de Xalapa, Veracruz compartieron sus experiencias en materia de Datos Abiertos.</td>
          </tr>
          <tr>
            <td>26/05/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/zona-metropolitana-laguna.html">Zona Metropolitana de La Laguna</a></td>
            <td>La Zona Metropolitana de La Laguna está conformada por los municipios de Torreón, Matamoros en el estado de Coahuila, Gómez Palacio y Lerdo en Durango.</td>
          </tr>
          <tr>
            <td>08/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/innovacion-internet-competitividad.html">Innovación, Internet y Competitividad</a></td>
            <td>Cada día se hace más necesario que el gobierno realice gran número de sus trámites por Internet. Los ciudadanos y la banca lo exigen en aras de aumentar la competitividad.</td>
          </tr>
          <tr>
            <td>07/04/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/nuevas-tecnologias-estandares-web.html">Nuevas Tecnologías y Estándares para la Web</a></td>
            <td>Recopilación de las nuevas técnicas que se deben de usar para la elaboración de sitios web institucionales. Con el objetivo de mejorarlas tanto para los humanos como para los robots (motores de búsqueda).</td>
          </tr>
          <tr>
            <td>26/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/que-son-datos-abiertos.html">¿Qué son los datos abiertos?</a></td>
            <td>Los datos abiertos son los datos digitales de carácter público que son accesibles en línea y que también pueden ser usados, reutilizados y redistribuidos por cualquier interesado.</td>
          </tr>
          <tr>
            <td>11/02/2015</td>
            <td>Análisis</td>
            <td><a href="../blog/direccionando-hacia-innovacion-urbana.html">Direccionando hacia la innovación urbana</a></td>
            <td>Actualmente el concepto de ciudad inteligente o digital se maneja a nivel global. Muchas ciudades de este tipo se están desarrollando en diferentes lugares del mundo, cada una con su propio sistema, diseño, estructura y organización.</td>
          </tr>
          <tr>
            <td>01/01/2015</td>
            <td>Otro</td>
            <td><a href="..//../sig-planes/index.html">Planes</a></td>
            <td>Documentos oficiales que tienen que ver con desarrollo urbano.</td>
          </tr>
          <tr>
            <td>18/11/2014</td>
            <td>Otro</td>
            <td><a href="..//../sig-mapas-torreon/zonificacion-primaria.html">Zonificación Primaria</a></td>
            <td>Mapa para identificar el área urbana, el crecimiento urbano, la zona agrícola y las zonas de restauración y protección de Torreón, Coahuila.</td>
          </tr>
          <tr>
            <td>18/11/2014</td>
            <td>Otro</td>
            <td><a href="..//../sig-mapas-torreon/zonificacion-secundaria.html">Zonificación Secundaria</a></td>
            <td>Mapa referente para consultar los usos de suelo del área urbana de Torreón. De clic en un área para mostrar detalles y el enlace al reglamento.</td>
          </tr>
          <tr>
            <td>04/11/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/datos-abiertos-gobiernos-municipales.html">Datos Abiertos en los Gobiernos Municipales</a></td>
            <td>Con la parte tecnológica resuelta, ha sido común que cualquiera de nosotros se pregunte... ¿Cómo se podrían mejorar los servicios gubernamentales? La respuesta es Datos Abiertos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-apertura-de-negocios.html">Apertura de Negocios en Torreón</a></td>
            <td>Número de días necesarios para el trámite de apertura de un negocio.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-competencia-electoral.html">Competencia Electoral en Gómez Palacio</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-competencia-electoral.html">Competencia Electoral en La Laguna</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-competencia-electoral.html">Competencia Electoral en Lerdo</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-competencia-electoral.html">Competencia Electoral en Matamoros</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-competencia-electoral.html">Competencia Electoral en Torreón</a></td>
            <td>Diferencia entre los dos candidatos con más votación entre el total de votos.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Gómez Palacio</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/economia-ejecucion-de-contratos.html">Ejecución de Contratos en La Laguna</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Lerdo</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Matamoros</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-ejecucion-de-contratos.html">Ejecución de Contratos en Torreón</a></td>
            <td>Incluido en el Subíndice de "Sistema de Derecho Confiable y Objetivo" Mide el número de días promedio requerido para la ejecución de contratos de negocios. Ésta es una variable a nivel estatal. Fuente: Doing Business en México, 2007, 2009, 2012.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en Gómez Palacio</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en La Laguna</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en Lerdo</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en Matamoros</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/sociedad-organizaciones-de-la-sociedad-civil.html">Organizaciones de la Sociedad Civil en Torreón</a></td>
            <td>Organizaciones de la sociedad civil por cada cien mil habitantes.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-permiso-de-construccion.html">Permiso de Construcción en Torreón</a></td>
            <td>Número de días necesarios para conseguir un permiso de construcción.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/economia-registro-de-propiedades.html">Registro de Propiedades en Torreón</a></td>
            <td>Días que toma el trámite para el registro de una propiedad.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-gomez-palacio/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en Gómez Palacio</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-la-laguna/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en La Laguna</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-lerdo/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en Lerdo</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-matamoros/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en Matamoros</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
          </tr>
          <tr>
            <td>21/10/2014</td>
            <td>Indicador</td>
            <td><a href="../indicadores-torreon/gobierno-indice-de-gobierno-electronico-municipal.html">Índice de Gobierno Electrónico Municipal en Torreón</a></td>
            <td>índice que abarca líneas telefónicas, computadoras, funcionalidad sitio web, información sitio, conexión a internet estableciendo un valor de 0 a 1.</td>
          </tr>
          <tr>
            <td>08/10/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/implan-somos-todos.html">El IMPLAN somos todos</a></td>
            <td>Al iniciar este año se puso en marcha las labores del IMPLAN Torreón, con la firme intención de brindar a la ciudad y su zona metropolitana la posibilidad de crecer de manera ordenada.</td>
          </tr>
          <tr>
            <td>24/09/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/apertura-empresas-2014.html">Apertura de Empresas 2014</a></td>
            <td>La apertura de nuevas empresas en el municipio de Torreón, Coahuila ha alcanzado su punto más alto del año 2014 en el mes de julio.</td>
          </tr>
          <tr>
            <td>19/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/independencia-finanzas-publicas.html">Independencia de las Finanzas Públicas</a></td>
            <td>Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.</td>
          </tr>
          <tr>
            <td>12/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/gobiernos-eficaces-eficientes.html">Gobiernos eficaces y eficientes</a></td>
            <td>La eficiencia de los gobiernos es el subíndice peor evaluado para la metrópoli ubicándonos en el lugar 63 de 77.</td>
          </tr>
          <tr>
            <td>10/06/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/sistema-politico-estable-funcional.html">Sistema Político Estable y Funcional</a></td>
            <td>El Sistema Político Estable y Funcional es el subíndice mejor calificado de la zona metropolitana, ya que IMCO nos sitúa en el lugar 11 del ranking.</td>
          </tr>
          <tr>
            <td>29/05/2014</td>
            <td>Análisis</td>
            <td><a href="../blog/doing-business-torreon.html">Doing Business en Torreón</a></td>
            <td>Este índice sirve para señalar en cual ciudad es más fácil hacer negaocios. En 2007, el municipio de Torreón ocupó el lugar 13 de 32 ciudades evaluadas.</td>
          </tr>
          <tr>
            <td>01/05/2014</td>
            <td>Proyecto</td>
            <td><a href="../proyectos/banco-municipal-proyectos-inversion.html">Banco Municipal de Proyectos de Inversión</a></td>
            <td>Es un instrumento dinámico de gestión pública, orientado a consolidar una cultura municipal de formulación (preparación), planeación, seguimiento y evaluación de programas y proyectos de inversión, por medio de sus componentes y funciones.</td>
          </tr>
        </tbody>
      </table>
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
// LENGUETA smi-indicador-grafica
$('#smi-indicador a[href="#smi-indicador-grafica"]').on('shown.bs.tab', function(e){
  // Gráfica
  if (typeof vargraficaDatos === 'undefined') {
    vargraficaDatos = Morris.Line({
      element: 'graficaDatos',
      data: [{ fecha: '2007-12-31', dato: 51 },{ fecha: '2012-12-31', dato: 33 },{ fecha: '2013-10-31', dato: 28 }],
      xkey: 'fecha',
      ykeys: ['dato'],
      labels: ['Dato'],
      lineColors: ['#FF5B02'],
      xLabelFormat: function(d) { return d.getDate()+'/'+(d.getMonth()+1)+'/'+d.getFullYear(); },
      dateFormat: function(ts) { var d = new Date(ts); return d.getDate() + '/' + (d.getMonth() + 1) + '/' + d.getFullYear(); }
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
            <td>31/12/2007</td>
            <td>51</td>
            <td>Doing Business</td>
            <td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2007 para Torreón son: 

- # de procedimientos/trámites: 8
- Costo (% del valor de la propiedad): 4.27 
- Ranking en registro de propiedades: 29</td>
          </tr>
          <tr>
            <td>31/12/2012</td>
            <td>33</td>
            <td>Doing Business</td>
            <td>En el tema de apertura de negocio Doing Business califica otros dos aspectos. Los resultados de 2012 para Torreón son: 

- # de procedimientos: 6 
- Costo (% del valor de la propiedad): 4.3 
- Ranking en registro de propiedades: 22</td>
          </tr>
          <tr>
            <td>31/10/2013</td>
            <td>28</td>
            <td>Doing Business</td>
            <td>Dato obtenido del estudio elaborado por Doing Business de octubre de 2011 a octubre de 2013 y publicado en su reporte Doing Business en México 2014. 

Los Indicadores complementarios en registro de propiedades fueron los siguientes para Torreón: 
Procedimientos (número) = 6 ; 
Costo (% del valor de la propiedad) = 4,5</td>
          </tr>
        </tbody>
      </table>
      <p><b>Unidad:</b> Días.</p>
FINAL;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaRegistroDeUnaPropiedad

?>
