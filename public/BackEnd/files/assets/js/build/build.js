"use strict!"
$(document).ready(function(){var noofdays=1;var Navbarbg="theme1";var headerbg="themelight1";var logobg="theme1";var menucaption="theme6";var bgpattern="theme1";var activeitemtheme="theme1";var frametype="theme1";var nav_image="false";var active_image="img1";var layout_type="light";var layout_width="wide";var menu_effect_desktop="shrink";var menu_effect_tablet="overlay";var menu_effect_phone="overlay";var menu_icon_style="st2";var menu_drp_icon="style1";var menu_item_icon="style5";var header_pos="fixed";var menu_pos="fixed";function setCookie(cname,cvalue,exdays){var d=new Date();d.setTime(d.getTime()+(exdays*24*60*60*1000));var expires="expires="+d.toGMTString();document.cookie=cname+"="+cvalue+";"+expires+";path=/";}
function getCookie(cname){var name=cname+"=";var decodedCookie=decodeURIComponent(document.cookie);var ca=decodedCookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' '){c=c.substring(1);}
if(c.indexOf(name)==0){return c.substring(name.length,c.length);}}
return "";}
function checkCookie(){Navbarbg=(getCookie("navbar-theme")!="")?getCookie("navbar-theme"):Navbarbg;setCookie("navbar-theme",Navbarbg,noofdays);headerbg=(getCookie("header-theme")!="")?getCookie("header-theme"):headerbg;setCookie("header-theme",headerbg,noofdays);logobg=(getCookie("logo-theme")!="")?getCookie("logo-theme"):logobg;setCookie("logo-theme",logobg,noofdays);menucaption=(getCookie("menu-title-theme")!="")?getCookie("menu-title-theme"):menucaption;setCookie("menu-title-theme",menucaption,noofdays);bgpattern=(getCookie("themebg-pattern")!="")?getCookie("themebg-pattern"):bgpattern;setCookie("themebg-pattern",bgpattern,noofdays);activeitemtheme=(getCookie("active-item-theme")!="")?getCookie("active-item-theme"):activeitemtheme;setCookie("active-item-theme",activeitemtheme,noofdays);frametype=(getCookie("fream-type")!="")?getCookie("fream-type"):frametype;setCookie("fream-type",frametype,noofdays);layout_type=(getCookie("layout-type")!="")?getCookie("layout-type"):layout_type;setCookie("layout-type",layout_type,noofdays);layout_width=(getCookie("vertical-layout")!="")?getCookie("vertical-layout"):layout_width;setCookie("vertical-layout",layout_width,noofdays);nav_image=(getCookie("sidebar-img")!="")?getCookie("sidebar-img"):nav_image;setCookie("sidebar-img",nav_image,noofdays);active_image=(getCookie("sidebar-img-type")!="")?getCookie("sidebar-img-type"):active_image;setCookie("sidebar-img-type",active_image,noofdays);menu_effect_desktop=(getCookie("vertical-effect")!="")?getCookie("vertical-effect"):menu_effect_desktop;setCookie("vertical-effect",menu_effect_desktop,noofdays);menu_icon_style=(getCookie("menu-icon-style")!="")?getCookie("menu-icon-style"):menu_icon_style;setCookie("menu-icon-style",menu_icon_style,noofdays);menu_drp_icon=(getCookie("menu_drp_icon")!="")?getCookie("menu_drp_icon"):menu_drp_icon;setCookie("menu_drp_icon",menu_drp_icon,noofdays);menu_item_icon=(getCookie("menu_item_icon")!="")?getCookie("menu_item_icon"):menu_item_icon;setCookie("menu_item_icon",menu_item_icon,noofdays);header_pos=(getCookie("header_pos")!="")?getCookie("header_pos"):header_pos;setCookie("header_pos",header_pos,noofdays);menu_pos=(getCookie("menu_pos")!="")?getCookie("menu_pos"):menu_pos;setCookie("menu_pos",menu_pos,noofdays);if(header_pos=='fixed'){header_pos=true;}else{header_pos=false;}
if(menu_pos=='fixed'){menu_pos=true;}else{menu_pos=false;}}
checkCookie();$("#pcoded").pcodedmenu({themelayout:'vertical',verticalMenuplacement:'left',verticalMenulayout:layout_width,MenuTrigger:'click',SubMenuTrigger:'click',activeMenuClass:'active',ThemeBackgroundPattern:bgpattern,HeaderBackground:headerbg,LHeaderBackground:menucaption,NavbarBackground:Navbarbg,logoBackground:logobg,ActiveItemBackground:activeitemtheme,NavbarImage:nav_image,ActiveNavbarImage:active_image,SubItemBackground:'theme2',ActiveItemStyle:'style0',freamtype:frametype,DropDownIconStyle:menu_drp_icon,menutype:menu_icon_style,layouttype:layout_type,FixedNavbarPosition:menu_pos,FixedHeaderPosition:header_pos,collapseVerticalLeftHeader:true,VerticalSubMenuItemIconStyle:menu_item_icon,VerticalNavigationView:'view1',verticalMenueffect:{desktop:menu_effect_desktop,tablet:menu_effect_tablet,phone:menu_effect_phone,},defaultVerticalMenu:{desktop:"expanded",tablet:"offcanvas",phone:"offcanvas",},onToggleVerticalMenu:{desktop:"collapsed",tablet:"expanded",phone:"expanded",},});function handlenavimg(){$('.theme-color > a.navbg-pattern').on("click",function(){var value=$(this).attr("navbg-pattern");$('.pcoded').attr('sidebar-img-type',value);$('.pcoded').attr("sidebar-img","true");$('.pcoded-navbar').attr("navbar-theme","theme1");$('.pcoded-navigation-label').attr("menu-title-theme","theme6");setCookie('sidebar-img-type',value,1);setCookie("sidebar-img","true",1);setCookie("navbar-theme","theme1");setCookie("menu-title-theme","theme6");});};handlenavimg();function handleogortheme(){$('.theme-color > a.logo-theme').on("click",function(){var logotheme=$(this).attr("logo-theme");$('.navbar-logo').attr("logo-theme",logotheme);setCookie("logo-theme",logotheme,1);});};handleogortheme();function handlelayouttheme(){$('.theme-color > a.Layout-type').on("click",function(){var layout=$(this).attr("layout-type");if(layout=='dark'){$('.pcoded-header').attr("header-theme","theme6");$('.navbar-logo').attr("logo-theme",'themelight1');$('.pcoded-navbar').attr("navbar-theme","theme1");$('.pcoded-navbar').attr("active-item-theme","theme1");$('.pcoded').attr("sidebar-img","false");$('body').attr("themebg-pattern","theme1");$('.pcoded-navigation-label').attr("menu-title-theme","theme6");$('.profile-notification').attr("active-item-theme","theme1");$('.pcoded').attr("layout-type",layout);$('body').addClass('dark');setCookie("header-theme","theme6",1);setCookie("logo-theme",'themelight1',1);setCookie("navbar-theme","theme1",1);setCookie("active-item-theme","theme1",1);setCookie("sidebar-img","false",1);setCookie("themebg-pattern","theme1",1);setCookie("menu-title-theme","theme6",1);setCookie("layout-type",layout,1);}
if(layout=='light'){$('.pcoded-header').attr("header-theme","themelight1");$('.navbar-logo').attr("logo-theme",'themelight1');$('.pcoded-navbar').attr("navbar-theme","theme1");$('.pcoded-navbar').attr("active-item-theme","theme1");$('.pcoded').attr("sidebar-img","false");$('body').attr("themebg-pattern","theme1");$('.pcoded-navigation-label').attr("menu-title-theme","theme6");$('.profile-notification').attr("active-item-theme","theme1");$('.pcoded-navbar').attr("active-item-theme","theme1");$('.pcoded').attr("layout-type",layout);$('body').removeClass('dark');setCookie("header-theme","themelight1",1);setCookie("logo-theme",'themelight1',1);setCookie("navbar-theme","theme1",1);setCookie("active-item-theme","theme1",1);setCookie("sidebar-img","false",1);setCookie("themebg-pattern","theme1",1);setCookie("menu-title-theme","theme6",1);setCookie("active-item-theme","theme1",1);setCookie("layout-type",layout,1);}
if(layout=='img'){$('.pcoded-navbar').attr("navbar-theme","theme1");$('.pcoded').attr("sidebar-img","true");$('.pcoded').attr("frame-type","theme1");$('.pcoded-navigation-label').attr("menu-title-theme","theme6");setCookie("navbar-theme","theme1",1);setCookie("sidebar-img","true",1);setCookie("frame-type","theme1",1);setCookie("menu-title-theme","theme6",1);}
if(layout=='reset'){setCookie("navbar-theme",null,0);setCookie("header-theme",null,0);setCookie("logo-theme",null,0);setCookie("menu-title-theme",null,0);setCookie("themebg-pattern",null,0);setCookie("active-item-theme",null,0);setCookie("fream-type",null,0);setCookie("layout-type",null,0);setCookie("vertical-layout",null,0);setCookie("sidebar-img",null,0);setCookie("sidebar-img-type",null,0);setCookie("vertical-effect",null,0);setCookie("menu-icon-style",null,0);setCookie("menu_drp_icon",null,0);setCookie("menu_item_icon",null,0);setCookie("header_pos",null,0);setCookie("menu_pos",null,0);location.reload();}});};handlelayouttheme();function handleleftheadertheme(){$('.theme-color > a.leftheader-theme').on("click",function(){var lheadertheme=$(this).attr("menu-caption");$('.pcoded-navigation-label').attr("menu-title-theme",lheadertheme);setCookie("menu-title-theme",lheadertheme,1);});};handleleftheadertheme();function handleheadertheme(){$('.theme-color > a.header-theme').on("click",function(){var headertheme=$(this).attr("header-theme");var activeitem=$(this).attr("active-item-color");$('.pcoded-navbar').attr("active-item-theme",activeitem);$('.pcoded').attr("fream-type",headertheme);$('.profile-notification').attr("active-item-theme",headertheme);$('.pcoded-header').attr("header-theme",headertheme);$('.navbar-logo').attr("logo-theme",headertheme);setCookie("active-item-theme",activeitem,1);setCookie("fream-type",headertheme,1);setCookie("active-item-theme",headertheme,1);setCookie("header-theme",headertheme,1);setCookie("logo-theme",headertheme,1);if(headertheme=='themelight1'){$('body').attr("themebg-pattern",'theme1');$('.profile-notification').attr("active-item-theme","theme5");setCookie("themebg-pattern",'theme1',1);}else{$('body').attr("themebg-pattern",headertheme);setCookie("themebg-pattern",headertheme,1);}
if(headertheme=='themelight1'){$('.pcoded-navigation-label').attr("menu-title-theme",'theme6');setCookie("menu-title-theme",'theme6',1);}else{$('.pcoded-navigation-label').attr("menu-title-theme",headertheme);setCookie("menu-title-theme",headertheme,1);}});};handleheadertheme();function handlenavbartheme(){$('.theme-color > a.navbar-theme').on("click",function(){var navbartheme=$(this).attr("navbar-theme");$('.pcoded-navbar').attr("navbar-theme",navbartheme);setCookie("navbar-theme",navbartheme,1);if(navbartheme=='themelight1'){$('.pcoded').attr("sidebar-img","false");$('.pcoded-navigation-label').attr("menu-title-theme","theme8");$('.profile-notification').attr("active-item-theme","theme1");setCookie("sidebar-img","false",1);setCookie("menu-title-theme","theme8",1);setCookie("active-item-theme","theme1",1);}
if(navbartheme=='theme1'){$('.pcoded').attr("sidebar-img","false");$('.pcoded-navigation-label').attr("menu-title-theme","theme1");$('.profile-notification').attr("active-item-theme","theme1");setCookie("sidebar-img","false",1);setCookie("menu-title-theme","theme1",1);setCookie("active-item-theme","theme1",1);}});};handlenavbartheme();function handleactiveitemtheme(){$('.theme-color > a.active-item-theme').on("click",function(){var activeitemtheme=$(this).attr("active-item-theme");$('.pcoded-navbar').attr("active-item-theme",activeitemtheme);$('.profile-notification').attr("active-item-theme",activeitemtheme);setCookie("active-item-theme",activeitemtheme,1);});};handleactiveitemtheme();function handlethemebgpattern(){$('.theme-color > a.themebg-pattern').on("click",function(){var themebgpattern=$(this).attr("themebg-pattern");$('body').attr("themebg-pattern",themebgpattern);setCookie("themebg-pattern",themebgpattern,1);});};handlethemebgpattern();function handlethemeverticallayout(){$('#theme-layout').change(function(){if($(this).is(":checked")){$('.pcoded').attr('vertical-layout',"box");setCookie('vertical-layout',"box",1);$('#bg-pattern-visiblity').removeClass('d-none');}else{$('.pcoded').attr('vertical-layout',"wide");setCookie('vertical-layout',"wide",1);$('#bg-pattern-visiblity').addClass('d-none');}});};handlethemeverticallayout();function handleverticalMenueffect(){$('#vertical-menu-effect').val('shrink').on('change',function(get_value){get_value=$(this).val();$('.pcoded').attr('vertical-effect',get_value);setCookie('vertical-effect',get_value);});};handleverticalMenueffect();function handleVerticalDropDownIconStyle(){$('#vertical-dropdown-icon').val('style1').on('change',function(get_value){get_value=$(this).val();$('.pcoded-navbar .pcoded-hasmenu').attr('dropdown-icon',get_value);setCookie("menu_drp_icon",get_value,noofdays);});};handleVerticalDropDownIconStyle();function handleVerticalSubMenuItemIconStyle(){$('#vertical-subitem-icon').val('style5').on('change',function(get_value){get_value=$(this).val();$('.pcoded-navbar .pcoded-hasmenu').attr('subitem-icon',get_value);setCookie("menu_item_icon",get_value,noofdays);});};handleVerticalSubMenuItemIconStyle();function handlesidebarposition(){$('#sidebar-position').change(function(){if($(this).is(":checked")){$('.pcoded-navbar').attr("pcoded-navbar-position",'fixed');setCookie("menu_pos",'fixed',noofdays);}else{$('.pcoded-navbar').attr("pcoded-navbar-position",'absolute');setCookie("menu_pos",'absolute',noofdays);}});};handlesidebarposition();function handleheaderposition(){$('#header-position').change(function(){if($(this).is(":checked")){$('.pcoded-header').attr("pcoded-header-position",'fixed');$('.pcoded-navbar').attr("pcoded-header-position",'fixed');$('.pcoded-main-container').css('margin-top',$(".pcoded-header").outerHeight());setCookie("header_pos",'fixed',noofdays);}else{$('.pcoded-header').attr("pcoded-header-position",'relative');$('.pcoded-navbar').attr("pcoded-header-position",'relative');$('.pcoded-main-container').css('margin-top','0px');setCookie("header_pos",'relative',noofdays);}});};handleheaderposition();function handlecollapseLeftHeader(){$('#collapse-left-header').change(function(){if($(this).is(":checked")){$('.pcoded-header, .pcoded ').removeClass('iscollapsed');$('.pcoded-header, .pcoded').addClass('nocollapsed');}else{$('.pcoded-header, .pcoded').addClass('iscollapsed');$('.pcoded-header, .pcoded').removeClass('nocollapsed');}});};handlecollapseLeftHeader();});function handlemenutype(get_value){$('.pcoded').attr('nav-type',get_value);$('.pcoded').attr('nav-type',get_value);};handlemenutype("st2");