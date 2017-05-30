<?php 
/*
Plugin Name: Divi Theme Tutorials Directory
Plugin URI: http://divi.tutsdirectory.com/
Description: Find the latest Divi Theme news, tutorials & articles hand curated and categorized for easy access
Version: 1.0
Author: Tuts Directory
*/

add_action("wp_dashboard_setup", "add_dashboard_widget");
function add_dashboard_widget() {
    wp_add_dashboard_widget("divitutorials", "Divi Theme Tutorials Directory", "display_divi_tutorials_widget");
}

function display_divi_tutorials_widget() {

    include_once( ABSPATH . WPINC . "/feed.php");

    $max_items = 5;
    
    ?>
    <div>
        <a href="javascript:dtw_show_tab('main');" class="dtw-link main" style="font-weight: bold;">Main Feed</a> | 
        <a href="javascript:dtw_show_tab('general');" class="dtw-link general">Tip and Tricks</a> | 
        <a href="javascript:dtw_show_tab('resources');" class="dtw-link resources">Divi Resources</a> | 
        <a href="javascript:dtw_show_tab('settings');" class="dtw-link settings">Divi Settings</a> | 
        <a href="javascript:dtw_show_tab('layouts');" class="dtw-link layouts">Divi Layouts</a> | 
        <a href="javascript:dtw_show_tab('solution');" class="dtw-link solution">Solution Repository</a> | 
        <a href="javascript:dtw_show_tab('modules');" class="dtw-link modules">Modules</a>
    </div>

    <hr/>

    <?php 
    $main_rss = fetch_feed("http://feeds.feedburner.com/DiviTutorialsDirectory");
    $main_items = $main_rss->get_item_quantity($max_items); 
    $main_rss_items = $main_rss->get_items(0, $main_items);
    ?>

    <ul class="dtw-tabs main">
        <?php
            if($main_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($main_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <?php 
    $general_rss = fetch_feed("http://feeds.feedburner.com/GeneralKnow-howDiviTutorialsDirectory");
    $general_items = $general_rss->get_item_quantity($max_items); 
    $general_rss_items = $general_rss->get_items(0, $general_items);
    ?>

    <ul class="dtw-tabs general" style="display: none;">
        <?php
            if($general_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($general_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <?php 
    $resources_rss = fetch_feed("http://feeds.feedburner.com/DiviResourcesDiviTutorialsDirectory");
    $resources_items = $resources_rss->get_item_quantity($max_items); 
    $resources_rss_items = $resources_rss->get_items(0, $resources_items);
    ?>

    <ul class="dtw-tabs resources" style="display: none;">
        <?php
            if($resources_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($resources_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <?php 
    $settings_rss = fetch_feed("http://feeds.feedburner.com/DiviSettingsDiviTutorialsDirectory");
    $settings_items = $settings_rss->get_item_quantity($max_items); 
    $settings_rss_items = $settings_rss->get_items(0, $settings_items);
    ?>

    <ul class="dtw-tabs settings" style="display: none;">
        <?php
            if($settings_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($settings_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <?php 
    $layouts_rss = fetch_feed("http://feeds.feedburner.com/DiviLayoutsDiviTutorialsDirectory");
    $layouts_items = $layouts_rss->get_item_quantity($max_items); 
    $layouts_rss_items = $layouts_rss->get_items(0, $layouts_items);
    ?>

    <ul class="dtw-tabs layouts" style="display: none;">
        <?php
            if($layouts_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($layouts_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <?php 
    $solution_rss = fetch_feed("http://feeds.feedburner.com/SolutionRepositoryDiviTutorialsDirectory");
    $solution_items = $solution_rss->get_item_quantity($max_items); 
    $solution_rss_items = $solution_rss->get_items(0, $solution_items);
    ?>

    <ul class="dtw-tabs solution" style="display: none;">
        <?php
            if($solution_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($solution_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <?php 
    $modules_rss = fetch_feed("http://feeds.feedburner.com/ModulesDiviTutorialsDirectory");
    $modules_items = $modules_rss->get_item_quantity($max_items); 
    $modules_rss_items = $modules_rss->get_items(0, $modules_items);
    ?>

    <ul class="dtw-tabs modules" style="display: none;">
        <?php
            if($modules_items == 0) {
                echo "<li>No items</li>";
            } else {
                foreach($modules_rss_items as $item) {
                    ?>
                        <li>
                            <a href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank">
                                <?php echo esc_html($item->get_title()); ?>
                            </a>
                        </li>
                    <?php
                }
            }
        ?>
    </ul>

    <hr/>
    
    <div>
        <a href="https://www.facebook.com/DiviTutorials/" target="_blank"><img src="<?php echo plugins_url( 'img/square-facebook-16.png', __FILE__ ); ?>" style="position: relative; top: 3px;" /> FB Page</a>
        <a href="https://www.facebook.com/groups/DiviThemeTutorials/" target="_blank"><img src="<?php echo plugins_url( 'img/square-facebook-16.png', __FILE__ ); ?>" style="position: relative; top: 3px;" /> FB Group</a>
        <a href="https://twitter.com/DiviTutorials"  target="_blank"><img src="<?php echo plugins_url( 'img/twitter-16.png', __FILE__ ); ?>" style="position: relative; top: 3px;" /> Twitter</a>
        <a href="https://www.getrevue.co/profile/tuts-directory" target="_blank"><img src="<?php echo plugins_url( 'img/newsletter-16.png', __FILE__ ); ?>" style="position: relative; top: 3px;" /> Newsletter</a>
        <a href="https://www.youtube.com/channel/UC62xLG3jxGwuzsQYwSNpAFw" target="_blank"><img src="<?php echo plugins_url( 'img/youtube-16.png', __FILE__ ); ?>" style="position: relative; top: 1px;" /> YouTube</a>
    </div>


    <script>
        function dtw_show_tab(tab) {
            jQuery(".dtw-tabs").hide();
            jQuery(".dtw-tabs." + tab).show();
            jQuery(".dtw-link").css("font-weight", "normal");
            jQuery(".dtw-link." + tab).css("font-weight", "bold");
        }
    </script>

    <?php
}

