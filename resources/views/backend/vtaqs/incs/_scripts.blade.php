<script type="text/javascript">
    $(document).ready(function() {
         $('input[name=name]').on('keyup', function(event) {
             $('input[name=title]').val(($(this).val().toLowerCase()).split(" ").join("-"))
         });
    });
</script>
