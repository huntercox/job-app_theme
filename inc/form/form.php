<?php
  if ( isset( $_POST['submit'] ) ) :

    tli_process_form($_POST);

    if ( tli_is_error() ) {
      echo '<div class="error">';
        tli_print_error();
      echo '</div>';
    }
  endif;
?>
  <form id="job-app" method="POST" action="">
    <?php
      /* assemble all form parts to arrange fields correctly */
        get_template_part('inc/form/parts/applicant-info');
        get_template_part('inc/form/parts/residency');
        get_template_part('inc/form/parts/license');
        get_template_part('inc/form/parts/driving-exp');
        get_template_part('inc/form/parts/accidents');
        get_template_part('inc/form/parts/legal');
        get_template_part('inc/form/parts/employment');
        get_template_part('inc/form/parts/education');
        get_template_part('inc/form/parts/sign');
    ?>
    <!-- Submit -->
    <br />
    <input id="applySubmit" type="submit" name="submit" value="Submit">

  </form>