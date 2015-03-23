(function($) {

    var simplySocial = {

        openModal: function() {
            $('body').addClass('modal');

            var $dialog = $('.dialog');

            // Lets make sure the dialog is centered in the page
            $dialog.css({
                'width': $dialog.outerWidth(),
                'margin-top': -$dialog.outerHeight() / 2,
                'margin-left': -$dialog.outerWidth() / 2
            });

            this.$body.addClass('dialog-open');
        },
        closeModal : function() {

            $('body').removeClass('modal');


        }
    };

    $( document ).ready(function() {

        $('.message.modal').on('click', function(e) {
            e.preventDefault();
            simplySocial.openModal();
        });

        $('.dialog .close').on('click', function(e) {
            e.preventDefault();
            simplySocial.closeModal();
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