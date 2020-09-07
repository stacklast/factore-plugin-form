<?php
/**
 * Plugin Name: PHP Plugin Form Factore
 * Author: Edwin Benalcázar 
 * Author URI: https://teklear.com
 * Description: Plugin de formulario de contacto personalizado. Usar el Shortcode <strong>[factore-plugin-form]</strong>
 * Version: 1.0
 * Text Domain: factore
 */

// Define el shortcode y lo asocia a una función
 add_shortcode('factore-plugin-form','Factore_Plugin_form');

 /** 
 * Define la función que ejecutará el shortcode
 * De momento sólo pinta un formulario que no hace nada
 * 
 * @return string
 */
 function Factore_Plugin_form(){
     ob_start();
     ?>
    <form action="<?php get_the_permalink(); ?>" method="post"  
        name="sentMessage" id="contactForm" novalidate>
      <div class="control-group form-group">
        <div class="controls">
          <input type="text" class="form-control borde-verde" id="name" required data-validation-required-message="Please enter your name." placeholder="Your Name">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <input type="text" class="form-control borde-verde" id="company" required data-validation-required-message="Please enter your Companay." placeholder="Your Company">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <input type="tel" class="form-control borde-verde" id="phone" required data-validation-required-message="Please enter your phone number." placeholder="Your Number">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <input type="email" class="form-control borde-verde" id="email" required data-validation-required-message="Please enter your email address." placeholder="Your Email Address">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <textarea rows="10" cols="100" class="form-control borde-verde" id="message" required data-validation-required-message="
Tell us how we can help you?" maxlength="999" style="resize:none" placeholder="
Tell us how we can help you?:"></textarea>
        </div>
      </div>
      <div id="success"></div>
      <!-- For success/fail messages -->
      <input type="hidden" name="action" value="process_form">
      <button type="submit" class="btn-primary p-2 pl-5 btn pr-5 radius b-white borde-verde verde f-25 fm-18"><h2 class="f-20 flex">SEND MESSAGE</h2></button>
    </form>
    <?php
    // Devuelve el contenido del buffer de salida
    return ob_get_clean();
 }