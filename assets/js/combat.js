$(function () {

    $('button').click(function() {

        // /////////////////////////////////////// //
       // //////// INITIALISATIONS ////////////// //
      // /////////////////////////////////////// //


        var reponse = null;
        var attaque = this.textContent;
        var nom = 'pikachu';
        var cible = 'tortank';





        // //////////////////////////////////// //
       // //////// GESTION AJAX ////////////// //
      // //////////////////////////////////// //

        var url = './assets/php/combat.php'
        var request = new XMLHttpRequest();

        request.onreadystatechange = function () {
            if(this.readyState == 4) {
                console.log(this.responseText);
                reponse = this.responseText;

                // --------- GESTION Jquery --------- //
                
                $('.vie1').css
            }
        }

        request.open('POST', url, true);
        request.send(attaque + nom + cible
        );

    })

})