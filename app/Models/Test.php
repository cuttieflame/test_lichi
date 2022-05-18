<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static whereIn(string $string, string[] $array)
 */
class Test extends Model
{
    use HasFactory;
    protected $table = 'tests';
    protected $fillable = ['script_name','start_time','end_time','result'];

//    public function __construct() {
//        $this->fill();
//    }
//    private function fill() {
//        Test::factory()->create();
//    }
//    public static function get() {
//        return Test::whereIn('result',['normal','success'])->get();
//    }
}
