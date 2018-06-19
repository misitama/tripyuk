<?php
	use App\Models\Setting;

	$setting = Setting::first();
?>

<html>
	<head>
		<title>CREIDS</title>
	</head>
	<body>
		<table id="wrapper" style="font-size: 14px; color: #0d0f3b; font-family: arial; width: 100%; line-height: 20px;">
			<tr>
				<td id="header-container" style="padding: 10px 20px; text-align: center;">
					{{HTML::image('img/admin/creids_logo.png', '', array('style'=>'width: 200px;'))}}
				</td>
			</tr>
			<tr>
				<td id="section-container" style="padding: 20px;">
					<br>
					Reset Password,<br><br>

					<p>
						Click button below to reset your password
					</p>

					<br>

					<a href="{{URL::to(Crypt::decrypt($setting->admin_url) . '/password/reset/' . $token)}}" style="position: relative; display: table; padding: 10px 15px; background: #f7961e; color: #fff; font-size: 12px; text-decoration: none;">
						Reset Password
					</a>

					<br><br>
					This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.

					<br><br>

					Best regards, <br>
						
					CREIDS
					<br><br>
					
					<p>
						
						If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser.
						<br><br>
						<span style="color: blue;">
							{{ URL::to(Crypt::decrypt($setting->admin_url) . '/password/reset/' . $token) }}
						</span>
					</p>

					<br>
				</td>
			</tr>
			<tr>
				<td class="not-reply" style="font-size: 11px; line-height: 13px;padding-left: 20px;">
					<i>
						*This email was sent from a notification-only address that cannot accept incoming emails. Please do not reply to this email.
					</i>
					<br><br>
				</td>
			</tr>
			<tr>
				<td  id="footer-container" style="padding: 10px 20px; color: #fff; background: #f7961e; text-align: center">
					<span>
						© {{date('Y')}} - CREIDS
					</span>
				</td>
			</tr>
		</table>
	</body>
</html>