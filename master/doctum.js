

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '<ul><li data-name="namespace:Bmatovu" class="opened"><div style="padding-left:0px" class="hd"><span class="icon icon-play"></span><a href="Bmatovu.html">Bmatovu</a></div><div class="bd"><ul><li data-name="namespace:Bmatovu_RouteList" class="opened"><div style="padding-left:18px" class="hd"><span class="icon icon-play"></span><a href="Bmatovu/RouteList.html">RouteList</a></div><div class="bd"><ul><li data-name="namespace:Bmatovu_RouteList_Http" class="opened"><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Bmatovu/RouteList/Http.html">Http</a></div><div class="bd"><ul><li data-name="class:Bmatovu_RouteList_Http_RouteListController" ><div style="padding-left:62px" class="hd leaf"><a href="Bmatovu/RouteList/Http/RouteListController.html">RouteListController</a></div></li></ul></div></li><li data-name="namespace:Bmatovu_RouteList_View" class="opened"><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Bmatovu/RouteList/View.html">View</a></div><div class="bd"><ul><li data-name="namespace:Bmatovu_RouteList_View_Components" ><div style="padding-left:54px" class="hd"><span class="icon icon-play"></span><a href="Bmatovu/RouteList/View/Components.html">Components</a></div><div class="bd"><ul><li data-name="class:Bmatovu_RouteList_View_Components_RouteList" ><div style="padding-left:80px" class="hd leaf"><a href="Bmatovu/RouteList/View/Components/RouteList.html">RouteList</a></div></li></ul></div></li></ul></div></li><li data-name="class:Bmatovu_RouteList_RouteListServiceProvider" class="opened"><div style="padding-left:44px" class="hd leaf"><a href="Bmatovu/RouteList/RouteListServiceProvider.html">RouteListServiceProvider</a></div></li></ul></div></li></ul></div></li></ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                        {"type":"Namespace","link":"Bmatovu.html","name":"Bmatovu","doc":"Namespace Bmatovu"},{"type":"Namespace","link":"Bmatovu/RouteList.html","name":"Bmatovu\\RouteList","doc":"Namespace Bmatovu\\RouteList"},{"type":"Namespace","link":"Bmatovu/RouteList/Http.html","name":"Bmatovu\\RouteList\\Http","doc":"Namespace Bmatovu\\RouteList\\Http"},{"type":"Namespace","link":"Bmatovu/RouteList/View.html","name":"Bmatovu\\RouteList\\View","doc":"Namespace Bmatovu\\RouteList\\View"},{"type":"Namespace","link":"Bmatovu/RouteList/View/Components.html","name":"Bmatovu\\RouteList\\View\\Components","doc":"Namespace Bmatovu\\RouteList\\View\\Components"},                                                        {"type":"Class","fromName":"Bmatovu\\RouteList\\Http","fromLink":"Bmatovu/RouteList/Http.html","link":"Bmatovu/RouteList/Http/RouteListController.html","name":"Bmatovu\\RouteList\\Http\\RouteListController","doc":""},
                                {"type":"Method","fromName":"Bmatovu\\RouteList\\Http\\RouteListController","fromLink":"Bmatovu/RouteList/Http/RouteListController.html","link":"Bmatovu/RouteList/Http/RouteListController.html#method___construct","name":"Bmatovu\\RouteList\\Http\\RouteListController::__construct","doc":"Create a controller instance."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\Http\\RouteListController","fromLink":"Bmatovu/RouteList/Http/RouteListController.html","link":"Bmatovu/RouteList/Http/RouteListController.html#method___invoke","name":"Bmatovu\\RouteList\\Http\\RouteListController::__invoke","doc":"Render routes."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\Http\\RouteListController","fromLink":"Bmatovu/RouteList/Http/RouteListController.html","link":"Bmatovu/RouteList/Http/RouteListController.html#method_getRouteMiddleware","name":"Bmatovu\\RouteList\\Http\\RouteListController::getRouteMiddleware","doc":"Get route middleware."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\Http\\RouteListController","fromLink":"Bmatovu/RouteList/Http/RouteListController.html","link":"Bmatovu/RouteList/Http/RouteListController.html#method_matches","name":"Bmatovu\\RouteList\\Http\\RouteListController::matches","doc":"Perform a regular expression match."},
            
                                                {"type":"Class","fromName":"Bmatovu\\RouteList","fromLink":"Bmatovu/RouteList.html","link":"Bmatovu/RouteList/RouteListServiceProvider.html","name":"Bmatovu\\RouteList\\RouteListServiceProvider","doc":null},
                                {"type":"Method","fromName":"Bmatovu\\RouteList\\RouteListServiceProvider","fromLink":"Bmatovu/RouteList/RouteListServiceProvider.html","link":"Bmatovu/RouteList/RouteListServiceProvider.html#method_boot","name":"Bmatovu\\RouteList\\RouteListServiceProvider::boot","doc":"Bootstrap the application services."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\RouteListServiceProvider","fromLink":"Bmatovu/RouteList/RouteListServiceProvider.html","link":"Bmatovu/RouteList/RouteListServiceProvider.html#method_register","name":"Bmatovu\\RouteList\\RouteListServiceProvider::register","doc":"Register the application services."},
            
                                                {"type":"Class","fromName":"Bmatovu\\RouteList\\View\\Components","fromLink":"Bmatovu/RouteList/View/Components.html","link":"Bmatovu/RouteList/View/Components/RouteList.html","name":"Bmatovu\\RouteList\\View\\Components\\RouteList","doc":null},
                                {"type":"Method","fromName":"Bmatovu\\RouteList\\View\\Components\\RouteList","fromLink":"Bmatovu/RouteList/View/Components/RouteList.html","link":"Bmatovu/RouteList/View/Components/RouteList.html#method___construct","name":"Bmatovu\\RouteList\\View\\Components\\RouteList::__construct","doc":"Create a new component instance."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\View\\Components\\RouteList","fromLink":"Bmatovu/RouteList/View/Components/RouteList.html","link":"Bmatovu/RouteList/View/Components/RouteList.html#method_render","name":"Bmatovu\\RouteList\\View\\Components\\RouteList::render","doc":"Get the view / contents that represent the component."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\View\\Components\\RouteList","fromLink":"Bmatovu/RouteList/View/Components/RouteList.html","link":"Bmatovu/RouteList/View/Components/RouteList.html#method_getRoutes","name":"Bmatovu\\RouteList\\View\\Components\\RouteList::getRoutes","doc":null},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\View\\Components\\RouteList","fromLink":"Bmatovu/RouteList/View/Components/RouteList.html","link":"Bmatovu/RouteList/View/Components/RouteList.html#method_getRouteMiddleware","name":"Bmatovu\\RouteList\\View\\Components\\RouteList::getRouteMiddleware","doc":"Get route middleware."},
        {"type":"Method","fromName":"Bmatovu\\RouteList\\View\\Components\\RouteList","fromLink":"Bmatovu/RouteList/View/Components/RouteList.html","link":"Bmatovu/RouteList/View/Components/RouteList.html#method_matches","name":"Bmatovu\\RouteList\\View\\Components\\RouteList::matches","doc":"Perform a regular expression match."},
            
                                // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Doctum = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Doctum.injectApiTree($('#api-tree'));
    });

    return root.Doctum;
})(window);

$(function() {

        // Enable the version switcher
    $('#version-switcher').on('change', function() {
        window.location = $(this).val()
    });
    var versionSwitcher = document.getElementById('version-switcher');
    if (versionSwitcher) {
        var versionToSelect = document.evaluate(
            '//option[@data-version="master"]',
            versionSwitcher,
            null,
            XPathResult.FIRST_ORDERED_NODE_TYPE,
            null
        ).singleNodeValue;

        if (versionToSelect && typeof versionToSelect.selected === 'boolean') {
            versionToSelect.selected = true;
        }
    }
    
    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').on('click', function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Doctum.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


