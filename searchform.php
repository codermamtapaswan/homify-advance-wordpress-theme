<?php
/**
 * Search Form for homify theme.
 *
 * 
 *  1.0.0
 */
?>

<form role="search" class="gd-menu-search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <input id="search" type="search"
        placeholder="<?php echo esc_attr_x('What can we help you find today?', 'placeholder', 'homify') ?>"
        value="<?php the_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'homify') ?>" />
        
    <button aria-label="<?php echo esc_attr__('Search Submit', 'homify'); ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17">
            <path
                d="M13.8086 12.1039L11.0824 9.37799C10.9594 9.25496 10.7926 9.1866 10.6176 9.1866H10.1719C10.9266 8.22146 11.375 7.00752 11.375 5.68694C11.375 2.54545 8.8293 0 5.6875 0C2.5457 0 0 2.54545 0 5.68694C0 8.82843 2.5457 11.3739 5.6875 11.3739C7.0082 11.3739 8.22227 10.9255 9.1875 10.1709V10.6165C9.1875 10.7915 9.25586 10.9583 9.37891 11.0813L12.1051 13.8072C12.3621 14.0643 12.7777 14.0643 13.032 13.8072L13.8059 13.0335C14.0629 12.7765 14.0629 12.3609 13.8086 12.1039ZM5.6875 9.1866C3.7543 9.1866 2.1875 7.62269 2.1875 5.68694C2.1875 3.75393 3.75156 2.18729 5.6875 2.18729C7.6207 2.18729 9.1875 3.7512 9.1875 5.68694C9.1875 7.61996 7.62344 9.1866 5.6875 9.1866Z">
            </path>
        </svg>
    </button>
</form>