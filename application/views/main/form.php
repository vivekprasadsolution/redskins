 
<body class="landing">
<div class="container-fluid">
<div class="row">
<div class="right-panel-container">
<div class="right-panel">
<div class="custom-logo">
<img src="<?php echo base_url();?>supporting/img/logo.png" attr="redskins logo">
</div>
<div class="player-img">
<img src="<?php echo base_url();?>supporting/img/player-images.png">
</div>
</div>
</div>
<div class="left-panel-container">
<div class="left-panel">
<h4>Bon Secours Training Center, 2401 W Lelgh St, Richmond, VA 23220</h4>
<h4 class="text-center"><strong>2018 Redskins Training Camp</strong></h4>
<div class="registration_form">
<form name="registration" method="POST" class="clearfix" action="<?php echo base_url()?>Main_ci">
<div class="input-field clearfix">
<div class="col-md-6">
<input type="text" id="registration_primaryGuest_firstName" name="registration[primaryGuest][firstName]" required="required" placeholder="First Name" class="form-control form-control" />
</div>
<div class="col-md-6">
<input type="text" id="registration_primaryGuest_lastName" name="registration[primaryGuest][lastName]" required="required" placeholder="Last Name" class="form-control form-control" />
</div>
</div>
<div class="input-field clearfix">
<div class="col-md-6">
<input type="email" id="registration_primaryGuest_email" name="registration[primaryGuest][email]" required="required" placeholder="Email" class="form-control form-control" />
</div>
<div class="col-md-6">
<input type="text" id="registration_primaryGuest_zipCode" name="registration[primaryGuest][zipCode]" class="form-control zipcode-input form-control" placeholder="Zip Code" size="5" maxLength="5" maxlength="5" minlength="5" />
</div>
</div>
<div class="input-field clearfix">
<div class="col-md-6">
<select id="registration_noOfGuests" name="registration[noOfGuests]" placeholder="No. of Guests" class="form-control form-control"><option value="">No. of Guests</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
</div>
</div>
<div class="input-field clearfix" style="margin-top: 25px;">
<div class="col-md-12">
<div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_seasonTicketWaitlist" name="registration[primaryGuest][subscriptions][seasonTicketWaitlist]" value="1" />
Yes, I would like to sign up for the FREE Season Ticket Waitlist.
</label></div>
</div>
</div>
<div class="input-field clearfix">
<div class="col-md-12">
<div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_womensClub" name="registration[primaryGuest][subscriptions][womensClub]" value="1" />
Yes, I would like to sign up for the FREE Redskins Women's club.
</label></div>
</div>
</div>
<div class="input-field clearfix">
<div class="col-md-12">
<div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_offers" name="registration[primaryGuest][subscriptions][offers]" value="1" />
Yes, I would like to receive special offers from the Redskins and her Partner*.
</label></div>
</div>
</div>
<div class="input-field clearfix">
<div class="col-md-12">
<div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_saluteMilitaryAppreciationClub" name="registration[primaryGuest][subscriptions][saluteMilitaryAppreciationClub]" value="1" />
Yes, I would like to sign up for the FREE Redskins Salute Military Appreciation Club.
</label></div>
</div>
</div>
<div class="invatation_details">
<p>
Invite your friends and family to the Redskins Training Camp. You are not required to register kids 13 and under - your Fan Mobile Pass will also be valid for their entry.</p>
</div>
<div style="margin-left:10%;" class="input_fields_wrap invitee-list form-inline" data-prototype="&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;input-field&#x20;clearfix&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;add&#x20;friend-firstname&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;input&#x20;type&#x3D;&quot;text&quot;&#x20;id&#x3D;&quot;registration_guests___name___firstName&quot;&#x20;name&#x3D;&quot;registration&#x5B;guests&#x5D;&#x5B;__name__&#x5D;&#x5B;firstName&#x5D;&quot;&#x20;required&#x3D;&quot;required&quot;&#x20;placeholder&#x3D;&quot;First&#x20;Name&quot;&#x20;class&#x3D;&quot;form-control&#x20;form-control&quot;&#x20;&#x2F;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;add&#x20;friend-lastname&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;input&#x20;type&#x3D;&quot;text&quot;&#x20;id&#x3D;&quot;registration_guests___name___lastName&quot;&#x20;name&#x3D;&quot;registration&#x5B;guests&#x5D;&#x5B;__name__&#x5D;&#x5B;lastName&#x5D;&quot;&#x20;required&#x3D;&quot;required&quot;&#x20;placeholder&#x3D;&quot;Last&#x20;Name&quot;&#x20;class&#x3D;&quot;form-control&#x20;form-control&quot;&#x20;&#x2F;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;add&#x20;friend-email&quot;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;input&#x20;type&#x3D;&quot;email&quot;&#x20;id&#x3D;&quot;registration_guests___name___email&quot;&#x20;name&#x3D;&quot;registration&#x5B;guests&#x5D;&#x5B;__name__&#x5D;&#x5B;email&#x5D;&quot;&#x20;required&#x3D;&quot;required&quot;&#x20;placeholder&#x3D;&quot;Email&quot;&#x20;class&#x3D;&quot;form-control&#x20;form-control&quot;&#x20;&#x2F;&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&lt;div&#x20;class&#x3D;&quot;col-md-3&#x20;remove_field&#x20;&quot;&gt;X&lt;&#x2F;div&gt;&#x0A;&#x20;&#x20;&#x20;&#x20;&lt;&#x2F;div&gt;&#x0A;">
</div>
<div class="input-field clearfix text-center">
<div class="col-md-12">
<input type="button" name="addfriends" value="+ Add Friends" class="addfriend" id="add-invitee-trigger">
<input id="main_submit" type="submit" name="getregisterd" value="Submit">
</div>
</div>
<div class="hide">
<div class="form-group">
	<div class="form-group collection-items registration_guests_form_group" data-prototype="" data-prototype-name="__name__" data-prototype-label="__name__label__" id="collectionregistration_guests_form_group">
	</div>
</div>
	<input type="hidden" id="registration_step" name="registration[step]" class="form-control" />
	<input type="hidden" id="registration__token" name="registration[_token]" class="form-control" value="JEHzQkWLuQpe-ZAKarARZkEl5UYQkJYbcqDcF0AdfKg" />
</div>
</form>
<div class="details_reg">
<p>Entry is first come, first serve. Date of camp are subject to change. See complete schedule and more information at <a href="http://www.redskins.com/trainingcamp" target="_blank">redskins.com/trainingcamp.</a> <br /><br />
* Please share my email address with NBC Universal, so NBC Universal can send me information about special offer and promotion. I have read and agree to <a href="https://tracking.cirrusinsight.com/6305dab5-367d-4a0f-a674-87d2e81e6e99/nbcuniversal-com-privacy" target="_blank"> NBC UNERVERSAL’S PRIVACY POLICY. </a><br /><br /><br /></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="add_friend"></div>
