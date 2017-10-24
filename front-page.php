<?php
/**
 * @package big-idea
 */

$settings = (array) get_option ('a11y-theme-settings');
get_header(); ?>

    <main id="content" class="a11y-site-main small-12 columns">
        <div class="a11y-site-tagline">
            <p>
                <?php
                echo ($settings['site_text_tagline']);
            ?>
            </p>
        </div>
        <section class="row a11y-panel-container">
            <?php
                $panels = array (
                    esc_attr($settings['panel_1_id']) => esc_url($settings['panel_1_link']),
                    esc_attr($settings['panel_2_id']) => esc_url($settings['panel_2_link']),
                    esc_attr($settings['panel_3_id']) => esc_url($settings['panel_3_link'])
                );
                foreach ($panels as $key => $panel_link) {
            ?>

                <a href="<?php echo $panel_link; ?>" class="small-12 medium-4 columns a11y-front-panel">
                <article >

                        <?php
                            $post_content = get_post($key);
                            $thumbnail = get_the_post_thumbnail($key,'',array( 'role' => 'presentation'));
                            $title = $post_content->post_title;
                            $content = $post_content->post_content;
                        ?>

                        <header class="a11y-entry-header">
                            <?php echo $thumbnail ?>
                            <h1><?php echo $title ?></h1>
                        </header>
                        <section>
                            <?php
                                echo apply_filters('the_content',$content);
                            ?>
                        </section>

                </article>
            </a>
            <?php
        }//foreach
            ?>
        </section>

        <section class="row a11y-panel-container bi-social-feeds">
            <article class="small-12 medium-4 columns a11y-front-panel">
                <header class="a11y-entry-header">
                    <h1>Twitter</h1>
                </header>
                <section>
                    <!-- Social Media Feed goes here -->
                    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/bigideaproj" data-widget-id="291966757638377473" data-tweet-limit="2" data-chrome="nofooter, noheader"   data-aria-polite="polite"></a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </section>
            </article>
            <article class="small-12 medium-4 columns a11y-front-panel">
                <header class="a11y-entry-header">
                    <h1>Facebook</h1>
                </header>
                <section>
                    <!-- Social Media Feed goes here -->
                    <!-- Facebook JS content -->
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>

                   <!-- End Facebook JS content -->

                  <div class="fb-page" data-href="https://www.facebook.com/bigideaproj" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"
><blockquote cite="https://www.facebook.com/bigideaproj" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bigideaproj"></a></blockquote></div>
                </section>

            </article>
            <article class="small-12 medium-4 columns a11y-front-panel">
                <header class="a11y-entry-header">
                    <h1>Instagram</h1>
                </header>
                <section>
                    <!-- Social Media Feed goes here -->
               <?php echo do_shortcode("[instagram-feed]"); ?>
                </section>

            </article>
        </section>
    </main>

<?php
get_footer();
