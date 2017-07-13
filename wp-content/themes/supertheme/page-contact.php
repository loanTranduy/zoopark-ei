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

  <div class="container">
    <div class="row">
    <!--START FORM-->
    <div id="respond">
    <?php echo $response; ?>
      <form class="col s12" action="<?php the_permalink(); ?>" method="post">
        <div class="row">

        <!--PRENOM-->
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate" name="first_name" value="<?php echo esc_attr($_POST['first_name']); ?>">
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
            <input type="date" class="datepicker">
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
        <div class="row">
          <div class="input-field col s6">
              <input type="checkbox" id="test5" />
              <label for="test5">Je souhaite être contacter par téléphone</label>
          </div>

          <!--PHONE-->
          <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" disabled value="I am not editable" id="disabled" type="tel" class="validate">
            <label for="icon_telephone">Téléphone</label>
          </div>
        </div>

        <!--BUTTON-->
        <div class="row center">
            <input type="hidden" name="submitted" value="1">
            <input type="submit" style="background-color:orange;"class="btn-large waves-effect waves-light lighten-1">
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


