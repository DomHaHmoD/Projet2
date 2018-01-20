/* file js for the popup */
let popupok = '<div id="modal1" class="modal">
    <div class='modal-content'>
    <h4>Modal Header</h4>
<p>Vos informations ont bien été enregistrées</p>
</div>
<div class='modal-footer'>
    <a href='#!' class='modal-action modal-close waves-effect waves-green btn-flat'>Agree</a>
    </div>
    </div>";
$(\'#modal1\').modal(\'open\');
alert ("Vos informations ont bien été enregistrées");
document.location.replace("page2.php" );

$(document).ready(function(){
    $('.modal-trigger').leanModal();
});