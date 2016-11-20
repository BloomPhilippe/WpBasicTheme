<?php

class ContactForm
{

    function __construct()
    {
        //add Route for action
        add_action('wp_ajax_contact_form', array($this, 'contact_form'));
        add_action('wp_ajax_nopriv_contact_form', array($this, 'contact_form'));
    }

    //add callback ajax
    function contact_form()
    {
        $goodResponse = json_encode(array(
            'code' => 200,
            'message' => 'Message Envoye!',
        ));

        $badResponse = json_encode(array(
            'code' => 400,
            'message' => "le formulaire n 'est pas complet",
        ));

        parse_str($_GET['formData']);
        if (empty($name) || empty($mail) || empty($message)) {
            echo $badResponse;
        } else {
            $content = '<div>';
            $content .= '<p>Sujet : ' . $subject . '</p>';
            $content .= '<p>Nom : ' . $name . '</p>';
            $content .= '<p>Mail : ' . $mail . '</p>';
            $content .= '<p>Adresse : ' . $address . ', ' . $address2 . '</p>';
            $content .= '<p>Pays : ' . $country . '</p>';
            $content .= '<p>Phone : ' . $phone . '</p>';
            $content .= '<p>Message : ' . $message . '</p>';
            $content .= '</div>';
            $newMessage = array(
                'post_title' => 'Message de ' . $mail . ' concernant ' . $subject,
                'post_content' => $content,
                'post_status' => 'publish',
                'post_type' => 'message'
            );
            $newId = wp_insert_post($newMessage);

            $to = get_option('admin_email');
            $header = 'From: ' . get_option('blogname') . '<' . get_option('admin_email') . '>';
            wp_mail($to, $subject, $content, $header);
            echo $goodResponse;

        }
        exit();
    }
}


if (class_exists('ContactForm')) {
    $inst_contact = new ContactForm();
}