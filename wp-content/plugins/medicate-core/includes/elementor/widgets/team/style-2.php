<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit;
}
$html = '';
$settings = $this->get_settings();
$tabs = $this->get_settings_for_display( 'tabs' );
if ($settings['team_style'] === '2')
{
    ?>
    <div class="pt-team pt-team-style-1 ">
        <?php
        foreach ( $tabs as $index => $item )
        {
            if ( ! empty( $item['website_link_team']['url'] ) ) 
            {
                $this->add_render_attribute( 'btn_attr'.$index, 'href', $item['website_link_team']['url'] );

                if ( $item['website_link_team']['is_external'] ) {
                    $this->add_render_attribute( 'btn_attr'.$index, 'target', '_blank' );
                }

                if ( ! empty( $item['website_link_team']['nofollow'] ) ) {
                    $this->add_render_attribute( 'btn_attr'.$index , 'rel', 'nofollow' );
                }
            }
           ?>
            <div class="pt-team-box pt-style-1">
                <div class="pt-team-img">
                    <img src="<?php echo esc_url($item['image']['url']); ?>" alt="team-image">
                    <div class="pt-team-social">
                        <ul>
                            <?php
                            foreach ($item['social_icon_lists'] as $ind => $items ) {
                                $social = str_replace('fab fa-','',$items['social'] );
                                $link_key = 'link_' . $ind .$index;
                                $this->add_render_attribute( $link_key, 'href', $items['link']['url'] );
                                if ( $items['link']['is_external'] ) {
                                    $this->add_render_attribute( $link_key, 'target', '_blank' );
                                }
                                if ( $items['link']['nofollow'] ) {
                                    $this->add_render_attribute( $link_key, 'rel', 'nofollow' );
                                }
                                ?>
                                <li>
                                    <a class="<?php echo $social ?>" <?php echo $this->get_render_attribute_string( $link_key ); ?>>
                                        <span class="sr-only"><?php echo ucwords( $social ); ?></span>
                                        <i class="<?php echo $items['social']; ?>"></i>
                                    </a>     </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-team-info">
                     <h5 class="pt-member-name">
                        <a <?php echo $this->get_render_attribute_string('btn_attr'.$index); ?> >
                        <?php echo esc_html($item['title_text']); ?></a>
                    </h5>
                     <span class="pt-team-designation"><?php echo esc_html($item['sub_title_text']); ?></span>
                 </div>
             </div>
     <?php } ?>
</div>
<?php } ?>
