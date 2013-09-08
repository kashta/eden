<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 9/7/13
 * Time: 8:04 PM
 * To change this template use File | Settings | File Templates.
 */

class SubscribeService
{
    private $subscribeRepo;

    public function __construct()
    {
        $this->subscribeRepo = new SubscribeRepository();
    }

    public function addSubscribe($email)
    {
        return $this->subscribeRepo->addSubscribeDetails($email);
    }
}