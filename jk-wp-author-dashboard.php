<?php defined('ABSPATH') || exit;

class jk_wp_author_dashboard
{

    /* TODO Replace */
    public static function dashboard_render($user_id)
    {

        ?>

        <div class="author-dashboard">

            <div class="inner-wrapper">

                <div class="dashboard-header">

                    <div class="user-info-wrapper">

                    </div>

                    <div class="dashboard-tabs-wrapper">

                        <div class="tab-item">

                            <?php echo esc_html('My Posts'); ?>

                        </div>

                        <div class="tab-item">

                            <?php echo esc_html('Liked Posts'); ?>

                        </div>

                        <div class="tab-item">

                            <?php echo esc_html('Liked Posts'); ?>

                        </div>

                        <div class="tab-item">

                            <?php echo esc_html('Viewed Posts'); ?>

                        </div>

                        <div class="tab-item">

                            <?php echo esc_html('Bookmarks'); ?>

                        </div>

                        <div class="tab-item">

                            <?php echo esc_html('Following'); ?>

                        </div>

                        <div class="tab-item">

                            <?php echo esc_html('Followers'); ?>

                        </div>

                    </div>

                </div>

                <div class="dashboard-body">

                    <div class="body-wrapper">

                        <div class="tabs-content-wrapper">

                        </div>

                    </div>

                </div>

                <div class="dashboard-footer">



                </div>

            </div>

        </div>

        <?php

    }

    public function init()
    {


    }

}
