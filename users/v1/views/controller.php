<?php
error_reporting(0);
require_once ("../include/initialize.php");
$user=new User();
@$result=$user::checkAuthentication($_SESSION['username']);
if(!$result) {
  redirect(web_root.'login.php?login=true');
}


$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {

  case 'insert';
    register_user();    //register new user FROM Admin Panel
  break;

  case 'update_info';
    update_user_info();   //update User info
  break;

  case 'settings';
    save_system_settings();   //update system settings with ID 1 UNIQUE
  break;

  case 'new_blog';
    save_new_blog();  //create new blog inf
  break;

  case 'update_blog';
    update_blog_info();   //blog updating info
  break;

  case 'rej';
    delete_blog();  //blog discards
  break;

  case 'appr';
    restore_blog(); // restore deleted
  break;

  case 'add_event_process';
    add_new_event();  //new scheduled event
  break;

  case 'delete';
    delete_event(); //delete eventi
  break;

  case 'restore';
    restore_event(); // restore event del
  break;

  case 'trash_user';
    trash_user();   // revoke user account
  break;

  case 'restore_user';
    restore_user();   // Grant access to user account
  break;

  case 'update_event';
    update_event_info();    //update event info
  break;

  case 'add_position';
    add_position();   //new staff position
  break;

  case 'submit_contact';
    submit_contact();   //new contact us qry
  break;

  case 'trash_position';
    delete_position();   //new contact us qry
  break;

  case 'restore_position';
  restore_position(); //   //new contact us qry
break;

case 'update_password';
  update_password(); //new pwd password
break;

case 'reset';
  reset_password(); //set new pwd password
break;
  

  default:
    //echo '404';
    // redirect(web_root."404");
}


function register_user()
{
  if(isset($_POST['send_user']))
  {
    if (!empty($_POST['first_name'])&& !empty($_POST['last_name']) ) {

      //document file upl,load
      $file= $_FILES["profile_image"]["name"];
      $tempDir= $_FILES["profile_image"]["tmp_name"];
      
      // get the image extension
      $extension_cover = substr($file,strlen($file)-4,strlen($file));
      // allowed extensions
      $allowed_cover_extensions = array(".jpeg",".jpg",".jpeg",".png",".gif");

      if(!in_array($extension_cover,$allowed_cover_extensions))
      {   

       redirect(web_root."index.php?route=new_user");
       echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
       set_flag("WRONG_INPUT_INVALID_IMAGE_FORMAT_REGUSER");

     } else {

      $upload_dir="../assets/images/";

      $upload_name=$file;
      $toDir= preg_replace('/\s+/', '_', $upload_name);
      move_uploaded_file($tempDir,$upload_dir.$toDir);

      $user=new User();   
      $user->id          = "";
      $user->first_name       =   $_POST['first_name'];
      $user->last_name =   $_POST['last_name'];
      $user->gender       =   $_POST['customRadio2'];
      $user->tel_number =   $_POST['tel_number'];
      $user->address       =   $_POST['city'].', '. $_POST['province'].', '.$_POST['country'];
      $user->type =     $_POST['user_type'];
      $user->profile_img       =   preg_replace('/\s+/', '_', $upload_name);
      $user->show_card       =   $_POST['show_card'];
      $user->username       =   $_POST['username'];
      $user->password =   "00000";
      $user->last_login       =   date('Y-m-d H:i:s');
      $user->joined_date       =   date('Y-m-d H:i:s');
      $user->created_at =date('Y-M-d H:i:s');
      $user->last_update =   date('Y-m-d H:i:s');
      $user->create();
      message("User ".$_POST['username']." is Created Successfully ".date('Y-m-d H:i:s'), "success");
      redirect(web_root."index.php?route=new_user");
      set_flag("CREATE_USER_ACCOUNT");
    } //end not file empty
  }// end check fields empty 
  else {
        // return false;
      message("Someting Went wrong ".date('Y-m-d H:i:s'), "error");
    redirect(web_root."index.php?route=new_user");
    set_flag("WRONG_INFO_UNKNOWN_REG_USER");
  }     
} //ednf if send user
} //end register

