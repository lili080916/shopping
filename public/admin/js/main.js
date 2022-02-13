$(document).ready(function() {

    $(".btn-detalle-pedido").on('click', function(e){

        e.preventDefault();

        var id_pedido = $(this).data('id');
        var path = $(this).data('path');
        var token = $(this).data('token');
        var modal_body = $(".modal_body");
        var loading = '<p><i class="fa fa-spinner fa-spin"></i>Cargando datos</p>';
        var data = {'_token': token, 'order_id': id_pedido};

        $('.modal-title').text('Detalle del pedido: ' + id_pedido);
        $("#table-detalle-pedido tbody").html(loading);
        // table.html(loading);

        $("#myModal").modal("show");

        $.post(
            path, 
            data, 
            function(data)
            {
                $("#table-detalle-pedido tbody").html("");

                for (var i = 0; i < data.length; i++) {
                    var fila = "<tr>";
                    fila += "<td><img src='" + data[i].product.image + "' width='30'></td>";
                    fila += "<td>" + data[i].product.name + "</td>";
                    fila += "<td>$" + parseFloat(data[i].price).toFixed(2) + "</td>";
                    fila += "<td>" + parseInt(data[i].quantity) + "</td>";
                    fila += "<td>" + (parseInt(data[i].quantity) * parseFloat(data[i].price)).toFixed(2) + "</td>";
                    fila += "</tr>";
                    
                    $("#table-detalle-pedido tbody").append(fila);
                }
            }, 
            'json');
    });

    $("#close").on('click', function(e){

        e.preventDefault();

        $("#myModal").modal("hide");
    });
    
})