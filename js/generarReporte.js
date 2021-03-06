
function DescargarPDF(ContenidoID,nombre) {

        var pdf = new jsPDF('l', 'pt', 'letter');

        html = $('#'+ContenidoID).html();
        var grupo=$("#gruposCreados option:selected").text();
        var materia=$("#materiasCreadas option:selected").text();
        var D=new Date();

        var elementHandler = {
            '#reporte': function (element, renderer) {
                return true;
            }
        };

        pdf.setFontSize(15);
        pdf.setFontType("bold");
        pdf.text(10, 20,"INSTITUTO POLITECNICO NACIONAL");
        pdf.text(10, 40,"UNIDAD PROFESIONAL INTERDICIPLINARIA DE INGENIERIA CAMPUS ZACATECAS");
        var logo = new Image();
        logo.src = '../../img/icons/IPN.png';
        pdf.addImage(logo, 'PNG', 720, 10, 50, 70);
        pdf.text(10, 60,"Reporte de tareas");

        var margins = {top: 100,bottom: 100,left: 10,right:10,width:1000};

        pdf.fromHTML(html,10,100, {'width': 1000,'elementHandlers': elementHandler});
        pdf.save(nombre+'.pdf');

}

function createNote(){
    showModal();
}
function showModal(){
    $('#modalNote').css('display', 'block');
}

function hideModal(){
    $('#clear').trigger('click');
    $('#modalNote').css('display', 'none');
}
