function decodeEntities(input) {
  var y = document.createElement('textarea');
  y.innerHTML = input;
  return y.value;
}

$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Fermer',
        prevText: '<Pré',
        nextText: 'Sui>',
        currentText: 'Aujourd\'hui',
        monthNames: ['Janvier','F'+decodeEntities('&eacute;')+'vrier','Mars','Avril','Mai','Juin','Juillet','Ao'+decodeEntities('&ucirc;')+'t','Septembre','Octobre','Novembre','D'+decodeEntities('&eacute;')+'cembre'],
        monthNamesShort: ['Jan','F'+decodeEntities('&eacute;')+'v','Mar','Avr', 'Mai','Jui','Jul','Ao'+decodeEntities('&ucirc;'),'Sep', 'Oct','Nov','D'+decodeEntities('&eacute;')+'c'],
        dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
        dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
        dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});