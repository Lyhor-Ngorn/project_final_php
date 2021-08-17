<?php
/**
 * Connect to database
 */
function db() {
    return new mysqli('localhost','root','','project_final');
}
