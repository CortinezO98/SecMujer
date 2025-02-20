<script>
    $(document).ready(function () {

        $.ajax({
            url: '/monitoreo/canales',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let canalSelect = $('#canalQM');
                canalSelect.empty().append('<option value="">Seleccione un canal</option>');
                $.each(data, function (key, canal) {
                    canalSelect.append('<option value="' + canal.id + '">' + canal.descripcion + '</option>');
                });
            }
        });


        $('#canalQM').change(function () {
            let canalId = $(this).val();
            let matrizSelect = $('#matrizQM');
            matrizSelect.empty().append('<option value="">Seleccione una matriz</option>');

            if (canalId) {
                $.ajax({
                    url: '/monitoreo/matrices/' + canalId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $.each(data, function (key, matriz) {
                            matrizSelect.append('<option value="' + matriz.id + '">' + matriz.descripcion + '</option>');
                        });
                    }
                });
            }
        });

        $.ajax({
            url: '/monitoreo/tiposMonitoreos',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let tipoMonitoreoSelect = $('#monitoringType');
                tipoMonitoreoSelect.empty().append('<option value="">Seleccione un tipo de monitoreo</option>');
                $.each(data, function (key, tipoMonitoreo) {
                    tipoMonitoreoSelect.append('<option value="' + tipoMonitoreo.id + '">' + tipoMonitoreo.descripcion + '</option>');
                });
            }
        });

    });
</script>