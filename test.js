 
 
var _page=1;
var count=1;
var pwfeed;
var category;
var tableContent="";

var str = "";
var count_id=0;
var api_mashup;


$("#choice_api_mashup").change(function () {
 
 
  $("select[id='choice_api_mashup'] option:selected").each(function () {
  
	api_mashup=$(this).text();
	
	if(api_mashup=="Mashup"){
$("#choice_apicat").html("<option value='Select Mashup Category'>Select Mashup Category</option><option value='All'>All Mashups</option><option value='mapping'>Mapping</option>  	<option value='deadpool'>Deadpool</option><option value='search'>Search</option> 	<option value='social'>Social</option> 	<option value='shopping'>Shopping </option> 	<option value='photo'>Photo</option><option value='video'>Video</option>	<option value='travel'>Travel</option>  	<option value='music'>Music 	</option><option value='mobile'>Mobile  </option>	<option value='messaging'>Messaging  </option>	<option value='referenc'>Reference </option>	<option value='news'>News </option>	<option value='visualization'>Visualization </option>	<option value='telephony'>Telephony  </option>	<option value='sports'>Sports</option>	<option value='fun'>Fun</option>  	<option value='microblogging'>Microblogging </option> 	<option value='realestate'>Realestate  </option>	<option value='widgets'>Widgets </option>");
		enableControls();

}
else if(api_mashup=="API"){
	$("#choice_apicat").html("<option value='Select API Category'>Select API Category</option><option value='All'>All APIs</option><option value='Advertising'>Advertising&nbsp;</option><option value='Answers'>Answers&nbsp;</option><option value='Auctions'>Auctions&nbsp;</option><option value='Backend'>Backend&nbsp;</option><option value='Blog Search'>Blog Search&nbsp;</option><option value='Blogging'>Blogging&nbsp;</option><option value='Bookmarks'>Bookmarks&nbsp;</option><option value='Calendar'>Calendar&nbsp;</option><option value='Catalog'>Catalog&nbsp;</option><option value='Chat'>Chat&nbsp;</option><option value='Database'>Database&nbsp;</option><option value='Dating'>Dating&nbsp;</option><option value='Dictionary'>Dictionary&nbsp;</option><option value='Education'>Education&nbsp;</option><option value='Email'>Email&nbsp;</option><option value='Enterprise'>Enterprise&nbsp;</option><option value='Entertainment'>Entertainment&nbsp;</option><option value='Events'>Events&nbsp;</option><option value='Fax'>Fax&nbsp;</option><option value='Feeds'>Feeds&nbsp;</option><option value='File Sharing'>File Sharing&nbsp;</option><option value='Financial'>Financial&nbsp;</option><option value='Food'>Food&nbsp;</option><option value='Games'>Games&nbsp;</option><option value='Goal Setting'>Goal Setting&nbsp;</option><option value='Government'>Government&nbsp;</option><option value='Internet'>Internet&nbsp;</option><option value='Job Search'>Job Search&nbsp;</option><option value='Mapping'>Mapping&nbsp;</option><option value='Media Management'>Media Management&nbsp;</option><option value='Media Search'>Media Search&nbsp;</option><option value='Medical'>Medical&nbsp;</option><option value='Messaging'>Messaging&nbsp;</option><option value='Music'>Music&nbsp;</option><option value='News'>News&nbsp;</option><option value='Office'>Office&nbsp;</option><option value='Other'>Other&nbsp;</option><option value='Other Search'>Other Search&nbsp;</option><option value='Payment'>Payment&nbsp;</option><option value='Photos'>Photos&nbsp;</option><option value='PIM'>PIM&nbsp;</option><option value='Politics'>Politics&nbsp;</option><option value='Portal'>Portal&nbsp;</option><option value='Project Management'>Project Management&nbsp;</option><option value='Real Estate'>Real Estate&nbsp;</option><option value='Recommendations'>Recommendations&nbsp;</option><option value='Reference'>Reference&nbsp;</option><option value='Retail'>Retail&nbsp;</option><option value='Science'>Science&nbsp;</option><option value='Search'>Search&nbsp;</option><option value='Security'>Security&nbsp;</option><option value='Shipping'>Shipping&nbsp;</option><option value='Shopping'>Shopping&nbsp;</option><option value='Social'>Social&nbsp;</option><option value='Sports'>Sports&nbsp;</option><option value='Spreadsheet'>Spreadsheet&nbsp;</option><option value='Storage'>Storage&nbsp;</option><option value='Tagging'>Tagging&nbsp;</option><option value='Telephony'>Telephony&nbsp;</option><option value='Tools'>Tools&nbsp;</option><option value='Transportation'>Transportation&nbsp;</option><option value='Travel'>Travel&nbsp;</option><option value='Utility'>Utility&nbsp;</option><option value='Video'>Video&nbsp;</option><option value='Weather'>Weather&nbsp;</option><option value='Web Search'>Web Search&nbsp;</option><option value='Widgets'>Widgets&nbsp;</option><option value='Wiki'>Wiki&nbsp;</option>	");
		enableControls();

}
else if(api_mashup=='Select One'){

		 $("input#tagText").val("");
			disableControls();
		}



		

})

}).trigger('change');