function trash_user() {
    $user=new User(); 
    $user->show_card             =   "0";
    $user->update($_GET['id']);
    message("User Trashed on ".date('Y-m-d H:i:s'), "success");
  redirect(web_root."index.php?route=users_management");
  set_flag("USER_PROFILE_DELETE");
}

function reset_password() {
  $user=new User(); 
  $default="00000";
  $user->password  =   md5($default);
  $user->update($_GET['id']);
  message("User Password resetted Successfully on ".date('Y-m-d H:i:s'), "success");
redirect(web_root."index.php?route=users_management");
set_flag("USER_PASSWORD_RESET");
}

function restore_user() {
  $user=new User(); 
  $user->show_card             =   "1";
  $user->update($_GET['id']);
  message("User restored on ".date('Y-m-d H:i:s'), "success");
redirect(web_root."index.php?route=users_management");
set_flag("RESTORE_USER_PROFILE");
}


function update_user_info() {

   //document file upl,load
 $file= $_FILES["profile_image"]["name"];
 $tempDir= $_FILES["profile_image"]["tmp_name"];

   // get the image extension
 $extension_cover = substr($file,strlen($file)-4,strlen($file));
   // allowed extensions
 $allowed_cover_extensions = array(".jpeg",".jpg",".jpeg",".png",".gif");

 if(!in_array($extension_cover,$allowed_cover_extensions))
 {   
  message("Someting Went wrong ".date('Y-m-d H:i:s'), "error");
  redirect(web_root."index.php?route=users_management");
  echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
  set_flag("WRONG_INPUT_INVALID_IMAGE_FORMAT_UPDTUSER");
} else {

 $upload_dir="../assets/images/";
 $upload_name=preg_replace('/\s+/', '_', $file);
 $toDir= preg_replace('/\s+/', '_', $upload_name);
 move_uploaded_file($tempDir,$upload_dir.$toDir);  

 $user=new User();
 $user->first_name       =   $_POST['first_name'];
 $user->last_name =   $_POST['last_name'];
    //$user->gender       =   $_POST['gender'];
 $user->tel_number =   $_POST['tel_number'];
 $user->type =     $_POST['user_type'];
 $user->show_card       =   $_POST['show_card'];
 $user->username       =   $_POST['username'];
 $user->profile_img       =   preg_replace('/\s+/', '_', $upload_name);
 $user->last_update =date('Y-M-d H:i:s');
 $user->update($_POST['updatd_id']);
 message("User info Updated Successfully ".date('Y-m-d H:i:s'), "success");
 redirect(web_root."index.php?route=users_management");
 set_flag("USER_INFO_UPDATE");
  }
}


