<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends SITE_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function main() {
		$WebInfo = $this->WebInfo;
		$SiteID = $WebInfo->SiteID;
		$this->Main_Start($SiteID,$WebInfo);
		$this->Main_Content($SiteID,$WebInfo);	#body 
		$this->Main_End($SiteID,$WebInfo);
	}

	function Main_Start($SiteID,$WebInfo){
		#html開頭
		$BaseLang = 'zh-TW';
		if($WebInfo->Lang == 'EN') {
			$BaseLang = 'en';
		}
		$this->Page_Start($BaseLang);
		
		#html head
		$Head_data = array(
			'Lang' => $BaseLang,
			'WebTitle' => lang('base_Home').'-'.$WebInfo->Title,
			'CustomCssJs' =>  css($this->WebCssStyle.'/index.css').js('bjqs-1.3.js').
							"<script>
							jQuery(document).ready(function($) {
								$('#KeyVisual').bjqs({
									animduration: 800,
									animspeed	: 8000,
									responsive	: true,
									showmarkers	: false
								});
							});
							</script>"
			);
		if($WebInfo->Lang == 'EN') {
			$Head_data['CustomCssJs'] .= js('jquery_en.js');
		}
		$this->Page_Head($Head_data);

		#body head-Menu
		$this->Content_Head($SiteID);
	}

	##Content
	function Main_Content($SiteID,$WebInfo){
		$Content = array('Center_Banner'=>'');
		$Content['Center_Banner'] .= $this->Center_Banner($SiteID);
		
		if($WebInfo->Lang == 'EN') {
		
			$this->Content_Main_en($Content);		
			//客戶要求 自行編輯HTML
			$this->Content_Custom_en();
			
		}else{
		
			$this->Content_Main($Content);		
			//客戶要求 自行編輯HTML
			$this->Content_Custom();
			
		}
		
	}
	
	#Banner
	function Center_Banner($SiteID,$MenuID=0) {
		$str = '';
		$result = array();
		$this->load->model('Sitemanagementobj');
        $get_data = $this->Sitemanagementobj->SiteManagement_GetAdSlider($SiteID,$MenuID);
        if($get_data->num_rows() > 0) {
			$result = $get_data->result_array();
			foreach($result as $key => $value){
				$URL = "#";
				if (!empty($value['URL'])){
					$URL = $value['URL'];
				}
				$Targets = "";
				if ($value['Targets'] == 1){
					$Targets = "target='_blank'";
				}
				$BannerPicLink = $this->HomeUrl.'webtools/thumbnail/action/99/?fd=Benner_Files&Pname='.$value['Files'];
				$str .='<li><a href="'.$URL.'" title="'.$value['Title'].'" '.$Targets.'><img src="'.$BannerPicLink.'" alt="'.$value['Title'].'" /></a></li>';
			}
		}
		$get_data->free_result();
        return $str;
	}
	
	
	function Main_End($SiteID,$WebInfo){
		$this->Content_Footer($SiteID);
		$this->Page_End();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */