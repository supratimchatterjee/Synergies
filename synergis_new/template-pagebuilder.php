<?php
/*
Template Name: Pagebuilder
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!--Section: Banner-->
		<div class="site-banner uk-cover-background" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/banner1.jpg')">
		</div>
		<!--End-->

		<!--Section: Secondary Menu-->
		<div class="secondary-menu-section">
			<div class="uk-container uk-container-center">
				<label class="tm-page-label uk-float-left">Support</label>
				<nav class="uk-navbar">
					<ul class="uk-navbar-nav">
						<li><a href="">support</a></li>
						<li><a href="">training</a></li>
						<li><a href="">events</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!--End-->

		<!--Section: Text Block-->
		<div class="help-desk">
			<div class="uk-container uk-container-center">
				<div class="uk-block">
					<h2>
						Helpdesk
					</h2>
					<p>
						Synergis understands that technical support is critical to the success of your organization, and that the level of support required varies from client to client. We have different Autodesk support plans so you can get the one that meets your needs, and we make it really easy to get your questions answered so you can stay ahead. The Synergis Helpdesk support team offers personalized service, knowledgeable resources and quick responses. Our Certified Applications Consultants serve as an extension of your internal team and provide invaluable support for everyday issues that may arise.
					</p>
				</div>
			</div>
		</div>
		<!--End-->

		<!--Section: Text with overlay background-->
		<div class="text-with-bg tm-right uk-cover-background"  style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-2.jpg')">
			<div class="uk-container uk-container-center">
				<div class="uk-width-medium-1-2 uk-push-1-2 uk-block-large tm-content">
					<h4>
						Helpdesk
					</h4>
					<p>
						Synergis understands that technical support is critical to the success of your organization, and that the level of support required varies from client to client. We have different Autodesk support plans so you can get the one that meets your needs, and we make it really easy to get your questions answered so you can stay ahead. The Synergis Helpdesk support team offers personalized service, knowledgeable resources and quick responses. Our Certified Applications Consultants serve as an extension of your internal team and provide invaluable support for everyday issues that may arise.
					</p>
				</div>
			</div>
		</div>
		<!--End-->

		<!--Section: Enquery-->
		<div class="uk-block enquery-section">
			<div class="uk-container uk-container-center">
				<div class="uk-grid" data-uk-margin="{cls:'uk-margin-top'}">
					<div class="uk-width-medium-1-2 tm-left-panel">
						<div class="uk-clearfix">
							<div class="tm-panel-icon uk-float-left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-1.png">
							</div>
							<div class="tm-content">
								<strong>Submit Requests</strong>
								<p>
									Multiple ways to submit your support requests and initiate a case log:
								</p>

							</div>
						</div>
					</div>
					<div class="uk-width-medium-1-2 tm-right-panel">
						<div class="tm-content">
						<strong>Our Response Time</strong>
							<p>
								Response times within four hours from the date and time that the Helpdesk request was properly submitted. This response will consist either of: (a) a suggested problem resolution; or (b) in the case of a request which in Synergis’ sole discretion requires research or escalation, a notification of the estimated time to provide the Designated Contactwith a resolution or a workaround.
							</p>
							<em>
								To log a case, please be prepared to provide your name, email, phone number, application name and version, description of the issue, and steps to reproduce the issue.
	Subscription to the “Synergis 911” monthly newsletter, sent exclusively to contract customers. We’ll share helpful tips, news on software updates, links, stats, and much more.
							</em>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End-->

		<!--Section: Text with overlay background-->
		<div class="text-with-bg tm-right uk-cover-background"  style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/bg-2.jpg')">
			<div class="uk-container uk-container-center">
				<div class="uk-width-medium-1-2 uk-block-large tm-content">
					<h4>
						Categories
					</h4>
					<p>
						<strong>AutoCAD, Vertical Products, Suites, and Industry Collections*</strong>
						Synergis understands that technical support is critical to the success of your organization, and that the level of support required varies from client to client. We have different Autodesk support plans so you can get the one that meets your needs, and we make it really easy to get your questions answered so you can stay ahead. The Synergis Helpdesk support team offers personalized service, knowledgeable resources and quick responses. Our Certified Applications Consultants serve as an extension of your internal team and provide invaluable support for everyday issues that may arise.
					</p>
				</div>
			</div>
		</div>
		<!--End-->

		<!--Section : Table One / Type one-->
		<div class="uk-block tm-table-section type-one">
			<div class="uk-container uk-container-center">
				<table class="uk-table uk-table-condensed uk-table-hover">
                    <thead>
                        <tr class="uk-table-middle">
							<th>Table Heading</th>
							<th colspan="2">Table Heading</th>
							<th colspan="2">Table Heading</th>
                        </tr>
						<tr class="uk-table-middle">
							<th></th>
							<th>Table Heading</th>
							<th>Table Heading</th>
							<th>Table Heading</th>
							<th>Table Heading</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="uk-table-middle">
							<td></td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
                        </tr>
						<tr class="uk-table-middle">
                            <td></td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
                        </tr>
						<tr class="uk-table-middle">
                            <td></td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
		<!--End-->

		<!--Section : Table One / Type one-->
		<div class="uk-block tm-table-section type-two">
			<div class="uk-container uk-container-center">
				<table class="uk-table uk-table-condensed uk-table-hover">
                    <thead>
                        <tr class="uk-table-middle">
							<th>Table Heading</th>
							<th colspan="2">Table Heading</th>
							<th colspan="2">Table Heading</th>
                        </tr>
						<tr class="uk-table-middle">
							<th></th>
							<th>Table Heading</th>
							<th>Table Heading</th>
							<th>Table Heading</th>
							<th>Table Heading</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="uk-table-middle">
							<td></td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
                        </tr>
						<tr class="uk-table-middle">
                            <td></td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
                        </tr>
						<tr class="uk-table-middle">
                            <td></td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
							<td>Table Heading</td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
		<!--End-->
	<?php endwhile; ?>

<?php
get_footer();
