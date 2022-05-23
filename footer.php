<?php if (current_user_can('manage_options')) { ?>
	<div id="entwicklung" class="wrap cf" style="width:100%">
        <h2>Developer information! This is only shown to the administrator</h2>
        <!--Entwicklerinformation! Diese werden nur dem Administrator angezeigt!-->

        <ul>
            <?php
            $included_files = get_included_files();
            $stylesheet_dir = str_replace('\\', '/', get_stylesheet_directory());
            $template_dir = str_replace('\\', '/', get_template_directory());
            foreach ($included_files as $key => $path) {
                $path = str_replace('\\', '/', $path);
                if (false === strpos($path, $stylesheet_dir) && false === strpos($path, $template_dir))
                    unset($included_files[$key]);
            }
            //var_dump($included_files);
            foreach ($included_files as $file) {
                echo '<li>' . $file . '</li>';
            }
            ?>
        </ul>
    </div>
<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