function save_system_settings() {

  if (isset($_FILES['slider'])) {

  //document file upl,load
   $file= $_FILES["slider"]["name"];
   $tempDir= $_FILES["slider"]["tmp_name"];
   
   // get the image extension
   $extension_cover = substr($file,strlen($file)-4,strlen($file));
   // allowed extensions
   $allowed_cover_extensions = array(".jpeg",".jpg",".jpeg",".png",".gif");

   if(!in_array($extension_cover,$allowed_cover_extensions))
   {
    redirect(web_root."index.php?route=system_settings");
    message("Someting Went wrong ".date('Y-m-d H:i:s'), "error");
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    set_flag("WRONG_INPUT_INVALID_IMAGE_FORMAT_SYSSETTINGS");
  }
}

// school fee file handling requirements
if (isset($_FILES['fees'])) {

  //document file upl,load
   $file1= $_FILES["fees"]["name"];
   $tempDir1= $_FILES["fees"]["tmp_name"];
   
   // get the image extension
   $extension_cover1 = substr($file,strlen($file)-4,strlen($file));
   // allowed extensions
   $allowed_cover_extensions1 = array(".xls",".pdf",".docx");

   if(!in_array($extension_cover1,$allowed_cover_extensions1))
   {
    redirect(web_root."index.php?route=system_settings");
    message("Someting Went wrong ".date('Y-m-d H:i:s'), "error");
    echo "<script>alert('Invalid format. Only Docx / Xls/ PDF format allowed');</script>";
    set_flag("WRONG_INPUT_FEES_HANDLING");
  }
}

//Image handling
$upload_dir="../assets/images/sliders/";
$upload_name=preg_replace('/\s+/', '_', $file);
move_uploaded_file($tempDir,$upload_dir.$upload_name);

$file=$_FILES['slider']['name'];

//Fees file handling

$upload_dir1="../assets/files/";
$upload_name1=preg_replace('/\s+/', '_', $file1);
move_uploaded_file($tempDir1,$upload_dir1.$upload_name1);


if($file!="") {
  $settings=new Settings();
  $settings->historical       =   $_POST['histo'];  
  $settings->academic_start       =   $_POST['academic'];
  $settings->about_us =   $_POST['about_us'];
  $settings->mission =   $_POST['mission'];
  $settings->vision =   $_POST['vision'];
  $settings->our_values =   $_POST['values'];
  $settings->contacts_details =   $_POST['contacts_details'];
  $settings->email =   $_POST['email'];
  $settings->company_address =   $_POST['company_address'];
  $settings->front_slider =   preg_replace('/\s+/', '_', $upload_name);
  $settings->last_update =date('Y-m-d H:i:s');
  $settings->update('1');
  message("System settings Updated ".date('Y-m-d H:i:s'), "success");
  set_flag("UPDATE_SETTINGS_WITH_IMAGE1");

} elseif($file1!="") {
  
  $settings=new Settings();
  $settings->historical       =   $_POST['histo'];  
  $settings->academic_start       =   $_POST['academic'];
  $settings->about_us =   $_POST['about_us'];
  $settings->mission =   $_POST['mission'];
  $settings->vision =   $_POST['vision'];
  $settings->our_values =   $_POST['values'];
  $settings->contacts_details =   $_POST['contacts_details'];
  $settings->email =   $_POST['email'];
  $settings->company_address =   $_POST['company_address'];
  $settings->fees_doc =   preg_replace('/\s+/', '_', $upload_name1);
  $settings->last_update =date('Y-m-d H:i:s');
  $settings->update('1');
  message("System settings Updated ".date('Y-m-d H:i:s'), "success");
  set_flag("UPDATE_SETTINGS_WITH_IMAGE2");

} else {
  $settings=new Settings();
  $settings->historical       =   $_POST['histo'];  
  $settings->academic_start       =   $_POST['academic'];
  $settings->about_us =   $_POST['about_us'];
  $settings->mission =   $_POST['mission'];
  $settings->vision =   $_POST['vision'];
  $settings->our_values =   $_POST['values'];
  $settings->contacts_details =   $_POST['contacts_details'];
  $settings->email =   $_POST['email'];
  $settings->company_address =   $_POST['company_address'];
  $settings->last_update =date('Y-m-d H:i:s');
  $settings->update('1');
}
message("System settings Updated ".date('Y-m-d H:i:s'), "success");
redirect(web_root."index.php?route=system_settings"); 
set_flag("UPDATE_SETTINGS"); 
}



function new_permission() 
{
  if(isset($_POST['save_permission']))
  {
    $permission=new Permission();
    $permission_name = preg_replace('/\s+/', '_', $_POST['permission_name']);
    $permission->id   =   "";
    $permission->permission_name = $permission_name;
    $permission->description = $_POST['description'];
    $permission->operations = $permission_name;
    $permission->create();    
    redirect(web_root."index.php?route=add_permission");
  }
}



function update_blog_info() {
  
  if(isset($_POST['update_blog']))
  {
    if (!empty($_POST['title']) && !empty($_POST['id_blog'])) {

    //document file upl,load
      $file= $_FILES["thumbnail"]["name"];
      $tempDir= $_FILES["thumbnail"]["tmp_name"];

    // get the image extension
      $extension_cover = substr($file,strlen($file)-4,strlen($file));
    // allowed extensions
      $allowed_cover_extensions = array(".jpeg",".jpg",".jpeg",".png",".gif");

      if(!in_array($extension_cover,$allowed_cover_extensions))
      {

       redirect(web_root."index.php?route=active_blogs");
       set_flag("WRONG_INPUT_INVALID_IMAGE_FORMAT_UPDTBLOG");
       //echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";

     } else {

      $upload_dir="../assets/images/blog/";

      $upload_name=$file;
      move_uploaded_file($tempDir,$upload_dir.$upload_name);

      $post=new Blog();     
      $post->title             =   $_POST['title'];
      //$post->description       =   $_POST['description'];
      $post->description       =   $_POST['description2'];
      $post->thumbnail         =   preg_replace('/\s+/', '_', $upload_name);
      $post->author            =   "njewe";
      $post->status            =   $_POST['status'];
      $post->last_update       =   date('Y-m-d H:i:s');  
      $post->update($_POST['id_blog']);
      message("Blog info updated ".date('Y-m-d H:i:s'), "success");
      redirect(web_root."index.php?route=active_blogs");
      set_flag("UPDATE_BLOG_INFO");
      }        
    } 
  }
}

