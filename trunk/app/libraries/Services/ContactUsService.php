<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 9/7/13
 * Time: 12:26 PM
 * To change this template use File | Settings | File Templates.
 */

class ContactUsService
{
    private $contactUsRepo;

    public function __construct()
    {
        $this->contactUsRepo = new ContactUsRepository();

    }

    public function createContactUs($name, $email, $subject, $message)
    {
        return $this->contactUsRepo->createContactUs($name, $email, $subject, $message);
    }

    public function getContactUs()
    {

    }
}