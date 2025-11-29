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
$sNavigation = navigation('sae', '6', '601', '0');
$tdm = tdm('sae600');
echo $tdm;
?>



<p></p>

<h1>Les situations d’apprentissage et d’évaluation (SAÉ) du semestre 6</h1>

<ol>
    <li><?php echo sae('601'); ?></li>
    <li><?php echo sae('602mtd'); ?></li>
    <li><?php echo sae('stage'); ?></li>
    <li><?php echo sae('600mtd'); ?></li>
    <li><?php echo sae('602osc'); ?></li>
    <li><?php echo sae('stage'); ?></li>
    <li><?php echo sae('600osc'); ?></li>
</ol>


