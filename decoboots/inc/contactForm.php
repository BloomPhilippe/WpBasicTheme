<?php

class ContactForm{

    function __construct(){
        //add Route for action
        add_action( 'wp_ajax_contact_form', array($this, 'contact_form') );
        add_action( 'wp_ajax_nopriv_contact_form', array($this, 'contact_form') );
    }

    //add callback ajax
    function contact_form(){
        var_dump('test');
    }
}


if (class_exists('ContactForm')){
    $inst_contact = new ContactForm();
}