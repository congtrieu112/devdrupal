<div id="header">
</div>
<div id="wrapper">
    
        <?php print render($page['content']); ?>
    
    <?php if ($page['sidebar_first']): ?>  
        <div id="sidebar">
            <?php print render($page['sidebar_first']); ?>
        </div>
    <?php endif; ?>
</div>
<div id="footer">
    <?php if ($page['footer']): ?>  
        <?php print render($page['footer']); ?>
    <?php endif; ?>
</div>
