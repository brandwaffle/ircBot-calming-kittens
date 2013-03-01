<?php
/**
 * Original Filename: CalmingKittens.php
 * User: brandwaffle
 * Created on: 2/28/13
 * Time: 7:41 PM
 */
class CalmingKittens{

    public function __construct(){
        Plugin_Manager::add_action( 'channel-message', array( $this, 'check_commands' ) );
    }

    public function check_commands( $username = '', $channel = '', $message = '' ){
        if( preg_match( '/^!calmdown/i', $message ) ){
            ircBot::send_channel_message( $channel, $username . 'You seem stressed. Maybe you should look at kittens http://farm5.staticflickr.com/4060/4647807839_8206b541fb_z.jpg' );
        }
    }
}
