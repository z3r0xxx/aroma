<?php

$product_id = $_POST["product_id"];
$product_type = $_POST["product_type"];
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$product_permalink = $_POST["product_permalink"];
$product_size = $_POST["size"];

$user_id = get_current_user_id();
if ( $user_id == 1 ) {

    echo "<b>ID продукта: </b>";
    echo $product_id;
    echo '<br>';
    echo "<b>Тип продукта: </b>";
    echo $product_type;
    echo '<br>';
    echo "<b>Название продукта: </b>";
    echo $product_name;
    echo '<br>';
    echo "<b>Цена продукта: </b>";
    echo $product_price;
    echo '<br>';
    echo "<b>Ссылка на продукт: </b>";
    echo '<a href='.$product_permalink.'>'.$product_permalink.'</a>';
    echo '<br>';
    echo "<b>РАЗМЕР: </b>";
    echo $product_size;
    echo '<br>';

}

?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>me - Оформление заказа</title>

		<link rel="icon" href="<?php bloginfo('template_directory') ?>/img/Fevicon.png" type="image/png">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">

		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/nice-select/nice-select.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
	</head>
	
	<body>

        <style>
			.wrap {
				width: 65vw;
				max-width: 620px;
				min-width: 540px;
				margin: 0 auto;
			}

			.container {
				font-family: 'Tenor Sans';
			}

			.text {
				font-family: 'Tenor Sans';
				font-style: normal;
				font-weight: 400;
				line-height: 24px;
				font-size: 16px;
			}
			.text .title-h1, .text h1 {
				font-family: 'Tenor Sans';
				line-height: 40px;
				font-size: 30px;
				text-align: center;
				letter-spacing: .2em;
				text-transform: uppercase;
				color: #1f6655;
				margin: 70px 0 70px -390px;
				width: 780px;
				position: relative;
				left: 50%;
			}
		</style>

		<!-- ================ start banner area ================= -->	
		<div class="wrap">
			<div class="text">
				<h1>ОФОРМЛЕНИЕ ЗАКАЗА</h1>
			</div>
		</div>
		<!-- ================ end banner area ================= -->
  
  
		<!--================Checkout Area =================-->
		<section class="checkout_area section-margin--small">
			<div class="container">
				<div class="billing_details">
					<div class="row">
						<div class="col-lg-8">
							<h3>Детали заказа</h3>
							<form class="row contact_form" action="http://mefreedom.ru/red" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                <input type="hidden" name="product_type" value="<?php echo $product_type; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
                                <input type="hidden" name="product_permalink" value="<?php echo $product_permalink; ?>">
                                <input type="hidden" name="product_size" value="<?php echo $product_size; ?>">

								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" name="user_name" placeholder="Имя" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" name="surname" placeholder="Фамилия" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" name="number" placeholder="Номер телефона" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" name="compemailany" placeholder="E-mail" required>
								</div>
								<div class="col-md-12 form-group p_star">
									<select name="country" class="country_select">
										<option value="spb">Санкт-Петербург</option>
										<option value="moscow">Москва</option>
										<option value="vladik">Владивосток</option>
									</select>
								</div>
								<div class="col-md-12 form-group p_star">
									<input type="text" class="form-control" name="add1" placeholder="Улица" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" name="add2" placeholder="Дом" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" name="floor" placeholder="Квартира" required>
								</div>
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" name="zip" placeholder="Почтовый индекс" required>
								</div> 
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" name="comment" placeholder="Твой комментарий к заказу" required>
								</div> 
								<!-- <div class="col-md-12 form-group mb-0">
									<div class="creat_account">
										<h3>Shipping Details</h3>
										<input type="checkbox" id="f-option3" name="selector">
										<label for="f-option3">Ship to a different address?</label>
									</div>
									<textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
								</div>-->
                                <button class='button primary-btn'>КУПИТЬ</button>
                                
							</form>
						</div>
						<div class="col-lg-4">
							<div class="order_box">
								<h2>Ваш заказ</h2>
								<ul class="list">
									<li><a href="#"><h4>Продукт <span>Цена</span></h4></a></li>
									<li><a href="#"><?php echo $product_name; ?> <span class="middle">x 01</span> <span class="last"><?php echo $product_price; ?></span></a></li>
								</ul>
								<ul class="list list_2">
									<li><a href="#">ЦЕНА <span><?php echo $product_price; ?></span></a></li>
									<li><a href="#">ДОСТАВКА <span>бесплатно</span></a></li>
									<li><a href="#">ИТОГО <span><?php echo $product_price; ?></span></a></li>
								</ul>
								<div class="creat_account">
									<input type="checkbox" id="f-option4" name="selector" required>
									<label for="f-option4">Я согласен с  </label>
									<a href="privacy"> Политикой обработки персональных данных</a>
								</div>
								<div class="text-center">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Checkout Area =================-->



		<script src="<?php bloginfo('template_directory') ?>/vendors/jquery/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.bundle.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/skrollr.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/nice-select/jquery.nice-select.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/jquery.ajaxchimp.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/mail-script.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
	</body>
</html>