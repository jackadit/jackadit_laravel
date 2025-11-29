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
$sNavigation = navigation('sae', '3', '301', '0');
$tdm = tdm('sae300');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Les situations d’apprentissage et d’évaluation (SAÉ) du semestre 3</h1>

<ol>
    <li><?php echo sae('300'); ?></li>
    <li><?php echo sae('301'); ?></li>
    <li><?php echo sae('302mtd'); ?></li>
    <li><?php echo sae('303mtd'); ?></li>
    <li><?php echo sae('302osc'); ?></li>
    <li><?php echo sae('303osc'); ?></li>
</ol>


