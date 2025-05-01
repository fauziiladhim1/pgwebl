<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PolylinesModel extends Model
{
    protected $table = 'polylines';

    protected $guarded = ['id'];

    public function geojson_polylines()
    {
        // Corrected query to fetch the data
        $polylines = $this
            ->select(DB::raw('id, st_asgeojson(geom) as geom, name, description, image,
            st_length(geom, true) as length_m, st_length(geom, true)/1000 as length_km, created_at, updated_at'))
            ->get();

        // Initialize GeoJSON structure
        $geojson = [
            'type' => 'FeatureCollection',
            'features' => [],
        ];

        // Iterate over the fetched polylines to build GeoJSON features
        foreach ($polylines as $p) {
            $feature = [
                'type' => 'Feature',
                'geometry' => json_decode($p->geom), // Decode geometry to JSON object
                'properties' => [
                    'id' => $p->id,
                    'name' => $p->name,
                    'description' => $p->description,
                    'created_at' => $p->created_at,
                    'updated_at' => $p->updated_at,
                    'length_m' => $p->length_m,
                    'length_km' => $p->length_km,
                    'image' => $p->image,
                ],
            ];

            // Append the feature to GeoJSON features array
            array_push($geojson['features'], $feature);
        }

        // Return the final GeoJSON object
        return $geojson;
    }
}
