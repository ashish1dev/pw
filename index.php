
<?php 
/*
 // create curl resource 
 //programmable web api key= 2125f11e097a31970dced3e32e3a8fe6
 
$pw_url = "http://api.programmableweb.com/apis/-/Mapping?apikey=2125f11e097a31970dced3e32e3a8fe6";

echo $pw_url;


// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $pw_url,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request'
));
// Send the request & save response to $resp
$resp = curl_exec($curl);

echo "<br/> resp =".$resp;

echo "<br/>";

//var_dump($decoded_result);
// Close request to clear up some resources
curl_close($curl);


*/


/*

$curl = curl_init($pw_url); 
curl_setopt($curl, CURLOPT_FAILONERROR, true); 
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   
$result = curl_exec($curl); 
//echo $result; 
$decoded_result=(json_decode($result,true));

echo "<br/>";

var_dump($decoded_result);
curl_close($curl);

echo "<br/><br/>";

*/
/*

// for google search

$searchTerm=urlencode("Weather Source");


 // create curl resource 
$service_url = "https://www.googleapis.com/customsearch/v1?key=AIzaSyB3gD5pWEDoBAsBcBpjqN1sYz9sZJHvFt4&cx=013036536707430787589:_pqjad5hr1a&q=".$searchTerm."&alt=json";

echo $service_url;

$curl = curl_init($service_url); 
//curl_setopt($curl, CURLOPT_FAILONERROR, true); 
//curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); 
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   
$result = curl_exec($curl); 
//echo $result; 
$decoded_result=(json_decode($result,true));

echo "<br/>";

var_dump($decoded_result);
curl_close($curl);

echo "<br/><br/>";

$len=sizeof($decoded_result['items']);

echo "<br/> length of array = ".$len."<br/>";
$i=0;
while($i<$len){
	$link=($decoded_result['items'][$i]['link']);
	
	echo "<a target='_blank' href='".$link."'>$link</a>";
	
	echo "<br/>";
	  $i++;
}

*/

?>
<!DOCTYPE HTML> 
    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;

      }
	  table{
			word-wrap: break-word;
				margin:20px;
			width:80%;
	  }
	  
	table thead tr th {
	
	text-align:center;
		background-color:rgb(247,247,249);
		cursor: pointer;	
	}
	
	.wrapped {
				/* wrap long urls */
				white-space: pre;           /* CSS 2.0 */
				white-space: pre-wrap;      /* CSS 2.1 */
				white-space: pre-line;      /* CSS 3.0 */
				white-space: -pre-wrap;     /* Opera 4-6 */
				white-space: -o-pre-wrap;   /* Opera 7 */
				white-space: -moz-pre-wrap; /* Mozilla */
				white-space: -hp-pre-wrap;  /* HP Printers */
				word-wrap: break-word;      /* IE 5+ */
				
				}
			pre {
				/* general styles */
				font: 11px/1.5 Monaco, "Panic Sans", "Lucida Console", "Courier New", Courier, monospace, sans-serif;
				border: 5px solid #ccc;
				background: #eee;
				padding: 10px;
				}
				
				

    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.js"></script>
    <![endif]-->

<style>

td th{
	padding:30px;
}

</style>

<script type="text/javascript" src="jquery-1.7.1.min.js"></script>


<script type="text/javascript" src="jquery.tablesorter.js"></script> 


<script>
var page=1;
</script>



<div class="navbar navbar-fixed-top navbar-form" align="center" style="background-color:rgb(247,247,249);padding-top:10px;padding-bottom:10px;">
<div><center><h1>API / Mashup Search Tool of <a href='http://www.programmableweb.com/' target='_blank'>Programmableweb</a></h1></center> <h6 style='align:right'>developed by <a href='http://tettra.in' target='_blank'>tettra.in</a></h6>
</div>
<select name="choice_api_mashup" id="choice_api_mashup" size="1">
<option>Select One</option>
<option value="API">API</option>
<option value="Mashup">Mashup</option>
</select>

<select name="choice_apicat" id="choice_apicat" size="1" 	 ><option value='sample'></option></select>



