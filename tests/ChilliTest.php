<?php


use App\Chilli;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChilliTest extends TestCase
{
    use DatabaseMigrations;

    public function test_a_chilli_can_be_created()
    {
        Chilli::create([
            'name'     => 'Aleppo pepper',
            'species'  => 'Capsicum annuum',
            'origin'   => 'Aleppo, Syria',
            'heat'     => 2,
            'scoville' => 10000,
        ]);

        $this->seeInDatabase('chillies', [
            'id'       => 1,
            'name'     => 'Aleppo pepper',
            'species'  => 'Capsicum annuum',
            'origin'   => 'Aleppo, Syria',
            'heat'     => 2,
            'scoville' => 10000
        ]);
    }
}