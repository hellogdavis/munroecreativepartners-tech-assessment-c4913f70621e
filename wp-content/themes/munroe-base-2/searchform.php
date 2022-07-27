<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <button type="submit" class="search-submit">
        <svg width="33px" height="33px" viewBox="0 0 33 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>icons/fontawesome/solid/magnifying-glass</title>
            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Modules-/-Desktop-/-Navigation" transform="translate(-1207.000000, -38.000000)" fill="#005DA9">
                    <g id="Group-2" transform="translate(1051.000000, 38.000000)">
                        <g id="icons/fontawesome/solid/magnifying-glass" transform="translate(156.000000, 0.000000)">
                            <path d="M24.3576024,22.5210527 L20.5076024,18.6710527 C21.3830995,17.3713158 21.8150585,15.7473684 21.5838012,14.016959 C21.1894737,11.0736549 18.777193,8.67842097 15.8309941,8.30541805 C11.450614,7.75114026 7.76722213,11.4345321 8.32153208,15.8149123 C8.6946315,18.7623977 11.0901871,21.1766082 14.0338128,21.5690059 C15.7642222,21.800231 17.3884912,21.3684328 18.6879065,20.4928071 L22.5379065,24.3428071 C23.0403042,24.8452048 23.8550118,24.8452048 24.3574094,24.3428071 C24.8593568,23.8397662 24.8593568,23.0228071 24.3576024,22.5210527 Z M10.8102339,14.9400585 C10.8102339,12.6699415 12.657076,10.8230994 14.927193,10.8230994 C17.1973099,10.8230994 19.0441521,12.6699415 19.0441521,14.9400585 C19.0441521,17.2101754 17.1973099,19.0570176 14.927193,19.0570176 C12.657076,19.0570176 10.8102339,17.2108187 10.8102339,14.9400585 Z"></path>
                        </g>
                    </g>
                </g>
            </g>
        </svg>	
    </button>
</form>