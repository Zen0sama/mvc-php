<?php
function showToast($data, $timeout, $color1, $color2)
{
    echo "<script>
    Toastify({
        text: \"".$data."\",
        className: \"info\",
        duration: ".$timeout.",
        style: {
            background: \"linear-gradient(to right, #".$color1.", #".$color2.")\",
        }
    }).showToast();
    </script>";
}
