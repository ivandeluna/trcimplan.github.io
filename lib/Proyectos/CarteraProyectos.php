<?php
/*
 * SMIbeta - Proyectos Cartera de Proyectos
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
namespace Proyectos;

/**
 * Clase CarteraProyectos
 */
class CarteraProyectos extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Cartera de Proyectos';
        $this->directorio  = 'proyectos';
        $this->archivo     = 'cartera-proyectos';
        $this->descripcion = 'Pendiente.';
        $this->claves      = 'IMPLAN, Torreon, Proyectos, Cartera';
        $this->categorias  = array('Proyectos');
        $this->encabezado  = '<img class="img-responsive" src="cartera-proyectos/encabezado.jpg">';
        $this->contenido   = <<<FINAL
FINAL;
        $this->javascript  = <<<FINAL
FINAL;
    } // constructor

} // Clase CarteraProyectos

?>
