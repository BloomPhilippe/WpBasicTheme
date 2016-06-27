<?php

class ContactForm{

    function __construct(){
        //add Route for action
        add_action( 'wp_ajax_contact_form', array($this, 'contact_form') );
        add_action( 'wp_ajax_nopriv_contact_form', array($this, 'contact_form') );
    }

    //add callback ajax
    function contact_form(){
        parse_str($_GET['formData']);
        if (empty($name) || empty($mail) || empty($message)){
            echo "Erreur : le formulaire n'est pas complet";
        }else{
            $content = '<div>';
            $content.= '<p>Nom : ' . $name . '</p><p>Mail : ' . $mail . '</p><p>Phone : ' . $phone .'</p><p>Message : ' . $message . '</p>';
            $content.= '</div>';

            $newMessage = array(
                'post_title' => $mail,
                'post_content' => $content,
                'post_status' => 'publish',
                'post_type' => 'message'
            );

            $newId = wp_insert_post($newMessage);
        }
    }
}


if (class_exists('ContactForm')){
    $inst_contact = new ContactForm();
}