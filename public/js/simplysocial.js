(function($) {

    $( document ).ready(function() {
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

            if($body.hasClass(action)) {
                console.log('already showing');
            }
            else {
                $body.toggleClass('list');
                $body.toggleClass('grid');
            }

        });


    });

})(jQuery);