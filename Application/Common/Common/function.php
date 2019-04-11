<?php 
/*
	功能： 根据大图片名称，返回缩略图名称
	参数： $filename 大图名称
	返回： 缩略图名称
 */
	function getSm($filename)
	{
		$arr = explode('/', $filename);
		$arr[3] = 'sm_'.$arr[3];
		return implode('/', $arr);
	}
 ?>