function delete_blog(){
    $post=new Blog();     
    $post->status             =   "0";
    $post->update($_GET['id']);
    message("Blog is Deleted Successfully ".date('Y-m-d H:i:s'), "success");
    redirect(web_root."index.php?route=active_blogs");
    set_flag("DELETE_BLOG_INFO");
}

function restore_blog() {
  $post=new Blog();     
  $post->status             =   "1";
  $post->update($_GET['id']);
  message("Blog restored Successfully ".date('Y-m-d H:i:s'), "success");
  redirect(web_root."index.php?route=active_blogs");
  set_flag("RESTORE_DEL_BLOG");
}

function delete_event() {
  $event=new Event();   
  $event->status             =   "0";
  $event->update($_GET['id']);
  message("Your Event is Deleted ".date('Y-m-d H:i:s'), "success");
  redirect(web_root."index.php?route=manage_events");
  set_flag("DELETE_EVENT_ENTRY");
}


function restore_event() {
  $event=new Event();   
  $event->status             =   "1";
  $event->update($_GET['id']);
  message("Event is Restored With Success ".date('Y-m-d H:i:s'), "success");
  redirect(web_root."index.php?route=manage_events");
  set_flag("RESTORE_DEL_EVENT");
}

function delete_position() {
  $pos=new Position();   
  $pos->status             =   "0";
  $pos->last_update =date('Y-m-d H:i:s');
  $pos->update($_GET['id']);
  message("Position is Deleted with Success ".date('Y-m-d H:i:s'), "success");
  redirect(web_root."index.php?route=positions");
  set_flag("DELETE_POSITION");
}

function restore_position() {
  $pos=new Position();   
  $pos->status             =   "1";
  $pos->last_update =date('Y-m-d H:i:s');
  $pos->update($_GET['id']);
  message("Position Restored Successfully ".date('Y-m-d H:i:s'), "success");
  redirect(web_root."index.php?route=positions");
  set_flag("RESTORE_DEL_POSITION");
}


