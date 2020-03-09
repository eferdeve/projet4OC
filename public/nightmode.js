//Mode nuit
class NightMode {
    constructor() {
        $('#night').click(this.Night.bind(this));
        $('#light').click(this.Light.bind(this));
        if ($('#night').show()) {
            $('#light').hide();
        }
    }

    Night() {
        $('#pagecontent').css('background-color', 'black');
        $('#night').hide();
        $('#light').show();
        $('#light').css('color', 'white');
        $('#light').css('background', 'black');
        $('.boxed-grey').css('background', 'black');
        $('p').css('color', 'white');
    }

    Light() {
        $('#pagecontent').css('background-color', 'white');  
        $('#light').css('font-color', 'white'); 
        $('#light').hide()
        $('#night').show();
        $('.boxed-grey').css('background', '#f9f9f9');
        $('p').css('color', '#666');
    }
    
}
