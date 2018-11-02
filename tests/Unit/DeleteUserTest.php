<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class DeleteUserTest extends TestCase
{
    use SoftDeletes;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $this->assertClassHasAttribute('foo', User::class);
        //protected $dates = ['deleted_at'];

    }
}