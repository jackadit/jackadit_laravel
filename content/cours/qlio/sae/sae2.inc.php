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
$sNavigation = navigation('sae', '2', '200', '0', '0');
$tdm = tdm('sae200');
echo $tdm;
?>



<p>&nbsp;</p>

<h1>Les situations d’apprentissage et d’évaluation (SAÉ) du semestre 2</h1>

<ol>
    <li><?php echo sae('200'); ?></li>
    <li><?php echo sae('201'); ?></li>
    <li><?php echo sae('202'); ?></li>
    <li><?php echo sae('203'); ?></li>
    <li><?php echo sae('204'); ?></li>
</ol>


