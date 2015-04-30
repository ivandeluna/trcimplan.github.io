<?php
/*
 * SMIbeta - "DOT" Desarrollo Orientado al Transporte
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
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
 * Clase DOTDesarrolloOrientadoTransporte
 */
class DOTDesarrolloOrientadoTransporte extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'DOT: Desarrollo Orientado al Transporte';
        $this->autor            = 'Ing. Luis Campos Hinojosa';
        $this->fecha            = '2014-11-05T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'dot-desarrollo-orientado-transporte';
        $this->imagen           = 'dot-desarrollo-orientado-transporte/imagen.png';
        $this->imagen_previa    = 'dot-desarrollo-orientado-transporte/imagen-previa.png';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'En las últimas décadas, han surgido nuevos modelos urbanos que retoman el componente humano como eje principal de la planeación, buscando el equilibrio entre una ciudad altamente competitiva pero con servicios e infraestructura orientada al confort y las necesidades del ser humano.';
        $this->claves           = 'IMPLAN, Torreon, Trasporte';
        $this->categorias       = array('Transporte', 'Infraestructura', 'Vialidad');
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

<blockquote>
    <p>"La naturaleza la prepara el sitio, y el hombre lo organiza de tal manera que satisfaga sus necesidades y deseos"</p>
    <p class="pull-right">Vidal de la Blache</p>
</blockquote>

<p>En las últimas décadas, han surgido nuevos modelos urbanos que retoman el componente humano como eje principal de la planeación, buscando el equilibrio entre una ciudad altamente competitiva pero con servicios e infraestructura orientada al confort y las necesidades del ser humano.</p>

<p>Las teorías de planeación modernistas y postmodernistas dejaron una profunda huella en la construcción de ciudades, al haber favorecido el uso del automóvil y la expansión urbana desmedida. Datos de SEDESOL (2012) señalan que el área de las ciudades mayores a 50 mil habitantes se expandieron 6 veces de 1980 a 2010, mientras que la población solo se incrementó 1.9 veces, para el caso de Torreón, datos del IMPLAN revelan que la ciudad se expandió 7 veces, mientras la población creció 3 veces.</p>

<p>Este proceso de expansión urbana desmedida, ha encarecido la prestación de servicios públicos, como el transporte y ha incentivado el uso del automóvil, con graves costos sociales como: contaminación, ruido, accidentes, congestionamiento, etc.</p>

<p>William H. White manifiesta que <i>"la ciudad no es un objeto de ingeniería sino un sistema complejo de experiencias que se nutren de la diversidad de actividades y relaciones sociales. Nuestras actividades diarias son lo que conforman nuestra calidad de vida que debemos entender como la calidad de experiencias que vivimos en la ciudad. La habitabilidad de la vivienda, la accesibilidad a los servicios, la conectividad a los centros de empleo, la facilidad de movilidad, la interacción social, entre otras"</i>.</p>

<p>Imaginemos un barrio en la ciudad en el que nuestras actividades y empleo están cerca, donde hay parques y calles seguras, donde podemos salir a correr, caminar o trasladarnos en bicicleta, donde el transporte público es accesible y el traslado es en corto tiempo. A esto se le conoce como Desarrollo Orientado al Transporte (DOT).</p>

<p>El Desarrollo Orientado al Transporte (DOT) es un modelo urbano que busca construir barrios entorno al transporte público, barrios compactos y de alta densidad, con zonas de uso mixto (comercial, negocios y residencial), espacios públicos seguros que favorezcan la interacción social y una buena infraestructura peatonal y ciclista.</p>

<h3>Beneficios del DOT</h3>

<p>1. Beneficios ambientales.</p>

<ul>
    <li>Reduce emisiones de gases de efecto invernadero.</li>
    <li>Mejora la calidad del aire.</li>
    <li>Ayuda a conservar áreas naturales.</li>
    <li>Favorece la recarga de mantos acuíferos.</li>
</ul>

<p>2. Beneficios sociales.</p>

<ul>
    <li>Mejora el acceso al transporte público.</li>
    <li>Mejora la salud de la población.</li>
    <li>Aumenta la actividad del espacio público.</li>
    <li>Promueve la inclusión y equidad social.</li>
    <li>Mejora los índices de seguridad ciudadana y vial.</li>
</ul>

<p>3. Beneficios económicos</p>

<ul>
    <li>Activa la economía local.</li>
    <li>Aumenta la plusvalía inmobiliaria.</li>
    <li>Aumenta la productividad.</li>
    <li>Aprovecha las inversiones en infraestructura existentes.</li>
    <li>Reduce la necesidad de nueva infraestructura.</li>
    <li>Reduce costos de traslados para la población.</li>
</ul>

<p>La implementación de sistemas BRT (Bus Rapid Transit) en ciudades mexicanas como DF, Guadalajara y León son reflejo de estos primeros esfuerzos por desarrollar ciudades orientadas al transporte. Sabiendo que la estructura urbana y la movilidad están estrechamente interrelacionadas.</p>

<p>Actualmente, La Laguna se encuentra en un proceso de implementación de un BRT, el cual puede servir como piedra angular para generar una estrategia integral de Desarrollo Orientado al Transporte, que solucione la movilidad local y regional de sus habitantes, de manera peatonal, ciclista y de transporte público de calidad.</p>

<p></p>

<blockquote>
    <p>"Es maravilloso despertar en una ciudad donde todos los días te das cuenta que hoy la ciudad es un lugar mejor para vivir que el de ayer"</p>
    <p class="pull-right">Jan Gehl</p>
</blockquote>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase DOTDesarrolloOrientadoTransporte

?>
