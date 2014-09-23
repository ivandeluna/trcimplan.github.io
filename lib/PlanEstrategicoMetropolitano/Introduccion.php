<?php
/*
 * SMIbeta - Introducción
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
namespace PlanEstrategicoMetropolitano;

/**
 * Clase Introduccion
 */
class Introduccion extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-09-24';
     // $this->autor         = 'TrcIMPLAN';
        $this->nombre        = 'Plan Estratégico Metropolitano';
        $this->nombre_menu   = 'Plan Estratégico Metropolitano';
        $this->directorio    = 'plan-estrategico-metropolitano';
        $this->archivo       = 'introduccion';
        $this->descripcion   = '.';
        $this->claves        = 'IMPLAN, Torreon';
     // $this->imagen_previa = 'plan-estrategico-metropolitano/imagen-previa.jpg';
        $this->categorias    = array('Plan Estrategico Metropolitano');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="plan-estrategico-metropolitano/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<h2>¿Qué es?</h2>

<p>El Plan Estratégico Metropolitano es un esfuerzo de planeación participativa que encabeza el Consejo Directivo del IMPLAN Torreón, para atender la necesidad urgente de elevar el nivel de competitividad para el desarrollo económico y social de la Zona Metropolitana de La Laguna.</p>

<h2>¿En qué me beneficia?</h2>

<h2>¿Cómo va a ser?</h2>

<h2>¿De qué forma puedo participar?</h2>

<p>Mándanos un mensaje vía correo electrónico a <strong><a href="mailto:mipropuesta@trcimplan.mx">mipropuesta@trcimplan.mx</a></strong> donde solicites que te enviemos el formulario que llevará tus solicitudes e ideas a las mesas de diálogo.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase Introduccion

?>
