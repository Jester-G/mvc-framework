<?php
/** @var $exception \Exception */
/** @var $this jesterone\mvccore\View */

$this->title = $exception->getCode();
?>

<h3><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h3>
