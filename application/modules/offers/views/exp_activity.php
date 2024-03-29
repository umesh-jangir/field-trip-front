<!-- HEADER -->
<?php $this->load->view('partials/header.php'); ?>
<!-- HEADER END-->

<div class="offers exp">
  <section class="sidebar">
    <section class="well-box-in" style="padding:15px 0;">
      <h3 class="padded">When do you want to go?</h3>
      <ul class="booking-option">
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/date.png"/></span>
          <select>
              <option>Today</option><option>Monday</option><option>Tuesday</option><option>Wednesday</option>
              <option>Thursday</option><option>Friday</option><option>Saturday</option>
          </select>
        </li>      
      
        <li>
          <span class="icon"><img src="<?php echo base_url(); ?>public/assets/images/icons/clock.png"/></span>
          <select>
              <option>9:00 AM</option><option>9:30 AM</option><option>10:00 AM</option><option>12:00 PM</option>
              <option>1:30 PM</option><option>2:00 PM</option><option>5:30 PM</option><option>8:45 PM</option>
          </select>
        </li>      
      </ul>
      
      <section class="padded">
      <table class="table table-condensed cost">
        <tbody>
          <tr class="h4">
            <td><strong>$65</strong> <span class="muted">x 2 Adults (21+)</span></td>
            <td style="text-align:right;">$130</td>
          </tr>
          <tr class="h4">
            <td><strong>$45</strong> <span class="muted">x 2 Adults (18 - 20)</span></td>
            <td style="text-align:right;">$45</td>
          </tr>
          <tr class="h4">
            <td><strong>$40</strong> <span class="muted">x 1 Teens</span></td>
            <td style="text-align:right;">$40</td>
          </tr>
          <tr class="h4">
            <td><strong>$25</strong> <span class="muted tip" title="Children 11 and under">x 4 Children</span></td>
            <td style="text-align:right;">$100</td>
          </tr>
          <tr>
            <td>Service fee <i class="fa fa-info-circle tip" title="This is the fee charged by Field-Trip!"></i></td>
            <td style="text-align:right;">$63</td>
          </tr>
        </tbody>
      </table>
      </section>
      <div class="total-price"><small>Total</small> $378</div>

      <div class="padded">
        <button class="btn btn-lg btn-yellow" id="add-wants">Book Now</button>
      </div>
    </section>
    <a href="<?php echo base_url(); ?>offers" title="Go back to offers" class="btn btn-info bck"><i class="fa fa-chevron-left"></i> Back to Offers</a>
  </section>
  
  <section class="page-content"><section style="padding:0 20px;">
  
  <!-- About -->
  <Section class="well-box-in about">
    <?php $this->load->view('offers/banner_activity.php'); ?>
    
    <div class="exp-hours"><i class="fa fa-clock-o muted"></i> Available Now <small>until</small> 4:00 PM</div>
    <div class="exp-loc"><i class="fa fa-map-marker muted"></i> <a href="#">900 N Birch Rd, Fort Lauderdale, FL</a></div>

    <Section class="exp-about">
      <h3>About this experience</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer quis nunc tellus. Curabitur blandit ultricies est, vel euismod ante feugiat sed. Suspendisse odio velit, pellentesque at odio eget, sollicitudin aliquet lorem.</p>
    </Section>
  </Section>
  <!-- About END -->
  
  <!-- Tags -->
  <Section class="exp-tag-box">
    <ul class="exp-tags">
        <li>Tag1</li>
       <li>Tag2</li>
       <li>Tag3</li>
       <li>Tag4</li>
       <li>Tag5</li>
       <li>Tag6</li>
       <li>Tag7</li>
       <li>Tag8</li>
    </ul>
  </Section>
  <!-- Tags END -->
  
  <!-- Tips -->
  <?php $this->load->view('partials/lists/list_tips.php'); ?>
  <!-- Tips END -->
  
  <!-- Help -->
  <?php $this->load->view('partials/lists/list_exp_helper.php'); ?>
  <!-- Help END -->
  </section></section>
</div>

<?php $this->load->view('offers/checkout/pay_activity.php'); ?>

<script  src="<?php echo base_url(); ?>public/assets/js/page_offers.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/page_exp.css"> 
<!-- FOOTER -->
<?php $this->load->view('partials/footer.php'); ?>
<!-- FOOTER END-->