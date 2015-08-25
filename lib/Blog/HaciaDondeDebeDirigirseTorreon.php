<?php
/*
 * SMIbeta - Hacia dónde debe dirigirse Torreón
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
 * Clase HaciaDondeDebeDirigirseTorreon
 */
class HaciaDondeDebeDirigirseTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Hacia dónde debe dirigirse Torreón';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2014-04-16T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes
        $this->archivo         = 'hacia-donde-debe-dirigirse-torreon';
        $this->imagen          = 'hacia-donde-debe-dirigirse-torreon/imagen.jpg';
        $this->imagen_previa   = 'hacia-donde-debe-dirigirse-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = '¿En realidad generan más valor las actividades tecnológicas y de servicios?';
        $this->claves          = 'IMPLAN, Torreon, Actividades, Tecnológicas, Servicios';
        // El directorio en la raíz donde se guardará el archivo HTML
        $this->directorio      = 'blog';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
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
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/Blog/HaciaDondeDebeDirigirseTorreon.html';
        // Para el Organizador
        $this->categorias      = array('Empleo', 'Empresas');
        $this->fuentes         = array('INEGI', 'Organización para la Cooperación y Desarrollo Económicos (OCDE)');
        $this->regiones        = array('Torreón');
    } // constructor

} // Clase HaciaDondeDebeDirigirseTorreon

?>
