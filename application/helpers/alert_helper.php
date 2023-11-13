<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('alert'))
{
    function alert($msg = '', $url = '')
    {
        $CI =& get_instance();

        // JavaScript를 이용한 경고창과 페이지 리다이렉션을 출력합니다.
        $script = "<script type='text/javascript'>alert('".$msg."');";
        if($url) {
            $script .= "window.location.href='". $url ."';";
        }
        $script .= "</script>";

        $CI->output->append_output($script);
    }
}
?>
