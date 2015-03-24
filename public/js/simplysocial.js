(function($) {

    var simplySocial = {

        init: function() {

            $('.message').on('click', function(e) {
                e.preventDefault();
                this.openModal();
            }.bind(this));

            $('.dialog .close, .dialog .submit').on('click', function(e) {
                e.preventDefault();
                this.closeModal();
            }.bind(this));

        },
        openModal: function() {
            var $body   = $('body'),
                $dialog = $('.dialog');

            $body.addClass('modal');

            // Lets make sure the dialog is centered in the page
            $dialog.css({
                'margin-top': -$dialog.outerHeight() / 2,
                'margin-left': -$dialog.outerWidth() / 2
            });

            $body.addClass('dialog-open');
        },
        closeModal : function() {

            $('body').removeClass('modal');

        },
        toggleComments : function($post) {
            $post.toggleClass('comments');

            if($post.hasClass('comments')) {
                $('.label', $post)[0].innerHTML = 'Collapse';
            }
            else
            {
                $('.label', $post)[0].innerHTML = 'Expand';
            }
        }
    };

    $(document).keyup(function(e) {

        // Check escape key
        if (e.keyCode == 27) {
            simplySocial.closeModal();
        }
    });

    $( document ).ready(function() {

        simplySocial.init();

        $('.expand').on('click', function(e) {
            e.preventDefault();
            simplySocial.toggleComments($(this.closest('.post')));

        });

        var $passwordFields = $('.settings form input[type="password"]');

        console.log($passwordFields[0].value !== '', $passwordFields[1].value !== '' );

        $('.settings form input[type="password"]').on('blur', function(e) {

            if(($passwordFields[0].value !== '' && $passwordFields[1].value !== '')) {
                if($passwordFields[0].value == $passwordFields[1].value) {
                    $passwordFields.removeClass('fail');
                    $passwordFields.addClass('pass');
                }
                else {
                    $passwordFields.removeClass('pass');
                    $passwordFields.addClass('fail');
                }
                console.log('filled out');
            }
            else {
                $passwordFields.removeClass('pass');
                $passwordFields.removeClass('fail');
            }

        });

        // Check if we are on the home page
        if($('body.home').length > 0) {
            var $heroInput = $('.hero input');

            $heroInput.on('click', function () {
                this.value = '';
                $(this).css('border', '0');
            });

            $heroInput.on('blur', function () {
               if(this.value == '') {
                   this.value = 'What\'s on your mind?';
                   $(this).css('border-left', '1px solid #fff');
               }
            });

            $('[data-toggle]').on('click', function(e) {

                e.preventDefault();

                var action = $(this).attr('data-toggle'),
                    $body = $('body');

                if(!$body.hasClass(action)) {
                    $body.toggleClass('list');
                    $body.toggleClass('grid');

                    $('.hero .action').removeClass('active');
                    $('.hero .action.' + action).addClass('active');

                }

            });
        }


    });

})(jQuery);