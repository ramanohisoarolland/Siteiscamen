<input type="text" name="txt" class="auto">
<script>
    $(function () {
        $('.auto').autocomplete({
            source:'search.php',
            minlength:3
        });
    });
</script>