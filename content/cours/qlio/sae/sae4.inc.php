<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		20/10/14 	16:47::00
 *
 * @author Stéphan WAHL
 * @since jackadit.com 2.0
 *
 * @package qlio
 * @subpackage SAÉ
 * @category ressources
 * @access protected
 * @uses
 */
$sNavigation = navigation('sae', '4', '401', '0');
$tdm = tdm('sae400');
echo $tdm;
?>



<p></p>

<h1>Les situations d’apprentissage et d’évaluation (SAÉ) du semestre 4</h1>

<ol>
    <li><?php echo sae('401'); ?></li>
    <li><?php echo sae('402mtd'); ?></li>
    <li><?php echo sae('403mtd'); ?></li>
    <li><?php echo sae('400mtd'); ?></li>
    <li><?php echo sae('402osc'); ?></li>
    <li><?php echo sae('403osc'); ?></li>
    <li><?php echo sae('400osc'); ?></li>
</ol>


