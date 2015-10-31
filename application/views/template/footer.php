<?php
global $__without_nav, $__not_show_all_footer, $__foot_print;
if($__foot_print) $__not_show_all_footer = true;
if(!$__not_show_all_footer):
if(!$__without_nav):
?>		
		</div><!--contentwrapper-->
        
        <br clear="all" />
		
	</div><!-- centercontent -->
    
	<?php
	global $__var_timer;
	//echo $__var_timer;
	?>
		
</div><!--bodywrapper-->
<?php
else:
?>
		</div><!--loginboxinner-->
    </div><!--loginbox-->
<?php
endif;
?>

</body>

</html>
<?php
endif; //end $__not_show_all_footer

if($__foot_print):
?>
</div>
</body>
</html>
<?php
endif; // end $__foot_print
?>