function add_new_event() {
  $event=new Event();
  $event->title   =$_POST['title'];
  $event->body    =$_POST['body'];
  $event->thumbnail   =preg_replace('/\s+/', '_', $_POST['thumbnail']);
  $event->images      =preg_replace('/\s+/', '_', $_POST['images']);
  $event->author      =$_SESSION['username'];
  $event->venue       =$_POST['venue'];
  $event->schedule_date =$_POST['schedule_date'];
  $event->time_in   =$_POST['time_in'];
  $event->time_out   =$_POST['time_out'];
  $event->status    =$_POST['status'];
  $event->created_at   =date('Y-m-d H:i:s');
  $event->last_update   =date('Y-m-d H:i:s');
  $event->create();
  message("Your event is Scheduled on ".$_POST['schedule_date']." and will start at ".$_POST['time_in'],"success");
  redirect(web_root."index.php?route=manage_events ");
  set_flag("NEW_EVENT_ENTRY");
}


  function save_new_blog() 
  {
    if(isset($_POST['new_blog']))
    {
      if (!empty($_POST['title'])) {

      //document file upl,load
        $file= $_FILES["thumbnail"]["name"];
        $tempDir= $_FILES["thumbnail"]["tmp_name"];

      // get the image extension
        $extension_cover = substr($file,strlen($file)-4,strlen($file));
      // allowed extensions
        $allowed_cover_extensions = array(".jpeg",".jpg",".jpeg",".png",".gif");

        if(!in_array($extension_cover,$allowed_cover_extensions))
        {

         redirect(web_root."index.php?route=new_blog");         
         message("Someting Went wrong ".date('Y-m-d H:i:s'), "error");
         set_flag("WRONG_INPUT_INVALID_IMAGE_FORMAT_NEWBLOG");
         //echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";

       } else {

        $upload_dir="../assets/images/blog/";

        $upload_name=$file;
        move_uploaded_file($tempDir,$upload_dir.$upload_name);

        $post=new Blog();     

        $post->id                = "";
        $post->title             =   $_POST['title'];
        //$post->description       =   $_POST['description'];
        $post->description       =   $_POST['description2'];
        $post->thumbnail         =   preg_replace('/\s+/', '_', $upload_name);
        $post->images            =   $_POST['main_image'];
        $post->author            =   "Author";
        $post->file1             =   preg_replace('/\s+/', '_', $_FILES['file1']);
        $post->file2             =   preg_replace('/\s+/', '_', $_FILES['file2']);
        $post->file3             =   preg_replace('/\s+/', '_', $_FILES['file3']);
        $post->status            =   $_POST['status'];
        $post->created_at        =   date('Y-m-d H:i:s');
        $post->last_update       =   date('Y-m-d H:i:s'); 
        $post->create();
        message("Blog Created Successfully ".date('Y-m-d H:i:s'), "success");        
        redirect(web_root."index.php?route=new_post");
        set_flag("CREATE_NEW_BLOG");
        }        
      } 
    }
  }

  function update_event_info() {
    $event=new Event();
    $event->title   = $_POST['title'];
    $event->body    = $_POST['body'];

    $event->author      =$_SESSION['username'];
    $event->venue       =$_POST['venue'];
    $event->schedule_date =$_POST['schedule_date'];
    $event->time_in   =$_POST['time_in'];
    $event->time_out   =$_POST['time_out'];
    $event->status    =$_POST['status'];
    $event->last_update   =date('Y-m-d H:i:s');
    $event->update($_POST['id_event']);
    message("Your event is Scheduled on ".$_POST['scheduled_date']." and will start at ".$_POST['time_in']." Up to ".$_POST['time_out']."");
    redirect(web_root."index.php?route=manage_events ");
    set_flag("UPDATE_EVENT");
  }

  function add_position() {
    $position=new Position();
    $position->title   = $_POST['position'];
    $position->status   = "0";
    $position->last_update   =date('Y-M-d H:i:s');
    $position->created_at =date('Y-m-d H:i:s');
    $position->create();
    message("Position Created Successfully ".date('Y-m-d H:i:s'), "success");
    redirect(web_root."index.php?route=positions ");
    set_flag("ADD_POSITION");
  }

  function submit_contact() {

    if(isset($_POST['inquiry'])) {
      $contact=new Contact();
        $contact->full_names   =$_POST['names'];
        $contact->subject    = "198caq";
        $contact->message   = "198cbq";
        $contact->email      =$_POST['email'];
        $contact->tel_number      =$_POST['phone'];
        $contact->status       = "1";
        $contact->created_at   =date('Y-m-d H:i:s');
        $contact->last_update   =date('Y-m-d H:i:s');
        $contact->create();
        set_flag("NEW_ENTRY_CONTACT_FORM");

    } else {
      $contact=new Contact();
        $contact->full_names   =$_POST['names'];
        $contact->subject    =$_POST['subject'];
        $contact->message   =$_POST['messege'];
        $contact->email      =$_POST['email'];
        $contact->tel_number      =$_POST['phone'];
        $contact->status       = "1";
        $contact->created_at   =date('Y-m-d H:i:s');
        $contact->last_update   =date('Y-m-d H:i:s');
        $contact->create();
        set_flag("NEW_ENTRY_FRONT_FORM");
    } 
  }

  function update_password() {
    $user=new User();
    $user->password = md5($_POST['password']);
    $user->last_update = date('Y-m-d H:i:s');
    $user->update($_SESSION['id']);
    message("User password has been Updated successfully ! ".date('Y-m-d H:i:s'), "success");
    redirect(web_root."index.php?route=profile_settings");
  set_flag("UPDATE_PASSWORD");
  }

  function set_flag($flag="") {
    $log= new Log();
    $log->user_id=$_SESSION['id'];
    $log->username=$_SESSION['username'];
    $log->flag=$flag;
    $log->last_update = date('Y-m-d H:i:s');
    $log->created_at = date('Y-m-d H:i:s');
    $log->create();    
  }




