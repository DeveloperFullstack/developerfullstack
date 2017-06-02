<?php

use Illuminate\Database\Seeder;

class LuAddressStatesSeeder extends Seeder
{
    const TABLE = 'lu_address_states';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Guatemala
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Petén',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Huehuetenango',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Quiché',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Alta Verapaz',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Izabal',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'San Marcos',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Quetzaltenango',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Totonicapán',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Sololá',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Chimaltenango',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Sacatepéquez',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Guatemala',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Baja Verapaz',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'El Progreso',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Jalapa',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Zacapa',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Chiquimula',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Retalhuleu',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Suchitepéquez',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Escuintla',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Santa Rosa',
        ]);
        DB::table(self::TABLE)->insert([
            'country_id' => 1,
            'state' => 'Jutiapa',
        ]);
    }
}
