<?php
/**
 * TrcIMPLAN Sitio Web - Schema Dataset
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
namespace Base;

/**
 * Clase SchemaDataset
 */
class SchemaDataset extends SchemaCreativeWork {

    // public $onTypeProperty;  // Text. Use when this item is part of another one.
    // public $description;     // Text. A short description of the item.
    // public $image;           // URL or ImageObject. An image of the item.
    // public $name;            // Text. The name of the item.
    // public $author;          // Organization or Person. The author of this content.
    // public $contentLocation; // Place. The location of the content.
    // public $datePublished;   // Date. Date of first broadcast/publication.
    // public $headline;        // Text. Headline of the article.
    // public $producer;        // Organization or Person. The person or organization who produced the work.
    public $catalog;            // DataCatalog. A data catalog which contains a dataset.
    public $distribution;       // DataDownload. A downloadable form of this dataset, at a specific location, in a specific format.
    public $spatial;            // Place. The range of spatial applicability of a dataset, e.g. for a dataset of New York weather, the state of New York.
    public $temporal;           // DateTime. The range of temporal applicability of a dataset, e.g. for a 2011 census dataset, the year 2011 (in ISO 8601 time interval format).

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular inicia
        if ($this->onTypeProperty != '') {
            $a[] = "<div itemprop=\"{$this->onTypeProperty}\" itemscope itemtype=\"http://schema.org/Dataset\">";
        } else {
            $a[] = '<div itemscope itemtype="http://schema.org/Dataset">';
        }
        // Imagen
        if ($this->image != '') {
            $a[] = "  <img class=\"contenido-imagen-previa\" itemprop=\"image\" alt=\"Imagen previa\" src=\"{$this->image}\">";
        }
        // Título
        if (is_string($this->headline) && ($this->headline != '')) {
            if (!is_string($this->name) || ($this->name == '')) {
                $this->name = $this->headline;
                $a[] = "  <h3 itemprop=\"name\">{$this->name}</h3>";
            } elseif ($this->name != $this->headline) {
                $a[] = "  <h3 itemprop=\"headline\">{$this->headline}</h3>";
                $a[] = "  <h5 itemprop=\"name\">{$this->name}</h5>";
            }
        } elseif (is_string($this->name) && ($this->name != '')) {
            $a[] = "  <h3 itemprop=\"name\">{$this->name}</h3>";
            $this->headline = $this->name;
        } else {
            throw new \Exception('Error en SchemaDataset, html: La propiedad name y/o headline es incorrecta.');
        }
        // Descripción
        if ($this->description != '') {
            $a[] = "  <div itemprop=\"description\">{$this->description}</div>";
        }
        // Autor y Fecha
        if (($this->author != '') || ($this->datePublished != '')) {
            $a[] = '  <div class="autor-fecha">';
            if ($this->author != '') {
                $a[] = "    Por <span itemprop=\"author\">{$this->author}</span>";
            }
            if ($this->datePublished != '') {
                $a[] = sprintf('    <meta itemprop="datePublished" content="%s">%s', $this->datePublished, $this->fecha_con_formato_humano($this->datePublished));
            }
            $a[] = '  </div>';
        }
        // Catálogo, espacial y temporal
        if (($this->catalog != '') || ($this->spatial != '') || ($this->temporal != '')) {
            $a[] = '  <div>';
            // Catálogo
            if ($this->catalog != '') {
                $a[] = "    Catálogo: <span itemprop=\"catalog\">{$this->catalog}</span>";
            }
            // Espacial
            if ($this->spatial != '') {
                $a[] = "    Espacial: <span itemprop=\"spatial\">{$this->spatial}</span>";
            }
            // Temporal
            if ($this->temporal != '') {
                $a[] = sprintf('    Temporal: <meta itemprop="datePublished" content="%s">%s', $this->temporal, $this->fecha_con_formato_humano($this->temporal));
            }
            $a[] = '  </div>';
        }
        // Distribución
        if ($this->distribution != '') {
            $a[] = '  <div itemprop="distribution">';
            $a[] = $this->distribution;
            $a[] = '  </div>';
        }
        // Acumular termina
        $a[] = '</div>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase SchemaDataset

?>
