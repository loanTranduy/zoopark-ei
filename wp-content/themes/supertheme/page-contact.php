<?php
 
  //response generation function
  $response = "";
 
  //function to generate response
  function my_contact_form_generate_response($type, $message){
 
    global $response;
 
    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
  }

    //response messages
    $missing_content = "Attention! Vous n'avez pas renseigné toutes les informations.";
    $email_invalid   = "Email Incorrect";
    $message_unsent  = "Votre message n'a pas pu être envoyé! Réessayez";
    $message_sent    = "Merci! Votre message a bien été envoyé.";
    
    //user posted variables
    $name = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $message = $_POST['textarea1'];
    $tel = $_POST['tel'];
    
    //php mailer variables
    $to = get_option('admin_email');
    $subject = "Quelqu'un vous a envoyé un message depuis ".get_bloginfo('name');
    $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

    //Validate the form :
    if ($_POST['submitted']) {
        //Validate the email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        my_contact_form_generate_response("error", $email_invalid);
        }
        else { //email is valid
            //validate presence of name and message
            if(empty($name) || empty($message) || empty($date)){
                my_contact_form_generate_response("error", $missing_content);
            }
            else { //ready to go!
                //send email
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
            }
        }
    }
?>

<?php get_header(); ?>

<!--CONTACT-->
  <div class="ask section">
    <div class="container">
      <div class="row">
        <div class="header-forms col s12 center white-text">
        <?php  if(have_posts()): the_post();?>
          <i class="material-icons">contacts</i>
          <h3>
            <?php the_title(); ?>
          </h3>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Success/error style -->
  <style type="text/css">
    .response {
      margin-bottom : 30px;
      padding: 8px 10px;
      border-radius: 3px;
      color : white;
    }
    .error{
      background-color: #e57373;
    }
    .success{
      background-color: #66BB6A;
    }
    .required {
      color : #e57373;
    }
    .form-instructions {
      font-size : .8rem;
      color : #666
    }
  </style>

  <div class="container">
    <div class="row">
    <!--START FORM-->
    <div id="respond">
    <?php echo $response; ?>

    <div class="form-instructions"><p>Champs obligatoires <span class="required">*</span></p></div>

      <form class="col s12" action="<?php the_permalink(); ?>" method="post">
        <div class="row">

        <!--PRENOM-->
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate required" name="first_name" value="<?php echo esc_attr($_POST['first_name']); ?>">
            <label for="first_name">Prénom</label>
          </div>

          <!--NOM-->
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="last_name" value="<?php echo esc_attr($_POST['last_name']); ?>">
            <label for="last_name">Nom de famille</label>
          </div>
        </div>

        <!--EMAIL-->
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons grey-text">email</i>
            <input id="email" type="email" placeholder="email" class="validate" name="email" value="<?php echo esc_attr($_POST['"email']); ?>">
          </div>

          <!--DATE-->
          <div class="input-field col s6">
            <i class="material-icons grey-text">today</i>
            <input type="date" class="datepicker" name="date" value="<?php echo esc_attr($_POST['date']); ?>">
          </div>
        </div>

        <!--TXT-->
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea1" class="materialize-textarea" name="textarea1"><?php echo esc_textarea($_POST['textarea1']); ?></textarea>
            <label for="textarea1">Votre demande</label>
          </div>
        </div>

        <!--CHECK-->
          <div class="input-field col s6">
              <input type="checkbox" id="test5" name="telOn" 
                <?php if(isset($_POST['telOn']) AND $_POST['telOn'] == "on") : ?>
                  checked
                <?php endif; ?>
              />
              <label for="test5">Je souhaite être contacté par téléphone</label>
          </div>

          <!--PHONE-->
        <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>

            <input id="icon_telephone" 
              <?php if(isset($_POST['telOn']) AND $_POST['telOn'] == "on") : ?>
                value="<?php echo esc_attr($_POST['tel']); ?>"
              <?php else :?>
                disabled value="Non autorisé"
              <?php endif ?>
             id="disabled" type="tel" name="tel" class="validate">

            <label for="icon_telephone">Téléphone</label>
          </div>
        </div>

        <!--BUTTON-->
        <div class="row center">
            <input type="hidden" name="submitted" value="1">
            <input type="submit" style="background-color:orange;" class="btn-large waves-effect waves-light lighten-1">
        </div>
      </form>
    </div>
  </div>
  </div>
  <!--FIN FORM-->

  <div class="company section">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3 class="white-text">ZooPark</h3>
          <p class="grey-text text-lighten-4"><?php the_content(); ?></p>
        </div>
      </div>
    </div>
  </div>
  
  <?php  get_footer(); ?>


