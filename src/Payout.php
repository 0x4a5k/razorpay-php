<?php


namespace Razorpay\Api;


class Payout extends Entity
{
    public function all($options = array())
    {
        return parent::all($options);
    }

    public function create($attributes = null)
    {
        return parent::create($attributes);
    }

    /**
     * @param string $id
     *
     * @return Entity
     * @throws Errors\BadRequestError
     */
    public function fetch($id)
    {
        return parent::fetch($id);
    }
}