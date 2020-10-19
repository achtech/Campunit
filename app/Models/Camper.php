<?php

namespace App\Models;

class Camper extends Base
{
    protected $table = 'campers';
    public $primarykey = 'id';
    protected $fillable = ['image', 'camper_name', 'camper_status', 'brand', 'model', 'value_of_vehicule', 'license_plate_number', 'seat_number', 'sleeping_places', 'vehicle_licence', 'length', 'width', 'height', 'description_camper', 'location', 'price_per_day', 'minimal_rent_days', 'included_kilometres', 'minimum_age', 'animals_allowed', 'animal_description', 'licence_needed_desc', 'license_age', 'licence_age_desc', 'smoking_allowed', 'availability', 'is_confirmed', 'id_clients', 'id_camper_names', 'id_licence_categories', 'id_camper_categories', 'id_transmissions', 'id_fuels', 'licence_needed', 'zip_code', 'city', 'country', 'position_x', 'position_y',
        'created_by',
        'updated_by'];
}
