<?php

// 20/03/2019 : bibliotheque fonctions formulaire avec bootstrap
// Marc LEMERCIER


// =========================
// form_begin
// =========================

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");
    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// =========================
// form_input_text
// =========================

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group'>");
    echo (" <label for='$label'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}


// =========================
// form_select
// =========================

// Parametre $label    : permet un affichage (balise label)
// Parametre $name     : attribut pour identifier le composant du formulaire
// Parametre $multiple : si cet attribut n'est pas vide alors sélection multiple possible
// Parametre $size     : attribut size de la balise select
// Parametre $liste    : un liste d'options. Vous utiliserez un foreach pour générer les balises option

function form_select($label, $name, $multiple, $size, $liste) {
    echo '<label>'.$label.'</label>';
    if($multiple == 'multiple'){
        printf("<select name = '%s' multiple size='%s'class='form-control'/>\n",$name,$size
            . "<optgroup>");
    }else{
        printf("<select name = '%s' size='%s'class='form-control'/>\n",$name,$size
            . "<optgroup>");
    }  
    foreach ($liste as $value) {       
             echo'<option value="'.$value.'">'.$value.'</option>';               
    }
    echo'</optgroup></select>';    
}

// =========================

function form_input_reset($value) {
    echo '<input type="reset" class="btn btn-primary" value="' . $value . '">';
    echo "\n";
}

// =========================

function form_input_submit($value) {
    echo '<input type="submit" class="btn btn-primary" value="' . $value . '">';
    echo "\n";
}

// =========================


function form_end() {
    echo "</form>";
    echo "\n";
}

// =========================

?>

