<?php
// 2024_xx_xx_add_location_fields_to_events_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('location_google_id')->nullable();

            $table->string('location_address_street_address')->nullable();
            $table->string('location_address_building_address')->nullable();
            $table->string('location_address_place_name')->nullable();

            $table->decimal('location_coordinates_longitude', 10, 7)->nullable();
            $table->decimal('location_coordinates_latitude', 10, 7)->nullable();

            $table->foreignId('location_admin_division_country_id')->nullable()->constrained('location_countries');
            $table->foreignId('location_admin_division_state_id')->nullable()->constrained('location_states');
            $table->foreignId('location_admin_division_substate_id')->nullable()->constrained('location_substates');
            $table->foreignId('location_admin_division_town_id')->nullable()->constrained('location_towns');
            $table->foreignId('location_admin_division_suburb_id')->nullable()->constrained('location_suburbs');
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn([
                'location_id',
                'location_address_street_address',
                'location_address_building_address',
                'location_address_place_name',
                'location_coordinates_longitude',
                'location_coordinates_latitude',
                'location_admin_division_country_id',
                'location_admin_division_state_id',
                'location_admin_division_substate_id',
                'location_admin_division_town_id',
                'location_admin_division_suburb_id',
            ]);
        });
    }
};
