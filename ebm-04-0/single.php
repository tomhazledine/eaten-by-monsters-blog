<?php get_header(); ?>

<div class="contentWrapper">
  <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      
      <?php

      // The AFC values:
      $post_releaseName = get_field('release-name');
      $post_format = get_field('format');
      $post_rating = get_field('rating');
      $post_miniDescription = get_field('mini-description');
      $post_website = get_field('website');
      $post_label = get_field('record-label');
      // Get the URL of the post's featured image (large size):
      //$imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'large'));

      // Get the band names associated with the post
      $bandNames = wp_get_post_terms($post->ID,'band');
      if ( !empty( $bandNames ) && !is_wp_error( $bandNames ) ) {// If the post has "band" info stored as tags... 
        $count = count( $bandNames );// How many bands are attached to the post?
        $i=0;
        $bandList = '';// Set up a string to contain the band names.
        foreach ( $bandNames as $bandName ){// Add each band name to the string:
          $i++;
          if ( $count != $i ) {
            if ( $bandName->count > 1 ){// With a link:
              $bandList .= '<a href="/bands/'.$bandName->slug.'">'.$bandName->name.'</a> &amp; ';// Add a link, a comma and a space to every band name...
            } else {// Without a link:
              $bandList .= $bandName->name.' &amp; ';// Add a comma and a space to every band name...
            }
          } else {
            if ( $bandName->count > 1 ){// With a link:
              $bandList .= '<a href="/bands/'.$bandName->slug.'">'.$bandName->name.'</a>';// ...but don't add a comma if it's the last band name in the string
            } else {// Without a link:
              $bandList .= $bandName->name.'';// ...but don't add a comma if it's the last band name in the string
            }
          }
        }
      }

      // Get the Record Labels associated with the post
      $labelNames = wp_get_post_terms($post->ID,'label');
      //var_dump($terms);
      if ( !empty( $labelNames ) && !is_wp_error( $labelNames ) ) {// If the post has "record label" info stored as tags... 
        $count = count( $labelNames );// How many labels are attached to the post?
        $i=0;
        $labelList = '';// Set up a string to contain the label names.
        $labelListLinks = '';// Set up a string to contain the label names and a link to the label's archive page.
        foreach ( $labelNames as $labelName ){// Add each label name to the string:
          $i++;
          if ( $count != $i ) {
            if ( $labelName->count > 1 ){
              // With a link:
              $labelList .= '<a class="labelLink" title="See more from the '.$labelName->name.' record label" href="/labels/'.$labelName->slug.'">'.$labelName->name.'</a>, ';// Add a link, a comma and a space to every label name...
            } else {
              // Without a link:
              $labelList .= $labelName->name.', ';// Add a comma and a space to every label name...
            }
          } else {
            if ( $labelName->count > 1 ){
              // With a link:
              $labelList .= '<a class="labelLink" title="See more from the '.$labelName->name.' record label" href="/labels/'.$labelName->slug.'">'.$labelName->name.'</a>';// ...but don't add a comma if it's the last label name in the string
            } else {
              // Without a link:
              $labelList .= $labelName->name.'';// ...but don't add a comma if it's the last label name in the string
            }
          }
        }
        ?>

      <h1>
          <?= $bandList; // Print the list of bands ?>
          <span class="titleDivider">&mdash;</span>
          <span class="releaseName"><?= ' '.$post_releaseName; ?></span>
        <?php } else {
          the_title();
        } ?>

      </h1>
      
      <h2>
        <?php if( isset( $post_miniDescription ) ){ echo $post_miniDescription; } ?>
      </h2>
      
      <div class="postMetaWrapper clearfix">
        
        <div class="postMetaKeyValue clearfix">
          

          <?php if( $post_format ){ ?>
            <div class="postMeta">
              <span class="metaLabel">Release Format:</span>
              <span class="metaValue"><?php echo $post_format; ?></span>
            </div>
          <?php } ?>

          <?php if ( isset($labelList) || isset($post_label) ) { ?>
            <div class="postMeta">
              <span class="metaLabel">Record Label:</span>
              <span class="metaValue">
                <?php if ( isset($labelList) ) {
                  echo $labelList;
                } elseif ( isset($post_label) ) {
                  echo $post_label;
                } ?>
              </span>
            </div>
          <?php } ?>

        </div>

        <div class="postRating"><?php echo $post_rating; ?></div>
      </div>
      
      <div class="mainContent postMainContent">
        <?php the_excerpt(); ?>
        <!--div class="postImg" style="background-image:url('<?= $imageURL; ?>');"></div-->
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
        <?php the_content(); ?>

        <div class="postFooter clearfix">
          
          <?php if( $post_format ) { ?>
            <div class="postMeta">
              <span class="metaLabel">Release Format:</span>
              <span class="metaValue"><?php echo $post_format; ?></span>
            </div>
          <?php } ?>

          <?php if ( isset($labelList) || isset($post_label) ) { ?>
            <div class="postMeta">
              <span class="metaLabel">Record Label:</span>
              <span class="metaValue">
                <?php if ( isset($labelList) ) {
                  echo $labelList;
                } elseif ( isset($post_label) ) {
                  echo $post_label;
                } ?>
              </span>
            </div>
          <?php } ?>

          <?php if( isset( $bandList ) ) { ?>
            <div class="postMeta">
              <span class="metaLabel">Artist:</span>
              <span class="metaValue"><?php echo $bandList; ?></span>
            </div>
          <?php } ?>
          
        </div>

        <?php
        // Print a button for every band name
        /* if ( !empty( $bandNames ) && !is_wp_error( $bandNames ) ) {// If the post has "band" info stored as tags...
          foreach ( $bandNames as $bandName ){
            echo '<a href="/bands/'.$bandName->slug.'" class="button">see all '.$bandName->name.' reviews</a>';  
          }
        } */

        // Print a button link to band's website
        /* if( $post_website ){ ?>
          <a href="<?php echo $post_website; ?>" class="button">visit <?= $bandList; ?>&#8217;s website</a>
        <?php } */
        ?>

      </div>


      <?php related_posts();?>

    <?php endwhile;
  endif; ?>
</div>

<?php get_footer(); ?>