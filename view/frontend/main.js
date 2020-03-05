//Mode nuit
class NightMode {
    constructor() {
        $('#night').click('click', Night());
    }

    Night(){
        $('#pagecontent').css('background-color', 'black');
    }

}

let nightmode = new NightMode();