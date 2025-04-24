<?php 

    function input($textarea = false, $name, $label, $type) {
        if ($textarea) {
            return 
            "
            <label for='$name'>$label</label>
            <textarea name='$name' id='$name'></textarea>
            ";
        }
        else {
            return
            "
            <label for='$name'>$label</label>
            <input type='$type' id='$name' name='$name'>
            ";
        };
    }

    function select($name, $label, $value, $option) {
        return 
        "
        <label for='$name'>$label</label>
        <select name='$name' id='$name'>
            <option value='$value'>$option</option>
        </select>
        ";
    };
?>