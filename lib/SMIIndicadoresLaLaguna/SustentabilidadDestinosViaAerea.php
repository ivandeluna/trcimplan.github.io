<?php
/**
 * SustentabilidadDestinosViaAerea.php
 *
 * IMPLAN Torreón
 */

// Namespace
namespace SMIIndicadoresLaLaguna;

/**
 * Clase SustentabilidadDestinosViaAerea
 */
class SustentabilidadDestinosViaAerea extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->nombre      = 'Destinos Vía Aérea en La Laguna';
        $this->directorio  = 'indicadores-la-laguna';
        $this->archivo     = 'sustentabilidad-destinos-via-aerea';
        $this->descripcion = 'Destinos directos ofertados desde el Aeropuerto Internacional Francisco Sarabia de la ciudad de Torreón.';
        $this->claves      = 'La Laguna, Movilidad';
        $this->categorias  = array('Movilidad');
        $this->contenido   = <<<FINAL
  <ul class="nav nav-tabs lenguetas" id="Lenguetaswricewqr">
    <li><a href="#descripcion" data-toggle="tab">Descripción</a></li>
    <li><a href="#grafica" data-toggle="tab">Gráfica</a></li>
    <li><a href="#mapa" data-toggle="tab">Georreferenciado</a></li>
    <li class="active"><a href="#otras_regiones" data-toggle="tab">Otras regiones</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane" id="descripcion">
      <h4>Descripción</h4>
Destinos directos ofertados desde el Aeropuerto Internacional Francisco Sarabia de la ciudad de Torreón.

<h4>Información recopilada</h4>
<table class="table table-hover table-bordered matriz">
<thead>
<tr>
<th>Fecha</th>
<th>Dato</th>
<th>Fuente</th>
<th>Notas</th>
</tr>
</thead>
<tbody>
<tr>
<td class="centrado">31/03/2014</td>
<td class="derecha">7</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
</tbody>
</table>
<b>Unidad:</b> Cantidad.

<h4>Observaciones</h4>
Se considera a nivel metropolitano. Consulta la [Base de Datos](http://www.oma.aero/es/aeropuertos/trfico-de-pasajeros/)

    </div>
    <div class="tab-pane" id="grafica">
      <p><b>Aviso:</b> Esta lengüeta NO tiene contenido.</p>
    </div>
    <div class="tab-pane" id="mapa">
              <div id="LeafLetglqnknzo" class="mapa"></div>
    </div>
    <div class="tab-pane active" id="otras_regiones">
      <h4>En otras regiones</h4>

<table class="table table-hover table-bordered matriz">
<thead>
<tr>
<th>Región</th>
<th>Fecha</th>
<th>Dato</th>
<th>Fuente</th>
<th>Notas</th>
</tr>
</thead>
<tbody>
<tr>
<td>Torreón</td>
<td>2014-03-31</td>
<td class="derecha">7</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Gómez Palacio</td>
<td>2014-03-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Lerdo</td>
<td>2014-03-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
<tr>
<td>Matamoros</td>
<td>2014-03-31</td>
<td class="centrado">NO TIENE</td>
<td>Operadora Mexicana de Aeropuertos (OMA)</td>
<td></td>
</tr>
</tbody>
</table>


    </div>
  </div>
FINAL;
        $this->javascript  = <<<FINAL
// TWITTER BOOTSTRAP TABS
$(document).ready(function(){
  $('#Lenguetaswricewqr a:first').tab('show')
});
// LENGUETA
$('#Lenguetaswricewqr a[href="#mapa"]').on('shown.bs.tab', function (e) {
  // Mapa
  var mapglqnknzo;
  // DECLARAR LOS CIRCULOS DE COLORES PARA GEOPUNTOS
  var circuloParque = {
    "radius": 8,
    "fillColor": "#2BFF2B",
    "color": "#000",
    "weight": 1,
    "opacity": 1,
    "fillOpacity": 0.7
  };
  // Función para Pop-Ups
  function onEachFeature(feature, layer) {
    if (feature.properties && feature.properties.popupContent) {
      layer.bindPopup(feature.properties.popupContent);
    }
  };
  // Función para el mapa
  function initmapglqnknzo() {
    // Nuevo Mapa
    mapglqnknzo = new L.Map('LeafLetglqnknzo');
    // Capa con el mapa
    var osmUrl='http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    var osmAttrib='Ayuntamiento de Torreón. Map data © OpenStreetMap contributors';
    var osm = new L.TileLayer(osmUrl, {minZoom: 12, maxZoom: 18, attribution: osmAttrib});
    // Definir coordenadas del centro del mapa y el nivel de zoom
    mapglqnknzo.setView(new L.LatLng(25.54, -103.44), 12);
    // Agregar capa con el mapa
    mapglqnknzo.addLayer(osm);
    // ARREGLO CON LOS GEOPUNTOS
    var geoPuntos = {
      "type": "FeatureCollection",
      "features": [
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Plaza Mayor" },
          "geometry": {"type":"Point","coordinates":[-103.45387,25.54021]},
          "id": 1
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque V. Carranza" },
          "geometry": {"type":"Point","coordinates":[-103.43321,25.54132]},
          "id": 2
        },
        {
          "type": "Feature",
          "properties": { "name": "Parque", "popupContent": "Bosque Urbano" },
          "geometry": {"type":"Point","coordinates":[-103.39061,25.55129]},
          "id": 3
        }
      ]
    };
    // CONMUTAR LOS GEOPUNTOS POR SUS CIRCULOS DE COLORES
    L.geoJson(geoPuntos, {
      onEachFeature: onEachFeature,
      pointToLayer: function (feature, latlng) {
        switch (feature.properties.name) {
          case 'Parque': return L.circleMarker(latlng, circuloParque);
        }
      }
    }).addTo(mapglqnknzo);
    // Entregar
    return true;
  };
  // Ejecutar el mapa
  if (typeof varinitmapglqnknzo === 'undefined') {
    varinitmapglqnknzo = initmapglqnknzo();
  };
});
FINAL;
    } // constructor

} // Clase SustentabilidadDestinosViaAerea

?>
