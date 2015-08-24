<?php
/*
 * TrcIMPLAN Sitio Web - Contribucion de las TICs en la Competitividad y Productividad
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
 * Clase ContribucionTICCompetitividadProductividad
 */
class ContribucionTICCompetitividadProductividad extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre          = 'Contribución de las TICs en la competitividad y productividad';
        $this->autor           = 'Lic. Alicia Valdez Ibarra';
        $this->fecha           = '2014-08-04T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo         = 'contribucion-tic-competitividad-productividad';
        $this->imagen          = 'contribucion-tic-competitividad-productividad/imagen.jpg';
        $this->imagen_previa   = 'contribucion-tic-competitividad-productividad/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion     = 'La implementación de las TICs en las actividades económicas se ha vuelto indispensable para el óptimo desarrollo de una región.';
        $this->claves          = 'IMPLAN, Torreon, TIC, Desarrollo, Empleo, Estudio, Carreras';
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
        // Se define una ruta a una archivo HTML para que cuando se ejecute el método HTML se cargue
        $this->contenido_archivo_html = 'lib/Blog/ContribucionTICCompetitividadProductividad.html';
        // Para el Organizador
        $this->categorias      = array('Competitividad', 'Innovación', 'Empleo', 'Educación');
        $this->fuentes         = array('IMCO');
        $this->regiones        = array('Nacional');
    } // constructor

} // Clase ContribucionTICCompetitividadProductividad

?>
