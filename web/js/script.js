$(document).ready(function () {
	/* прячем первый блок */
	/*$(window).scroll(function() {
		if ($(this).scrollTop() > 5) {
			$('.main_block').addClass('hidden');
			$('body').addClass('scroll');
		}
		else {
			$('.main_block').removeClass('hidden');
			$('body').removeClass('scroll');
		}
	});*/ 

	$('.down').click(function() {
		$('html, body').animate({scrollTop: $('.main_block').actual( 'height' )}, 300);
	});


	/* запускайем попапы */
    $('.fancybox').fancybox({
        closeClick: false,
        // scrolling: 'no',
        openEffect: "fade",
        closeEffect: "fade",
		minWidth:320,
        padding: 0,
        // afterShow: function(){
        //     $(document).on('scroll','body',function(e){
        //         e.preventDefault();
        //     });
        // },
        helpers: {
            overlay: {
                // closeClick: false //,
                // locked: true // default behavior
            }
        }
    });

	/* запускаем стилизицию */
	$('input, select').styler();
		
	/* проверяем согласен ли пользователь с правилами */
	$('label').click(function() {
		if ($('.jq-checkbox').hasClass('checked')){
			$(this).parent().find('button').attr('disabled', false); 
		} else {
			$(this).parent().find('button').attr('disabled', true); 
		}
		return false;
	});
	
	/* запускайем слайдер */
	$('.main_slider').slick({
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		autoplay: true,
		autoplaySpeed: 8000,
	});

	$('.pack-set').click(function() {
		img = $(this).closest(".block-phone").find('.image img').attr('src');
		// $('#pack-set-iphone5s .pack-set-image').attr('src', $(this).next().text());
		$('#pack-set-iphone5s .pack-set-image img').attr('src', img)
	});

	$('.characteristics_d').click(function() {
		text = $(this).closest(".block-phone").find('.characteristics_hidden').html();
		$('.cnt').html(text);
	});

	/* скролим до нужного блока */
	$(function() {
		$('a.scrollto').click(function() {
			$('.phone').removeClass('active');
			$('a.scrollto').removeClass('active');
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$(this).addClass('active');
					$('html,body').animate({
					scrollTop: target.offset().top -80
					
				}, 300);
					target.toggleClass('active');
				}
			}

		});
	});

	/* клик по бургеру */
	$('.burger-button').click(function() {
		$('.burger-menu').slideToggle("fast");
		$('.burger-button').toggleClass('open');
		return false;
	});	
	
	/* функция акордена */
	(function($) {
		var allPanels = $('.accordions > dd');
		var allHead = $('.accordions > dt > a');
		$('body').on('click', '.accordions > dt > a', function() {
		// $('.accordions > dt > a').click(function() {
			$this = $(this);
			$target =  $this.parent().next();
			if ($target.hasClass('active')){
				$target.removeClass('active').slideUp(); 
				$this.removeClass('active'); 
			} else {
				allPanels.removeClass('active').slideUp();
				allHead.removeClass('active');
				$target.addClass('active').slideDown();
				$this.addClass('active');
			}
			return false;
		});

	})(jQuery);
	
	/* КАЛЬКУЛЯТОР */
	
	/* выбор цвета */
	$('.color-block').click(function() {
		// $(this).parent().parent().find(".standart-price span").html($(this).attr('valsprice').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		// $(this).parent().parent().find(".sale-price span").html($(this).attr('valprice').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		$(this).addClass('selected').siblings().removeClass('selected');
		// $(this).parent().parent().find(".memory-block").siblings().removeClass('selected');
		$(this).parent().parent().find(".bay-click").attr('valmprice', $(this).attr('valprice').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		$(this).parent().parent().find(".bay-click").attr('valmcolor', $(this).attr('valcolor'));
		$(this).parent().parent().find(".add-basket").attr('vallink', $(this).attr('vallink'));
		$(this).parent().parent().find(".add-basket").attr('valmprice', $(this).attr('valprice').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		$img = $(this).parent().parent().parent().find(".image img");
		$imglink = $(this).parent().parent().parent().find(".image a");
		if($(this).hasClass('selected')){
			// $img.attr('src', 'content/'+$(this).attr('vallink')+'.png');
			// $imglink.attr('href', 'content/'+$(this).attr('vallink')+'.png');
			$img.attr('src', $(this).attr('vallink'));
			$imglink.attr('href', $(this).attr('vallink'));
		}
		// $(this).parent().parent().find(".memory-block").first().addClass('selected');
	});
	
	/* выбор памяти */
	$('.memory-block').click(function() {
		$this = $(this);
        var a = +$this.parent().parent().parent().find(".selected").attr('valsprice');
        var b = +$this.attr('valsmemory');
        var c = +$this.parent().parent().parent().find(".selected").attr('valprice');
        var d = +$this.attr('valmemory');
		var totalsprice = a+b;
		var totalprice = c+d;
		// $this.parent().parent().find(".standart-price span").html(String(totalsprice).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		// $this.parent().parent().find(".sale-price span").html(String(totalprice).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		$this.addClass('selected').siblings().removeClass('selected');
		$this.parent().parent().find(".bay-click").attr('valmprice', String(totalprice).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
		$this.parent().parent().find(".add-basket").attr('valmprice', String(totalprice).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
	});
	
	/* передаем данные в попапы */
	// $('.bay-click, .add-basket').click(function(){
	//     alert(12);
	// 	$('.popup').find(".model").html($(this).attr('valmodel'));
	// 	var memory = $(this).parent().parent().parent().find(".memory-block.selected").text();
	// 	$('.popup').find(".memory").html(memory)
	// 	$('.popup').find(".color").html($(this).attr('valmcolor'));
	// 	$('.popup').find(".price").html($(this).attr('valmprice').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 '));
	// 	$('#add-basket').find(".image img").attr('src', $(this).attr('vallink'));
    //
	// });

    $('.add-basket').click(function() {
        var img = $(this).attr('vallink');
        $('#add-basket').find(".image img").attr('src', img);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '/mail/addToCart/',
            data: {
                id: $(this).parent().find('input[name="prod_id"]').val()
                // price: $(this).parent().parent().find('.sale-price > span').text(),
                // color: $(this).parent().parent().parent().find('.color-block.selected').data('param-color')
            },
            success: function(result){
                $('.popup').find(".model").html(result.prod.n);
                $('.popup').find(".price").html(result.price);
                $('.cart-block').html(result.data);
            }
        });
    });

	$('.bay-click').click(function(){
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '/mail/addToCartClick/',
			data: {
				id: $(this).parent().find('input[name="prod_id"]').val()
			},
			success: function(result){
				$('.popup').find(".model").html(result.prod.n);
				$('.popup').find(".price").html(result.price);
				$('.popup').find("input[name='prod']").val(result.prod.prod_id);
			}
		});
	});
	
	/* функция корзины */
	$('.add-basket').click(function(){
		$('body').find("header .cart").addClass('active');
		$('body').find("header .cart-block").addClass('active');
	});
	
	$('header .cart').click(function(){
		$('body').find("header .cart-block").slideToggle("fast");
		/*if ($(this).hasClass('active')){
			$('body').find("header .cart-block").slideToggle("fast");
		} else {
			$('body').find("header .cart-block").slideUp("fast");
		}*/
		return false;
	});
	
	$('header .block .delete').click(function() {
		$(this).parent().parent().parent().find('.block').slideUp();
		$('body').find("header .cart").removeClass('active');
	});
	
	$('section.content_block .basket-block .block .delete').click(function() {
		$(this).parent().slideUp();
	});
	
	function checkPhone (phone) {
		var reg = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
		var _this = phone.val().trim()
		if (reg.test(_this)) {
			return true;
		} else {
			return false;
		};
	};
	
	// $("[name=phone]").mask("+7 (999) 999-99-99");
	// $("[name=input-phone]").mask("+7 (999) 999-99-99");
	$('input[name=phone], input[name="input-phone"]').inputmask("+7 (999) 999-99-99");

	$("#order_form").submit(function (event) {
		event.preventDefault()
		$(".error").removeClass("error")
		if (($(this).find("[name=name]").val()).trim().length < 3) {
			$(this).find("[name=name]").addClass("error")
		}

		// if (($(this).find("[name=address]").val()).trim().length < 3) {
		// 	$(this).find("[name=address]").addClass("error")
		// }
		if (!checkPhone($(this).find("[name=phone]"))) {
			$(this).find("[name=phone]").addClass("error");
		} 
		if ($(this).find(".error").length < 1) {
            $("#order_form button").hide();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: '/mail/sendBayClick/',
				data: {
					data: $(this).serialize()
				},
				success: function(result){
					if (result.prod) {
						// _rc('send', 'order', {
						// 	'name': result.name,
						// 	'phone': result.phone,
						// 	'itemId': result.prod,
						// 	'customTransactionId': url('?transaction_id'),
						// 	'orderMethod': 'feedback',
						// 	'callback': function(success, response) {
						// 		// уведомляем пользователя о результате отправки формы
						// 		// вместо alert() можно вывести более юзер-френдли сообщение
						// 		if (success) {
						// 			// alert('Спасибо, ваша заявка принята! Её номер: ' + response.id);
						// 		} else {
						// 			// alert('К сожалению, не удалось отправить заявку.');
						// 		}
						// 	}
						// });
					}
					document.location.href = "/thanks-for-order/";
				}
			});
		};
	});

	$("#checkout").submit(function (event) {
		event.preventDefault();
		$(".error").removeClass("error");
		if (($(this).find("[name=name]").val()).trim().length < 3) {
			$(this).find("[name=name]").addClass("error")
		}

		if (($(this).find("[name=address]").val()).trim().length < 3) {
			$(this).find("[name=address]").addClass("error")
		}

		// if ($("[name=rules]").is(':checked')) {
		// 	$("[name=rules]").parent().removeClass('error');
		// } else {
		// 	$("[name=rules]").parent().addClass('error');
		// }
		
		if (!checkPhone($(this).find("[name=phone]"))) {
			$(this).find("[name=phone]").addClass("error");
		}
		if ($(this).find(".error").length < 1) {
			$(this).find('.center').fadeOut();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: '/mail/checkout/',
				data: {
					name: $(this).find("[name=name]").val(),
					phone: $(this).find("[name=phone]").val(),
					address: $(this).find("[name=address]").val()
					// data: $(this).serialize()
				},
				success: function(result){
					if (result.success) {
						document.location.href = "/thanks-for-order/";
					}
					// _rc('send', 'order', {
					// 	'name': result.name,
					// 	'phone': result.phone,
					// 	'items': result.prod,
					// 	'customTransactionId': url('?transaction_id'),
					// 	'orderMethod': 'feedback',
					// 	'callback': function(success, response) {
					// 		// уведомляем пользователя о результате отправки формы
					// 		// вместо alert() можно вывести более юзер-френдли сообщение
					// 		if (success) {
					// 			// alert('Спасибо, ваша заявка принята! Её номер: ' + response.id);
					// 		} else {
					// 			// alert('К сожалению, не удалось отправить заявку.');
					// 		}
					// 	}
					// });
				}
			});
		}
	});
	
	$("#review_form").submit(function (event) {
		event.preventDefault()
		$(".error").removeClass("error")
		if (($(this).find("[name=name]").val()).trim().length < 3) {
			$(this).find("[name=name]").addClass("error")
		}
		if (($(this).find("[name=rev_text]").val()).trim().length < 3) {
			$(this).find("[name=rev_text]").addClass("error")
		}
		if (!checkPhone($(this).find("[name=phone]"))) {
			$(this).find("[name=phone]").addClass("error");
		} 
		if ($(this).find(".error").length < 1) {
            document.location.href = "/apple/web/review-raw?name=" + $(this).find("[name=name]").val() + "&tel=" + $(this).find("[name=phone]").val() + "&text=" + $(this).find("[name=rev_text]").val();
        }
	});

	$("#contact_form").submit(function (event) {
		event.preventDefault()
		$(".error").removeClass("error")
		if (($(this).find("[name=input-name]").val()).trim().length < 3) {
			$(this).find("[name=input-name]").addClass("error")
		}
		if (($(this).find("[name=rev_text]").val()).trim().length < 3) {
			$(this).find("[name=rev_text]").addClass("error")
		}
		if (!checkPhone($(this).find("[name=input-phone]"))) {
			$(this).find("[name=input-phone]").addClass("error");
		}
		if ($(this).find(".error").length < 1) {
            document.location.href = "/apple/web/review-raw?name=" + $(this).find("[name=input-name]").val() + "&tel=" + $(this).find("[name=input-phone]").val() + "&text=" + $(this).find("[name=rev_text]").val();
        }
	});
 
	// $("#order_form").submit(function (event) {
	// 	event.preventDefault()
	// 	$(".error").removeClass("error")
	// 	if (($(this).find("[name=name]").val()).trim().length < 3) {
	// 		$(this).find("[name=name]").addClass("error")
	// 	}
	// 	if (($(this).find("[name=rev_text]").val()).trim().length < 3) {
	// 		$(this).find("[name=rev_text]").addClass("error")
	// 	}
  //
  // if ($("[name=rules]").is(':checked')) {
  //   $("[name=rules]").parent().removeClass('error');
  // } else {
  //   $("[name=rules]").parent().addClass('error');
  // }
	// 	if (($(this).find("[name=delivery]").val()).trim().length < 3) {
	// 		$(this).find("[name=delivery]").parent().addClass("error")
	// 	}
	// 	if (!checkPhone($(this).find("[name=phone]"))) {
	// 		$(this).find("[name=phone]").addClass("error");
	// 	}
	// 	if ($(this).find(".error").length < 1) {
	// 		$.post("order_mail.php", $(this).serialize()).done(function() {
	// 			$.fancybox.close();
	// 			$.fancybox.open({
	// 				href  : '#success',
	// 				padding: 0,
	// 			});
	// 		})
	// 	};
	// });

	$('body').on('click', '.delete', function() {
		$(this).parent().parent().slideUp();
		removeProdHead($(this).data('remove'));
		location.reload();
	});

	$('body').on('click', '.scrollto', function(event) {
		$('.burger-menu.mobile').slideUp();
		$('.burger-button').removeClass('open');
	});

	// $('body').on('click', '.mobile.active .scrollto', function(event) {
	// 	url = event.target.href;
	// 	location.replace(url);
	// 	setInterval('location.reload()', 1000);
	// });

	$('body').on('click', '.delete2', function() {
		$(this).parent().slideUp();
		removeProdHead($(this).data('remove'));
		location.reload();
	});

	$("input[name=qty]").change(function() {
		var prodId = $(this).data('prod');
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '/mail/act_price/',
			data: {
				new_val: $(this).val(),
				key: prodId
			},
			success: function(result){
				location.reload();
			}
		});
	});

	if ($(window).width() <= 1185) {
		$('.burger-menu').addClass('mobile');
		$('.cat').addClass('mobile_cat');
		$('.mobile_cat').removeClass('scrollto');
	} else {
		$('.burger-menu').removeClass('mobile');
        $('.cat').removeClass('mobile_cat');
    }

    $('body').on('click', '.mobile_cat', function() {
        $('.mobile_category_opened').slideToggle('fast');
        return false;
    });

});

