<?php

// no direct access to this file
defined( 'DACCESS' ) or die;
$contents = $data[0];
$page_title = $data[1];
?>

<div class="col-md-12">
		<div class="row main-title">
				<div class="col-xs-12">
						<h1 class="content-title"><span itemprop="name"><?php MPut::_html( $page_title ); ?></span></h1>
				</div>
		</div>

        <?php 
        		
				//var_dump($contents); die();
        		if ( sizeof( $contents ) > 0 ) {
        				foreach ( $contents as $content ) {
        						$text_wrap = wordwrap( strip_tags( $content->get_text() ), 800, "%|%" );
        						$text_array = explode( '%|%', $text_wrap );
								
        						?>

										<div class="row main-header">
												<div class="row content-title">
														<div class="col-md-12">
																<h3><?php MPut::_html( $content->get_title() ); ?></h3>
														</div>
												</div>
												<div class="row content-text">
														<div class="col-md-12">
																<p><?php echo $text_array[0]; ?> ... </p>
														</div>
												</div>
												<div class="row content-text">
														<div class="col-md-12">
																<a href="index.php?module=content&object=<?php echo intval( $content->get_id() ); ?>"><?php __('Leggi tutto'); ?>&nbsp;&gt;</a>
														</div>
												</div>
										</div>
        						<?php
        				}
        		}
			else {
				?>
				<div class="row main-header">
						<div class="row content-title">
								<div class="col-md-12">
										<h3><?php __('Contenuto in lingua non trovato'); ?></h3>
								</div>
						</div>
				</div>
				<?php
			}
        ?>

</div>