or

  <input class="span2" id="tagText" type="text" placeholder="search tags">
  <button class="btn" id="searchBtn" type="button" onClick='searchForTags();'>Search</button>
  
  
  <select id="choice_howold" name="choice_howold" size="1">
  <option value="">Any Time</option>
  <option value="7">Last 1 Week</option>
  <option value="15">Last 2 Weeks</option>
  <option value="22">Last 3 Weeks</option>
  <option value="31">Last 1 Month</option>
  <option value="60">Last 2 Months</option>
  <option value="90">Last 3 Months</option>
  <option value="120">Last 4 Months</option>
  <option value="150">Last 5 Months</option>
  <option value="180">Last 6 Months</option>
  <option value="365">Last 1 Year</option>
  <option value="720">Last 2 Year</option>
  
  
  </select>
  
  <button class="btn" id="exportExcelBtn" type="button" >Export As Excel</button>
  <br/>
  
  <!--
  mashups
  -->
  
 
 
  <!--
  
  
  -->
  
  <div id="d2"></div>

  
</div>
<br/>





<div id="d1"></div>
<div id="d3"></div>

<script>

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
  
  
		window.page=1;
		var tagName = $("input#tagText");
		//alert(tagName);
		$(tagName).val("");
		$("#d3").html("");
        str = $(this).val() ;
		
      });
		
		str=str.trim();
		//alert(str);
	if(str!==""){
		//alert('in');
		if(!((str=="Select API Category") && (str=="Select Mashup Category") && (str=="")  ) ) {
			loadMore(str,howold);
		}
	}

})
.trigger('change');

var howold;
var howoldText;

$("#choice_howold").change(function () {
 
 
  $("select[id='choice_howold'] option:selected").each(function () {
  
  
		window.page=1;
        howold = $(this).val() ;
		howoldText=$(this).text();
		
      });

//alert(howold);

	

	
		if(!((str=="Select API Category") && (str=="Select Mashup Category") && (str!=""))) {
			loadMore(str,howold);
	
	
	

if($.trim(tagSearchText)!=""){
	loadMore(tagSearchText,howold);
}

}

})
.trigger('change');



function enableControls(){
		$('#choice_apicat').removeAttr('disabled');
		$('#tagText').removeAttr('disabled');
		$("#searchBtn").removeAttr('disabled');
		$("#choice_howold").removeAttr('disabled');
}

