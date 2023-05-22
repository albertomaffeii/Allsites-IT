<?php 
require_once 'authentication.php';
require_once 'classes/tools.php';
$tool = new tools();

// POSTS ---------------------------------------------------------------------------------------------------------------
// ADD Post
if(isset($_POST['post_add'])):

	$category_id		= $_POST['category_id'];
    $name				= $mysqli -> real_escape_string($_POST['name']);
    $slug				= $mysqli -> real_escape_string($_POST['slug']);
	$small_description	= $mysqli -> real_escape_string($_POST['small_description']);
    $description		= $mysqli -> real_escape_string($_POST['description']);
	$image				= $_FILES['image']['name'];

		if(!$image):
			$image	= 0;
		else:	
			// Rename this Image
			$image_extension = pathinfo($image, PATHINFO_EXTENSION);
			$filename = time() . '.' . $image_extension;
		endif;

	$image_size			= $_POST['image_size'];
    $meta_title			= $mysqli -> real_escape_string($_POST['meta_title']);
    $meta_description	= $mysqli -> real_escape_string($_POST['meta_description']);
    $meta_keyword		= $mysqli -> real_escape_string($_POST['meta_keyword']);
	$static_page		= $_POST['static_page'];
	$status				= $_POST['status'];
	$language			= $_POST['language'];

    
    $post_query_run = "INSERT INTO `allsites`.`posts` 
		(`category_id`, `name`, `slug`, `small_description`, `description`, `image`, `image_size`, `meta_title`, `meta_description`, `meta_keyword`, `static_page`, `status`, `language`) 
		VALUES ('$category_id', '$name', '$slug', '$small_description', '$description', '$filename', '$image_size', '$meta_title', '$meta_description', '$meta_keyword', '$static_page', '$status', '$language')";
			
	if ($mysqli -> query($post_query_run) === TRUE):

		//Salva imagem no servidor
		if(!$image == 0):
			//Cham a classe uploadfile()
			$tool->uploadfile($filename,'../libraries/posts/',$_FILES['image']['tmp_name']);
		endif;
		
		//Registered Succefully
		$_SESSION['message'] = "Post Created Successfully.";
		header("Location: post-view.php");
		exit(0);

	else:
		
		//Registered faillury
		$_SESSION['message'] = "Post Added Failed, check the entered data.";
		header("Location: post-add.php");
		exit(0);

	endif;
	
endif;

//DELETE Post
if(isset($_POST['post_delete'])):

	$post_id = $_POST['post_id'];

	$check_img_query = "SELECT * FROM posts WHERE id='$post_id' LIMIT 1";
	$img_res = $mysqli -> query($check_img_query);
	$res_data = $img_res -> fetch_array(MYSQLI_ASSOC);

	$image = $res_data['image'];
    
    $query = "DELETE FROM posts WHERE id='$post_id' limit 1";
	$query_run = $mysqli -> query($query);

	if ($query_run):
		if(file_exists('../libraries/posts/' . $image)):
			unlink('../libraries/posts/' . $image);
		endif;

		$_SESSION['message'] = "Post deleted successfully.";
		header("Location: post-view.php");
		exit(0);

	else:

		$_SESSION['message'] = "Delete failed, check the entered data.";
		header("Location: post-view.php");
		exit(0);

	endif;

endif;

