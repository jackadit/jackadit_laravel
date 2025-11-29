<?php
/**
 * Cours IUT QLIO
 *
 * @copyright Copyright © jackadit.com 2014
 * @version 1.0		19/03/23 	23:13::00
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
$sNavigation = navigation('sae', '5', '501', '0');
$tdm = tdm('sae500');
echo $tdm;
?>



<p></p>

<h1>Les situations d’apprentissage et d’évaluation (SAÉ) du semestre 5</h1>

<ol>
    <li><?php echo sae('501'); ?></li>
    <li><?php echo sae('502mtd'); ?></li>
    <li><?php echo sae('503mtd'); ?></li>
    <li><?php echo sae('500mtd'); ?></li>
    <li><?php echo sae('502osc'); ?></li>
    <li><?php echo sae('503osc'); ?></li>
    <li><?php echo sae('500osc'); ?></li>
</ol>


