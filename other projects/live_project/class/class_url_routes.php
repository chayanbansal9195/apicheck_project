<?php


	class page_url{

		var $page_title;

		var $page_url;

		var $page_cat_title;

		var $js_require;

		var $css_require;

		function _constructor()

		{

			$page_title="";

			$page_url="";

			$page_cat_title="";

			$js_require="";

			$css_require="";

		}

		public function get_page($value)

		{

			//Home page for All

			define('homepage', 'home');
define('admin_homepage', 'ad_home');
define('CHANGEPASS', '0CHNGPASS');
define('PHOTOUPLOAD', '0PHUPLD');
define('VIEWPHOTO', '0VWPHT');
define('VIEWUPLOADEDPHOTO', '0VWUPPHT');
define('ADDMOREPHOTOS', '0ADMRPH');
define('NEWSTAFFENTRY', '0STFETR');
define('UPCOMINGACTIVITIESENTRY', '0UPCACTVTS');
define('NEWSEVENT', '0NWSVNT');
define('CONTACTALERT', '0CNTCTALRT');
define('ACHIEVEMENTENTRY', '0ACHVMNTETR');
define('DOWNLOADSENTRY', '0DOWNLD');
define('TRAININGACTIVITIESENTRY', '0TRNACTVTS');
define('OFTACTIVITIESENTRY', '0OFTACTVTS');
define('FLDACTIVITIESENTRY', '0FLDACTVTS');
define('EXTRACTIVITIESENTRY', '0EXTRACTVTS');
define('EXEMPFARMERACTIVITIESENTRY', '0EXPFRMRACTVTS');
define('ACTIONPLAN', '0ACTNPLAN');
define('ANNUALREPORT', '0ANLRPRT');
define('ZONEANNUALREPORT', '0ZNANLRPRT');
define('OTHERREPORT', '0OTHRRPRT');
define('TECHNICALBOOK', '0TCHNCLBK');
define('RESEARCHPAPER', '0RSRCHPPR');
define('ARTICLEJOURNAL', '0ARTPJRNL');
define('NEWSPAPRPUBLICTN', '0NWSPBLCTN');
define('FOLDERS', '0FLDRS');
define('EBOOK', '0EBOOK');
define('DCMNTRYFILMS', '0DCMNTRYFL');
define('UPLOADVIDEOS', '0VDOSUP');
define('STAFFEDIT', '0STFEDT');
define('OFTEDIT', '0OFTEDT');
define('FLDEDIT', '0FLDEDT');
define('TRAININGEDIT', '0TRANGEDT');
define('EXTRACTIVITIESEDIT', '0EXTTEDT');
define('EXEMPFARMERACTIVITIESEDIT', '0EXMFEDT');
define('UPCOMINGACTIVITIESEDIT', '0UPCAEDT');
define('ACTIONPLANEDIT', '0ACPEDT');
define('OTHERREPORTEDIT', '0OTRPEDT');
define('ACHIEVEMENTEDIT', '0ACHVEDT');
define('NEWSEVENTEDIT', '0NSEVNTEDT');
define('ROLLOVERHOMEPAGE', '0ROHOME');
define('ROLLOVERSUCCESSSTORIES', '0ROSUCS');
define('ROLLOVERFARMERSINNOV', '0ROFRMI');
define('ROLLOVERADVISORIES', '0ROADVSR');
define('CONTACTREPLY', '0CNTCTRPLY');
		////////////////////////////////////////////// 

       //echo "<br><br>Class page_url Value found value";

			switch ($value) {

				case homepage:

				$user_details=$_SESSION['ROLE'];

					switch ($user_details) {

						case 0:

							$this->page_url="welcomeadmin.php";

							$this->page_title=" - Admin Home Page";

							

							$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script>';

							$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet">';

							break;
							
						case 1:

							$this->page_url="welcomeadmin.php";

							$this->page_title=" - Admin Home Page";

							

							$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script>';

							$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet">';

							break;

						
						default:

							echo "Check for other role";

							//echo $user_details;

							die();

							break;

					}

					break;



				case admin_homepage:

					$this->page_url="welcomeadmin.php";

					$this->page_title=" - Admin Homepage";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case CHANGEPASS:

					$this->page_url="changepassword.php";

					$this->page_title=" - Change Your Password";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case PHOTOUPLOAD:

					$this->page_url="master/upload_photo.php";

					$this->page_title=" - Upload Photos";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case VIEWPHOTO:

					$this->page_url="master/view_photos.php";

					$this->page_title=" - View Photos";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case VIEWUPLOADEDPHOTO:

					$this->page_url="master/view_uploaded_photos.php";

					$this->page_title=" - View Uploaded Photos";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case ADDMOREPHOTOS:

					$this->page_url="master/add_more_photos.php";

					$this->page_title=" - Add More Photos";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case NEWSTAFFENTRY:

					$this->page_url="master/staffentry.php";

					$this->page_title=" - Staff Registration";

					//$this->page_cat_title="ENQUIRY DETAILS";

					break;
					
					case UPCOMINGACTIVITIESENTRY:

					$this->page_url="master/upcomingactivityentry.php";

					$this->page_title=" - Activity";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case NEWSEVENT:

					$this->page_url="master/newsevententry.php";

					$this->page_title=" - News & Event";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case CONTACTALERT:

					$this->page_url="master/contact_alerts_view.php";

					$this->page_title=" - Alert";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					case ACHIEVEMENTENTRY:

					$this->page_url="master/achievemententry.php";

					$this->page_title=" - Alert";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case DOWNLOADSENTRY:

					$this->page_url="master/downloadsentry.php";

					$this->page_title=" - Downloads";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					case TRAININGACTIVITIESENTRY:

					$this->page_url="master/trainingentry.php";

					$this->page_title=" - Training";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case OFTACTIVITIESENTRY:

					$this->page_url="master/oftentry.php";

					$this->page_title=" - OFT";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case FLDACTIVITIESENTRY:

					$this->page_url="master/fldentry.php";

					$this->page_title=" - FLD";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case EXTRACTIVITIESENTRY:

					$this->page_url="master/extractivityentry.php";

					$this->page_title=" - Extra Functionaries";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case EXEMPFARMERACTIVITIESENTRY:

					$this->page_url="master/exempfarmerctivityentry.php";

					$this->page_title=" - Exemplenary Farmers";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ACTIONPLAN:

					$this->page_url="master/actionplan.php";

					$this->page_title=" - Action Plan";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ANNUALREPORT:

					$this->page_url="master/annualreport.php";

					$this->page_title=" - Annual Report";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ZONEANNUALREPORT:

					$this->page_url="master/zoneannualreport.php";

					$this->page_title=" - Annual Report of Zone";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case OTHERREPORT:

					$this->page_url="master/otherreport.php";

					$this->page_title=" - Other Report";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case TECHNICALBOOK:

					$this->page_url="master/technicalbook.php";

					$this->page_title=" - Technical Book";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case RESEARCHPAPER:

					$this->page_url="master/researchpaper.php";

					$this->page_title=" - Research Paper";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ARTICLEJOURNAL:

					$this->page_url="master/articlejournal.php";

					$this->page_title=" - Articles in Popular Journal";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case NEWSPAPRPUBLICTN:

					$this->page_url="master/newspaperpublication.php";

					$this->page_title=" - Newspaper Publications";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case FOLDERS:

					$this->page_url="master/folders.php";

					$this->page_title=" - Folders";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case EBOOK:

					$this->page_url="master/ebook.php";

					$this->page_title=" - E-Book";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case DCMNTRYFILMS:

					$this->page_url="master/documntfilm.php";

					$this->page_title=" - Documentary Films";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case UPLOADVIDEOS:

					$this->page_url="master/uploadvdo.php";

					$this->page_title=" - Videos";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case STAFFEDIT:

					$this->page_url="master/staffedit.php";

					$this->page_title=" - Edit Staff";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case OFTEDIT:

					$this->page_url="master/oftedit.php";

					$this->page_title=" - Edit OFT";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case FLDEDIT:

					$this->page_url="master/fldedit.php";

					$this->page_title=" - Edit FLD";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case TRAININGEDIT:

					$this->page_url="master/trainingedit.php";

					$this->page_title=" - Edit Training";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case EXTRACTIVITIESEDIT:

					$this->page_url="master/extractivityedit.php";

					$this->page_title=" - Edit Training";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case EXEMPFARMERACTIVITIESEDIT:

					$this->page_url="master/exempfarmerctivityedit.php";

					$this->page_title=" - Edit Exemplenary Farmers";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case UPCOMINGACTIVITIESEDIT:

					$this->page_url="master/upcomingactivityedit.php";

					$this->page_title=" - Edit Upcoming Activity";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ACTIONPLANEDIT:

					$this->page_url="master/actionplanedit.php";

					$this->page_title=" - Edit Action Plan";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case OTHERREPORTEDIT:

					$this->page_url="master/otherreportedit.php";

					$this->page_title=" - Edit Action Plan";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ACHIEVEMENTEDIT:

					$this->page_url="master/achievementedit.php";

					$this->page_title=" - Edit Achievement";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case NEWSEVENTEDIT:

					$this->page_url="master/newseventedit.php";

					$this->page_title=" - Edit Achievement";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ROLLOVERHOMEPAGE:

					$this->page_url="master/rolloverhomepage.php";

					$this->page_title=" - Roll Over for Home Page";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ROLLOVERSUCCESSSTORIES:

					$this->page_url="master/rolloversuccessstories.php";

					$this->page_title=" - Roll Over for Success Stories";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ROLLOVERFARMERSINNOV:

					$this->page_url="master/rolloverfarmersinnovation.php";

					$this->page_title=" - Roll Over for Farmers Innovation";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case ROLLOVERADVISORIES:

					$this->page_url="master/rolloveradvisories.php";

					$this->page_title=" - Roll Over for Advisories";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					
					case CONTACTREPLY:

					$this->page_url="master/contact_alert_reply.php";

					$this->page_title=" - Roll Over for Advisories";

					//$this->page_cat_title="ENQUIRY DETAILS";
					$this->js_require='<script src="bootstrap/js/bootstrap-datepicker.min.js"></script><script src="bootstrap/js/jquery.dataTables.min.js"></script><script src="bootstrap/js/dataTables.bootstrap.min.js"></script>';
					$this->css_require='<link href="bootstrap/css/bootstrap-datepicker.min.css" rel="stylesheet"><link href="bootstrap/css/jquery.dataTables.min.css" rel="stylesheet">';

					break;
					////////////////////////////////////////////////////////////////////////



				default:

					header("Location:404.html");

					die();

					break;

			}

		}

	}

?>