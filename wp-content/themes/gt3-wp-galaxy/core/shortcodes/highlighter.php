<?php

class highlighter {

    public function register_shortcode($shortcodeName) {
        function shortcode_highlighter($atts, $content = null) {
            extract( shortcode_atts( array(
                'type' => 'colored'
            ), $atts ) );

            return "<span class='highlighted_".$type."'>".$content."</span>";
        }
        add_shortcode($shortcodeName, 'shortcode_highlighter');
    }
}




#Shortcode name
$shortcodeName="highlighter";

global $gt3_pbconfig;

#Compile UI for admin panel
#Don't change this line
global $gt3_compileShortcodeUI;
$gt3_compileShortcodeUI .= "<div class='whatInsert whatInsert_".$shortcodeName."'>".$defaultUI."</div>";

#This function is executed each time when you click "Insert" shortcode button.
$gt3_compileShortcodeUI .= "
<table>
	<tr>
		<td>Type:</td>
		<td>
		    <select name='".$shortcodeName."_separator_type' class='".$shortcodeName."_type'>";
if (is_array($gt3_pbconfig['all_available_highlighters'])) {
    foreach ($gt3_pbconfig['all_available_highlighters'] as $value => $caption) {
        $gt3_compileShortcodeUI .= "<option value='".$value."'>".$caption."</option>";
    }
}

$gt3_compileShortcodeUI .= "</select>
		</td>
	</tr>
</table>

<script>
	function ".$shortcodeName."_handler() {
	
		/* YOUR CODE HERE */
		
		var type = jQuery('.".$shortcodeName."_type').val();
		
		/* END YOUR CODE */
	
		/* COMPILE SHORTCODE LINE */
		var compileline = '[".$shortcodeName." type=\"'+type+'\"][/".$shortcodeName."]';
				
		/* DO NOT CHANGE THIS LINE */
		jQuery('.whatInsert_".$shortcodeName."').html(compileline);
	}
</script>

";






#Register shortcode & set parameters
$highlighter = new highlighter();
$highlighter->register_shortcode($shortcodeName);

#add shortcode to wysiwyg 
$gt3_shortcodesUI['highlighter'] = array("name" => $shortcodeName, "handler" => $gt3_compileShortcodeUI);

unset($gt3_compileShortcodeUI);


?>