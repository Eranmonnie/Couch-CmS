<?php
require_once ('couch/cms.php');
?>

<cms:template title='Home' icon='home'>
    <cms:editable name="body" label="Body" type="richtext" />
    <cms:editable name="excerpt" label="Excerpt" type="textarea" />
</cms:template>

<h1>hergerhg</h1>

<?php
COUCH::invoke();
?>