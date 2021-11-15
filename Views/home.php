<?php
/** @var $this jesterone\mvccore\View */

$this->title = 'Home';
?>

<h1>Home</h1>
<h3>Hello,
<?php if (\jesterone\mvccore\Application::isGuest()): ?>
    Guest!
<?php else: ?>
<?php echo \jesterone\mvccore\Application::$app->user->getDisplayName()?>
<?php endif; ?>
</h3>
