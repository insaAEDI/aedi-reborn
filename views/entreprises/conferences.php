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
    <div class="well">
        <h1>Conférences</h1>
        <p>
            Car le métier d'ingénieur en informatique évolue constamment au fil du temps, il est nécessaire
            de savoir actualiser ses connaissances de manière active. En outre, le planning scolaire
            ne permet pas de pouvoir aborder tous les sujets relatifs à l'ingénierie informatique. Pour ces raisons,
            il est nécessaire que les étudiants apprennent par d'autres sources que l'école.
        </p>
        <p>
            Pour leur faciliter la tâche, l'AEDI propose des conférences aux élèves. Ces séminaires sont
            proposés par des <strong>ingénieurs issus du monde de l'entreprise</strong>, qui présentent des <strong>technologies ou des
                concepts</strong>. Ces rencontres sont à la fois profitables pour les intervenants qui améliorent leurs carnets
            de contacts et les étudiants qui en apprennent plus sur la société.
        </p>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="well">
                <h2><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Concept</h2>
                <p>Le concept des conférences est de faire se rencontrer les étudiants et les entreprises tout en permettant
                    aux futurs ingénieurs d'<strong>actualiser leurs connaissances du monde de l'entreprise</strong>.</p>
                <p>Pour cela, des employés d'une société viennent à l'INSA les jeudis après-midis, effectuent leurs présentations devant des
                    étudiants inscrits de leur plein gré pour assister à la conférence.</p> 
                <p>A la fin de celle-ci, ingénieurs et étudiants discutent de manière informelle, parfois autour d'un buffet. Suite à cette expérience, les parties
                    prenantes repartent avec de <strong>nouveaux contacts</strong> professionnels.</p>
            </div>
        </div>
        <div id="infoRif" class="col-sm-8">
            <div class="well">
                <h2><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Informations</h2>
                <p>
                    Vous êtes une entreprise et vous êtes intéressés pour présenter cette dernière, ou une méthode, un thème ou une technologie que vous maîtrisez en interne? Voici les informations qui vous intéressent.
                </p>

                <h3>Dates possibles</h3>
                <p>
                    Les Jeudis après-midi, hors périodes de vacances scolaires.
                </p>

                <h3>Tarifs</h3>
                <p>
                    Les tarifs pour présenter une conférence thématique dépendent du statut de votre entreprise par rapport
                    à l'AEDI : vous aurez ainsi accès à un tarif différent si votre société parraine une des trois promotions
                    en cours.
                </p>
                <p>
                    Ces tarifs comprennent les prestations suivantes :
                <ul>
                    <li>Communication auprès des étudiants : campagnes d'affichage, mailing listes, etc.</li>
                    <li>Logistique liée à la conférence : réservation / mise à disposition de la salle, accueil, etc.</li>
                    <li>Réservation et mise en place d'un buffet (avec supplément).</li>
                </ul>
                </p>
                <h3>Questions</h3>
                <p>Pour plus d'informations concernant l'organisation d'un tel évènement, n'hésitez pas à nous contacter à l'adresse suivante :</p>
                <span class="redirect">rf.noyl-asni.setsil@uaerub.idea</span>
            </div>
        </div>
    </div>
</div>
