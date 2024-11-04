<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Getcaptcha extends CI_Controller 
{

	public function securimage()
	{
		$num = 4;
		$width = 100;
		$height = 30;
		$code = get_captcha();
		$image=imagecreate($width,$height);
		imagecolorallocate($image,255,255,255);
		//文字
	  for($i=0;$i<$num;$i++)
	  {
	   //字型
	   $font_file = './fonts/AHGBold.ttf';
	   //字型顏色
	   $char_color=imagecolorallocate($image,0,0,255);
	   //加入文字到圖片
	   imagefttext($image, 16+rand(0,4), 0, 3+($width/$num)*$i, 22+rand(0,3), $char_color, $font_file, $code[$i]);
	  }
	  //雜點
	  for($i=0;$i<80;$i++)
	  {
	   //雜點顏色
	   $dis_color=imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255));
	   //加入雜點
	   imagesetpixel($image,rand(1,$width),rand(1,$height),$dis_color);
	  }
	  header("Content-type:image/png");
	  imagepng($image);
	  imagedestroy($image);
	}

}