<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 9/7/13
 * Time: 12:25 PM
 * To change this template use File | Settings | File Templates.
 */

class ContactUsRepository
{

    public function createContactUs($name, $email, $subject, $message)
    {
        try {
            $contactUs = new ContactUs();
            $contactUs->name = $name;
            $contactUs->email = $email;
            $contactUs->subject = $subject;
            $contactUs->message = $message;
            return $contactUs;
        } catch (Exception $e) {
            Log::error($e);
            throw $e;
        }
    }

}