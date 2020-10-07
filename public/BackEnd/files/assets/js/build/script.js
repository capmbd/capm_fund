"use strict";$(document).ready(function(){$(".card-header-right .close-card").on('click',function(){var $this=$(this);$this.parents('.card').animate({'opacity':'0','-webkit-transform':'scale3d(.3, .3, .3)','transform':'scale3d(.3, .3, .3)'});setTimeout(function(){$this.parents('.card').remove();},800);});$(".card-header-right .reload-card").on('click',function(){var $this=$(this);$this.parents('.card').addClass("card-load");$this.parents('.card').append('<div class="card-loader"><i class="feather icon-radio rotate-refresh"></div>');setTimeout(function(){$this.parents('.card').children(".card-loader").remove();$this.parents('.card').removeClass("card-load");},3000);});$(".card-header-right .card-option .open-card-option").on('click',function(){var $this=$(this);if($this.hasClass('icon-x')){$this.parents('.card-option').animate({'width':'30px',});$this.parents('.card-option').children('li').children(".open-card-option").removeClass("icon-x").fadeIn('slow');$this.parents('.card-option').children('li').children(".open-card-option").addClass("icon-chevron-left").fadeIn('slow');$this.parents('.card-option').children(".first-opt").fadeIn();}else{$this.parents('.card-option').animate({'width':'130px',});$this.parents('.card-option').children('li').children(".open-card-option").addClass("icon-x").fadeIn('slow');$this.parents('.card-option').children('li').children(".open-card-option").removeClass("icon-chevron-left").fadeIn('slow');$this.parents('.card-option').children(".first-opt").fadeOut();}});$(".card-header-right .minimize-card").on('click',function(){var $this=$(this);var port=$($this.parents('.card'));var card=$(port).children('.card-block').slideToggle();$(this).toggleClass("icon-minus").fadeIn('slow');$(this).toggleClass("icon-plus").fadeIn('slow');});$(".card-header-right .full-card").on('click',function(){var $this=$(this);var port=$($this.parents('.card'));port.toggleClass("full-card");$(this).toggleClass("icon-minimize");$(this).toggleClass("icon-maximize");});$("#more-details").on('click',function(){$(".more-details").slideToggle(500);});$(".mobile-options").on('click',function(){$(".navbar-container .nav-right").slideToggle('slow');});$(".search-btn").on('click',function(){$(".main-search").addClass('open');$('.main-search .form-control').animate({'width':'200px',});});$(".search-close").on('click',function(){$('.main-search .form-control').animate({'width':'0',});setTimeout(function(){$(".main-search").removeClass('open');},300);});$("#styleSelector .style-cont").slimScroll({setTop:"1px",height:"calc(100vh - 270px)",});var a=$(window).height()-80;$(".main-friend-list").slimScroll({height:a,allowPageScroll:false,wheelStep:5});var a=$(window).height()-155;$(".main-friend-chat").slimScroll({height:a,allowPageScroll:false,wheelStep:5});$("#search-friends").on("keyup",function(){var g=$(this).val().toLowerCase();$(".userlist-box .media-body .chat-header").each(function(){var s=$(this).text().toLowerCase();$(this).closest('.userlist-box')[s.indexOf(g)!==-1?'show':'hide']();});});$('.displayChatbox').on('click',function(){var my_val=$('.pcoded').attr('vertical-placement');if(my_val=='right'){var options={direction:'left'};}else{var options={direction:'right'};}
$('.showChat').toggle('slide',options,500);});$('.userlist-box').on('click',function(){var my_val=$('.pcoded').attr('vertical-placement');if(my_val=='right'){var options={direction:'left'};}else{var options={direction:'right'};}
$('.showChat_inner').toggle('slide',options,500);});$('.back_chatBox').on('click',function(){var my_val=$('.pcoded').attr('vertical-placement');if(my_val=='right'){var options={direction:'left'};}else{var options={direction:'right'};}
$('.showChat_inner').toggle('slide',options,500);$('.showChat').css('display','block');});$('.back_friendlist').on('click',function(){var my_val=$('.pcoded').attr('vertical-placement');if(my_val=='right'){var options={direction:'left'};}else{var options={direction:'right'};}
$('.p-chat-user').toggle('slide',options,500);$('.showChat').css('display','block');});$('[data-toggle="tooltip"]').tooltip();Waves.init();Waves.attach('.flat-buttons',['waves-button']);Waves.attach('.float-buttons',['waves-button','waves-float']);Waves.attach('.float-button-light',['waves-button','waves-float','waves-light']);Waves.attach('.flat-buttons',['waves-button','waves-float','waves-light','flat-buttons']);$('.form-control').on('blur',function(){if($(this).val().length>0){$(this).addClass("fill");}else{$(this).removeClass("fill");}});$('.form-control').on('focus',function(){$(this).addClass("fill");});setTimeout(function(){var enjoyhint_instance=new EnjoyHint({});var enjoyhint_script_steps=[{'click .step1':'click Hear to Customize Dash Able Layout','shape':'circle','radius':60},{'next .step2':'click to Change theme layout','timeout':400,},{'next .step3':'click Hear to Change layout color',},{'click .step4':'click Hear to Export layout'},];enjoyhint_instance.set(enjoyhint_script_steps);enjoyhint_instance.run();},1000);});function toggleFullScreen(){var a=$(window).height()-10;if(!document.fullscreenElement&&!document.mozFullScreenElement&&!document.webkitFullscreenElement){if(document.documentElement.requestFullscreen){document.documentElement.requestFullscreen();}else if(document.documentElement.mozRequestFullScreen){document.documentElement.mozRequestFullScreen();}else if(document.documentElement.webkitRequestFullscreen){document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);}}else{if(document.cancelFullScreen){document.cancelFullScreen();}else if(document.mozCancelFullScreen){document.mozCancelFullScreen();}else if(document.webkitCancelFullScreen){document.webkitCancelFullScreen();}}
$('.full-screen').toggleClass('icon-maximize');$('.full-screen').toggleClass('icon-minimize');}
$('#styleSelector').append(''+
'<div class="selector-toggle">'+
'<a href="javascript:void(0)" class="step1"><span class="m-ring"></span></a>'+
'</div>'+
'<ul>'+
'<li>'+
'<p class="selector-title main-title st-main-title"><b>Dash Able Customizer</b></p>'+
'</li>'+
'<li class="step2">'+
'<div class="p-l-10 p-r-10">'+
'<div class="theme-color">'+
'<a href="#" data-toggle="tooltip" title="light Navbar" class="navbar-theme waves-effect waves-light" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" data-toggle="tooltip" title="Dark Navbar" class="navbar-theme waves-effect waves-light" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" data-toggle="tooltip" title="Navbar with image" class="Layout-type waves-effect waves-light" layout-type="img"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" data-toggle="tooltip" title="light Layout" class="Layout-type waves-effect waves-light" layout-type="light"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" data-toggle="tooltip" title="Dark Layout" class="Layout-type waves-effect waves-light" layout-type="dark"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" data-toggle="tooltip" title="Reset Default" class="Layout-type waves-effect waves-light" layout-type="reset"><i class="fas fa-power-off"></i></a>'+
'</div>'+
'</div>'+
'</li>'+
'</ul>'+
'<div class="style-cont m-t-10">'+
'<ul class="nav nav-tabs  tabs" role="tablist">'+
'<li class="nav-item waves-effect waves-light"><a class="nav-link active" data-toggle="tab" href="#tb-layout" role="tab">Layouts</a></li>'+
'<li class="nav-item waves-effect waves-light"><a class="nav-link" data-toggle="tab" href="#tb-sidebar" role="tab">Sidebar Settings</a></li>'+
'</ul>'+
'<div class="tab-content tabs">'+
'<div class="tab-pane active" id="tb-layout" role="tabpanel">'+
'<ul>'+
'<li class="theme-option">'+
'<div class="checkbox-fade fade-in-primary">'+
'<label>'+
'<input type="checkbox" value="false" id="theme-layout" name="vertical-item-border">'+
'<span class="cr"><i class="cr-icon fas fa-check txt-success f-w-600"></i></span>'+
'<span>Box Layout - with background color</span>'+
'</label>'+
'</div>'+
'</li>'+
'<li class="theme-option d-none" id="bg-pattern-visiblity">'+
'<div class="theme-color">'+
'<a href="#" class="themebg-pattern small waves-effect waves-light" themebg-pattern="theme1">&nbsp;</a>'+
'<a href="#" class="themebg-pattern small waves-effect waves-light" themebg-pattern="theme2">&nbsp;</a>'+
'<a href="#" class="themebg-pattern small waves-effect waves-light" themebg-pattern="theme3">&nbsp;</a>'+
'<a href="#" class="themebg-pattern small waves-effect waves-light" themebg-pattern="theme4">&nbsp;</a>'+
'<a href="#" class="themebg-pattern small waves-effect waves-light" themebg-pattern="theme5">&nbsp;</a>'+
'<a href="#" class="themebg-pattern small waves-effect waves-light" themebg-pattern="theme6">&nbsp;</a>'+
'</div>'+
'</li>'+
'<li class="theme-option">'+
'<div class="checkbox-fade fade-in-primary">'+
'<label>'+
'<input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked>'+
'<span class="cr"><i class="cr-icon fas fa-check txt-success f-w-600"></i></span>'+
'<span>Fixed Sidebar Position</span>'+
'</label>'+
'</div>'+
'</li>'+
'<li class="theme-option">'+
'<div class="checkbox-fade fade-in-primary">'+
'<label>'+
'<input type="checkbox" value="false" id="header-position" name="header-position" checked>'+
'<span class="cr"><i class="cr-icon fas fa-check txt-success f-w-600"></i></span>'+
'<span>Fixed Header Position</span>'+
'</label>'+
'</div>'+
'</li>'+
'</ul>'+
'</div>'+
'<div class="tab-pane" id="tb-sidebar" role="tabpanel">'+
'<ul>'+
'<li class="theme-option">'+
'<p class="sub-title drp-title">SideBar Effect</p>'+
'<select id="vertical-menu-effect" class="form-control minimal">'+
'<option name="vertical-menu-effect" value="shrink" selected>Shrink</option>'+
'<option name="vertical-menu-effect" value="overlay">Overlay</option>'+
'<option name="vertical-menu-effect" value="push">Push</option>'+
'</select>'+
'</li>'+
'<li class="theme-option">'+
'<p class="sub-title drp-title">Sub Menu Drop-down Icon</p>'+
'<select id="vertical-subitem-icon" class="form-control minimal">'+
'<option name="vertical-subitem-icon" value="style1" selected>Style 1</option>'+
'<option name="vertical-subitem-icon" value="style2">style 2</option>'+
'<option name="vertical-subitem-icon" value="style3">style 3</option>'+
'<option name="vertical-subitem-icon" value="style4">style 4</option>'+
'<option name="vertical-subitem-icon" value="style5">style 5</option>'+
'<option name="vertical-subitem-icon" value="style6">style 6</option>'+
'<option name="vertical-subitem-icon" value="style7">No Icon</option>'+
'</select>'+
'</li>'+
'</ul>'+
'</div>'+
'<ul>'+
'<li>'+
'<p class="selector-title">Header color</p>'+
'</li>'+
'<li class="theme-option step3">'+
'<div class="theme-color">'+
'<a href="#" class="header-theme waves-effect waves-light" header-theme="themelight1" active-item-color="theme1"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="header-theme waves-effect waves-light" header-theme="theme2" active-item-color="theme2"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="header-theme waves-effect waves-light" header-theme="theme3" active-item-color="theme3"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="header-theme waves-effect waves-light" header-theme="theme4" active-item-color="theme4"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="header-theme waves-effect waves-light" header-theme="theme5" active-item-color="theme5"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="header-theme waves-effect waves-light" header-theme="theme6" active-item-color="theme6"><span class="head"></span><span class="cont"></span></a>'+
'</div>'+
'</li>'+
'<li>'+
'<p class="selector-title">Header Brand color</p>'+
'</li>'+
'<li class="theme-option">'+
'<div class="theme-color">'+
'<a href="#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a>'+
'<a href="#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a>'+
'</div>'+
'</li>'+
'<li>'+
'<p class="selector-title">Navbar image</p>'+
'</li>'+
'<li class="theme-option">'+
'<div class="theme-color">'+
'<a href="#" class="navbg-pattern image waves-effect waves-light" navbg-pattern="img1">&nbsp;</a>'+
'<a href="#" class="navbg-pattern image waves-effect waves-light" navbg-pattern="img2">&nbsp;</a>'+
'<a href="#" class="navbg-pattern image waves-effect waves-light" navbg-pattern="img3">&nbsp;</a>'+
'<a href="#" class="navbg-pattern image waves-effect waves-light" navbg-pattern="img4">&nbsp;</a>'+
'<a href="#" class="navbg-pattern image waves-effect waves-light" navbg-pattern="img5">&nbsp;</a>'+
'<a href="#" class="navbg-pattern image waves-effect waves-light" navbg-pattern="img6">&nbsp;</a>'+
'</div>'+
'</li>'+
'<li>'+
'<p class="selector-title">Active link color</p>'+
'</li>'+
'<li class="theme-option">'+
'<div class="theme-color">'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme1">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme2">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme3">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme4">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme5">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme6">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme7">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme8">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme9">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme10">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme11">&nbsp;</a>'+
'<a href="#" class="active-item-theme small waves-effect waves-light" active-item-theme="theme12">&nbsp;</a>'+
'</div>'+
'</li>'+
'<li>'+
'<p class="selector-title">Menu Caption Color</p>'+
'</li>'+
'<li class="theme-option">'+
'<div class="theme-color">'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme1">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme2">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme3">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme4">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme5">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme6">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme7">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme8">&nbsp;</a>'+
'<a href="#" class="leftheader-theme small waves-effect waves-light" menu-caption="theme9">&nbsp;</a>'+
'</div>'+
'</li>'+
'</ul>'+
'</div>'+
'</div>'+
'<ul>'+
'<li class="text-center">'+
'<input type="submit" name="exp-btn" class="btn btn-danger btn-block m-t-20 step4" data-toggle="modal" data-target="#default-Modal" value="Export">'+
'</li>'+
'</ul>'+
'');