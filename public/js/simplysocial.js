(function($) {

    var simplySocial = {

        init: function() {

            $('.message').on('click', function(e) {
                e.preventDefault();
                this.openModal();
            }.bind(this));

            $('.dialog .close').on('click', function(e) {
                e.preventDefault();
                this.closeModal();
            }.bind(this));

        },
        openModal: function() {
            var $body = $('body');

            $body.addClass('modal');

            var $dialog = $('.dialog');

            // Lets make sure the dialog is centered in the page
            $dialog.css({
                'width': $dialog.outerWidth(),
                'margin-top': -$dialog.outerHeight() / 2,
                'margin-left': -$dialog.outerWidth() / 2
            });

            $body.addClass('dialog-open');
        },
        closeModal : function() {

            $('body').removeClass('modal');

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