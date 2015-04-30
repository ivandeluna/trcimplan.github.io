<?php
/*
 * TrcIMPLAN Sitio Web - Nueva infraestructura a base de tecnología LED en Torreón
 *
 * Copyright (C) 2015 IMPLAN Torreón
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
 * Clase NuevaInfraestructuraBaseTecnologiaLedTorreon
 */
class NuevaInfraestructuraBaseTecnologiaLedTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Nueva infraestructura a base de tecnología LED en Torreón';
        $this->autor            = 'Arq. Daniela Patricia Corral Hernández';
        $this->fecha            = '2015-02-10T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'nueva-infraestructura-base-tecnologia-led-torreon';
        $this->imagen           = 'nueva-infraestructura-base-tecnologia-led-torreon/imagen.jpg';
        $this->imagen_previa    = 'nueva-infraestructura-base-tecnologia-led-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'La luz blanca de calidad puede transformar el paisaje nocturno, realzando la arquitectura urbana y creando ambientes acogedores que inviten a las personas a pasar más tiempo en ellos.';
        $this->claves           = 'IMPLAN, Torreon, Alumbrado, Publico, LED, Reconversion';
        $this->categorias       = array('Infraestructura');
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
        $schema->articleBody    = $this->cargar_archivo_markdown_extra('lib/Blog/NuevaInfraestructuraBaseTecnologiaLedTorreon.md');
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

} // Clase NuevaInfraestructuraBaseTecnologiaLedTorreon

?>
