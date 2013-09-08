<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 9/7/13
 * Time: 8:03 PM
 * To change this template use File | Settings | File Templates.
 */

class SubscribeRepository
{


    public function addSubscribeDetails($email)
    {
        try {
            $sub = new Subscribe();
            $sub->email = $email;
            $sub->save();
            return $sub;
        } catch (Exception $e) {
            Log::error($e);
            throw $e;
        }
    }
}