(function($) {

    var simplySocial = {

        init: function() {

            $('.message').on('click', function(e) {
                e.preventDefault();
                this.openModal();
            }.bind(this));

            $('.dialog .close, .dialog .submit, .underlay').on('click', function(e) {
                e.preventDefault();
                this.closeModal();
            }.bind(this));

            $(document).keyup(function(e) {

                // Check escape key
                if (e.keyCode == 27) {
                    this.closeModal();
                }
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

            var $body = $('body');

            $body.removeClass('modal media view-media dialog-open');

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

    $( document ).ready(function() {

        simplySocial.init();

        if($('.expand').length > 0) {
            $('.expand').on('click', function(e) {
                e.preventDefault();
                simplySocial.toggleComments($($(this).parents('.post').first()));
            });
        }

        if($('.media').length > 0) {

            $('.media').on('click', function(e) {
                e.preventDefault();

                var $post   = $($(this).parents('.post').first()),
                    $dialog = $('.dialog'),
                    media   = $(this).clone();

                $('body').addClass('view-media');
                $('.media', $dialog).remove();

                media.prependTo($dialog);

                simplySocial.openModal($post)

            });

        }

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

        if($('body.settings').length > 0) {

            var $passwordFields = $('.settings form input[type="password"]');

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
        }

    });

})(jQuery);