//UPDATE Post
if(isset($_POST['post_update'])):

	$post_id			= $_POST['post_id'];
	$category_id		= $_POST['category_id'];
    $name				= $mysqli -> real_escape_string($_POST['name']);
    $slug				= $mysqli -> real_escape_string($_POST['slug']);
    $small_description	= $mysqli -> real_escape_string($_POST['small_description']);
    $description		= $mysqli -> real_escape_string($_POST['description']);
    $meta_title			= $mysqli -> real_escape_string($_POST['meta_title']);
    $meta_description	= $mysqli -> real_escape_string($_POST['meta_description']);
    $meta_keyword		= $mysqli -> real_escape_string($_POST['meta_keyword']);
	$static_page		= $_POST['static_page'];
	$status				= $_POST['status'];
	$old_filename		= $_POST['old_image'];
	$image_size			= $_POST['image_size'];
	$language			= $_POST['language'];

	// Handling image files
	$update_filename ="";
	$image = $_FILES['image']['name'];
	echo"<pre>
	var_dump($_POST);
	
	if(!empty($_FILES['image']['name'])):
		
		$image = $_FILES['image']['name'];
		
		if($image != NULL):
		
			// Rename this Image
			$image_extension = pathinfo($image, PATHINFO_EXTENSION);
			$filename = time() . '.' . $image_extension;

			$update_filename = $filename;
		else:
			$update_filename = $old_filename;
		endif;
    
		$post_query_run = "UPDATE `allsites`.`posts` SET `category_id` = '$category_id', 
		`name` = '$name', `slug` = '$slug', `small_description` = '$small_description', 
		`description` = '$description', `image` = '$update_filename', `image_size` = '$image_size', 
		`meta_title` = '$meta_title', `meta_description` = '$meta_description', `meta_keyword` = '$meta_keyword', 
		`static_page` = '$static_page', `status` = '$status', `language` = '$language' 
		WHERE id = '$post_id'";
		
		if ($mysqli -> query($post_query_run) === TRUE):	 
			if($image != NULL):				
				if(file_exists('../libraries/posts/' . $old_filename)):
					unlink('../libraries/posts/' . $old_filename);
				endif;				
				move_uploaded_file($_FILES['image']['tmp_name'], '../libraries/posts/' . $update_filename);				
			Endif;
			
			//Registered Succefully
			$_SESSION['message'] = "Post Updated Successfully.";
			header("Location: post-edit.php?code=". $tool->base64url_encode($post_id));
			exit(0);
		else:			
			//Registered faillury
			$_SESSION['message'] = "Update failed, check the entered data.";
			header("Location: post-edit.php?code=". $tool->base64url_encode($post_id));
			exit(0);
		endif;
	endif;
endif;

