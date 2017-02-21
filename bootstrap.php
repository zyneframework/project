<?php
/**
 * Arquivo "bootstrap.php" é responsável por inicializar o projeto.
 */

/**
 * Configurações globais do PHP
 */
date_default_timezone_set('America/Sao_Paulo');
ini_set('display_errors', true);
ini_set('error_log', 'logs/php-error.log');
error_reporting(E_ALL);


/**
 * ClassLoader é armazenado em $loader para reaproveitamento.
 * Não utilize "autoloaders" próprios, use Zyne\Core::getLoader()
 * para ganhar mais desempenho na aplicação.
 */
$loader = include 'vendor/autoload.php';

print '<pre>';
echo var_export($loader, true);

