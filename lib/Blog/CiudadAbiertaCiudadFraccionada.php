<?php
/*
 * TrcIMPLAN Sitio Web - DESCRIPCION
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
 * Clase CiudadAbiertaCiudadFraccionada
 */
class CiudadAbiertaCiudadFraccionada extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Ciudad abierta y ciudad fraccionada';
        $this->autor           = 'Arq. Cecilio Pedro Secunza Schott';
        $this->fecha           = '2015-02-24T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'ciudad-abierta-ciudad-fraccionada';
        $this->imagen          = 'ciudad-abierta-ciudad-fraccionada/imagen.jpg';
        $this->imagen_previa   = 'ciudad-abierta-ciudad-fraccionada/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La fragmentación social y urbana provocada por desarrollos habitacionales “seguros” tiene efectos que agravan la percepción de la inseguridad en la ciudad.';
        $this->claves          = 'IMPLAN, Torreon, Ciudad, Fraccionamientos, Cerrados';
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio      = 'blog';
        $this->nombre_menu     = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado          = 'publicar';
        // El contenido es estructurado en un esquema
        $schema                = new \Base\SchemaBlogPosting();
        $schema->name          = $this->nombre;
        $schema->description   = $this->descripcion;
        $schema->datePublished = $this->fecha;
        $schema->image         = $this->imagen;
        $schema->image_show    = $this->poner_imagen_en_contenido;
        $schema->author        = $this->autor;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido       = $schema;
        // Se define una ruta a una archivo markdown para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_markdown = 'lib/Blog/CiudadAbiertaCiudadFraccionada.md';
        // Para el Organizador
        $this->categorias      = array('Infraestructura');
        $this->fuentes         = array();
        $this->regiones        = array('Torreón', 'Gómez Palacio');
    } // constructor

} // Clase CiudadAbiertaCiudadFraccionada

?>
