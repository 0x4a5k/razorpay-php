<?php


namespace Razorpay\Api;

/**
 * Class Contact
 * @package Razorpay\Api
 *
 * @property string $id
 * @property string $name
 * @property string $contact
 * @property string $email
 * @property string $type
 * @property string $reference_id
 * @property mixed  $batch_id
 * @property bool   $active
 * @property array  $notes
 */
class Contact extends Entity
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

    public function edit($attributes = null)
    {

        $entityUrl = $this->getEntityUrl() . $this->id;

        return $this->request('PATCH', $entityUrl, $attributes);
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