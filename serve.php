<?php
// Suppress deprecation warnings
error_reporting(E_ALL & ~E_DEPRECATED);

// Run the Laravel server
passthru('php -d error_reporting=' . (E_ALL & ~E_DEPRECATED) . ' artisan serve');