<div id="id_of_element"></div>

<script type="text/javascript">
    window.onload = function()
    {
        timedHide(document.getElementById('id_of_element'), 10);
    }

    function timedHide(element, seconds)
    {
        if (element) {
            setTimeout(function() {
                element.style.display = 'none';
            }, seconds*1000);
        }
    }
</script>