$("#choice_apicat").change(function () {
 
 
  $("select[id='choice_apicat'] option:selected").each(function () {
  
  
		window._page=1;
		var tagName = $("input#tagText");
		//alert(tagName);
		$(tagName).val("");
		$("#d3").html("");
        str = $(this).val() ;
		
      });
		
		str=$.trim(str);
		//alert(str);
	if(str!==""){
		//alert('in');
		if(!((str=="Select API Category") && (str=="Select Mashup Category") && (str=="")  ) ) {
			loadMore(str,howold,window._page);
		}
	}

})
.trigger('change');

var howold;
var howoldText;

$("#choice_howold").change(function () {
  $("select[id='choice_howold'] option:selected").each(function () {
		window._page=1;
        howold = $(this).val() ;
		howoldText=$(this).text();
      });

//alert(howold);

	

	
		if(!((str=="Select API Category") && (str=="Select Mashup Category") && (str!=""))) {
			loadMore(str,howold,window._page);
	
	
	

if($.trim(tagSearchText)!=""){
	loadMore(tagSearchText,howold,window._page);
}

}

})
.trigger('change');



function enableControls(){
		$('#choice_apicat').removeAttr('disabled');
		$('#tagText').removeAttr('disabled');
		$("#searchBtn").removeAttr('disabled');
		$("#choice_howold").removeAttr('disabled');
		$("#exportExcelBtn").removeAttr('disabled');
}

function disableControls(){
	if(str=="sample" &&  $("input#tagText").val()=="" && api_mashup=='Select One'  ){
			$("#choice_apicat").html("<option value='sample'></option>");
			$('#choice_apicat').attr('disabled', 'disabled');
			$('#tagText').attr('disabled', 'disabled');
			$('#searchBtn').attr('disabled','disabled');
			$('#choice_howold').attr('disabled', 'disabled');
			$("#exportExcelBtn").attr('disabled', 'disabled');
		}
}

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

var tagSearchText;

function searchForTags(){
window._page=1;
 tagSearchText=document.getElementById("tagText").value;
loadMore(tagSearchText,howold,window._page);
}


 $(function()
    {
       var  testTextBox = $('#tagText');
        var code =null;
        testTextBox.keypress(function(e)
        {
            code= (e.keyCode ? e.keyCode : e.which);
            if (code == 13) {
				//alert('Enter key was pressed.');
				searchForTags();
			}
			//alert(e);
			$('#choice_apicat option').eq(0).attr('selected','selected');
        });

    });
	
	
