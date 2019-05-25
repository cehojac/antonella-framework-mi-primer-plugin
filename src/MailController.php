<?php
    namespace MPP;
          
    class MailController
    {
    
        public function __construct()
        {
    
        }

        public function wpdocs_email_friends($post_id)
        {
            $friends = 'bob@example.org, susie@example.org';
            wp_mail( $friends, "sally's blog updated", 'I just put something on my blog: http://blog.example.com' );
         
            return $post_id;
        }
    }