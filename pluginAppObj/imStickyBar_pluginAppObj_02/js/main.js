function overlaymenu_imStickyBar_pluginAppObj_02(wsx5Data){var resizeTimeout;var debounce_timer;var _body=$('body'),_menuId=wsx5Data.id,_siteNodes={},_clPage="imPage",_clLevel="imLevel",_selectionClass="imMnMnCurrent",_typePage="page",_typeLevel="level",_triggerBttn=$("#"+wsx5Data.id+" .trigger-overlay"),_boxWrapper=$('<div class="'+wsx5Data.id+'_menuoverlay overlay-'+wsx5Data.param_effects+'"/>'),_firstClick=!0,_clickPause=!1,_boxBack=$('<div class="'+wsx5Data.id+'_menuoverlay_back"/>'),_boxClose=$('<div class="'+wsx5Data.id+'-overlay-close"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" xml:space="preserve"><g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M146.3,4961c-27.2-27.2-46.3-73.5-46.3-103.5c0-32.7,876.6-928.3,2346.6-2398.3L4795.8,110L2446.6-2239.3C840.4-3845.4,100-4604.9,100-4643c0-68.1,81.7-147,152.4-147c32.7,0,928.3,876.6,2398.3,2346.6L5000-94.2l2349.3-2349.3C8955.4-4049.6,9714.9-4790,9753-4790c68.1,0,147,81.7,147,152.4c0,32.7-876.6,928.3-2346.6,2398.3L5204.2,110l2349.3,2349.3C9159.5,4065.4,9900,4824.9,9900,4863c0,68.1-81.7,147-152.4,147c-32.7,0-928.3-876.6-2398.3-2346.6L5000,314.2L2650.7,2663.4C1044.6,4269.6,285.1,5010,247,5010C214.3,5010,170.8,4988.2,146.3,4961z"/></g></g></svg></div>'),_nav=$("<nav class=\"disable-scrollbars\"/>"),_ul=$("<ul />");_nav.append(_ul);x5engine.boot.push(function(){if(wsx5Data.preview){_siteNodes=[{"type":"page","label":"Page","destination":"#","onclick":"onclick=\"x5engine.utils.location('#', null, false); return false;\""},{"type":"page","label":"On mouseover","destination":"#","onclick":"onclick=\"x5engine.utils.location(' #', null, false); return false;\""},{"type":"page","label":"Current Page","destination":"#","onclick":"onclick=\"x5engine.utils.location('#', null, false); return false;\""}]}
else if(1>0){_siteNodes=[{"type":"page","id":0,"parentId":1,"label":"HOME PAGE","destination":"http://localhost/index.html","isWorking":false,"isHidden":false,"isLocked":false,"isSpecial":false,"isNotInMenuTree":false,"isHomePage":true,"pageType":"grid","grantedGroups":[],"grantedUsers":[],"position":0,"onclick":"onclick=\"x5engine.utils.location('http://localhost/index.html', null, false); return false;\"","paths":["/index.html","/"],"icon":""},{"type":"page","id":5,"parentId":1,"label":"JOURNEY","destination":"http://localhost/journey.html","isWorking":false,"isHidden":false,"isLocked":false,"isSpecial":false,"isNotInMenuTree":false,"isHomePage":false,"pageType":"grid","grantedGroups":[],"grantedUsers":[],"position":1,"onclick":"onclick=\"x5engine.utils.location('http://localhost/journey.html', null, false); return false;\"","paths":["/journey.html"],"icon":""},{"type":"page","id":4,"parentId":1,"label":"SHOP","destination":"http://localhost/shop.html","isWorking":false,"isHidden":false,"isLocked":false,"isSpecial":false,"isNotInMenuTree":false,"isHomePage":false,"pageType":"grid","grantedGroups":[],"grantedUsers":[],"position":2,"onclick":"onclick=\"x5engine.utils.location('http://localhost/shop.html', null, false); return false;\"","paths":["/shop.html"],"icon":""},{"type":"page","id":3,"parentId":1,"label":"CONTACT","destination":"http://localhost/contact.html","isWorking":false,"isHidden":false,"isLocked":false,"isSpecial":false,"isNotInMenuTree":false,"isHomePage":false,"pageType":"grid","grantedGroups":[],"grantedUsers":[],"position":3,"onclick":"onclick=\"x5engine.utils.location('http://localhost/contact.html', null, false); return false;\"","paths":["/contact.html"],"icon":""}]}
attachElementForEffect();_boxWrapper.append(_boxBack);_boxWrapper.append(_boxClose);_boxWrapper.append(_nav);_body.append(_boxWrapper);if(wsx5Data.preview){initPW()}
else{init()}
inizializeToggleOverlay();$(_triggerBttn).click(function(e){if(!_clickPause){_clickPause=!0;if(!wsx5Data.preview){$("."+_menuId+"_menuoverlay nav > ul").empty();init()}
$("#"+_menuId+" .hamburger-button").removeClass("show").addClass("hide");setTimeout(function(){toggleOverlay(e);scrollingShadows();$(_body).addClass("menuoverlay_overflow_"+_menuId);_clickPause=!1},350)}});$(_boxClose).click(function(e){if(!_clickPause){_clickPause=!0;$(_body).removeClass("menuoverlay_overflow_"+_menuId);toggleOverlay(e);setTimeout(function(){$("#"+_menuId+" .hamburger-button").removeClass("hide").addClass("show");_clickPause=!1},(wsx5Data.anim_duration+200))}});$(window).resize(function(){if(!!resizeTimeout){clearTimeout(resizeTimeout)}
resizeTimeout=setTimeout(function(){scrollingShadows()},250);$(_nav).scroll(function(){if(debounce_timer){window.clearTimeout(debounce_timer)}
debounce_timer=window.setTimeout(function(){scrollingShadows()},100)})});function initPW(){var count=0;var uiPreviewNodeSelect=!1;for(var key in _siteNodes){var node=_siteNodes[key];var li=$('<li />');li.addClass(_clPage).append("<div class='label-wrapper'><div class='label-inner-wrapper'><a href='#' class='label'>"+node.label+"</a></div></div>");_ul.append(li);if(count==1){li.addClass("pwHover")}
else{if(count==2){li.addClass("imMnMnCurrent")}
li.addClass("pwNotHover")}
count++}
$("."+_menuId+"_menuoverlay nav").addClass("max-three");$("."+_menuId+"_menuoverlay ul li").css("height",(100/count)+"%")}
function init(){var count=0;var uiPreviewNodeSelect=!1;for(var key in _siteNodes){var node=_siteNodes[key];var li=$('<li />');var added=!1;if(node.isHidden||node.isWorking||node.isLocked||node.isNotInMenuTree||node.pageType=="search"){continue}
if(node.type==_typePage){li.addClass(_clPage).append("<div class='label-wrapper'><div class='label-inner-wrapper'><a href='"+(wsx5Data.preview?"#":node.destination)+"' class='label' data-key='"+key+"'>"+node.label+"</a></div></div>");_ul.append(li);added=!0}
else if(node.type==_typeLevel){if(!!node.onclick){li.addClass(_clLevel).append("<div class='label-wrapper'><div class='label-inner-wrapper'><a href='#' class='label' data-key='"+key+"' "+(wsx5Data.preview?"#":node.onclick)+">"+node.label+"</a></div></div>");_ul.append(li);added=!0}}
if(added){if(!!node.anchor){li.attr("data-link-anchor",node.anchor)}
if(!!node.hash){li.attr("data-link-hash",node.hash)}
if(!!node.paths){var p="";for(var i=0;i<node.paths.length;i++){p+=node.paths[i]+","}
li.attr("data-link-paths",p.slice(0,-1))}
if(wsx5Data.preview){if(!uiPreviewNodeSelect){li.attr("data-current-page",!0);uiPreviewNodeSelect=!0}
else{li.attr("data-current-page",!1)}}
else{li.attr("data-current-page",x5engine.utils.isCurrentPage(node.paths,node.anchor))}
count++}}
if(count>0){if(count>7)$("."+_menuId+"_menuoverlay nav").addClass("plus-eight");else if(count>5)$("."+_menuId+"_menuoverlay nav").addClass("plus-five");else if(count>3)$("."+_menuId+"_menuoverlay nav").addClass("plus-three");else $("."+_menuId+"_menuoverlay nav").addClass("max-three");$("."+_menuId+"_menuoverlay ul li").css("height",(100/count)+"%")}
$("."+_menuId+"_menuoverlay ul li").each(function(){var $this=$(this),selectionClass="imMnMnCurrent",anchor=$this.attr("data-link-anchor"),hash=$this.attr("data-link-hash"),$hash=$("[data-link-hash="+hash+"]"),selectPath=function(clean){if(!!clean){$('body').find("ul li.imPage."+selectionClass+" , ul li.imLevel."+selectionClass).removeClass(selectionClass);$this.parent("ul").find("."+selectionClass).attr("data-current-page",!1)}
$this.add($this.add($hash).parents("li")).add($hash).addClass(selectionClass)};if(!!anchor){$this.on("click",function(){selectPath(!0);$(_boxClose).trigger("click")})}
if($this.attr("data-current-page")==="true"){selectPath()}})}
function attachElementForEffect(){if(wsx5Data.param_effects=="boxes"){var svgBoxes="<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"100%\" height=\"101%\" viewBox=\"0 0 1440 806\" preserveAspectRatio=\"none\"><path d=\"m0.005959,200.364029l207.551124,0l0,204.342453l-207.551124,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m0.005959,400.45401l207.551124,0l0,204.342499l-207.551124,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m0.005959,600.544067l207.551124,0l0,204.342468l-207.551124,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m205.752151,-0.36l207.551163,0l0,204.342437l-207.551163,0l0,-204.342437z\" style=\"display: none;\"><\/path><path d=\"m204.744629,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m204.744629,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m204.744629,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m410.416046,-0.36l207.551117,0l0,204.342437l-207.551117,0l0,-204.342437z\" style=\"display: none;\"><\/path><path d=\"m410.416046,200.364029l207.551117,0l0,204.342453l-207.551117,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m410.416046,400.45401l207.551117,0l0,204.342499l-207.551117,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m410.416046,600.544067l207.551117,0l0,204.342468l-207.551117,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m616.087402,-0.36l207.551086,0l0,204.342437l-207.551086,0l0,-204.342437z\" style=\"display: none;\"><\/path><path d=\"m616.087402,200.364029l207.551086,0l0,204.342453l-207.551086,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m616.087402,400.45401l207.551086,0l0,204.342499l-207.551086,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m616.087402,600.544067l207.551086,0l0,204.342468l-207.551086,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m821.748718,-0.36l207.550964,0l0,204.342437l-207.550964,0l0,-204.342437z\" style=\"display: none;\"><\/path><path d=\"m821.748718,200.364029l207.550964,0l0,204.342453l-207.550964,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m821.748718,400.45401l207.550964,0l0,204.342499l-207.550964,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m821.748718,600.544067l207.550964,0l0,204.342468l-207.550964,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m1027.203979,-0.36l207.550903,0l0,204.342437l-207.550903,0l0,-204.342437z\" style=\"display: none;\"><\/path><path d=\"m1027.203979,200.364029l207.550903,0l0,204.342453l-207.550903,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m1027.203979,400.45401l207.550903,0l0,204.342499l-207.550903,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m1027.203979,600.544067l207.550903,0l0,204.342468l-207.550903,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m1232.659302,-0.36l207.551147,0l0,204.342437l-207.551147,0l0,-204.342437z\" style=\"display: none;\"><\/path><path d=\"m1232.659302,200.364029l207.551147,0l0,204.342453l-207.551147,0l0,-204.342453z\" style=\"display: none;\"><\/path><path d=\"m1232.659302,400.45401l207.551147,0l0,204.342499l-207.551147,0l0,-204.342499z\" style=\"display: none;\"><\/path><path d=\"m1232.659302,600.544067l207.551147,0l0,204.342468l-207.551147,0l0,-204.342468z\" style=\"display: none;\"><\/path><path d=\"m-0.791443,-0.360001l207.551163,0l0,204.342438l-207.551163,0l0,-204.342438z\" style=\"display: none;\"><\/path><\/svg>";_boxWrapper.append(svgBoxes)}
else if(wsx5Data.param_effects=="cornershape"){var svgCornerShape="<svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"100%\" height=\"100%\" viewBox=\"0 0 1440 806\" preserveAspectRatio=\"none\"><path class=\"overlay-path\" d=\"m 0,0 1439.999975,0 0,805.99999 0,-805.99999 z\"><\/path>";if(false){var image="../../../";svgCornerShape+="<defs><pattern id=\"imgpattern\" x=\"0\" y=\"0\" width=\"100%\" height=\"100%\"><image width=\"100%\" height=\"100%\" xmlns:xlink=\"http:\/\/www.w3.org/1999/xlink\" xlink:href=\""+image+"\"></image></pattern></defs>"}
svgCornerShape+="<\/svg>";_boxWrapper.append(svgCornerShape);$(_boxWrapper).attr("data-path-to","m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z")}
else if(wsx5Data.param_effects=="genie"){var svgGenie='<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1440 806" preserveAspectRatio="none"><path class="overlay-path" d="m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z"/></svg>';_boxWrapper.append(svgGenie);$(_boxWrapper).attr("data-steps","m 701.56545,809.01175 35.16718,0 0,19.68384 -35.16718,0 z;m 698.9986,728.03569 41.23353,0 -3.41953,77.8735 -34.98557,0 z;m 687.08153,513.78234 53.1506,0 C 738.0505,683.9161 737.86917,503.34193 737.27015,806 l -35.90067,0 c -7.82727,-276.34892 -2.06916,-72.79261 -14.28795,-292.21766 z;m 403.87105,257.94772 566.31246,2.93091 C 923.38284,513.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 455.17312,480.07689 403.87105,257.94772 z;M 51.871052,165.94772 1362.1835,168.87863 C 1171.3828,653.78233 738.73561,372.23931 737.27015,806 l -35.90067,0 C 701.32034,404.49318 31.173122,513.78234 51.871052,165.94772 z;m 52,26 1364,4 c -12.8007,666.9037 -273.2644,483.78234 -322.7299,776 l -633.90062,0 C 359.32034,432.49318 -6.6979288,733.83462 52,26 z;m 0,0 1439.999975,0 0,805.99999 -1439.999975,0 z")}}
function scrollingShadows(){if(_nav[0].scrollHeight>Math.ceil(_nav.innerHeight())){_nav.addClass("scrollingshadows");var wUl=parseInt(_ul.css("width").replace("px",""))*1.5;if(_nav[0].scrollTop==0){_nav.css("background-size",wUl+"px 0px, "+wUl+"px 16px")}
else if(parseInt(_nav[0].scrollTop+$(_nav).height()+1)>=_nav[0].scrollHeight){_nav.css("background-size",wUl+"px 16px, "+wUl+"px 0px")}
else{_nav.css("background-size",wUl+"px 16px, "+wUl+"px 16px")}}
else{_nav.removeClass("scrollingshadows");_nav.css("background-size","")}}});var _overlayBoxWrapper;var _transEndEventName;var support;var _s,_path,_pathConfig={};var _steps,_stepsTotal;function inizializeToggleOverlay(){_overlayBoxWrapper=document.querySelector('.'+wsx5Data.id+'_menuoverlay'),_transEndEventName=getTransEndEventNames(),support={transitions:Modernizr.csstransitions};switch(wsx5Data.param_effects){case "cornershape":_s=Snap(_overlayBoxWrapper.querySelector('svg')),_path=_s.select('path'),_pathConfig={from:_path.attr('d'),to:_overlayBoxWrapper.getAttribute('data-path-to')};break;case "genie":_s=Snap(_overlayBoxWrapper.querySelector('svg')),_path=_s.select('path'),_steps=_overlayBoxWrapper.getAttribute('data-steps').split(';'),_stepsTotal=_steps.length;break}}
function getTransEndEventNames(){var transEndEventNames={'WebkitTransition':'webkitTransitionEnd','MozTransition':'transitionend','OTransition':'oTransitionEnd','msTransition':'MSTransitionEnd','transition':'transitionend'}
return transEndEventNames[Modernizr.prefixed('transition')]}
function toggleOverlay(e){switch(wsx5Data.param_effects){case "boxes":toggleOverlayBoxes();break;case "cornershape":toggleOverlayCornerShape();break;case "contentpush":case "contentscale":toggleOverlayContentPushAndContentScale();break;case "genie":toggleOverlayGenie();break;default:toggleOverlayDef(e)}}
function toggleOverlayDef(e){if(classie.has(_overlayBoxWrapper,'open')){classie.remove(_overlayBoxWrapper,'open');classie.add(_overlayBoxWrapper,'close');var onEndTransitionFn=function(ev){if(support.transitions){if(ev.propertyName!=='visibility')return;this.removeEventListener(_transEndEventName,onEndTransitionFn)}
classie.remove(_overlayBoxWrapper,'close')};if(support.transitions){_overlayBoxWrapper.addEventListener(_transEndEventName,onEndTransitionFn)}
else{onEndTransitionFn()}}
else if(!classie.has(_overlayBoxWrapper,'close')){classie.add(_overlayBoxWrapper,'open')}}
var shuffle=function shuffle(array){var currentIndex=array.length,temporaryValue,randomIndex;while(0!==currentIndex){randomIndex=Math.floor(Math.random()*currentIndex);currentIndex-=1;temporaryValue=array[currentIndex];array[currentIndex]=array[randomIndex];array[randomIndex]=temporaryValue}
return array}
function toggleOverlayBoxes(){var paths=[].slice.call(_overlayBoxWrapper.querySelectorAll('svg > path')),pathsTotal=paths.length;var nav=document.querySelector('.'+wsx5Data.id+'_menuoverlay.overlay-boxes nav');var close=document.querySelector('.'+wsx5Data.id+'_menuoverlay.overlay-boxes .'+wsx5Data.id+'-overlay-close');var cnt=0;shuffle(paths);if(classie.has(_overlayBoxWrapper,'open')){classie.remove(_overlayBoxWrapper,'open');classie.add(_overlayBoxWrapper,'close');paths.forEach(function(p,i){setTimeout(function(){++cnt;p.style.display='none';if(cnt===pathsTotal){classie.remove(_overlayBoxWrapper,'close')}},i*40)})}
else if(!classie.has(_overlayBoxWrapper,'close')){classie.add(nav,'hide');classie.add(close,'hide');classie.add(_overlayBoxWrapper,'open');var itemsProcessed=0;paths.forEach(function(p,i){setTimeout(function(){++cnt;p.style.display='block';if(cnt===pathsTotal){classie.remove(nav,'hide');classie.remove(close,'hide')}},i*40)})}}
function toggleOverlayCornerShape(){if(classie.has(_overlayBoxWrapper,'open')){classie.remove(_overlayBoxWrapper,'open');classie.add(_overlayBoxWrapper,'close');var onEndTransitionFn=function(ev){classie.remove(_overlayBoxWrapper,'close')};_path.animate({'path':_pathConfig.from},wsx5Data.anim_duration,mina.linear,onEndTransitionFn)}
else if(!classie.has(_overlayBoxWrapper,'close')){classie.add(_overlayBoxWrapper,'open');_path.animate({'path':_pathConfig.to},wsx5Data.anim_duration,mina.linear)}}
function toggleOverlayContentPushAndContentScale(){var html=document.querySelector('html');var body=document.querySelector('body');var container=wsx5Data.preview?document.querySelector('#imPage'):document.querySelector('#imPageExtContainer');var clDoc='menu-overlay-'+wsx5Data.param_effects;if(classie.has(_overlayBoxWrapper,'open')){classie.remove(_overlayBoxWrapper,'open');classie.remove(container,'overlay-open');setTimeout(function(){classie.remove(container,clDoc);classie.remove(body,clDoc);classie.remove(html,clDoc)},(wsx5Data.anim_duration+200));classie.add(_overlayBoxWrapper,'close');var onEndTransitionFn=function(ev){if(support.transitions){if(ev.propertyName!=='visibility')return;this.removeEventListener(_transEndEventName,onEndTransitionFn)}
classie.remove(_overlayBoxWrapper,'close')};if(support.transitions){_overlayBoxWrapper.addEventListener(_transEndEventName,onEndTransitionFn)}
else{onEndTransitionFn()}}
else if(!classie.has(_overlayBoxWrapper,'close')){classie.add(html,clDoc);classie.add(body,clDoc);classie.add(_overlayBoxWrapper,'open');classie.add(container,clDoc);classie.add(container,'overlay-open')}}
function toggleOverlayGenie(){if(classie.has(_overlayBoxWrapper,'open')){var pos=_stepsTotal-1;classie.remove(_overlayBoxWrapper,'open');classie.add(_overlayBoxWrapper,'close');var onEndTransitionFn=function(ev){classie.remove(_overlayBoxWrapper,'close')},nextStep=function(pos){pos--;if(pos<0)return;_path.animate({'path':_steps[pos]},60,mina.linear,function(){if(pos===0){onEndTransitionFn()}
nextStep(pos)})};nextStep(pos)}
else if(!classie.has(_overlayBoxWrapper,'close')){var pos=0;classie.add(_overlayBoxWrapper,'open');var nextStep=function(pos){pos++;if(pos>_stepsTotal-1)return;_path.animate({'path':_steps[pos]},60,mina.linear,function(){nextStep(pos)})};nextStep(pos)}}}