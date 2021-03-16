<script>
    function select_all() {
        $('input[class=selected_data]:checkbox').each(function(){
            if($('input[class=select-all]:checkbox:checked').length == 0){
                $(this).prop("checked", false);
            } else {
                $(this).prop("checked", true);
            }
        });
    }

    $(document).ready(function() {

        if(window.location.href.indexOf('model') != -1) {
            setTimeout(function () {
                $('#' + getUrlVars()['model']).modal('show');
            }, 1000); // Delay Becuase tyhe datatable is not render the modal yet
        }

        $('.select2').select2({
            width: '100%',
        })
    });

    function getUrlVars()
    {
        var vars = [];
        var hash;

        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');

        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('='); // splite the key and value
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }

        return vars;
    }
</script>