function loadMore(str,maxdays,page){
	
	disableControls();
	

		
	str=$.trim(str);
	//alert("len="+str.length);
	//alert("str="+str);
		if(str.length>1){

				category=$.trim(str);
				//alert("howoldText="+howoldText+",str="+str);

				if(typeof howoldText!=="undefined" && str!="sample" && str!="Select API Category"){
				//alert(str);					
$("#d2").html("Loading ... <b>["+api_mashup+"] - ["+str + "]- ["+howoldText+"]</b><br/>"+"<div class='progress progress-striped active' style='width:40%' align='center'><div class='bar' style='width: 100%;'></div></div>");

		}
	var dynamicURL;
	
		if(category=="All")
			category="";
			
			if(api_mashup=="API"){
			if($.browser.msie){
			dynamicURL="http://api.programmableweb.com/apis/-/"+category+"?apikey=2645c91b0c9e1e650738001f1fe902a5&alt=json&maxdays="+maxdays+"&pagesize=50&page="+page+"";
				}else{
		dynamicURL="http://api.programmableweb.com/apis/-/"+category+"?apikey=2645c91b0c9e1e650738001f1fe902a5&alt=json&maxdays="+maxdays+"&pagesize=50&page="+window._page+"";
				}
			}
			else if(api_mashup=="Mashup"){
				if($.browser.msie){
				dynamicURL="http://api.programmableweb.com/mashups/-/"+category+"?apikey=2645c91b0c9e1e650738001f1fe902a5&alt=json&maxdays="+maxdays+"&pagesize=50&page="+page+"";
				}else{
				dynamicURL= "http://api.programmableweb.com/apis/-/"+category+"?apikey=2645c91b0c9e1e650738001f1fe902a5&alt=json&maxdays="+maxdays+"&pagesize=50&page="+window._page+"";
				}
			}
			//alert("dynamicURL="+dynamicURL);
			
			if((typeof dynamicURL!=="undefined") && (typeof maxdays!="undefined")){
			//	alert('not ');
				$.ajax({ 
				   type: "GET",
				   dataType: "jsonp",
				   url: dynamicURL,
				   success: function(data){
				   //  alert(data);
				   
						if(category=="")
							category="All";
						pwfeed=data;
						if(pwfeed.totalResults!='0'){
						
							 count=pwfeed.entries.length;
							// alert(count);
							if(count>0){
								tableContent="<div id='_"+count_id+"_'></div> "+"<div id= 'table1'><table   class='table table-hover table-bordered tablesorter' >"+"<p class='text-center lead' style='font-size:160%;'>["+api_mashup+"] - ["+category+"] - ["+howoldText+"]</p>";
								tableContent=tableContent+"<thead><tr><th>Name <img src='http://www.newsonmap.in/pw/bg.gif'/></th><th>logo & website link <img src='http://www.newsonmap.in/pw/bg.gif'/></th><th>Description<img src='http://www.newsonmap.in/pw/bg.gif'/></th><th>API Link<img src='http://www.newsonmap.in/pw/bg.gif'/></th><th>Tags <img src='http://www.newsonmap.in/pw/bg.gif'/></th><th>Updated<img src='http://www.newsonmap.in/pw/bg.gif'/></th></tr></thead>";
							//	tableContent=tableContent+;
								getPWMemPoints(api_mashup);
								tableContent=tableContent+"</table>";
								
								tablecontent=tableContent+"</div>";
								
								$("#d1").append(tableContent+"<br/>");
									
									
								  
					if(typeof ($.tablesorter)!="undefined"){
                                                                 
									$.tablesorter.addParser({
										id: "datetime",
										is: function(s) {
											return false; 
										},
										format: function(s,table) {
											s = s.replace(/\-/g,"/");
											s = s.replace(/(\d{1,2})[\/\-](\d{1,2})[\/\-](\d{4})/, "$3/$2/$1");
											return $.tablesorter.formatFloat(new Date(s).getTime());
										},
										type: "numeric"
									});


									$("table").tablesorter({
										dateFormat: 'dd/mm/yyyy', 
										headers: { 5: { sorter: 'datetime'} },
										
										sortList: [[5,1]] 
									});

								}

									$("#d2").html("");
								
								if(count==50)
									$("#d3").html("<button class='btn btn-large btn-block btn-primary' type='button' onClick='loadMoreNow();'>load more for <b>'"+category+"'</b>...</button>  ");
								
if(count_id==0)
	$('html, body').animate({ scrollTop: $('#_'+count_id+"_").offset().top-200 }, 'slow');
	else
	$('html, body').animate({ scrollTop: $('#_'+count_id+"_").offset().top-135 }, 'slow');

									count_id++;
									_page=_page+1;
							  }
						}
						else{
						$("#d2").html("<h3><span class=' label-warning'>No Result Found for ["+api_mashup+"] - ["+str + "]- ["+howoldText+"] ! </span></h3>");
						}
				   }
				});
				
				}
		
		}
}


$(document).ready(function() 
    { 	//alert('1');
           // if($("table")!=null)
            //    $("table").tablesorter(); 
	//alert('2');
    } 
);
    
	
	
function loadMoreNow(){

	//alert(window._page);
	
		$("#d3").html("");
	loadMore(str,howold,window._page);
}


function getPWMemPoints(api_or_mashup) {
//alert('1');

var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];

