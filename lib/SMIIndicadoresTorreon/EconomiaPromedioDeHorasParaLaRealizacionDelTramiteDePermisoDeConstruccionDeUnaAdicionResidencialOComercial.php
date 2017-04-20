<?php
/**
 * TrcIMPLAN Sitio Web - SMIIndicadoresTorreon EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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
 * @package TrcIMPLANSitioWeb
 */

namespace SMIIndicadoresTorreon;

/**
 * Clase EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial
 */
class EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial extends \SMIBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Promedio de Horas para la Realizacion del Trámite de Permiso de Construcción de una Adición Residencial o Comercial en Torreón';
        $this->autor       = 'Dirección de Investigación Estratégica';
        $this->fecha       = '2015-07-14T15:22:04';
        // El nombre del archivo a crear
        $this->archivo     = 'economia-promedio-de-horas-para-la-realizacion-del-tramite-de-permiso-de-construccion-de-una-adicion-residencial-o-comercial';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Determina el número de horas requeridas para realizar el trámite de permiso de construcción de una adición (residencial/comercial). Calculado por Número de Horas Empleadas para el Trámite de Permisos de Construcción de Una Adición, entre Número de Permisos de Construcción Una Adición Otorgados.';
        $this->claves      = 'IMPLAN, Torreón, Sistema de Indicadores de Desempeño (SINDES), Gobierno';
        // Para el Organizador
        $this->categorias  = array('Sistema de Indicadores de Desempeño (SINDES)', 'Gobierno');
        $this->fuentes     = array('Ayuntamiento de Torreón');
        $this->regiones    = array('Torreón');
    } // constructor

    /**
     * Sección Datos HTML
     *
     * @return string Código HTML
     */
    protected function seccion_datos_html() {
        $this->datos_tabla->definir_estructura(array(
            'fecha' => array('enca' => 'Fecha', 'formato' => 'fecha'),
            'valor' => array('enca' => 'Dato', 'formato' => 'cantidad'),
            'fuente_nombre' => array('enca' => 'Fuente', 'formato' => 'texto'),
            'notas' => array('enca' => 'Notas', 'formato' => 'texto')));
        $this->datos_tabla->definir_panal(array(
            array('fecha' => '2014-06-30', 'valor' => '38', 'fuente_nombre' => 'Ayuntamiento de Torreón', 'notas' => '')));
        // Entregar
        return $this->datos_tabla->html();
    } // seccion_datos_html

    /**
     * Sección Datos JavaScript
     *
     * @return string Código JavaScript
     */
    protected function seccion_datos_javascript() {
        return $this->datos_tabla->javascript();
    } // seccion_datos_javascript

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Ejecutar los métodos que alimentan cada lengüeta
        $this->lenguetas->agregar('smi-indicador-datos', 'Datos', $this->seccion_datos_html());
        $this->lenguetas->definir_activa(); // Primer lengüeta activa
        // Definir el contenido de esta publicación que es un SchemaArticle
        $this->contenido->articleBody = $this->lenguetas->html();
        // Ejecutar este método en el padre
        return parent::html();
    } // html

    /**
     * Javascript
     *
     * @return string Código Javascript
     */
    public function javascript() {
        // JavaScript de las lengüetas, es el de las gráficas
        $this->javascript[] = $this->lenguetas->javascript();
        // JavaScript para la carga completa del documento, es el de la tabla con los datos
        $this->javascript[] = $this->datos_tabla->javascript();
        // Ejecutar este método en el padre
        return parent::javascript();
    } // javascript

    /**
     * Redifusion HTML
     *
     * @return string Código HTML
     */
    public function redifusion_html() {
        // Código HTML para redifusión
        $this->redifusion = $this->descripcion;
        // Ejecutar este método en el padre
        return parent::redifusion_html();
    } // redifusion_html

} // Clase EconomiaPromedioDeHorasParaLaRealizacionDelTramiteDePermisoDeConstruccionDeUnaAdicionResidencialOComercial

?>
