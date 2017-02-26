<?php
define( 'BP_ENABLE_USERNAME_COMPATIBILITY_MODE', true );

function bp_custom_pagination_count() {
        if ( 'active' == $members_template->type )
            $pag = sprintf( __( 'Viewing member %1$s to %2$s (of %3$s active members)', 'buddypress' ), $from_num, $to_num, $total );
        else if ( 'popular' == $members_template->type )
            $pag = sprintf( __( 'Viewing member %1$s to %2$s (of %3$s members with friends)', 'buddypress' ), $from_num, $to_num, $total );
        else if ( 'online' == $members_template->type )
            $pag = sprintf( __( 'Viewing member %1$s to %2$s (of %3$s members online)', 'buddypress' ), $from_num, $to_num, $total );
        else
            $pag = sprintf( __( 'Viewing member %1$s to %2$s (of %3$s members)', 'buddypress' ), $from_num, $to_num, $total );
 
        return apply_filters( 'bp_members_pagination_count', $pag );
    }

/**
 * Change BuddyPress default Members landing tab.
 */
define('BP_DEFAULT_COMPONENT', 'profile' );
?>