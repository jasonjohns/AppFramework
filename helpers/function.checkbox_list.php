<?php
function smarty_function_checkbox_list($params, $template){
    
    $value = $template->smarty->tpl_vars[$params['name']]->value;
    $retval = "<fieldset><legend>". humanize($params['name']) . "</legend>";
    foreach($params['options'] as $key => $val){
        if($params['inline']){
            $container_start = "<label for=\"{$params['name']}_{$key}\" class=\"checkbox-inline\">";
            $container_end = "</label>";
        }else{
            $container_start = "<div class=\"checkbox\"><label for=\"{$params['name']}_{$key}\">";
            $container_end = "</label></div>";
        }
        $retval .= $container_start;
        if(in_array($key,$value)){
            $retval .= "<input type=\"checkbox\" name=\"{$params['name']}[]\" id=\"{$params['name']}_{$key}\" checked value=\"{$key}\">{$val}";    
        }else{
            $retval .= "<input type=\"checkbox\" name=\"{$params['name']}[]\" id=\"{$params['name']}_{$key}\" value=\"{$key}\">{$val}";    
        }
        $retval .= $container_end;   
    }
    $retval .= "</fieldset>";
    return $retval;
}
?>