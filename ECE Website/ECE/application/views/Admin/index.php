
<link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
<script src="../semantic/jquery.min.js"></script>
<script src="../semantic/dist/semantic.min.js"></script>
<script type="text/javascript">
  function displayName(){
  alert("Successs");
  }
</script>

<style>
div.tab {
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 10px 10px;
    transition: 0.3s;
    font-size: 15px;

}
div.tab button:hover {
    background-color:gray;
}

div.tab button.active {
    background-color:#b6d6ef;
}

.tabcontent {
    display: none;
    padding: 6px 200px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>

<div class="ui page grid">
<div class="ui top four attached tabular menu">
  <a class="item" data-tab="first">Forum</a>
  <a class="item" data-tab="second">Students</a>
  <a class="item" data-tab="third">Articles</a>
  <a class="item" data-tab="fourth">Alumni</a>
</div>
<div class="ui bottom attached tab segment" data-tab="first">
 <table id="Forum" class="ui celled table" cellspacing="0" width="100%">
      <thead>
          <tr>
          <th>S.No</th>
          <th>Title</th>
          <th>Domain</th>
          <th>Date</th>
          <th>Created By</th>
          <th>Action</th>
          </tr>
     </thead>
   	<tbody>
            <tr>
                <td>1</td>
                <td>Pawanism</td>
                <td>DDDDD</td>
                <td>20/03/2017</td>
                <td>Kiran</td>
                <td><a href="#">View</a> | <a href="#">Delete</a></td>
            </tr>
	</tbody>
      </table>
</div>
<div class="ui bottom attached tab segment" data-tab="second">
   <table class="ui celled table">
      <thead>
          <tr>
          <th>S.No</th>
          <th>User Name</th>
          <th>User ID</th>
          <th>Recent Login</th>
          <th>Action</th>
          </tr>
     </thead>
     <tbody>

     </tbody>
     </table>
</div>
<div class="ui bottom attached tab segment" data-tab="third">
 <table class="ui celled table">
      <thead>
          <tr>
          <th>S.No</th>
          <th>Article Title</th>
          <th>User ID</th>
          <th>Date</th>
          <th>Action</th>
          </tr>
     </thead>
     <tbody>
     	
     </tbody>
     </table>
</div>
<div class="ui bottom attached tab segment" data-tab="fourth">
   <table class="ui celled table">
      <thead>
          <tr>
          <th>S.No</th>
          <th>User Name</th>
          <th>Position Company</th>
          <th>Recent Login</th>
          <th>Action</th>
          </tr>
     </thead>
     <tbody>
     	
     </tbody>
     </table>
 </div>
</div>


<!--<script>
function openCity(evt, elements) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(elements).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
$(document).ready(function() {
    $('#ADminn').DataTable();
} );

</script>
-->
<script>
$('.menu .item').tab();
$('.ui.accordion').accordion();
$('.ui.dropdown').dropdown();
$('#othercliked').click(function(){
	$('#showother').show();
})


</script>