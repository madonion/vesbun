
<?php $args = array(
    'numberposts' => 4,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>

<div class="row">
    <div class="row">
        <div class="col-md-9">
            <h3>
                Cele mai apreciate articole</h3>
        </div>
        <div class="col-md-3">
            <!-- Controls -->
            <div class="controls pull-right hidden-xs">
                <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                   data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                            data-slide="next"></a>
            </div>
        </div>
    </div>
    <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <?php foreach( $recent_posts as $recent ): ?>
                        <div class="col-sm-3">
                            <a href="<?=esc_url( get_permalink( $recent['ID'] ) )?>">
                                <div class="col-item">
                                    <div class="photo">
                                        <?=has_post_thumbnail($recent['ID'])?get_the_post_thumbnail($recent['ID'], array(277, 206)):"<img src=\"http://placehold.it/350x260\" class=\"img-responsive\" alt=\"a\" />"?>
                                    </div>
                                    <div class="info">
                                        <h5><?=$recent["post_title"]?></h5>
                                        <div class="teaser">
                                            <?=substr($recent["post_content"],0,200)?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php $args = array(
                'numberposts' => 4,
                'offset' => 9,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish',
                'suppress_filters' => true );

            $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
            ?>

            <div class="item">
                <div class="row">
                    <?php foreach( $recent_posts as $recent ): ?>
                        <div class="col-sm-3">
                            <a href="<?=esc_url( get_permalink( $recent['ID'] ) )?>">
                                <div class="col-item">
                                    <div class="photo">
                                        <?=has_post_thumbnail($recent['ID'])?get_the_post_thumbnail($recent['ID'], array(277, 206)):"<img src=\"http://placehold.it/350x260\" class=\"img-responsive\" alt=\"a\" />"?>
                                    </div>
                                    <div class="info">
                                        <h5><?=$recent["post_title"]?></h5>
                                        <div class="teaser">
                                            <?=substr($recent["post_content"],0,200)?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>
    </div>
</div>
