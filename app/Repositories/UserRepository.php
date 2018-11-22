<?php
/**
 * Created by PhpStorm.
 * User: hongcoo
 * Date: 2018/10/4
 * Time: 下午3:12
 */

namespace App\Repositories;
use App\Admin;

class UserRepository implements BaseRepository
{
    protected $user;

    /**
     * UserRepository constructor.
     * @param Admin $user
     */
    public function __construct(Admin $user)
    {
        $this->user = $user;
    }

    /**
     * @param $id
     * @return array
     */
    public function getIdLowerThan($id)
    {
        return $this->user
            ->where('id', '<', $id)
            ->orderBy('id')
            ->get()
            ->toArray();
    }

}
