<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php global $hideFooter; if (!$hideFooter) { ?>
        <footer class="u-align-center u-clearfix u-footer u-footer" id="sec-b3ea">
  <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
    <p class="u-small-text u-text u-text-grey-50 u-text-variant u-text-1"> Copyright ©&nbsp;2022 All rights reserved</p>
  </div>
</footer>
        
<?php } ?>
        
        
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
