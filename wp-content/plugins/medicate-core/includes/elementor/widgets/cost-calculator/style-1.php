<?php
namespace Elementor; 
if ( ! defined( 'ABSPATH' ) ) exit; 
$settings = $this->get_settings();

$treatment_list = $this->get_settings_for_display( 'treatment_list' );
$treatment_category_list = $this->get_settings_for_display( 'treatment_category_list' );
$location_list = $this->get_settings_for_display( 'location_list' );
$time_list = $this->get_settings_for_display( 'time_list' );
?>




<div class="pt-cost-calculator">
   <div class="row">
      <div class="col-lg-6">
         <span class="pt-cost-title"><?php echo esc_html($settings['treatment_field_name']); ?> </span>
        <select class="treatment form-control" name="treatment" id="treatment">
					<!-- <option value="">Select</option> -->
					<?php foreach($treatment_list as $key => $item)
					{
						echo '<option value="'.esc_attr($item['treatment_name']).'">'.esc_attr($item['treatment_name']).'</option>';
					} 
					?>
				</select>
      </div>
      <div class="col-lg-6">
         <span class="pt-cost-title"><?php echo esc_html($settings['treatment_cat_field_name']); ?></span>
       	<select class="treatment-plan form-control" name="treatment-plan" id="treatment-plan">
					<!-- <option value="">Select</option> -->
					<?php foreach($treatment_category_list as $key => $item)
					{
						echo '<option value="'.esc_attr($item['treatment_category_name']).'" data-plan="'.esc_attr($item['treatment_category_price']).'" >'.esc_attr($item['treatment_category_name']).'('.esc_attr($item['treatment_category_price']).')'.'</option>';
					} 
					?>
				</select>
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <span class="pt-cost-title"><?php echo esc_html($settings['treatment_location_field_name']); ?></span>
       	<select class="location form-control" name="location" id="location">
					<!-- <option value="">Select</option> -->
					<?php foreach($location_list as $key => $item)
					{
						echo '<option value="'.esc_attr($item['location_price']).'" data-location="'.esc_attr($item['location_price']).'" >'.esc_attr($item['location_name']).'('.esc_attr($item['location_price']).')'.'</option>';
					} 
					?>
				</select>
      </div>
      
   </div>
   <div class="row">
      <div class="col-lg-12">
         <span class="pt-cost-title"><?php echo esc_html($settings['time_field_name']); ?></span>
       	<ul class="time" name="time" id="time">

					<?php 
					foreach($time_list as $key => $item)
					{
						$active = '';
						if($key == '0')
						{
							$active = 'active';
						}
							echo '<li class="timevalue '.$active.'">'.esc_attr($item['time_text']).'</li>';
					} 
					?>
				</ul>
      </div>
   </div>
   <div class="row">
     <div class="col-lg-12 pt-appointment-time">
       <input type="checkbox" id="appointment" name="appointment" class="appointment" value="<?php echo esc_attr($settings['special_appointment']); ?>">
         <label>Special Appointment ?</label>
       
      </div>
   </div>
   <div class="row">
      <div class="col-lg-12">
         <div class="pt-calculator-price">
              <span class="pt-total-title"></span>
           	<span class="pt-cost-value" id="treatment-cost"></span>
         
         </div>
      </div>
   </div>
</div>