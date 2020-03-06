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
    }

    Light() {
        $('#pagecontent').css('background-color', 'white');  
        $('#light').css('font-color', 'white'); 
        $('#light').hide()
         $('#night').show();
    }
    
}
