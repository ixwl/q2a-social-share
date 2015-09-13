<?php

    class qa_sss_opt
    {
        const PREFIX = 'ami_sss_';
        const SHARE_TEXT = 'ami_sss_text';
        const SHARE_TEXT_HOME = 'ami_sss_text_home';
        const CUSTOM_CSS = 'ami_sss_costum_css';
        const ADMIN_SAVE_BTN = 'ami_sss_save_button';
        const FB_BUTTON = 'ami_sss_btn_fb';
        const GP_BUTTON = 'ami_sss_btn_gp';
        const TW_BUTTON = 'ami_sss_btn_tw';
        const LI_BUTTON = 'ami_sss_btn_li';
        const RE_BUTTON = 'ami_sss_btn_re';
        const EM_BUTTON = 'ami_sss_btn_em';
        const VK_BUTTON = 'ami_sss_btn_vk';
        const BUTTON_STATUS = 'ami_sss_btn_status';

        const GP_URL_TEMPLATE = 'https://plus.google.com/share?url={{page_url}}" ';
        const FB_URL_TEMPLATE = 'https://www.facebook.com/sharer/sharer.php?u={{page_url}}&amp;ref=fbshare&amp;t={{page_title}}" ';
        const TW_URL_TEMPLATE = 'https://twitter.com/intent/tweet?original_referer={{page_url}}&amp;text={{page_title}}&amp;url={{page_url}}" ';
        const LI_URL_TEMPLATE = 'http://www.linkedin.com/shareArticle?mini=true&amp;url={{page_url}}&amp;title={{page_title}}&amp;summary={{page_title}}" ';
        const RE_URL_TEMPLATE = 'http://www.reddit.com/submit?url={{page_url}}&amp;title={{page_title}}" ';
        const VK_URL_TEMPLATE = 'http://vkontakte.ru/share.php?url={{page_url}}&amp;title={{page_title}}" ';
        const EM_URL_TEMPLATE = 'mailto: ?subject={{page_title}}&amp;body=Check this out: {{page_title}} - {{page_url}}" ';

        /*constants for the types of the social buttons */

        const SHARE_TYPE_OPTION = 'ami_sss_type_opt';
        const SHARE_TYPE_IMAGE = 'image';
        const SHARE_TYPE_TEXT = 'text_only';
        const SHARE_TYPE_COLORED_BTNS = 'colored_buttons';
        const SHARE_TYPE_COLORED_BTNS_WITH_ICON = 'colored_buttons_with_icon';
        const SHARE_TYPE_FI_SQ = 'squared_btns_with_icon';
        const SHARE_TYPE_FI_SEMI_ROUNDED = 'Semi Rounded Icons';
        const SHARE_TYPE_FI_ROUNDED = 'rounded_buttons_with_icon';
        const SHARE_TYPE_ANIMATED_FI = 'animated_btns_with_icon';

        /*templates depending which type we are using */
        const SHARE_TYPE_NORMAL_TEMPLATE = '{{separator}} <a href="{{url}}" target="_blank" rel="external nofollow" class="{{class}}" title="{{title}}">{{text}}</a>';
        const SHARE_TYPE_IMAGE_TEMPLATE = '<a href="{{url}}" target="_blank" rel="external nofollow" class="{{class}}" title="{{title}}"></a>';
        const SHARE_TYPE_ICON_TEXT_TEMPLATE = '<a href="{{url}}" target="_blank" rel="external nofollow" class="{{class}}" title="{{title}}">{{icon}} {{text}}</a>';
        const SHARE_TYPE_ICON_ONLY_TEMPLATE = '<a href="{{url}}" target="_blank" rel="external nofollow" class="{{class}}" title="{{title}}">{{icon}}</a>';
        const SHARE_TYPE_COLORED_TEXT_TEMPLATE = '<a href="{{url}}" target="_blank" rel="external nofollow" class="{{class}}" title="{{title}}">{{text}}</a>';
    }

    /*
        Omit PHP closing tag to help avoid accidental output
    */
