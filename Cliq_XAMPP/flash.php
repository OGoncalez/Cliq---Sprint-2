<?php
function set_flash($type, $msg)
{
    $_SESSION['flash'] = ['tipo' => $type, 'msg' => $msg];
}

function show_flash()
{
    if (!empty($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        echo "<div style ='margin-bottom: 20px'><strong>{$flash['tipo']}: </strong>" . htmlspecialchars($flash['msg']) . "
        </div>";

        unset($_SESSION['flash']);
    }
}
?>