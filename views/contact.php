<script>
$(document).ready(function() {
    var inverted = false;
    $('.redirect').mouseover(function() {
        if (!inverted) {
            $.each($('.redirect'), function() {
                $(this).text($(this).text().split('').reverse().join('')).removeClass('redirect');
            });
            inverted = true;
        }
    });
});
</script>

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="well">
                <h1>Contact</h1>
                <p>Vous souhaitez obtenir des informations sur les évènements organisés, entamer un partenariat, ou tout simplement nous dire bonjour ?<br><strong>L'échange est notre priorité !</strong><br>Voici nos coordonnées :</p>
                <h2>Emails</h2>
                <table >
                    <tr>
                        <td>Bureau de l'Association  </td>
                        <td>
                            <span class="redirect">rf.noyl-asni.setsil@uaerub.idea</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Relations avec les Entreprises</td>
                        <td>
                            <span class="redirect">rf.noyl-asni.setsil@ossa.esirpertne.idea</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Communication</td>
                        <td>
                            <span class="redirect">rf.noyl-asni.setsil@ossa.moc.idea</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Concert IF</td>
                        <td>
                            <span class="redirect">rf.noyl-asni.setsil@ossa.trecnoc.idea</span>
                        </td>
                    </tr>
                </table><br>
                <h2>Téléphone</h2>
                <p>+33 (0) 4 78 89 69 02</p>

                <h2>Adresse</h2>
                <address>
                    AEDI - INSA de Lyon<br />
                    Département Informatique, Bat. 502<br />
                    20, av. Albert Einstein<br />
                    69621 Villeurbanne Cedex - France
                </address>
            </div>
        </div>
        <div class="col-md-5">
            <iframe style="border-radius:5px" id="gmap" class="adapt-width" span=5 width="470" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?ie=UTF8&cid=15394763513657611469&q=Association+des+Etudiants+Informatique+de+l%27INSA-Lyon&iwloc=A&gl=FR&hl=fr&amp;output=embed"></iframe>
        </div>
    </div>
</div>
