function decodeEntities(input) {
  var y = document.createElement('textarea');
  y.innerHTML = input;
  return y.value;
}

$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Tancar',
        prevText: '<Ant',
        nextText: 'Seg>',
        currentText: 'Avui',
        monthNames: ['Gener','Febrer','Març','Abril','Maig','Juny','Julio','Agost','Setembre','Octubre','Novembre','Desembre'],
        monthNamesShort: ['Gen','Feb','Mar','Abr', 'Mai','Jun','Jul','Ago','Sep', 'Oct','Nov','Dec'],
        dayNames: ['Diumenge','Dilluns','Dimarts','Dimecres','Dijous','Divendres','Dissabte'],
        dayNamesShort: ['Dim','Dil','Dim','Dmc','Dij','Div','Dis'],
        dayNamesMin: ['Dm','Dl','Di','Dm','Dj','Dv','Ds'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});