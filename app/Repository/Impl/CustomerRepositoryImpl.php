<?php


namespace App\Repository\Impl;


use App\Customer;
use App\Repository\CustomerRepository;
use App\Repository\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }

}
