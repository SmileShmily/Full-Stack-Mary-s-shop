var $mvt=new Object({wU:"1.4.4",G:undefined,T:"length",z:document,M:{},O:"_mvq",w:function(b,a){this.Z=b;this.wL=a},wP:function(a){return($mvt.G==a)||("-"==a)||(""==a)},$IsEmpty:function(a){return $mvt.wP(a)},x:function(b,a){return b.indexOf(a)},wX:function(c,a,b){b=($mvt.G==b)?c[$mvt.T]:b;return c.substring(a,b)},wI:function(b,a){return $mvt.x(b,a)>-1},wo:function(e){var b=false,d=0,a,c;if(!$mvt.wP(e)){b=true;for(a=0;a<e[$mvt.T];a++){c=e.charAt(a);d+="."==c?1:0;b=b&&d<=1&&(0==a&&"-"==c||$mvt.wI(".0123456789",c))}}return b},Q:function(e){var b=1,c=0,a,d;if(!$mvt.wP(e)){b=0;for(a=e[$mvt.T]-1;a>=0;a--){d=e.charCodeAt(a);b=(b<<6&268435455)+d+(d<<14);c=b&266338304;b=(c!=0)?b^c>>21:b}}return b},U:function(e,a,d){var c="-",b,f;if(!$mvt.wP(e)&&!$mvt.wP(a)&&!$mvt.wP(d)){b=$mvt.x(e,a);if(b>-1){f=e.indexOf(d,b);if(f<0){f=e[$mvt.T]}c=$mvt.wX(e,b+$mvt.x(a,"=")+1,f)}}return c},$ExtractValue:function(c,a,b){return $mvt.U(c,a,b)},h:function(c,b){var a=encodeURIComponent;return a instanceof Function?(b?encodeURI(c):a(c)):escape(c)},o:function(e,c){var b=decodeURIComponent,a;e=e.split("+").join(" ");if(b instanceof Function){try{a=c?decodeURI(e):b(e)}catch(d){a=unescape(e)}}else{a=unescape(e)}return a},wE:function(a){return a&&a.hash?$mvt.wX(a.href,$mvt.x(a.href,"#")):""},m:function(a){return a[$mvt.T]>0&&$mvt.wI(" \n\r\t",a)},R:function(b,a){b[b[$mvt.T]]=a},wm:function(a){return a.toLowerCase()},wR:function(b,a){return b.split(a)},wd:function(){return Math.round(Math.random()*2147483647)},wF:function(){var b=$mvt.G;var a=window;if(a&&a.wk&&a.wk.B){b=a.wk.B}else{b=$mvt.wd();a.wk=a.wk?a.wk:{};a.wk.B=b}return b},Gb:function(){var c,b,a,h,e;var g=window;var f=$mvt.z;var d=navigator;c=f.cookie?f.cookie:"";b=g.history[$mvt.T];e=[d.appName,d.version,d.language?d.language:d.browserLanguage,d.platform,d.userAgent,d.javaEnabled()?1:0].join("");if(g.screen){e+=g.screen.width+"x"+g.screen.height+g.screen.colorDepth}else{if(g.java){h=java.Gw.Gy.Gl().GZ();e+=h.screen.width+"x"+h.screen.height}}e+=c;e+=f.referrer?f.referrer:"";a=e[$mvt.T];while(b>0){e+=b--^a++}return $mvt.Q(e)},Gt:function(){return($mvt.wd()^$mvt.Gb())*2147483647},GH:function(g,f){var d=(new Date).getTime();var c="jsonp"+d+Math.floor(Math.random()*10000);g=g+"&cb="+c;window[c]=window[c]||function(i){data=i;a();window[c]=undefined;try{delete window[c]}catch(h){}if(b){b.removeChild(e)}};var b=document.getElementsByTagName("head")[0]||document.documentElement;var e=document.createElement("script");e.src=g;b.insertBefore(e,b.firstChild);function a(){if(typeof(f)=="function"){f(data)}}}});$mvt.Gr=function(){GD=this;GD.Gi="http://tran.mediav.com/t";GD.Gg="http://pv.mediav.com/t";GD.GW="https://secure.mediav.com/t";GD.GQ="15768000";GD.GA="1800";GD.GV=[new $mvt.w("baidu","word"),new $mvt.w("baidu","wd"),new $mvt.w("google","q"),new $mvt.w("sogou","query"),new $mvt.w("zhongsou","w"),new $mvt.w("soso","w"),new $mvt.w("search.114.vnet.cn","kw"),new $mvt.w("youdao","q"),new $mvt.w("gougou","search"),new $mvt.w("bing","q"),new $mvt.w("msn","q"),new $mvt.w("live","q"),new $mvt.w("aol","query"),new $mvt.w("aol","q"),new $mvt.w("aol","encquery"),new $mvt.w("lycos","query"),new $mvt.w("ask","q"),new $mvt.w("altavista","q"),new $mvt.w("netscape","query"),new $mvt.w("cnn","query"),new $mvt.w("looksmart","qt"),new $mvt.w("about","terms"),new $mvt.w("pchome","q")];GD.GU="/";GD.GL=1;GD.GP=1;GD.Gv="|";GD.GX=1;GD.Gh=0;GD.Gf="auto"};$mvt.GI=function(l,d){var j=d;var k=l;var i=this;var h,f,o,e,a,g,r;function p(t){var s=(t instanceof Array)?t.join("."):"-";return $mvt.wP(s)?"-":s}function c(v,u){var t=[],s;if(!$mvt.wP(v)){t=$mvt.wR(v,".");if(u){for(s=0;s<t[$mvt.T];s++){if(!$mvt.wo(t[s])){t[s]="-"}}}}return t}function n(u){var t=new Date,s=new Date(t.getTime()+u);return"expires="+s.toGMTString()+"; "}function b(){return n(63072000000)}function m(s,t){k.cookie=s+"; path="+j.GU+"; "+t+i.TM()}function q(x,v,w){var u=i.Tl,t,s;for(t=0;t<u[$mvt.T];t++){s=u[t][0];s+=$mvt.wP(v)?v:v+u[t][4];u[t][2]($mvt.U(x,s,w))}}i.Tt=function(){return $mvt.G==r||r==i.TH()};i.Tx=function(){return r?r:"-"};i.TY=function(s){r=$mvt.wo(s)?s*1:"-"};i.Tq=function(){return p(h)};i.TC=function(s){h=c(s,true)};i.TK=function(){return p(f)};i.Tu=function(s){f=c(s,true)};i.TN=function(){return p(o)};i.Tr=function(s){o=c(s,true)};i.TD=function(){return p(e)};i.Ti=function(t){e=c(t);for(var s=0;s<e[$mvt.T];s++){if(s<4&&!$mvt.wo(e[s])){e[s]="-"}}};i.Tg=function(s){if(!$mvt.wP(s)){m("_jzqosr="+s,b())}};i.TW=function(){return p(a)};i.TQ=function(t){a=c(t);for(var s=0;s<a[$mvt.T];s++){if(s<4&&!$mvt.wo(a[s])){a[s]="-"}}};i.TA=function(){return p(g)};i.TV=function(t){g=c(t);for(var s=0;s<g[$mvt.T];s++){if(s<4&&!$mvt.wo(g[s])){g[s]="-"}}};i.TU=function(s,t){if(s=="_jzqx="){i.Ti(t);i.Tv()}else{if(s=="_jzqy="){i.TQ(t);i.TX()}else{if(s=="_jzqz="){i.TV(t);i.Th()}}}};i.TM=function(){return $mvt.wP(j.Gf)?"":"domain="+j.Gf+";"};i.Tf=function(){h=[];f=[];o=[];e=[];a=[];g=[];r=$mvt.G};i.TH=function(){var t="",s;for(s=0;s<i.Tl[$mvt.T];s++){t+=i.Tl[s][1]()}return $mvt.Q(t)};i.TI=function(u){var t=k.cookie,s=false;if(t){q(t,u,";");i.TY(i.TH());s=true}return s};i.TS=function(){m("_jzqa="+i.Tq(),b())};i.Ts=function(){m("_jzqb="+i.TK(),n(j.GA*1000))};i.Tp=function(){m("_jzqc="+i.TN(),"")};i.Tv=function(){m("_jzqx="+i.TD(),n(j.GQ*1000))};i.TX=function(){m("_jzqy="+i.TW(),n(j.GQ*1000))};i.Th=function(){m("_jzqz="+i.TA(),n(j.GQ*1000))};i.Tl=[["_jzqa=",i.Tq,i.TC,i.TS,"."],["_jzqb=",i.TK,i.Tu,i.Ts,""],["_jzqc=",i.TN,i.Tr,i.Tp,""],["_jzqx=",i.TD,i.Ti,i.Tv,""],["_jzqy=",i.TW,i.TQ,i.TX,"."],["_jzqz=",i.TA,i.TV,i.Th,""]]};$mvt.TE=function(b){var c=b;var d;var e=this;var a=false;var f;Td=function(i){var h=(new Date).getTime(),g;g=(h-i[3])*(0.2/1000);if(g>=1){i[2]=Math.min(Math.floor(i[2]*1+g),10);i[3]=h}return i};e.Tk=function(g){e.TR.Tk(g,e.TJ)};e.Tc=function(p,t,o,q,u,m){var k,l=o.location;if(!e.TJ){e.TJ=new $mvt.GI(o,c)}e.TJ.TI(q);k=$mvt.wR(e.TJ.TK(),".");if(k[1]<500||u){k[1]=k[1]*1+1;var n=$mvt.z.location.search;var s=$mvt.U(n,"_mvsrc=","&");var i=$mvt.U(n,"_mvcam=","&");var h=$mvt.z.cookie,g=$mvt.U(h,"_jzqosr=",";");e.Tm=e.Tm&&(k[4]=="0");p="?type="+(e.Tm?6:3)+"&db=none"+($mvt.wP(s)?"":"&pub="+s)+($mvt.wP(i)?"":"&cus="+i)+($mvt.wP(g)?"":"&jzqosr="+g)+"&jzqv="+$mvt.wU+"&jzqr="+$mvt.wd()+($mvt.wP(l.hostname)?"":"&jzqh="+$mvt.h(l.hostname))+"&jzqs="+t+"&jzqc="+e.zw(o,q,$mvt.wI(p,"jzqt=item"))+p;var j="";if("https:"==l.protocol){j=c.GW+p}else{j=(u?c.Gi:c.Gg)+p}if(e.Tm){e.Tk(j)}else{var r=new Image(1,1);r.src=j;r.onload=m||function(){}}}e.TJ.Tu(k.join("."));e.TJ.Ts()};e.zw=function(j,l,n){var k=[],i=["_jzqa=","_jzqx=","_jzqy=","_jzqz="],g,h=j.cookie,o;var m=i[$mvt.T];if(n){m=1}for(g=0;g<m;g++){o=$mvt.U(h,i[g]+l,";");if(!$mvt.wP(o)){$mvt.R(k,i[g]+o+";")}}return $mvt.h(k.join("+"))}};$mvt.zC=function(){this.zK=[]};$mvt.zC.zu=function(a,e,f,b,d){var c=this;c.zW=a;c.zQ=e;c.zA=f;c.zV=b;c.zU=d};$mvt.zC.zu.prototype.zL=function(){var a=this;return"&"+["jzqt=item","jzqo="+$mvt.h(a.zW),"jzqix="+$mvt.h(a.zQ),"jzqin="+$mvt.h(a.zA),"jzqip="+$mvt.h(a.zV),"jzqiq="+$mvt.h(a.zU)].join("&")};$mvt.zC.zP=function(a,c,b,f,g,d){var e=this;e.zW=a;e.zo=c;e.zS=b;e.zs=f;e.zp=g;e.zE=d;e.zJ=[]};$mvt.zC.zP.prototype.zm=function(e,f,a,d){var c=this;var b=c.zd(e);if($mvt.G==b){$mvt.R(c.zJ,new $mvt.zC.zu(c.zW,e,f,a,d))}else{b.zQ=e;b.zA=f;b.zV=a;b.zU=d}};$mvt.zC.zP.prototype.zd=function(d){var c=this;var b;for(var a=0;a<c.zJ[$mvt.T];a++){b=(d==c.zJ[a].zQ)?c.zJ[a]:b}return b};$mvt.zC.zP.prototype.zL=function(){var a=this;return"&jzqt=tran&jzqo="+$mvt.h(a.zW)+"&jzqot="+$mvt.h(a.zo)+($mvt.wP(a.zS)?"":"&jzqo1="+$mvt.h(a.zS))+($mvt.wP(a.zs)?"":"&jzqo2="+$mvt.h(a.zs))+($mvt.wP(a.zp)?"":"&jzqo3="+$mvt.h(a.zp))+($mvt.wP(a.zE)?"":"&jzqo4="+$mvt.h(a.zE))};$mvt.zC.prototype.zF=function(a,c,b,g,h,e){var f=this;var d=f.zk(a);if($mvt.G==d){d=new $mvt.zC.zP(a,c,b,g,h,e);$mvt.R(f.zK,d)}else{d.zo=c;d.zS=b;d.zs=g;d.zp=h;d.zE=e}return d};$mvt.zC.prototype.zk=function(b){var c;var d=this;for(var a=0;a<d.zK[$mvt.T];a++){c=(b==d.zK[a].zW)?d.zK[a]:c}return c};$mvt.zc=function(b){var a=b;var c=this;c.zB=!self.screen&&self.java?java.Gw.Gy.Gl():$mvt.G;c.zn="-";c.ze="-";c.Mb="-";c.MG="-";c.MT=1;c.Mz="-";function d(){var k,g=navigator?navigator.plugins:$mvt.G;var l;if(g&&g[$mvt.T]>0){for(var e=0;e<g[$mvt.T]&&!l;e++){k=g[e];if($mvt.wI(k.name,"Shockwave Flash")){l=$mvt.wR(k.description,"Shockwave Flash ")[1]}}}else{var f="ShockwaveFlash.ShockwaveFlash";var j="$version";var h;try{h=new ActiveXObject(f+".7");l=h.MH(j)}catch(i){}if(!l){try{h=new ActiveXObject(f+".6");l="WIN 6,0,21,0";h.Mx="always";l=h.MH(j)}catch(i){}}if(!l){try{h=new ActiveXObject(f);l=h.MH(j)}catch(i){}}if(l){l=$mvt.wR($mvt.wR(l," ")[1],",");l=l[0]+"."+l[1]+" r"+l[2]}}return l?l:"-"}c.Tf=function(){var e;var h=$mvt.z;var f=navigator;if(self.screen){c.zn=screen.width+"x"+screen.height;c.ze=screen.colorDepth+"-bit"}else{if(c.zB){try{e=c.zB.GZ();c.zn=e.width+"x"+e.height}catch(g){}}}c.MG=$mvt.wm(f&&f.language?f.language:(f&&f.browserLanguage?f.browserLanguage:"-"));c.MT=f&&f.javaEnabled()?1:0;c.Mz=a?d():"-";c.Mb=$mvt.h(h.characterSet?h.characterSet:(h.charset?h.charset:"-"))};c.zL=function(){return"&"+["jzqch="+$mvt.h(c.Mb),"jzqsc="+c.zn,"jzqco="+c.ze,"jzql="+c.MG,"jzqj="+c.MT,"jzqf="+$mvt.h(c.Mz)].join("&")}};$mvt.MY=function(m,l,f,e,h){var k=l;var q=m;var a=f;var p=e;var d=h;var g=this;var c=true;var b;var n;function o(r){return $mvt.wP(r)||"0"==r||!$mvt.wI(r,"://")}function j(s){var r="";s=$mvt.wm($mvt.wR(s,"://")[1]);if($mvt.wI(s,"/")){s=$mvt.wR(s,"/")[1];if($mvt.wI(s,"?")){r=$mvt.wR(s,"?")[0]}}return r}function i(s){var r="";r=$mvt.wm($mvt.wR(s,"://")[1]);if($mvt.wI(r,"/")){r=$mvt.wR(r,"/")[0]}return r}g.MV=function(t){var s=$mvt.U(t,"_mvsrc=","&");if($mvt.wP(s)){s=$mvt.U(t,"_mvmix=","&")}var r=new $mvt.MY.ML("(camp)",s,$mvt.U(t,"_mvcam=","&"));g.Mr=!g.MP(r);return r};g.Mv=function(t){var x,u,w=t||a,r,v,s=d.GV;if(o(w)){return}x=i(w);for(r=0;r<s[$mvt.T];r++){v=s[r];if($mvt.wI(x,$mvt.wm(v.Z))){w=$mvt.wR(w,"?").join("&");if($mvt.wI(w,"&"+v.wL+"=")){u=$mvt.wR(w,"&"+v.wL+"=")[1];if($mvt.wI(u,"&")){u=$mvt.wR(u,"&")[0]}return new $mvt.MY.ML("(search)",v.Z,u)}}}};g.Mo=function(s){var r="",t="",u=s||a;if(o(u)){return}r=$mvt.wm($mvt.wR(u,"://")[1]);if($mvt.wI(r,"/")){t=$mvt.wX(r,$mvt.x(r,"/"));if($mvt.wI(t,"?")){t=$mvt.wR(t,"?")[0]}r=$mvt.wR(r,"/")[0]}if(0==$mvt.x(r,"www.")){r=$mvt.wX(r,4)}return new $mvt.MY.ML("(ref)",r,t)};g.Mp=function(s){var r="";r+=s.search;return r};g.MP=function(r){return $mvt.G!=r&&r.MJ()};g.Mm=function(x,z,r,w,v,A){var B,s,u=1,y;if(A==$mvt.G){A=p}x=x||b;if(!g.MP(w)){return false}if("_jzqz="==r){g.Ob(x,"1")}B=$mvt.U(z,r+q+".",";");if($mvt.wP(B)){x.TU(r,[q,A,A,u,w.zL(),"-"].join("."));return true}s=$mvt.wR(B,".");var t=new $mvt.MY.ML;if($mvt.wP(s[5])){t.Tf(s.slice(4,5).join("."))}else{t.Tf(s.slice(5).join("."))}y=$mvt.wm(t.zL())==$mvt.wm(w.zL());u=s[3]*1;if(!y||v){if(!y){u++;x.TU(r,[q,s[1],A,u,s[4],w.zL()].join("."))}else{x.TU(r,[q,s[1],A,u,s[4],s[5]].join("."))}}return true};g.OT=function(z,x){var w="",y,t,v=1,A,B;var s="-",r="-",u="-";z=z||b;b=z;g.Mi=x;B=k.cookie?k.cookie:"";w=g.Mp(k.location);y=g.MV(w);g.Mm(z,B,"_jzqz=",y,x);y=g.Mv();if(g.Mm(z,B,"_jzqy=",y,x)){return""}if(!x){return""}y=g.Mo();g.Mm(z,B,"_jzqx=",y,x);return""};g.Ob=function(t,s){var r=$mvt.wR(t.TK(),".");r[4]=s;t.Tu(r.join("."));t.Ts()};g.Tk=function(s,r){$mvt.GH(s,function(A){try{if($mvt.OZ){return}A="status="+A.replace("_mvctn=","");var w=$mvt.U(A,"status=","&");if(w=="0"){var x=g.Mi;var B=k.cookie?k.cookie:"";var y=A;var z=g.MV(y);var C=$mvt.U(y,"time=","&");var v=$mvt.U(y,"rdom=","&");var u=$mvt.U(y,"osr=","&");r.Tg(u);g.Mm(r,B,"_jzqz=",z,x,C);try{v=decodeURIComponent(v)}catch(t){v=""}if(v!=""){z=g.Mv(v);g.Mm(r,B,"_jzqy=",z,x,C);z=g.Mo(v);g.Mm(r,B,"_jzqx=",z,x,C)}}if(w!="2"){g.Ob(r,1)}}catch(t){}$mvt.OZ=1})}};$mvt.MY.ML=function(c,a,b){this.OK=a;this.Ou=b};$mvt.MY.ML.prototype.zL=function(){var c=this;var b=[],e=[["jzqsr=",c.OK],["jzqct=",c.Ou]],a,d;if(c.MJ()){for(a=0;a<e[$mvt.T];a++){if(!$mvt.wP(e[a][1])){d=e[a][1].split("+").join("%20");d=d.split(" ").join("%20");d=d.split(".").join("%2E");d=d.split("|").join("%7C");$mvt.R(b,e[a][0]+d)}}}return b.join("|")};$mvt.MY.ML.prototype.MJ=function(){return !($mvt.wP(this.OK)&&$mvt.wP(this.Ou))};$mvt.MY.ML.prototype.Tf=function(a){OD=function(b){return $mvt.U(a,b,"|")};this.OK=OD("jzqsr=");this.Ou=OD("jzqct=")};$mvt.$site=function($s,$g){var b=this,a=$mvt.G,c=new $mvt.Gr,g=false;b.Mc=Math.round((new Date).getTime()/1000);b.OQ=$s;b.referrer=$mvt.z.referrer;b.OA=$mvt.G;b.OV=$mvt.G;b.Mk=false;b.OU=$mvt.G;b.OL=$mvt.G;b.OP=$mvt.G;function d(){if("auto"==c.Gf){var i=$mvt.z.domain;if("www."==$mvt.wX(i,0,4)){i=$mvt.wX(i,4)}c.Gf=i}c.Gf=$mvt.wm(c.Gf)}function f(m,l,i){if($mvt.wP(m)||$mvt.wP(l)||$mvt.wP(i)){return"-"}var k=$mvt.U(m,"_jzqa="+b.OL+".",l),j;if(!$mvt.wP(k)){j=$mvt.wR(k,".");j[5]=j[5]?j[5]*1+1:1;j[3]=j[4];j[4]=i;k=j.join(".")}return k}function h(){return"file:"!=$mvt.z.location.protocol}function e(i){if(!i||""==i){return""}while($mvt.m(i.charAt(0))){i=$mvt.wX(i,1)}while($mvt.m(i.charAt(i[$mvt.T]-1))){i=$mvt.wX(i,0,i[$mvt.T]-1)}return i}b.OE=function(){if(!c.Gf||""==c.Gf||"none"==c.Gf){c.Gf="";return 1}d();return c.Gh?$mvt.Q(c.Gf):1};b.OJ=function(i,k){if($mvt.wP(i)){i="-"}else{k+=c.GU&&"/"!=c.GU?c.GU:"";var j=$mvt.x(i,k);i=j>=0&&j<=8?"0":("["==i.charAt(0)&&"]"==i.charAt(i[$mvt.T]-1)?"-":i)}return i};b.OR=function(i){var j="";var k=$mvt.z;j+=b.OU?b.OU.zL():"";j+=c.GL&&!$mvt.wP(k.title)?"&jzqpt="+$mvt.h(e(k.title)):"";j+="&jzqre="+$mvt.h(b.OA)+"&jzqp="+$mvt.h(b.Od(i));return j};b.Od=function(i){var j=$mvt.z.location;i=i||(j.pathname+j.search);return i};b.OF=function(i){var j="";j+=b.OR(i);a.Tc(j,b.OQ,$mvt.z,b.OL)};b.Oj=function(){var r=$mvt.z.cookie,s=b.Mc,j=b.OL+"",n,l=$mvt.wI(r,"_jzqa="+j+"."),p=$mvt.wI(r,"_jzqb="+j),q=$mvt.wI(r,"_jzqc="+j),i,m=[],o="",t=false,k;r=$mvt.wP(r)?"":r;if(l){if(!p||!q){i=f(r,";",s);b.Mk=true}else{i=$mvt.U(r,"_jzqa="+j+".",";");m=$mvt.wR($mvt.U(r,"_jzqb="+j,";"),".")}}else{i=[j,$mvt.Gt(),s,s,s,1].join(".");b.Mk=true;t=true}i=$mvt.wR(i,".");b.OP.TC(i.join("."));m[0]=j;m[1]=m[1]?m[1]:0;m[2]=$mvt.G!=m[2]?m[2]:10;m[3]=m[3]?m[3]:i[4];m[4]=$mvt.G!=m[4]?m[4]:0;b.OP.Tu(m.join("."));b.OP.Tr(j);if(!$mvt.wP(b.OP.Tx())){b.OP.TY(b.OP.TH())}b.OP.TS();b.OP.Ts();b.OP.Tp()};b.wM=function(){a=new $mvt.TE(c)};b.wO=function(){var i;var j=$mvt.z;if(!g){b.wM();b.OL=b.OE();b.OP=new $mvt.GI(j,c)}if(h()){b.Oj()}if(!g){if(h()){b.OA=b.OJ(b.referrer,j.domain);if(c.GX){b.OU=new $mvt.zc(c.GP);b.OU.Tf()}i=new $mvt.MY(b.OL,j,b.OA,b.Mc,c);i.OT(b.OP,b.Mk);a.TR=i;a.Tm=i.Mr}g=true}};b.wy=function(){var l=[],i,m,k,j;b.wO();if(b.OV){for(i=0;i<b.OV.zK[$mvt.T];i++){m=b.OV.zK[i];$mvt.R(l,m.zL());for(k=0;k<m.zJ[$mvt.T];k++){$mvt.R(l,m.zJ[k].zL())}}for(j=0;j<l[$mvt.T];j++){a.Tc(l[j],b.OQ,$mvt.z,b.OL,true)}}};b.wl=function(i,k,j,m,n,l){b.OV=b.OV?b.OV:new $mvt.zC;return b.OV.zF(i,k,j,m,n,l)};b.$addItem=function(i,l,n,j,k){var m;b.OV=b.OV?b.OV:new $mvt.zC;m=b.OV.zk(i);if(!m){m=b.wl(i,"","","")}m.zm(l,n,j,k)};b.$logOrder=function(i,k,j,m,n,l){b.wl(i,k,j,m,n,l);b.wy()};b.$logAction=function(l,j,i,n,m,k){b.wO();a.Tc("&jzqt=evnt&jzqe="+$mvt.h(l)+($mvt.wP(j)?"":"&jzqev="+$mvt.h(j))+($mvt.wP(i)?"":"&jzqo1="+$mvt.h(i))+($mvt.wP(n)?"":"&jzqo2="+$mvt.h(n))+($mvt.wP(m)?"":"&jzqo3="+$mvt.h(m))+($mvt.wP(k)?"":"&jzqo4="+$mvt.h(k)),b.OQ,$mvt.z,b.OL,false)};b.$logConversion=function($p){if(h()){b.wO();b.OF($p);b.Mk=false}};b.$setDebugGIFPath=function(i){c.wK=i};b.$addEngine=function(i,j){$mvt.R(c.GV,new $mvt.w(i,j))};b.$setDomainName=function(i){c.Gf=i};b.$setAccount=function(i){b.OQ=i}};$mvt.wN=function(){var a=this;a.push=function(){for(var e=arguments,c=0,h=0;c<e.length;c++){try{if(typeof e[c]==="function"){e[c]()}else{var f="",g=e[c][0],b=g.lastIndexOf(".");if(b>0){f=g.substring(0,b);g=g.substring(b+1)}f=$mvt.$getTrackerByName(f);f[g].apply(f,e[c].slice(1))}}catch(d){h++}}return h}};$mvt.$createTracker=function(b,c){var a=new $mvt.$site(b);c&&($mvt.M[c]=a);return a};$mvt.$getTracker=function(a){a=a||"";return $mvt.$createTracker(a)};$mvt.$getTrackerByName=function(b){var a;if(b){a=$mvt.M[b]||$mvt.$createTracker("",b)}else{a=$mvt.wA||($mvt.wA=$mvt.$getTracker())}return a};(function(){var a=window[$mvt.O],b=new $mvt.wN;if(a){if(a instanceof Array){window[$mvt.O]=b;b.push.apply(b,a)}}else{window[$mvt.O]=b}})();
(function(){var b=function(){var h=false,g=[],d;if(document.addEventListener){d=function(){document.removeEventListener("DOMContentLoaded",d,false);e()}}else{if(document.attachEvent){d=function(){if(document.readyState==="complete"){document.detachEvent("onreadystatechange",d);e()}}}}function e(){if(!e.isReady){e.isReady=true;for(var l=0,k=g.length;l<k;l++){g[l]()}}}function c(){try{document.documentElement.doScroll("left")}catch(i){setTimeout(c,1);return}e()}function f(){if(h){return}h=true;if(document.addEventListener){document.addEventListener("DOMContentLoaded",d,false);window.addEventListener("load",e,false)}else{if(document.attachEvent){document.attachEvent("onreadystatechange",d);window.attachEvent("onload",e);var i=false;try{i=window.frameElement==null}catch(j){}if(document.documentElement.doScroll&&i){c()}}}}f();return function(i){e.isReady?i():g.push(i)}}();b.isReady=false;function a(e){var d=document.createElement("script");d.type="text/javascript";d.async=true;d.charset="utf-8";d.src=e;var c=document.getElementsByTagName("script")[0];c.parentNode.insertBefore(d,c)}b(function(){var c=({"m-256-0":"http://material.mediav.com/skuretarget/yintai.js","m-6-0":"http://material.mediav.com/skuretarget/masamaso.js","m-214-0":"http://material.mediav.com/skuretarget/ihaveu.js","m-213-0":"http://material.mediav.com/skuretarget/mbaobao.js","m-20-0":"http://material.mediav.com/skuretarget/lamiu.js"})[window._mvsite?_mvsite.OQ:"none"];c&&a(c)})})();