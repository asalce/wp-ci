<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2010-01-16 14:38:46 --> Config Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 14:38:46 --> URI Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 14:38:46 --> Output Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Input Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Language Class Initialized
DEBUG - 2010-01-16 14:38:46 --> wpci_plugins_loaded(Array
(
    [0] => 
)
)
DEBUG - 2010-01-16 14:38:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 14:38:46 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 14:38:46 --> No URI present. Default controller set.
DEBUG - 2010-01-16 14:38:46 --> Router Class Set
DEBUG - 2010-01-16 14:38:46 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 14:38:46 --> Loader Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Helper loaded: url_helper
DEBUG - 2010-01-16 14:38:46 --> Helper loaded: form_helper
DEBUG - 2010-01-16 14:38:46 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 14:38:46 --> Database Driver Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Session Class Initialized
DEBUG - 2010-01-16 14:38:46 --> Helper loaded: string_helper
DEBUG - 2010-01-16 14:38:46 --> Session routines successfully run
DEBUG - 2010-01-16 14:38:46 --> Controller Class Initialized
DEBUG - 2010-01-16 14:38:46 --> File loaded: /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 14:38:46 --> wpci_flush_rules(Array
(
    [0] => 
)
)
DEBUG - 2010-01-16 14:38:46 --> wpci_generate_rewrite_rules(Array
(
    [0] => WP_Rewrite Object
        (
            [permalink_structure] => /%year%/%monthnum%/%day%/%postname%/
            [use_trailing_slashes] => 1
            [category_base] => 
            [tag_base] => 
            [tag_structure] => /tag/%tag%
            [author_base] => author
            [search_base] => search
            [comments_base] => comments
            [feed_base] => feed
            [comments_feed_structure] => 
            [front] => /
            [root] => 
            [index] => index.php
            [matches] => matches
            [rules] => Array
                (
                    [robots\.txt$] => index.php?robots=1
                    [.*wp-atom.php$] => index.php?feed=atom
                    [.*wp-rdf.php$] => index.php?feed=rdf
                    [.*wp-rss.php$] => index.php?feed=rss
                    [.*wp-rss2.php$] => index.php?feed=rss2
                    [.*wp-feed.php$] => index.php?feed=feed
                    [.*wp-commentsrss2.php$] => index.php?feed=rss2&withcomments=1
                    [feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]
                    [(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]
                    [page/?([0-9]{1,})/?$] => index.php?&paged=$matches[1]
                    [comments/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]&withcomments=1
                    [comments/(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]&withcomments=1
                    [comments/page/?([0-9]{1,})/?$] => index.php?&paged=$matches[1]
                    [search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?s=$matches[1]&feed=$matches[2]
                    [search/(.+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?s=$matches[1]&feed=$matches[2]
                    [search/(.+)/page/?([0-9]{1,})/?$] => index.php?s=$matches[1]&paged=$matches[2]
                    [search/(.+)/?$] => index.php?s=$matches[1]
                    [category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?category_name=$matches[1]&feed=$matches[2]
                    [category/(.+?)/(feed|rdf|rss|rss2|atom)/?$] => index.php?category_name=$matches[1]&feed=$matches[2]
                    [category/(.+?)/page/?([0-9]{1,})/?$] => index.php?category_name=$matches[1]&paged=$matches[2]
                    [category/(.+?)/?$] => index.php?category_name=$matches[1]
                    [tag/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?tag=$matches[1]&feed=$matches[2]
                    [tag/(.+?)/(feed|rdf|rss|rss2|atom)/?$] => index.php?tag=$matches[1]&feed=$matches[2]
                    [tag/(.+?)/page/?([0-9]{1,})/?$] => index.php?tag=$matches[1]&paged=$matches[2]
                    [tag/(.+?)/?$] => index.php?tag=$matches[1]
                    [author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?author_name=$matches[1]&feed=$matches[2]
                    [author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?author_name=$matches[1]&feed=$matches[2]
                    [author/([^/]+)/page/?([0-9]{1,})/?$] => index.php?author_name=$matches[1]&paged=$matches[2]
                    [author/([^/]+)/?$] => index.php?author_name=$matches[1]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]
                    [([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&feed=$matches[2]
                    [([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&feed=$matches[2]
                    [([0-9]{4})/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&paged=$matches[2]
                    [([0-9]{4})/?$] => index.php?year=$matches[1]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$] => index.php?attachment=$matches[1]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$] => index.php?attachment=$matches[1]&tb=1
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?attachment=$matches[1]&cpage=$matches[2]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(/[0-9]+)?/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$] => index.php?attachment=$matches[1]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$] => index.php?attachment=$matches[1]&tb=1
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?attachment=$matches[1]&cpage=$matches[2]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]
                    [([0-9]{4})/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&cpage=$matches[2]
                    [.+?/attachment/([^/]+)/?$] => index.php?attachment=$matches[1]
                    [.+?/attachment/([^/]+)/trackback/?$] => index.php?attachment=$matches[1]&tb=1
                    [.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?attachment=$matches[1]&cpage=$matches[2]
                    [(.+?)/trackback/?$] => index.php?pagename=$matches[1]&tb=1
                    [(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?pagename=$matches[1]&feed=$matches[2]
                    [(.+?)/(feed|rdf|rss|rss2|atom)/?$] => index.php?pagename=$matches[1]&feed=$matches[2]
                    [(.+?)/page/?([0-9]{1,})/?$] => index.php?pagename=$matches[1]&paged=$matches[2]
                    [(.+?)/comment-page-([0-9]{1,})/?$] => index.php?pagename=$matches[1]&cpage=$matches[2]
                    [(.+?)(/[0-9]+)?/?$] => index.php?pagename=$matches[1]&page=$matches[2]
                )

            [extra_rules] => Array
                (
                )

            [extra_rules_top] => Array
                (
                )

            [non_wp_rules] => Array
                (
                )

            [extra_permastructs] => Array
                (
                )

            [endpoints] => Array
                (
                )

            [use_verbose_rules] => 
            [use_verbose_page_rules] => 
            [rewritecode] => Array
                (
                    [0] => %year%
                    [1] => %monthnum%
                    [2] => %day%
                    [3] => %hour%
                    [4] => %minute%
                    [5] => %second%
                    [6] => %postname%
                    [7] => %post_id%
                    [8] => %category%
                    [9] => %tag%
                    [10] => %author%
                    [11] => %pagename%
                    [12] => %search%
                )

            [rewritereplace] => Array
                (
                    [0] => ([0-9]{4})
                    [1] => ([0-9]{1,2})
                    [2] => ([0-9]{1,2})
                    [3] => ([0-9]{1,2})
                    [4] => ([0-9]{1,2})
                    [5] => ([0-9]{1,2})
                    [6] => ([^/]+)
                    [7] => ([0-9]+)
                    [8] => (.+?)
                    [9] => (.+?)
                    [10] => ([^/]+)
                    [11] => (.+?)
                    [12] => (.+)
                )

            [queryreplace] => Array
                (
                    [0] => year=
                    [1] => monthnum=
                    [2] => day=
                    [3] => hour=
                    [4] => minute=
                    [5] => second=
                    [6] => name=
                    [7] => p=
                    [8] => category_name=
                    [9] => tag=
                    [10] => author_name=
                    [11] => pagename=
                    [12] => s=
                )

            [feeds] => Array
                (
                    [0] => feed
                    [1] => rdf
                    [2] => rss
                    [3] => rss2
                    [4] => atom
                )

            [date_structure] => /%year%/%monthnum%/%day%
            [search_structure] => search/%search%
            [category_structure] => /category/%category%
            [author_structure] => /author/%author%
            [page_structure] => %pagename%
        )

)
)
DEBUG - 2010-01-16 14:38:46 --> wpci_rewrite_query_vars(Array
(
    [0] => Array
        (
            [0] => m
            [1] => p
            [2] => posts
            [3] => w
            [4] => cat
            [5] => withcomments
            [6] => withoutcomments
            [7] => s
            [8] => search
            [9] => exact
            [10] => sentence
            [11] => debug
            [12] => calendar
            [13] => page
            [14] => paged
            [15] => more
            [16] => tb
            [17] => pb
            [18] => author
            [19] => order
            [20] => orderby
            [21] => year
            [22] => monthnum
            [23] => day
            [24] => hour
            [25] => minute
            [26] => second
            [27] => name
            [28] => category_name
            [29] => tag
            [30] => feed
            [31] => author_name
            [32] => static
            [33] => pagename
            [34] => page_id
            [35] => error
            [36] => comments_popup
            [37] => attachment
            [38] => attachment_id
            [39] => subpost
            [40] => subpost_id
            [41] => preview
            [42] => robots
            [43] => taxonomy
            [44] => term
            [45] => cpage
        )

)
)
DEBUG - 2010-01-16 14:38:46 --> wpci_wp_title(Array
(
    [0] => 
    [1] => &laquo;
    [2] => right
)
)
ERROR - 2010-01-16 14:38:46 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 39
DEBUG - 2010-01-16 14:39:52 --> Config Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 14:39:52 --> URI Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 14:39:52 --> Output Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Input Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Language Class Initialized
DEBUG - 2010-01-16 14:39:52 --> wpci_plugins_loaded(Array
(
    [0] => 
)
)
DEBUG - 2010-01-16 14:39:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 14:39:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 14:39:52 --> No URI present. Default controller set.
DEBUG - 2010-01-16 14:39:52 --> Router Class Set
DEBUG - 2010-01-16 14:39:52 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 14:39:52 --> Loader Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Helper loaded: url_helper
DEBUG - 2010-01-16 14:39:52 --> Helper loaded: form_helper
DEBUG - 2010-01-16 14:39:52 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 14:39:52 --> Database Driver Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Session Class Initialized
DEBUG - 2010-01-16 14:39:52 --> Helper loaded: string_helper
DEBUG - 2010-01-16 14:39:52 --> Session routines successfully run
DEBUG - 2010-01-16 14:39:52 --> Controller Class Initialized
DEBUG - 2010-01-16 14:39:52 --> File loaded: /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 14:39:52 --> wpci_flush_rules(Array
(
    [0] => 
)
)
DEBUG - 2010-01-16 14:39:52 --> wpci_generate_rewrite_rules(Array
(
    [0] => WP_Rewrite Object
        (
            [permalink_structure] => /%year%/%monthnum%/%day%/%postname%/
            [use_trailing_slashes] => 1
            [category_base] => 
            [tag_base] => 
            [tag_structure] => /tag/%tag%
            [author_base] => author
            [search_base] => search
            [comments_base] => comments
            [feed_base] => feed
            [comments_feed_structure] => 
            [front] => /
            [root] => 
            [index] => index.php
            [matches] => matches
            [rules] => Array
                (
                    [robots\.txt$] => index.php?robots=1
                    [.*wp-atom.php$] => index.php?feed=atom
                    [.*wp-rdf.php$] => index.php?feed=rdf
                    [.*wp-rss.php$] => index.php?feed=rss
                    [.*wp-rss2.php$] => index.php?feed=rss2
                    [.*wp-feed.php$] => index.php?feed=feed
                    [.*wp-commentsrss2.php$] => index.php?feed=rss2&withcomments=1
                    [feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]
                    [(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]
                    [page/?([0-9]{1,})/?$] => index.php?&paged=$matches[1]
                    [comments/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]&withcomments=1
                    [comments/(feed|rdf|rss|rss2|atom)/?$] => index.php?&feed=$matches[1]&withcomments=1
                    [comments/page/?([0-9]{1,})/?$] => index.php?&paged=$matches[1]
                    [search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?s=$matches[1]&feed=$matches[2]
                    [search/(.+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?s=$matches[1]&feed=$matches[2]
                    [search/(.+)/page/?([0-9]{1,})/?$] => index.php?s=$matches[1]&paged=$matches[2]
                    [search/(.+)/?$] => index.php?s=$matches[1]
                    [category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?category_name=$matches[1]&feed=$matches[2]
                    [category/(.+?)/(feed|rdf|rss|rss2|atom)/?$] => index.php?category_name=$matches[1]&feed=$matches[2]
                    [category/(.+?)/page/?([0-9]{1,})/?$] => index.php?category_name=$matches[1]&paged=$matches[2]
                    [category/(.+?)/?$] => index.php?category_name=$matches[1]
                    [tag/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?tag=$matches[1]&feed=$matches[2]
                    [tag/(.+?)/(feed|rdf|rss|rss2|atom)/?$] => index.php?tag=$matches[1]&feed=$matches[2]
                    [tag/(.+?)/page/?([0-9]{1,})/?$] => index.php?tag=$matches[1]&paged=$matches[2]
                    [tag/(.+?)/?$] => index.php?tag=$matches[1]
                    [author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?author_name=$matches[1]&feed=$matches[2]
                    [author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?author_name=$matches[1]&feed=$matches[2]
                    [author/([^/]+)/page/?([0-9]{1,})/?$] => index.php?author_name=$matches[1]&paged=$matches[2]
                    [author/([^/]+)/?$] => index.php?author_name=$matches[1]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]
                    [([0-9]{4})/([0-9]{1,2})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]
                    [([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&feed=$matches[2]
                    [([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&feed=$matches[2]
                    [([0-9]{4})/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&paged=$matches[2]
                    [([0-9]{4})/?$] => index.php?year=$matches[1]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$] => index.php?attachment=$matches[1]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$] => index.php?attachment=$matches[1]&tb=1
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?attachment=$matches[1]&cpage=$matches[2]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(/[0-9]+)?/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$] => index.php?attachment=$matches[1]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$] => index.php?attachment=$matches[1]&tb=1
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?attachment=$matches[1]&cpage=$matches[2]
                    [([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]
                    [([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]
                    [([0-9]{4})/comment-page-([0-9]{1,})/?$] => index.php?year=$matches[1]&cpage=$matches[2]
                    [.+?/attachment/([^/]+)/?$] => index.php?attachment=$matches[1]
                    [.+?/attachment/([^/]+)/trackback/?$] => index.php?attachment=$matches[1]&tb=1
                    [.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$] => index.php?attachment=$matches[1]&feed=$matches[2]
                    [.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$] => index.php?attachment=$matches[1]&cpage=$matches[2]
                    [(.+?)/trackback/?$] => index.php?pagename=$matches[1]&tb=1
                    [(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$] => index.php?pagename=$matches[1]&feed=$matches[2]
                    [(.+?)/(feed|rdf|rss|rss2|atom)/?$] => index.php?pagename=$matches[1]&feed=$matches[2]
                    [(.+?)/page/?([0-9]{1,})/?$] => index.php?pagename=$matches[1]&paged=$matches[2]
                    [(.+?)/comment-page-([0-9]{1,})/?$] => index.php?pagename=$matches[1]&cpage=$matches[2]
                    [(.+?)(/[0-9]+)?/?$] => index.php?pagename=$matches[1]&page=$matches[2]
                )

            [extra_rules] => Array
                (
                )

            [extra_rules_top] => Array
                (
                )

            [non_wp_rules] => Array
                (
                )

            [extra_permastructs] => Array
                (
                )

            [endpoints] => Array
                (
                )

            [use_verbose_rules] => 
            [use_verbose_page_rules] => 
            [rewritecode] => Array
                (
                    [0] => %year%
                    [1] => %monthnum%
                    [2] => %day%
                    [3] => %hour%
                    [4] => %minute%
                    [5] => %second%
                    [6] => %postname%
                    [7] => %post_id%
                    [8] => %category%
                    [9] => %tag%
                    [10] => %author%
                    [11] => %pagename%
                    [12] => %search%
                )

            [rewritereplace] => Array
                (
                    [0] => ([0-9]{4})
                    [1] => ([0-9]{1,2})
                    [2] => ([0-9]{1,2})
                    [3] => ([0-9]{1,2})
                    [4] => ([0-9]{1,2})
                    [5] => ([0-9]{1,2})
                    [6] => ([^/]+)
                    [7] => ([0-9]+)
                    [8] => (.+?)
                    [9] => (.+?)
                    [10] => ([^/]+)
                    [11] => (.+?)
                    [12] => (.+)
                )

            [queryreplace] => Array
                (
                    [0] => year=
                    [1] => monthnum=
                    [2] => day=
                    [3] => hour=
                    [4] => minute=
                    [5] => second=
                    [6] => name=
                    [7] => p=
                    [8] => category_name=
                    [9] => tag=
                    [10] => author_name=
                    [11] => pagename=
                    [12] => s=
                )

            [feeds] => Array
                (
                    [0] => feed
                    [1] => rdf
                    [2] => rss
                    [3] => rss2
                    [4] => atom
                )

            [date_structure] => /%year%/%monthnum%/%day%
            [search_structure] => search/%search%
            [category_structure] => /category/%category%
            [author_structure] => /author/%author%
            [page_structure] => %pagename%
        )

)
)
DEBUG - 2010-01-16 14:39:52 --> wpci_rewrite_query_vars(Array
(
    [0] => Array
        (
            [0] => m
            [1] => p
            [2] => posts
            [3] => w
            [4] => cat
            [5] => withcomments
            [6] => withoutcomments
            [7] => s
            [8] => search
            [9] => exact
            [10] => sentence
            [11] => debug
            [12] => calendar
            [13] => page
            [14] => paged
            [15] => more
            [16] => tb
            [17] => pb
            [18] => author
            [19] => order
            [20] => orderby
            [21] => year
            [22] => monthnum
            [23] => day
            [24] => hour
            [25] => minute
            [26] => second
            [27] => name
            [28] => category_name
            [29] => tag
            [30] => feed
            [31] => author_name
            [32] => static
            [33] => pagename
            [34] => page_id
            [35] => error
            [36] => comments_popup
            [37] => attachment
            [38] => attachment_id
            [39] => subpost
            [40] => subpost_id
            [41] => preview
            [42] => robots
            [43] => taxonomy
            [44] => term
            [45] => cpage
        )

)
)
DEBUG - 2010-01-16 14:39:52 --> wpci_wp_title(Array
(
    [0] => 
    [1] => &laquo;
    [2] => right
)
)
DEBUG - 2010-01-16 18:33:53 --> Config Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:33:53 --> URI Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:33:53 --> Output Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Input Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Language Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:33:53 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:33:53 --> No URI present. Default controller set.
DEBUG - 2010-01-16 18:33:53 --> Router Class Set
DEBUG - 2010-01-16 18:33:53 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 18:33:53 --> Loader Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:33:53 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:33:53 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:33:53 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Session Class Initialized
DEBUG - 2010-01-16 18:33:53 --> Helper loaded: string_helper
DEBUG - 2010-01-16 18:33:53 --> A session cookie was not found.
DEBUG - 2010-01-16 18:33:53 --> Session routines successfully run
DEBUG - 2010-01-16 18:33:53 --> Controller Class Initialized
DEBUG - 2010-01-16 18:33:53 --> File loaded: /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
ERROR - 2010-01-16 18:33:53 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:33:59 --> Config Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:33:59 --> URI Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:33:59 --> Output Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Input Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Language Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:33:59 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:33:59 --> No URI present. Default controller set.
DEBUG - 2010-01-16 18:33:59 --> Router Class Set
DEBUG - 2010-01-16 18:33:59 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 18:33:59 --> Loader Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:33:59 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:33:59 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:33:59 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Session Class Initialized
DEBUG - 2010-01-16 18:33:59 --> Helper loaded: string_helper
DEBUG - 2010-01-16 18:33:59 --> Session routines successfully run
DEBUG - 2010-01-16 18:33:59 --> Controller Class Initialized
DEBUG - 2010-01-16 18:33:59 --> File loaded: /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 18:36:54 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:54 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:54 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:54 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:36:54 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:54 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:54 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:54 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:36:54 --> No URI present. Default controller set.
DEBUG - 2010-01-16 18:36:54 --> Router Class Set
DEBUG - 2010-01-16 18:36:54 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 18:36:54 --> Loader Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:36:54 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:36:54 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:36:54 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Session Class Initialized
DEBUG - 2010-01-16 18:36:54 --> Helper loaded: string_helper
DEBUG - 2010-01-16 18:36:54 --> Session routines successfully run
DEBUG - 2010-01-16 18:36:54 --> Controller Class Initialized
DEBUG - 2010-01-16 18:36:54 --> File loaded: /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 18:36:57 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:57 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:57 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:57 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:36:57 --> No URI present. Default controller set.
DEBUG - 2010-01-16 18:36:57 --> Router Class Set
DEBUG - 2010-01-16 18:36:57 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 18:36:57 --> Loader Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:36:57 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:36:57 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:36:57 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Session Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Helper loaded: string_helper
DEBUG - 2010-01-16 18:36:57 --> Session routines successfully run
DEBUG - 2010-01-16 18:36:57 --> Controller Class Initialized
DEBUG - 2010-01-16 18:36:57 --> File loaded: /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 18:36:57 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:57 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:57 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:57 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:57 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:57 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
ERROR - 2010-01-16 18:36:58 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:36:58 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:58 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:58 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:58 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:58 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:58 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:58 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:58 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:58 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:58 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:36:59 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:59 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:59 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:59 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:36:59 --> Config Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:36:59 --> URI Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:36:59 --> Output Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Input Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Language Class Initialized
DEBUG - 2010-01-16 18:36:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:36:59 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:36:59 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:37:00 --> Config Class Initialized
DEBUG - 2010-01-16 18:37:00 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:37:00 --> URI Class Initialized
DEBUG - 2010-01-16 18:37:00 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:37:00 --> Output Class Initialized
DEBUG - 2010-01-16 18:37:00 --> Input Class Initialized
DEBUG - 2010-01-16 18:37:00 --> Language Class Initialized
DEBUG - 2010-01-16 18:37:00 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:37:00 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:00 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:37:50 --> Config Class Initialized
DEBUG - 2010-01-16 18:37:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:37:50 --> URI Class Initialized
DEBUG - 2010-01-16 18:37:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:37:50 --> Output Class Initialized
DEBUG - 2010-01-16 18:37:50 --> Input Class Initialized
DEBUG - 2010-01-16 18:37:50 --> Language Class Initialized
DEBUG - 2010-01-16 18:37:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:37:50 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:50 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
ERROR - 2010-01-16 18:37:50 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:37:51 --> Config Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:37:51 --> URI Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:37:51 --> Output Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Input Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Language Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:37:51 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:37:51 --> Config Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:37:51 --> URI Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:37:51 --> Output Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Input Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Language Class Initialized
DEBUG - 2010-01-16 18:37:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:37:51 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:51 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:37:52 --> Config Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:37:52 --> URI Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:37:52 --> Output Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Input Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Language Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:37:52 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:37:52 --> Config Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:37:52 --> URI Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:37:52 --> Output Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Input Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Language Class Initialized
DEBUG - 2010-01-16 18:37:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:37:52 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:37:52 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:38:38 --> Config Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:38:38 --> URI Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:38:38 --> Output Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Input Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Language Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:38:38 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
ERROR - 2010-01-16 18:38:38 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:38:38 --> Config Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:38:38 --> URI Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:38:38 --> Output Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Input Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Language Class Initialized
DEBUG - 2010-01-16 18:38:38 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:38:38 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:38 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:38:39 --> Config Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:38:39 --> URI Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:38:39 --> Output Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Input Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Language Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:38:39 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:38:39 --> Config Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:38:39 --> URI Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:38:39 --> Output Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Input Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Language Class Initialized
DEBUG - 2010-01-16 18:38:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:38:39 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:39 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:38:40 --> Config Class Initialized
DEBUG - 2010-01-16 18:38:40 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:38:40 --> URI Class Initialized
DEBUG - 2010-01-16 18:38:40 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:38:40 --> Output Class Initialized
DEBUG - 2010-01-16 18:38:40 --> Input Class Initialized
DEBUG - 2010-01-16 18:38:40 --> Language Class Initialized
DEBUG - 2010-01-16 18:38:40 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:38:40 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 158
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 101
ERROR - 2010-01-16 18:38:40 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:39:33 --> Config Class Initialized
DEBUG - 2010-01-16 18:39:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:39:33 --> URI Class Initialized
DEBUG - 2010-01-16 18:39:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:39:33 --> Output Class Initialized
DEBUG - 2010-01-16 18:39:33 --> Input Class Initialized
DEBUG - 2010-01-16 18:39:33 --> Language Class Initialized
DEBUG - 2010-01-16 18:39:34 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:39:34 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
ERROR - 2010-01-16 18:39:34 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:39:34 --> Config Class Initialized
DEBUG - 2010-01-16 18:39:34 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:39:34 --> URI Class Initialized
DEBUG - 2010-01-16 18:39:34 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:39:34 --> Output Class Initialized
DEBUG - 2010-01-16 18:39:34 --> Input Class Initialized
DEBUG - 2010-01-16 18:39:34 --> Language Class Initialized
DEBUG - 2010-01-16 18:39:34 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:39:34 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:34 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:39:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:39:35 --> URI Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:39:35 --> Output Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Input Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Language Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:39:35 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:39:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:39:35 --> URI Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:39:35 --> Output Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Input Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Language Class Initialized
DEBUG - 2010-01-16 18:39:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:39:35 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:35 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:39:36 --> Config Class Initialized
DEBUG - 2010-01-16 18:39:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:39:36 --> URI Class Initialized
DEBUG - 2010-01-16 18:39:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:39:36 --> Output Class Initialized
DEBUG - 2010-01-16 18:39:36 --> Input Class Initialized
DEBUG - 2010-01-16 18:39:36 --> Language Class Initialized
DEBUG - 2010-01-16 18:39:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:39:36 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 160
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined variable: annotation /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 103
ERROR - 2010-01-16 18:39:36 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:09 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:09 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:09 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:09 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
ERROR - 2010-01-16 18:40:09 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:40:09 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:09 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:09 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:09 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:09 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:09 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:10 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:10 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:10 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:10 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:10 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:10 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:10 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:10 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:10 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:11 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:11 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:11 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:11 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:11 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:11 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:11 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:11 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:11 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wp-ci/core-plugin/lib/annotations.php 162
ERROR - 2010-01-16 18:40:11 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:47 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:47 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:47 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:47 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:47 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
ERROR - 2010-01-16 18:40:47 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:40:47 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:47 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:47 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:47 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:47 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:48 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:48 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:48 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:48 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:48 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:48 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:48 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:48 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:48 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:48 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:48 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:49 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:40:49 --> Config Class Initialized
DEBUG - 2010-01-16 18:40:49 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:40:49 --> URI Class Initialized
DEBUG - 2010-01-16 18:40:49 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:40:49 --> Output Class Initialized
DEBUG - 2010-01-16 18:40:49 --> Input Class Initialized
DEBUG - 2010-01-16 18:40:49 --> Language Class Initialized
DEBUG - 2010-01-16 18:40:49 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:40:49 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:40:49 --> Severity: Notice  --> Undefined index:  page /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 67
DEBUG - 2010-01-16 18:41:06 --> Config Class Initialized
DEBUG - 2010-01-16 18:41:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:41:06 --> URI Class Initialized
DEBUG - 2010-01-16 18:41:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:41:06 --> Output Class Initialized
DEBUG - 2010-01-16 18:41:06 --> Input Class Initialized
DEBUG - 2010-01-16 18:41:06 --> Language Class Initialized
DEBUG - 2010-01-16 18:41:06 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:41:06 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:41:06 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 18:41:33 --> Config Class Initialized
DEBUG - 2010-01-16 18:41:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:41:33 --> URI Class Initialized
DEBUG - 2010-01-16 18:41:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:41:33 --> Output Class Initialized
DEBUG - 2010-01-16 18:41:33 --> Input Class Initialized
DEBUG - 2010-01-16 18:41:33 --> Language Class Initialized
DEBUG - 2010-01-16 18:41:33 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:41:33 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:41:33 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:41:34 --> Config Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:41:34 --> URI Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:41:34 --> Output Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Input Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Language Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:41:34 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:41:34 --> Config Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:41:34 --> URI Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:41:34 --> Output Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Input Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Language Class Initialized
DEBUG - 2010-01-16 18:41:34 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:41:34 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:41:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:41:35 --> URI Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:41:35 --> Output Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Input Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Language Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:41:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:41:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:41:35 --> URI Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:41:35 --> Output Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Input Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Language Class Initialized
DEBUG - 2010-01-16 18:41:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:41:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:42:50 --> Config Class Initialized
DEBUG - 2010-01-16 18:42:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:42:50 --> URI Class Initialized
DEBUG - 2010-01-16 18:42:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:42:50 --> Output Class Initialized
DEBUG - 2010-01-16 18:42:50 --> Input Class Initialized
DEBUG - 2010-01-16 18:42:50 --> Language Class Initialized
DEBUG - 2010-01-16 18:42:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:42:50 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:42:50 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:42:51 --> Config Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:42:51 --> URI Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:42:51 --> Output Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Input Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Language Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:42:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:42:51 --> Config Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:42:51 --> URI Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:42:51 --> Output Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Input Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Language Class Initialized
DEBUG - 2010-01-16 18:42:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:42:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:42:52 --> Config Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:42:52 --> URI Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:42:52 --> Output Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Input Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Language Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:42:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:42:52 --> Config Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:42:52 --> URI Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:42:52 --> Output Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Input Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Language Class Initialized
DEBUG - 2010-01-16 18:42:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:42:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:43:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:43:35 --> URI Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:43:35 --> Output Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Input Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Language Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:43:35 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:43:35 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 18:43:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:43:35 --> URI Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:43:35 --> Output Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Input Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Language Class Initialized
DEBUG - 2010-01-16 18:43:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:43:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:43:35 --> Config Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:43:36 --> URI Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:43:36 --> Output Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Input Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Language Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:43:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:43:36 --> Config Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:43:36 --> URI Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:43:36 --> Output Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Input Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Language Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:43:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:43:36 --> Config Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:43:36 --> URI Class Initialized
DEBUG - 2010-01-16 18:43:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:43:36 --> Output Class Initialized
DEBUG - 2010-01-16 18:43:37 --> Input Class Initialized
DEBUG - 2010-01-16 18:43:37 --> Language Class Initialized
DEBUG - 2010-01-16 18:43:37 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:43:37 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:43:56 --> Config Class Initialized
DEBUG - 2010-01-16 18:43:56 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:43:56 --> URI Class Initialized
DEBUG - 2010-01-16 18:43:56 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:43:56 --> Output Class Initialized
DEBUG - 2010-01-16 18:43:56 --> Input Class Initialized
DEBUG - 2010-01-16 18:43:56 --> Language Class Initialized
DEBUG - 2010-01-16 18:43:56 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:43:56 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:43:56 --> Severity: Notice  --> Undefined index:  p /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:43:56 --> Severity: Notice  --> Undefined index:  attachment_id /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:43:56 --> Severity: Notice  --> Undefined index:  page_id /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
DEBUG - 2010-01-16 18:44:07 --> Config Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:44:07 --> URI Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:44:07 --> Output Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Input Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Language Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:44:07 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Undefined index:  p /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Undefined index:  attachment_id /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Undefined index:  page_id /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
DEBUG - 2010-01-16 18:44:07 --> Config Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:44:07 --> URI Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:44:07 --> Output Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Input Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Language Class Initialized
DEBUG - 2010-01-16 18:44:07 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:44:07 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Undefined index:  p /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Undefined index:  attachment_id /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Undefined index:  page_id /Users/aaron/Workspace/wordpress-2.9/wp-admin/edit.php 16
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/template.php 2597
ERROR - 2010-01-16 18:44:07 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/template.php 2606
DEBUG - 2010-01-16 18:44:14 --> Config Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:44:14 --> URI Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:44:14 --> Output Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Input Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Language Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:44:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:44:14 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:44:14 --> Loader Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:44:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:44:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:44:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Session Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:44:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:44:14 --> Session routines successfully run
ERROR - 2010-01-16 18:44:14 --> Severity: Warning  --> MY_Loader::include_once(/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php) [<a href='my-loader.include-once'>my-loader.include-once</a>]: failed to open stream: No such file or directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
ERROR - 2010-01-16 18:44:14 --> Severity: Warning  --> MY_Loader::include_once() [<a href='function.include'>function.include</a>]: Failed opening '/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php' for inclusion (include_path='.:/Applications/MAMP/bin/php5/lib/php') /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
DEBUG - 2010-01-16 18:44:14 --> Controller Class Initialized
DEBUG - 2010-01-16 18:44:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:44:14 --> File loaded: /Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php
DEBUG - 2010-01-16 18:44:14 --> Final output sent to browser
DEBUG - 2010-01-16 18:44:14 --> Total execution time: 0.1218
DEBUG - 2010-01-16 18:44:44 --> Config Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:44:44 --> URI Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:44:44 --> Output Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Input Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Language Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:44:44 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:44:44 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:44:44 --> Loader Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:44:44 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:44:44 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:44:44 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Session Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:44:44 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:44:44 --> Session routines successfully run
ERROR - 2010-01-16 18:44:44 --> Severity: Warning  --> MY_Loader::include_once(/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php) [<a href='my-loader.include-once'>my-loader.include-once</a>]: failed to open stream: No such file or directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
ERROR - 2010-01-16 18:44:44 --> Severity: Warning  --> MY_Loader::include_once() [<a href='function.include'>function.include</a>]: Failed opening '/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php' for inclusion (include_path='.:/Applications/MAMP/bin/php5/lib/php') /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
DEBUG - 2010-01-16 18:44:44 --> Controller Class Initialized
DEBUG - 2010-01-16 18:44:44 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:44:44 --> File loaded: /Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php
DEBUG - 2010-01-16 18:44:44 --> Final output sent to browser
DEBUG - 2010-01-16 18:44:44 --> Total execution time: 0.1380
DEBUG - 2010-01-16 18:45:17 --> Config Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:45:17 --> URI Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:45:17 --> Output Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Input Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Language Class Initialized
DEBUG - 2010-01-16 18:45:17 --> ***** WP-CI Loaded. Yippie!
DEBUG - 2010-01-16 18:45:17 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:45:17 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:45:17 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:45:17 --> Loader Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:45:17 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:45:17 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:45:17 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Session Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:45:17 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:45:17 --> Session routines successfully run
ERROR - 2010-01-16 18:45:17 --> Severity: Warning  --> MY_Loader::include_once(/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php) [<a href='my-loader.include-once'>my-loader.include-once</a>]: failed to open stream: No such file or directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
ERROR - 2010-01-16 18:45:17 --> Severity: Warning  --> MY_Loader::include_once() [<a href='function.include'>function.include</a>]: Failed opening '/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php' for inclusion (include_path='.:/Applications/MAMP/bin/php5/lib/php') /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
DEBUG - 2010-01-16 18:45:17 --> Controller Class Initialized
DEBUG - 2010-01-16 18:45:17 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:45:17 --> File loaded: /Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php
DEBUG - 2010-01-16 18:45:17 --> Final output sent to browser
DEBUG - 2010-01-16 18:45:17 --> Total execution time: 0.1255
DEBUG - 2010-01-16 18:45:29 --> Config Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:45:29 --> URI Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:45:29 --> Output Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Input Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Language Class Initialized
DEBUG - 2010-01-16 18:45:29 --> ***** WP-CI Loaded. Yippie!
DEBUG - 2010-01-16 18:45:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:45:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:45:29 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:45:29 --> Loader Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:45:29 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:45:29 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:45:29 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Session Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:45:29 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:45:29 --> Session routines successfully run
ERROR - 2010-01-16 18:45:29 --> Severity: Warning  --> MY_Loader::include_once(/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php) [<a href='my-loader.include-once'>my-loader.include-once</a>]: failed to open stream: No such file or directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
ERROR - 2010-01-16 18:45:29 --> Severity: Warning  --> MY_Loader::include_once() [<a href='function.include'>function.include</a>]: Failed opening '/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php' for inclusion (include_path='.:/Applications/MAMP/bin/php5/lib/php') /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
DEBUG - 2010-01-16 18:45:29 --> Controller Class Initialized
DEBUG - 2010-01-16 18:45:29 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:45:29 --> File loaded: /Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php
DEBUG - 2010-01-16 18:45:29 --> Final output sent to browser
DEBUG - 2010-01-16 18:45:29 --> Total execution time: 0.1235
DEBUG - 2010-01-16 18:45:49 --> Config Class Initialized
DEBUG - 2010-01-16 18:45:49 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:45:49 --> URI Class Initialized
DEBUG - 2010-01-16 18:45:49 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:45:49 --> Output Class Initialized
DEBUG - 2010-01-16 18:45:49 --> Input Class Initialized
DEBUG - 2010-01-16 18:45:49 --> Language Class Initialized
DEBUG - 2010-01-16 18:45:49 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:45:49 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:45:49 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:45:50 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:45:50 --> Loader Class Initialized
DEBUG - 2010-01-16 18:45:50 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:45:50 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:45:50 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:45:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:45:50 --> Session Class Initialized
DEBUG - 2010-01-16 18:45:50 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:45:50 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:45:50 --> Session routines successfully run
ERROR - 2010-01-16 18:45:50 --> Severity: Warning  --> MY_Loader::include_once(/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php) [<a href='my-loader.include-once'>my-loader.include-once</a>]: failed to open stream: No such file or directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
ERROR - 2010-01-16 18:45:50 --> Severity: Warning  --> MY_Loader::include_once() [<a href='function.include'>function.include</a>]: Failed opening '/Users/aaron/Workspace/thejacksonclinics.com/application/application/config/autoload.php' for inclusion (include_path='.:/Applications/MAMP/bin/php5/lib/php') /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 611
DEBUG - 2010-01-16 18:45:50 --> Controller Class Initialized
DEBUG - 2010-01-16 18:45:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:45:50 --> File loaded: /Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php
DEBUG - 2010-01-16 18:45:50 --> Final output sent to browser
DEBUG - 2010-01-16 18:45:50 --> Total execution time: 0.1227
DEBUG - 2010-01-16 18:47:03 --> Config Class Initialized
DEBUG - 2010-01-16 18:47:03 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:47:03 --> URI Class Initialized
DEBUG - 2010-01-16 18:47:03 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:47:03 --> Output Class Initialized
DEBUG - 2010-01-16 18:47:03 --> Input Class Initialized
DEBUG - 2010-01-16 18:47:03 --> Language Class Initialized
DEBUG - 2010-01-16 18:47:03 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:47:03 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:47:03 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:47:03 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:47:29 --> Config Class Initialized
DEBUG - 2010-01-16 18:47:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:47:29 --> URI Class Initialized
DEBUG - 2010-01-16 18:47:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:47:29 --> Output Class Initialized
DEBUG - 2010-01-16 18:47:29 --> Input Class Initialized
DEBUG - 2010-01-16 18:47:29 --> Language Class Initialized
DEBUG - 2010-01-16 18:47:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:47:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:47:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:47:29 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:47:40 --> Config Class Initialized
DEBUG - 2010-01-16 18:47:40 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:47:40 --> URI Class Initialized
DEBUG - 2010-01-16 18:47:40 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:47:40 --> Output Class Initialized
DEBUG - 2010-01-16 18:47:40 --> Input Class Initialized
DEBUG - 2010-01-16 18:47:40 --> Language Class Initialized
DEBUG - 2010-01-16 18:47:40 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:47:40 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:47:40 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:47:41 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:47:41 --> Loader Class Initialized
DEBUG - 2010-01-16 18:47:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:47:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:47:41 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:47:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:47:41 --> Session Class Initialized
DEBUG - 2010-01-16 18:47:41 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:47:41 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:47:41 --> Session routines successfully run
DEBUG - 2010-01-16 18:47:41 --> Controller Class Initialized
DEBUG - 2010-01-16 18:47:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:47:41 --> File loaded: /Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php
DEBUG - 2010-01-16 18:47:41 --> Final output sent to browser
DEBUG - 2010-01-16 18:47:41 --> Total execution time: 0.1322
DEBUG - 2010-01-16 18:49:06 --> Config Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:49:06 --> URI Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:49:06 --> Output Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Input Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Language Class Initialized
DEBUG - 2010-01-16 18:49:06 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:49:06 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:49:06 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:49:06 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:49:06 --> Loader Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:49:06 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:49:06 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:49:06 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Session Class Initialized
DEBUG - 2010-01-16 18:49:06 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:49:06 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:49:06 --> Session routines successfully run
DEBUG - 2010-01-16 18:49:07 --> Controller Class Initialized
DEBUG - 2010-01-16 18:49:07 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:49:07 --> _ci_load('/Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php')
DEBUG - 2010-01-16 18:49:07 --> Final output sent to browser
DEBUG - 2010-01-16 18:49:07 --> Total execution time: 0.1221
DEBUG - 2010-01-16 18:49:55 --> Config Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:49:55 --> URI Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:49:55 --> Output Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Input Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Language Class Initialized
DEBUG - 2010-01-16 18:49:55 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:49:55 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:49:55 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:49:55 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:49:55 --> Loader Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:49:55 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:49:55 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:49:55 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Session Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:49:55 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:49:55 --> Session routines successfully run
DEBUG - 2010-01-16 18:49:55 --> Controller Class Initialized
DEBUG - 2010-01-16 18:49:55 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:49:55 --> 
DEBUG - 2010-01-16 18:49:55 --> _ci_load('/Users/aaron/Workspace/thejacksonclinics.com/application/application//views/manageLocations.php')
DEBUG - 2010-01-16 18:49:55 --> Final output sent to browser
DEBUG - 2010-01-16 18:49:55 --> Total execution time: 0.1215
DEBUG - 2010-01-16 18:50:12 --> Config Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:50:12 --> URI Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:50:12 --> Output Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Input Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Language Class Initialized
DEBUG - 2010-01-16 18:50:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:50:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:50:12 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:50:12 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:50:12 --> Loader Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:50:12 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:50:12 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:50:12 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Session Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:50:12 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:50:12 --> Session routines successfully run
DEBUG - 2010-01-16 18:50:12 --> Controller Class Initialized
DEBUG - 2010-01-16 18:50:12 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:50:12 --> _ci_load('/Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php')
DEBUG - 2010-01-16 18:50:12 --> Final output sent to browser
DEBUG - 2010-01-16 18:50:12 --> Total execution time: 0.1274
DEBUG - 2010-01-16 18:51:31 --> Config Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:51:31 --> URI Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:51:31 --> Output Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Input Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Language Class Initialized
DEBUG - 2010-01-16 18:51:31 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:51:31 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:51:31 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:51:31 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:51:31 --> Loader Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:51:31 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:51:31 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:51:31 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Session Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:51:31 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:51:31 --> Session routines successfully run
DEBUG - 2010-01-16 18:51:31 --> Controller Class Initialized
DEBUG - 2010-01-16 18:51:31 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:51:31 --> _ci_load('/Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php')
DEBUG - 2010-01-16 18:51:31 --> Final output sent to browser
DEBUG - 2010-01-16 18:51:31 --> Total execution time: 0.1268
DEBUG - 2010-01-16 18:52:15 --> Config Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:52:15 --> URI Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:52:15 --> Output Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Input Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Language Class Initialized
DEBUG - 2010-01-16 18:52:15 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:52:15 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:52:15 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:52:15 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 18:52:15 --> Loader Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Helper loaded: url_helper
DEBUG - 2010-01-16 18:52:15 --> Helper loaded: form_helper
DEBUG - 2010-01-16 18:52:15 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 18:52:15 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Session Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Helper loaded: string_helper
ERROR - 2010-01-16 18:52:15 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 18:52:15 --> Session routines successfully run
DEBUG - 2010-01-16 18:52:15 --> Controller Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Database Driver Class Initialized
DEBUG - 2010-01-16 18:52:15 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 18:52:15 --> Final output sent to browser
DEBUG - 2010-01-16 18:52:15 --> Total execution time: 0.1276
DEBUG - 2010-01-16 18:54:27 --> Config Class Initialized
DEBUG - 2010-01-16 18:54:27 --> Hooks Class Initialized
DEBUG - 2010-01-16 18:54:27 --> URI Class Initialized
DEBUG - 2010-01-16 18:54:27 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 18:54:27 --> Output Class Initialized
DEBUG - 2010-01-16 18:54:27 --> Input Class Initialized
DEBUG - 2010-01-16 18:54:27 --> Language Class Initialized
DEBUG - 2010-01-16 18:54:27 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 18:54:27 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 18:54:27 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 18:54:27 --> Final output sent to browser
DEBUG - 2010-01-16 18:54:27 --> Total execution time: 0.1043
DEBUG - 2010-01-16 19:01:45 --> Config Class Initialized
DEBUG - 2010-01-16 19:01:45 --> Hooks Class Initialized
DEBUG - 2010-01-16 19:01:45 --> URI Class Initialized
DEBUG - 2010-01-16 19:01:45 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 19:01:45 --> Output Class Initialized
DEBUG - 2010-01-16 19:01:45 --> Input Class Initialized
DEBUG - 2010-01-16 19:01:45 --> Language Class Initialized
DEBUG - 2010-01-16 19:01:45 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 19:01:45 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 19:01:45 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 19:01:45 --> Final output sent to browser
DEBUG - 2010-01-16 19:01:45 --> Total execution time: 0.1017
DEBUG - 2010-01-16 19:01:51 --> Config Class Initialized
DEBUG - 2010-01-16 19:01:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 19:01:51 --> URI Class Initialized
DEBUG - 2010-01-16 19:01:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 19:01:51 --> Output Class Initialized
DEBUG - 2010-01-16 19:01:51 --> Input Class Initialized
DEBUG - 2010-01-16 19:01:51 --> Language Class Initialized
DEBUG - 2010-01-16 19:01:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 19:01:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 19:01:51 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 19:01:51 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php:89) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 19:01:51 --> Final output sent to browser
DEBUG - 2010-01-16 19:01:51 --> Total execution time: 0.1104
DEBUG - 2010-01-16 19:03:29 --> Config Class Initialized
DEBUG - 2010-01-16 19:03:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 19:03:29 --> URI Class Initialized
DEBUG - 2010-01-16 19:03:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 19:03:29 --> Output Class Initialized
DEBUG - 2010-01-16 19:03:29 --> Input Class Initialized
DEBUG - 2010-01-16 19:03:29 --> Language Class Initialized
DEBUG - 2010-01-16 19:03:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 19:03:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 19:03:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 19:03:37 --> Config Class Initialized
DEBUG - 2010-01-16 19:03:37 --> Hooks Class Initialized
DEBUG - 2010-01-16 19:03:37 --> URI Class Initialized
DEBUG - 2010-01-16 19:03:37 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 19:03:37 --> Output Class Initialized
DEBUG - 2010-01-16 19:03:37 --> Input Class Initialized
DEBUG - 2010-01-16 19:03:37 --> Language Class Initialized
DEBUG - 2010-01-16 19:03:37 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 19:03:37 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 19:03:37 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 19:11:04 --> Config Class Initialized
DEBUG - 2010-01-16 19:11:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 19:11:04 --> URI Class Initialized
DEBUG - 2010-01-16 19:11:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 19:11:04 --> Output Class Initialized
DEBUG - 2010-01-16 19:11:04 --> Input Class Initialized
DEBUG - 2010-01-16 19:11:04 --> Language Class Initialized
DEBUG - 2010-01-16 19:11:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 19:11:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 19:11:04 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 19:11:04 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 19:41:05 --> Config Class Initialized
DEBUG - 2010-01-16 19:41:05 --> Hooks Class Initialized
DEBUG - 2010-01-16 19:41:05 --> URI Class Initialized
DEBUG - 2010-01-16 19:41:05 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 19:41:05 --> Output Class Initialized
DEBUG - 2010-01-16 19:41:05 --> Input Class Initialized
DEBUG - 2010-01-16 19:41:05 --> Language Class Initialized
DEBUG - 2010-01-16 19:41:05 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 19:41:05 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 19:41:05 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 19:41:05 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 20:07:12 --> Config Class Initialized
DEBUG - 2010-01-16 20:07:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:07:12 --> URI Class Initialized
DEBUG - 2010-01-16 20:07:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:07:12 --> Output Class Initialized
DEBUG - 2010-01-16 20:07:12 --> Input Class Initialized
DEBUG - 2010-01-16 20:07:12 --> Language Class Initialized
DEBUG - 2010-01-16 20:07:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:07:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:07:12 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:07:12 --> No URI present. Default controller set.
DEBUG - 2010-01-16 20:07:12 --> Router Class Set
DEBUG - 2010-01-16 20:07:12 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 20:07:12 --> Loader Class Initialized
DEBUG - 2010-01-16 20:07:12 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:07:12 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:07:12 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:07:12 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:07:13 --> Session Class Initialized
DEBUG - 2010-01-16 20:07:13 --> Helper loaded: string_helper
DEBUG - 2010-01-16 20:07:13 --> Session routines successfully run
DEBUG - 2010-01-16 20:07:13 --> Controller Class Initialized
DEBUG - 2010-01-16 20:07:13 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 20:11:04 --> Config Class Initialized
DEBUG - 2010-01-16 20:11:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:11:04 --> URI Class Initialized
DEBUG - 2010-01-16 20:11:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:11:04 --> Output Class Initialized
DEBUG - 2010-01-16 20:11:04 --> Input Class Initialized
DEBUG - 2010-01-16 20:11:04 --> Language Class Initialized
DEBUG - 2010-01-16 20:11:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:11:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:11:04 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:11:04 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 20:16:29 --> Config Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:16:29 --> URI Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:16:29 --> Output Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Input Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Language Class Initialized
DEBUG - 2010-01-16 20:16:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:16:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:16:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:16:29 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 20:16:29 --> Loader Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:16:29 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:16:29 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:16:29 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Session Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:16:29 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:16:29 --> Session routines successfully run
DEBUG - 2010-01-16 20:16:29 --> Controller Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:16:29 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 20:16:29 --> Final output sent to browser
DEBUG - 2010-01-16 20:16:29 --> Total execution time: 0.3083
DEBUG - 2010-01-16 20:21:43 --> Config Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:21:43 --> URI Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:21:43 --> Output Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Input Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Language Class Initialized
DEBUG - 2010-01-16 20:21:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:21:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:21:43 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:21:43 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 20:21:43 --> Loader Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:21:43 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:21:43 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:21:43 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Session Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:21:43 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:21:43 --> Session routines successfully run
DEBUG - 2010-01-16 20:21:43 --> Controller Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:21:43 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 20:21:43 --> Final output sent to browser
DEBUG - 2010-01-16 20:21:43 --> Total execution time: 0.1315
DEBUG - 2010-01-16 20:21:47 --> Config Class Initialized
DEBUG - 2010-01-16 20:21:47 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:21:47 --> URI Class Initialized
DEBUG - 2010-01-16 20:21:47 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:21:47 --> Output Class Initialized
DEBUG - 2010-01-16 20:21:47 --> Input Class Initialized
DEBUG - 2010-01-16 20:21:47 --> Language Class Initialized
DEBUG - 2010-01-16 20:21:47 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:21:47 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:21:47 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:22:06 --> Config Class Initialized
DEBUG - 2010-01-16 20:22:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:22:06 --> URI Class Initialized
DEBUG - 2010-01-16 20:22:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:22:06 --> Output Class Initialized
DEBUG - 2010-01-16 20:22:06 --> Input Class Initialized
DEBUG - 2010-01-16 20:22:06 --> Language Class Initialized
DEBUG - 2010-01-16 20:22:06 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:22:06 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:22:06 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:22:06 --> Final output sent to browser
DEBUG - 2010-01-16 20:22:06 --> Total execution time: 0.0981
DEBUG - 2010-01-16 20:25:26 --> Config Class Initialized
DEBUG - 2010-01-16 20:25:26 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:25:26 --> URI Class Initialized
DEBUG - 2010-01-16 20:25:26 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:25:26 --> Output Class Initialized
DEBUG - 2010-01-16 20:25:26 --> Input Class Initialized
DEBUG - 2010-01-16 20:25:26 --> Language Class Initialized
DEBUG - 2010-01-16 20:25:26 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:25:26 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:25:26 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:25:26 --> Final output sent to browser
DEBUG - 2010-01-16 20:25:26 --> Total execution time: 0.1065
DEBUG - 2010-01-16 20:25:35 --> Config Class Initialized
DEBUG - 2010-01-16 20:25:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:25:35 --> URI Class Initialized
DEBUG - 2010-01-16 20:25:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:25:35 --> Output Class Initialized
DEBUG - 2010-01-16 20:25:35 --> Input Class Initialized
DEBUG - 2010-01-16 20:25:35 --> Language Class Initialized
DEBUG - 2010-01-16 20:25:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:25:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:25:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:25:43 --> Config Class Initialized
DEBUG - 2010-01-16 20:25:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:25:43 --> URI Class Initialized
DEBUG - 2010-01-16 20:25:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:25:43 --> Output Class Initialized
DEBUG - 2010-01-16 20:25:43 --> Input Class Initialized
DEBUG - 2010-01-16 20:25:43 --> Language Class Initialized
DEBUG - 2010-01-16 20:25:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:25:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:25:43 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:25:49 --> Config Class Initialized
DEBUG - 2010-01-16 20:25:49 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:25:49 --> URI Class Initialized
DEBUG - 2010-01-16 20:25:49 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:25:49 --> Output Class Initialized
DEBUG - 2010-01-16 20:25:49 --> Input Class Initialized
DEBUG - 2010-01-16 20:25:49 --> Language Class Initialized
DEBUG - 2010-01-16 20:25:49 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:25:49 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:25:49 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:25:49 --> Final output sent to browser
DEBUG - 2010-01-16 20:25:49 --> Total execution time: 0.0987
DEBUG - 2010-01-16 20:27:05 --> Config Class Initialized
DEBUG - 2010-01-16 20:27:05 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:27:05 --> URI Class Initialized
DEBUG - 2010-01-16 20:27:05 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:27:05 --> Output Class Initialized
DEBUG - 2010-01-16 20:27:05 --> Input Class Initialized
DEBUG - 2010-01-16 20:27:05 --> Language Class Initialized
DEBUG - 2010-01-16 20:27:05 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:27:05 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:27:05 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:27:05 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 123
DEBUG - 2010-01-16 20:27:05 --> Final output sent to browser
DEBUG - 2010-01-16 20:27:05 --> Total execution time: 0.1001
DEBUG - 2010-01-16 20:28:55 --> Config Class Initialized
DEBUG - 2010-01-16 20:28:55 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:28:55 --> URI Class Initialized
DEBUG - 2010-01-16 20:28:55 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:28:55 --> Output Class Initialized
DEBUG - 2010-01-16 20:28:55 --> Input Class Initialized
DEBUG - 2010-01-16 20:28:55 --> Language Class Initialized
DEBUG - 2010-01-16 20:28:55 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:28:55 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:28:55 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:28:55 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 126
ERROR - 2010-01-16 20:28:55 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php:124) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 20:28:55 --> Final output sent to browser
DEBUG - 2010-01-16 20:28:55 --> Total execution time: 0.0995
DEBUG - 2010-01-16 20:31:33 --> Config Class Initialized
DEBUG - 2010-01-16 20:31:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:31:33 --> URI Class Initialized
DEBUG - 2010-01-16 20:31:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:31:33 --> Output Class Initialized
DEBUG - 2010-01-16 20:31:33 --> Input Class Initialized
DEBUG - 2010-01-16 20:31:33 --> Language Class Initialized
DEBUG - 2010-01-16 20:31:33 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:31:33 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:31:33 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:31:33 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 131
DEBUG - 2010-01-16 20:31:33 --> Final output sent to browser
DEBUG - 2010-01-16 20:31:33 --> Total execution time: 0.0987
DEBUG - 2010-01-16 20:34:29 --> Config Class Initialized
DEBUG - 2010-01-16 20:34:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:34:29 --> URI Class Initialized
DEBUG - 2010-01-16 20:34:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:34:29 --> Output Class Initialized
DEBUG - 2010-01-16 20:34:29 --> Input Class Initialized
DEBUG - 2010-01-16 20:34:29 --> Language Class Initialized
DEBUG - 2010-01-16 20:34:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:34:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:34:29 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:34:29 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
ERROR - 2010-01-16 20:34:29 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 132
ERROR - 2010-01-16 20:34:29 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php:130) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 20:34:29 --> Final output sent to browser
DEBUG - 2010-01-16 20:34:29 --> Total execution time: 0.2021
DEBUG - 2010-01-16 20:34:44 --> Config Class Initialized
DEBUG - 2010-01-16 20:34:44 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:34:44 --> URI Class Initialized
DEBUG - 2010-01-16 20:34:44 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:34:44 --> Output Class Initialized
DEBUG - 2010-01-16 20:34:44 --> Input Class Initialized
DEBUG - 2010-01-16 20:34:44 --> Language Class Initialized
DEBUG - 2010-01-16 20:34:44 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:34:44 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:34:44 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:34:44 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 132
DEBUG - 2010-01-16 20:34:44 --> Final output sent to browser
DEBUG - 2010-01-16 20:34:44 --> Total execution time: 0.0983
DEBUG - 2010-01-16 20:35:39 --> Config Class Initialized
DEBUG - 2010-01-16 20:35:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:35:39 --> URI Class Initialized
DEBUG - 2010-01-16 20:35:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:35:39 --> Output Class Initialized
DEBUG - 2010-01-16 20:35:39 --> Input Class Initialized
DEBUG - 2010-01-16 20:35:39 --> Language Class Initialized
DEBUG - 2010-01-16 20:35:39 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:35:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:35:39 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:35:40 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 150
DEBUG - 2010-01-16 20:35:40 --> Final output sent to browser
DEBUG - 2010-01-16 20:35:40 --> Total execution time: 0.0982
DEBUG - 2010-01-16 20:36:08 --> Config Class Initialized
DEBUG - 2010-01-16 20:36:08 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:36:08 --> URI Class Initialized
DEBUG - 2010-01-16 20:36:08 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:36:08 --> Output Class Initialized
DEBUG - 2010-01-16 20:36:08 --> Input Class Initialized
DEBUG - 2010-01-16 20:36:08 --> Language Class Initialized
DEBUG - 2010-01-16 20:36:08 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:36:08 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:36:08 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:36:08 --> Severity: Notice  --> Undefined variable: class /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 145
DEBUG - 2010-01-16 20:37:51 --> Config Class Initialized
DEBUG - 2010-01-16 20:37:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:37:51 --> URI Class Initialized
DEBUG - 2010-01-16 20:37:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:37:51 --> Output Class Initialized
DEBUG - 2010-01-16 20:37:51 --> Input Class Initialized
DEBUG - 2010-01-16 20:37:51 --> Language Class Initialized
DEBUG - 2010-01-16 20:37:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:37:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:37:51 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:37:51 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 111
DEBUG - 2010-01-16 20:37:58 --> Config Class Initialized
DEBUG - 2010-01-16 20:37:58 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:37:58 --> URI Class Initialized
DEBUG - 2010-01-16 20:37:58 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:37:58 --> Output Class Initialized
DEBUG - 2010-01-16 20:37:58 --> Input Class Initialized
DEBUG - 2010-01-16 20:37:58 --> Language Class Initialized
DEBUG - 2010-01-16 20:37:58 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:37:58 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:37:58 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:37:58 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 111
ERROR - 2010-01-16 20:37:58 --> Severity: Warning  --> call_user_func_array() [<a href='function.call-user-func-array'>function.call-user-func-array</a>]: First argument is expected to be a valid callback, 'Settings::index' was given /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 137
DEBUG - 2010-01-16 20:37:58 --> Final output sent to browser
DEBUG - 2010-01-16 20:37:58 --> Total execution time: 0.1046
DEBUG - 2010-01-16 20:39:30 --> Config Class Initialized
DEBUG - 2010-01-16 20:39:30 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:39:30 --> URI Class Initialized
DEBUG - 2010-01-16 20:39:30 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:39:30 --> Output Class Initialized
DEBUG - 2010-01-16 20:39:30 --> Input Class Initialized
DEBUG - 2010-01-16 20:39:30 --> Language Class Initialized
DEBUG - 2010-01-16 20:39:30 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:39:30 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:39:30 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:39:30 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 111
DEBUG - 2010-01-16 20:39:45 --> Config Class Initialized
DEBUG - 2010-01-16 20:39:45 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:39:45 --> URI Class Initialized
DEBUG - 2010-01-16 20:39:45 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:39:45 --> Output Class Initialized
DEBUG - 2010-01-16 20:39:45 --> Input Class Initialized
DEBUG - 2010-01-16 20:39:45 --> Language Class Initialized
DEBUG - 2010-01-16 20:39:45 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:39:45 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:39:45 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:39:45 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 111
DEBUG - 2010-01-16 20:39:45 --> Final output sent to browser
DEBUG - 2010-01-16 20:39:45 --> Total execution time: 0.1054
DEBUG - 2010-01-16 20:39:52 --> Config Class Initialized
DEBUG - 2010-01-16 20:39:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:39:52 --> URI Class Initialized
DEBUG - 2010-01-16 20:39:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:39:52 --> Output Class Initialized
DEBUG - 2010-01-16 20:39:52 --> Input Class Initialized
DEBUG - 2010-01-16 20:39:52 --> Language Class Initialized
DEBUG - 2010-01-16 20:39:52 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:39:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:39:52 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:39:52 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 111
ERROR - 2010-01-16 20:39:52 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/controllers/settings.php:5) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 20:39:52 --> Final output sent to browser
DEBUG - 2010-01-16 20:39:52 --> Total execution time: 0.0983
DEBUG - 2010-01-16 20:40:24 --> Config Class Initialized
DEBUG - 2010-01-16 20:40:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:40:24 --> URI Class Initialized
DEBUG - 2010-01-16 20:40:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:40:24 --> Output Class Initialized
DEBUG - 2010-01-16 20:40:24 --> Input Class Initialized
DEBUG - 2010-01-16 20:40:24 --> Language Class Initialized
DEBUG - 2010-01-16 20:40:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:40:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:40:24 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:40:24 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php 111
ERROR - 2010-01-16 20:40:24 --> Severity: Notice  --> Undefined property: Settings::$load /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/controllers/settings.php 5
DEBUG - 2010-01-16 20:41:04 --> Config Class Initialized
DEBUG - 2010-01-16 20:41:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:41:04 --> URI Class Initialized
DEBUG - 2010-01-16 20:41:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:41:04 --> Output Class Initialized
DEBUG - 2010-01-16 20:41:04 --> Input Class Initialized
DEBUG - 2010-01-16 20:41:04 --> Language Class Initialized
DEBUG - 2010-01-16 20:41:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:41:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:41:04 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:41:04 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 20:41:59 --> Config Class Initialized
DEBUG - 2010-01-16 20:41:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:41:59 --> URI Class Initialized
DEBUG - 2010-01-16 20:41:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:41:59 --> Output Class Initialized
DEBUG - 2010-01-16 20:41:59 --> Input Class Initialized
DEBUG - 2010-01-16 20:41:59 --> Language Class Initialized
DEBUG - 2010-01-16 20:41:59 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:41:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:41:59 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 20:41:59 --> Severity: Notice  --> Undefined property: Settings::$load /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/controllers/settings.php 5
DEBUG - 2010-01-16 20:42:41 --> Config Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:42:41 --> URI Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:42:41 --> Output Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Input Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Language Class Initialized
DEBUG - 2010-01-16 20:42:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:42:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:42:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:42:41 --> Loader Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:42:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:42:41 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:42:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Session Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:42:41 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:42:41 --> Session routines successfully run
DEBUG - 2010-01-16 20:42:41 --> Controller Class Initialized
DEBUG - 2010-01-16 20:42:41 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:42:41 --> Final output sent to browser
DEBUG - 2010-01-16 20:42:41 --> Total execution time: 0.1239
DEBUG - 2010-01-16 20:42:59 --> Config Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:42:59 --> URI Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:42:59 --> Output Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Input Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Language Class Initialized
DEBUG - 2010-01-16 20:42:59 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:42:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:42:59 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:42:59 --> Loader Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:42:59 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:42:59 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:42:59 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Session Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:42:59 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:42:59 --> Session routines successfully run
DEBUG - 2010-01-16 20:42:59 --> Controller Class Initialized
DEBUG - 2010-01-16 20:42:59 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:42:59 --> Final output sent to browser
DEBUG - 2010-01-16 20:42:59 --> Total execution time: 0.1185
DEBUG - 2010-01-16 20:50:23 --> Config Class Initialized
DEBUG - 2010-01-16 20:50:23 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:50:23 --> URI Class Initialized
DEBUG - 2010-01-16 20:50:23 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:50:23 --> Output Class Initialized
DEBUG - 2010-01-16 20:50:23 --> Input Class Initialized
DEBUG - 2010-01-16 20:50:23 --> Language Class Initialized
DEBUG - 2010-01-16 20:50:23 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:50:23 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:50:23 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:50:23 --> Loader Class Initialized
DEBUG - 2010-01-16 20:50:23 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:50:23 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:50:23 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:50:24 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:50:24 --> Session Class Initialized
DEBUG - 2010-01-16 20:50:24 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:50:24 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:50:24 --> Session routines successfully run
DEBUG - 2010-01-16 20:50:24 --> Controller Class Initialized
DEBUG - 2010-01-16 20:50:24 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:50:24 --> Final output sent to browser
DEBUG - 2010-01-16 20:50:24 --> Total execution time: 0.1269
DEBUG - 2010-01-16 20:50:42 --> Config Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:50:42 --> URI Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:50:42 --> Output Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Input Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Language Class Initialized
DEBUG - 2010-01-16 20:50:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:50:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:50:42 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:50:42 --> Loader Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:50:42 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:50:42 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:50:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Session Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:50:42 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:50:42 --> Session routines successfully run
DEBUG - 2010-01-16 20:50:42 --> Controller Class Initialized
DEBUG - 2010-01-16 20:50:42 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:50:42 --> Final output sent to browser
DEBUG - 2010-01-16 20:50:42 --> Total execution time: 0.1230
DEBUG - 2010-01-16 20:51:25 --> Config Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:51:25 --> URI Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:51:25 --> Output Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Input Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Language Class Initialized
DEBUG - 2010-01-16 20:51:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:51:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:51:25 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:51:25 --> Loader Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:51:25 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:51:25 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:51:25 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Session Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:51:25 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:51:25 --> Session routines successfully run
DEBUG - 2010-01-16 20:51:25 --> Controller Class Initialized
DEBUG - 2010-01-16 20:51:25 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:51:25 --> Final output sent to browser
DEBUG - 2010-01-16 20:51:25 --> Total execution time: 0.1240
DEBUG - 2010-01-16 20:51:43 --> Config Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:51:43 --> URI Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:51:43 --> Output Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Input Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Language Class Initialized
DEBUG - 2010-01-16 20:51:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:51:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:51:43 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:51:43 --> Loader Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:51:43 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:51:43 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:51:43 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Session Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:51:43 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:51:43 --> Session routines successfully run
DEBUG - 2010-01-16 20:51:43 --> Controller Class Initialized
DEBUG - 2010-01-16 20:51:43 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:51:43 --> Final output sent to browser
DEBUG - 2010-01-16 20:51:43 --> Total execution time: 0.1185
DEBUG - 2010-01-16 20:51:58 --> Config Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:51:58 --> URI Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:51:58 --> Output Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Input Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Language Class Initialized
DEBUG - 2010-01-16 20:51:58 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:51:58 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:51:58 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:51:58 --> Loader Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:51:58 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:51:58 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:51:58 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Session Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:51:58 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:51:58 --> Session routines successfully run
DEBUG - 2010-01-16 20:51:58 --> Controller Class Initialized
DEBUG - 2010-01-16 20:51:58 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:51:58 --> Final output sent to browser
DEBUG - 2010-01-16 20:51:58 --> Total execution time: 0.1177
DEBUG - 2010-01-16 20:52:36 --> Config Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:52:36 --> URI Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:52:36 --> Output Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Input Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Language Class Initialized
DEBUG - 2010-01-16 20:52:36 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:52:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:52:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:52:36 --> Loader Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:52:36 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:52:36 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:52:36 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Session Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:52:36 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:52:36 --> Session routines successfully run
DEBUG - 2010-01-16 20:52:36 --> Controller Class Initialized
DEBUG - 2010-01-16 20:52:36 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:52:36 --> Final output sent to browser
DEBUG - 2010-01-16 20:52:36 --> Total execution time: 0.1246
DEBUG - 2010-01-16 20:52:41 --> Config Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:52:41 --> URI Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:52:41 --> Output Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Input Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Language Class Initialized
DEBUG - 2010-01-16 20:52:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:52:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:52:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:52:41 --> Loader Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:52:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:52:41 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:52:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Session Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:52:41 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:52:41 --> Session routines successfully run
DEBUG - 2010-01-16 20:52:41 --> Controller Class Initialized
DEBUG - 2010-01-16 20:52:41 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:52:41 --> Final output sent to browser
DEBUG - 2010-01-16 20:52:41 --> Total execution time: 0.1176
DEBUG - 2010-01-16 20:52:48 --> Config Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:52:48 --> URI Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:52:48 --> Output Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Input Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Language Class Initialized
DEBUG - 2010-01-16 20:52:48 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:52:48 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:52:48 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:52:48 --> Loader Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:52:48 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:52:48 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:52:48 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Session Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:52:48 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:52:48 --> Session routines successfully run
DEBUG - 2010-01-16 20:52:48 --> Controller Class Initialized
DEBUG - 2010-01-16 20:52:48 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:52:48 --> Final output sent to browser
DEBUG - 2010-01-16 20:52:48 --> Total execution time: 0.1177
DEBUG - 2010-01-16 20:52:59 --> Config Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:52:59 --> URI Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:52:59 --> Output Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Input Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Language Class Initialized
DEBUG - 2010-01-16 20:52:59 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:52:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:52:59 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:52:59 --> Loader Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:52:59 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:52:59 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:52:59 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Session Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:52:59 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:52:59 --> Session routines successfully run
DEBUG - 2010-01-16 20:52:59 --> Controller Class Initialized
DEBUG - 2010-01-16 20:52:59 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:52:59 --> Final output sent to browser
DEBUG - 2010-01-16 20:52:59 --> Total execution time: 0.2609
DEBUG - 2010-01-16 20:53:31 --> Config Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:53:31 --> URI Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:53:31 --> Output Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Input Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Language Class Initialized
DEBUG - 2010-01-16 20:53:31 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:53:31 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:53:31 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:53:31 --> Loader Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:53:31 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:53:31 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:53:31 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Session Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:53:31 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:53:31 --> Session routines successfully run
DEBUG - 2010-01-16 20:53:31 --> Controller Class Initialized
DEBUG - 2010-01-16 20:53:31 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:53:31 --> Final output sent to browser
DEBUG - 2010-01-16 20:53:31 --> Total execution time: 0.1261
DEBUG - 2010-01-16 20:54:26 --> Config Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:54:26 --> URI Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:54:26 --> Output Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Input Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Language Class Initialized
DEBUG - 2010-01-16 20:54:26 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:54:26 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:54:26 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:54:26 --> Loader Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:54:26 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:54:26 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:54:26 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Session Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:54:26 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:54:26 --> Session routines successfully run
DEBUG - 2010-01-16 20:54:26 --> Controller Class Initialized
DEBUG - 2010-01-16 20:54:26 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:54:26 --> Final output sent to browser
DEBUG - 2010-01-16 20:54:26 --> Total execution time: 0.1393
DEBUG - 2010-01-16 20:55:04 --> Config Class Initialized
DEBUG - 2010-01-16 20:55:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:55:04 --> URI Class Initialized
DEBUG - 2010-01-16 20:55:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:55:04 --> Output Class Initialized
DEBUG - 2010-01-16 20:55:04 --> Input Class Initialized
DEBUG - 2010-01-16 20:55:04 --> Language Class Initialized
DEBUG - 2010-01-16 20:55:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:55:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:55:04 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:55:05 --> Loader Class Initialized
DEBUG - 2010-01-16 20:55:05 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:55:05 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:55:05 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:55:05 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:55:05 --> Session Class Initialized
DEBUG - 2010-01-16 20:55:05 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:55:05 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:55:05 --> Session routines successfully run
DEBUG - 2010-01-16 20:55:05 --> Controller Class Initialized
DEBUG - 2010-01-16 20:55:05 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:55:05 --> Final output sent to browser
DEBUG - 2010-01-16 20:55:05 --> Total execution time: 0.1188
DEBUG - 2010-01-16 20:55:10 --> Config Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:55:10 --> URI Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:55:10 --> Output Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Input Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Language Class Initialized
DEBUG - 2010-01-16 20:55:10 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:55:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:55:10 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:55:10 --> Loader Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:55:10 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:55:10 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:55:10 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Session Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:55:10 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:55:10 --> Session routines successfully run
DEBUG - 2010-01-16 20:55:10 --> Controller Class Initialized
DEBUG - 2010-01-16 20:55:10 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:55:10 --> Final output sent to browser
DEBUG - 2010-01-16 20:55:10 --> Total execution time: 0.1275
DEBUG - 2010-01-16 20:55:27 --> Config Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:55:27 --> URI Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:55:27 --> Output Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Input Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Language Class Initialized
DEBUG - 2010-01-16 20:55:27 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:55:27 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:55:27 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:55:27 --> Loader Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:55:27 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:55:27 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:55:27 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Session Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:55:27 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:55:27 --> Session routines successfully run
DEBUG - 2010-01-16 20:55:27 --> Controller Class Initialized
DEBUG - 2010-01-16 20:55:27 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:55:27 --> Final output sent to browser
DEBUG - 2010-01-16 20:55:27 --> Total execution time: 0.1183
DEBUG - 2010-01-16 20:55:33 --> Config Class Initialized
DEBUG - 2010-01-16 20:55:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:55:33 --> URI Class Initialized
DEBUG - 2010-01-16 20:55:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:55:33 --> Output Class Initialized
DEBUG - 2010-01-16 20:55:33 --> Input Class Initialized
DEBUG - 2010-01-16 20:55:33 --> Language Class Initialized
DEBUG - 2010-01-16 20:55:33 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:55:33 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:55:33 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:55:34 --> Loader Class Initialized
DEBUG - 2010-01-16 20:55:34 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:55:34 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:55:34 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:55:34 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:55:34 --> Session Class Initialized
DEBUG - 2010-01-16 20:55:34 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:55:34 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:55:34 --> Session routines successfully run
DEBUG - 2010-01-16 20:55:34 --> Controller Class Initialized
DEBUG - 2010-01-16 20:55:34 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings.php
DEBUG - 2010-01-16 20:55:34 --> Final output sent to browser
DEBUG - 2010-01-16 20:55:34 --> Total execution time: 0.1408
DEBUG - 2010-01-16 20:56:15 --> Config Class Initialized
DEBUG - 2010-01-16 20:56:15 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:56:15 --> URI Class Initialized
DEBUG - 2010-01-16 20:56:15 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:56:15 --> Output Class Initialized
DEBUG - 2010-01-16 20:56:15 --> Input Class Initialized
DEBUG - 2010-01-16 20:56:15 --> Language Class Initialized
DEBUG - 2010-01-16 20:56:15 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:56:15 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:56:15 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:58:26 --> Config Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:58:26 --> URI Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:58:26 --> Output Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Input Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Language Class Initialized
DEBUG - 2010-01-16 20:58:26 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:58:26 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:58:26 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:58:26 --> Loader Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:58:26 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:58:26 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:58:26 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Session Class Initialized
DEBUG - 2010-01-16 20:58:26 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:58:26 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:58:26 --> Session routines successfully run
DEBUG - 2010-01-16 20:58:26 --> Controller Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Config Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:58:35 --> URI Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:58:35 --> Output Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Input Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Language Class Initialized
DEBUG - 2010-01-16 20:58:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:58:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:58:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:58:35 --> Loader Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:58:35 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:58:35 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:58:35 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Session Class Initialized
DEBUG - 2010-01-16 20:58:35 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:58:35 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:58:35 --> Session routines successfully run
DEBUG - 2010-01-16 20:58:35 --> Controller Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Config Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:58:40 --> URI Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:58:40 --> Output Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Input Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Language Class Initialized
DEBUG - 2010-01-16 20:58:40 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:58:40 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:58:40 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:58:40 --> Loader Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:58:40 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:58:40 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:58:40 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Session Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:58:40 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:58:40 --> Session routines successfully run
DEBUG - 2010-01-16 20:58:40 --> Controller Class Initialized
DEBUG - 2010-01-16 20:58:40 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 20:58:59 --> Config Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:58:59 --> URI Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:58:59 --> Output Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Input Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Language Class Initialized
DEBUG - 2010-01-16 20:58:59 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:58:59 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:58:59 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:58:59 --> Loader Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:58:59 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:58:59 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:58:59 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Session Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:58:59 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:58:59 --> Session routines successfully run
DEBUG - 2010-01-16 20:58:59 --> Controller Class Initialized
DEBUG - 2010-01-16 20:58:59 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 20:58:59 --> Final output sent to browser
DEBUG - 2010-01-16 20:58:59 --> Total execution time: 0.1420
DEBUG - 2010-01-16 20:59:05 --> Config Class Initialized
DEBUG - 2010-01-16 20:59:05 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:59:05 --> URI Class Initialized
DEBUG - 2010-01-16 20:59:05 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:59:05 --> Output Class Initialized
DEBUG - 2010-01-16 20:59:05 --> Input Class Initialized
DEBUG - 2010-01-16 20:59:05 --> Language Class Initialized
DEBUG - 2010-01-16 20:59:05 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:59:05 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:59:05 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:59:28 --> Config Class Initialized
DEBUG - 2010-01-16 20:59:28 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:59:28 --> URI Class Initialized
DEBUG - 2010-01-16 20:59:28 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:59:28 --> Output Class Initialized
DEBUG - 2010-01-16 20:59:28 --> Input Class Initialized
DEBUG - 2010-01-16 20:59:28 --> Language Class Initialized
DEBUG - 2010-01-16 20:59:28 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:59:28 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:59:28 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:59:30 --> Config Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Hooks Class Initialized
DEBUG - 2010-01-16 20:59:30 --> URI Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 20:59:30 --> Output Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Input Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Language Class Initialized
DEBUG - 2010-01-16 20:59:30 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 20:59:30 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 20:59:30 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 20:59:30 --> Loader Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Helper loaded: url_helper
DEBUG - 2010-01-16 20:59:30 --> Helper loaded: form_helper
DEBUG - 2010-01-16 20:59:30 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 20:59:30 --> Database Driver Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Session Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Helper loaded: string_helper
ERROR - 2010-01-16 20:59:30 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 20:59:30 --> Session routines successfully run
DEBUG - 2010-01-16 20:59:30 --> Controller Class Initialized
DEBUG - 2010-01-16 20:59:30 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 20:59:30 --> Final output sent to browser
DEBUG - 2010-01-16 20:59:30 --> Total execution time: 0.1183
DEBUG - 2010-01-16 21:00:11 --> Config Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:00:11 --> URI Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:00:11 --> Output Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Input Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Language Class Initialized
DEBUG - 2010-01-16 21:00:11 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:00:11 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:00:11 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:00:11 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:00:11 --> Loader Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:00:11 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:00:11 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:00:11 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Session Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:00:11 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:00:11 --> Session routines successfully run
DEBUG - 2010-01-16 21:00:11 --> Controller Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:11 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:00:11 --> Final output sent to browser
DEBUG - 2010-01-16 21:00:11 --> Total execution time: 0.1229
DEBUG - 2010-01-16 21:00:12 --> Config Class Initialized
DEBUG - 2010-01-16 21:00:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:00:12 --> URI Class Initialized
DEBUG - 2010-01-16 21:00:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:00:12 --> Output Class Initialized
DEBUG - 2010-01-16 21:00:12 --> Input Class Initialized
DEBUG - 2010-01-16 21:00:12 --> Language Class Initialized
DEBUG - 2010-01-16 21:00:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:00:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:00:12 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:00:13 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:00:13 --> Loader Class Initialized
DEBUG - 2010-01-16 21:00:13 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:00:13 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:00:13 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:00:13 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:13 --> Session Class Initialized
DEBUG - 2010-01-16 21:00:13 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:00:13 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:00:13 --> Session routines successfully run
DEBUG - 2010-01-16 21:00:13 --> Controller Class Initialized
DEBUG - 2010-01-16 21:00:13 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:13 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageStaff.php
DEBUG - 2010-01-16 21:00:14 --> Config Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:00:14 --> URI Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:00:14 --> Output Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Input Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Language Class Initialized
DEBUG - 2010-01-16 21:00:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:00:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:00:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:00:14 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:00:14 --> Loader Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:00:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:00:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:00:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Session Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:00:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:00:14 --> Session routines successfully run
DEBUG - 2010-01-16 21:00:14 --> Controller Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:14 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:00:14 --> Final output sent to browser
DEBUG - 2010-01-16 21:00:14 --> Total execution time: 0.1229
DEBUG - 2010-01-16 21:00:19 --> Config Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:00:19 --> URI Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:00:19 --> Output Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Input Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Language Class Initialized
DEBUG - 2010-01-16 21:00:19 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:00:19 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:00:19 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:00:19 --> Loader Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:00:19 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:00:19 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:00:19 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Session Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:00:19 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:00:19 --> Session routines successfully run
DEBUG - 2010-01-16 21:00:19 --> Controller Class Initialized
DEBUG - 2010-01-16 21:00:19 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:00:19 --> Final output sent to browser
DEBUG - 2010-01-16 21:00:19 --> Total execution time: 0.1190
DEBUG - 2010-01-16 21:01:49 --> Config Class Initialized
DEBUG - 2010-01-16 21:01:49 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:01:49 --> URI Class Initialized
DEBUG - 2010-01-16 21:01:49 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:01:49 --> Output Class Initialized
DEBUG - 2010-01-16 21:01:49 --> Input Class Initialized
DEBUG - 2010-01-16 21:01:49 --> Language Class Initialized
DEBUG - 2010-01-16 21:01:49 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:01:49 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:01:49 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:11:05 --> Config Class Initialized
DEBUG - 2010-01-16 21:11:05 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:11:05 --> URI Class Initialized
DEBUG - 2010-01-16 21:11:05 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:11:05 --> Output Class Initialized
DEBUG - 2010-01-16 21:11:05 --> Input Class Initialized
DEBUG - 2010-01-16 21:11:05 --> Language Class Initialized
DEBUG - 2010-01-16 21:11:05 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:11:05 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:11:05 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 21:11:05 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 21:20:12 --> Config Class Initialized
DEBUG - 2010-01-16 21:20:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:20:12 --> URI Class Initialized
DEBUG - 2010-01-16 21:20:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:20:12 --> Output Class Initialized
DEBUG - 2010-01-16 21:20:12 --> Input Class Initialized
DEBUG - 2010-01-16 21:20:12 --> Language Class Initialized
DEBUG - 2010-01-16 21:20:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:20:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:20:12 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:20:14 --> Config Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:20:14 --> URI Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:20:14 --> Output Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Input Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Language Class Initialized
DEBUG - 2010-01-16 21:20:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:20:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:20:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:20:14 --> Loader Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:20:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:20:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:20:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Session Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:20:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:20:14 --> Session routines successfully run
DEBUG - 2010-01-16 21:20:14 --> Controller Class Initialized
DEBUG - 2010-01-16 21:20:14 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:25:32 --> Config Class Initialized
DEBUG - 2010-01-16 21:25:32 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:25:32 --> URI Class Initialized
DEBUG - 2010-01-16 21:25:32 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:25:32 --> Output Class Initialized
DEBUG - 2010-01-16 21:25:32 --> Input Class Initialized
DEBUG - 2010-01-16 21:25:32 --> Language Class Initialized
DEBUG - 2010-01-16 21:25:32 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:25:32 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:25:32 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:25:32 --> No URI present. Default controller set.
DEBUG - 2010-01-16 21:25:32 --> Router Class Set
DEBUG - 2010-01-16 21:25:32 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 21:25:32 --> Loader Class Initialized
DEBUG - 2010-01-16 21:25:32 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:25:32 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:26:13 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:13 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:13 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:13 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:13 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:13 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:13 --> No URI present. Default controller set.
DEBUG - 2010-01-16 21:26:13 --> Router Class Set
DEBUG - 2010-01-16 21:26:13 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 21:26:13 --> Loader Class Initialized
DEBUG - 2010-01-16 21:26:13 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:26:13 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:26:35 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:35 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:35 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:35 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:35 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:35 --> No URI present. Default controller set.
DEBUG - 2010-01-16 21:26:35 --> Router Class Set
DEBUG - 2010-01-16 21:26:35 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 21:26:35 --> Loader Class Initialized
DEBUG - 2010-01-16 21:26:35 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:26:35 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:26:41 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:41 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:41 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:41 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:41 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:41 --> No URI present. Default controller set.
DEBUG - 2010-01-16 21:26:41 --> Router Class Set
DEBUG - 2010-01-16 21:26:41 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 21:26:41 --> Loader Class Initialized
DEBUG - 2010-01-16 21:26:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:26:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:26:49 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:49 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:49 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:49 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:49 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:49 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 21:26:49 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 21:26:49 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:49 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:49 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:49 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:49 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:49 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:49 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:50 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:50 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:50 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:50 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:50 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:50 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:50 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:50 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:50 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:50 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:50 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:50 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:50 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:50 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:50 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 21:26:50 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 21:26:51 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:51 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:51 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:51 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:51 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:52 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:52 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:52 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:52 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:52 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:52 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:52 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:52 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:52 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:26:53 --> Config Class Initialized
DEBUG - 2010-01-16 21:26:53 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:26:53 --> URI Class Initialized
DEBUG - 2010-01-16 21:26:53 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:26:53 --> Output Class Initialized
DEBUG - 2010-01-16 21:26:53 --> Input Class Initialized
DEBUG - 2010-01-16 21:26:53 --> Language Class Initialized
DEBUG - 2010-01-16 21:26:53 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:26:53 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:26:53 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:27:05 --> Config Class Initialized
DEBUG - 2010-01-16 21:27:05 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:27:05 --> URI Class Initialized
DEBUG - 2010-01-16 21:27:05 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:27:05 --> Output Class Initialized
DEBUG - 2010-01-16 21:27:05 --> Input Class Initialized
DEBUG - 2010-01-16 21:27:05 --> Language Class Initialized
DEBUG - 2010-01-16 21:27:05 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:27:05 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:27:05 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:27:05 --> Loader Class Initialized
DEBUG - 2010-01-16 21:27:05 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:27:05 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:27:28 --> Config Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:27:28 --> URI Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:27:28 --> Output Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Input Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Language Class Initialized
DEBUG - 2010-01-16 21:27:28 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:27:28 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:27:28 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:27:28 --> Loader Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:27:28 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:27:28 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:27:28 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Session Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:27:28 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:27:28 --> Session routines successfully run
DEBUG - 2010-01-16 21:27:28 --> Controller Class Initialized
DEBUG - 2010-01-16 21:27:28 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:27:28 --> Final output sent to browser
DEBUG - 2010-01-16 21:27:28 --> Total execution time: 0.1294
DEBUG - 2010-01-16 21:28:35 --> Config Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:28:35 --> URI Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:28:35 --> Output Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Input Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Language Class Initialized
DEBUG - 2010-01-16 21:28:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:28:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:28:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:28:35 --> Loader Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:28:35 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:28:35 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:28:35 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Session Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:28:35 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
ERROR - 2010-01-16 21:28:35 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php:131) /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Session.php 408
ERROR - 2010-01-16 21:28:35 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php:131) /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Session.php 662
DEBUG - 2010-01-16 21:28:35 --> Session routines successfully run
DEBUG - 2010-01-16 21:28:35 --> Controller Class Initialized
DEBUG - 2010-01-16 21:28:35 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
ERROR - 2010-01-16 21:28:35 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/hooks/content.php:131) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 21:28:35 --> Final output sent to browser
DEBUG - 2010-01-16 21:28:35 --> Total execution time: 0.1443
DEBUG - 2010-01-16 21:31:07 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:07 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:07 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:07 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:07 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:07 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:07 --> Loader Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:31:07 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:31:07 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:31:07 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Session Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:31:07 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:31:07 --> Session routines successfully run
DEBUG - 2010-01-16 21:31:07 --> Controller Class Initialized
DEBUG - 2010-01-16 21:31:07 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:31:07 --> Final output sent to browser
DEBUG - 2010-01-16 21:31:07 --> Total execution time: 0.1246
DEBUG - 2010-01-16 21:31:10 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:10 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:10 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:10 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:10 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:10 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:10 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:22 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:23 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:23 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:23 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:23 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:23 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:23 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:23 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:23 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:23 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:29 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:29 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:29 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:29 --> Loader Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:31:29 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:31:29 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:31:29 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Session Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:31:29 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:31:29 --> Session routines successfully run
DEBUG - 2010-01-16 21:31:29 --> Controller Class Initialized
DEBUG - 2010-01-16 21:31:29 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:31:29 --> Final output sent to browser
DEBUG - 2010-01-16 21:31:29 --> Total execution time: 0.1412
DEBUG - 2010-01-16 21:31:43 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:43 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:43 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:43 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:43 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:31:43 --> Loader Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:31:43 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:31:43 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:31:43 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Session Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:31:43 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:31:43 --> Session routines successfully run
DEBUG - 2010-01-16 21:31:43 --> Controller Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:43 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:31:43 --> Final output sent to browser
DEBUG - 2010-01-16 21:31:43 --> Total execution time: 0.1375
DEBUG - 2010-01-16 21:31:45 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:45 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:45 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:45 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:45 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:45 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:45 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:31:45 --> Loader Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:31:45 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:31:45 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:31:45 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Session Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:31:45 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:31:45 --> Session routines successfully run
DEBUG - 2010-01-16 21:31:45 --> Controller Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:45 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:31:45 --> Final output sent to browser
DEBUG - 2010-01-16 21:31:45 --> Total execution time: 0.1285
DEBUG - 2010-01-16 21:31:46 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:46 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:46 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:46 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:46 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:46 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:31:46 --> Loader Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:31:46 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:31:46 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:31:46 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Session Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:31:46 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:31:46 --> Session routines successfully run
DEBUG - 2010-01-16 21:31:46 --> Controller Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:46 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageStaff.php
DEBUG - 2010-01-16 21:31:48 --> Config Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:31:48 --> URI Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:31:48 --> Output Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Input Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Language Class Initialized
DEBUG - 2010-01-16 21:31:48 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:31:48 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:31:48 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:31:48 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:31:48 --> Loader Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:31:48 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:31:48 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:31:48 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Session Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:31:48 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:31:48 --> Session routines successfully run
DEBUG - 2010-01-16 21:31:48 --> Controller Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:31:48 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:31:48 --> Final output sent to browser
DEBUG - 2010-01-16 21:31:48 --> Total execution time: 0.1304
DEBUG - 2010-01-16 21:33:36 --> Config Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:33:36 --> URI Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:33:36 --> Output Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Input Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Language Class Initialized
DEBUG - 2010-01-16 21:33:36 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:33:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:33:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:33:36 --> Loader Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:33:36 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:33:36 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:33:36 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Session Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:33:36 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:33:36 --> Session routines successfully run
DEBUG - 2010-01-16 21:33:36 --> Controller Class Initialized
DEBUG - 2010-01-16 21:33:36 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:33:36 --> Final output sent to browser
DEBUG - 2010-01-16 21:33:36 --> Total execution time: 0.1290
DEBUG - 2010-01-16 21:34:51 --> Config Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:34:51 --> URI Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:34:51 --> Output Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Input Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Language Class Initialized
DEBUG - 2010-01-16 21:34:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:34:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:34:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:34:51 --> Loader Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:34:51 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:34:51 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:34:51 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Session Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:34:51 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:34:51 --> Session routines successfully run
DEBUG - 2010-01-16 21:34:51 --> Controller Class Initialized
DEBUG - 2010-01-16 21:34:51 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:34:51 --> Final output sent to browser
DEBUG - 2010-01-16 21:34:51 --> Total execution time: 0.1482
DEBUG - 2010-01-16 21:38:22 --> Config Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:38:22 --> URI Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:38:22 --> Output Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Input Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Language Class Initialized
DEBUG - 2010-01-16 21:38:22 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:38:22 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:38:22 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:38:22 --> Loader Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:38:22 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:38:22 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:38:22 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Session Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:38:22 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:38:22 --> Session routines successfully run
DEBUG - 2010-01-16 21:38:22 --> Controller Class Initialized
DEBUG - 2010-01-16 21:38:22 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:38:22 --> Final output sent to browser
DEBUG - 2010-01-16 21:38:22 --> Total execution time: 0.1306
DEBUG - 2010-01-16 21:41:04 --> Config Class Initialized
DEBUG - 2010-01-16 21:41:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:41:04 --> URI Class Initialized
DEBUG - 2010-01-16 21:41:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:41:04 --> Output Class Initialized
DEBUG - 2010-01-16 21:41:04 --> Input Class Initialized
DEBUG - 2010-01-16 21:41:04 --> Language Class Initialized
DEBUG - 2010-01-16 21:41:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:41:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:41:04 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 21:41:04 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 21:43:39 --> Config Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:43:39 --> URI Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:43:39 --> Output Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Input Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Language Class Initialized
DEBUG - 2010-01-16 21:43:39 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:43:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:43:39 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:43:39 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:43:39 --> Loader Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:43:39 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:43:39 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:43:39 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Session Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:43:39 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:43:39 --> Session routines successfully run
DEBUG - 2010-01-16 21:43:39 --> Controller Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:39 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:43:39 --> Final output sent to browser
DEBUG - 2010-01-16 21:43:39 --> Total execution time: 0.1412
DEBUG - 2010-01-16 21:43:41 --> Config Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:43:41 --> URI Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:43:41 --> Output Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Input Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Language Class Initialized
DEBUG - 2010-01-16 21:43:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:43:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:43:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:43:41 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:43:41 --> Loader Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:43:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:43:41 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:43:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Session Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:43:41 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:43:41 --> Session routines successfully run
DEBUG - 2010-01-16 21:43:41 --> Controller Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:41 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:43:41 --> Final output sent to browser
DEBUG - 2010-01-16 21:43:41 --> Total execution time: 0.1291
DEBUG - 2010-01-16 21:43:42 --> Config Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:43:42 --> URI Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:43:42 --> Output Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Input Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Language Class Initialized
DEBUG - 2010-01-16 21:43:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:43:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:43:42 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:43:42 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:43:42 --> Loader Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:43:42 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:43:42 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:43:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Session Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:43:42 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:43:42 --> Session routines successfully run
DEBUG - 2010-01-16 21:43:42 --> Controller Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:42 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageStaff.php
DEBUG - 2010-01-16 21:43:44 --> Config Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:43:44 --> URI Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:43:44 --> Output Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Input Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Language Class Initialized
DEBUG - 2010-01-16 21:43:44 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:43:44 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:43:44 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:43:44 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:43:44 --> Loader Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:43:44 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:43:44 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:43:44 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Session Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:43:44 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:43:44 --> Session routines successfully run
DEBUG - 2010-01-16 21:43:44 --> Controller Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:43:44 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:43:44 --> Final output sent to browser
DEBUG - 2010-01-16 21:43:44 --> Total execution time: 0.1422
DEBUG - 2010-01-16 21:45:25 --> Config Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:45:25 --> URI Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:45:25 --> Output Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Input Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Language Class Initialized
DEBUG - 2010-01-16 21:45:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:45:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:45:25 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:45:25 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:45:25 --> Loader Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:45:25 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:45:25 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:45:25 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Session Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:45:25 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:45:25 --> Session routines successfully run
DEBUG - 2010-01-16 21:45:25 --> Controller Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:45:25 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:45:25 --> Final output sent to browser
DEBUG - 2010-01-16 21:45:25 --> Total execution time: 0.1365
DEBUG - 2010-01-16 21:55:24 --> Config Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:55:24 --> URI Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:55:24 --> Output Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Input Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Language Class Initialized
DEBUG - 2010-01-16 21:55:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:55:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:55:24 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 21:55:24 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 21:55:24 --> Config Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:55:24 --> URI Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:55:24 --> Output Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Input Class Initialized
DEBUG - 2010-01-16 21:55:24 --> Language Class Initialized
DEBUG - 2010-01-16 21:55:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:55:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:55:24 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:55:25 --> Config Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:55:25 --> URI Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:55:25 --> Output Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Input Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Language Class Initialized
DEBUG - 2010-01-16 21:55:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:55:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:55:25 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:55:25 --> Config Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:55:25 --> URI Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:55:25 --> Output Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Input Class Initialized
DEBUG - 2010-01-16 21:55:25 --> Language Class Initialized
DEBUG - 2010-01-16 21:55:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:55:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:55:25 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:55:26 --> Config Class Initialized
DEBUG - 2010-01-16 21:55:26 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:55:26 --> URI Class Initialized
DEBUG - 2010-01-16 21:55:26 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:55:26 --> Output Class Initialized
DEBUG - 2010-01-16 21:55:26 --> Input Class Initialized
DEBUG - 2010-01-16 21:55:26 --> Language Class Initialized
DEBUG - 2010-01-16 21:55:26 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:55:26 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:55:26 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:55:28 --> Config Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:55:28 --> URI Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:55:28 --> Output Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Input Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Language Class Initialized
DEBUG - 2010-01-16 21:55:28 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:55:28 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:55:28 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:55:28 --> Loader Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:55:28 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:55:28 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:55:28 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Session Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:55:28 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:55:28 --> Session routines successfully run
DEBUG - 2010-01-16 21:55:28 --> Controller Class Initialized
DEBUG - 2010-01-16 21:55:28 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 21:55:28 --> Final output sent to browser
DEBUG - 2010-01-16 21:55:28 --> Total execution time: 0.1410
DEBUG - 2010-01-16 21:56:10 --> Config Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:56:10 --> URI Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:56:10 --> Output Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Input Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Language Class Initialized
DEBUG - 2010-01-16 21:56:10 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:56:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:56:10 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:56:10 --> Loader Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:56:10 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:56:10 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:56:10 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Session Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:56:10 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:56:10 --> Session routines successfully run
DEBUG - 2010-01-16 21:56:10 --> Controller Class Initialized
DEBUG - 2010-01-16 21:56:10 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
ERROR - 2010-01-16 21:56:10 --> Severity: Notice  --> Use of undefined constant directory - assumed 'directory' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
DEBUG - 2010-01-16 21:56:10 --> Final output sent to browser
DEBUG - 2010-01-16 21:56:10 --> Total execution time: 0.1329
DEBUG - 2010-01-16 21:56:13 --> Config Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:56:13 --> URI Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:56:13 --> Output Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Input Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Language Class Initialized
DEBUG - 2010-01-16 21:56:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:56:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:56:13 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:56:13 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:56:13 --> Loader Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:56:13 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:56:13 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:56:13 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Session Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:56:13 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:56:13 --> Session routines successfully run
DEBUG - 2010-01-16 21:56:13 --> Controller Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:56:13 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
ERROR - 2010-01-16 21:56:13 --> Severity: Warning  --> array_merge() [<a href='function.array-merge'>function.array-merge</a>]: Argument #2 is not an array /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 34
ERROR - 2010-01-16 21:56:13 --> Severity: Warning  --> extract() [<a href='function.extract'>function.extract</a>]: First argument should be an array /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:56:13 --> Severity: Notice  --> Undefined variable: application /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:56:13 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:56:13 --> Severity: Notice  --> Use of undefined constant directory - assumed 'directory' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:56:13 --> Severity: Notice  --> Undefined variable: directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:56:13 --> Severity: Notice  --> Undefined variable: action /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
DEBUG - 2010-01-16 21:56:13 --> Final output sent to browser
DEBUG - 2010-01-16 21:56:13 --> Total execution time: 0.1350
DEBUG - 2010-01-16 21:57:29 --> Config Class Initialized
DEBUG - 2010-01-16 21:57:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:57:29 --> URI Class Initialized
DEBUG - 2010-01-16 21:57:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:57:29 --> Output Class Initialized
DEBUG - 2010-01-16 21:57:29 --> Input Class Initialized
DEBUG - 2010-01-16 21:57:29 --> Language Class Initialized
DEBUG - 2010-01-16 21:57:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:57:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:57:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:57:29 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:57:29 --> Loader Class Initialized
DEBUG - 2010-01-16 21:57:29 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:57:30 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:57:30 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:57:30 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:57:30 --> Session Class Initialized
DEBUG - 2010-01-16 21:57:30 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:57:30 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:57:30 --> Session routines successfully run
DEBUG - 2010-01-16 21:57:30 --> Controller Class Initialized
DEBUG - 2010-01-16 21:57:30 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:57:30 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
ERROR - 2010-01-16 21:57:30 --> Severity: Warning  --> array_merge() [<a href='function.array-merge'>function.array-merge</a>]: Argument #2 is not an array /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 34
ERROR - 2010-01-16 21:57:30 --> Severity: Warning  --> extract() [<a href='function.extract'>function.extract</a>]: First argument should be an array /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 34
ERROR - 2010-01-16 21:57:30 --> Severity: Notice  --> Undefined variable: application /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:57:30 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:57:30 --> Severity: Notice  --> Use of undefined constant directory - assumed 'directory' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:57:30 --> Severity: Notice  --> Undefined variable: directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:57:30 --> Severity: Notice  --> Undefined variable: action /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
DEBUG - 2010-01-16 21:57:30 --> Final output sent to browser
DEBUG - 2010-01-16 21:57:30 --> Total execution time: 0.2892
DEBUG - 2010-01-16 21:57:51 --> Config Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:57:51 --> URI Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:57:51 --> Output Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Input Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Language Class Initialized
DEBUG - 2010-01-16 21:57:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:57:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:57:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:57:51 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:57:51 --> Loader Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:57:51 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:57:51 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:57:51 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Session Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:57:51 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:57:51 --> Session routines successfully run
DEBUG - 2010-01-16 21:57:51 --> Controller Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:57:51 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
ERROR - 2010-01-16 21:57:51 --> Severity: Warning  --> array_merge() [<a href='function.array-merge'>function.array-merge</a>]: Argument #2 is not an array /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:57:51 --> Severity: Warning  --> extract() [<a href='function.extract'>function.extract</a>]: First argument should be an array /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 36
ERROR - 2010-01-16 21:57:51 --> Severity: Notice  --> Undefined variable: application /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:57:51 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:57:51 --> Severity: Notice  --> Use of undefined constant directory - assumed 'directory' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:57:51 --> Severity: Notice  --> Undefined variable: directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
ERROR - 2010-01-16 21:57:51 --> Severity: Notice  --> Undefined variable: action /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 38
DEBUG - 2010-01-16 21:57:51 --> Final output sent to browser
DEBUG - 2010-01-16 21:57:51 --> Total execution time: 0.1401
DEBUG - 2010-01-16 21:58:39 --> Config Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:58:39 --> URI Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:58:39 --> Output Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Input Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Language Class Initialized
DEBUG - 2010-01-16 21:58:39 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:58:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:58:39 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:58:39 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:58:39 --> Loader Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:58:39 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:58:39 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:58:39 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Session Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:58:39 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:58:39 --> Session routines successfully run
DEBUG - 2010-01-16 21:58:39 --> Controller Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:58:39 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
ERROR - 2010-01-16 21:58:39 --> Severity: Notice  --> Use of undefined constant directory - assumed 'directory' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 40
DEBUG - 2010-01-16 21:58:39 --> Final output sent to browser
DEBUG - 2010-01-16 21:58:39 --> Total execution time: 0.1686
DEBUG - 2010-01-16 21:59:27 --> Config Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:59:27 --> URI Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:59:27 --> Output Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Input Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Language Class Initialized
DEBUG - 2010-01-16 21:59:27 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:59:27 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:59:27 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:59:27 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:59:27 --> Loader Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:59:27 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:59:27 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:59:27 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Session Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:59:27 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:59:27 --> Session routines successfully run
DEBUG - 2010-01-16 21:59:27 --> Controller Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:59:27 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
ERROR - 2010-01-16 21:59:27 --> Severity: Notice  --> Undefined variable: application /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 43
ERROR - 2010-01-16 21:59:27 --> Severity: Notice  --> Undefined variable: controller /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 43
ERROR - 2010-01-16 21:59:27 --> Severity: Notice  --> Use of undefined constant directory - assumed 'directory' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 43
ERROR - 2010-01-16 21:59:27 --> Severity: Notice  --> Undefined variable: directory /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 43
ERROR - 2010-01-16 21:59:27 --> Severity: Notice  --> Undefined variable: action /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php 43
DEBUG - 2010-01-16 21:59:27 --> Final output sent to browser
DEBUG - 2010-01-16 21:59:27 --> Total execution time: 0.1411
DEBUG - 2010-01-16 21:59:54 --> Config Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Hooks Class Initialized
DEBUG - 2010-01-16 21:59:54 --> URI Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 21:59:54 --> Output Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Input Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Language Class Initialized
DEBUG - 2010-01-16 21:59:54 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 21:59:54 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 21:59:54 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 21:59:54 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 21:59:54 --> Loader Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Helper loaded: url_helper
DEBUG - 2010-01-16 21:59:54 --> Helper loaded: form_helper
DEBUG - 2010-01-16 21:59:54 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 21:59:54 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Session Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Helper loaded: string_helper
ERROR - 2010-01-16 21:59:54 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 21:59:54 --> Session routines successfully run
DEBUG - 2010-01-16 21:59:54 --> Controller Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Database Driver Class Initialized
DEBUG - 2010-01-16 21:59:54 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 21:59:54 --> Final output sent to browser
DEBUG - 2010-01-16 21:59:54 --> Total execution time: 0.1332
DEBUG - 2010-01-16 22:00:12 --> Config Class Initialized
DEBUG - 2010-01-16 22:00:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:00:12 --> URI Class Initialized
DEBUG - 2010-01-16 22:00:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:00:12 --> Output Class Initialized
DEBUG - 2010-01-16 22:00:12 --> Input Class Initialized
DEBUG - 2010-01-16 22:00:12 --> Language Class Initialized
DEBUG - 2010-01-16 22:00:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:00:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:00:12 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:00:13 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:00:13 --> Loader Class Initialized
DEBUG - 2010-01-16 22:00:13 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:00:13 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:00:13 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:00:13 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:00:13 --> Session Class Initialized
DEBUG - 2010-01-16 22:00:13 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:00:13 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:00:13 --> Session routines successfully run
DEBUG - 2010-01-16 22:00:13 --> Controller Class Initialized
DEBUG - 2010-01-16 22:00:13 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:00:13 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:00:13 --> Final output sent to browser
DEBUG - 2010-01-16 22:00:13 --> Total execution time: 0.1388
DEBUG - 2010-01-16 22:00:24 --> Config Class Initialized
DEBUG - 2010-01-16 22:00:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:00:24 --> URI Class Initialized
DEBUG - 2010-01-16 22:00:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:00:24 --> Output Class Initialized
DEBUG - 2010-01-16 22:00:24 --> Input Class Initialized
DEBUG - 2010-01-16 22:00:24 --> Language Class Initialized
DEBUG - 2010-01-16 22:00:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:00:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:00:24 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:00:25 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:00:25 --> Loader Class Initialized
DEBUG - 2010-01-16 22:00:25 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:00:25 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:00:25 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:00:25 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:00:25 --> Session Class Initialized
DEBUG - 2010-01-16 22:00:25 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:00:25 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:00:25 --> Session routines successfully run
DEBUG - 2010-01-16 22:00:25 --> Controller Class Initialized
DEBUG - 2010-01-16 22:00:25 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:00:25 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:00:25 --> Final output sent to browser
DEBUG - 2010-01-16 22:00:25 --> Total execution time: 0.1668
DEBUG - 2010-01-16 22:00:43 --> Config Class Initialized
DEBUG - 2010-01-16 22:00:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:00:43 --> URI Class Initialized
DEBUG - 2010-01-16 22:00:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:00:43 --> Output Class Initialized
DEBUG - 2010-01-16 22:00:43 --> Input Class Initialized
DEBUG - 2010-01-16 22:00:43 --> Language Class Initialized
DEBUG - 2010-01-16 22:00:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:00:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:00:43 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:00:43 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:00:43 --> Loader Class Initialized
DEBUG - 2010-01-16 22:00:43 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:00:43 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:00:43 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:00:43 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:00:43 --> Session Class Initialized
DEBUG - 2010-01-16 22:00:44 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:00:44 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:00:44 --> Session routines successfully run
DEBUG - 2010-01-16 22:00:44 --> Controller Class Initialized
DEBUG - 2010-01-16 22:00:44 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:00:44 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:00:44 --> Final output sent to browser
DEBUG - 2010-01-16 22:00:44 --> Total execution time: 0.1395
DEBUG - 2010-01-16 22:01:06 --> Config Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:01:06 --> URI Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:01:06 --> Output Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Input Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Language Class Initialized
DEBUG - 2010-01-16 22:01:06 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:01:06 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:01:06 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:01:06 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:01:06 --> Loader Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:01:06 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:01:06 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:01:06 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Session Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:01:06 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:01:06 --> Session routines successfully run
DEBUG - 2010-01-16 22:01:06 --> Controller Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:01:06 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:01:06 --> Final output sent to browser
DEBUG - 2010-01-16 22:01:06 --> Total execution time: 0.1308
DEBUG - 2010-01-16 22:01:10 --> Config Class Initialized
DEBUG - 2010-01-16 22:01:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:01:10 --> URI Class Initialized
DEBUG - 2010-01-16 22:01:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:01:10 --> Output Class Initialized
DEBUG - 2010-01-16 22:01:10 --> Input Class Initialized
DEBUG - 2010-01-16 22:01:10 --> Language Class Initialized
DEBUG - 2010-01-16 22:01:10 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:01:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:01:10 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:01:14 --> Config Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:01:14 --> URI Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:01:14 --> Output Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Input Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Language Class Initialized
DEBUG - 2010-01-16 22:01:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:01:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:01:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:01:14 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:01:14 --> Loader Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:01:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:01:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:01:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Session Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:01:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:01:14 --> Session routines successfully run
DEBUG - 2010-01-16 22:01:14 --> Controller Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:01:14 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:01:14 --> Final output sent to browser
DEBUG - 2010-01-16 22:01:14 --> Total execution time: 0.1379
DEBUG - 2010-01-16 22:02:07 --> Config Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:02:07 --> URI Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:02:07 --> Output Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Input Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Language Class Initialized
DEBUG - 2010-01-16 22:02:07 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:02:07 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:02:07 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:02:07 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:02:07 --> Loader Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:02:07 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:02:07 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:02:07 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Session Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:02:07 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:02:07 --> Session routines successfully run
DEBUG - 2010-01-16 22:02:07 --> Controller Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:02:07 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:02:07 --> Final output sent to browser
DEBUG - 2010-01-16 22:02:07 --> Total execution time: 0.1376
DEBUG - 2010-01-16 22:03:32 --> Config Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:03:32 --> URI Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:03:32 --> Output Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Input Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Language Class Initialized
DEBUG - 2010-01-16 22:03:32 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:03:32 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:03:32 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:03:32 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:03:32 --> Loader Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:03:32 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:03:32 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:03:32 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Session Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:03:32 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:03:32 --> Session routines successfully run
DEBUG - 2010-01-16 22:03:32 --> Controller Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:03:32 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:03:32 --> Final output sent to browser
DEBUG - 2010-01-16 22:03:32 --> Total execution time: 0.1369
DEBUG - 2010-01-16 22:03:36 --> Config Class Initialized
DEBUG - 2010-01-16 22:03:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:03:36 --> URI Class Initialized
DEBUG - 2010-01-16 22:03:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:03:36 --> Output Class Initialized
DEBUG - 2010-01-16 22:03:36 --> Input Class Initialized
DEBUG - 2010-01-16 22:03:36 --> Language Class Initialized
DEBUG - 2010-01-16 22:03:36 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:03:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:03:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:03:36 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:03:42 --> Config Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:03:42 --> URI Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:03:42 --> Output Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Input Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Language Class Initialized
DEBUG - 2010-01-16 22:03:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:03:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:03:42 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:03:42 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:03:42 --> Loader Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:03:42 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:03:42 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:03:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Session Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:03:42 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:03:42 --> Session routines successfully run
DEBUG - 2010-01-16 22:03:42 --> Controller Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:03:42 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:03:42 --> Final output sent to browser
DEBUG - 2010-01-16 22:03:42 --> Total execution time: 0.1281
DEBUG - 2010-01-16 22:11:05 --> Config Class Initialized
DEBUG - 2010-01-16 22:11:05 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:11:05 --> URI Class Initialized
DEBUG - 2010-01-16 22:11:05 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:11:05 --> Output Class Initialized
DEBUG - 2010-01-16 22:11:05 --> Input Class Initialized
DEBUG - 2010-01-16 22:11:05 --> Language Class Initialized
DEBUG - 2010-01-16 22:11:05 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:11:05 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:11:05 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 22:11:05 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 22:11:19 --> Config Class Initialized
DEBUG - 2010-01-16 22:11:19 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:11:19 --> URI Class Initialized
DEBUG - 2010-01-16 22:11:19 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:11:19 --> Output Class Initialized
DEBUG - 2010-01-16 22:11:19 --> Input Class Initialized
DEBUG - 2010-01-16 22:11:19 --> Language Class Initialized
DEBUG - 2010-01-16 22:11:19 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:11:19 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:11:19 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:11:19 --> Loader Class Initialized
DEBUG - 2010-01-16 22:11:19 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:11:19 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:11:41 --> Config Class Initialized
DEBUG - 2010-01-16 22:11:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:11:41 --> URI Class Initialized
DEBUG - 2010-01-16 22:11:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:11:41 --> Output Class Initialized
DEBUG - 2010-01-16 22:11:41 --> Input Class Initialized
DEBUG - 2010-01-16 22:11:41 --> Language Class Initialized
DEBUG - 2010-01-16 22:11:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:11:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:11:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:11:41 --> Loader Class Initialized
DEBUG - 2010-01-16 22:11:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:11:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:12:02 --> Config Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:12:02 --> URI Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:12:02 --> Output Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Input Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Language Class Initialized
DEBUG - 2010-01-16 22:12:02 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:12:02 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:12:02 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:12:02 --> Loader Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:12:02 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:12:02 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:12:02 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Session Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:12:02 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:12:02 --> Session routines successfully run
DEBUG - 2010-01-16 22:12:02 --> Controller Class Initialized
DEBUG - 2010-01-16 22:12:02 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 22:12:02 --> Final output sent to browser
DEBUG - 2010-01-16 22:12:02 --> Total execution time: 0.1264
DEBUG - 2010-01-16 22:23:39 --> Config Class Initialized
DEBUG - 2010-01-16 22:23:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:23:39 --> URI Class Initialized
DEBUG - 2010-01-16 22:23:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:23:39 --> Output Class Initialized
DEBUG - 2010-01-16 22:23:39 --> Input Class Initialized
DEBUG - 2010-01-16 22:23:39 --> Language Class Initialized
DEBUG - 2010-01-16 22:23:39 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:23:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:23:39 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:23:39 --> Loader Class Initialized
DEBUG - 2010-01-16 22:23:39 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:23:39 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:23:57 --> Config Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:23:57 --> URI Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:23:57 --> Output Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Input Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Language Class Initialized
DEBUG - 2010-01-16 22:23:57 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:23:57 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:23:57 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:23:57 --> Loader Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:23:57 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:23:57 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:23:57 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Session Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:23:57 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:23:57 --> Session routines successfully run
DEBUG - 2010-01-16 22:23:57 --> Controller Class Initialized
DEBUG - 2010-01-16 22:23:57 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 22:23:57 --> Final output sent to browser
DEBUG - 2010-01-16 22:23:57 --> Total execution time: 0.1689
DEBUG - 2010-01-16 22:24:02 --> Config Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:24:02 --> URI Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:24:02 --> Output Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Input Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Language Class Initialized
DEBUG - 2010-01-16 22:24:02 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:24:02 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:24:02 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:24:02 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:24:02 --> Loader Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:24:02 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:24:02 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:24:02 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Session Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:24:02 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:24:02 --> Session routines successfully run
DEBUG - 2010-01-16 22:24:02 --> Controller Class Initialized
DEBUG - 2010-01-16 22:24:02 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:24:02 --> DB Transaction Failure
ERROR - 2010-01-16 22:24:02 --> Query error: Table 'wp-ci.wp_tjc_location' doesn't exist
DEBUG - 2010-01-16 22:24:02 --> Language file loaded: language/english/db_lang.php
DEBUG - 2010-01-16 22:24:27 --> Config Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:24:27 --> URI Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:24:27 --> Output Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Input Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Language Class Initialized
DEBUG - 2010-01-16 22:24:27 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:24:27 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:24:27 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:24:27 --> Loader Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:24:27 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:24:27 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:24:27 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Session Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:24:27 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:24:27 --> Session routines successfully run
DEBUG - 2010-01-16 22:24:27 --> Controller Class Initialized
DEBUG - 2010-01-16 22:24:27 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 22:24:27 --> Final output sent to browser
DEBUG - 2010-01-16 22:24:27 --> Total execution time: 0.1331
DEBUG - 2010-01-16 22:24:31 --> Config Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:24:31 --> URI Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:24:31 --> Output Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Input Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Language Class Initialized
DEBUG - 2010-01-16 22:24:31 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:24:31 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:24:31 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:24:31 --> Loader Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:24:31 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:24:31 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:24:31 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Session Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:24:31 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:24:31 --> Session routines successfully run
DEBUG - 2010-01-16 22:24:31 --> Controller Class Initialized
DEBUG - 2010-01-16 22:24:31 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 22:24:31 --> Final output sent to browser
DEBUG - 2010-01-16 22:24:31 --> Total execution time: 0.1274
DEBUG - 2010-01-16 22:24:33 --> Config Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:24:33 --> URI Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:24:33 --> Output Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Input Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Language Class Initialized
DEBUG - 2010-01-16 22:24:33 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:24:33 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:24:33 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:24:33 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:24:33 --> Loader Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:24:33 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:24:33 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:24:33 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Session Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:24:33 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:24:33 --> Session routines successfully run
DEBUG - 2010-01-16 22:24:33 --> Controller Class Initialized
DEBUG - 2010-01-16 22:24:33 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:24:33 --> DB Transaction Failure
ERROR - 2010-01-16 22:24:33 --> Query error: Table 'wp-ci.wp_tjc_location' doesn't exist
DEBUG - 2010-01-16 22:24:33 --> Language file loaded: language/english/db_lang.php
DEBUG - 2010-01-16 22:25:24 --> Config Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:25:24 --> URI Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:25:24 --> Output Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Input Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Language Class Initialized
DEBUG - 2010-01-16 22:25:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:25:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:25:24 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:25:24 --> Loader Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:25:24 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:25:24 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:25:24 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Session Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:25:24 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:25:24 --> Session routines successfully run
DEBUG - 2010-01-16 22:25:24 --> Controller Class Initialized
DEBUG - 2010-01-16 22:25:24 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 22:25:24 --> Final output sent to browser
DEBUG - 2010-01-16 22:25:24 --> Total execution time: 0.1304
DEBUG - 2010-01-16 22:29:28 --> Config Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:29:28 --> URI Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:29:28 --> Output Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Input Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Language Class Initialized
DEBUG - 2010-01-16 22:29:28 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:29:28 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:29:28 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:29:28 --> No URI present. Default controller set.
DEBUG - 2010-01-16 22:29:28 --> Router Class Set
DEBUG - 2010-01-16 22:29:28 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 22:29:28 --> Loader Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:29:28 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:29:28 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:29:28 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Session Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Helper loaded: string_helper
DEBUG - 2010-01-16 22:29:28 --> Session routines successfully run
DEBUG - 2010-01-16 22:29:28 --> Controller Class Initialized
DEBUG - 2010-01-16 22:29:28 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 22:34:14 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:14 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:14 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:34:14 --> Loader Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:34:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:34:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:34:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Session Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:34:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:34:14 --> Session routines successfully run
DEBUG - 2010-01-16 22:34:14 --> Controller Class Initialized
DEBUG - 2010-01-16 22:34:14 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 22:34:14 --> Final output sent to browser
DEBUG - 2010-01-16 22:34:14 --> Total execution time: 0.1356
DEBUG - 2010-01-16 22:34:19 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:19 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:19 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:19 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:19 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:19 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:19 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:19 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:19 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:19 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:34:22 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:22 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:22 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:22 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:22 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:22 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:22 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:22 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:22 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:22 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:34:23 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:23 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:23 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:23 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:23 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:23 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:23 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:23 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:23 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:25 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:25 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:25 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:25 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:25 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:25 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:25 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:25 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:34:28 --> Config Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:34:28 --> URI Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:34:28 --> Output Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Input Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Language Class Initialized
DEBUG - 2010-01-16 22:34:28 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:34:28 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:34:28 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:34:28 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:34:28 --> Loader Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:34:28 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:34:28 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:34:28 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Session Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:34:28 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:34:28 --> Session routines successfully run
DEBUG - 2010-01-16 22:34:28 --> Controller Class Initialized
DEBUG - 2010-01-16 22:34:28 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:34:28 --> DB Transaction Failure
ERROR - 2010-01-16 22:34:28 --> Query error: Table 'wp-ci.wp_tjc_location' doesn't exist
DEBUG - 2010-01-16 22:34:28 --> Language file loaded: language/english/db_lang.php
DEBUG - 2010-01-16 22:35:09 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:09 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:09 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:09 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:09 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:09 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:09 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:09 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:09 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:09 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 22:35:10 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 22:35:11 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:11 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:11 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:11 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:11 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:11 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:11 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:11 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:11 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:11 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:35:14 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:14 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:14 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:35:14 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:14 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:14 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:14 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:16 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:16 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:16 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:16 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:16 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:16 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:16 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:16 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:16 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:17 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:17 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:17 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:17 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:17 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:17 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:17 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:17 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:17 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:17 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:35:33 --> Config Class Initialized
DEBUG - 2010-01-16 22:35:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:35:33 --> URI Class Initialized
DEBUG - 2010-01-16 22:35:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:35:33 --> Output Class Initialized
DEBUG - 2010-01-16 22:35:33 --> Input Class Initialized
DEBUG - 2010-01-16 22:35:33 --> Language Class Initialized
DEBUG - 2010-01-16 22:35:33 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:35:33 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:35:33 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 22:35:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/thejacksonclinics.com/application/the-jackson-clinics.php:15) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:35:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/thejacksonclinics.com/application/the-jackson-clinics.php:15) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:35:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/thejacksonclinics.com/application/the-jackson-clinics.php:15) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:35:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/thejacksonclinics.com/application/the-jackson-clinics.php:15) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:35:33 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/thejacksonclinics.com/application/the-jackson-clinics.php:15) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 22:37:25 --> Config Class Initialized
DEBUG - 2010-01-16 22:37:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:37:25 --> URI Class Initialized
DEBUG - 2010-01-16 22:37:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:37:25 --> Output Class Initialized
DEBUG - 2010-01-16 22:37:25 --> Input Class Initialized
DEBUG - 2010-01-16 22:37:25 --> Language Class Initialized
DEBUG - 2010-01-16 22:37:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:37:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:37:25 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 22:37:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wordpress-2.9/wp-includes/plugin.php:549) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:37:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wordpress-2.9/wp-includes/plugin.php:549) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:37:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wordpress-2.9/wp-includes/plugin.php:549) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:37:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wordpress-2.9/wp-includes/plugin.php:549) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1583
ERROR - 2010-01-16 22:37:25 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wordpress-2.9/wp-includes/plugin.php:549) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 22:38:08 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:08 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:08 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:08 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:08 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:08 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:08 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:08 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:08 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:08 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:38:12 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:12 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:12 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:12 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:38:12 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:12 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:12 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:12 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:12 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:12 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:13 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:13 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:13 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:13 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:13 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:13 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:13 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:13 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:38:29 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:29 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:29 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:29 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:29 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:38:30 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:30 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:30 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:31 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:31 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:31 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:31 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:38:31 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:31 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:31 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:31 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:31 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:31 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:32 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:32 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:32 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:32 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:32 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:32 --> Config Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:38:32 --> URI Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:38:32 --> Output Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Input Class Initialized
DEBUG - 2010-01-16 22:38:32 --> Language Class Initialized
DEBUG - 2010-01-16 22:38:32 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:38:32 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:38:32 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:41:04 --> Config Class Initialized
DEBUG - 2010-01-16 22:41:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:41:04 --> URI Class Initialized
DEBUG - 2010-01-16 22:41:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:41:04 --> Output Class Initialized
DEBUG - 2010-01-16 22:41:04 --> Input Class Initialized
DEBUG - 2010-01-16 22:41:04 --> Language Class Initialized
DEBUG - 2010-01-16 22:41:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:41:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:41:04 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 22:41:04 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 22:42:39 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:39 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:39 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:39 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:39 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:39 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:39 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:42:41 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:41 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:41 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:41 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:41 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:42:42 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:42 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:42 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:42 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:42 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:43 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:43 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:43 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:43 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:43 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:44 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:44 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:44 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:44 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:44 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:44 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:44 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:44 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:44 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:44 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:42:46 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:46 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:46 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:46 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:46 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:42:46 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:46 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:46 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:46 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:46 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:51 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:51 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:51 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:51 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:51 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:52 --> Config Class Initialized
DEBUG - 2010-01-16 22:42:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:42:52 --> URI Class Initialized
DEBUG - 2010-01-16 22:42:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:42:52 --> Output Class Initialized
DEBUG - 2010-01-16 22:42:52 --> Input Class Initialized
DEBUG - 2010-01-16 22:42:52 --> Language Class Initialized
DEBUG - 2010-01-16 22:42:52 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:42:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:42:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:43:11 --> Config Class Initialized
DEBUG - 2010-01-16 22:43:11 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:43:11 --> URI Class Initialized
DEBUG - 2010-01-16 22:43:11 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:43:11 --> Output Class Initialized
DEBUG - 2010-01-16 22:43:11 --> Input Class Initialized
DEBUG - 2010-01-16 22:43:11 --> Language Class Initialized
DEBUG - 2010-01-16 22:43:11 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:43:11 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:43:11 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:43:13 --> Config Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:43:13 --> URI Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:43:13 --> Output Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Input Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Language Class Initialized
DEBUG - 2010-01-16 22:43:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:43:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:43:13 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:43:13 --> Config Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:43:13 --> URI Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:43:13 --> Output Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Input Class Initialized
DEBUG - 2010-01-16 22:43:13 --> Language Class Initialized
DEBUG - 2010-01-16 22:43:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:43:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:43:14 --> Config Class Initialized
DEBUG - 2010-01-16 22:43:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:43:14 --> URI Class Initialized
DEBUG - 2010-01-16 22:43:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:43:14 --> Output Class Initialized
DEBUG - 2010-01-16 22:43:14 --> Input Class Initialized
DEBUG - 2010-01-16 22:43:14 --> Language Class Initialized
DEBUG - 2010-01-16 22:43:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:43:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:16 --> Config Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:44:16 --> URI Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:44:16 --> Output Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Input Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Language Class Initialized
DEBUG - 2010-01-16 22:44:16 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:44:16 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:16 --> Config Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:44:16 --> URI Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:44:16 --> Output Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Input Class Initialized
DEBUG - 2010-01-16 22:44:16 --> Language Class Initialized
DEBUG - 2010-01-16 22:44:16 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:44:16 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:16 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:44:27 --> Config Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:44:27 --> URI Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:44:27 --> Output Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Input Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Language Class Initialized
DEBUG - 2010-01-16 22:44:27 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:44:27 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:27 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:44:27 --> Config Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:44:27 --> URI Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:44:27 --> Output Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Input Class Initialized
DEBUG - 2010-01-16 22:44:27 --> Language Class Initialized
DEBUG - 2010-01-16 22:44:27 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:44:27 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:28 --> Config Class Initialized
DEBUG - 2010-01-16 22:44:28 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:44:28 --> URI Class Initialized
DEBUG - 2010-01-16 22:44:28 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:44:28 --> Output Class Initialized
DEBUG - 2010-01-16 22:44:28 --> Input Class Initialized
DEBUG - 2010-01-16 22:44:28 --> Language Class Initialized
DEBUG - 2010-01-16 22:44:28 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:44:28 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:29 --> Config Class Initialized
DEBUG - 2010-01-16 22:44:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:44:29 --> URI Class Initialized
DEBUG - 2010-01-16 22:44:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:44:29 --> Output Class Initialized
DEBUG - 2010-01-16 22:44:29 --> Input Class Initialized
DEBUG - 2010-01-16 22:44:29 --> Language Class Initialized
DEBUG - 2010-01-16 22:44:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:44:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:44:29 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:00 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:00 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:00 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:00 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:00 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:00 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:00 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:00 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:00 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:00 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:03 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:03 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:03 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:03 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:03 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:03 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:03 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:03 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:03 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:03 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:03 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:03 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:35 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:35 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:35 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:35 --> Registering pluggable application: [hello-sparky]
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_num_fields(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 728
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_fetch_object(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 733
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_free_result(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 738
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_num_fields(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 728
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_fetch_object(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 733
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_free_result(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 738
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_num_fields(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 728
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_fetch_object(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 733
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_free_result(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 738
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_num_fields(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 728
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_fetch_object(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 733
ERROR - 2010-01-16 22:45:35 --> Severity: Warning  --> mysql_free_result(): supplied argument is not a valid MySQL result resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 738
DEBUG - 2010-01-16 22:45:35 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:35 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:35 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:35 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:46 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:46 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:46 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:46 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:46 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:46 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:46 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:46 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:46 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:46 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:48 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:48 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:48 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:48 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:48 --> Registering pluggable application: [hello-sparky]
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined offset:  1 /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/upgrade.php 1283
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
ERROR - 2010-01-16 22:45:48 --> Severity: Notice  --> Undefined index:  class /Users/aaron/Workspace/wordpress-2.9/wp-includes/wp-db.php 1111
DEBUG - 2010-01-16 22:45:48 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:48 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:48 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:48 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:48 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:48 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:48 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:50 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:50 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:50 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:50 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:50 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:50 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:45:50 --> Loader Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:45:50 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:45:50 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:45:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Session Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:45:50 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:45:50 --> Session routines successfully run
DEBUG - 2010-01-16 22:45:50 --> Controller Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:45:50 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 22:45:50 --> Final output sent to browser
DEBUG - 2010-01-16 22:45:50 --> Total execution time: 0.1351
DEBUG - 2010-01-16 22:45:52 --> Config Class Initialized
DEBUG - 2010-01-16 22:45:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:45:52 --> URI Class Initialized
DEBUG - 2010-01-16 22:45:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:45:52 --> Output Class Initialized
DEBUG - 2010-01-16 22:45:52 --> Input Class Initialized
DEBUG - 2010-01-16 22:45:52 --> Language Class Initialized
DEBUG - 2010-01-16 22:45:52 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:45:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:45:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:45:53 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:51:11 --> Config Class Initialized
DEBUG - 2010-01-16 22:51:11 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:51:11 --> URI Class Initialized
DEBUG - 2010-01-16 22:51:11 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:51:11 --> Output Class Initialized
DEBUG - 2010-01-16 22:51:11 --> Input Class Initialized
DEBUG - 2010-01-16 22:51:11 --> Language Class Initialized
DEBUG - 2010-01-16 22:51:11 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:51:11 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:51:11 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:51:11 --> No URI present. Default controller set.
DEBUG - 2010-01-16 22:51:11 --> Router Class Set
DEBUG - 2010-01-16 22:51:11 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 22:51:11 --> Loader Class Initialized
DEBUG - 2010-01-16 22:51:11 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:51:11 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:51:11 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:51:12 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:51:12 --> Session Class Initialized
DEBUG - 2010-01-16 22:51:12 --> Helper loaded: string_helper
DEBUG - 2010-01-16 22:51:12 --> Session routines successfully run
DEBUG - 2010-01-16 22:51:12 --> Controller Class Initialized
DEBUG - 2010-01-16 22:51:12 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 22:54:02 --> Config Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:54:02 --> URI Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:54:02 --> Output Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Input Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Language Class Initialized
DEBUG - 2010-01-16 22:54:02 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:54:02 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:54:02 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:54:02 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:54:02 --> Loader Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:54:02 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:54:02 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:54:02 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Session Class Initialized
DEBUG - 2010-01-16 22:54:02 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:54:02 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:54:02 --> Session routines successfully run
DEBUG - 2010-01-16 22:54:02 --> Controller Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Config Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:54:26 --> URI Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:54:26 --> Output Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Input Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Language Class Initialized
DEBUG - 2010-01-16 22:54:26 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:54:26 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:54:26 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:54:26 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:54:26 --> Loader Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:54:26 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:54:26 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:54:26 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Session Class Initialized
DEBUG - 2010-01-16 22:54:26 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:54:26 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:54:26 --> Session routines successfully run
DEBUG - 2010-01-16 22:54:26 --> Controller Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Config Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Hooks Class Initialized
DEBUG - 2010-01-16 22:54:38 --> URI Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 22:54:38 --> Output Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Input Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Language Class Initialized
DEBUG - 2010-01-16 22:54:38 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 22:54:38 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 22:54:38 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 22:54:38 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 22:54:38 --> Loader Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Helper loaded: url_helper
DEBUG - 2010-01-16 22:54:38 --> Helper loaded: form_helper
DEBUG - 2010-01-16 22:54:38 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 22:54:38 --> Database Driver Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Session Class Initialized
DEBUG - 2010-01-16 22:54:38 --> Helper loaded: string_helper
ERROR - 2010-01-16 22:54:38 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 22:54:38 --> Session routines successfully run
DEBUG - 2010-01-16 22:54:38 --> Controller Class Initialized
DEBUG - 2010-01-16 23:04:54 --> Config Class Initialized
DEBUG - 2010-01-16 23:04:54 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:04:54 --> URI Class Initialized
DEBUG - 2010-01-16 23:04:54 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:04:54 --> Output Class Initialized
DEBUG - 2010-01-16 23:04:54 --> Input Class Initialized
DEBUG - 2010-01-16 23:04:54 --> Language Class Initialized
DEBUG - 2010-01-16 23:04:54 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:04:54 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:04:54 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:04:54 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:04:54 --> Loader Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Config Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:05:01 --> URI Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:05:01 --> Output Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Input Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Language Class Initialized
DEBUG - 2010-01-16 23:05:01 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:05:01 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:05:01 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:05:01 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:05:01 --> Loader Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:05:01 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:05:01 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:05:01 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Session Class Initialized
DEBUG - 2010-01-16 23:05:01 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:05:01 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
ERROR - 2010-01-16 23:05:01 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php:106) /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Session.php 408
ERROR - 2010-01-16 23:05:01 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php:106) /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Session.php 662
DEBUG - 2010-01-16 23:05:01 --> Session routines successfully run
DEBUG - 2010-01-16 23:05:01 --> Controller Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Config Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:05:26 --> URI Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:05:26 --> Output Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Input Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Language Class Initialized
DEBUG - 2010-01-16 23:05:26 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:05:26 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:05:26 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:05:26 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:05:26 --> Loader Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:05:26 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:05:26 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:05:26 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Session Class Initialized
DEBUG - 2010-01-16 23:05:26 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:05:26 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:05:26 --> Session routines successfully run
DEBUG - 2010-01-16 23:05:26 --> Controller Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Config Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:05:36 --> URI Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:05:36 --> Output Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Input Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Language Class Initialized
DEBUG - 2010-01-16 23:05:36 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:05:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:05:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:05:36 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:05:36 --> Loader Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:05:36 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:05:36 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:05:36 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Session Class Initialized
DEBUG - 2010-01-16 23:05:36 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:05:36 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:05:36 --> Session routines successfully run
DEBUG - 2010-01-16 23:05:36 --> Controller Class Initialized
ERROR - 2010-01-16 23:05:36 --> Severity: Notice  --> Use of undefined constant WPCI - assumed 'WPCI' /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/libraries/MY_Loader.php 107
DEBUG - 2010-01-16 23:05:42 --> Config Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:05:42 --> URI Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:05:42 --> Output Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Input Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Language Class Initialized
DEBUG - 2010-01-16 23:05:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:05:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:05:42 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:05:42 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:05:42 --> Loader Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:05:42 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:05:42 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:05:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Session Class Initialized
DEBUG - 2010-01-16 23:05:42 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:05:42 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:05:42 --> Session routines successfully run
DEBUG - 2010-01-16 23:05:42 --> Controller Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Config Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:05:48 --> URI Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:05:48 --> Output Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Input Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Language Class Initialized
DEBUG - 2010-01-16 23:05:48 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:05:48 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:05:48 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:05:48 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:05:48 --> Loader Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:05:48 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:05:48 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:05:48 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Session Class Initialized
DEBUG - 2010-01-16 23:05:48 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:05:48 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:05:48 --> Session routines successfully run
DEBUG - 2010-01-16 23:05:48 --> Controller Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Config Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:06:00 --> URI Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:06:00 --> Output Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Input Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Language Class Initialized
DEBUG - 2010-01-16 23:06:00 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:06:00 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:06:00 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:06:00 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:06:00 --> Loader Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:06:00 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:06:00 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:06:00 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Session Class Initialized
DEBUG - 2010-01-16 23:06:00 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:06:00 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:06:00 --> Session routines successfully run
DEBUG - 2010-01-16 23:06:00 --> Controller Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Config Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:06:14 --> URI Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:06:14 --> Output Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Input Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Language Class Initialized
DEBUG - 2010-01-16 23:06:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:06:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:06:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:06:14 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:06:14 --> Loader Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:06:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:06:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:06:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Session Class Initialized
DEBUG - 2010-01-16 23:06:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:06:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:06:14 --> Session routines successfully run
DEBUG - 2010-01-16 23:06:14 --> Controller Class Initialized
DEBUG - 2010-01-16 23:06:54 --> Config Class Initialized
DEBUG - 2010-01-16 23:06:54 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:06:54 --> URI Class Initialized
DEBUG - 2010-01-16 23:06:54 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:06:54 --> Output Class Initialized
DEBUG - 2010-01-16 23:06:54 --> Input Class Initialized
DEBUG - 2010-01-16 23:06:54 --> Language Class Initialized
DEBUG - 2010-01-16 23:06:54 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:06:54 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:06:54 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:06:55 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:06:55 --> Loader Class Initialized
DEBUG - 2010-01-16 23:06:55 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:06:55 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:06:55 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:06:55 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:06:55 --> Session Class Initialized
DEBUG - 2010-01-16 23:06:55 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:06:55 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:06:55 --> Session routines successfully run
DEBUG - 2010-01-16 23:06:55 --> Controller Class Initialized
DEBUG - 2010-01-16 23:06:55 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:06:55 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:06:55 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:07:04 --> Config Class Initialized
DEBUG - 2010-01-16 23:07:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:07:04 --> URI Class Initialized
DEBUG - 2010-01-16 23:07:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:07:04 --> Output Class Initialized
DEBUG - 2010-01-16 23:07:04 --> Input Class Initialized
DEBUG - 2010-01-16 23:07:04 --> Language Class Initialized
DEBUG - 2010-01-16 23:07:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:07:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:07:04 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:09:04 --> Config Class Initialized
DEBUG - 2010-01-16 23:09:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:09:04 --> URI Class Initialized
DEBUG - 2010-01-16 23:09:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:09:04 --> Output Class Initialized
DEBUG - 2010-01-16 23:09:04 --> Input Class Initialized
DEBUG - 2010-01-16 23:09:04 --> Language Class Initialized
DEBUG - 2010-01-16 23:09:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:09:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:09:04 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:09:04 --> No URI present. Default controller set.
DEBUG - 2010-01-16 23:09:04 --> Router Class Set
DEBUG - 2010-01-16 23:09:04 --> Loaded Controller /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application/controllers/welcome.php
DEBUG - 2010-01-16 23:09:04 --> Loader Class Initialized
DEBUG - 2010-01-16 23:09:05 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:09:05 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:09:05 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:09:05 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:09:05 --> Session Class Initialized
DEBUG - 2010-01-16 23:09:05 --> Helper loaded: string_helper
DEBUG - 2010-01-16 23:09:05 --> Session routines successfully run
DEBUG - 2010-01-16 23:09:05 --> Controller Class Initialized
DEBUG - 2010-01-16 23:09:05 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/welcome_message.php
DEBUG - 2010-01-16 23:10:19 --> Config Class Initialized
DEBUG - 2010-01-16 23:10:19 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:10:19 --> URI Class Initialized
DEBUG - 2010-01-16 23:10:19 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:10:19 --> Output Class Initialized
DEBUG - 2010-01-16 23:10:19 --> Input Class Initialized
DEBUG - 2010-01-16 23:10:19 --> Language Class Initialized
DEBUG - 2010-01-16 23:10:19 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:10:19 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:10:19 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:10:19 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:10:20 --> Config Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:10:20 --> URI Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:10:20 --> Output Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Input Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Language Class Initialized
DEBUG - 2010-01-16 23:10:20 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:10:20 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:10:20 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:10:20 --> Config Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:10:20 --> URI Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:10:20 --> Output Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Input Class Initialized
DEBUG - 2010-01-16 23:10:20 --> Language Class Initialized
DEBUG - 2010-01-16 23:10:20 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:10:20 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:10:20 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:10:21 --> Config Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:10:21 --> URI Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:10:21 --> Output Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Input Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Language Class Initialized
DEBUG - 2010-01-16 23:10:21 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:10:21 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:10:21 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:10:21 --> Config Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:10:21 --> URI Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:10:21 --> Output Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Input Class Initialized
DEBUG - 2010-01-16 23:10:21 --> Language Class Initialized
DEBUG - 2010-01-16 23:10:21 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:10:21 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:10:21 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:11:04 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:04 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:04 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:04 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:04 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:04 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:11:04 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 23:11:13 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:13 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:13 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:13 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:13 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:13 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:13 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:13 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:13 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:13 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:11:19 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:19 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:19 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:19 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:19 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:19 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:19 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:19 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:19 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:19 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:11:22 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:22 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:22 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:22 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:22 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:22 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:22 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:22 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:23 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:23 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:23 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:23 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:23 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:23 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:23 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:23 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:23 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:23 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:11:25 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:25 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:25 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:25 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:25 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:25 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:11:25 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:11:29 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:29 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:29 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:29 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:29 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:29 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:29 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:29 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:29 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:29 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:11:29 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:11:37 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:37 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:37 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:37 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:37 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:37 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:11:37 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:37 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:37 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:37 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:37 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:37 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:37 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:11:37 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/template.php 2597
ERROR - 2010-01-16 23:11:37 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-admin/includes/template.php 2606
ERROR - 2010-01-16 23:11:37 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:11:45 --> Config Class Initialized
DEBUG - 2010-01-16 23:11:45 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:11:45 --> URI Class Initialized
DEBUG - 2010-01-16 23:11:45 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:11:45 --> Output Class Initialized
DEBUG - 2010-01-16 23:11:45 --> Input Class Initialized
DEBUG - 2010-01-16 23:11:45 --> Language Class Initialized
DEBUG - 2010-01-16 23:11:45 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:11:45 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:11:45 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:12:37 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:37 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:37 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:37 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:37 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:37 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:37 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:37 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:37 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:12:37 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:12:37 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wp-ci/core-plugin/hooks/rewrite.php 35
ERROR - 2010-01-16 23:12:37 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Exceptions.php:166) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1543
ERROR - 2010-01-16 23:12:37 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Exceptions.php:166) /Users/aaron/Workspace/wordpress-2.9/wp-includes/pluggable.php 868
DEBUG - 2010-01-16 23:12:51 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:51 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:51 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:51 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:51 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:51 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:51 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:12:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:12:53 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:53 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:53 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:53 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:53 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:53 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:53 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:53 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:53 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:12:53 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:12:55 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:55 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:55 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:55 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:55 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:55 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:55 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:55 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:55 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:55 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:12:55 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:12:56 --> Config Class Initialized
DEBUG - 2010-01-16 23:12:56 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:12:56 --> URI Class Initialized
DEBUG - 2010-01-16 23:12:56 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:12:56 --> Output Class Initialized
DEBUG - 2010-01-16 23:12:56 --> Input Class Initialized
DEBUG - 2010-01-16 23:12:56 --> Language Class Initialized
DEBUG - 2010-01-16 23:12:56 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:12:56 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:12:56 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:12:56 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wp-ci/core-plugin/hooks/rewrite.php 35
ERROR - 2010-01-16 23:12:56 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Exceptions.php:166) /Users/aaron/Workspace/wordpress-2.9/wp-includes/functions.php 1543
ERROR - 2010-01-16 23:12:56 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Exceptions.php:166) /Users/aaron/Workspace/wordpress-2.9/wp-includes/pluggable.php 868
DEBUG - 2010-01-16 23:13:06 --> Config Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:13:06 --> URI Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:13:06 --> Output Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Input Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Language Class Initialized
DEBUG - 2010-01-16 23:13:06 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:13:06 --> Config Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:13:06 --> URI Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:13:06 --> Output Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Input Class Initialized
DEBUG - 2010-01-16 23:13:06 --> Language Class Initialized
DEBUG - 2010-01-16 23:13:06 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:13:06 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:13:06 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:13:08 --> Config Class Initialized
DEBUG - 2010-01-16 23:13:08 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:13:08 --> URI Class Initialized
DEBUG - 2010-01-16 23:13:08 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:13:08 --> Output Class Initialized
DEBUG - 2010-01-16 23:13:08 --> Input Class Initialized
DEBUG - 2010-01-16 23:13:08 --> Language Class Initialized
DEBUG - 2010-01-16 23:13:08 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:13:08 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:13:08 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:13:08 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:13:11 --> Config Class Initialized
DEBUG - 2010-01-16 23:13:11 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:13:11 --> URI Class Initialized
DEBUG - 2010-01-16 23:13:11 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:13:11 --> Output Class Initialized
DEBUG - 2010-01-16 23:13:11 --> Input Class Initialized
DEBUG - 2010-01-16 23:13:11 --> Language Class Initialized
DEBUG - 2010-01-16 23:13:11 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:13:11 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:13:11 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:13:11 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:13:16 --> Config Class Initialized
DEBUG - 2010-01-16 23:13:16 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:13:16 --> URI Class Initialized
DEBUG - 2010-01-16 23:13:16 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:13:16 --> Output Class Initialized
DEBUG - 2010-01-16 23:13:16 --> Input Class Initialized
DEBUG - 2010-01-16 23:13:16 --> Language Class Initialized
DEBUG - 2010-01-16 23:13:16 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:13:16 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:13:16 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:13:16 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:18:50 --> Config Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:18:50 --> URI Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:18:50 --> Output Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Input Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Language Class Initialized
DEBUG - 2010-01-16 23:18:50 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:18:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:18:50 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:18:50 --> Loader Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:18:50 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:18:50 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:18:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Session Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:18:50 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:18:50 --> Session routines successfully run
DEBUG - 2010-01-16 23:18:50 --> Controller Class Initialized
DEBUG - 2010-01-16 23:18:50 --> Loading /Users/aaron/Workspace/wordpress-2.9/wp-content/plugins/wp-ci/ci/application//views/settings/index.php
DEBUG - 2010-01-16 23:18:50 --> Final output sent to browser
DEBUG - 2010-01-16 23:18:50 --> Total execution time: 0.2159
DEBUG - 2010-01-16 23:18:53 --> Config Class Initialized
DEBUG - 2010-01-16 23:18:53 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:18:53 --> URI Class Initialized
DEBUG - 2010-01-16 23:18:53 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:18:53 --> Output Class Initialized
DEBUG - 2010-01-16 23:18:53 --> Input Class Initialized
DEBUG - 2010-01-16 23:18:53 --> Language Class Initialized
DEBUG - 2010-01-16 23:18:53 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:18:53 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:18:53 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:18:53 --> Severity: Warning  --> closedir(): supplied argument is not a valid Directory resource /Users/aaron/Workspace/wordpress-2.9/wp-includes/theme.php 595
DEBUG - 2010-01-16 23:18:57 --> Config Class Initialized
DEBUG - 2010-01-16 23:18:57 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:18:57 --> URI Class Initialized
DEBUG - 2010-01-16 23:18:57 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:18:57 --> Output Class Initialized
DEBUG - 2010-01-16 23:18:57 --> Input Class Initialized
DEBUG - 2010-01-16 23:18:57 --> Language Class Initialized
DEBUG - 2010-01-16 23:18:57 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:18:57 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:18:57 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:00 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:00 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:00 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:00 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:00 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:00 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:00 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:00 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:01 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:01 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:09 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:09 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:09 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:09 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:09 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:09 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:09 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:09 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:09 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:10 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:10 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:10 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:10 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:10 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:10 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:10 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:10 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:10 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:15 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:15 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:15 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:15 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:15 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:15 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:15 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:15 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:15 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:15 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:15 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:15 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:16 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:16 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:16 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:16 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:16 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:16 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:16 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:16 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:16 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:17 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:17 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:17 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:17 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:17 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:17 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:17 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:17 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:17 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:17 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:38 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:38 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:38 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:38 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:38 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:38 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:38 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:38 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:38 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:38 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:39 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:39 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:39 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:39 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:39 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:39 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:39 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:39 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:39 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:39 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:41 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:41 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:41 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:41 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:41 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:41 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:41 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:46 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:46 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:46 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:46 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:46 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:46 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:19:46 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:19:46 --> Loader Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:19:46 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:19:46 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:19:46 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Session Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:19:46 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:19:46 --> Session routines successfully run
DEBUG - 2010-01-16 23:19:46 --> Controller Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:19:46 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:19:46 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:19:51 --> Config Class Initialized
DEBUG - 2010-01-16 23:19:51 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:19:51 --> URI Class Initialized
DEBUG - 2010-01-16 23:19:51 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:19:51 --> Output Class Initialized
DEBUG - 2010-01-16 23:19:51 --> Input Class Initialized
DEBUG - 2010-01-16 23:19:51 --> Language Class Initialized
DEBUG - 2010-01-16 23:19:51 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:19:51 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:19:51 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:20:45 --> Config Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:20:45 --> URI Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:20:45 --> Output Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Input Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Language Class Initialized
DEBUG - 2010-01-16 23:20:45 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:20:45 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:20:45 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:20:45 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:20:45 --> Loader Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:20:45 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:20:45 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:20:45 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Session Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:20:45 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:20:45 --> Session routines successfully run
DEBUG - 2010-01-16 23:20:45 --> Controller Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:20:45 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:20:45 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:21:14 --> Config Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:21:14 --> URI Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:21:14 --> Output Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Input Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Language Class Initialized
DEBUG - 2010-01-16 23:21:14 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:21:14 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:21:14 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:21:14 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:21:14 --> Loader Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:21:14 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:21:14 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:21:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Session Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:21:14 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:21:14 --> Session routines successfully run
DEBUG - 2010-01-16 23:21:14 --> Controller Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:21:14 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:21:14 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:21:14 --> Final output sent to browser
DEBUG - 2010-01-16 23:21:14 --> Total execution time: 0.1501
DEBUG - 2010-01-16 23:22:32 --> Config Class Initialized
DEBUG - 2010-01-16 23:22:32 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:22:32 --> URI Class Initialized
DEBUG - 2010-01-16 23:22:32 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:22:32 --> Output Class Initialized
DEBUG - 2010-01-16 23:22:32 --> Input Class Initialized
DEBUG - 2010-01-16 23:22:32 --> Language Class Initialized
DEBUG - 2010-01-16 23:22:32 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:22:32 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:22:32 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:22:32 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:22:33 --> Config Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:22:33 --> URI Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:22:33 --> Output Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Input Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Language Class Initialized
DEBUG - 2010-01-16 23:22:33 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:22:33 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:22:33 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:22:33 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:22:33 --> Loader Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:22:33 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:22:33 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:22:33 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Session Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:22:33 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:22:33 --> Session routines successfully run
DEBUG - 2010-01-16 23:22:33 --> Controller Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:22:33 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:22:33 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:22:33 --> Final output sent to browser
DEBUG - 2010-01-16 23:22:33 --> Total execution time: 0.1327
DEBUG - 2010-01-16 23:22:35 --> Config Class Initialized
DEBUG - 2010-01-16 23:22:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:22:35 --> URI Class Initialized
DEBUG - 2010-01-16 23:22:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:22:35 --> Output Class Initialized
DEBUG - 2010-01-16 23:22:35 --> Input Class Initialized
DEBUG - 2010-01-16 23:22:35 --> Language Class Initialized
DEBUG - 2010-01-16 23:22:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:22:36 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:22:36 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:22:37 --> Config Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:22:37 --> URI Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:22:37 --> Output Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Input Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Language Class Initialized
DEBUG - 2010-01-16 23:22:37 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:22:37 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:22:37 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:22:37 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:22:37 --> Loader Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:22:37 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:22:37 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:22:37 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Session Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:22:37 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:22:37 --> Session routines successfully run
DEBUG - 2010-01-16 23:22:37 --> Controller Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:22:37 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:22:37 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:22:37 --> Final output sent to browser
DEBUG - 2010-01-16 23:22:37 --> Total execution time: 0.1460
DEBUG - 2010-01-16 23:23:01 --> Config Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:23:01 --> URI Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:23:01 --> Output Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Input Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Language Class Initialized
DEBUG - 2010-01-16 23:23:01 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:23:01 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:23:01 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:23:01 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:23:01 --> Loader Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:23:01 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:23:01 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:23:01 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Session Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:23:01 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:23:01 --> Session routines successfully run
DEBUG - 2010-01-16 23:23:01 --> Controller Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:23:01 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:23:01 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:23:01 --> Final output sent to browser
DEBUG - 2010-01-16 23:23:01 --> Total execution time: 0.1407
DEBUG - 2010-01-16 23:23:02 --> Config Class Initialized
DEBUG - 2010-01-16 23:23:02 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:23:02 --> URI Class Initialized
DEBUG - 2010-01-16 23:23:02 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:23:02 --> Output Class Initialized
DEBUG - 2010-01-16 23:23:02 --> Input Class Initialized
DEBUG - 2010-01-16 23:23:02 --> Language Class Initialized
DEBUG - 2010-01-16 23:23:02 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:23:02 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:23:02 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:23:04 --> Config Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:23:04 --> URI Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:23:04 --> Output Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Input Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Language Class Initialized
DEBUG - 2010-01-16 23:23:04 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:23:04 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:23:04 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:23:04 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:23:04 --> Loader Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:23:04 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:23:04 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:23:04 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Session Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:23:04 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:23:04 --> Session routines successfully run
DEBUG - 2010-01-16 23:23:04 --> Controller Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:23:04 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:23:04 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:23:04 --> Final output sent to browser
DEBUG - 2010-01-16 23:23:04 --> Total execution time: 0.1295
DEBUG - 2010-01-16 23:23:40 --> Config Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:23:40 --> URI Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:23:40 --> Output Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Input Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Language Class Initialized
DEBUG - 2010-01-16 23:23:40 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:23:40 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:23:40 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:23:40 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:23:40 --> Loader Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:23:40 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:23:40 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:23:40 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Session Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:23:40 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:23:40 --> Session routines successfully run
DEBUG - 2010-01-16 23:23:40 --> Controller Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:23:40 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:23:40 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:23:40 --> Final output sent to browser
DEBUG - 2010-01-16 23:23:40 --> Total execution time: 0.1332
DEBUG - 2010-01-16 23:24:24 --> Config Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:24:24 --> URI Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:24:24 --> Output Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Input Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Language Class Initialized
DEBUG - 2010-01-16 23:24:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:24:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:24:24 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:24:24 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:24:24 --> Loader Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:24:24 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:24:24 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:24:24 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Session Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:24:24 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:24:24 --> Session routines successfully run
DEBUG - 2010-01-16 23:24:24 --> Controller Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:24:24 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:24:24 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:24:24 --> Final output sent to browser
DEBUG - 2010-01-16 23:24:24 --> Total execution time: 0.1440
DEBUG - 2010-01-16 23:38:18 --> Config Class Initialized
DEBUG - 2010-01-16 23:38:18 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:38:18 --> URI Class Initialized
DEBUG - 2010-01-16 23:38:18 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:38:18 --> Output Class Initialized
DEBUG - 2010-01-16 23:38:18 --> Input Class Initialized
DEBUG - 2010-01-16 23:38:18 --> Language Class Initialized
DEBUG - 2010-01-16 23:38:18 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:38:18 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:38:18 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:38:19 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:38:19 --> Loader Class Initialized
DEBUG - 2010-01-16 23:38:19 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:38:19 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:38:19 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:38:19 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:38:19 --> Session Class Initialized
DEBUG - 2010-01-16 23:38:19 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:38:19 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:38:19 --> Session routines successfully run
DEBUG - 2010-01-16 23:38:19 --> Controller Class Initialized
DEBUG - 2010-01-16 23:38:19 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:38:19 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:38:19 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
ERROR - 2010-01-16 23:38:19 --> Severity: Warning  --> Missing argument 2 for WPCI::log(), called in /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php on line 72 and defined /Users/aaron/Workspace/wp-ci/core-plugin/WPCI.php 35
ERROR - 2010-01-16 23:38:19 --> Severity: Notice  --> Undefined variable: message /Users/aaron/Workspace/wp-ci/core-plugin/WPCI.php 37
ERROR - 2010-01-16 23:38:19 --> Severity: Warning  --> Missing argument 2 for WPCI::log(), called in /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php on line 72 and defined /Users/aaron/Workspace/wp-ci/core-plugin/WPCI.php 35
ERROR - 2010-01-16 23:38:19 --> Severity: Notice  --> Undefined variable: message /Users/aaron/Workspace/wp-ci/core-plugin/WPCI.php 37
DEBUG - 2010-01-16 23:38:19 --> Final output sent to browser
DEBUG - 2010-01-16 23:38:19 --> Total execution time: 0.3340
DEBUG - 2010-01-16 23:39:09 --> Config Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:39:09 --> URI Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:39:09 --> Output Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Input Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Language Class Initialized
DEBUG - 2010-01-16 23:39:09 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:39:09 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:39:09 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:39:09 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:39:09 --> Loader Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:39:09 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:39:09 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:39:09 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Session Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:39:09 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:39:09 --> Session routines successfully run
DEBUG - 2010-01-16 23:39:09 --> Controller Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:39:09 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:39:09 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:39:19 --> Config Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:39:19 --> URI Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:39:19 --> Output Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Input Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Language Class Initialized
DEBUG - 2010-01-16 23:39:19 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:39:19 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:39:19 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:39:19 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:39:19 --> Loader Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:39:19 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:39:19 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:39:19 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Session Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:39:19 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:39:19 --> Session routines successfully run
DEBUG - 2010-01-16 23:39:19 --> Controller Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:39:19 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:39:19 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:39:19 --> admin.php?page=wp-ci/the-jackson-clinics/home/manageLocations
DEBUG - 2010-01-16 23:39:19 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:39:19 --> Final output sent to browser
DEBUG - 2010-01-16 23:39:19 --> Total execution time: 0.1326
DEBUG - 2010-01-16 23:41:07 --> Config Class Initialized
DEBUG - 2010-01-16 23:41:07 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:41:07 --> URI Class Initialized
DEBUG - 2010-01-16 23:41:07 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:41:07 --> Output Class Initialized
DEBUG - 2010-01-16 23:41:07 --> Input Class Initialized
DEBUG - 2010-01-16 23:41:07 --> Language Class Initialized
DEBUG - 2010-01-16 23:41:07 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:41:07 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:41:07 --> Registering pluggable application: [the-jackson-clinics]
ERROR - 2010-01-16 23:41:07 --> Severity: Notice  --> Trying to get property of non-object /Users/aaron/Workspace/wordpress-2.9/wp-includes/general-template.php 366
DEBUG - 2010-01-16 23:41:31 --> Config Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:41:31 --> URI Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:41:31 --> Output Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Input Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Language Class Initialized
DEBUG - 2010-01-16 23:41:31 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:41:31 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:41:31 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:41:31 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:41:31 --> Loader Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:41:31 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:41:31 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:41:31 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Session Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:41:31 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:41:31 --> Session routines successfully run
DEBUG - 2010-01-16 23:41:31 --> Controller Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:41:31 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:41:31 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:41:31 --> admin.php?page=wp-ci/the-jackson-clinics/home/manageLocations
DEBUG - 2010-01-16 23:41:31 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:41:31 --> Final output sent to browser
DEBUG - 2010-01-16 23:41:31 --> Total execution time: 0.4202
DEBUG - 2010-01-16 23:41:56 --> Config Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:41:56 --> URI Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:41:56 --> Output Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Input Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Language Class Initialized
DEBUG - 2010-01-16 23:41:56 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:41:56 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:41:56 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:41:56 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:41:56 --> Loader Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:41:56 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:41:56 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:41:56 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Session Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:41:56 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:41:56 --> Session routines successfully run
DEBUG - 2010-01-16 23:41:56 --> Controller Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:41:56 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:41:56 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:41:56 --> admin.php?page=wp-ci/the-jackson-clinics/home/manageLocations
DEBUG - 2010-01-16 23:41:56 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:41:56 --> Final output sent to browser
DEBUG - 2010-01-16 23:41:56 --> Total execution time: 0.3025
DEBUG - 2010-01-16 23:42:16 --> Config Class Initialized
DEBUG - 2010-01-16 23:42:16 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:42:16 --> URI Class Initialized
DEBUG - 2010-01-16 23:42:16 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:42:16 --> Output Class Initialized
DEBUG - 2010-01-16 23:42:16 --> Input Class Initialized
DEBUG - 2010-01-16 23:42:16 --> Language Class Initialized
DEBUG - 2010-01-16 23:42:16 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:42:16 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:42:16 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:42:22 --> Config Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:42:22 --> URI Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:42:22 --> Output Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Input Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Language Class Initialized
DEBUG - 2010-01-16 23:42:22 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:42:22 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:42:22 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:42:22 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:42:22 --> Loader Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:42:22 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:42:22 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:42:22 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Session Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:42:22 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:42:22 --> Session routines successfully run
DEBUG - 2010-01-16 23:42:22 --> Controller Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:42:22 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:42:22 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:42:22 --> admin.php?page=wp-ci/the-jackson-clinics/home/manageLocations
DEBUG - 2010-01-16 23:42:22 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:42:22 --> Final output sent to browser
DEBUG - 2010-01-16 23:42:22 --> Total execution time: 0.1880
DEBUG - 2010-01-16 23:42:41 --> Config Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:42:41 --> URI Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:42:41 --> Output Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Input Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Language Class Initialized
DEBUG - 2010-01-16 23:42:41 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:42:41 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:42:41 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:42:41 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:42:41 --> Loader Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:42:41 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:42:41 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:42:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Session Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:42:41 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:42:41 --> Session routines successfully run
DEBUG - 2010-01-16 23:42:41 --> Controller Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:42:41 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:42:41 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:42:41 --> admin.php?page=wp-ci/the-jackson-clinics/home/manageLocations
DEBUG - 2010-01-16 23:42:41 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:42:41 --> Final output sent to browser
DEBUG - 2010-01-16 23:42:41 --> Total execution time: 0.2250
DEBUG - 2010-01-16 23:42:43 --> Config Class Initialized
DEBUG - 2010-01-16 23:42:43 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:42:43 --> URI Class Initialized
DEBUG - 2010-01-16 23:42:43 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:42:43 --> Output Class Initialized
DEBUG - 2010-01-16 23:42:43 --> Input Class Initialized
DEBUG - 2010-01-16 23:42:43 --> Language Class Initialized
DEBUG - 2010-01-16 23:42:43 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:42:43 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:42:43 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:45:22 --> Config Class Initialized
DEBUG - 2010-01-16 23:45:22 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:45:22 --> URI Class Initialized
DEBUG - 2010-01-16 23:45:22 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:45:22 --> Output Class Initialized
DEBUG - 2010-01-16 23:45:22 --> Input Class Initialized
DEBUG - 2010-01-16 23:45:22 --> Language Class Initialized
DEBUG - 2010-01-16 23:45:22 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:45:22 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:45:22 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:45:24 --> Config Class Initialized
DEBUG - 2010-01-16 23:45:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:45:24 --> URI Class Initialized
DEBUG - 2010-01-16 23:45:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:45:24 --> Output Class Initialized
DEBUG - 2010-01-16 23:45:24 --> Input Class Initialized
DEBUG - 2010-01-16 23:45:24 --> Language Class Initialized
DEBUG - 2010-01-16 23:45:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:45:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:45:24 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:45:24 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:45:24 --> Loader Class Initialized
DEBUG - 2010-01-16 23:45:24 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:45:24 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:45:25 --> Config Class Initialized
DEBUG - 2010-01-16 23:45:25 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:45:25 --> URI Class Initialized
DEBUG - 2010-01-16 23:45:25 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:45:25 --> Output Class Initialized
DEBUG - 2010-01-16 23:45:25 --> Input Class Initialized
DEBUG - 2010-01-16 23:45:25 --> Language Class Initialized
DEBUG - 2010-01-16 23:45:25 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:45:25 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:45:25 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:45:25 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:45:25 --> Loader Class Initialized
DEBUG - 2010-01-16 23:45:25 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:45:25 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:45:57 --> Config Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:45:57 --> URI Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:45:57 --> Output Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Input Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Language Class Initialized
DEBUG - 2010-01-16 23:45:57 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:45:57 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:45:57 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:45:57 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:45:57 --> Loader Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:45:57 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:45:57 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:45:57 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Session Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:45:57 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:45:57 --> Session routines successfully run
DEBUG - 2010-01-16 23:45:57 --> Controller Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:45:57 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:45:57 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:45:57 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:45:57 --> Final output sent to browser
DEBUG - 2010-01-16 23:45:57 --> Total execution time: 0.1823
DEBUG - 2010-01-16 23:46:00 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:00 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:00 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:00 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:00 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:00 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:00 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:00 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:00 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:00 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:00 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:00 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:46:00 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:00 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:00 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:00 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:00 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:46:00 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:00 --> Total execution time: 0.2234
DEBUG - 2010-01-16 23:46:02 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:02 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:02 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:02 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:02 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:02 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:02 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:02 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:02 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:02 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:02 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:02 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:46:02 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:02 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:02 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:02 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:02 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:46:02 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:02 --> Total execution time: 0.1660
DEBUG - 2010-01-16 23:46:06 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:06 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:06 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:06 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:06 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:06 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:06 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:06 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:06 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:06 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:06 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:06 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:46:06 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:06 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:06 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:06 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:06 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:46:06 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:06 --> Total execution time: 0.2162
DEBUG - 2010-01-16 23:46:35 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:35 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:35 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:35 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:35 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:35 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:35 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:35 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:35 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:35 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:36 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:36 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:36 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:36 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:36 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:36 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:36 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:36 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:36 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:46:36 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:36 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:36 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:36 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:36 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:36 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:46:36 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:36 --> Total execution time: 0.1347
DEBUG - 2010-01-16 23:46:42 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:42 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:42 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:42 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:42 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:42 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:42 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:42 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:42 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:46:42 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:42 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:42 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:42 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:42 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:46:42 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:42 --> Total execution time: 0.1690
DEBUG - 2010-01-16 23:46:50 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:50 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:50 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:50 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:50 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:50 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:50 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:50 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:50 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:50 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:50 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
ERROR - 2010-01-16 23:46:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php:21) /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Session.php 408
ERROR - 2010-01-16 23:46:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php:21) /Users/aaron/Workspace/wp-ci/core-plugin/ci/system/libraries/Session.php 662
DEBUG - 2010-01-16 23:46:50 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:50 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:50 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:50 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:50 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
ERROR - 2010-01-16 23:46:50 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /Users/aaron/Workspace/wp-ci/core-plugin/ci/application/helpers/wpci_helper.php:21) /Users/aaron/Workspace/wordpress-2.9/wp-admin/admin-header.php 9
DEBUG - 2010-01-16 23:46:50 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:50 --> Total execution time: 0.1744
DEBUG - 2010-01-16 23:46:55 --> Config Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:46:55 --> URI Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:46:55 --> Output Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Input Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Language Class Initialized
DEBUG - 2010-01-16 23:46:55 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:46:55 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:46:55 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:46:55 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:46:55 --> Loader Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:46:55 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:46:55 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:46:55 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Session Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:46:55 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:46:55 --> Session routines successfully run
DEBUG - 2010-01-16 23:46:55 --> Controller Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Helper loaded: data_helper
DEBUG - 2010-01-16 23:46:55 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:46:55 --> Loading /Users/aaron/Workspace/thejacksonclinics.com/application/application/views/manageLocations.php
DEBUG - 2010-01-16 23:46:55 --> admin.php?page=wp-ci&a=the-jackson-clinics&c=home&m=editLocation&d=/
DEBUG - 2010-01-16 23:46:55 --> Final output sent to browser
DEBUG - 2010-01-16 23:46:55 --> Total execution time: 0.1503
DEBUG - 2010-01-16 23:51:42 --> Config Class Initialized
DEBUG - 2010-01-16 23:51:42 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:51:42 --> URI Class Initialized
DEBUG - 2010-01-16 23:51:42 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:51:42 --> Output Class Initialized
DEBUG - 2010-01-16 23:51:42 --> Input Class Initialized
DEBUG - 2010-01-16 23:51:42 --> Language Class Initialized
DEBUG - 2010-01-16 23:51:42 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:51:42 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:51:42 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:51:42 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:52:52 --> Config Class Initialized
DEBUG - 2010-01-16 23:52:52 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:52:52 --> URI Class Initialized
DEBUG - 2010-01-16 23:52:52 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:52:52 --> Output Class Initialized
DEBUG - 2010-01-16 23:52:52 --> Input Class Initialized
DEBUG - 2010-01-16 23:52:52 --> Language Class Initialized
DEBUG - 2010-01-16 23:52:52 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:52:52 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:52:52 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:52:52 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:52:52 --> /Users/aaron/Workspace/thejacksonclinics.com/application/applicationcontrollers///home.php
DEBUG - 2010-01-16 23:54:24 --> Config Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Hooks Class Initialized
DEBUG - 2010-01-16 23:54:24 --> URI Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Router Class Initialized But Not Yet Set
DEBUG - 2010-01-16 23:54:24 --> Output Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Input Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Language Class Initialized
DEBUG - 2010-01-16 23:54:24 --> ***** WP-CI Loaded. Yippie! *********************
DEBUG - 2010-01-16 23:54:24 --> Registering pluggable application: [hello-sparky]
DEBUG - 2010-01-16 23:54:24 --> Registering pluggable application: [the-jackson-clinics]
DEBUG - 2010-01-16 23:54:24 --> Pluggable application [the-jackson-clinics] activated
DEBUG - 2010-01-16 23:54:24 --> Loader Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Helper loaded: url_helper
DEBUG - 2010-01-16 23:54:24 --> Helper loaded: form_helper
DEBUG - 2010-01-16 23:54:24 --> Helper loaded: wpci_helper
DEBUG - 2010-01-16 23:54:24 --> Database Driver Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Session Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Helper loaded: string_helper
ERROR - 2010-01-16 23:54:24 --> The session cookie data did not match what was expected. This could be a possible hacking attempt.
DEBUG - 2010-01-16 23:54:24 --> Session routines successfully run
DEBUG - 2010-01-16 23:54:24 --> Controller Class Initialized
DEBUG - 2010-01-16 23:54:24 --> Helper loaded: data_helper
