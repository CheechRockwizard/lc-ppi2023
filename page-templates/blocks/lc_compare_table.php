<?php
$class = get_field('center')[0] ?? null;
?>
<section class="compare_table py-5">
    <div class="container-xl">
        <h2 class="<?=$class?>">
            <?=get_field('title')?>
        </h2>
        <div class="compare_table__table">
            <div class="compare_table__header">
                <div class="compare_table__title">
                    <h3>Compare How Much You Save</h3>
                </div>
                <div class="compare_table__image compare_table__image--ea">
                    <img
                        src="<?=get_stylesheet_directory_uri()?>/img/ea-logo.svg">
                    <div class="fs-100">6 to 9 months or more!</div>
                </div>
                <div class="compare_table__image compare_table__image--ppi">
                    <img
                        src="<?=get_stylesheet_directory_uri()?>/img/ppi-logo--wo.svg">
                    <div class="fs-100">in as little as 7 days</div>
                </div>
            </div>
            <div class="compare_table__rows">
                <?php
            while (have_rows('rows', 'options')) {
                the_row();
                ?>
                <div class="compare_table__row">
                    <div class="compare_table__row_title">
                        <?=get_sub_field('row_title')?>
                    </div>
                    <div class="compare_table__row_ea">
                        <?=get_sub_field('ea_amount') ? '£' . number_format(get_sub_field('ea_amount')) : 'N/A' ?>
                    </div>
                    <div class="compare_table__row_ppi">
                        <?=get_sub_field('ppi_amount') ? '£' . number_format(get_sub_field('ppi_amount')) : 'N/A' ?>
                    </div>
                </div>
                <?php
            }
?>
            </div>
        </div>
        <div class="compare_table__summary">
            <div class="compare_table__summary_title">
                <?=get_field('summary_title', 'options')?>
            </div>
            <div class="compare_table__summary_ea">
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/ea-logo.svg">
                £<?=number_format(get_field('ea_total', 'options'))?>
            </div>
            <div class="compare_table__summary_ppi">
                <img
                    src="<?=get_stylesheet_directory_uri()?>/img/ppi-logo--wo.svg">
                £<?=number_format(get_field('ppi_total', 'options'))?>
            </div>
        </div>
    </div>
</section>