// CATEGORIES ---------------------------------------------------------------------------------------------------------------------------------------
// ADD Category
if(isset($_POST['AddCategory'])):

    $name				= $mysqli -> real_escape_string($_POST['name']);
    $slug				= $mysqli -> real_escape_string($_POST['slug']);
    $description		= $mysqli -> real_escape_string($_POST['description']);
    $meta_title			= $mysqli -> real_escape_string($_POST['meta_title']);
    $meta_description	= $mysqli -> real_escape_string($_POST['meta_description']);
    $meta_keyword		= $mysqli -> real_escape_string($_POST['meta_keyword']);
	$navbar_status		= $_POST['navbar_status'];
	$navbar_position	= $_POST['navbar_position'];
	$status				= $_POST['status'];
	$language			= $_POST['language'];
	$icon				= $_POST['icon'];
    
    $category_query_run = "INSERT INTO `allsites`.`categories` 
		(`name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `navbar_position`, `status`, `language`, `icon`) 
		VALUES ('$name', '$slug', '$description', '$meta_title', '$meta_description', '$meta_keyword', '$navbar_status', '$navbar_position', '$status', '$language', '$icon')";

	if ($mysqli -> query($category_query_run) === TRUE):
		
		//Registered Succefully
		$_SESSION['message'] = "Category Added Successfully.";
		header("Location: category-view.php");
		exit(0);

	else:
		
		//Registered faillury
		$_SESSION['message'] = "Category Added Failed, check the entered data.";
		header("Location: category-add.php");
		exit(0);

	endif;
	
endif;

//DELETE category
if(isset($_POST['category_delete'])):

	//Muda o status pra apagadao
	$category_id = $_POST['category_id'];
	
	// 2 -> Deleted
	$category_query_run = "UPDATE `allsites`.`categories` SET status='2' WHERE (`id` = '" . $category_id . "') LIMIT 1";

	$mysqli -> query($category_query_run);

		
	//Registered Succefully
	$_SESSION['message'] = "Category Deleted Successfully.";
	header("Location: category-view.php");
	exit(0);
	
endif;

//UPDATE Category
if(isset($_POST['category_update'])):

	$category_id		= $_POST['category_id'];
    $name				= $mysqli -> real_escape_string($_POST['name']);
    $slug				= $mysqli -> real_escape_string($_POST['slug']);
    $description		= $mysqli -> real_escape_string($_POST['description']);
    $meta_title			= $mysqli -> real_escape_string($_POST['meta_title']);
    $meta_description	= $mysqli -> real_escape_string($_POST['meta_description']);
    $meta_keyword		= $mysqli -> real_escape_string($_POST['meta_keyword']);
	$navbar_status		= $_POST['navbar_status'];
	$navbar_position	= $_POST['navbar_position'];
	$status				= $_POST['status'];
	$language			= $_POST['language'];
	$icon				= $_POST['icon'];
    
    $category_query_run = "UPDATE `allsites`.`categories` SET name = '$name', slug = '$slug', description = '$description', meta_title = '$meta_title', meta_description = '$meta_description', meta_keyword = '$meta_keyword', navbar_status = '$navbar_status', navbar_position = '$navbar_position', status = '$status', language = '$language', icon = '$icon' WHERE (id = '$category_id')";
	
		if ($mysqli -> query($category_query_run) === TRUE):
		
		//Registered Succefully
		$_SESSION['message'] = "Updated Successfully.";
		header("Location: category-view.php");
		exit(0);

	else:
		
		//Registered faillury
		$_SESSION['message'] = "Update failed, check the entered data.";
		header("Location: category-view.php");
		exit(0);

	endif;

endif;

// USERS --------------------------------------------------------------------------------------------------------------------------------------------
// ADD User
if(isset($_POST['AddUser'])):

    $fname		= $mysqli -> real_escape_string($_POST['fname']);
    $lname		= $mysqli -> real_escape_string($_POST['lname']);
    $uname		= $mysqli -> real_escape_string($_POST['uname']);
    $email		= $_POST['email'];
    $password	= $mysqli -> real_escape_string($_POST['password']);
    $role_as	= $_POST['role_as'];
	$status		= $_POST['status'];
    
    $user_query_run = "INSERT INTO `allsites`.`users` (`fname`, `lname`, `username`, `email`, `password`, `role_as`, `status`) VALUES ('$fname', '$lname', '$uname', '$email', '$password', 'role_as', 'status')";
	
	$mysqli -> query($user_query_run);
		
	//Registered Succefully
	$_SESSION['message'] = "User Added Successfully.";
	header("Location: register-view.php");
	exit(0);
	
endif;

//DELETE User
if(isset($_POST['user_delete'])):

	$user_id = $_POST['user_delete'];
    
    $user_query_run = "DELETE FROM `allsites`.`users` WHERE (`id` = '" . $user_id . "')";

	$mysqli -> query($user_query_run);
		
	//Registered Succefully
	$_SESSION['message'] = "User Deleted Successfully.";
	header("Location: register-view.php");
	exit(0);
	
endif;

//UPDATE User
if(isset($_POST['UpdateUser'])):

	$user_id	= $_POST['user_id'];
    $fname		= $mysqli -> real_escape_string($_POST['fname']);
    $lname		= $mysqli -> real_escape_string($_POST['lname']);
    $uname		= $mysqli -> real_escape_string($_POST['uname']);
    $email		= $_POST['email'];
    $password	= $mysqli -> real_escape_string($_POST['password']);
    $role_as	= $_POST['role_as'];
	$status		= $_POST['status'];
    
    $user_query_run = "UPDATE `allsites`.`users` SET `fname` = '$fname', `lname` = '$lname', `username` = '$uname', `email` = '$email', `password` = '$password', `role_as` = '$role_as', `status` = '$status' WHERE (`id` = '$user_id')";
	
	if ($mysqli -> query($user_query_run) === TRUE):
		
		//Registered Succefully
		$_SESSION['message'] = "Updated Successfully.";
		header("Location: register-view.php");
		exit(0);

	else:
		
		//Registered faillury
		$_SESSION['message'] = "Update failed, check the entered data.";
		header("Location: register-view.php");
		exit(0);

	endif;

endif;

?>