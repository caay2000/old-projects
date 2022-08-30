function decodeEntities(input) {
  var y = document.createElement('textarea');
  y.innerHTML = input;
  return y.value;
}

$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi'+decodeEntities('&eacute;')+'rcoles', 'Jueves', 'Viernes', 'S'+decodeEntities('&aacute;')+'bado'],
        dayNamesShort: ['Dom','Lun','Mar','Mi'+decodeEntities('&eacute;'),'Juv','Vie','S'+decodeEntities('&aacute;')+'b'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','S'+decodeEntities('&aacute;')],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['it']);
});