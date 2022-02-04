$(document).ready(function () {


    $('div.grouping').hover(function () {
        $(this).find('div.img1').animate({top: '-=350'},500);
        $(this).find('div.img2').animate({top: '-=350'},500);
    },function () {
        $(this).find('div.img1').animate({top: '+=350'},500);
        $(this).find('div.img2').animate({top: '+=350'},500);
    });

    // $('input#login').change(function () {
    //     let loginC = $(this).val();

    //     $.ajax({
    //         url: '/',
    //         type: 'POST',
    //         data: {loginC: loginC},
    //         success: function (res) {
    //             console.log(res);
    //             if (res == 'not') {
    //                 $('small#resultLogin').removeClass('d-none');
    //                 $('button#buttReg').attr('disabled', 'disabled');
    //             } else {
    //                 $('small#resultLogin').addClass('d-none');
    //                 $('button#buttReg').removeAttr('disabled');
    //             }
    //         }
    //     })
    // })

    // $('input#regPass2').change(function () {

    //     let pass1 = $('input#regPass1').val()
    //     let pass2 = $('input#regPass2').val()

    //     if (pass1 != pass2) {
    //         $('small#passError').removeClass('d-none') ;
    //         $('input#regPass1').addClass('is-invalid');
    //         $('input#regPass2').addClass('is-invalid');
    //         $('button#buttReg').attr('disabled', 'disabled');
    //     } else {
    //         $('input#regPass1').removeClass('is-invalid');
    //         $('input#regPass2').removeClass('is-invalid');
    //         $('small#passError').addClass('d-none');
    //         $('button#buttReg').removeAttr('disabled');
    //     }


    // });
    $('form#authForm').submit(function(e) {
		e.preventDefault();

		let info = $(this).serialize();

		$.ajax({
			url: '/',
			type: 'POST',
			data: info,
			success: function(res) {
                console.log(res);
				if (res == 'no') {
					$('span#resAuth').show();
				} else {
					location.replace('/?view=profile');
				}
			}
		});
	});
});