//document.write("The current month is " + monthNames[d.getMonth()]);

	var data1 = new Array();
	//alert(pwfeed.entries.length);
	
	
	for (i = 0; i < pwfeed.entries.length; i++)
	{
		var e = new Array();
		if(typeof pwfeed.entries[i]!="undefined")
		{
		var id=pwfeed.entries[i].id;
		var title=pwfeed.entries[i].title;
		var description=pwfeed.entries[i].description;
		var sampleUrl=pwfeed.entries[i].sampleUrl;
		var provider=pwfeed.entries[i].provider;
		var tags=pwfeed.entries[i].tags;
		var updated=pwfeed.entries[i].updated;
		
		var date = new Date(updated);
//		var formattedDate = date.getDate() + "-" + monthNames[(date.getMonth() )] + "-" + date.getFullYear();
		var formattedDate = date.getDate() + "/" + date.getMonth()  + "/" + date.getFullYear();

		
		var newTagLink=splitTags_get_taglinks(String(tags));
		
		
		var icon =pwfeed.entries[i].icon;
		
		var d = new Array(
							id,
							title,
							description,
							sampleUrl,
							tags,
							provider,
							formattedDate,
							icon
						);
		e.push(d);
		//					+"<td >"+"<a href='"+id+"' target='_blank'>"+"Programmableweb Page"+"</a>"+"</td>"
		
		tableContent=tableContent+"<tr >"
								+"<td width='9%' style='word-wrap:break-word;;width:9%;'>"+title+"</td>";
								
		if(api_or_mashup=='API'){
			tableContent=tableContent+"<td width='10%' style='width:10%;word-break:break-all;' >"+"<a href='"+provider+"' target='_blank'>"+"<img src='"+icon+"' class='img-rounded'/>"+"<br/><br/>"+provider+" "+"</a>"+"</td>";
		}
		else if(api_or_mashup=="Mashup"){
			tableContent=tableContent+"<td width='10%' style='width:10%;word-wrap:break-word;'> "+"<img src='"+icon+"' class='img-rounded'/>"+"</td>";
		}
		
		tableContent=tableContent+"<td id='desc' width='30%' style='word-break:break-all;width:30%;' >"+description+"</td>"
								+"<td width='15%'   style='width:15%;word-break:break-all;'>"+"<a href='"+sampleUrl+"' target='_blank'>"+sampleUrl+"</a></td>"
								+"<td id='tags' width='8%' style='width:8%; word-wrap:break-word;;'>"+""+newTagLink+"</td>"
								+"<td width='9%' style='width:9%; word-wrap:break-word;'>"+formattedDate+"</td>"
								+"</tr>";
	
		data1.push(e);
		
		}
		//else{
		//	alert(pwfeed.entries[i]);
		//}
	}
	
	//alert(data1);
	
	return data1;
}

//+"<td>"+"<a href='"+provider+"' target='_blank'>"+"Provider Page"+"</a>"+"</td>"
function splitTags_get_taglinks(allTagString){
	
	var tagHTML="";
	if(allTagString!=null){
		if($.trim(allTagString).length!=0){
			var t=allTagString.split(",");
			var i=0;
			while(i<t.length){
				if(t[i]!=""){
				tagHTML=tagHTML+"<a style='margin:2px;' href='http://www.programmableweb.com/apitag/"+t[i]+"' target='_blank' class='btn'>"+t[i]+"</a>" +" ";
				}
				i++;
				
			}
			
		}
	}
	return tagHTML;
}



	/*
	$("#exportExcelBtn").click(function(e) {
//http://www.newsonmap.in/pw/exporttoexcel.php



	//var data='<table>'+$("#table1").html().replace(/<a\/?[^>]+>/gi, '')+'</table>';
	var data='<table>'+$("#d1").html()+'</table>';
		$('body').prepend("<form method='post' action='http://w3schools.in/demo/export-to-excel/exporttoexcel.php' style='display:none' id='ReportTableData'><input type='text' name='tableData' value='"+data+"' ></form>");
		 $('#ReportTableData').submit().remove();
		 return false;
		
		 
		 
		 
	});
	
	*/
	
	
	function _tableExport(){
		
		tableToExcel('d1','name');
	}
	
	
	var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64coding= function(s) { if($.browser.msie==true)	{	return base64.encode(unescape(encodeURIComponent(s)));}	else	return window.btoa(unescape(encodeURIComponent(s))); }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {


    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML};
    

   window.location.href= uri + base64coding(format(template, ctx));
  // window.location.assign(uri + base64coding(format(template, ctx)));
  
//$(location).attr('href',  uri + base64coding(format(template, ctx)));

  }
})()

 if($.browser.msie==true){
 	  $("#exportExcelBtn").hide();
 }

	
var p = $('#container11');

var position = p.position();
if(position!=null){
var leftPos=position.left;

$('#container11').css('margin-left',leftPos-95);

$('#d1').css('margin-left',$('#d1').position().left-95);
}
	
$(window).scroll(function () {

//alert($(window).scrollTop());
    if ($(window).scrollTop() > 200) {
		//alert($('#container11'));
        $('#container11').css('top', 10);
		$('#container11').css('margin-left',leftPos-95);
		
		 $('#container11').css('position', 'fixed');
    }else{
	    $('#container11').css('top', 0);
		$('#container11').css('position', 'relative');
	}
}
);