function disableControls(){


	if(str=="sample" &&  $("input#tagText").val()=="" && api_mashup=='Select One'  ){
			$("#choice_apicat").html("<option value='sample'></option>");
			$('#choice_apicat').attr('disabled', 'disabled');
			$('#tagText').attr('disabled', 'disabled');
			$('#searchBtn').attr('disabled','disabled');
			$('#choice_howold').attr('disabled', 'disabled');
			
		
			
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
window.page=1;
 tagSearchText=document.getElementById("tagText").value;
loadMore(tagSearchText,howold);
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
	
	
function loadMore(str,maxdays){
	
	disableControls();
	

		
	str=str.trim();
	//alert("len="+str.length);
	//alert("str="+str);
		if(str.length>1){

				category=str.trim();
				
				if(typeof howoldText!=="undefined" && str!="sample")
					$("#d2").html("Loading ... <b>["+api_mashup+"] - ["+str + "]- ["+howoldText+"]</b><br/>"+"<div class='progress progress-striped active' style='width:40%' align='center'><div class='bar' style='width: 100%;'></div></div>");
		
	var dynamicURL;
	
		if(category=="All")
			category="";
			
			if(api_mashup=="API"){
				dynamicURL= "http://api.programmableweb.com/apis/-/"+category+"?apikey=2645c91b0c9e1e650738001f1fe902a5&alt=json&maxdays="+maxdays+"&pagesize=50&page="+window.page+"";
			}
			else if(api_mashup=="Mashup"){
				dynamicURL="http://api.programmableweb.com/mashups/-/"+category+"?apikey=2645c91b0c9e1e650738001f1fe902a5&alt=json&maxdays="+maxdays+"&pagesize=50&page="+window.page+"";
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
								tableContent="<div id='_"+count_id+"_'></div> "+"<div id= 'table1'><table   class='table table-hover table-bordered tablesorter' >"+"<p class='text-center lead'>["+api_mashup+"] - ["+category+"] - ["+howoldText+"]</p>";
								tableContent=tableContent+"<thead><tr><th>Name <img src='bg.gif'/></th><th>logo & website link <img src='bg.gif'/></th><th>Description<img src='bg.gif'/></th><th>API Link<img src='bg.gif'/></th><th>Tags <img src='bg.gif'/></th><th>Updated<img src='bg.gif'/></th></tr></thead>";
							//	tableContent=tableContent+;
								getPWMemPoints(api_mashup);
								tableContent=tableContent+"</table>";
								
								tablecontent=tableContent+"</div>";
								
								$("#d1").append(tableContent+"<br/>");
									
									
								   
								   
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

								

									$("#d2").html("");
								
								if(count==50)
									$("#d3").html("<button class='btn btn-large btn-block btn-primary' type='button' onClick='loadMoreNow();'>load more for <b>'"+category+"'</b>...</button>  ");
								
									$('html, body').animate({ scrollTop: $('#_'+count_id+"_").offset().top-80 }, 'slow');
									count_id++;
									window.page=window.page+1;
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
        $("table").tablesorter(); 
		//alert('2');
    } 
);
    
	
	
function loadMoreNow(){
//	page=page;
	//alert(window.page);
	
		$("#d3").html("");
	loadMore(str,howold);
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
		//					+"<td>"+"<a href='"+id+"' target='_blank'>"+"Programmableweb Page"+"</a>"+"</td>"
		
		tableContent=tableContent+"<tr >"
								+"<td style='word-wrap:break-word;width:10%;'>"+title+"</td>";
								
		if(api_or_mashup=='API'){
			tableContent=tableContent+"<td style='width:13%;word-break: break-all;' >"+"<a href='"+provider+"' target='_blank'>"+"<img src='"+icon+"' class='img-rounded'/>"+"<br/><br/>"+provider+" "+"</a>"+"</td>";
		}
		else if(api_or_mashup=="Mashup"){
			tableContent=tableContent+"<td style='width:10%;word-break: break-all;'> "+"<img src='"+icon+"' class='img-rounded'/>"+"</td>";
		}
		
		tableContent=tableContent+"<td id='desc' style='word-wrap:break-word;width:30%;' >"+description+"</td>"
								+"<td    style='width:15%;word-break: break-all;'>"+"<a href='"+sampleUrl+"' target='_blank'>"+sampleUrl+"</a></td>"
								+"<td id='tags' style='width:15%'>"+""+newTagLink+"</td>"
								+"<td width='8%'>"+formattedDate+"</td>"
								+"</tr>";
	
		data1.push(e);
	}
	
	//alert(data1);
	
	return data1;
}

//+"<td>"+"<a href='"+provider+"' target='_blank'>"+"Provider Page"+"</a>"+"</td>"
function splitTags_get_taglinks(allTagString){
	
	var tagHTML="";
	if(allTagString!=null){
		if(allTagString.trim()!=0){
			var t=allTagString.split(",");
			var i=0;
			while(i<t.length){
				tagHTML=tagHTML+"<a style='padding:5px;margin:5px;' href='http://www.programmableweb.com/apitag/"+t[i]+"' target='_blank' class='btn'>"+t[i]+"</a>" +" ";
				i++;
			}
			
		}
	}
	return tagHTML;
}



	$("#exportExcelBtn").click(function(e) {
	
	//var data='<table>'+$("#table1").html().replace(/<a\/?[^>]+>/gi, '')+'</table>';
	var data='<table>'+$("#d1").html()+'</table>';
		$('body').prepend("<form method='post' action='exporttoexcel.php' style='display:none' id='ReportTableData'><input type='text' name='tableData' value='"+data+"' ></form>");
		 $('#ReportTableData').submit().remove();
		 return false;
	});

</script>
