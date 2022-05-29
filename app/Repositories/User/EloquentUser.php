<?php
/**
 * Created by PhpStorm.
 * User: lorence
 * Date: 25/05/2022
 * Time: 20:15
 */

namespace App\Repositories\User;

use App\Helpers\AppHelper;
use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Eloquent\BaseRepository;

class EloquentUser extends BaseRepository implements UserRepository {

    /* MODEL
     * @return string
     */
    public function model()
    {
        return "App\\Models\\User";
    }

    public function with($relations)
    {
        return parent::with($relations);
    }

    public function getAll()
    {
        return $this->model->get();
    }

    public function create(array $attributes = [])
    {
        return parent::create($attributes);
    }

    public function delete($id) {
        return parent::delete($id);
    }

    public function update(array $attributes, $id) {
        return parent::update($attributes, $id);
    }
}