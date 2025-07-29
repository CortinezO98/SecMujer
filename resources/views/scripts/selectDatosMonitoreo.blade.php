<script>
    $(document).ready(function () {

        $.ajax({
            url: '/monitoreo/canales',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let canalSelect = $('#canal_id');
                canalSelect.empty().append('<option value="">Seleccione un canal</option>');
                data.sort((a, b) => a.descripcion.localeCompare(b.descripcion));
                $.each(data, function (key, canal) {
                    canalSelect.append('<option value="' + canal.id + '">' + canal.descripcion + '</option>');
                });
            }
        });


        $('#canal_id').change(function () {
            let canalId = $(this).val();
            let matrizSelect = $('#matriz_id');
            matrizSelect.empty().append('<option value="">Seleccione una matriz</option>');

            if (canalId) {
                $.ajax({
                    url: '/monitoreo/matrices/' + canalId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        data.sort((a, b) => a.descripcion.localeCompare(b.descripcion));
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
                let tipoMonitoreoSelect = $('#tipo_monitoreo_id');
                tipoMonitoreoSelect.empty().append('<option value="">Seleccione un tipo de monitoreo</option>');
                data.sort((a, b) => a.descripcion.localeCompare(b.descripcion));
                $.each(data, function (key, tipoMonitoreo) {
                    tipoMonitoreoSelect.append('<option value="' + tipoMonitoreo.id + '">' + tipoMonitoreo.descripcion + '</option>');
                });
            }
        });

        $('#matriz_id').change(function () {
            let matriz_id = $(this).val();
            let agente_id = $('#agente_id');
            
            console.log('cambio', agente_id);
            agente_id.empty().append('<option value="">Seleccione un agente</option>');

            if (matriz_id) {
                $.ajax({
                    url: '/user/obtenerAgentes/' + matriz_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        data.sort((a, b) => a.name.localeCompare(b.name));
                        $.each(data, function (key, user) {
                            agente_id.append('<option value="' + user.id + '">' + user.name + '</option>');
                        });
                    }
                });
            }
        });

    });
</script>
