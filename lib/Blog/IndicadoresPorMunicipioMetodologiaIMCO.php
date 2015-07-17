<?php
/*
 * SMIbeta - Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
namespace Blog;

/**
 * Clase IndicadoresPorMunicipioMetodologiaIMCO
 */
class IndicadoresPorMunicipioMetodologiaIMCO extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO';
        $this->autor            = 'Rodrigo González Morales y Luis A. Gutiérrez Arizpe';
        $this->fecha            = '2014-05-28T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'indicadores-por-municipio-metodologia-imco';
        $this->imagen           = 'indicadores-por-municipio-metodologia-imco/imagen.jpg';
        $this->imagen_previa    = 'indicadores-por-municipio-metodologia-imco/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Índice de Competitividad Urbana de la Zona Metropolitana de la Laguna, Torreón, Gómez Palacio, Lerdo y Matamoros en 2012.';
        $this->claves           = 'IMPLAN, Torreon, Competitividad, La Laguna, Gómez Palacio, Lerdo, Matamoros';
        $this->categorias       = array('Competitividad', 'Empleo');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

<h4>Competitividad de la Zona Metropolitana de la Laguna. Indicadores por municipio construidos por el IMPLAN con la base de datos y metodología del IMCO.</h4>

<p>El Instituto Mexicano para la Competitividad (IMCO) realiza desde el año 2004 mediciones sobre la competitividad en México, bajo las premisas de realizarlas “a partir de datos duros y fuentes indiscutibles por su rigor e imparcialidad; a partir de una visión integral, que contemple todas las aristas posibles, que además pueda seguirse en el tiempo, y cuya estructura y cálculo sean accesibles, claros y transparentes.”[1]</p>

<p>Desde este enfoque la competitividad no es ya un asunto de empresas sino un asunto de países, estados y ciudades, y para ello sus estudios contemplan diez factores de competitividad: Sistema de derecho confiable y objetivo; manejo sustentable del medio ambiente; sociedad incluyente, preparada y sana; economía estable; sistema político estable y funcional; mercado laboral; infraestructura; gobiernos eficientes y eficaces; aprovechamiento de las relaciones internacionales y; sectores de innovación y sofisticación. Por ello a partir de 2006 el IMCO construyo un Índice de Competitividad Estatal y a partir de 2007 un Índice de Competitividad Urbana que compara 77 zonas metropolitanas del país.</p>

<p>El índice de Competitividad Urbana (ICU) ha sido dado a conocer en 2007, 2010 y 2012, con información proveniente de fuentes diversas verificables de años anteriores a su publicación. El presente análisis del ICU 2012[2] desarrollado por el Instituto de Planeación y Competitividad de Torreón da base para entender y analizar la competitividad de acuerdo a los criterios del IMCO, quien dará a conocer el ICU 2014 próximamente con información correspondiente a 2012.</p>

<h4>Índice General</h4>

<p>A través de estas mediciones podemos ver como la Zona Metropolitana de la Laguna (ZML) pasó de ser una ciudad de alta competitividad en 2007, a considerarse de competitividad media en 2010 y colocarse en competitividad media baja en 2012 de acuerdo a la metodología de IMCO. Los indicadores que pondera el Índice de Competitividad Urbana, se han venido modificando, sin embargo se han mantenido los diez subíndices que permiten dar comparabilidad a través del tiempo, haciendo posible focalizar los puntos de deterioro y también reconocer los aspectos en que hemos avanzado.</p>

<p>Como muestra la Gráfica 1, en el subíndice de Sistema de Derecho, pasamos de estar entre las 20 ciudades más fiables, a estar entre las peores 10. La estabilidad económica, las relaciones internacionales, la innovación y la eficiencia de los gobiernos, sufrieron también decrementos en comparación con otras ciudades que innovaron y se adaptaron a los tiempos.</p>

<h4>Gráfica 1</h4>

<p>Evolución de la Zona Metropolitana de la Laguna en el Índice de Competitividad Urbana 2007-2012</p>

<img class="img-responsive contenido-imagen" src="indicadores-por-municipio-metodologia-imco/evolucion-de-la-zona-metropolitana-de-la-laguna-en-el-indice-de-competitividad-urbana-2007-2012.png" alt="Evolución de la Zona Metropolitana de la Laguna en el Índice de Competitividad Urbana 2007-2012">

