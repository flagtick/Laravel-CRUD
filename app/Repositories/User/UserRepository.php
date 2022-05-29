<?php
/**
 * Created by PhpStorm.
 * User: lorence
 * Date: 25/05/2022
 * Time: 20:15
 */

namespace App\Repositories\User;


interface UserRepository
{
    /** Show all items */
    public function getAll();

    /** Create new item */
    public function create(array $attributes = []);

    /** Update the existed item */
    public function update(array $attributes, $id);

    /** Delete the existed item */
    public function delete($id);
}