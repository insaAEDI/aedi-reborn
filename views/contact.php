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
                <p>
                    <table>
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
                    </table>
                </p>

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
            <iframe width="470" height="550" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=4.871988594532013%2C45.781454798601%2C4.873493313789368%2C45.78299238168183&amp;layer=mapnik&amp;marker=45.78222359544201%2C4.87274095416069" style="border-radius: 5px"></iframe><br/><small><a href="http://www.openstreetmap.org/?mlat=45.78222&amp;mlon=4.87274#map=19/45.78222/4.87274">View Larger Map</a></small>
        </div>
    </div>
</div>
