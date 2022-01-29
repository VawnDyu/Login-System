<!-- Error validation in login -->

<?php
    if(isset($_SESSION["errormsg"])) {
        echo
            '<div class="error-message">
                <span>
                    ', $_SESSION["errormsg"] .'
                </span>
            </div>';
    }

?>