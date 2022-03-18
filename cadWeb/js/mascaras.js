$(document).ready(function () { 
    var campocpf = $("#cpf");
    var campotelefone = $("#telefone");
    var data = $("#data");
    campocpf.mask('000.000.000-00');
    campotelefone.mask('(00) 0 0000-0000');
    data.mask('00/00/0000');
});