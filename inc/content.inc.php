		<?php
		switch($id){
			case 'testing':
				include 'testing.php';break;
			case 'plans':
				include 'plans.php';break;
  			case 'ascon':
				include 'ascon.php';break;
            case 'ascon-faq':
				include 'ascon-faq.php';break;
            case 'autocad':
				include 'autocad.php';break;
            case 'autocad-stp':
				include 'autocad-stp.php';break;
            case 'autocad-lic':
				include 'autocad-lic.php';break;
            case 'autocad-options-user':
				include 'autocad-options-user.php';break;
            case 'autocad-options-admin':
				include 'autocad-options-admin.php';break;
            case 'it':
                include 'it.php';break;
            case 'phonebook':
                include 'phonebook.php';break;
			default:
				include 'index.inc.php';
		}
		?>