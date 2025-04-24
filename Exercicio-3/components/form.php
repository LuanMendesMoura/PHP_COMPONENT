<?php 

    function input($textarea = false, $name, $label, $type) {
        if ($textarea) {
            return 
            "
            <label for='$name' class='label-form'>$label</label>
            <textarea name='$name' id='$name' class='campos-form input-form' required></textarea>
            ";
        }
        else {
            return
            "
            <label for='$name' class='label-form'>$label</label>
            <input type='$type' id='$name' name='$name' class='campos-form input-form' required>
            ";
        };
    }

    function select($name, $label, $value, $option) {
        return 
        "
        <label for='$name' class='label-form'>$label</label>
        <select name='$name' id='$name' class='campos-form select-form' required>
            <option value='$value'>$option</option>
        </select>
        ";
    };
?>