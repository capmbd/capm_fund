"use strict!"
$(document).ready(function() {
    // variable
    var noofdays = 1; //  total no of days cookie will store
    var Navbarbg = "theme1"; //  navbar color                themelight1 / theme1
    var headerbg = "themelight1"; //  header color                theme1 / theme2 / theme3 / theme4 / theme5 / theme6
    var logobg = "theme1"; //  Logo color                  theme1 / theme2 / theme3 / theme4 / theme5 / theme6
    var menucaption = "theme6"; //  menu caption color          theme1 / theme2 / theme3 / theme4 / theme5 / theme6 / theme7 / theme8 / theme9
    var bgpattern = "theme1"; //  background color            theme1 / theme2 / theme3 / theme4 / theme5 / theme6
    var activeitemtheme = "theme1"; //  menu active color           theme1 / theme2 / theme3 / theme4 / theme5 / theme6 / theme7 / theme8 / theme9 / theme10 / theme11 / theme12
    var frametype = "theme1"; //  preset frame color          theme1 / theme2 / theme3 / theme4 / theme5 / theme6
    var nav_image = "true"; //  navbar image bg             false / true
    var active_image = "img1"; //  avtive navbar image layout  img1 / img2 / img3 / img4 / img5 / img6
    var layout_type = "light"; //  theme layout color          dark / light
    var layout_width = "wide"; //  theme layout size           wide / box
    var menu_effect_desktop = "shrink"; //  navbar effect in desktop    shrink / overlay / push
    var menu_effect_tablet = "overlay"; //  navbar effect in tablet     shrink / overlay / push
    var menu_effect_phone = "overlay"; //  navbar effect in phone      shrink / overlay / push
    var menu_icon_style = "st2"; //  navbar menu icon            st1 / st2

    $("#pcoded").pcodedmenu({
        themelayout: 'vertical',
        verticalMenuplacement: 'left', // value should be left/right
        verticalMenulayout: layout_width,
        MenuTrigger: 'click', // click / hover
        SubMenuTrigger: 'click', // click / hover
        activeMenuClass: 'active',
        ThemeBackgroundPattern: bgpattern,
        HeaderBackground: headerbg,
        LHeaderBackground: menucaption,
        NavbarBackground: Navbarbg,
        logoBackground: logobg,
        ActiveItemBackground: activeitemtheme,
        NavbarImage: nav_image,
        ActiveNavbarImage: active_image,
        SubItemBackground: 'theme2',
        ActiveItemStyle: 'style0',
        ItemBorder: false,
        ItemBorderStyle: 'solid',
        freamtype: frametype,
        SubItemBorder: false,
        DropDownIconStyle: 'style1', // Value should be style1,style2,style3
        menutype: menu_icon_style,
        layouttype: layout_type,
        FixedNavbarPosition: true, // Value should be true / false  header postion
        FixedHeaderPosition: false, // Value should be true / false  sidebar menu postion
        collapseVerticalLeftHeader: true,
        VerticalSubMenuItemIconStyle: 'style5', // value should be style1, style2, style3, style4, style5, style6
        VerticalNavigationView: 'view1',
        verticalMenueffect: {
            desktop: menu_effect_desktop,
            tablet: menu_effect_tablet,
            phone: menu_effect_phone,
        },
        defaultVerticalMenu: {
            desktop: "expanded", // value should be offcanvas/collapsed/expanded/compact/compact-acc/fullpage/ex-popover/sub-expanded
            tablet: "offcanvas", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
            phone: "offcanvas", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
        },
        onToggleVerticalMenu: {
            desktop: "collapsed", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
            tablet: "expanded", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
            phone: "expanded", // value should be offcanvas/collapsed/expanded/compact/fullpage/ex-popover/sub-expanded
        },

    });
    /* Menu Change function Start */
    function handlenavimg() {
        $('.theme-color > a.navbg-pattern').on("click", function() {
            var value = $(this).attr("navbg-pattern");
            $('.pcoded').attr('sidebar-img-type', value);
            $('.pcoded').attr("sidebar-img", "true");
            $('.pcoded-navbar').attr("navbar-theme", "theme1");
            $('.pcoded-navigation-label').attr("menu-title-theme", "theme6");
        });
    };
    handlenavimg();
    /* Brand background Change function Start */
    function handleogortheme() {
        $('.theme-color > a.logo-theme').on("click", function() {
            var logotheme = $(this).attr("logo-theme");
            $('.navbar-logo').attr("logo-theme", logotheme);
            $('.pcoded-navigation-label').attr("menu-title-theme", "theme6");
        });
    };
    handleogortheme();
    /* layout type Change function Start */
    function handlelayouttheme() {
        $('.theme-color > a.Layout-type').on("click", function() {
            var layout = $(this).attr("layout-type");
            if (layout == 'dark') {
                $('.pcoded-header').attr("header-theme", "theme6");
                $('.navbar-logo').attr("logo-theme", 'themelight1');
                $('.pcoded-navbar').attr("navbar-theme", "theme1");
                $('.pcoded-navbar').attr("active-item-theme", "theme1");
                $('.pcoded').attr("sidebar-img", "false");
                $('body').attr("themebg-pattern", "theme1");
                $('.pcoded-navigation-label').attr("menu-title-theme", "theme6");
                $('.profile-notification').attr("active-item-theme", "theme1");
                $('.pcoded').attr("layout-type", layout);
                $('body').addClass('dark');
            }
            if (layout == 'light') {
                $('.pcoded-header').attr("header-theme", "themelight1");
                $('.navbar-logo').attr("logo-theme", 'themelight1');
                $('.pcoded-navbar').attr("navbar-theme", "theme1");
                $('.pcoded-navbar').attr("active-item-theme", "theme1");
                $('.pcoded').attr("sidebar-img", "false");
                $('body').attr("themebg-pattern", "theme1");
                $('.pcoded-navigation-label').attr("menu-title-theme", "theme6");
                $('.profile-notification').attr("active-item-theme", "theme1");
                $('.pcoded-navbar').attr("active-item-theme", "theme1");
                $('.pcoded').attr("layout-type", layout);
                $('body').removeClass('dark');
            }
            if (layout == 'img') {
                $('.pcoded-navbar').attr("navbar-theme", "theme1");
                $('.pcoded').attr("sidebar-img", "true");
                $('.pcoded').attr("frame-type", "theme1");
                $('.pcoded-navigation-label').attr("menu-title-theme", "theme6");
            }
            if (layout == 'reset') {
            }
        });
    };
    handlelayouttheme();

    /* Left header Theme Change function Start */
    function handleleftheadertheme() {
        $('.theme-color > a.leftheader-theme').on("click", function() {
            var lheadertheme = $(this).attr("menu-caption");
            $('.pcoded-navigation-label').attr("menu-title-theme", lheadertheme);
        });
    };
    handleleftheadertheme();
    /* Left header Theme Change function Close */
    /* header Theme Change function Start */
    function handleheadertheme() {
        $('.theme-color > a.header-theme').on("click", function() {
            var headertheme = $(this).attr("header-theme");
            var activeitem = $(this).attr("active-item-color");
            $('.pcoded-navbar').attr("active-item-theme", activeitem);
            $('.pcoded').attr("fream-type", headertheme);

            if (headertheme == 'themelight1') {
                $('body').attr("themebg-pattern", 'theme1');
            } else {
                $('body').attr("themebg-pattern", headertheme);
            }
            if (headertheme == 'themelight1') {
                $('.pcoded-navigation-label').attr("menu-title-theme", 'theme6');
            } else {
                $('.pcoded-navigation-label').attr("menu-title-theme", headertheme);
            }
            $('.profile-notification').attr("active-item-theme", headertheme);
            $('.pcoded-header').attr("header-theme", headertheme);
            $('.navbar-logo').attr("logo-theme", headertheme);
        });
    };
    handleheadertheme();
    /* header Theme Change function Close */
    /* Navbar Theme Change function Start */
    function handlenavbartheme() {
        $('.theme-color > a.navbar-theme').on("click", function() {
            var navbartheme = $(this).attr("navbar-theme");
            $('.pcoded-navbar').attr("navbar-theme", navbartheme);
            if (navbartheme == 'themelight1') {
                $('.pcoded').attr("sidebar-img", "false");
                $('.pcoded-navigation-label').attr("menu-title-theme", "theme8");
                $('.profile-notification').attr("active-item-theme", "theme1");
            }
            if (navbartheme == 'theme1') {
                $('.pcoded').attr("sidebar-img", "false");
                $('.pcoded-navigation-label').attr("menu-title-theme", "theme1");
                $('.profile-notification').attr("active-item-theme", "theme1");
            }
        });
    };

    handlenavbartheme();
    /* Navbar Theme Change function Close */
    /* Active Item Theme Change function Start */
    function handleactiveitemtheme() {
        $('.theme-color > a.active-item-theme').on("click", function() {
            var activeitemtheme = $(this).attr("active-item-theme");
            $('.pcoded-navbar').attr("active-item-theme", activeitemtheme);
            $('.profile-notification').attr("active-item-theme", activeitemtheme);
        });
    };

    handleactiveitemtheme();
    /* Active Item Theme Change function Close */

    /* Theme background pattren Change function Start */
    function handlethemebgpattern() {
        $('.theme-color > a.themebg-pattern').on("click", function() {
            var themebgpattern = $(this).attr("themebg-pattern");
            $('body').attr("themebg-pattern", themebgpattern);
        });
    };

    handlethemebgpattern();
    /* Theme background pattren Change function Close */

    /* Theme Layout Change function start*/
    function handlethemeverticallayout() {
        $('#theme-layout').change(function() {
            if ($(this).is(":checked")) {
                $('.pcoded').attr('vertical-layout', "box");
                $('#bg-pattern-visiblity').removeClass('d-none');

            } else {
                $('.pcoded').attr('vertical-layout', "wide");
                $('#bg-pattern-visiblity').addClass('d-none');
            }
        });
    };
    handlethemeverticallayout();
    /* Theme Layout Change function Close*/
    /* Menu effect change function start*/
    function handleverticalMenueffect() {
        $('#vertical-menu-effect').val('shrink').on('change', function(get_value) {
            get_value = $(this).val();
            $('.pcoded').attr('vertical-effect', get_value);
        });
    };

    handleverticalMenueffect();
    /* Menu effect change function Close*/

    /* Vertical Item border Style change function Start*/
    function handleverticalboderstyle() {
        $('#vertical-border-style').val('solid').on('change', function(get_value) {
            get_value = $(this).val();
            $('.pcoded-navbar .pcoded-item').attr('item-border-style', get_value);
        });
    };

    handleverticalboderstyle();
    /* Vertical Item border Style change function Close*/

    /* Vertical Dropdown Icon change function Start*/
    function handleVerticalDropDownIconStyle() {
        $('#vertical-dropdown-icon').val('style1').on('change', function(get_value) {
            get_value = $(this).val();
            $('.pcoded-navbar .pcoded-hasmenu').attr('dropdown-icon', get_value);
        });
    };

    handleVerticalDropDownIconStyle();
    /* Vertical Dropdown Icon change function Close*/
    /* Vertical SubItem Icon change function Start*/

    function handleVerticalSubMenuItemIconStyle() {
        $('#vertical-subitem-icon').val('style5').on('change', function(get_value) {
            get_value = $(this).val();
            $('.pcoded-navbar .pcoded-hasmenu').attr('subitem-icon', get_value);
        });
    };

    handleVerticalSubMenuItemIconStyle();
    /* Vertical SubItem Icon change function Close*/
    /* Vertical Navbar Position change function Start*/
    function handlesidebarposition() {
        $('#sidebar-position').change(function() {
            if ($(this).is(":checked")) {
                $('.pcoded-navbar').attr("pcoded-navbar-position", 'fixed');
                $('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'fixed');
            } else {
                $('.pcoded-navbar').attr("pcoded-navbar-position", 'absolute');
                $('.pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'relative');
            }
        });
    };

    handlesidebarposition();
    /* Vertical Navbar Position change function Close*/
    /* Vertical Header Position change function Start*/
    function handleheaderposition() {
        $('#header-position').change(function() {
            if ($(this).is(":checked")) {
                $('.pcoded-header').attr("pcoded-header-position", 'fixed');
                $('.pcoded-navbar').attr("pcoded-header-position", 'fixed');
                $('.pcoded-main-container').css('margin-top', $(".pcoded-header").outerHeight());
            } else {
                $('.pcoded-header').attr("pcoded-header-position", 'relative');
                $('.pcoded-navbar').attr("pcoded-header-position", 'relative');
                $('.pcoded-main-container').css('margin-top', '0px');
            }
        });
    };
    handleheaderposition();
    /* Vertical Header Position change function Close*/
    /*  collapseable Left Header Change Function Start here*/
    function handlecollapseLeftHeader() {
        $('#collapse-left-header').change(function() {
            if ($(this).is(":checked")) {
                $('.pcoded-header, .pcoded ').removeClass('iscollapsed');
                $('.pcoded-header, .pcoded').addClass('nocollapsed');
            } else {
                $('.pcoded-header, .pcoded').addClass('iscollapsed');
                $('.pcoded-header, .pcoded').removeClass('nocollapsed');
            }
        });
    };
    handlecollapseLeftHeader();
});
/*  collapseable Left Header Change Function Close here*/
function handlemenutype(get_value) {
    $('.pcoded').attr('nav-type', get_value);
    $('.pcoded').attr('nav-type', get_value);
};

handlemenutype("st2");
