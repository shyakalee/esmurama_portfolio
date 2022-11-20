<?php

require_once ("include/initialize.php");

$user = new User();
@$result=$user::checkAuthentication($_SESSION['username']);
if(!$result) {
    redirect(web_root.'login.php?login=true');
}

$contents='home.php';
$view = (isset($_GET['route']) && $_GET['route'] != '') ? $_GET['route'] : '';


switch ($view) {
 
	case 'index' :
        $title="Dashboard";	
		$contents='views/dashboard.php';		
		break;

        case 'new_user' :
            $title="Add user";	
            $contents='views/new_user_add.php';		
            break;

            case 'users_management' :
                $title="Manage User";	
                $contents='views/manage_users.php';		
                break;

                case 'positions' :
                    $title="User Positions";	
                    $contents='views/positions.php';		
                    break;

                case 'staff_list' :
                    $title="Staff List";	
                    $contents='views/staff_list.php';		
                    break;

                    case 'new_post' :
                        $title="Add post";	
                        $contents='views/new_post.php';		
                        break;

                        case 'active_blogs':
                            $title="Active Blogs";	
                            $contents='views/active_blogs.php';		
                            break;

                            case 'blog_categories' :
                                $title="Categories";	
                                $contents='views/blog_categories.php';		
                                break;

                                case 'add_events' :
                                    $title="Add event";	
                                    $contents='views/add_event.php';		
                                    break;

                                    case 'manage_events' :
                                        $title="Manage Events";	
                                        $contents='views/manage_events.php';		
                                        break;

                                        case 'single-blog' :
                                            $title="Blog details";	
                                            $contents='views/single-blog.php';		
                                            break;

                                            case 'single-event' :
                                                $title="Event Details";	
                                                $contents='views/single-event.php';		
                                                break;

                                        case 'single-item' :
                                            $title="User Details";	
                                            $contents='views/list-single.php';		
                                            break;

                                            case 'system_settings':
                                                $title="System settings";	
                                            $contents='views/system_settings.php';		
                                            break;

                                            case 'contacts':
                                                $title="Contact Messages";	
                                            $contents='contact_messages.php';		
                                            break;
                                            
                                            case "audit_logs":
                                                $title="Audit Logs";
                                                $contents='views/audit_logs.php';
                                                break;

                                                case 'profile_settings';
                                                $title="My Profile";
                                                $contents='profile_settings.php';
                                                break;

	default :
        $title="Dashboard";		
		$contents='views/dashboard.php';			

}

require_once("views/templates.php");


?>