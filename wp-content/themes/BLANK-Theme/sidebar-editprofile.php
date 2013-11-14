<aside id='editprofile-sidebar'>
<?php
		global $user_ID;
		if ($user_ID) {
		$user_info = get_userdata($user_ID);
		$id = $user_info->ID;
		}

		if ( is_user_logged_in() ) {
    		
    		if(isset($_POST['user_avatar_edit_submit']))
    	{
           do_action('edit_user_profile_update', $id);
      	}

	echo '<form id="your-profile" action="" method="post" enctype="multipart/form-data">';

    	$myAv = new simple_local_avatars();
    	$myAv->edit_user_profile($user_info);
    
   echo '<input type="submit" name="user_avatar_edit_submit" value="OK"/>';
	
	echo '</form>';
		} else {
			echo '<p id="loginmessage">Please log in above!</p>';
		}
 
	?>
</aside>