(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([[7],{csJo:function(e,a,t){"use strict";var l=t("TqRt"),d=t("284h");Object.defineProperty(a,"__esModule",{value:!0}),a.default=void 0,t("14J3");var n=l(t("BMrR"));t("g9YV");var r=l(t("wCAj"));t("qVdP");var u=l(t("jsC+"));t("+L6B");var c=l(t("2/Rp"));t("jCWc");var o=l(t("kPKH"));t("1YHl");var s=l(t("VNzZ"));t("/zsF");var i=l(t("PArb"));t("IzEo");var f=l(t("bx4M"));t("lUTK");var p=l(t("BvKs"));t("Pwec");var m=l(t("CtXQ")),h=l(t("MVZn")),y=l(t("lwsE")),v=l(t("W8MJ")),E=l(t("a1gu")),k=l(t("Nsbk")),C=l(t("7W2i"));t("5NDa");var b,M,S=l(t("5rEg")),g=d(t("q1tI")),I=(l(t("usdK")),t("MuoO")),w=l(t("PHNs")),N=l(t("jN4b")),x=l(t("XmsV")),V=l(t("TkhW")),z=l(t("zHco")),L=S.default.Search,O=[{title:"ID",dataIndex:"id",sorter:!0},{title:"Name",dataIndex:"name",sorter:!0},{title:"Industry",dataIndex:"industry",sorter:!0},{title:"Employee Size",dataIndex:"employee_size",sorter:!0},{title:"Domain",dataIndex:"domain",sorter:!0},{title:"Revenue",dataIndex:"revenue"},{title:"Phone",dataIndex:"phone",sorter:!0},{title:"Company Linkedin",dataIndex:"company_linkedin"},{title:"Location",dataIndex:"location",sorter:!0}],P=(b=(0,I.connect)(function(e){var a=e.advancedSearch,t=e.loading;return{advancedSearch:a,loading:t.models.advancedSearch}}),b(M=function(e){function a(){var e,t;(0,y.default)(this,a);for(var l=arguments.length,d=new Array(l),n=0;n<l;n++)d[n]=arguments[n];return t=(0,E.default)(this,(e=(0,k.default)(a)).call.apply(e,[this].concat(d))),t.handleSearch=function(e){var a=t.props.dispatch;a({type:"advancedSearch/getCompany",payload:{keyword:e}})},t}return(0,C.default)(a,e),(0,v.default)(a,[{key:"componentDidMount",value:function(){var e=this.props.dispatch;e({type:"advancedSearch/query",payload:{count:5}})}},{key:"handleTableChange",value:function(e,a,t){var l=this.props.dispatch;l({type:"advancedSearch/getCompany",payload:(0,h.default)({limit:e.pageSize,page:e.current,sortField:t.field,sortOrder:t.order},a)})}},{key:"showModal",value:function(e){var a=this.props.dispatch;a({type:"advancedSearch/showModal",payload:{type:e}})}},{key:"handleCancel",value:function(){var e=this.props.dispatch;e({type:"advancedSearch/hideModal",payload:{}})}},{key:"handleLeadModalOk",value:function(){this.props.dispatch;this.handleCancel()}},{key:"handleCompanyModalOk",value:function(){this.props.dispatch;this.handleCancel()}},{key:"handleMenuClick",value:function(e){this.showModal(e.key)}},{key:"render",value:function(){var e=g.default.createElement("div",{className:N.default.pageHeaderContent},g.default.createElement("div",{className:N.default.content},g.default.createElement("div",{className:N.default.contentTitle},"Advanced Search"),g.default.createElement("div",null))),a=g.default.createElement("div",{className:N.default.extraContent},g.default.createElement("div",{className:N.default.statItem},g.default.createElement("p",null,"Companies"),g.default.createElement("p",null,g.default.createElement(w.default,{end:56313131,duration:5,separator:","}))),g.default.createElement("div",{className:N.default.statItem},g.default.createElement("p",null,"Prospects"),g.default.createElement("p",null,g.default.createElement(w.default,{end:421123532,duration:5,separator:","})))),t=g.default.createElement(p.default,{onClick:this.handleMenuClick.bind(this)},g.default.createElement(p.default.Item,{key:"lead"},g.default.createElement(m.default,{type:"user"}),"Lead Search"),g.default.createElement(p.default.Item,{key:"company"},g.default.createElement(m.default,{type:"user"}),"Company Search")),l=[{key:"company",tab:g.default.createElement("span",null,g.default.createElement(m.default,{type:"company"})," Company Search")},{key:"lead",tab:g.default.createElement("span",null,g.default.createElement(m.default,{type:"lead"})," Lead Search")}],d=this.props,h=d.advancedSearch.data,y=(d.total,d.loading);d.current,d.currentItem,d.leadModalVisible,d.companyModalVisible;return g.default.createElement(z.default,{content:e,extraContent:a,tabList:l},g.default.createElement(n.default,{gutter:16},g.default.createElement(o.default,{span:4},g.default.createElement(s.default,{offsetTop:88},g.default.createElement(f.default,{className:"keywordCard",title:"Keywords",bordered:!0},g.default.createElement(S.default,{placeholder:"Keyword"})),g.default.createElement(f.default,{className:"",title:"Filters",bordered:!0},g.default.createElement("p",null,"Geography"),g.default.createElement(V.default,null),g.default.createElement(i.default,null),g.default.createElement("p",null,"Industry"),g.default.createElement(V.default,null),g.default.createElement(i.default,null),g.default.createElement("p",null,"Annual revenue"),g.default.createElement(V.default,null),g.default.createElement(i.default,null),g.default.createElement("p",null,"Title"),g.default.createElement(V.default,null),g.default.createElement(i.default,null),g.default.createElement("p",null,"Company headcount"),g.default.createElement(V.default,null)))),g.default.createElement(o.default,{span:20},g.default.createElement(f.default,null,g.default.createElement("div",{className:N.default.searchBlock},g.default.createElement(L,{className:N.default.searchInput,placeholder:"input search text",onSearch:this.handleSearch.bind(this),size:"large",enterButton:!0}),g.default.createElement("span",{className:N.default.button},g.default.createElement(u.default,{overlay:t},g.default.createElement(c.default,{size:"large",type:"primary"},"Advanced ",g.default.createElement(m.default,{type:"down"}))))),g.default.createElement(r.default,{columns:O,dataSource:h,loading:y,onChange:this.handleTableChange.bind(this)})))),g.default.createElement(x.default,{handleLeadModalOk:this.handleLeadModalOk.bind(this),handleCompanyModalOk:this.handleCompanyModalOk.bind(this),handleCancel:this.handleCancel.bind(this),leadModalVisible:this.props.advancedSearch.leadModalVisible,companyModalVisible:this.props.advancedSearch.companyModalVisible}))}}]),a}(g.PureComponent))||M);a.default=P}}]);