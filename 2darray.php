<?php
$tmnt = array(
    'Leo' => array( 'bandana' => 'blue','weapon' => 'swords', 'role' => 'leader' ),
    'Raph' => array( 'bandana' => 'red', 'weapon' => 'sighs', 'role' => 'hot shot' ),
    'Mikey' => array( 'bandana' => 'orange', 'weapon' => 'nunchucks', 'role' => 'fun one' ),
    'Don' => array( 'bandana' => 'purple', 'weapon' => 'staff', 'role' => 'nerd')
);

//mysolution
// echo "<ul>\n";
// foreach ($tmnt as $turtle => $atts) {
//     echo "<li><b>$turtle</b>:";
//     $last_attr = end($atts);
//     foreach ($atts as $attr) {
//         echo " $attr";
//         if($attr != $last_attr) {
//             echo ",";
//         } else {
//             echo ";";
//         }
//     }
//     echo "</li>\n";
// }
// echo "</ul>";

//course solution
// foreach ($tmnt as $turtle => $atts) {
//     echo "<p><b>$turtle:</b> ";
//     $atts_list = '';
//     foreach ($atts as $attr) {
//         $atts_list .= "$attr, ";
//         // with .= PHP appends all that comes on the right side, to the variable on the left side;
//     }
//     $atts_list = trim( $atts_list, ', ');
//     echo $atts_list;
//     echo "</p>";
// }

foreach ($tmnt as $turtle => $atts) {
    echo "<b>$turtle:<b> ";
    echo '<ul>';
    foreach ($atts as $label => $attr) {
        echo "<li>$label: $attr</li>";
    }
    echo '</ul>';
}

?>