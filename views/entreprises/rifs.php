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
        <div class="col-sm-6">
            <div class="well">
                <h1>Rencontres IF</h1>
                <p>
                    Les Rencontres IF, ou RIFs, sont une manifestation propre au Département Informatique de l'INSA de Lyon. Elles permettent, le temps d'une journée, d'élaborer un lien privilégié entre les entreprises et les étudiants.
                </p>
                <p>
                    Fort de son succès depuis plus de <strong>dix ans</strong>, cet évènement se renouvelle chaque année en recherchant toujours plus de qualité dans sa prestation.
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="thumbnail">
                <img src="/assets/img/rifs_salle.jpg" alt="Une salle avec toutes ses entreprises">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="well">
                <h2><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span> Concept</h2>
                <p>
                    <strong>Plus d'une vingtaine d'entreprises</strong> sont invitées au sein du département afin de venir à la <strong>rencontre des étudiants</strong>. Celles-ci y sont accueillies par une équipe composée exclusivement d'étudiants, et la journée, banalisée pour l'évènement, permettra à chacun de venir se renseigner, poser des questions, prendre des contacts, ...
                </p>
                <p>
                    En fin de matinée, l'équipe organisatrice et les intervenants de chaque entreprise seront conviés à un déjeuner de manière à ponctuer l'évènement par une pause conviviale.
                </p>
                <p>
                    Les Rencontres IF sont aussi une occasion idéale pour les étudiants de <strong>trouver un stage ou un éventuel futur premier emploi</strong>. Il est ainsi conseillé aux entreprises de préparer, si elles le désirent, plusieurs propositions adaptées aux différentes promotions.
                </p>
                <p>
                    Encore une fois, l'objectif de cet évènement est évidemment d'offrir une <strong>visibilité unique</strong> entre étudiants et entreprises, et de tisser des <strong>relations</strong> entre les deux.
                </p>
            </div>
        </div>

        <div class="col-sm-8">
            <div class="well">
                <h2><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Informations</h2>

                <h3>Date</h3>
                <p>
                    Les prochaines Rencontres IF auront lieu le jeudi 14 Janvier 2016.
                </p>


                <h3>Tarifs</h3>
                <p>
                    Les tarifs sont étudiés afin de remercier les entreprises qui s'investissent en faveur du département informatique. Voici un aperçu de la grille tarifaire :
                </p>

                <ul>
                    <li>Entreprise parrainant l'une des trois promotions en cours : Invitée</li>
                    <li>Autres entreprises : Plein Tarif</li>
                </ul>

                <p style="margin-top: 10px;" class="comment">
                    Pour connaître les tarifs exacts, n'hésitez pas à nous contacter afin de vous renseigner au mieux.
                </p>

                <h3>Questions</h3>
                <p>Pour plus d'informations concernant cet évènement, veuillez nous contacter à l'adresse suivante : <br><span class="redirect">rf.noyl-asni.setsil@ossa.esirpertne.idea</span></p>

                <div id="inscriptionRif">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Inscription</h2>
                    <p>
                        Pour vous inscrire aux prochaines Rencontres IF, merci de nous contacter le plus rapidement possible. Nous étudierons alors votre demande, et vous répondrons dans les plus brefs délais. 
                    </p>
                    <p>Contact : <span class="redirect">rf.noyl-asni.setsil@ossa.esirpertne.idea</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
