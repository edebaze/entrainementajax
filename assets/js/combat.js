$(function () {
    
        $('button').click(function() {
            
    
              // /////////////////////////////////////// //
             // //////// INITIALISATIONS ////////////// //
            // /////////////////////////////////////// //
    
    
            var reponse = null;
            var attaque = this.textContent;
            var nom = 'Pikachu';
            var cible = 'Tortank';
    


    
              // //////////////////////////////////// //
             // //////// GESTION AJAX ////////////// //
            // //////////////////////////////////// //
    
            $(".zoneText").load("./assets/php/combat.php", { // accolades !
                nom : nom,
                cible : cible,
                attaque : attaque
            });
    
            $(".zoneText").html("<p>En attente de connexion...</p>");
    
        })
    
    })




