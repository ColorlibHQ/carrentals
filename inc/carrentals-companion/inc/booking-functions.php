<?php 
/**
 * @Packge     : CarRentals Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( ! defined( 'WPINC' ) ) {
    die;
}

// Car Bokking scripts enqueue
add_action( 'admin_enqueue_scripts', 'carrentals_booking_scripts' );
function carrentals_booking_scripts() {

    wp_enqueue_style( 'booking-style', CARRENTALS_COMPANION_URL . 'css/booking.css', array(), '1.0', false );
    wp_enqueue_script( 'repeater-script', CARRENTALS_COMPANION_URL . 'js/repeater.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'booking-script', CARRENTALS_COMPANION_URL . 'js/booking.js', array('jquery'), '1.0', true );
}


// Register car booking post type
function carrentals_custom_init() {
    $args = array(
      'public' => false,
      'label'  => esc_html__( 'Car Booking', 'carrentals' )
    );
    register_post_type( 'carbooking', $args );
}
add_action( 'init', 'carrentals_custom_init' );

// remove post type menu
function carrentals_remove_menu_items() {

    remove_menu_page( 'edit.php?post_type=carbooking' );

}
add_action( 'admin_menu', 'carrentals_remove_menu_items' );

// Add admin menu for car booking list
add_action( 'admin_menu', 'carrentals_admin_menu' );

function carrentals_admin_menu() {
    add_menu_page( esc_html__( 'Car Booking Lists', 'carrentals' ), esc_html__( 'Car Booking', 'carrentals' ), 'manage_options', 'carrental-car-booking', 'carrental_booking_admin_page', '
dashicons-calendar-alt', 6  );
}

// Car booking admin page
function carrental_booking_admin_page() {
?>
  
    <div class="booking-settings-nav">
        <ul>
            <li class="tablist" ><?php esc_html_e( 'List', 'carrentals' ); ?></li>
            <li class="tabsettings"><?php esc_html_e( 'Form Settings', 'carrentals' ); ?></li>
        </ul>
    </div>


    <div class="booking-area booking-lists" style="display:block;">
        <?php carrental_booking_lists(); ?>
    </div>
    <div class="booking-area booking-settings" style="display:none">
        <?php
        // Form handling
        carrental_booking_settings_form_data(); 
        // Form
        carrental_booking_settings_form();
        ?>

    </div>

<?php

}

// Booking settings form
function carrental_booking_settings_form() {
?>
<h2 style="text-align: center;"><?php esc_html_e( 'Settings', 'carrentals' ); ?></h2>
<form action="#" method="post">
    
    <!-- Car model -->
    <div id="repeater">
        <div class="repeater-heading">
            <h5 class="pull-left"><?php esc_html_e( 'Car Model Settings', 'carrentals' ); ?></h5>
            <span class="btn btn-primary pt-5 pull-right repeater-add-btn">
                <?php esc_html_e( 'Add Model Dropdown', 'carrentals' ); ?>
            </span>
        </div>
        <div class="clearfix"></div>
        <?php 
        
        $carmodel = unserialize( get_option( 'carmodel' ) );

        if( is_array( $carmodel ) ):

        foreach( $carmodel as $val ) :

        ?>
        <!-- Repeater Items -->
        <div class="items" data-group="carmodel">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Car Model', 'carrentals' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="<?php echo $val; ?>" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'carrentals' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php 
        endforeach;
        else:
        ?>
        <!-- Repeater Items -->
        <div class="items" data-group="carmodel">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Car Model', 'carrentals' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'carrentals' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        endif;
        ?>

    </div>
    
    <!-- Pickup -->
    <div id="pickup">
        <div class="repeater-heading">
            <h5 class="pull-left"><?php esc_html_e( 'Pickup Settings', 'carrentals' ); ?></h5>
            <span class="btn btn-primary pt-5 pull-right repeater-add-btn">
            <?php esc_html_e( 'Add Pickup Dropdown', 'carrentals' ); ?>
            </span>
        </div>
        <div class="clearfix"></div>

        <?php 
        
        $pickup = unserialize( get_option( 'pickup' ) );

        if( is_array( $pickup ) && count( $pickup ) > 0 ):

        foreach( $pickup as $val ) :

        ?>
        <div class="items" data-group="pickup">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Pickup', 'carrentals' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="<?php echo $val; ?>" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'carrentals' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php 
        endforeach;
        else:
        ?>
        <div class="items" data-group="pickup">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Pickup', 'carrentals' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'carrentals' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        endif;
        ?>


    </div>
    <!-- Pick up End -->
    
    <!-- drop off -->
    <div id="dropoff">
        <div class="repeater-heading">
            <h5 class="pull-left"><?php esc_html_e( 'Drop Off Settings', 'carrentals' ); ?></h5>
            <span class="btn btn-primary pt-5 pull-right repeater-add-btn">
            <?php esc_html_e( 'Add Drop off Dropdown', 'carrentals' ); ?>
            </span>
        </div>
        <div class="clearfix"></div>

        <?php 
        
        $dropoff = unserialize( get_option( 'dropoff' ) );

        if( is_array( $dropoff ) ):

        foreach( $dropoff as $val ) :

        ?>
        <!-- Repeater Items -->
        <div class="items" data-group="dropoff">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Drop Off', 'carrentals' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="<?php echo $val; ?>" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'carrentals' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php 
        endforeach;
        else:
        ?>
        <!-- Repeater Items -->
        <div class="items" data-group="dropoff">
            <!-- Repeater Content -->
            <div class="item-content">
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><?php esc_html_e( 'Drop Off', 'carrentals' ); ?></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" data-name="name">
                    </div>
                </div>
            </div>
            <!-- Repeater Remove Btn -->
            <div class="pull-right repeater-remove-btn">
                <span class="btn btn-danger remove-btn">
                <?php esc_html_e( 'Remove', 'carrentals' ); ?>
                </span>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        endif;
        ?>
    </div>
    <!-- drop off End -->
    <button type="submit" class="booking-submit" name="updateopt"><?php esc_html_e( 'Submit', 'carrentals' ); ?></button>
</form>
<?php
}
// Booking Settings form data
function carrental_booking_settings_form_data() {

    if( isset( $_POST['updateopt'] ) ) {

        // Car Model
        if( isset( $_POST[ 'carmodel' ] ) ) {

            $carmodel = serialize( $_POST[ 'carmodel' ] );

            update_option( 'carmodel', $carmodel );

        }
        // Pickup
        if( isset( $_POST[ 'pickup' ] ) ) {

            $pickup = serialize( $_POST[ 'pickup' ] );
            update_option( 'pickup', $pickup );

        }
        // Dropoff
        if( isset( $_POST[ 'dropoff' ] ) ) {
            $dropoff = serialize( $_POST[ 'dropoff' ] );
            update_option( 'dropoff', $dropoff );
        }
    }


}

// Booking List
function carrental_booking_lists() {
    $args = array(
        'post_type'     => 'carbooking',
        'posts_per_page' => '-1'
    );

    $booking_lists = get_posts( $args );
    
    echo '<div class="booking-list"><ul>';
    echo '<h2 style="text-align:center;">Booking List</h2>';

    carrental_delete_booking();

    foreach( $booking_lists as $list ) {

    $carmodel   = get_post_meta( $list->ID, 'carrentals_carmodel', true );
    $pikdate    = get_post_meta( $list->ID, 'carrentals_pikdate', true );


    if( $carmodel ) {
        echo '<li style="padding: 8px;background-color:#f8f8f8;">'.esc_html( $carmodel ).'<span style="margin-left: 30px;">'.esc_html( $pikdate ).'</span><span style="float:right;"><button class="view-booking" data-target="modal-'.esc_attr( $list->ID ).'" >'.esc_html__( 'View', 'carrentals' ).'</button></span>'.carrental_booking_admin_modal( $list->ID ).'</li>';
    }
        
    }
    echo '</ul></div>';

    ?>
    <script>
        ( function( $ ) {

            $( '.view-booking' ).on( 'click', function() {

                var modal = $(this).attr( 'data-target' );

                $('.' + modal ).show();

            });

            $( '.close-btn' ).on( 'click', function() {

                var modal = $(this).parent();

                $( modal ).hide();

            });

        } )( jQuery );
    </script>
    <?php
}
    
// Booking view modal
function carrental_booking_admin_modal( $id ) {

    $carmodel     = get_post_meta( $id, 'carrentals_carmodel', true );
    $pickupnumber = get_post_meta( $id, 'carrentals_pickupnumber', true );
    $pikdate    = get_post_meta( $id, 'carrentals_pikdate', true );
    $dropnumber = get_post_meta( $id, 'carrentals_dropnumber', true );
    $dropdate   = get_post_meta( $id, 'carrentals_dropdate', true );
    $username   = get_post_meta( $id, 'carrentals_username', true );
    $useremail  = get_post_meta( $id, 'carrentals_useremail', true );
    $userphone  = get_post_meta( $id, 'carrentals_userphone', true );
    
?>
    <div class="booking-modal modal-<?php echo esc_attr( $id ); ?>" style="position:absolute;top:0;background-color:#0003;top:0;bottom:0;left:0;right:0;display:none;">
        <div class="close-btn">Close</div>
        <div style="background-color: #f9f9f9;padding: 10px;max-width: 300px;margin: 0 auto;margin-top: 10%;">
            <h3 class="text-center"><?php esc_html_e( 'Car Booking Info', 'carrentals' ) ?></h3>
            <ul class="modal-list">
                <li><strong><?php esc_html_e( 'Car Model:', 'carrentals' ); ?></strong> <?php echo esc_html( $carmodel ); ?> </li>            
                <li><strong><?php esc_html_e( 'Pick Up Number:', 'carrentals' ); ?></strong> <?php echo esc_html( $pickupnumber ); ?> </li>            
                <li><strong><?php esc_html_e( 'Pick Up Date:', 'carrentals' ); ?></strong> <?php echo esc_html( $pikdate ); ?> </li>            
                <li><strong><?php esc_html_e( 'Drop Number:', 'carrentals' ); ?></strong> <?php echo esc_html( $dropnumber ); ?> </li>            
                <li><strong><?php esc_html_e( 'Drop Date:', 'carrentals' ); ?></strong> <?php echo esc_html( $dropdate ); ?> </li>            
                <li><strong><?php esc_html_e( 'Name:', 'carrentals' ); ?></strong> <?php echo esc_html( $username ); ?> </li>            
                <li><strong><?php esc_html_e( 'Email:', 'carrentals' ); ?> </strong><?php echo esc_html( $useremail ); ?> </li>            
                <li><strong><?php esc_html_e( 'Phone:', 'carrentals' ); ?></strong> <?php echo esc_html( $userphone ); ?> </li>            
            </ul>

            <form action="#" method="post">
                <input type="hidden" name="bookingid" value="<?php echo absint( $id ) ?>" >
                <button name="deletebooking" class="deletebooking" type="submit">Delete</button>                
            </form>
        </div>
    </div>
<?php
}

// Booking Form Data 
function carrental_booking_form_data() {

    $error = new WP_Error();

    if( isset( $_POST['booking_submit'] )  ) {

        // 
        if( ! empty( $_POST['carmodel'] ) ) {
            $carmodel = $_POST['carmodel'];
        } else {
            $error->add( 'field', __( 'Car model field can\'t be empty.', 'carrentals' ) );
        }

        // 
        if( ! empty( $_POST['pickupNumber'] ) ) {
            $pickupNumber = $_POST['pickupNumber'];
        } else {
            $error->add( 'field', __( 'Pickup field can\'t be empty.', 'carrentals' ) );
        }
        // 
        if( ! empty( $_POST['pikdate'] ) ) {
            $pikdate = $_POST['pikdate'];
        } else {
            $error->add( 'field', __( 'Pickup Date field can\'t be empty.', 'carrentals' ) );
        }
        // 
        if( ! empty( $_POST['dropNumber'] ) ) {
            $dropnumber = $_POST['dropNumber'];
        } else {
            $error->add( 'field', __( 'Drop off field can\'t be empty.', 'carrentals' ) );
        }

        // 
        if( ! empty( $_POST['dropdate'] ) ) {
            $dropdate = $_POST['dropdate'];
        } else {
            $error->add( 'field', __( 'Drop off date field can\'t be empty.', 'carrentals' ) );
        }

        // 
        if( ! empty( $_POST['userName'] ) ) {
            $username = $_POST['userName'];
        } else {
            $error->add( 'field', __( 'Name field can\'t be empty.', 'carrentals' ) );
        }
        // 
        if( ! empty( $_POST['userEmail'] ) ) {
            $useremail = $_POST['userEmail'];
        } else {
            $error->add( 'field', __( 'Email field can\'t be empty.', 'carrentals' ) );
        }
        // 
        if( ! empty( $_POST['userPhone'] ) ) {
            $userphone = $_POST['userPhone'];
        } else {
            $error->add( 'field', __( 'Phone number field can\'t be empty.', 'carrentals' ) );
        }

        if( 1 > count( $error->get_error_messages() ) ) {

            $args = array(
                'post_type'     => 'carbooking',
                'post_title'    => sanitize_text_field( $carmodel ),
                'post_status'   => 'publish',
            );

            $insert_ID = wp_insert_post( $args );

            if( $insert_ID ) {

                update_post_meta( $insert_ID, 'carrentals_carmodel', sanitize_text_field( $carmodel ) );
                update_post_meta( $insert_ID, 'carrentals_pickupnumber', sanitize_text_field( $pickupNumber ) );
                update_post_meta( $insert_ID, 'carrentals_pikdate', sanitize_text_field( $pikdate ) );
                update_post_meta( $insert_ID, 'carrentals_dropnumber', sanitize_text_field( $dropnumber ) );
                update_post_meta( $insert_ID, 'carrentals_dropdate', sanitize_text_field( $dropdate ) );
                update_post_meta( $insert_ID, 'carrentals_username', sanitize_text_field( $username ) );
                update_post_meta( $insert_ID, 'carrentals_useremail', sanitize_text_field( $useremail ) );
                update_post_meta( $insert_ID, 'carrentals_userphone', sanitize_text_field( $userphone ) );
            }

        } else {
            return $error->get_error_messages();
        }

    }

}
// Delete Booking 
function carrental_delete_booking() {

    if ( isset( $_POST['deletebooking'] ) && isset( $_POST['bookingid'] ) ) {
        $delete = wp_delete_post( absint( $_POST['bookingid'] ) );

        if( $delete ) {
            echo '<h4 style="text-align:center;">'.esc_html__( 'Successfully Deleted', 'carrentals' ).'</h4>';
        }

    }
    
}