<p>Sin embargo es relevante destacar los avances que se experimentó en Medio Ambiente donde hace 8 años presentábamos un grave rezago y aunque todavía hay mucho por avanzar, la mejora fue significativa, así como y en los factores de mercado laboral, subíndice en el cual pasamos a ocupar los primeros puestos.</p>

<p>Es ineludible que conformamos una metrópoli, y si bien eso implica que los esfuerzos deberán ser conjuntos para insertar al municipio en una dinámica de competitividad, resulta también necesario conocer y diagnosticar las fortalezas y debilidades específicas de cada municipio.</p>

<h4>Gráfica 2</h4>

<img class="img-responsive contenido-imagen" src="indicadores-por-municipio-metodologia-imco/indice-de-competitividad-2012.png" alt="Índice de Competitividad 2012">

<p>El municipio de Torreón considerado sin la zona metropolitana, ocuparía el sitio 17 en el Índice de Competitividad Urbana, sobre el resto de municipios de la ZML, destacan sus subíndices de Sociedad y Mercado Laboral, y en menor medida Economía, Gobierno e Innovación. Sin embargo muestra un déficit respecto a la ZML en Relaciones Internacionales e Infraestructura.</p>

<h4>Gráfica 3</h4>

<img class="img-responsive contenido-imagen" src="indicadores-por-municipio-metodologia-imco/indice-de-competitividad-urbana-2012-zml.png" alt="Índice de Competitividad 2012 de la Zona Metropolitana de la Laguna">

<h4>Gráfica 4</h4>

<img class="img-responsive contenido-imagen" src="indicadores-por-municipio-metodologia-imco/indice-de-competitividad-urbana-2012-torreon.png" alt="Índice de Competitividad 2012 de Torreón">

<p>El municipio de Gómez Palacio considerado sin la zona metropolitana, ocuparía el sitio 59 en el Índice de Competitividad Urbana, ocupando la segunda posición de la ZML. Destacan por su influencia positiva en la ZML sus subíndices de Relaciones Internacionales, Innovación, Economía y Medio Ambiente. Sin embargo Sistema Político, Gobiernos Eficientes y Sociedad muestran un amplio déficit respecto a la ZML en su conjunto.</p>

<h4>Gráfica 5</h4>

<img class="img-responsive contenido-imagen" src="indicadores-por-municipio-metodologia-imco/indice-de-competitividad-urbana-2012-gomez-palacio.png" alt="Índice de Competitividad 2012 de Gómez Palacio">

<h4>Gráfica 6</h4>

<img class="img-responsive contenido-imagen" src="indicadores-por-municipio-metodologia-imco/indice-de-competitividad-urbana-2012-lerdo.png" alt="Índice de Competitividad 2012 de Lerdo">

<p>Lerdo ocuparía el puesto 74 de 77 Ciudades si se le aísla, de la ZML, resaltan sin embargo sus aportes en Medio Ambiente y en menor medida en Sistema Político. Sin embargo su déficit en Factores del Mercado Laboral impacta fuertemente en la competitividad de la zona.</p>

<h4>Gráfica 7</h4>

<img class="contenido-imagen" src="indicadores-por-municipio-metodologia-imco/indice-de-competitividad-urbana-2012-matamoros.png" alt="Índice de Competitividad 2012 de Matamoros">

<p>En cuanto al Municipio de Matamoros ocuparía por si sólo la posición 64. Si bien destaca su aporte en la Estabilidad de su Sistema Político, y Estado de Derecho, al ser el municipio menos inseguro de la región en los años de referencia, su déficit en Sociedad, Mercado Laboral y Medio Ambiente impactan en la competitividad de la región más aún considerando que constituye la reserva territorial más próxima al municipio de Torreón.</p>

<p>[1] Instituto Mexicano Para la Competitividad (2004), Situación de la Competitividad en México. Hacia un pacto de Competitividad, IMCO, México.<br>
[2] Análisis de acuerdo a la base de datos disponible en: <a href="http://porciudad.comparadondevives.org/contacto">http://porciudad.comparadondevives.org/contacto</a></p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase IndicadoresPorMunicipioMetodologiaIMCO

?>
