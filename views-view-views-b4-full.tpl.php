<?php

/**
 * @file
 * Default view template to display content using views_b4_full layout_type
 */
?>

<?php
$layout_type = $options['layout_type'];

switch ($layout_type) {
    case "padding_container":
        print '<div class="l-secondary">';
          print '<div class="l-secondary-inner container">';
            print '<div class="l-secondary-inner-2 row">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
            foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-12 l-secondary-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
          print '</div>';
        print '</div>';
    break;

    case "full_width_container":
        print '<div class="l-secondary">';
          print '<div class="l-secondary-inner container container-fluid">';
            print '<div class="l-secondary-inner-2 row">';
              if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-12 l-secondary-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
          print '</div>';
        print '</div>';
    break;

    case "halfs_container":
        print '<div class="l-halves">';
        print '<div class="container container-fluid l-halves-inner">';
        print '<div class="row l-halves-inner-2">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-6 l-halves-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
          print '</div>';
        print '</div>';
    break;

    case "thirds_container":
        print '<div class="l-thirds">';
          print '<div class="container container-fluid l-thirds-inner">';
            print '<div class="row l-thirds-inner-2">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-4 l-thirds-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
          print '</div>';
        print '</div>';
    break;

    case "quarters_container":
        print '<div class="l-quarters">';
          print '<div class="container container-fluid l-quarters-inner">';
            print '<div class="row l-quarters-inner-2">';
            if (!empty($title)) {
                print "<h3>$title</h3>";
            }
              foreach ($rows as $id => $row) {
                if ($row_classes[$id]) {
                    print '<div class="col-md-3 l-quarters-region ' . implode(' ', $row_classes[$id]) . '">' . $row . '</div>';
                }
            }
            print '</div>';
          print '</div>';
        print '</div>';
    break;
}

?>