$( window ).resize(function() {
	if ($(window).width() <= 1185) {
		$('.burger-menu .mobile').addClass('active')
	} else {
		$('.burger-menu .mobile').removeClass('active')
	}
	$('.main_slider').slick('slickGoTo', 0);
});

// document.onreadystatechange = function () {
// 	var state = document.readyState
// 	if (state == 'interactive') {
// 	} else if (state == 'complete') {
// 		document.getElementById('interactive');
// 		document.getElementById('load').style.visibility="hidden";
// 		document.getElementById('wrapper').style.opacity="1";
// 	}
// }

// метод генериции выборки телефонов
function dinamPhones(attr) {
	$(function() {
		$('.color-block').on('click', function () {
			if (!attr) {
				$img = $(this).parent().parent().parent().find(".image img");
				$img.attr('src', $(this).attr('vallink'));
			}
			var colorName = $(this).data('param-color');
			var sizeId = $(this).parent().parent().find('.memory-block.selected').data('size-id');
			var category = $(this).parent().parent().parent().find('input[name="category_id"]').val();

			returnChanngePage(colorName, sizeId, category);
		});

		$('.memory-block').on('click', function () {
			var colorName = $(this).parent().parent().find('.color-block.selected').data('param-color');
			var sizeId = $(this).data('size-id');
			var category = $(this).parent().parent().parent().find('input[name="category_id"]').val();
			returnChanngePage(colorName, sizeId, category);
		});

		function returnChanngePage(colorName, sizeId, category) {
			$('#phone-' + category).find('.buttons').fadeOut();
            var csrfToken = $('meta[name="csrf-token"]').attr("content");
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: 'site/change',
				data: {
					category: category,
					colorName: colorName,
					sizeId: sizeId,
                    _csrf : csrfToken
				},
				success: function(result){
					if(result.prodId) {
						if (attr) {
							window.location.href = '/' + result.sef + '/';
						} else {
							$('#phone-' + category).find('.price').show();
							$('#phone-' + category).find('.buttons').show();

							$('#phone-' + result.cat).find('input[name="prod_id"]').val(result.prodId);
							//         $('.price_' + result.cat).fadeIn();
							//
							$('#phone-' + result.cat).find('.sale-price span').text(result.price1);
							$('#phone-' + result.cat).find('.standart-price span').text(result.price2);

							$('#phone-' + category).find('.buttons').fadeIn();
						}
					} else {
						$('#phone-' + category).find('.price').fadeOut();
						$('#phone-' + category).find('.buttons').fadeOut();
					}
				}
			});
		}
	}());
};



removeProdHead = function(id)
{
	$.ajax({
		type: 'POST',
		dataType: 'json',
		url: '/mail/removeProdHead/',
		data: {
			id: id
		},
		success: function(result){
			// var deletedProduct = $('.delete-product-' + id).parent();
			// deletedProduct.slideToggle("slow");
			// setTimeout(function(){
			// 	deletedProduct.remove();
			// }, 500);
			// $('.product-counter').text('Товаров в корзине: ' + result.count);
			// $('.total-product-price span span').text(result.total);
		}
	});
}
