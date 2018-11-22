<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/5
 * Time: 下午1:03
 */
namespace App\Model\Base;

use Illuminate\Database\Eloquent\Model;

abstract class Feisudu extends Model
{
    protected $connection = 'mysql';
}
