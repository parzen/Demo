function gvjs_hZ(a){gvjs_8R.call(this,a)}gvjs_r(gvjs_hZ,gvjs_8R);
gvjs_hZ.prototype.iI=function(){var a=[];gvjs_s(this.layout,function(b){gvjs_s(b.F,function(c){var d=[],e=c.color,f=(new gvjs_5q).style(gvjs_pp,gvjs_e).style(gvjs_7p,e).style(gvjs_9p,2);f.data({value:c,id:gvjs_EQ(c.sourceColumn)});var g=!0;gvjs_s(c.data,function(h){null!=h.Zt&&null!=h.Gw&&isFinite(h.Zt)&&isFinite(h.Gw)?(h.color=e,d.push((new gvjs_9P).style("x",h.Zt).style("y",h.Gw).style("r",4).style(gvjs_pp,e).style(gvjs_qp,0).data({value:h,id:gvjs_MK(gvjs_DQ(c.sourceColumn,h.eF),gvjs_QP,b.column)})),
g?f.move(h.Zt,h.Gw):f.line(h.Zt,h.Gw),g=!1):g=!0});a.push(f);gvjs_Re(a,d)})});return a};function gvjs_iZ(a,b,c,d){gvjs_LR.call(this,a,b,c,d)}gvjs_r(gvjs_iZ,gvjs_LR);gvjs_iZ.prototype.Ei=function(){return gvjs_D(this.options,gvjs_7v,gvjs_0,gvjs_KR)};gvjs_iZ.prototype.DY=function(a,b,c){return new gvjs_hZ({options:this.options,Pna:!1,Qna:!0,table:this.qb,hn:this.QN.hn,eK:c,axes:{domain:a,target:b}})};function gvjs_jZ(a,b){gvjs_OR.call(this,a,b)}gvjs_m(gvjs_jZ,gvjs_OR);gvjs_=gvjs_jZ.prototype;gvjs_.Qp=function(a){a.style(gvjs_Xp,0).style(gvjs_Yp,1).style(gvjs_Vp,.4).style(gvjs_Wp,2);return a};gvjs_.qr=function(a){a.style(gvjs_Xp,null).style(gvjs_Yp,null).style(gvjs_Vp,null).style(gvjs_Wp,null);return a};gvjs_.lT=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.Qp(a).style(gvjs_np,b).style(gvjs_op,1))};
gvjs_.cT=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.Qp(a).style(gvjs_np,gvjs_PR(b,this.KP,this.IB)).style(gvjs_op,1))};gvjs_.ZS=function(a){null!=a.data().value&&this.qr(a).style(gvjs_op,0)};gvjs_.iT=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.qr(a).style(gvjs_np,b).style(gvjs_op,0))};gvjs_.qfa=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.Qp(a).style(gvjs_6p,4).style(gvjs_4p,b))};
gvjs_.lfa=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.Qp(a).style(gvjs_6p,4).style(gvjs_4p,gvjs_PR(b,this.KP,this.IB)))};gvjs_.jfa=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.qr(a).style(gvjs_6p,2).style(gvjs_4p,gvjs_QR(b,this.Xea,this.IB)))};gvjs_.ofa=function(a){var b=a.data();null!=b.value&&(b=b.value.color,this.qr(a).style(gvjs_6p,2).style(gvjs_4p,b))};function gvjs_kZ(a){gvjs_WK.call(this,a)}gvjs_r(gvjs_kZ,gvjs_WK);gvjs_=gvjs_kZ.prototype;gvjs_.Eq=function(){return null};gvjs_.Mf=function(){return gvjs_NR};gvjs_.iq=function(a,b,c,d){a=new gvjs_HQ(this,a,b,c,d);a.gu([gvjs_jt,gvjs_Uu,gvjs_Cw,gvjs_4P,gvjs_YP,gvjs_Hs,gvjs_Gs,gvjs_Sd]);return a};gvjs_.Bo=function(a,b){return new gvjs_jZ(a,b)};gvjs_.$m=function(a,b,c,d){return new gvjs_iZ(a,b,c,d)};
gvjs_.Gs=function(a){return[new gvjs_PQ([new gvjs_KK(gvjs_es)]),new gvjs_RQ([new gvjs_KK(gvjs_OP),new gvjs_KK(gvjs_PP)],gvjs_D(a,gvjs_Kw)===gvjs_Zp),new gvjs_QQ([new gvjs_KK(gvjs_es),new gvjs_KK(gvjs_OP),new gvjs_KK(gvjs_PP),new gvjs_KK(gvjs_UP)]),new gvjs_TQ([new gvjs_KK(gvjs_OP)])]};gvjs_.mH=function(a,b){null==this.Be?this.Be=new gvjs_vQ(this.container,a,b,[gvjs_ws,gvjs_SP]):this.Be.update(a,b)};gvjs_o(gvjs_3b,gvjs_kZ,void 0);gvjs_kZ.convertOptions=gvjs_7R;gvjs_kZ.prototype.draw=gvjs_kZ.prototype.draw;gvjs_kZ.prototype.clearChart=gvjs_kZ.prototype.Lb;gvjs_kZ.prototype.getSelection=gvjs_kZ.prototype.getSelection;gvjs_kZ.prototype.setSelection=gvjs_kZ.prototype.setSelection;
