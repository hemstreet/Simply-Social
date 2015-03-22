(function($) {

    $( document ).ready(function() {
        var $heroInput = $('.hero input');

        $heroInput.on('click', function () {
            this.value = '';
        });

        $heroInput.on('blur', function () {
           if(this.value == '') {
               this.value = 'What\'s on your mind?';
           }
        });
    });

})(jQuery);