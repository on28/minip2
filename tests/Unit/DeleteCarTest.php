<?php
namespace Tests\Unit;
use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeleteCarTest extends TestCase
{
    use SoftDeletes;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $this->assertClassHasAttribute('Make', Car::class);
        //protected $dates = ['deleted_at'];

    }
}