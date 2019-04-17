<?php


namespace Razorpay\Api;

/**
 * Class FundAccount
 * @package Razorpay\Api
 *
 * @property string $id
 * @property string $contact_id
 * @property string $account_type
 * @property bool   $active
 */
class FundAccount extends Entity
{
    public function activate()
    {
        $this->active = true;
        $entityUrl    = $this->getEntityUrl() . $this->id;

        return $this->request('PATCH', $entityUrl, array('active' => true));
    }

    public function all($options = array())
    {
        return parent::all($options);
    }

    public function create($attributes = null)
    {
        return parent::create($attributes);
    }

    public function deactivate()
    {
        $this->active = false;
        $entityUrl    = $this->getEntityUrl() . $this->id;

        return $this->request('PATCH', $entityUrl, array('active' => false));
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