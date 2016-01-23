


<div id='content'>
  <div id='pageheading'>
    <h1>Search</h1>
  </div><!--pageheading-->
  <div id='contentleft'>
    <h2>Search for places to hangout!!</h2>
        <h6>Share your location</h6>
    <?php 
    echo '<div id=\'friendlist\'>';
    include 'friendlist.php';
    echo'</div>';//friend list div
 ?>
    <br>
    <iframe style='display:block;'src="locate.php" frameborder="0"></iframe>


  </div><!--contentleft-->
  <br>
  <div id='contentright'> 

Invite friends to join!
show map here

<h3 id='wait'>Please Wait to Update Your Location</h3>
<h3 id='go'>Ok, location Updated, Thank you!</h3>

  <div id = 'map'></div>
  </div>
</div>

<script>
  wait = document.getElementById('wait');
  go = document.getElementById('go');
  go.style.display = 'none';
  go.style.color='green'; 
  wait.style.color='red';

map = document.getElementById('map');
x=5;

timer = setInterval(function(){
if(x>0){
  x--;
   map.innerHTML =  x;
}else{
  x= ":)"
     map.innerHTML =  x;

}
}, 1000);

// if (x>0) {
//   timer;
// }else{
//   x=0;
// }


setInterval(function(){ 
  go.style.display = 'block';
  wait.style.display='none';
   }, 10000);




</script>

