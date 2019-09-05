<?php namespace Arcanedev\Support\Bases;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Seeder as IlluminateSeeder;

/**
 * Class     Seeder
 *
 * @package  Arcanedev\Support\Bases
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
abstract class Seeder extends IlluminateSeeder
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Seeder collection.
     *
     * @var array
     */
    protected $seeds = [];

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Eloquent::unguard();

        foreach ($this->seeds as $seed) {
            $this->call($seed);
        }

        Eloquent::reguard();
    }
}
