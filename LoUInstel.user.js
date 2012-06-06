// ==UserScript==
// @name           LoU Intel
// @namespace      LoU Intel
// @version        1.0.0
// @include        http://prodgame24.lordofultima.com/149/index.aspx*
// ==/UserScript==

(
    function() {

    var CT_mainFunction = function() 
	{

       function createCtTweak() {
           qx.Class.define("MbotClaimThis.main", 
		   {
               type: "singleton",
               extend: qx.core.Object,
               members: {
                   app: null,
				   chat: null,
				   lawlessView: null,
				   buttonRow: null,
				   buttonRowN: null,
				   newcityView: null,
				   reportPage: null,
                   initialize: function() 
				   {
                       this.app = qx.core.Init.getApplication();
					   this.lawlessView = this.app.cityDetailView;
					   this.newcityView = this.app.newCityView;						   
					   this.chat = this.app.chat;
                       this.createUploadDataButton();
					   this.reportPage = this.app.reportPage;
                   },
                   createUploadDataButton: function() 
				   {
				   
						var buttonLayout = new qx.ui.layout.HBox(4).set( {alignX:"center"} );
						this.buttonRow = new qx.ui.container.Composite( buttonLayout ).set({maxWidth:306});
						
						var buttonLayoutN = new qx.ui.layout.HBox(4).set({alignX:"center"});
						this.buttonRowN = new qx.ui.container.Composite( buttonLayoutN ).set({maxWidth:306});

						this.lawlessView.actionArea.add(this.buttonRow);
						this.lawlessView.actionArea.add(this.buttonRowN);
				
					   btnCheck = new qx.ui.form.Button(" Upload intel ").set({Width:100, height: 32, alignX: "center", paddingLeft: 0, paddingRight: 0});
					   btnCheck.addListener("click", function() { createUploadTroops(); }, this);
					   this.buttonRow.add(btnCheck);
					   
					   btnIntel = new qx.ui.form.Button(" Show intel ").set({Width:100, height: 32, alignX: "center", paddingLeft: 0, paddingRight: 0});
					   btnIntel.addListener("click", function() { addInfoToCityDetailView();   }, this);
					   this.buttonRow.add(btnIntel);
					   
					   btnReport = new qx.ui.form.Button(" Upload intel ").set({Width:100, height: 32, alignX: "center", paddingLeft: 0, paddingRight: 0});
					   btnReport.addListener("click", function() { createReportUploadTroops(); }, this);
					   this.buttonRow.add(btnReport);
					   
					   this.app.desktop.addListener("click", function(){addInfoToCityDetailView();}, this);
					   
					   this.app.reportPage.reportBody.addListener("appear", function() {  this.app.reportPage.add(btnReport); }, this);
					  
                   },
				}
           });
       }
	   
	   function createReportUploadTroops()
	   {
		   var a = qx.core.Init.getApplication();
		   var reportBody = a.reportPage.reportBody;
		   var player = webfrontend.data.Player.getInstance();
	       var playerId = player.getId();
		   var enemyCoords = reportBody.get
		   var childernOfReportBody = reportBody.getChildren();
		   var shareString = childernOfReportBody[0].getValue();
		   alert("Share:" + shareString);
		   var sub = childernOfReportBody[1].getChildren()[1].getValue();
		   alert("Sub;" + sub);
		   var date =childernOfReportBody[2].getChildren()[1].getValue();
		   alert("Date;" + date);
		   //3 = spacer
		//   var info =  childernOfReportBody[4].getValue();
		 //  alert("Info;" + info);
		   //5 = spacer
		   //Troop stength / Enemy losses
		   //6-0 Compo
		   //6-1 Spacer
		   //7 Attacker::
		   var attacker = childernOfReportBody[8].getValue();
		   alert("Attacker;" + attacker);
		   //9-0 Night protection
		   //9-1 Attack power reduction 
		   var amountOrderer = childernOfReportBody[9].getChildren()[2].getValue();
		   alert("Amount;" +amountOrderer);
			
			win = new qx.ui.window.Window("Upload intel");
			win.setWidth(475);
			win.setHeight(800);
			win.setShowMinimize(true);
			var layout = new qx.ui.layout.Grow();
			win.setContentPadding(5);
			win.setLayout(layout);

			var tempw = new qx.ui.container.Composite();
			tempw.setLayout(new qx.ui.layout.Grow());
			tempw.getContentElement().useElement(new qx.html.Element().useMarkup("<iframe src=\"http://loudragonage.lo.funpic.org/intelUpload.php?player="+playerId+"&enemyCoords="+enemyCoords+"&enemyName="+enemyName+"&allianceName="+allianceName+"\" style=\"width:100%;\" \"></iframe>"));
			tempw.setAllowGrowX(true);
			tempw.setAllowGrowY(true);
			win.add(tempw);//, {flex: 1});
			// a.getRoot().add(win, {left:750, top:125});
			win.open();
		   
	   }
	   
	   function createUploadTroops() 
	   {
						try
						{
						    var a = qx.core.Init.getApplication();
						
							var player = webfrontend.data.Player.getInstance();
							var playerId = player.getId();
							
							var lawlessView = a.cityDetailView;						   
					   
							var posX = 0;
							var posY = 0;
							
							if (typeof lawlessView.city.get_Coordinates == "undefined") 
							{
								posX = lawlessView.city.getPosX(); posY = lawlessView.city.getPosY();
							} else {
								ctid = lawlessView.city.get_Coordinates(); posX = ctid & 0xFFFF; posY = ctid >> 16;
							}
							
							if (posX >= 0 && posX <= 9) 
							{	posX = "00" + posX;  } 
							else if (posX > 9 && posX < 100) 
							{	posX = "0" + posX;   }
							if (posY >= 0 && posY <= 9) 
							{	posY = "00" + posY;  }
							else if (posY > 9 && posY < 100) 
							{	posY = "0" + posY;   }
								
							var pname = qx.core.Init.getApplication().cityDetailView.city.get_PlayerName();
							var allianceName = qx.core.Init.getApplication().cityDetailView.city.get_AllianceName();
							
							var enemyCoords = posX+":"+posY;
							var enemyName = pname;
							var enemyCityName = "Not working";
			//				tempw.getContentElement().useElement(new qx.html.Element().useMarkup("<iframe src=\"http://loudragonage.lo.funpic.org/intelUpload.php?player="+playerId+"&enemyCoords="+enemyCoords+"&enemyName="+enemyName+"&enemyCityName="+enemyCityName+"\"  style=\"width:100%;\"\"></iframe>"));
							
							win = new qx.ui.window.Window("Upload intel");
							win.setWidth(475);
							win.setHeight(800);
							win.setShowMinimize(true);
							var layout = new qx.ui.layout.Grow();
							win.setContentPadding(5);
							win.setLayout(layout);

							var tempw = new qx.ui.container.Composite();
							tempw.setLayout(new qx.ui.layout.Grow());
							tempw.getContentElement().useElement(new qx.html.Element().useMarkup("<iframe src=\"http://loudragonage.lo.funpic.org/intelUpload.php?player="+playerId+"&enemyCoords="+enemyCoords+"&enemyName="+enemyName+"&allianceName="+allianceName+"\" style=\"width:100%;\" \"></iframe>"));
							tempw.setAllowGrowX(true);
							tempw.setAllowGrowY(true);
							win.add(tempw);//, {flex: 1});
							a.getRoot().add(win, {left:400, top:125});
							win.open();
						}
						catch(err)
						{
						console.log(err);
						}
					//container._add(openChat,{row:0,column:13});
		}
		
		function addInfoToCityDetailView()
		{
			 var app = qx.core.Init.getApplication();
			 var lawlessView = app.cityDetailView; 
			 
			 var posX = 0;
			 var posY = 0;
							
			if (typeof lawlessView.city.get_Coordinates == "undefined") 
			{
				posX = lawlessView.city.getPosX(); posY = lawlessView.city.getPosY();
			} 
			else
			{
				ctid = lawlessView.city.get_Coordinates(); posX = ctid & 0xFFFF; posY = ctid >> 16;
			}
							
							if (posX >= 0 && posX <= 9) 
							{	posX = "00" + posX;  } 
							else if (posX > 9 && posX < 100) 
							{	posX = "0" + posX;   }
							if (posY >= 0 && posY <= 9) 
							{	posY = "00" + posY;  }
							else if (posY > 9 && posY < 100) 
							{	posY = "0" + posY;   }
							
			var enemyCoords = posX+":"+posY;
			var infoWindow = new qx.ui.container.Composite();
			infoWindow.setLayout(new qx.ui.layout.Grow());
			infoWindow.getContentElement().useElement(new qx.html.Element().useMarkup("<iframe src=\"http://loudragonage.lo.funpic.org/cityInfo.php?enemyCoords="+enemyCoords+"\"style=\"width:100%;\"\"></iframe>"));
			infoWindow.setAllowGrowX(true);
		    infoWindow.setAllowGrowY(true);
			infoWindow.setHeight(1200);
			infoWindow.setWidth(200);
			
			var browser = getBrowser();
			if(browser == "Firefox")
			{
			if(lawlessView.actionArea.getChildren().length > 10)
				lawlessView.actionArea.removeAt(10);
			}
			else if(browser == "Chrome")
			{
			if(lawlessView.actionArea.getChildren().length > 6)
				lawlessView.actionArea.removeAt(6);
			}
			
			lawlessView.actionArea.add(infoWindow);
			
		}
		
		function getBrowser() 
		{
			  if( navigator.userAgent.indexOf("Chrome") != -1 ) {
				return "Chrome";
			  } else if( navigator.userAgent.indexOf("Opera") != -1 ) {
				return "Opera";
			  } else if( navigator.userAgent.indexOf("MSIE") != -1 ) {
				return "IE";
			  } else if( navigator.userAgent.indexOf("Firefox") != -1 ) {
				return "Firefox";
			  } else {
				return "unknown";
			  }
		}

		function CT_checkIfLoaded() {
           try {
               if (typeof qx != 'undefined') {
                   a = qx.core.Init.getApplication(); 
                   c = a.cityInfoView;
                   ch = a.chat;
                   wdst = webfrontend.data.ServerTime.getInstance().refTime;
                   if (a && c && ch && wdst) {
                       createCtTweak();
                       window.MbotClaimThis.main.getInstance().initialize();
                   } else
                       window.setTimeout(CT_checkIfLoaded, 1000);
               } else {
                   window.setTimeout(CT_checkIfLoaded, 1000);
               }
           } catch (e) {
               if (typeof console != 'undefined') console.log(e);
               else if (window.opera) opera.postError(e);
               else GM_log(e);
           }
       }

       if (/lordofultima\.com/i.test(document.domain))
           window.setTimeout(CT_checkIfLoaded, 1000);

    }
    // injecting, because there seem to be problems when creating game interface with unsafeWindow
    var MbotClaimThisScript = document.createElement("script");
    txt = CT_mainFunction.toString();
    if (window.opera != undefined)
       txt = txt.replace(/</g, "&lt;"); // rofl Opera
    MbotClaimThisScript.innerHTML = "(" + txt + ")();";
    MbotClaimThisScript.type = "text/javascript";
    if (/lordofultima\.com/i.test(document.domain))
       document.getElementsByTagName("head")[0].appendChild(MbotClaimThisScript);
})();