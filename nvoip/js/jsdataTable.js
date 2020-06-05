$(document).ready(function() {
    $('#discoVinil').DataTable({
        responsive: true,
        "oLanguage": {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "<u>Você possui _TOTAL_ registros no total</u>",
            "sInfoEmpty": "",
            "sInfoFiltered": "<u>Você possui _MAX_ registros no total<u>",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "<u>_MENU_ resultados por página</u>",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "<center>Nenhum resultado encontrado<center>",
            "sSearch": "<center><b> Pesquisar Cliente </b></center>",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            },
            "select": {
                "rows": {
                    "_": "Selecionado %d linhas",
                    "0": "Nenhuma linha selecionada",
                    "1": "Selecionado 1 linha"
                }
            }
        }
    });
});